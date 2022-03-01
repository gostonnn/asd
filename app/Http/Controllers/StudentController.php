<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreStudentData;
use Illuminate\Support\Facades\Validator;

class StudentController extends Controller
{
    public function myForm(Request $request){

        // if( $request->isMethod("post")) {
        //     $request->validate([
        //         "name" => "required",
        //         "email" => "required",
        //         "phone" => "required" 
        //     ],[
        //         "name.required" => "A(z) név kötelező",
        //         "email.required" => "A(z) email kötelező",
        //         "phone.required" => "A(z) telefonszám kötelező"
        //     ]);
        // }

        print_r($request->all());
        return view("my_form");
    }

    public function addStudent(){

        return view("my_form");
    }

    public function submitStudent( Request $request){

        $validate=Validator::make( $request->all(),[

            "name" => "required|min:6",
            "email" => "required",
            "phone" => "required"

        ],[
            "name.required" => "Név kötelező",
            "email.required" => "Email kötelező",
            "phone.required" => "Telefonszám kötelező",
        ])->validate();



        // if( $validate->fails() ){

        //     return redirect( "add-student")->withErrors($validate)->withInput();
        // }
        // //$request->validated();
        print_r($request->all() );
    }
}
