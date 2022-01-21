<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(Category $category){
        return view('category.index',['categories' => $category->getAllCategories()]);
    }

    public function show(News $news, Category $category,$id){
        $arr = array_filter($news->getAll(),function ($item) use ($id) {
            if ($item['category_id'] == $id){
                return $item;
            }
        });
        return view('category.show',['news' => $arr,'category'=>$category->getCategoryById($id)]);
    }

    public function create(Request $request,Category $category)
    {
        $category->createCategory($request->input('name'));
        return redirect()->route('admin::index');
    }

    public function update($id){

    }

    public function delete($id){

    }
}
