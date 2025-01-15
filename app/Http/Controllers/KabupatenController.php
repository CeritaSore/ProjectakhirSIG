<?php

namespace App\Http\Controllers;

use App\Models\Kabkota;
use Illuminate\Http\Request;

class KabupatenController extends Controller
{
    public function index()
    {
        $list_kabupaten = Kabkota::all();
        return view('kabupaten.index',[
            'list_kabupaten' => $list_kabupaten
        ]);
    }
}
