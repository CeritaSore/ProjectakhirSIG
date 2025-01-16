@extends('layout.app')
@section('judul', 'Peta Persebaran Sekolah di Sulawesi Selatan')
@section('persebaran', 'active')
@section('content')
    <div class="row">
        <div class="col-lg-1"></div>
        <div class="col-lg-10">
            <div id="map"></div>
            <script>
                var map = L.map('map').setView([-4.163611, 119.462499], 7);

                L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: '© OpenStreetMap contributors'
                }).addTo(map);

                function getRandomColor() {
                    var letters = '0123456789ABCDEF';
                    var color = '#';
                    for (var i = 0; i < 6; i++) {
                        color += letters[Math.floor(Math.random() * 16)];
                    }
                    return color;
                }

                @foreach ($geojsonData as $data)
                    L.geoJSON({!! json_encode($data) !!}, {
                        style: function(feature) {
                            return {
                                fillColor: getRandomColor(),
                                weight: 2,
                                opacity: 1,
                                color: 'white',
                                dashArray: '3',
                                fillOpacity: 0.7
                            };
                        }
                    }).addTo(map);
                @endforeach
            </script>

        </div>
        <div class="col-lg-1"></div>
    </div>
@endsection
