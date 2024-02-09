@extends('landing_page.layouts.app')


@section('content')
    <!-- Carousel -->
    <div id="carousel">
        <div id="carouselExampleControls" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('img/landing-page/carousel-1.png') }}" class="d-block w-100 c-img" alt="...">
                    <div class="carousel-caption carousel-caption-1">
                        <h1>SISTEM INFORMASI</h5>
                            <h3>DESA Margasana <br> Kabupaten Cilacap</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam magni voluptatum est.
                                Reprehenderit, eveniet earum. Voluptatum quo recusandae fugiat accusamus.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('img/landing-page/carousel-2.png') }}" class="d-block w-100 c-img" alt="...">
                    <div class="carousel-caption carousel-caption-2">
                        <h1>PENGAJUAN SURAT ONLINE</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas eius in accusamus iure
                                perferendis ducimus itaque commodi dicta, sit nisi officiis quidem delectus nobis
                                perspiciatis tempora id at enim necessitatibus non aperiam consequatur atque labore.
                                Quod ipsam quis veritatis aliquam rem, quasi expedita, velit temporibus cumque deleniti
                                quaerat architecto sequi?</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('img/landing-page/carousel-3.jpg') }}" class="d-block w-100 c-img" alt="...">
                    <div class="carousel-caption carousel-caption-2">
                        <h1>AKSES INFORMASI <br> TERBARU</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam magni voluptatum est.
                                Reprehenderit, eveniet earum. Voluptatum quo recusandae fugiat accusamus.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="prev">
                <img src="{{ asset('img/landing-page/arrow-left.svg') }}" alt="">
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="next">
                <img src="{{ asset('img/landing-page/arrow-right.svg') }}" alt="">
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- End Carousel -->
    <!-- Section About Us / Tentang Desa -->
    <section id="about-us" class="container">
        <div id="header-section" class="text-center">
            <h2>Tentang Desa</h2>
        </div>
        <div id="body">
            <div class="row">
                <div class="col-md-6 text-center align-self-center">
                    <p class="lh-lg"><strong>Desa Margasana</strong> kategori desa Swasembada, dengan jumlah
                        perangkat
                        desa 7 orang,
                        1 orang Sekdes dan di Kepala Desa Saat ini
                        dijabat oleh Kepala desa Antar Waktu yang dilantik pada 6 Agustus 2022. Penduduk berjumlah
                        1735 orang laki-laki dan
                        perempuan. Kontur tanahnya tergolong ngare, yang terdiri tanah pemukiman, persawahan.</p>
                </div>
                <div class="col-md-6 text-center align-self-center">
                    <img src="./img/landing-page/about-us.jpg" width="90%"
                        alt="Tentang Desa Margasana | Petani Desa Semarak">
                </div>
            </div>
        </div>
    </section>


    <!-- Section Visi Misi -->
    <section id="visi-misi" class="bg-light">
        <div id="header-section" class="text-center">
            <h2 class="pt-4">Visi Misi Desa</h2>
        </div>
        <div id="body" class="container pb-5">
            <div class="row">
                <div class="col-md-6 text-center align-self-center">
                    <img src="{{ asset('img/landing-page/visi-misi.png') }}" width="90%"
                        alt="Tentang Desa Margasana | Petani Desa Semarak">
                </div>
                <div class="col-md-6 align-self-center px-3 mt-5 mt-lg-0">
                    <div>
                        <h4 class="fw-bold">Visi</h4>
                        <p class="fw-light"><i>“ MEWUJUDKAN DESA KENJE MENJADI DESA MANDIRI, MAJU, SEJAHTERA,
                                PRODUKTIF, AGAMAIS
                                “</i></p>
                    </div>
                    <div>
                        <h4 class="fw-bold mt-5">Misi</h4>
                        <ol class="lh-lg">
                            <li>Meningkatkan kualitas kesejahteraan warga masyarakat yang berdaya saing.</li>
                            <li>Memberikan pemenuhan segala hak hak kebutuhan dasar warga masyarakat
                                Desa Kenje.</li>
                            <li>Pembangunan yang terarah dan terencana serta berkesinambungan.</li>
                            <li>Meningkatkan aktifitas keagamaan, budaya, sosial kemasyarakatan serta mendorong
                                kegiatan ekstra korikuler kepemudaan.</li>
                            <li>Menyelenggarakan pemerintahan yang bersih dan transparan serta bertanggung jawab.
                            </li>
                            <li>Merancang Website Portal Berita Desa agar pembangunan desa lebih transparan kepada
                                masyarakat Desa Kenje maupun
                                masyarakat luas.</li>
                            <li>Membangun Kemitraan Pemerintah swasta.</li>
                            <li>Pemenuhan gizi ibu dan anak.</li>
                        </ol>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Section Sejarah -->
    <section id="sejarah" class="container">
        <div id="header-section" class="text-center">
            <h2>Sejarah Desa</h2>
        </div>
        <div id="body" class="text-center">
            <p class="lh-lg">It is a long established fact that a reader will be distracted by the readable
                content
                of a page when looking at its
                layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,
                as opposed to using
                'Content here, content here. It is a long established fact that a reader will be distracted by the
                readable content of a
                page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                distribution of
                letters, as opposed to using 'Content here, content here. It is a long established fact that a
                reader will be distracted
                by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that
                it has a
                more-or-less normal distribution of letters, as opposed to using 'Content here, content here. It is
                a long established
                fact that a reader will be distracted by the readable content of a page when looking at its layout.
                The point of using
                Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using
                'Content here, content
                here.</p>
        </div>
    </section>

    <section id="demografi" class="bg-light">
        <div id="header-section" class="text-center">
            <h2 class="pt-4">Demografi Desa</h2>
        </div>
        <div id="body" class="container pb-5">
            <div class="row">
                <div class="col-md-6 text-center align-self-center">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d31708.433439858523!2d111.070051!3d-6.577808!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e712b21ff9c7c81%3A0x76883713aeb22cea!2sMargasana%2C%20Margoyoso%2C%20Pati%20Regency%2C%20Central%20Java%2C%20Indonesia!5e0!3m2!1sen!2sus!4v1681891467774!5m2!1sen!2sus"
                        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col-md-6 align-self-center mt-5 mt-lg-0 px-md-5">
                    <p class="lh-lg">
                        <strong>Desa Margasana</strong>, desa yang berbatasan dengan desa Kecamatan Tayu, kontur
                        daerahnya termasuk
                        daerah ngare yang berpenduduk dan mempunyai lahan sawah dan lahan tambak, yang paling timur
                        dibatasi oleh laut Jawa.

                        <br>
                        <br>
                        Letak desa Margasana Kecamatan Margoyoso Kab. Pati secara rinci sbb:
                        Desa Kenje terletak pada batas wilayahnya

                    <ul>
                        <li>Sebelah utara berbatasan dengan Desa Margomulyo Kec. Tayu</li>
                        <li>Sebelah selatan berbatasan dengan desa Margotuhu Kidul, Margoyoso, Ngemplak Lor</li>
                        <li>Sebelah timur berbatasan Laut Jawa.</li>
                        <li>Sebelah Barat berbatasan Desa Ngemplak Lor.</li>
                    </ul>
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
