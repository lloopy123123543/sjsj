<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class ClientController extends BaseController
{
    // public function showAll(){
    //     return response() -> json(User::all());
    // }
    // public function addUser(Request $request){

    //     $addUser = new User([
    //         "name" => $request -> get('name'),
    //         "login" => $request -> get('login'),
    //         "role_id" => $request -> get('role_id'),
    //         "password" => $request -> get('password'),
    //         "photo_file" => $request -> get('photo_file'),


    //     ]);
    //     $addUser -> save();
    //     return response()-> json($addUser);


    // }

    public function order_add(Request $request){
        $order = new Order([
            "usluga" => $request -> get('usluga'),
            "user_id" => $request -> get('user_id'),
        ]);
        $order -> save();
        return response() -> json($order);

    }

}
