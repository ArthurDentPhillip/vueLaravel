<?php

namespace App\Http\Controllers;

use App\Models\Basket;
use App\Models\Product;
use App\Models\User;
use App\Models\Post;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index(){
        $baskets = Basket::where('user_id', auth()->user()->id)->with('post')->get();
        $sum = 0;
        foreach($baskets as $basket){
            $sum += $basket->gty;
        }
      
        return view('cart', [
            'baskets' => $baskets,
            'sum' => $sum
        ]);
    }
    public function __construct(){
        $this->middleware('auth');
    }
    public function store(Request $request){
        $current_user = auth()->user();
        $user_id = $current_user->id;
        $product_id = $request->product_id;
        $gty = 1;   
        $product = Post::where('id', $product_id)->first();

                $basket = Basket::where('product_id', $product_id)->where('user_id', $user_id)->first();
                if(!$basket){
                    Basket::insert([
                        'product_id' => $product_id,
                        'gty' => $gty,
                        'price' => $product->price,
                        'user_id' => $user_id,
        
                    ]);
        }
        else{
            $basket->gty += 1;
            $basket->price = $basket->price + $product->price;
            $basket->save();
        }

        $basket_count = Basket::where('product_id', $product_id)->where('user_id', $user_id)->count();
        return response()->json(['basket_count' => $product], 200);
    }

    public function destroy($cartId){
        Basket::find($cartId)->delete();
        return back();
        }
    public function edit($id, $gty){
        $basket_tmp = Basket::where('id', $id)->first();
        $price_one = $basket_tmp->post->price;
        $price_old = $basket_tmp->price;

        if($gty>$basket_tmp->gty){
            $price_now = $price_old + $price_one;
            Basket::where('id', $id)->update(['gty' => $gty]);
            Basket::where('id', $id)->update(['price' => $price_now]);

            return back();
        }
        elseif($basket_tmp->gty == 0){
            return back();
        }
        else{
            $price_now = $price_old - $price_one;
            Basket::where('id', $id)->update(['gty' => $gty]);
            Basket::where('id', $id)->update(['price' => $price_now]);

            return back();
        }
    }
}
