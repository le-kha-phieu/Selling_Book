<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateProductRequest;
use App\Models\Book;
use App\Models\Category;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function detailProduct(Book $product)
    {
        return view('detail_product')->with('product', $product);
    }

    public function viewCreateProduct() {
        $categories = Category::all();
        return view('admin.create_product')->with('Categories', $categories);
    }

    public function createProduct(CreateProductRequest $request)
    {
        try {
            $imageProduct = Storage::disk('public')->put('images', $request->file('image_product'));

            Book::create([
                'title' => $request['title'],
                'author' => $request['author'],
                'publisher' => $request['publisher'],
                'publishing_year' => $request['publishing_year'],
                'image_product' => $imageProduct,
                'category_id' => $request['category_id'],
                'description' => $request['description'],
                'price' => $request['price'],
            ]);
            return redirect()->route('view.admin')->with('success', 'Tạo sản phẩm thành công');

        } catch (Exception $e) {
            return redirect()->route('view.admin')->with('error', 'Tạo sản phẩm thất bại hãy thử lại!');
        }

        return redirect()->route('view.admin')->with('error', 'Tạo sản phẩm thất bại do lỗi hệ thống!');
    }
}
