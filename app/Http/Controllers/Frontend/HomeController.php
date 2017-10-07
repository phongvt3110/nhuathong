<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

use App\Users;

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
        $users = DB::table('users')->get();
        $data['nguoidung'] = $users;
        $adminuser = Users::all();
        foreach ($adminuser as $u){
            foreach ($u as $key => $obj){
                echo $key . '--------' . $obj . '<br>';
            }
            echo '<br>';
        }
        echo '<br><br>=============Model<br>';
        $admins = Users::getList();
        foreach ($admins as $objs){
            foreach ($objs as $key => $val){
                echo $key . '--------' . $val . '<br>';
            }
        }

        return view('frontend/index',['data' => isset($data) ? $data : null]);
    }
}