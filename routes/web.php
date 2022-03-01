<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ProductsController;


Route::get('/', function () {
    return view('welcome');
});

Route::get ('/about', function() {
	return view("about");
});

Route::get("/about-us", function(){
	return view("admin.about-us", ["names" => ["Béla", "Géza", "Kata"]]);
});

Route::get("/products", function(){
    return view("products");
});

Route::get("/products", function(){
    return view("products", [
        "page" => "Termékek"
    ]);
});

Route::get ("/about", function() {
	return view("about", [
        "page" => "Rólunk"
    ]);
});

Route::get("/contact", function(){
    return view("contact", [
        "page" => "Kapcsolat"
    ]);
});

Route::get("/nagyon", function(){
    return view("nagyon", [
        "page" => "Nagyon"
    ]);
});

//Route::get( "/my-form", [StudentController::class, "myForm" ]);
Route::post( "/submit-student", [StudentController::class, "submitStudent"]);

//Route::match( ["get", "post", ], "/add-student", [StudentController::class, "myForm"]);

//Route::match( ["get", "post", ], "/add-product", [ProductsController::class, "myProduct"]);

Route::get( "/add-student", [StudentController::class, "addStudent" ]);

