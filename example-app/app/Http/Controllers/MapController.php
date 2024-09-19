<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Basket;
use App\Models\Order;

class MapController extends Controller
{
    public function index(){
        // if(!empty($_COOKIE['username'])){
        //     dd($_COOKIE['username']);
        //     setcookie ('username', '', time() - 3600);
        // }
                
        if(!empty($_COOKIE['username'])){
            $name = '';
            $baskets = Basket::get();
            foreach($baskets as $basket){
                $name = $name.$basket->post->title . '.Количество - '.$basket->gty. ', ';
            }
            if($name != ''){
                $user = auth()->user()->name;
        $email = auth()->user()->email;
        
            $adress = $_COOKIE['username'];
            $order = new Order();
            $order->title = $name;
            $order->adress = $adress;
            $order->user = $user;
            $order->email = $email;
            $order->save();
            setcookie ('username', '', time() - 3600);
            Basket::query()->delete();
            return redirect('/cart');
            }

            else{
                return redirect('/');
            }
            
        }

        $user = auth()->user()->name;
        $email = auth()->user()->email;
            
        $data = ['name' => $user, 'email' => $email];
        return view('map')->with('data', $data);

    }

    public function create()
    {
        // if(!empty($_COOKIE['username'])){
        //     dd($_COOKIE['username']);
        //     // $product = Basket->get()
        //     // $adress = $_COOKIE['username'];
        //     // $user = auth()->user()->name;
        //     // $email = auth()->user()->email;
        //     setcookie ('username', '', time() - 3600);
        //     // return redirect('/cart');
        // }
    }
}
