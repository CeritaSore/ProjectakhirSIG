<x-headerassets></x-headerassets>
<x-navbar :link="['Home' => '/']" :active="'active'" :dropdownlink="['Spasial' => '/spatial', 'Non Spatial' => '/nonspatial']"></x-navbar>
<x-banner :title="'Selamat Datang di'" :subtitle="'Sulawesi Selatan'" :boldsubtitle="'Data Spasial'" link="#peta" />
<section class="explore-work" id="peta">
    <div class="container expanded">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h2 class="text-center">Data Provinsi</h2>
                    <div class="w-full " style="height: 80vh" id="display-map-provinsi"></div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="section-heading">
                    <h2 class="text-center">Data Kabupaten/Kota</h2>
                    <div class="w-full " style="height: 80vh" id="display-map-kota"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<x-footer :copyright="'Copyright © 2025 Kelompok SIG Rebirth., Ltd. All Rights Reserved.'" />
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
    integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
<script>
    var map = L.map('display-map-provinsi').setView([-3.2683121, 116.7181783], 5.17);
    var mapkota = L.map('display-map-kota').setView([-3.2683121, 116.7181783], 5.17);
    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }).addTo(map);
    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }).addTo(mapkota);
    var getmap = @json($getprovinsi);
    getmap.forEach(point => {
        var marker = L.marker([point.lat, point.long]).addTo(map);
        marker.bindPopup(`<b>Nama:</b> ${point.nama}`).openPopup();
    });
    var getmapkabkota = @json($getkabkota);
    getmapkabkota.forEach(point => {
        var marker = L.marker([point.lat, point.long]).addTo(mapkota);
        marker.bindPopup(`<b>Nama:</b> ${point.nama}`).openPopup();
    });
    
    // console.log(getmap);
</script>
<x-footerassets></x-footerassets>
