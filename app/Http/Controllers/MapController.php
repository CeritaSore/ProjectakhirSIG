<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class MapController extends Controller
{
    public function index()
    {
        // Ambil data dari database
        $locations = DB::table('sulawesi_location')->get();

        $geojsonData = [];

        foreach ($locations as $location) {
            $filePath = public_path('geojson/' . $location->file);
            if (File::exists($filePath)) {
                $geojson = json_decode(File::get($filePath), true);

                // Tambahkan data penduduk ke properti setiap feature
                foreach ($geojson['features'] as &$feature) {
                    $feature['properties']['penduduk'] = $location->penduduk;
                }

                $geojsonData[] = $geojson;
            } else {
                // Handle jika file tidak ditemukan
                Log::warning("File GeoJSON tidak ditemukan: " . $filePath);
            }
        }

        return view('tematik.persebaran', compact('geojsonData'));
    }
}
