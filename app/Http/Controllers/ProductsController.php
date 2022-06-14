<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(){
        $products = Products::orderBy('created_at')->take(6)->get();

        return view('magazin/index',['products'=> $products]);
    }


    public function productsdetails(){
        $products = Products::orderBy('created_at')->take(1)->get();

        return view('magazin/product-details',['products'=> $products]);
    }
    
        public function shop(){
            $products = Products::orderBy('created_at')->take(12)->get();
    
            return view('magazin/shop',['products'=> $products]);
        }

    public function createe(ContactRequest $products)
    {
        $contact = new Products();
        $contact->img = $products->file('img')->storeAs('img', $products->file('img')->getClientOriginalName());
        $contact->title = $products->input('title');
        $contact->cost = $products->input('cost');
        $contact->instock = $products->input('instock');
        $contact->instockboolean = $products->input('instockboolean');
        $contact->brand = $products->input('brand');
        $contact->condition = $products->input('condition');





        $contact->save();
        return redirect()->route('magazin/index', ['products'=> $products])->with('success', 'Сообщение было добавлено');
    }
}
