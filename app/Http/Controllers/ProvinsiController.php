<?php

namespace App\Http\Controllers;

use App\Models\Provinsi;
use Illuminate\Http\Request;

class ProvinsiController extends Controller
{
    public function index()
    {
        $list_provinsi = Provinsi::all();
        return view('provinsi.index',[
            'list_provinsi' => $list_provinsi
        ]);
    }
}
