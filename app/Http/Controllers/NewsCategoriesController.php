<?php

namespace App\Http\Controllers;

class NewsCategoriesController extends Controller
{
    private $response = '<head><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"></head>';

    public function index(){
        $this->response .= '<nav class="navbar navbar-expand-lg navbar-light bg-light">
                          <div class="container-fluid">
                            <a class="navbar-brand" href="'.route('home::index').'">NewsAgragator</a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                              <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                  <a class="nav-link" aria-current="page" href="'.route('home::index').'">Home</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" href="'.route('news::index').'">News</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link active" href="'.route('news::categories::index').'">Category</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" href="'.route('login::index').'">Login</a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </nav>';
        return $this->response;
    }

    public function category($name){
        $response = '';
    }
}
