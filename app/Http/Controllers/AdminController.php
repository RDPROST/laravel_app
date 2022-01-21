<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function category(){
        return view('admin.category');
    }

    public function categoryCreate(Request $request, Category $category){
        $req = $request->all();
        unset($req['_token']);
        $category->createCategory($req);
        return redirect()->route('admin::category');
    }

    public function news(Category $category){
        return view('admin.news',['categories' => $category->getAllCategories()]);
    }

    public function newsCreate(Request $request, News $news){
        $req = $request->all();
        unset($req['_token']);
        $news->createNews($req);
        return redirect()->route('admin::news');
    }
}
