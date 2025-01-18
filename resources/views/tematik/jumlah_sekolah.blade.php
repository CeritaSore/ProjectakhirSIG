@extends('layout.app')
@section('judul', 'Peta Jumlah Sekolah Menengah Pertama di Sulawesi Selatan')
@section('jumlah_sekolah', 'active')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div id="map"></div>
            <script>
                var map = L.map('map').setView([-4.163611, 119.462499], 7);

                L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: '© OpenStreetMap contributors'
                }).addTo(map);

                // Fungsi untuk mendapatkan warna berdasarkan jumlah penduduk
                function getColor(jumlah_sekolah) {
                    return jumlah_sekolah > 1000 ? '#00008B' :
                           jumlah_sekolah > 500  ? '#0000CD' :
                           jumlah_sekolah > 200  ? '#1E90FF' :
                           jumlah_sekolah > 100  ? '#4682B4' :
                           jumlah_sekolah > 50  ? '#5F9EA0' :
                           jumlah_sekolah > 20   ? '#87CEEB' :
                           jumlah_sekolah > 10   ? '#ADD8E6' :
                                              '#E0FFFF';
                }

                // Fungsi untuk mendapatkan style berdasarkan jumlah jumlah_sekolah
                function style(feature) {
                    return {
                        fillColor: getColor(feature.properties.jumlah_sekolah),
                        weight: 2,
                        opacity: 1,
                        color: 'white',
                        dashArray: '3',
                        fillOpacity: 0.7
                    };
                }

                // Fungsi untuk menampilkan informasi saat hover
                function highlightFeature(e) {
                    var layer = e.target;

                    layer.setStyle({
                        weight: 5,
                        color: '#666',
                        dashArray: '',
                        fillOpacity: 0.7
                    });

                    if (!L.Browser.ie && !L.Browser.opera && !L.Browser.edge) {
                        layer.bringToFront();
                    }

                    info.update(layer.feature.properties);
                }

                // Fungsi untuk mengembalikan style saat tidak hover
                function resetHighlight(e) {
                    e.target.setStyle(style(e.target.feature));
                    info.update();
                }

                // Fungsi untuk menampilkan popup saat klik
                function zoomToFeature(e) {
                    map.fitBounds(e.target.getBounds());
                }

                // Menambahkan event listener
                function onEachFeature(feature, layer) {
                    layer.on({
                        mouseover: highlightFeature,
                        mouseout: resetHighlight,
                        click: zoomToFeature
                    });
                }

                // Menampilkan informasi di pojok kanan atas
                var info = L.control();

                info.onAdd = function (map) {
                    this._div = L.DomUtil.create('div', 'info'); // create a div with a class "info"
                    this.update();
                    return this._div;
                };

                // Method untuk memperbarui informasi
                info.update = function (props) {
                    this._div.innerHTML = '<h4>Kabupaten/Kota</h4>' +  (props ?
                        '<b>' + props.name + '</b><br />' + props.jumlah_sekolah.toLocaleString() + ' Jumlah Sekolah'
                        : 'Hover over a region');
                };

                info.addTo(map);

                // Menambahkan legenda
                var legend = L.control({position: 'bottomright'});

                legend.onAdd = function (map) {
                    var div = L.DomUtil.create('div', 'info legend'),
                        grades = [0, 10, 20, 50, 100, 200, 500, 1000],
                        labels = [];

                    // loop through our density intervals and generate a label with a colored square for each interval
                    for (var i = 0; i < grades.length; i++) {
                        div.innerHTML +=
                            '<i style="background:' + getColor(grades[i] + 1) + '"></i> ' +
                            grades[i] + (grades[i + 1] ? '&ndash;' + grades[i + 1] + '<br>' : '+');
                    }

                    return div;
                };

                legend.addTo(map);

                // Menambahkan data geojson ke peta
                @foreach ($geojsonData as $data)
                    L.geoJSON({!! json_encode($data) !!}, {
                        style: style,
                        onEachFeature: onEachFeature
                    }).addTo(map);
                @endforeach
            </script>
        </div>
    </div>
@endsection

<style>

    .info {
        padding: 6px 8px;
        font: 14px/16px Arial, Helvetica, sans-serif;
        background: white;
        background: rgba(255,255,255,0.8);
        box-shadow: 0 0 15px rgba(0,0,0,0.2);
        border-radius: 5px;
    }

    .info h4 {
        margin: 0 0 5px;
        color: #777;
    }

    .legend {
        line-height: 18px;
        color: #555;
    }

    .legend i {
        width: 18px;
        height: 18px;
        float: left;
        margin-right: 8px;
        opacity: 0.7;
    }
</style>
