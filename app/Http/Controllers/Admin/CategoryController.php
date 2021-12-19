<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Traits\FileManagement;

class CategoryController extends Controller
{
    use FileManagement;

    public function index()
    {
       $items=Category::get();
        return view('admin.categories.index', compact('items'));
    }

    public function create()
    {

        return view('admin.categories.create');
    }

    public function store(Request $request)
    {

         $request->validate([
            'name_ar'   => 'required|min:3|max:191' ,
            'name_en'   => 'required|min:3|max:191' ,
            'desc_ar'   => 'required|min:3|max:191' ,
            'desc_en'   => 'required|min:3|max:191' ,
            'icon' => ["nullable", "image", "mimes:jpg,jpeg,png", "max:2048"],
        ]);

   //    dd($request->all());
        Category::create([
            'ar' => ['name' => $request->name_ar,
                     'description' => $request->desc_ar
                     ],
            'en' => ['name' => $request->name_en,
                     'description' => $request->desc_en
                     ],
            'icon' => $this->uploadFile($request, "icon", 'Categories'),
            'creator_id' =>auth()->user()->id,
        ]);

      return redirect(route('admin.categories.index'))->withFlashMessage('added');
    }

    public function edit($id)
    {
        $item=Category::find($id);
        return view('admin.categories.edit',compact('item'));
    }

    public function update(Request $request, $id)
    {
        $user=Category::find($id);

        $request->validate([
            'name_ar'   => 'required|min:3|max:191' ,
            'name_en'   => 'required|min:3|max:191' ,
            'desc_ar'   => 'required|min:3|max:191' ,
            'desc_en'   => 'required|min:3|max:191' ,
            'icon' => ["nullable", "image", "mimes:jpg,jpeg,png", "max:2048"],
        ]);

        $data = [
           'ar' => ['name' => $request->name_ar,
                    'description' => $request->desc_ar
                    ],
            'en' => ['name' => $request->name_en,
                     'description' => $request->desc_en
                    ],
        ];

        if($request->icon != null){
            $data['icon'] =$this->uploadFile($request, "icon", 'Categories');
        }
        $user->update($data);
        return redirect(route('admin.categories.index'))->withFlashMessage('updated');
    }


    public function destroy($id)
    {
        $user = Category::find($id);
        $user->delete();
     return redirect(route('admin.categories.index'))->withFlashMessage('deleted');
    }

    }
