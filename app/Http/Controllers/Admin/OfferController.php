<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Offer;
use App\Models\Shop;
use Illuminate\Http\Request;
use App\Traits\FileManagement;

class OfferController extends Controller
{
    use FileManagement;

    public function index()
    {
       $items=Offer::get();
        return view('admin.offers.index', compact('items'));
    }

    public function create()
    {
      $shops = Shop::get();
        return view('admin.offers.create',compact('shops'));
    }

    public function store(Request $request)
    {

         $request->validate([
            'title_ar'   => 'required|min:3|max:191' ,
            'title_en'   => 'required|min:3|max:191' ,
            'content_ar'   => 'required|min:3|max:191' ,
            'content_en'   => 'required|min:3|max:191' ,
            'active'   => 'required' ,
            'season'   => 'required' ,
            'shop'   => 'required' ,
            'logo_image' => ["nullable", "image", "mimes:jpg,jpeg,png", "max:2048"],
            'banner_image' => ["nullable", "image", "mimes:jpg,jpeg,png", "max:2048"],
        ]);

        Offer::create([
            'ar' => ['title' => $request->title_ar,
                     'content' => $request->content_ar
                     ],
            'en' => ['title' => $request->title_en,
                     'content' => $request->content_en
                     ],
            'logo_image' => $this->uploadFile($request, "logo_image", 'Offers'),
            'banner_image' => $this->uploadFile($request, "banner_image", 'Offers'),
            'folder' =>'Offers/dev',
            'active' =>$request->active,
            'season' =>$request->season,
            'shop_id' =>$request->shop,
        ]);

      return redirect(route('admin.offers.index'))->withFlashMessage('added');
    }

    public function edit($id)
    {
        $shops = Shop::get();
        $item=Offer::find($id);
        return view('admin.offers.edit',compact('item','shops'));
    }

    public function update(Request $request, $id)
    {
        $user=Offer::find($id);

        $request->validate([
            'title_ar'   => 'required|min:3|max:191' ,
            'title_en'   => 'required|min:3|max:191' ,
            'content_ar'   => 'required|min:3|max:191' ,
            'content_en'   => 'required|min:3|max:191' ,
            'active'   => '' ,
            'season'   => 'required' ,
            'shop'   => 'required' ,
            'logo_image' => ["nullable", "image", "mimes:jpg,jpeg,png", "max:2048"],
            'banner_image' => ["nullable", "image", "mimes:jpg,jpeg,png", "max:2048"],
        ]);

        $data = [
            'ar' => ['title' => $request->title_ar,
                     'content' => $request->content_ar
                     ],
            'en' => ['title' => $request->title_en,
                     'content' => $request->content_en
                     ],
            'folder' =>'Offers/dev',
            'season' =>$request->season,
            'shop_id' =>$request->shop,
        ];

        if($request->active == null){
            $data['active'] = 0;
        }
        if($request->logo_image != null){
            $data['logo_image'] =$this->uploadFile($request, "logo_image", 'Offers');
        }
        if($request->banner_image != null){
            $data['banner_image'] =$this->uploadFile($request, "banner_image", 'Offer');
        }
        $user->update($data);
        return redirect(route('admin.offers.index'))->withFlashMessage('updated');
    }


    public function destroy($id)
    {
        $user = Offer::find($id);
        $user->delete();
     return redirect(route('admin.offers.index'))->withFlashMessage('deleted');
    }

    }
