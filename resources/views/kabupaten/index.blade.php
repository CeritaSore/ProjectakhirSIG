@extends('layout.app')
@section('judul', 'Kabupaten')
@section('kabupaten', 'active')
@section('head')
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />

    <style>
        #map {
            height: 800px;
        }
    </style>

    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-1"></div>
        <div class="col-lg-10 mt-3">
            <div id="map"></div>

            <script>
                // Inisialisasi peta
                var map = L.map('map').setView([-6.200000, 106.816666], 5); // Ganti dengan koordinat yang sesuai

                // Menambahkan layer peta
                L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    maxZoom: 19,
                    attribution: '© OpenStreetMap'
                }).addTo(map);

                // Mengambil data provinsi dari PHP
                var kabupatens = @json($list_kabupaten);
                console.log(kabupatens);

                // Menambahkan marker untuk setiap provinsi
                kabupatens.forEach(function(kabupaten) {
                    var marker = L.marker([kabupaten.lat, kabupaten.long]).addTo(map);
                    marker.bindPopup("ID: " + kabupaten.id + "<br>Provinsi: " + kabupaten.nama + "<br>Latitude: " + kabupaten
                        .lat + "<br>Logitude: " + kabupaten.long); // Ganti 'name' dengan 'nama'
                });
            </script>

        </div>
        <div class="col-lg-1"></div>
    </div>
@endsection
