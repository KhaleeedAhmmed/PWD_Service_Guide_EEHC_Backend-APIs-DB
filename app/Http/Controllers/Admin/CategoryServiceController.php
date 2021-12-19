<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CategoryService;
use App\Models\Shop;
use Illuminate\Http\Request;
use App\Traits\FileManagement;

class CategoryServiceController extends Controller
{
    use FileManagement;

    public function index()
    {
       $items=CategoryService::get();
        return view('admin.categoryServices.index', compact('items'));
    }

    public function create()
    {
        $shops= Shop::get();
        return view('admin.categoryServices.create',compact('shops'));
    }

    public function store(Request $request)
    {

         $request->validate([
            'name_ar'   => 'required|min:3|max:191' ,
            'name_en'   => 'required|min:3|max:191' ,
            'place'   => 'required' ,
            'shop'   => 'required' ,
        ]);
   CategoryService::create([
            'ar' => ['name' => $request->name_ar
                     ],
            'en' => ['name' => $request->name_en
                     ],
            'shop_id' =>$request->shop,
            'place' =>$request->place,
        ]);

      return redirect(route('admin.categoryServices.index'))->withFlashMessage('added');
    }

    public function edit($id)
    {
        $item=CategoryService::find($id);
        $shops= Shop::get();
        return view('admin.categoryServices.edit',compact('item','shops'));
    }

    public function update(Request $request, $id)
    {
        $user=CategoryService::find($id);

        $request->validate([
            'name_ar'   => 'required|min:3|max:191' ,
            'name_en'   => 'required|min:3|max:191' ,
            'place'   => 'required' ,
            'shop'   => 'required' ,
        ]);

        $data = [
            'ar' => ['name' => $request->name_ar
                    ],
            'en' => ['name' => $request->name_en
                    ],
            'shop_id' =>$request->shop,
            'place' =>$request->place,
        ];
        $user->update($data);
        return redirect(route('admin.categoryServices.index'))->withFlashMessage('updated');
    }


    public function destroy($id)
    {
        $user = CategoryService::find($id);
        $user->delete();
     return redirect(route('admin.categoryServices.index'))->withFlashMessage('deleted');
    }

    }
