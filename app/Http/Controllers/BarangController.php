<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\item;
use Illuminate\Http\Requst;

class BarangController extends Controller
{
    public function index() 
    {
        $barangs = Barang::all();
        return view('item.index',compact('barangs') );
    }

 }

