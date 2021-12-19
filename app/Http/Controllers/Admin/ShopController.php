<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\City;
use App\Models\Shop;
use App\Models\Social;
use Illuminate\Http\Request;
use App\Traits\FileManagement;

class ShopController extends Controller
{
    use FileManagement;

    public function index()
    {
       $items=Shop::get();
        return view('admin.shops.index', compact('items'));
    }

    public function create()
    {
        $categories = Category::get();
        $cities = City::get();
        return view('admin.shops.create', compact('categories','cities'));
    }

    public function store(Request $request)
    {

         $request->validate([
            'name_ar'   => 'required|min:3|max:191' ,
            'name_en'   => 'required|min:3|max:191' ,
            'desc_ar'   => 'required|min:3|max:500' ,
            'desc_en'   => 'required|min:3|max:500' ,
            'categories'   => 'required|min:1|max:20' ,
            'cities'   => 'required|min:1|max:20' ,
            'contacts.address'   => 'required' ,
         //   'social.*.icon'   => ["required", "image", "mimes:jpg,jpeg,png,svg", "max:2048"] ,
         //   'social.*.*'   => 'required' ,
            'logo_image' => ["nullable", "image", "mimes:jpg,jpeg,png,svg", "max:2048"],
        ]);


      $shop= Shop::create([
            'ar' => ['name' => $request->name_ar,
                     'description' => $request->desc_ar
                     ],
            'en' => ['name' => $request->name_en,
                     'description' => $request->desc_en
                     ],

            'logo_image' => $this->uploadFile($request, "logo_image", 'Shops'),
            'provider_id' =>auth()->user()->id,
            'city_id' =>$request->cities,
            'category_id' =>$request->categories,
            'folder' =>'Shops/dev',
        ]);
    if ($request->social != null) {
        foreach ($request->social as $social) {
            $shop->socials()->create([
            'name' => $social['name'],
            'link' => $social['link'],
            'icon' => $social['name'].'.png',
        ]);
        }
    }
     foreach($request->shopImages as $image){
        $shop->shopImages()->create([
            'img' => $this->uploadImage($image, "img", 'Shops'),
        ]);
     }

      if ($request->sat_check != null) {
          $hours['sat_from'] = $request->workingHours['sat_from'];
          $hours['sat_to'] = $request->workingHours['sat_to'];
      }
      if ($request->sun_check != null) {
          $hours['sun_from'] = $request->workingHours['sun_from'];
          $hours['sun_to'] = $request->workingHours['sun_to'];
      }
      if ($request->mon_check != null) {
          $hours['mon_from'] = $request->workingHours['mon_from'];
          $hours['mon_to'] = $request->workingHours['mon_to'];
      }
      if ($request->tus_check != null) {
          $hours['tus_from'] = $request->workingHours['tus_from'];
          $hours['tus_to'] = $request->workingHours['tus_to'];
      }
      if ($request->wed_check != null) {
          $hours['wed_from'] = $request->workingHours['wed_from'];
          $hours['wed_to'] = $request->workingHours['wed_to'];
      }
      if ($request->thu_check != null) {
          $hours['thu_from'] = $request->workingHours['thu_from'];
          $hours['thu_to'] = $request->workingHours['thu_to'];
      }
      if ($request->fri_check != null) {
          $hours['fri_from'] = $request->workingHours['fri_from'];
          $hours['fri_to'] = $request->workingHours['fri_to'];
      }
        $shop->workingHours()->create($hours);
        $shop->contact()->create($request->contacts);

      return redirect(route('admin.shops.index'))->withFlashMessage('added');
    }

    public function edit($id)
    {
        $item=Shop::find($id);
       // dd($item->socials);
        $categories = Category::get();
        $cities = City::get();
        return view('admin.shops.edit',compact('item','categories','cities'));
    }

    public function update(Request $request, $id)
    {
        $shop=Shop::find($id);

        $request->validate([
            'name_ar'   => 'required|min:3|max:191' ,
            'name_en'   => 'required|min:3|max:191' ,
            'desc_ar'   => 'required|min:3|max:500' ,
            'desc_en'   => 'required|min:3|max:500' ,
            'categories'   => 'required|min:1|max:20' ,
            'cities'   => 'required|min:1|max:20' ,
            'contacts.address'   => 'required' ,
      //      'social.*.icon'   => ["required", "image", "mimes:jpg,jpeg,png,svg", "max:2048"] ,
        //    'social.*.*'   => 'required' ,
            'logo_image' => ["nullable", "image", "mimes:jpg,jpeg,png,svg", "max:2048"],
        ]);

      $shop->update([
            'ar' => ['name' => $request->name_ar,
                     'description' => $request->desc_ar
                     ],
            'en' => ['name' => $request->name_en,
                     'description' => $request->desc_en
                     ],
            'provider_id' =>auth()->user()->id,
            'city_id' =>$request->cities,
            'category_id' =>$request->categories,
            'folder' =>'Shops/dev',
        ]);
        if ($request->logo_image != null) {
            $shop->update([
                'logo_image' => $this->uploadFile($request, "logo_image", 'Shops'),
            ]);
        }

    if ($request->social != null) {
        foreach ($request->social as $social) {
            if (isset($social['id'])) {
                Social::find($social['id'])->update([
            'name' => $social['name'],
            'link' => $social['link'],
            'icon' => $social['name'].'.png',
        ]);
            } else {
                $shop->socials()->create([
            'name' => $social['name'],
            'link' => $social['link'],
            'icon' => $social['name'].'.png',
        ]);
            }
        }
    }

     if ($request->shopImages != null) {
        $shop->shopImages()->delete();
         foreach ($request->shopImages as $image) {
             $shop->shopImages()->create([
            'img' => $this->uploadImage($image, "img", 'Shops'),
        ]);
         }
     }

      if ($request->sat_check != null) {
          $hours['sat_from'] = $request->workingHours['sat_from'];
          $hours['sat_to'] = $request->workingHours['sat_to'];
      }
      else{
        $hours['sat_from'] = null;
        $hours['sat_to'] = null;
      }
      if ($request->sun_check != null) {
          $hours['sun_from'] = $request->workingHours['sun_from'];
          $hours['sun_to'] = $request->workingHours['sun_to'];
      }
      else{
         $hours['sun_from']= null;
         $hours['sun_to']= null;
      }
      if ($request->mon_check != null) {
          $hours['mon_from'] = $request->workingHours['mon_from'];
          $hours['mon_to'] = $request->workingHours['mon_to'];
      }
      else{
        $hours['mon_from']= null;
        $hours['mon_to']= null;
      }
      if ($request->tus_check != null) {
          $hours['tus_from'] = $request->workingHours['tus_from'];
          $hours['tus_to'] = $request->workingHours['tus_to'];
      }
      else{
        $hours['tus_from']= null;
        $hours['tus_to']= null;
      }
      if ($request->wed_check != null) {
          $hours['wed_from'] = $request->workingHours['wed_from'];
          $hours['wed_to'] = $request->workingHours['wed_to'];
      }
      else{
        $hours['wed_from']= null;
        $hours['wed_to']= null;
      }
      if ($request->thu_check != null) {
          $hours['thu_from'] = $request->workingHours['thu_from'];
          $hours['thu_to'] = $request->workingHours['thu_to'];
      }
      else{
        $hours['thu_from']= null;
        $hours['thu_to']= null;
      }
      if ($request->fri_check != null) {
          $hours['fri_from'] = $request->workingHours['fri_from'];
          $hours['fri_to'] = $request->workingHours['fri_to'];
      }
      else{
        $hours['fri_from'] = null;
        $hours['fri_to'] = null;
      }
        $shop->workingHours()->update($hours);
        $shop->contact()->update($request->contacts);

        return redirect(route('admin.shops.index'))->withFlashMessage('updated');
    }


    public function destroy($id)
    {
        $user = Shop::find($id);
        $user->delete();
     return redirect(route('admin.shops.index'))->withFlashMessage('deleted');
    }

    public function socialAjax($id)
    {
        Social::find($id)->delete();
        return json_encode('Deleted');

    }

    }
