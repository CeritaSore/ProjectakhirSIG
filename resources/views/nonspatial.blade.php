<x-headerassets></x-headerassets>
<x-navbar :link="['Home' => '/']" :dropdownlink="['Spasial' => '/spatial', 'Non Spatial' => '/nonspatial']"></x-navbar>
<x-banner :title="'Selamat Datang di'" :subtitle="'Sulawesi Selatan'" :boldsubtitle="'Data nonspasial/Tematik '" link="#peta" />
<section class="explore-work" id="peta">
    <div class="container expanded">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h2 class="text-center">Data Jumlah Sekolah</h2>
                    <div class="w-full " style="height: 80vh" id="display-map-provinsi"></div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="section-heading">
                    <h2 class="text-center">Data jumlah Rumah Sakit</h2>
                    <div class="w-full " style="height: 80vh" id="display-map-kota"></div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="section-heading">
                    <h2 class="text-center">Data Kepadatan Penduduk</h2>
                    <div class="w-full " style="height: 80vh" id="display-map-kota"></div>
                </div>
            </div>
        </div>
    </div>
</section>
{{ $getprovinsi }}
<x-footer :copyright="'Copyright © 2025 Kelompok SIG Rebirth., Ltd. All Rights Reserved.'" />
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
    integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
<script>
    var map = L.map('display-map-provinsi').setView([-3.7335148, 120.1606887], 7.17);
    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }).addTo(map);
    let provinsi = @json($getkabkota);
    provinsi.forEach(poligon => {
        var polygon = L.polygon([
            [-6.5135349, 120.9215286],
        ]).addTo(map);
    });
    console.log(provinsi);
</script>
<x-footerassets></x-footerassets>
