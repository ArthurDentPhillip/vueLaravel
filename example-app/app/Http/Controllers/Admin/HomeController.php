<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\Order;
class HomeController extends Controller
{
    public function index(){

        $posts_count = Post::all()->count();
        $categories_count = Category::all()->count();
        $orders_count = Order::all()->count();

        return view('admin.home.index', [
            'posts_count' => $posts_count,
            'categories_count' => $categories_count,
            'orders_count' => $orders_count,
        ]);
    }
}
