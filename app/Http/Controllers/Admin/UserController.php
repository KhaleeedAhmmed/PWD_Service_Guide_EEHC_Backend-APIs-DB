<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User as Model;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        $items=Model::where('type', '0')->get();
        return view('admin.users.index',compact('items'));
    }

    public function ban($id){

     $user= Model::find($id);
     $user->ban = 1;
     $user->update();
     return redirect(route('users'))->withFlashMessage('Banned');
    }

    public function unban($id){

     $user= Model::find($id);
     $user->ban = 0;
     $user->update();
     return redirect(route('users'))->withFlashMessage('Un Banned');
    }
}
