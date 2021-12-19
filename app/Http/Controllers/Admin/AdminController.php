<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class AdminController extends Controller
{
    public function index()
    {
       $items=User::where('type', 1)->get();
        return view('admin.admins.index', compact('items'));
    }

    public function create()
    {

        return view('admin.admins.create');
    }

    public function store(Request $request)
    {

        $data = $request->validate([
            'first_name'   => 'required|min:3|max:191' ,
            'last_name'   => 'required|min:3|max:191' ,
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);
        $data['password']= Hash::make($data['password']);

        $data['type'] = 1;
        User::create($data);

      return redirect(route('admin.admins.index'))->withFlashMessage('added');
    }

    public function edit($id)
    {
        $item=User::find($id);
        return view('admin.admins.edit',compact('item'));
    }

    public function update(Request $request, $id)
    {
        $user=User::find($id);

        $data = $request->validate([
            'first_name'   => 'required|min:3|max:191' ,
            'last_name'   => 'required|min:3|max:191' ,
            'email'   => 'required|string|email|max:255|unique:users,email,'.$user->id ,
            'password' => 'required|string|min:8|confirmed',

        ]);
        $data['password']= Hash::make($data['password']);

        $user->update($data);
        return redirect(route('admin.admins.index'))->withFlashMessage('updated');
    }


    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
     return redirect(route('admin.admins.index'))->withFlashMessage('deleted');
    }

    }
