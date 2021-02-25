<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
error_reporting(0);

class HealthInformationSaveController extends Controller {
    public function index() {
        $data = file_get_contents('php://input');
        $data = json_decode($data,true);
        $time=Carbon::now()->toDateTimeString();
        if($data['weight']){
            DB::insert('insert into userweight (userId, weight, create_time) values (?, ?, ?)', [$data['userId'], $data['weight'], $time]);
        }
        $result = '{"code":"200","data":{},"msg":"保存成功"}';
        // if($user && $user[0]->username && $data['password'] == $user[0]->password){
        //     $result = '{"code":"200","data":{"id":"'.$user[0]->id.'","phone":"'.$user[0]->phone.'","name":"'.$user[0]->name.'","nickname":"'.$user[0]->nickname.'"},"msg":"登录成功"}';
        // }else{
        //     $result = '{"code":"400","data":{},"msg":"登录失败，用户名或密码不正确"}';
        // }
        return $result;
    }
}
