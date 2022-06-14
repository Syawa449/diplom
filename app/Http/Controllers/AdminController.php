<?php

namespace App\Http\Controllers;
use App\Models\Contact;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function deleteMessage($id) {
        Contact::findOrFail($id)->delete();
        $data = [];
        return view('magazin/test', ['data' => $data ])->with('success', 'Сообщение удалено');
    }
}
