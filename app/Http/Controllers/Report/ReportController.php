<?php

namespace App\Http\Controllers\Report;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index(){
        $data['title'] = 'Laporan Penjualan';
        $data['report'] = [
            [
                'date' => '2024-10-27',
                'price' => '24000',
            ],
            [
                'date' => '2024-10-28',
                'price' => '4000',
            ],
            [
                'date' => '2024-10-29',
                'price' => '30000',
            ]
        ];

        return view('report.index', $data);
    }
}
