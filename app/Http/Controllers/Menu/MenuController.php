<?php

namespace App\Http\Controllers\Menu;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index(){
        $data['title'] = 'Menu';

        return view('menu.index', $data);
    }

    public function create(){
        $data['title'] = 'Tambah Menu';

        return view('menu.create', $data);
    }

    public function show($id){
        $data['title'] = 'Detail Menu';

        return view('menu.show', $data);
    }

    public function edit($id){
        $data['title'] = 'Edit Menu';

        return view('menu.edit', $data);
    }
}
