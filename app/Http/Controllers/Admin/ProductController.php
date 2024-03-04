<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Book;
use App\Models\Category;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function detailProduct(Book $product)
    {
        return view('detail_product')->with('product', $product);
    }

    public function viewCreateProduct()
    {
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
    }

    public function searchProduct(Request $request)
    {
        $dataSearch = [
            'data' => $request->input('data'),
            'categoryId' => $request->input('id'),
        ];

        $query = Book::query();

        if ($dataSearch['data'] !== '') {
            $query->where(function ($query) use ($dataSearch) {
                $query->where('title', 'like', '%' . $dataSearch['data'] . '%')
                    ->orWhere('description', 'like', '%' . $dataSearch['data'] . '%');
            });
        }

        if ($dataSearch['categoryId']) {
            $query->where('category_id', $dataSearch['categoryId']);
        }

        $products = $query->orderBy('created_at', 'desc')
            ->paginate(Book::LIMIT_PAGE_PRODUCT);

        return view('home_product', [
            'products' => $products,
            'Categories' => Category::get(),
        ]);
    }

    public function viewUpdateProduct(Book $product)
    {
        return view('admin.update_product', [
            'product' => $product,
            'Categories' => Category::get(),
            'categorySelected' => $product->category_id,
        ]);
    }

    public function updateProduct(UpdateProductRequest $request, Book $product)
    {
        try {
            if (isset($request['image_product'])) {
                $imageProduct = Storage::disk('public')->put('images', $request->file('image_product'));
            } else {
                $imageProduct = $product->image_product;
            }

            $product->update([
                'title' => $request['title'],
                'author' => $request['author'],
                'publisher' => $request['publisher'],
                'publishing_year' => $request['publishing_year'],
                'image_product' => $imageProduct,
                'category_id' => $request['category_id'],
                'description' => $request['description'],
                'price' => $request['price'],
            ]);

            return redirect()->route('view.admin', ['product' => $product])->with('success', 'Sửa sản phẩm thành công');
        } catch (Exception $e) {
            return redirect()->route('view.admin', ['product' => $product])->with('success', 'Sửa sản phẩm thất bại. Vui lòng thử lại!');
        }
    }
    public function deleteProduct(Book $product)
    {
        try {
            $product->delete();

            return redirect()->route('view.admin')->with('success', 'Xóa sản phẩm thành công');
        } catch (Exception $e) {
            return redirect()->route('view.admin')->with('error', 'Xóa sản phẩm thất bại hãy thử lại!');
        }
    }
}
