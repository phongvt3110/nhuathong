<?php
namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;


class AdminController extends Controller
{
    public function index(){
        $data = ['mobile' => ['iphone','Samsung']];
        return view('backend/index',['data' => isset($data) ? $data : null]);
    }
    public function error404(){
        $data = [];
        return view('backend/error404',['data' => isset($data) ? $data : null]);
    }
    public function basic_table(){
        return view('backend/basic_table',['data' => isset($data) ? $data : null]);
    }
    public function blank(){
        return view('backend/blank',['data' => isset($data) ? $data : null]);
    }
    public function buttons(){
        return view('backend/buttons',['data' => isset($data) ? $data : null]);
    }
    public function chart_chartjs(){
        return view('backend/chart_chartjs',['data' => isset($data) ? $data : null]);
    }
    public function form_component(){
        return view('backend/form_component',['data' => isset($data) ? $data : null]);
    }
    public function form_validation(){
        return view('backend/form_validation',['data' => isset($data) ? $data : null]);
    }
    public function general(){
        return view('backend/general',['data' => isset($data) ? $data : null]);
    }
    public function grids(){
        return view('backend/grids',['data' => isset($data) ? $data : null]);
    }
    public function login(){
        return view('backend/login',['data' => isset($data) ? $data : null]);
    }
    public function profile(){
        return view('backend/profile',['data' => isset($data) ? $data : null]);
    }
    public function widgets(){
        return view('backend/widgets',['data' => isset($data) ? $data : null]);
    }
}