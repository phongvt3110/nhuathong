<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){
        $data = [
            'users' => [
                'id'=>'1',
                'name'=>'Phongvt',
                'email' => 'vtphong651043@gmail.com',
                'phone' => '0983397580'
            ]
        ];
        return view('frontend/index',['data' => isset($data) ? $data : null]);
    }
}