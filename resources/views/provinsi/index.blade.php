@extends('layout.app')
@section('judul', 'Provinsi')
@section('provinsi', 'nav-link active')
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
                var provinces = @json($list_provinsi);
                console.log(provinces);

                // Menambahkan marker untuk setiap provinsi
                provinces.forEach(function(province) {
                    var marker = L.marker([province.lat, province.long]).addTo(map);
                    marker.bindPopup("ID: " + province.id + "<br>Provinsi: " + province.nama + "<br>Latitude: " + province
                        .lat + "<br>Logitude: " + province.long); // Ganti 'name' dengan 'nama'
                });
            </script>

        </div>
        <div class="col-lg-1"></div>
    </div>
@endsection
