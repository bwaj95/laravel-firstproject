<?php

namespace App\Http\Controllers;

class ProductsController extends Controller
{
    public function index()
    {

        $title = "Welcome to Laravel 8 tutorial.";
        $description = "Created by Code with Darry.";
        $data = [
            "productOne" => "iPhone",
            "productTwo" => "Samsung",
        ];

        //Passing data to view using compact().
        // return view("products.index",
        // compact("title", "description", "data"));

        //Passing data to view using assoc array.
        return view("products.index", [
            "title" => $title,
            "description" => $description,
            "data" => $data,
        ]);

    }

    public function show($name)
    {
        $data = [
            "iphone" => "iPhone",
            "samsung" => "Samsung",
        ];

        return view("products.productDetails", [
            "products" => $data[$name] ?? "Product $name doesn't exist.",
        ]);
    }
}
