<?php

namespace App\Http\Controllers\APIs;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Resources\User\UserAddressResource;
use App\Http\Resources\User\UserLoginResource;
use App\Http\Resources\User\UserProfileResource;
use App\Http\Resources\User\UserSocialLoginResource;
use App\Models\User;
use App\Models\UserAddress;
use App\Models\UserSocial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Traits\FileManagement;
use Illuminate\Support\Facades\Password;
use Illuminate\Validation\Rules\Password as PasswordRules;
use Illuminate\Support\Str;

/**
 * @group User Management
 *
 * <aside class="notice">Author Fahmi Moustafa</aside>
 * APIs for managing Users
 */
class UserController extends Controller
{
    use FileManagement;
    /**
     * Login user.
     *
     * an API which Offers a mean to login a user
     * @unauthenticated
     * @header Api-Version v1
     * @header Api-Locale ar
     */
    public function login(LoginRequest $request)
    {
        if ($request->validator->fails()) {
            return response()->error(array($request->validator->errors()), trans("api/user.check_inputs"), 422);
        }
        $request->authenticate();
        $user = $request->user();
        // if ($user->hasVerifiedEmail()) {
        //     return response()->success(array(new UserLoginResource($user)), trans("api/user.user_found"));
        // } else {
        //     $user->sendEmailVerificationNotification();
        //     $data = array([
        //         "verify" => trans("api/user.error_verification_required"),
        //         "access_token" => $user->access_token
        //     ]);
        //     return response()->success($data, trans("api/user.error_verification_required"));
        // }
        return response()->success(array(new UserLoginResource($user)), trans("api/user.user_found"));
    }
    /**
     * Login user by Social.
     *
     * an API which Offers a mean to login a user by social media
     * @unauthenticated
     * @header Api-Version v1
     * @header Api-Locale ar
     * @bodyParam first_name string required user first name. Example: Fahmi
     * @bodyParam last_name string required user last name. Example: Moustafa
     * @bodyParam email string required the user Email address.Example: user@company.com
     * @bodyParam image string image url. Example: http://google.com/profile/avatar.png
     * @bodyParam social_UUID string social UUID. Example: Us20er20
     * @bodyParam logged_by integer required 1 google | 2 facebook. Example: 1
     * @bodyParam UUID string user UUID for FireBase Notifications. Example: dsf6sd5g5ds6g56sd5g6sd5g6s6a5d6
     */
    public function socialLogin(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "first_name" => ["required", "string", "max:60"],
            "last_name" => ["required", "string", "max:60"],
            "email" => ["required", "email:rfc,filter"],
            "image" => ["nullable", "url"],
            "social_UUID" => ["required", "string"],
            "UUID" => ["nullable", "string"],
            "logged_by" => ["required", "integer", "in:1,2"],
        ]);
        if ($validator->fails()) {
            return response()->error(array($validator->errors()), trans("api/user.check_inputs"), 422);
        }
        $userHasSocial = UserSocial::with('user')->where("UUID", $request->social_UUID)->where("email", $request->email)->where("logged_by", $request->logged_by)->first();
        if ($userHasSocial != null) {
            return response()->success(array(new UserSocialLoginResource($userHasSocial)), trans("api/user.logged_by_social_successfully"));
        }
        $userHasAccount = User::where("email", $request->email)->first();
        if ($userHasAccount == null) {
            $folder = $this->uniqueDirName("Users");
            $userHasAccount = User::create([
                "first_name" => $request->first_name,
                "last_name" => $request->last_name,
                "email" => $request->email,
                "gender" => $request->filled("gender") ? $request->gender : null,
                "folder" => $folder,
                "UUID" => $request->filled("UUID") ? $request->UUID : null,
                "access_token" => "",
                "password" => Str::random(10),
            ]);
            if ($userHasAccount->wasRecentlyCreated) {
                $userHasAccount->access_token = $userHasAccount->createToken("Basmety", ["user"])->plainTextToken;
                $userHasAccount->save();
                $userHasAccount->markEmailAsVerified();
            } else {
                $error = array(["failed" => [trans("api/user.failed_operation")]]);
                return response()->error($error, trans("api/user.failed_to_register_log_by_social"));
            }
        }
        $newSocialUser = UserSocial::create([
            "first_name" => $request->first_name,
            "last_name" => $request->last_name,
            "email" => $request->email,
            "image" => $request->filled('image') ? $request->image : null,
            "UUID" => $request->social_UUID,
            "logged_by" => $request->logged_by,
            "user_id" => $userHasAccount->id,
        ]);
        if ($newSocialUser->wasRecentlyCreated) {
            return response()->success(array(new UserSocialLoginResource($newSocialUser)), trans("api/user.logged_by_social_successfully"));
        } else {
            $error = array(["failed" => [trans("api/user.failed_operation")]]);
            return response()->error($error, trans("api/user.failed_to_log_by_social"));
        }
    }
    /**
     * Send Email Verification.
     *
     * an API which Offers a mean to send verification link to user email if not verified.
     * @authenticated
     * @header Api-Version v1
     * @header Api-Locale ar
     */
    public function sendAccountVerifyLink(Request $request)
    {
        if ($request->user()->hasVerifiedEmail()) {
            $data = array([
                "verified" => [trans("api/user.email_verified")]
            ]);
            return response()->success($data, trans("api/user.email_verified"));
        }
        $request->user()->sendEmailVerificationNotification();
        $data = array([
            "verifing" => [trans("api/user.email_verifiedng_processing")]
        ]);
        return response()->success($data, trans("api/user.email_verifiedng_processing"));
    }
    /**
     * Forget Password user.
     *
     * an API which Offers a mean to request reset password for logged out users.
     * @unauthenticated
     * @header Api-Version v1
     * @header Api-Locale ar
     * @bodyParam email string required user E-Mail Address. Example: user@gmail.com
     */
    public function forget(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "email" => ["required", "email:rfc,filter"],
        ]);
        if ($validator->fails()) {
            return response()->error(array($validator->errors()), trans("api/user.check_inputs"), 422);
        }
        $status = Password::sendResetLink(array("email" => $request->email));
        if ($status == Password::RESET_LINK_SENT) {
            $data = array([
                "forget" => [trans("api/user.reset_password_link_sent")]
            ]);
            return response()->success($data, trans("api/user.reset_password_link_sent"));
        }
        if ($status == Password::RESET_THROTTLED) {
            $data = array([
                "blocked" => [trans("api/user.too_many_attempts_to_reset_password")]
            ]);
            return response()->success($data, trans("api/user.too_many_attempts_to_reset_password"));
        }
    }
    /**
     * Change Password user.
     *
     * an API which Offers a mean to reset password for logged in users.
     * @authenticated
     * @header Api-Version v1
     * @header Api-Locale ar
     * @bodyParam old_password string required length [8:20] must have 1 number 1 Capital Letter 1 Small Letter The user old password. Example: User2020
     * @bodyParam password string required length [8:20] must have 1 number 1 Capital Letter 1 Small Letter The user new password. Example: Us20er20
     * @bodyParam password_confirmation string required length [8:20] must have 1 number 1 Capital Letter 1 Small Letter The user new password confirmation. Example: Us20er20
     */
    public function changePassword(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "old_password" => ["required", PasswordRules::min(8)->mixedCase()->numbers()->uncompromised()],
            "password" => ["required", "confirmed", PasswordRules::min(8)->mixedCase()->numbers()->uncompromised()],
        ]);
        if ($validator->fails()) {
            return response()->error(array($validator->errors()), trans("api/user.check_inputs"), 422);
        }
        $user = $request->user();
        if (Hash::check($request->old_password, $user->password)) {
            if (Hash::check($request->password, $user->password)) {
                $error = array(["password" => [trans("api/user.error_same_old_password")]]);
                return response()->error($error, trans("api/user.error_same_old_password"));
            } else {
                $user->tokens()->delete();
                $user->access_token = $user->createToken("Basmety", ["user"])->plainTextToken;
                $user->password = Hash::make($request->password);
                $user->save();
                $data = array([
                    "access_token" => $user->access_token,
                ]);
                return response()->success($data, trans("api/user.password_reset_successfully"));
            }
        } else {
            $error = array(["password" => [trans("api/user.error_wrong_old_password")]]);
            return response()->error($error, trans("api/user.error_wrong_old_password"));
        }
    }
    /**
     * Register user.
     *
     * an API which Offers a mean to register a user.
     * @unauthenticated
     * @header Api-Version v1
     * @header Api-Locale ar
     * @bodyParam first_name string required user first name. Example: Fahmi
     * @bodyParam last_name string required user last name. Example: Moustafa
     * @bodyParam email string required the user Email address.Example: user@company.com
     * @bodyParam gender int in [1:2] 1 Male 2 Female. Example: 1
     * @bodyParam password string required length [8:20] user password must have 1 number 1 Capital Letter 1 Small Letter. Example: Us20er20
     * @bodyParam password_confirmation string required length [8:20] user password must have 1 number 1 Capital Letter 1 Small Letter. Example: Us20er20
     * @bodyParam UUID string user UUID for FireBase Notifications. Example: dsf6sd5g5ds6g56sd5g6sd5g6s6a5d6
     */
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "name" => ["required", "string", "max:60"],
            "phone" => ["required", "string", "max:60"],
            "email" => ["required", "email:rfc,filter", "unique:users,email"],
            "password" => ["required", "confirmed", PasswordRules::min(8)],
            "UUID" => ["nullable", "string"],
        ]);
        if ($validator->fails()) {
            return response()->error(array($validator->errors()), trans("api/user.check_inputs"), 422);
        }
        $folder = $this->uniqueDirName("Users");
        $user = User::create([
            "name" => $request->name,
            "phone" => $request->phone,
            "email" => $request->email,
            "password" => Hash::make($request->password),
            "access_token" => "",
            "UUID" => $request->filled("UUID") ? $request->UUID : null,
        ]);
        if ($user->wasRecentlyCreated) {
            $user->access_token = $user->createToken("khraba", ["user"])->plainTextToken;
            // $user->assignRole("user");
            $user->save();
           // $user->sendEmailVerificationNotification();
            return response()->success(array(new UserLoginResource($user)), trans("api/user.registered_successfully"));
        } else {
            $error = array(["failed" => [trans("api/user.failed_operation")]]);
            return response()->error($error, trans("api/user.failed_to_register"));
        }
    }
    /**
     * Edit user profile.
     *
     * an API which Offers a mean to edit user profile.
     * @authenticated
     * @header Api-Version v1
     * @header Api-Locale ar
     * @bodyParam first_name string length [1:60] user first name. Example: Ali
     * @bodyParam last_name string length [1:60] user last name. Example: Basem
     * @bodyParam gender int in [1:2] 1 Male 2 Female. Example: 1
     */
    public function edit(Request $request)
    {
        $user = $request->user();
        $validator = Validator::make($request->all(), [
            "first_name" => ["nullable", "string", "max:60"],
            "last_name" => ["nullable", "string", "max:60"],
            "gender" => ["nullable", "integer", "in:1,2"],
        ]);
        if ($validator->fails()) {
            return response()->error(array($validator->errors()), trans("api/user.check_inputs"), 422);
        }
        $updated = $user->update([
            "first_name" => $request->filled("first_name") ? $request->first_name : $user->first_name ?? null,
            "last_name" => $request->filled("last_name") ? $request->last_name : $user->last_name ?? null,
            "gender" => $request->filled("gender") ? $request->gender : $user->gender ?? null,
        ]);
        if ($updated) {
            return response()->success(array(new UserProfileResource($user)), trans("api/user.profile_updated_successfully"));
        } else {
            $error =  array(["failed" => [trans("api/user.failed_operation")]]);
            return response()->error($error, trans("api/user.profile_updating_failed"));
        }
    }
    /**
     * Store or Edit Profile Image.
     *
     * an API which Offers a mean to user profile image.
     * @authenticated
     * @header Api-Version v1
     * @header Api-Locale ar
     * @bodyParam image file required max size 2MB | MIMES jpg,jpeg,png user profile image.
     */
    public function userProfileImage(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "image" => ["required", "image", "mimes:jpg,jpeg,png", "max:2048"],
        ]);
        if ($validator->fails()) {
            return response()->error(array($validator->errors()), trans("api/user.check_inputs"), 422);
        }
        $user = $request->user();
        if ($user->image != null)
            $this->deleteFile($user->folder . "/" . $user->image);
        $updated = $user->update([
            "image" => $this->uploadFile($request, "image", $user->folder),
        ]);
        if ($updated) {
            return response()->success(array(new UserProfileResource($user)), trans("api/user.profile_image_updated_successfully"));
        } else {
            $error =  array(["failed" => [trans("api/user.failed_operation")]]);
            return response()->error($error, trans("api/user.profile_image_updating_failed"));
        }
    }
    /**
     * Store Address Data.
     *
     * an API which Offers a mean to Store Address Data.
     * @authenticated
     * @header Api-Version v1
     * @header Api-Locale ar
     * @bodyParam address string required user address. Example: 22 12 325 snew Mosko Rusia
     * @bodyParam longitude number required user address longitude value. Example: 42.15254633
     * @bodyParam latitude number required user address latitude value. Example: 37.15254633
     * @bodyParam street string required user address. Example: snew
     * @bodyParam building string user address. Example: 325
     * @bodyParam floor string user address. Example: 12
     * @bodyParam apartment string user address. Example: 22
     * @bodyParam mobile_field string required length UAE mobile number. Example: 554147429
     */
    public function storeAddress(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "address" => ["required", "string"],
            "longitude" => ["required", "numeric"],
            "latitude" => ["required", "numeric"],
            "street" => ["required", "string"],
            "building" => ["nullable", "string"],
            "floor" => ["nullable", "string"],
            "apartment" => ["nullable", "string"],
            "mobile_field" => ["required", "phone:AE,mobile"],
        ]);
        if ($validator->fails()) {
            return response()->error(array($validator->errors()), trans("api/user.check_inputs"), 422);
        }
        $newaddress = UserAddress::create([
            "address" => $request->address,
            "longitude" => $request->longitude,
            "latitude" => $request->latitude,
            "street" => $request->street,
            "building" => $request->building,
            "floor" => $request->floor,
            "apartment" => $request->apartment,
            "mobile" => $request->mobile_field,
            "user_id" => $request->user()->id,
        ]);
        if ($newaddress->wasRecentlyCreated) {
            return response()->success(array(new UserAddressResource($newaddress)), trans("api/user.address_created_successfully"));
        } else {
            $error =  array(["failed" => [trans("api/user.failed_operation")]]);
            return response()->error($error, trans("api/user.creating_address_failed"));
        }
    }
    /**
     * Edit Address Data.
     *
     * an API which Offers a mean to Edit Address Data.
     * @authenticated
     * @header Api-Version v1
     * @header Api-Locale ar
     * @bodyParam address_id int required user address id. Example: 1
     * @bodyParam longitude number required user address longitude value. Example: 42.15254633
     * @bodyParam latitude number required user address latitude value. Example: 37.15254633
     * @bodyParam address string required user address. Example: 22 12 325 snew Mosko Rusia
     * @bodyParam street string required user address. Example: snew
     * @bodyParam building string user address. Example: 325
     * @bodyParam floor string user address. Example: 12
     * @bodyParam apartment string user address. Example: 22
     * @bodyParam mobile_field string required length UAE mobile number. Example: 554147429
     */
    public function editAddress(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "address_id" => ["required", "exists:user_addresses,id"],
            "address" => ["required", "string"],
            "longitude" => ["required", "numeric"],
            "latitude" => ["required", "numeric"],
            "street" => ["required", "string"],
            "building" => ["nullable", "string"],
            "floor" => ["nullable", "string"],
            "apartment" => ["nullable", "string"],
            "mobile_field" => ["required", "phone:AE,mobile"],
        ]);
        if ($validator->fails()) {
            return response()->error(array($validator->errors()), trans("api/user.check_inputs"), 422);
        }
        $newaddress = UserAddress::where("user_id", $request->user()->id)->where("id", $request->address_id)->first();
        if ($newaddress != null) {
            $updated = $newaddress->update([
                "address" => $request->address,
                "longitude" => $request->longitude,
                "latitude" => $request->latitude,
                "street" => $request->street,
                "building" => $request->filled("building") ? $request->building : $newaddress->building ?? null,
                "floor" => $request->filled("floor") ? $request->floor : $newaddress->floor ?? null,
                "apartment" => $request->filled("apartment") ? $request->apartment : $newaddress->apartment ?? null,
                "mobile" => $request->mobile_field,
            ]);
            if ($updated) {
                return response()->success(array(new UserAddressResource($newaddress)), trans("api/user.address_updated_successfully"));
            } else {
                $error =  array(["failed" => [trans("api/user.failed_operation")]]);
                return response()->error($error, trans("api/user.updating_address_failed"));
            }
        } else {
            $error =  array(["failed" => [trans("api/user.failed_operation")]]);
            return response()->error($error, trans("api/user.address_no_found"));
        }
    }
    /**
     * Delete Address Data.
     *
     * an API which Offers a mean to Delete Address Data.
     * @authenticated
     * @header Api-Version v1
     * @header Api-Locale ar
     * @bodyParam address_id int required user address id. Example: 1
     */
    public function deleteAddress(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "address_id" => ["required", "exists:user_addresses,id"],
        ]);
        if ($validator->fails()) {
            return response()->error(array($validator->errors()), trans("api/user.check_inputs"), 422);
        }
        $address = UserAddress::where("user_id", $request->user()->id)->where("id", $request->address_id)->first();
        if ($address != null) {
            if ($address->delete()) {
                $data =  array(["success" => [trans("api/user.success_operation")]]);
                return response()->success($data, trans("api/user.address_deleted_successfully"));
            } else {
                $error =  array(["failed" => [trans("api/user.failed_operation")]]);
                return response()->error($error, trans("api/user.deleting_address_failed"));
            }
        } else {
            $error =  array(["failed" => [trans("api/user.failed_operation")]]);
            return response()->error($error, trans("api/user.address_no_found"));
        }
    }
    /**
     * List All Addresses Data.
     *
     * an API which Offers a mean to List All Addresses Data.
     * @authenticated
     * @header Api-Version v1
     * @header Api-Locale ar
     * @queryParam items integer (optional) items per page.Example: 10
     * @queryParam page integer (optional) number of desired page.Example: 1
     */
    public function allAddresses(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'items' => ['sometimes', 'integer'],
            'page' => ['sometimes', 'integer'],
        ]);
        if ($validator->fails()) {
            return response()->error(array($validator->errors()), trans("api/favourites.check_inputs"), 422);
        }
        $user = $request->user()->load("addresses");
        if ($user->addresses->isNotEmpty()) {
            $items = $request->filled('items') ? $request->items : self::perPage;
            $paginated = $user->addresses->paginate($items);
            $data = [
                'addresses' => UserAddressResource::collection($paginated),
                'pages_count' => $paginated->lastPage(),
                'current_page' => $paginated->currentPage(),
            ];
            return response()->success($data, trans("api/user.addresses_found_successfully"));
        } else {
            $data = [
                'addresses' => array(),
                'pages_count' => 0,
                'current_page' => 0,
            ];
            return response()->success($data, trans("api/user.addresses_not_found"));
        }
    }
    /**
     * Logout user.
     *
     * an API which Offers a mean to logout a user.
     * @authenticated
     * @header Api-Version v1
     * @header Api-Locale ar
     */
    public function logout(Request $request)
    {
        $user = $request->user();
        $user->tokens()->delete();
        $user->access_token = $user->createToken("Basmety", ["user"])->plainTextToken;
        $user->save();
        $data = array(["success" => [trans("api/user.successfull_operation")],]);
        return response()->success($data, trans("api/user.logged_out"));
    }
    /**
     * User Profile.
     *
     * an API which Offers a mean to view user data (profile).
     * @authenticated
     * @header Api-Version v1
     * @header Api-Locale ar
     */
    public function profile(Request $request)
    {
        return response()->success(array(new UserProfileResource($request->user())), trans("api/user.user_found"));
    }
}
