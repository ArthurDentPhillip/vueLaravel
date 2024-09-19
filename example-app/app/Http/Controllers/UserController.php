<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function getSetuoIntent(){
        return auth()->user()->createSetupIntent();
    }

    public function getPatmentMethods(){
        $user = auth()->uset();
        $methods = [];

        foreach($user->getPaymentMethods() as $method){
            array_push($methods, [
                'id' => $method->id,
                'brand' => $method->card->brand,
                'last_four' => $method->card->last4,
                'exp_month' => $method->card->exp_month,
                'exp_year' => $method->card->exp_year,
            ]);
        }
    }
}
