<?php

namespace App\Http\Controllers\Website;

use App\Models\Product;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('Website.index', compact('products'));
    }

    public function about(){
        return view('Website.about');
    }

    public function solutions(){
        return view('Website.products');
    }

    public function tracking(){
         $products = Product::all();
        return view('Website.tracking',compact('products'));
    }

    public function payment(){
        return view('Website.payment');
    }

    public function contact(){
        return view('Website.contact');
    }
    public function mail(){
        return view('email.renew_mail');
    }
    public function sendContact(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:20',
            'message' => 'nullable|string',
        ]);

        $data = $request->only(['name','phone', 'email', 'message']);

        Mail::to('vanguardsmtp@gmail.com')->send(new ContactMail($data));

        return back()->with('success', 'Your message has been sent!');
    }
}
