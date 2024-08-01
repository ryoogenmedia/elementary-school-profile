@extends('layouts.index')

@section('content')
    <section class="hero-section">
        <div class="hero-slider owl-carousel">
            <div class="hs-item set-bg" data-setbg="{{ asset('frontend/img/ryoogen/school.jpg') }}">
                <div class="hs-text" style="background-color: rgba(0, 0, 0, 0.473)">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="hs-subtitle">VISI</div>
                                <h2 class="hs-title">Menciptakan Anak Yang Aktif dan Berakhlak Mulia.</h2>
                                <p class="hs-des">Menyediakan metode pembelajaran dengan kurikulum merdeka, menciptkan ruang
                                    lingkup yang baik untuk anak-anak dengan metode pengajaran guru yang baik. <br> Kami
                                    bersedia membangun anak untuk masa depan bangsa</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="hs-item set-bg" data-setbg="{{ asset('frontend/img/ryoogen/student.jpg') }}">
                <div class="hs-text" style="background-color: rgba(0, 0, 0, 0.473)">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="hs-subtitle">Misi</div>
                                <h2 class="hs-title">Kami bersedia mencerdaskan anak bangsa.</h2>
                                <p class="hs-des">Kami sebagai guru akan bersedia mencerdaskan anak-anak demi masa depan
                                    anak kita. <br> Dengan metode pembelajaran yang aktif dan interaktif.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="counter-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-6">
                    <div class="big-icon">
                        <i class="fa fa-map-marker"></i>
                    </div>
                    <div class="counter-content">
                        <h2>SDN INPRES PAJAIANG MAKASSAR</h2>
                        <p><i class="fa fa-calendar-o"></i>Jl Pajaiang, Biringkanaya Kota Makassar</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="courses-section spad">
        <div class="container">
            <div class="section-title text-center">
                <h3>EKSTRAKULIKULER</h3>
                <p>Kami menyediakan beberapa ektrakulikuler untuk mendukung kreativitas dan sosial anak.</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 course-item">
                    <div class="course-thumb">
                        <img src="{{ asset('frontend/img/ryoogen/student.jpg') }}" alt>
                        <div class="course-cat">
                            <span>DETAIL</span>
                        </div>
                    </div>
                    <div class="course-info">
                        <h4>Drum Band Sekolah</h4>
                        <p>Kegiatan drum band merupakan kegiatan marchine band sekolah untuk melatih bakat anak.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 course-item">
                    <div class="course-thumb">
                        <img src="{{ asset('frontend/img/ryoogen/student.jpg') }}" alt>
                        <div class="course-cat">
                            <span>DETAIL</span>
                        </div>
                    </div>
                    <div class="course-info">
                        <h4>Pramuka</h4>
                        <p>Kegiatan pramuka merupakan kegiatan wajib bagi seluruh anak, untuk melatih rasa nasionalisme dan
                            kedisiplinan anak.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 course-item">
                    <div class="course-thumb">
                        <img src="{{ asset('frontend/img/ryoogen/student.jpg') }}" alt>
                        <div class="course-cat">
                            <span>DETAIL</span>
                        </div>
                    </div>
                    <div class="course-info">
                        <h4>TIK (Teknologi Informasi Komunikasi)</h4>
                        <p>Kegiatan TIK (Teknologi Informasi Komunikasi), merupakan kegiatan untuk melatih bakat anak dalam
                            bidang sains dan teknologi komputer.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="fact-section spad set-bg" data-setbg="img/fact-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-3 fact">
                    <div class="fact-icon">
                        <i class="ti-crown"></i>
                    </div>
                    <div class="fact-text">
                        <h2>50</h2>
                        <p>PENGAJAR</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 fact">
                    <div class="fact-icon">
                        <i class="ti-briefcase"></i>
                    </div>
                    <div class="fact-text">
                        <h2>80</h2>
                        <p>STAFF</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 fact">
                    <div class="fact-icon">
                        <i class="ti-user"></i>
                    </div>
                    <div class="fact-text">
                        <h2>500</h2>
                        <p>MURID</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 fact">
                    <div class="fact-icon">
                        <i class="ti-pencil-alt"></i>
                    </div>
                    <div class="fact-text">
                        <h2>800+</h2>
                        <p>ALUMNI</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="blog-section spad">
        <div class="container">
            <div class="section-title text-center">
                <h3>BERITA TERBARU</h3>
                <p>Silahkan baca berita terbaru kami.</p>
            </div>
            <div class="row">
                <div class="col-xl-6">
                    <div class="blog-item">
                        <div class="blog-thumb set-bg" data-setbg="{{ asset('frontend/img/ryoogen/student.jpg') }}"></div>
                        <div class="blog-content">
                            <h4><a class="text-black" href="" style="color: black">Lomba 17 Agustusan</a></h4>
                            <div class="blog-meta">
                                <span><i class="fa fa-calendar-o"></i> 24 Mar 2018</span>
                                <span><i class="fa fa-user"></i> Owen Wilson</span>
                            </div>
                            <p>Pada tanggal 17 Agustus tahun ini kami merakayakan HUT RI yang ke 76 dengan mengadakan lomba
                                kepada para siswa.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="gallery-section">
        <div class="gallery">
            <div class="grid-sizer"></div>
            <div class="gallery-item gi-big set-bg" data-setbg="{{ asset('frontend/img/ryoogen/school.jpg') }}">
                <a class="img-popup" href="{{ asset('frontend/img/ryoogen/school.jpg') }}"><i class="ti-plus"></i></a>
            </div>
            <div class="gallery-item set-bg" data-setbg="{{ asset('frontend/img/ryoogen/student.jpg') }}">
                <a class="img-popup" href="{{ asset('frontend/img/ryoogen/student.jpg') }}"><i class="ti-plus"></i></a>
            </div>
            <div class="gallery-item set-bg" data-setbg="{{ asset('frontend/img/ryoogen/student.jpg') }}">
                <a class="img-popup" href="{{ asset('frontend/img/ryoogen/student.jpg') }}"><i class="ti-plus"></i></a>
            </div>
            <div class="gallery-item set-bg" data-setbg="{{ asset('frontend/img/ryoogen/student.jpg') }}">
                <a class="img-popup" href="{{ asset('frontend/img/ryoogen/student.jpg') }}"><i class="ti-plus"></i></a>
            </div>
            <div class="gallery-item set-bg" data-setbg="{{ asset('frontend/img/ryoogen/student.jpg') }}">
                <a class="img-popup" href="{{ asset('frontend/img/ryoogen/student.jpg') }}"><i class="ti-plus"></i></a>
            </div>
            <div class="gallery-item set-bg" data-setbg="{{ asset('frontend/img/ryoogen/student.jpg') }}">
                <a class="img-popup" href="{{ asset('frontend/img/ryoogen/student.jpg') }}"><i class="ti-plus"></i></a>
            </div>
            <div class="gallery-item set-bg" data-setbg="{{ asset('frontend/img/ryoogen/student.jpg') }}">
                <a class="img-popup" href="{{ asset('frontend/img/ryoogen/student.jpg') }}"><i class="ti-plus"></i></a>
            </div>
            <div class="gallery-item set-bg" data-setbg="{{ asset('frontend/img/ryoogen/student.jpg') }}">
                <a class="img-popup" href="{{ asset('frontend/img/ryoogen/student.jpg') }}"><i class="ti-plus"></i></a>
            </div>
            <div class="gallery-item set-bg" data-setbg="{{ asset('frontend/img/ryoogen/student.jpg') }}">
                <a class="img-popup" href="{{ asset('frontend/img/ryoogen/student.jpg') }}"><i class="ti-plus"></i></a>
            </div>
            <div class="gallery-item set-bg" data-setbg="{{ asset('frontend/img/ryoogen/student.jpg') }}">
                <a class="img-popup" href="{{ asset('frontend/img/ryoogen/student.jpg') }}"><i class="ti-plus"></i></a>
            </div>
            <div class="gallery-item set-bg" data-setbg="{{ asset('frontend/img/ryoogen/student.jpg') }}">
                <a class="img-popup" href="{{ asset('frontend/img/ryoogen/student.jpg') }}"><i class="ti-plus"></i></a>
            </div>
            <div class="gallery-item set-bg" data-setbg="{{ asset('frontend/img/ryoogen/student.jpg') }}">
                <a class="img-popup" href="{{ asset('frontend/img/ryoogen/student.jpg') }}"><i class="ti-plus"></i></a>
            </div>
            <div class="gallery-item set-bg" data-setbg="{{ asset('frontend/img/ryoogen/student.jpg') }}">
                <a class="img-popup" href="{{ asset('frontend/img/ryoogen/student.jpg') }}"><i class="ti-plus"></i></a>
            </div>
        </div>
    </div>

    <section class="newsletter-section">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-lg-7">
                    <div class="section-title mb-md-0">
                        <h3>IKUTI BERITA & INFORMASI KAMI</h3>
                        <p>Ikuti dan dapatkan berita dan informasi terbaru dari kami.</p>
                    </div>
                </div>
                <div class="col-md-7 col-lg-5">
                    <form class="newsletter">
                        <input type="text" placeholder="Enter your email">
                        <button class="site-btn">SUBSCRIBE</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
