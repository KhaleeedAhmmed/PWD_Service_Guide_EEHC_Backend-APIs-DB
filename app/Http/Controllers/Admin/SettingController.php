<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Term;
use App\Models\Privacy;
use App\Models\About;
use Illuminate\Http\Request;
use App\Helper\helper;
use App\Models\Contact;
use App\Models\ContactMessage;

class SettingController extends Controller
{

    public function editTerm()
    {
        $item=Term::first();
        return View('admin.settings.terms',compact('item'));
    }

    public function updateTerm(Request $request)
    {

         $request->validate([
            'name_ar'   => 'required|min:3' ,
            'name_en'   => 'required|min:3' ,
           ]);

           $data = [
            'ar' => ['name' => $request->name_ar
                     ],
            'en' => ['name' => $request->name_en
                     ],
        ];

        $item = Term::first();
        $item->update($data);
        return back()->withFlashMessage('Updated');

    }
    public function editPrivacy()
    {
        $item=Privacy::first();
        return View('admin.settings.privacy',compact('item'));
    }

    public function updatePrivacy(Request $request)
    {

         $request->validate([
            'name_ar'   => 'required|min:3' ,
            'name_en'   => 'required|min:3' ,
           ]);

           $data = [
            'ar' => ['name' => $request->name_ar
                     ],
            'en' => ['name' => $request->name_en
                     ],
        ];

        $item = Privacy::first();
        $item->update($data);
        return back()->withFlashMessage('Updated');

    }
    public function editAbout()
    {
        $item=About::first();
        return View('admin.settings.about',compact('item'));
    }

    public function updateAbout(Request $request)
    {

         $request->validate([
            'name_ar'   => 'required|min:3' ,
            'name_en'   => 'required|min:3' ,
           ]);

           $data = [
            'ar' => ['name' => $request->name_ar
                     ],
            'en' => ['name' => $request->name_en
                     ],
        ];

        $item = About::first();
        $item->update($data);
        return back()->withFlashMessage('Updated');

    }
    public function editContact()
    {
        $item=Contact::first();
        return View('admin.settings.contact',compact('item'));
    }

    public function updateContact(Request $request)
    {

        $data = $request->validate([
            'email'   => 'required|email' ,
            'phone1'   => 'required' ,
            'phone2'   => 'nullable' ,
            'phone3'   => 'nullable' ,
           ]);

        $item = Contact::first();
        $item->update($data);
        return back()->withFlashMessage('Updated');

    }

    public function ContactMessage()
    {
        $items=ContactMessage::get();
        return view('admin.contactMessages.index', compact('items'));
    }

}
