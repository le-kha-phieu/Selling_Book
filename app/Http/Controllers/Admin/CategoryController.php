<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
    }

    public function viewUpdateCategory(Category $category)
    {
        return view('admin.update_category', [
            'category' => $category,
        ]);
    }

    public function updateCategory(CategoryRequest $request)
    {
        try {
            $category = Category::find($request->id); 
            $category->name = $request->name_category;
            $category->save();

            return redirect()->route('view.admin')->with('success', 'Cập nhật danh mục thành công');
        } catch (Exception $e) {
            return redirect()->route('view.admin')->with('error', 'Cập nhật danh mục thất bại hãy thử lại!');
        }
    }

    public function deleteCategory(Category $category)
    {
        try {
            $category->delete();

            return redirect()->route('view.admin')->with('success', 'Xóa danh mục thành công');
        } catch (Exception $e) {
            return redirect()->route('view.admin')->with('error', 'Xóa danh mục thất bại hãy thử lại!');
        }
    }
}
