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

    public function kepadatan_penduduk()
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
                    $feature['properties']['kepadatan_penduduk'] = $location->penduduk / $location->luas;
                }

                $geojsonData[] = $geojson;
            } else {
                // Handle jika file tidak ditemukan
                Log::warning("File GeoJSON tidak ditemukan: " . $filePath);
            }
        }

        return view('tematik.kepadatan_penduduk', compact('geojsonData'));
    }

    public function jumlah_sekolah()
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
                    $feature['properties']['jumlah_sekolah'] = $location->smp_swasta + $location->smp_negeri;
                }

                $geojsonData[] = $geojson;
            } else {
                // Handle jika file tidak ditemukan
                Log::warning("File GeoJSON tidak ditemukan: " . $filePath);
            }
        }

        return view('tematik.jumlah_sekolah', compact('geojsonData'));
    }

    public function kepadatan_sekolah()
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
                    $feature['properties']['kepadatan_sekolah'] = ($location->smp_swasta + $location->smp_negeri) / $location->luas;
                }

                $geojsonData[] = $geojson;
            } else {
                // Handle jika file tidak ditemukan
                Log::warning("File GeoJSON tidak ditemukan: " . $filePath);
            }
        }

        return view('tematik.kepadatan_sekolah', compact('geojsonData'));
    }

    public function jumlah_guru()
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
                    $feature['properties']['jumlah_guru'] = ($location->guru_smp_swasta + $location->guru_smp_negeri);
                }

                $geojsonData[] = $geojson;
            } else {
                // Handle jika file tidak ditemukan
                Log::warning("File GeoJSON tidak ditemukan: " . $filePath);
            }
        }

        return view('tematik.jumlah_guru', compact('geojsonData'));
    }

    public function kepadatan_guru()
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
                    $feature['properties']['kepadatan_guru'] = ($location->guru_smp_swasta + $location->guru_smp_negeri) / $location->luas;
                }

                $geojsonData[] = $geojson;
            } else {
                // Handle jika file tidak ditemukan
                Log::warning("File GeoJSON tidak ditemukan: " . $filePath);
            }
        }

        return view('tematik.kepadatan_guru', compact('geojsonData'));
    }
}
