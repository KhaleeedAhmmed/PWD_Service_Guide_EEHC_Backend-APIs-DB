<?php

namespace App\Http\Controllers\Admin;

use App\helpers\Helper;
use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Notification;
use Illuminate\Http\Request;
use App\Traits\FileManagement;

class NotificationController extends Controller
{
    use FileManagement;

    public function index()
    {
       $items=Notification::get();
        return view('admin.notifications.index', compact('items'));
    }

    public function create()
    {
        $cities= City::get();
        return view('admin.notifications.create',compact('cities'));
    }

    public function store(Request $request)
    {

        $data = $request->validate([
            'title'   => 'required|min:3|max:191' ,
            'description'   => 'required|min:3|max:191' ,
            'city'   => 'required' ,
            'img' => ["required", "image", "mimes:jpg,jpeg,png", "max:2048"],
        ]);

        $data['img'] = $this->uploadFile($request, "img", 'Notifications');

      Notification::create($data);
      Helper::pushNotification($data['title'],$data['description']);

      return redirect(route('admin.notifications.index'))->withFlashMessage('added');
    }


    public function destroy($id)
    {
        $user = Notification::find($id);
        $user->delete();
     return redirect(route('admin.notifications.index'))->withFlashMessage('deleted');
    }

    }
