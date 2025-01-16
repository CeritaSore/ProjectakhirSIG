<?php

namespace App\Http\Controllers;

use App\Models\Kabkota;
use App\Models\Provinsi;
use Illuminate\Http\Request;

class MapController extends Controller
{
    //
    public function spatial()
    {
        $getprovinsi = Provinsi::all();
        $getkabkota = Kabkota::all();

        return view('spasial', compact('getprovinsi', 'getkabkota'));
    }
    public function nonspatial()
    {
        $getprovinsi = Provinsi::where('id', 73)->get();
        $getkabkota = Kabkota::where('provinsi_id', 73)->get();

        return view('nonspatial', compact('getprovinsi', 'getkabkota'));
    }
}
