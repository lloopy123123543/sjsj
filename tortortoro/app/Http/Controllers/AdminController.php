<?php

namespace App\Http\Controllers;
use App\Models\Order;
use App\Models\User;
use App\Models\Change;
use App\Models\UsersChange;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class AdminController extends BaseController
{
    public function showAll(){
        return response() -> json(User::all());
    }
    public function addUserChange(Request $request){
        $change = new UsersChange;
        $change -> change_id = $request -> input("change_id");
        $change -> user_id = $request -> input("user_id");
        $change -> save();
        return response() -> json($change);


    }

    public function showOrders(){
        return response() -> json(Order::all());
    }
    // public function editOrder(Request $request, $id){
    //     $order = Order::all()-> where("id",$request-> get("order_id")) -> first();
    //     $order-> status = 4;
    //     $order -> save();


    // }

    public function editOrderPay(Request $request, $id){
        $order = Order::find($id);
        $order -> order_status = 3;
        $order -> save();
        return response() -> json($order);
    }
    public function editOrderBreak($id){
        $order = Order::find($id);
        $order -> order_status = 4;
        $order -> save();
        return response() -> json($order);

    }
    public function createChange(Request $request){
        $change = new Change;

        $change -> date_start = $request -> input("date_start");
        $change -> date_end = $request -> input("date_end");
        $change -> closed = $request -> input("closed");
        $change -> save();
        return response() -> json($change);


    }
    public function addUser(Request $request){

        $addUser = new User([
            "name" => $request -> get('name'),
            "login" => $request -> get('login'),
            "role_id" => $request -> get('role_id'),
            "password" => $request -> get('password'),
            "photo_file" => $request -> get('photo_file'),


        ]);
        $addUser -> save();
        return response()-> json($addUser);


    }

    public function deleteUser($id){
        $deleteUser = User::find($id);
        $deleteUser -> delete();
        return response() -> json("message => deleted");
    }

    public function showOrder($id){
        $order = Order::find($id);
        return response() -> json($order);
    }
}
