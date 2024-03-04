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
        $topProducts = Book::orderBy('sell_number', 'desc')->take(3)->get();
        $categories = Category::all();
        return view('home_content')->with([
            'products' => $topProducts,
            'Categories' => $categories
        ]);
    }

    public function viewStore()
    {
        $products = Book::paginate(15);
        $categories = Category::all();
        return view('home_product')->with([
            'products' => $products,
            'Categories' => $categories
        ]);
    }

    public function viewBestSeller() {
        $bestSellerProduct = Book::orderBy('sell_number', 'desc')->paginate(9);
        $categories = Category::all();
        return view('home_product')->with([
            'products' => $bestSellerProduct,
            'Categories' => $categories
        ]);
    }
}
