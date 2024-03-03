<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Exception;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function viewCategory()
    {
        return view('admin.create_category');
    }

    public function createCategory(CategoryRequest $request)
    {
        try {
            $message = '';
            $checkCategory = Category::where('name', $request['name_category'])->first();
            if ($checkCategory)
                $message = 'category already exists!';
            if ($message != '') {
                return redirect()->route('view.admin')->with('error', $message);
            }

            Category::create([
                'name' => $request['name_category']
            ]);
            return redirect()->route('view.admin')->with('success', 'Tạo thành công danh mục');

        } catch (Exception $e) {
            return redirect()->route('view.admin')->with('error', 'Tạo danh mục thất bại');
        }

        return redirect()->route('view.admin')->with('error', 'Tạo danh mục thất bại do lỗi hệ thống');
    }
}
