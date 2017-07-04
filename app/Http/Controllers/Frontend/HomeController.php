<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(){
        $data = ['users' => ['id'=>'1','name'=>'Phongvt','email' => 'vtphong651043@gmail.com']];
        return view('frontend/index',['data' => isset($data) ? $data : null]);
    }
}