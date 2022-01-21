<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\News;

class NewsController extends Controller
{
    public function index(News $news){
        return view('news.index', ['news' => $news->getAll()]);
    }

    public function show(News $news,Category $category,$id){
        $post = $news->getById($id);
        return view('news.show', ['news' => $post,'category' => $category->getCategoryById($post['category_id'])]);
    }
}
