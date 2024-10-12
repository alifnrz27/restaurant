<?php

namespace App\Http\Controllers\MyOrder;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MyOrderController extends Controller
{
    public function index(){
        $data['title'] = 'Orderan Saya';

        return view('my-order.index', $data);
    }

    public function create(){
        $data['title'] = 'Tambah Orderan';
        $data['menus'] = [
            (object) [
                "id" => 1,
                "name" => 'Nasi Goreng',
                "price" => "20000"
            ],
            (object) [
                "id" => 2,
                "name" => 'Mie Goreng',
                "price" => "10000"
            ]
        ];


        return view('my-order.create', $data);
    }

    public function show($id){
        $data['title'] = 'Detail Orderan Saya';
        $data['order'] = [
            "date" => "2024-10-24",
            "menus" => [
                        ["name" => "Nasi Goreng", "quantity" => 2, "price" => 20000],
                        ["name" => "Mie Goreng", "quantity" => 1, "price" => 100000],
                ],
            ];

        return view('my-order.show', $data);
    }
}
