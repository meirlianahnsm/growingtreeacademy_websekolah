@extends('layouts.frontend.app',[
'title' => 'Home',
])
@section('content')
<!-- ##### Hero Area Start ##### -->
<section class="hero-area bg-img bg-overlay-2by5" style="background-image: url({{ asset('img/bg') }}/blog-2.jpg);">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <!-- Hero Content -->
                <div class="hero-content text-center">
                    <h2>Welcome to the Growing Tree Academy family!</h2>
                    <h5>Are you ready to embark on a journey of discovery?
                        Let's grow together!</h5>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Hero Area End ##### -->

<!-- <div class="regular-page-area section-padding-100 mt-5 mb-4">
    <div class="col-lg-9 mx-auto">
        <div class="card">
            <div class="card-header">GROWING TREE ACADEMY</div>
            <div class="card-body">
                <p class="lead">
                    Di Growing Tree Academy, kami percaya bahwa setiap anak adalah individu unik dengan bakat dan potensi yang luar biasa. Kami berkomitmen untuk menanamkan nilai-nilai positif seperti kejujuran, tanggung jawab, dan kerja sama tim pada anak-anak. Melalui berbagai kegiatan belajar yang menarik, kami ingin membentuk generasi muda yang cerdas, kreatif, dan berkarakter..
                </p>
            </div>
        </div>
    </div>
</div> -->

<div class="regular-page-area section-padding-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="page-content">
                    <h4>Growing Tree Academy</h4>
                    <p>Di Growing Tree Academy, kami percaya bahwa setiap anak adalah individu unik dengan bakat dan potensi yang luar biasa. Kami berkomitmen untuk menanamkan nilai-nilai positif seperti kejujuran, tanggung jawab, dan kerja sama tim pada anak-anak. Melalui berbagai kegiatan belajar yang menarik, kami ingin membentuk generasi muda yang cerdas, kreatif, dan berkarakter..</p>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Facilities Start -->
<div class="container-fluid pt-5">
    <div class="container pb-3">

        <div class="text-center pb-2">
            <h1 class="mb-4">
                <span class="text-success">Activities</span>
                <span class="text-secondary">Explore, Learn, Grow</span>
            </h1>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6 pb-1">
                <div class="d-flex bg-light shadow-sm border-top rounded mb-4" style="padding: 30px;">
                    <i class="flaticon-050-fence h1 font-weight-normal text-primary mb-3"></i>
                    <div class="pl-4">
                        <h4>Play Ground</h4>
                        <p class="m-0">Deskripsi kegiatan sekolah...</p>
                    </div>

                </div>
            </div>
            <div class="col-lg-4 col-md-6 pb-1">
                <div class="d-flex bg-light shadow-sm border-top rounded mb-4" style="padding: 30px;">
                    <i class="flaticon-022-drum h1 font-weight-normal text-primary mb-3"></i>
                    <div class="pl-4">
                        <h4>Music and Dance</h4>
                        <p class="m-0">Deskripsi kegiatan sekolah...</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 pb-1">
                <div class="d-flex bg-light shadow-sm border-top rounded mb-4" style="padding: 30px;">
                    <i class="flaticon-030-crayons h1 font-weight-normal text-primary mb-3"></i>
                    <div class="pl-4">
                        <h4>Arts and Crafts</h4>
                        <p class="m-0">Deskripsi kegiatan sekolah...</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 pb-1">
                <div class="d-flex bg-light shadow-sm border-top rounded mb-4" style="padding: 30px;">
                    <i class="flaticon-017-toy-car h1 font-weight-normal text-primary mb-3"></i>
                    <div class="pl-4">
                        <h4>Mini Games</h4>
                        <p class="m-0">Deskripsi kegiatan sekolah...</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 pb-1">
                <div class="d-flex bg-light shadow-sm border-top rounded mb-4" style="padding: 30px;">
                    <i class="flaticon-025-sandwich h1 font-weight-normal text-primary mb-3"></i>
                    <div class="pl-4">
                        <h4>Extracurricular</h4>
                        <p class="m-0">Deskripsi kegiatan sekolah...</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 pb-1">
                <div class="d-flex bg-light shadow-sm border-top rounded mb-4" style="padding: 30px;">
                    <i class="flaticon-047-backpack h1 font-weight-normal text-primary mb-3"></i>
                    <div class="pl-4">
                        <h4>Educational Tour</h4>
                        <p class="m-0">Deskripsi kegiatan sekolah...</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Facilities Start -->

<!-- Team Start -->
<div class="container-fluid pt-5">
    <div class="container">
        <div class="text-center pb-2">
            <h1 class="mb-4">
                <span class="text-success">Meet</span>
                <span class="text-secondary">Our Teacher</span>
            </h1>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-3 text-center team mb-5">
                <div class="position-relative overflow-hidden mb-4" style="border-radius: 100%;">
                    <img class="img-fluid w-100" src="{{ asset('img/teacher') }}/team-1.jpg" style="width: 0px; height: 260px" alt="">
                    <div
                        class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute">
                        <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px;"
                            href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px;"
                            href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light text-center px-0" style="width: 38px; height: 38px;"
                            href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <h4>Teacher 1</h4>
                <i></i>
            </div>
            <div class="col-md-6 col-lg-3 text-center team mb-5">
                <div class="position-relative overflow-hidden mb-4" style="border-radius: 100%;">
                    <img class="img-fluid w-100" src="{{ asset('img/teacher') }}/team-2.jpg" style="width: 0px; height: 260px" alt="">
                    <div
                        class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute">
                        <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px;"
                            href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px;"
                            href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light text-center px-0" style="width: 38px; height: 38px;"
                            href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <h4>Teacher 2</h4>
                <i></i>
            </div>
            <div class="col-md-6 col-lg-3 text-center team mb-5">
                <div class="position-relative overflow-hidden mb-4" style="border-radius: 100%;">
                    <img class="img-fluid w-100" src="{{ asset('img/teacher') }}/team-3.jpg" style="width: 0px; height: 260px" alt="">
                    <div
                        class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute">
                        <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px;"
                            href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px;"
                            href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light text-center px-0" style="width: 38px; height: 38px;"
                            href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <h4>Teacher 3</h4>
                <i></i>
            </div>
            <div class="col-md-6 col-lg-3 text-center team mb-5">
                <div class="position-relative overflow-hidden mb-4" style="border-radius: 100%;">
                    <img class="img-fluid w-100" src="{{ asset('img/teacher') }}/team-4.jpg" style="width: 0px; height: 260px" alt="">
                    <div
                        class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute">
                        <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px;"
                            href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px;"
                            href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light text-center px-0" style="width: 38px; height: 38px;"
                            href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <h4>Teacher 4</h4>
                <i></i>
            </div>
            <!-- <div class="col-md-6 col-lg-3 text-center team mb-5">
                <div class="position-relative overflow-hidden mb-4" style="border-radius: 100%;">
                    <img class="img-fluid w-100" src="{{ asset('img/teacher') }}/team-1.jpg" style="width: 0px; height: 260px" alt="">
                    <div
                        class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute">
                        <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px;"
                            href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px;"
                            href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light text-center px-0" style="width: 38px; height: 38px;"
                            href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <h4>Teacher</h4>
                <i></i>
            </div>
            <div class="col-md-6 col-lg-3 text-center team mb-5">
                <div class="position-relative overflow-hidden mb-4" style="border-radius: 100%;">
                    <img class="img-fluid w-100" src="{{ asset('img/teacher') }}/team-2.jpg" style="width: 0px; height: 260px" alt="">
                    <div
                        class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute">
                        <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px;"
                            href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px;"
                            href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light text-center px-0" style="width: 38px; height: 38px;"
                            href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <h4>Teacher</h4>
                <i></i>
            </div>
            <div class="col-md-6 col-lg-3 text-center team mb-5">
                <div class="position-relative overflow-hidden mb-4" style="border-radius: 100%;">
                    <img class="img-fluid w-100" src="{{ asset('img/teacher') }}/team-3.jpg" style="width: 0px; height: 260px" alt="">
                    <div
                        class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute">
                        <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px;"
                            href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px;"
                            href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light text-center px-0" style="width: 38px; height: 38px;"
                            href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <h4>Teacher</h4>
                <i></i>
            </div>
            <div class="col-md-6 col-lg-3 text-center team mb-5">
                <div class="position-relative overflow-hidden mb-4" style="border-radius: 100%;">
                    <img class="img-fluid w-100" src="{{ asset('img/teacher') }}/team-4.jpg" style="width: 0px; height: 260px" alt="">
                    <div
                        class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute">
                        <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px;"
                            href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px;"
                            href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light text-center px-0" style="width: 38px; height: 38px;"
                            href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <h4>Teacher</h4>
                <i></i>
            </div> -->
        </div>
    </div>
</div>
<!-- Team End -->


@if($pengumuman->count() > 0)
<section class="upcoming-events section-padding-100-0">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading">
                    <h3>Pengumuman Terbaru</h3>
                </div>
            </div>
        </div>

        <div class="row">
            @foreach($pengumuman as $pn)
            <div class="col-12 col-md-6 col-lg-6">
                <div class="single-upcoming-events mb-50 wow fadeInUp" data-wow-delay="250ms">
                    <!-- Events Thumb -->
                    <div class="events-thumb">
                        <img src="{{ asset('img/bg') }}/pengumuman.png" alt="">
                        <h6 class="event-date">{{ $pn->tgl }} | BY : {{ $pn->user->name }}</h6>
                        <h4 class="event-title">{{ $pn->judul }}</h4>
                    </div>
                    <div>
                        <a href="{{ route('pengumuman.show',$pn->slug) }}" class="btn btn-primary col-lg">Detail</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="row">
            <a href="{{ route('pengumuman') }}" class="alert alert-success alert-link mx-auto">Lihat Semua Pengumuman</a>
        </div>
    </div>
</section>
@endif

@if($artikel->count() > 0)
<!-- ##### Artikel ##### -->
<section class="blog-area section-padding-100-0 mb-50">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading">
                    <h3>Artikel Terbaru</h3>
                </div>
            </div>
        </div>

        <div class="row">

            @foreach($artikel as $art)
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        {{ $art->judul }}

                        <span class="badge badge-danger float-right">Author : {{ $art->user->name }}</span>
                    </div>
                    <div class="card-body">
                        <img src="{{ asset($art->getThumbnail()) }}" width="100%" style="height: 300px; object-fit: cover; object-position: center;">

                        <div class="card-text mt-3">
                            {!! Str::limit($art->deskripsi) !!}
                        </div>

                        <a href="{{ route('artikel.show',$art->slug) }}" class="btn btn-primary btn-sm">Selengkapnya</a>
                    </div>
                    <div class="card-footer">
                        <span class="badge badge-primary float-right">kategori : {{ $art->kategoriArtikel->nama_kategori }}</span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="row mt-3">
            <a href="{{ route('artikel') }}" class="alert alert-success alert-link mx-auto mt-3">Lihat Semua Artikel</a>
        </div>
    </div>
</section>
@endif

@stop