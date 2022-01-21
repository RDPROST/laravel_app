<?php

namespace App\Http\Controllers;

class LoginController extends Controller
{
    private $response = '';

    public function index(){
        $this->response .= '  <div class="mb-3 row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="inputEmail" placeholder="admin@admin.ru">
                                </div>
                              </div>
                              <div class="mb-3 row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                                <div class="col-sm-10">
                                  <input type="password" class="form-control" id="inputPassword">
                                </div>
                              </div>
                              <div class="mb-3 row">
                                <button type="submit" class="btn btn-primary mb-3">Login</button>
                              </div>';
        return $this->response;
    }

}
