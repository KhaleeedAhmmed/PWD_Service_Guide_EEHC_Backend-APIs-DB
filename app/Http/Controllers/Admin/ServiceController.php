<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CategoryService;
use App\Models\Service;
use App\Models\Shop;
use Illuminate\Http\Request;
use App\Traits\FileManagement;

class ServiceController extends Controller
{
    use FileManagement;

    public function index()
    {
       $items=Service::get();
        return view('admin.services.index', compact('items'));
    }

    public function create()
    {
        $shops=Shop::get();
        return view('admin.services.create', compact('shops'));
    }

    public function store(Request $request)
    {

         $request->validate([
            'name_ar'   => 'required|min:3|max:191' ,
            'name_en'   => 'required|min:3|max:191' ,
            'desc_ar'   => 'required|min:3|max:191' ,
            'desc_en'   => 'required|min:3|max:191' ,
            'old_price'   => 'nullable|min:3|max:191' ,
            'new_price'   => 'required|min:3|max:191' ,
            'category_service'   => 'required' ,
            'image' => ["nullable", "image", "mimes:jpg,jpeg,png", "max:2048"],
        ]);

   //    dd($request->all());
      Service::create([
            'ar' => ['name' => $request->name_ar,
                     'description' => $request->desc_ar
                     ],
            'en' => ['name' => $request->name_en,
                     'description' => $request->desc_en
                     ],
            'image' => $this->uploadFile($request, "image", 'Services'),
            'category_service_id' =>$request->category_service,
            'old_price' =>$request->old_price,
            'new_price' =>$request->new_price,
        ]);

      return redirect(route('admin.services.index'))->withFlashMessage('added');
    }

    public function edit($id)
    {
        $item=Service::find($id);
        $shops=Shop::get();
        return view('admin.services.edit',compact('item','shops'));
    }

    public function update(Request $request, $id)
    {
        $user=Service::find($id);
        $request->validate([
            'name_ar'   => 'required|min:3|max:191' ,
            'name_en'   => 'required|min:3|max:191' ,
            'desc_ar'   => 'required|min:3|max:191' ,
            'desc_en'   => 'required|min:3|max:191' ,
            'old_price'   => 'nullable|min:3|max:191' ,
            'new_price'   => 'required|min:3|max:191' ,
            'category_service'   => 'required' ,
            'image' => ["nullable", "image", "mimes:jpg,jpeg,png", "max:2048"],
        ]);

        $data = [
            'ar' => ['name' => $request->name_ar,
            'description' => $request->desc_ar
                        ],
            'en' => ['name' => $request->name_en,
                        'description' => $request->desc_en
                        ],
            'image' => $this->uploadFile($request, "image", 'Services'),
            'category_service_id' =>$request->category_service,
            'old_price' =>$request->old_price,
            'new_price' =>$request->new_price,
        ];

        if($request->image != null){
            $data['image'] =$this->uploadFile($request, "image", 'Services');
        }
        $user->update($data);
        return redirect(route('admin.services.index'))->withFlashMessage('updated');
    }


    public function destroy($id)
    {
        $service = Service::find($id);
        $service->delete();
     return redirect(route('admin.services.index'))->withFlashMessage('deleted');
    }

    public function categoryAjax($id)
    {
        $categoryService = CategoryService::where('shop_id',$id)->get();
        return json_encode($categoryService);

    }
    }
