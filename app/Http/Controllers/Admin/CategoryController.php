<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\AdminCategoriesSaveRequest;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::getCategories();
        return view('admin.news.categories.index', ['categories' => $categories]);
    }

    public function create(AdminCategoriesSaveRequest $request)
    {
        if ($request->input('id')) {
            $categories = Category::find($request->input('id'));
        } else {
            $categories = new Category();
        }
        $categories->category_name = $request->input('title');
        $categories->category_description = $request->input('content');

        $categories->save();

        return redirect()->route('admin::categories::index');
    }

    public function update($id)
    {
        $categories = Category::getCategoriesById($id);
        return view('admin.news.categories.update')->with(['categories' => $categories]);
    }

    public function new(Request $request)
    {
        return view('admin.news.categories.create');
    }

    public function delete($id)
    {
        Category::find($id)->delete();
        return redirect()->route('admin::categories::index');
    }
}
