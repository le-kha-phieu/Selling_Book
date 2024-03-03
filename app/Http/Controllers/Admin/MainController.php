<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function viewHomeAdmin()
    {
        $categories = Category::all();
        $products = Book::paginate(6);

        return view('admin.main')->with([
            'Categories' => $categories,
            'products' => $products
        ]);
    }
}
