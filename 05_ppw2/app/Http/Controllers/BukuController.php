<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\buku;  


class BukuController extends Controller
{
    public function index()
    {
        $databuku=buku::all();
        $no=0;
        $jumlahbuku=$databuku->count();
        $totalharga=DB::table('buku')->sum('harga');
        return view('buku.index',compact('databuku','totalharga','no','jumlahbuku'));
    }
}
