<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;


class DataBarang extends Controller
{
    public function index(){
        $data_barang = Barang::all();
        return view('data_barang.data_barang', compact('data_barang'));
    }
}
