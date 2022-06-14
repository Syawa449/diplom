<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    public function create(ContactRequest $req)
    {
        $contact = new contact();
        $contact->user_id = Auth::id();
        $contact->name = $req->input('name');
        $contact->email = $req->input('email');
        $contact->subject = $req->input('subject');
        $contact->info = $req->input('info');



        $contact->save();
        return redirect()->route('magazin/contact-us')->with('success', 'Сообщение было добавлено');
    }
    public function showByUser() {
        $contact = new Contact;
        $data = [];
        $user_id = Auth::user()->id;
        $data = $contact->where('user_id', '=', $user_id)->get();

        
        return view('magazin/contact-us', ['data' => $data ]);
    }


    public function view()
    { 
        $data = Contact::all();
        return view('magazin/contact-us')->with('data',$data);
    }

    public function admin()
    { 
        $data = Contact::all();
        return view('magazin/test',['data' => $data ]);
    }
}
