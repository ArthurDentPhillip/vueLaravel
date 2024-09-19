<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Post;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderSuccess;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(){
        $products = Post::get();
        // $email = auth()->user()->email;
        // Mail::to($email)->send(new OrderSuccess);
        $categories = Post::join('categories', 'posts.cat_id', '=', 'categories.id')->where('categories.title', '=', 'Ceramics')->select('posts.*')->get();
        return view('home', [
            'products' => $products,
            'categories' => $categories,
        ]);
    }

    public function store(Request $request)
    {
        $email = $request->emailUser;
        Mail::to($email)->send(new OrderSuccess);
        return redirect()->back();
    }
}
