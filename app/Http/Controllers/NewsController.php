<?php

namespace App\Http\Controllers;

use App\Models\News;

class NewsController extends Controller
{
    public function index(News $news){
        return view('news.index', ['news' => $news->getAll()]);
    }

    public function show(News $news,$id){
        return view('news.show', ['news' => $news->getById($id)]);
    }
}
