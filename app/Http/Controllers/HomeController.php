<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function viewHome()
    {
        $products = Book::all();
        $categories = Category::all();
        return view('home_content')->with([
            'products' => $products,
            'Categories' => $categories
        ]);
    }

    public function viewStore()
    {
        $products = Book::paginate(24);
        $categories = Category::all();
        return view('home_product')->with([
            'products' => $products,
            'Categories' => $categories
        ]);
    }
}
