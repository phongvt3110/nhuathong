<?php
/**
 * Created by PhpStorm.
 * User: phongvt
 * Date: 03/07/2017
 * Time: 01:10
 */

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;


class AdminController extends Controller
{
    public function index(){
        $data = ['mobile' => ['iphone','Samsung']];
        return view('backend/index',['data' => isset($data) ? $data : null]);
    }
    public function error404(){
        return view('backend/error404');
    }
    public function show(){
        return view('backend/show');
    }
}