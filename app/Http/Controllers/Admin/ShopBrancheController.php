<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\ShopBranche;
use App\Models\Shop;
use Illuminate\Http\Request;
use App\Traits\FileManagement;

class ShopBrancheController extends Controller
{
    use FileManagement;

    public function index()
    {
       $items=ShopBranche::get();
        return view('admin.shopBranches.index', compact('items'));
    }

    public function create()
    {
        $shops= Shop::get();
        $cities= City::get();
        return view('admin.shopBranches.create',compact('shops','cities'));
    }

    public function store(Request $request)
    {

         $request->validate([
            'name_ar'   => 'required|min:3|max:191' ,
            'name_en'   => 'required|min:3|max:191' ,
            'city'   => 'required' ,
            'shop'   => 'required' ,
        ]);
        ShopBranche::create([
            'ar' => ['name' => $request->name_ar
                     ],
            'en' => ['name' => $request->name_en
                     ],
            'shop_id' =>$request->shop,
            'city_id' =>$request->city,
        ]);

      return redirect(route('admin.shopBranches.index'))->withFlashMessage('added');
    }

    public function edit($id)
    {
        $item=ShopBranche::find($id);
        $shops= Shop::get();
        $cities= City::get();
        return view('admin.shopBranches.edit',compact('item','shops','cities'));
    }

    public function update(Request $request, $id)
    {
        $user=ShopBranche::find($id);

        $request->validate([
            'name_ar'   => 'required|min:3|max:191' ,
            'name_en'   => 'required|min:3|max:191' ,
            'city'   => 'required' ,
            'shop'   => 'required' ,
        ]);

        $data = [
            'ar' => ['name' => $request->name_ar
                     ],
            'en' => ['name' => $request->name_en
                     ],
            'shop_id' =>$request->shop,
            'city_id' =>$request->city,
        ];
        $user->update($data);
        return redirect(route('admin.shopBranches.index'))->withFlashMessage('updated');
    }


    public function destroy($id)
    {
        $branche = ShopBranche::find($id);
        $branche->delete();
     return redirect(route('admin.shopBranches.index'))->withFlashMessage('deleted');
    }

    }
