<x-headerassets></x-headerassets>
<x-navbar :link="['Home' => '/']" :dropdownlink="['Spasial' => '/spatial', 'Non Spatial' => '/nonspacial']"></x-navbar>
<x-banner :title="'List Peta'" :subtitle="''" :boldsubtitle="''" />
<section class="explore-work" id="explore team">
    <div class="container expanded">
        <div class="row ">
            <div class="col-lg-12">
                <h2 class="text-center">Kategori Peta</h2>
            </div>
            <div class="col-lg-12 d-flex justify-content-around">
                <div class="card" style="width: 18rem;">
                    <img src="/frontend/assets/images/gambarpeta/petavector.png" class="card-img-top"
                        alt="Profile Picture">
                    <div class="card-body">
                        <h5 class="card-title text-center">Peta Spasial</h5>
                        <p class="card-text">Halaman ini berisikan gambaran data spasial dari wilayah penelitian.</p>
                        <div class="d-flex justify-content-center">
                            <a href="/spatial" class="btn btn-primary text-center">Lihat Peta</a>
                        </div>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="/frontend/assets/images/gambarpeta/petatematik.jpg" class="card-img-top"
                        alt="Profile Picture">
                    <div class="card-body">
                        <h5 class="card-title text-center">Peta Peta Tematik</h5>
                        <p class="card-text">Halaman ini berisikan gambaran peta tematik dari wilayah penelitian.</p>
                        <div class="d-flex justify-content-center">
                            <a href="/nonspatial" class="btn btn-primary text-center">Lihat Peta</a>
                        </div>
                    </div>
                </div>
                
            </div>

        </div>
    </div>
</section>
<x-footer :copyright="'Copyright © 2025 Kelompok SIG Rebirth., Ltd. All Rights Reserved.'" />
<x-footerassets></x-footerassets>
