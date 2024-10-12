<?php

namespace App\Http\Controllers\Order;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(){
        $data['title'] = 'List Order';

        return view('order.index', $data);
    }

    public function show($id){
        $data['title'] = 'Detail Order';
        $data['order'] = [
            "date" => "2024-10-24",
            "menus" => [
                        ["name" => "Nasi Goreng", "quantity" => 2, "price" => 20000],
                        ["name" => "Mie Goreng", "quantity" => 1, "price" => 100000],
                ],
            ];

        return view('order.show', $data);
    }
}
