<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function myProduct(Request $request){

        if( $request->isMethod("post")) {
            print_r( $request->all() );
        }

        return view("productsForm");
    }

    public function submitProduct( Request $request){
        print_r($request->all() );
    }
}

