<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\File;

use Illuminate\Http\Request;

class MapController extends Controller
{
    public function index()
    {
        $geojsonData = [];

        $geoJsonFiles = [
            '7301.geojson',
            '7302.geojson',
            '7303.geojson',
            '7304.geojson',
            '7305.geojson',
            '7306.geojson',
            '7307.geojson',
            '7308.geojson',
            '7309.geojson',
            '7310.geojson',
            '7311.geojson',
            '7312.geojson',
            '7313.geojson',
            '7314.geojson',
            '7315.geojson',
            '7316.geojson',
            '7317.geojson',
            '7318.geojson',
            '7322.geojson',
            '7325.geojson',
            '7371.geojson',
            '7372.geojson',
            '7373.geojson',
        ];

        foreach ($geoJsonFiles as $file) {
            $filePath = public_path('geojson/' . $file);
            $geojsonData[] = json_decode(file_get_contents($filePath), true);
        }

        return view('tematik.persebaran', compact('geojsonData'));
    }

}
