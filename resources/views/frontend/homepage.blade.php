@extends('frontend.layouts.main')
@section('content')
<style>
    :root {
        --main-color: #000000;
        --grey: #eeeeee;
        --bg: #ffffff;
        --border: .1rem solid rgba(255, 255, 255, .3);
    }

    .word {
        /* position: absolute; */
        width: 694px;
        height: 196px;

        font-family: 'Montserrat';
        font-style: normal;
        font-weight: 500;
        font-size: 35px;
        line-height: 43px;
        align-items: center;
        color: #000000;
    }

    .btn-mulai {
        left: 80px;
        top: 400px;
        padding: 0.8em 1.8em;
        border: 2px solid #F94444;
        /* position: relative; */
        overflow: hidden;
        background-color: transparent;
        text-align: center;
        text-transform: uppercase;
        font-size: 16px;
        transition: .3s;
        z-index: 1;
        font-family: inherit;
        color: #F94444;
    }

    .btn-mulai::before {
        content: '';
        width: 0;
        height: 300%;
        /* position: absolute; */
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%) rotate(45deg);
        background: #F94444;
        transition: .5s ease;
        display: block;
        z-index: -1;
    }

    .btn-mulai:hover::before {
        width: 105%;
    }

    .btn-mulai:hover {
        color: rgb(255, 255, 255);
    }

    .title {
        /* position: absolute; */
        width: 210px;
        height: 37px;
        left: 81px;
        top: 502px;
        font-family: 'Montserrat';
        font-style: normal;
        font-weight: 700;
        font-size: 30px;
        line-height: 37px;
        display: flex;
        align-items: center;
        color: #000000;
    }

    .image {
        /* position: absolute; */
        width: 346px;
        height: 346px;
        left: 858px;
        top: 96px;
    }

    .card-container {
        /* position: absolute; */
        width: 100%;
        height: 420px;

        /* display: flex; */
        flex-wrap: nowrap;
        justify-content: center;
        overflow-x: scroll;
        overflow-y: hidden;
        -ms-overflow-style: -ms-autohiding-scrollbar;
    }

    .card-wrap {
        width: 2925px;
        display: flex;
        flex-wrap: nowrap;
    }

    .card-image {
        width: 201px;
        height: 318px;
        margin: 20px;
        background-image: url("{{ asset('assets/image/gradientbg.png') }}");
        border-radius: 10px;
        background-size: cover;
        background-repeat: no-repeat;
        /* background-position: center; */
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 20px;
    }

    .card-image img {
        width: 87px;
        height: 87px;
    }

    /* .box-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    margin-top: 800px;
} */
    /* .box-container {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(20rem, 1fr));
    gap: 1.5rem;
    padding: 10rem;
    /* position: relative; 
    width: 1100px;
    top: 700px;
    left: 50%;
    transform: translate(-50%, -50%);
} */
    .box-text {
        /* position: absolute; */
        width: 706px;
        height: 43px;

        font-family: 'Inter';
        font-style: normal;
        font-weight: 700;
        font-size: 35px;
        line-height: 42px;
        display: flex;
        align-items: center;
        text-align: center;
        color: #000000;
    }

    .box {
        width: 277px;
        height: 272px;

        background-color: var(--grey);
        border-radius: 20px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
    }

    .img-box {
        width: 242px;
        height: 75px;
        border: 2px solid lightgray;
        /* margin-top: 50px;
  margin-left: 95px; */
        display: flex;
        /* float: left; */
        align-items: center;
        justify-content: center;

    }

    .modified-img {
        width: 150px;
        height: auto;
    }

    .modified-apple {
        width: 40px;
        height: auto;
    }

    .modified-telkom {
        width: 200px;
        height: 50px;
    }

    .modified-img2 {
        width: 150px;
        height: 90px;
    }

    .modified-bsi {
        width: 90px;
        height: 80px;
    }

    .modified-arduino {
        width: 80px;
        height: 60px;
    }

    #box {
        background-color: #f94444;
        height: 540px;
    }

    /* .modify-title {
        position: absolute;
        height: 37px;

        transform: translateX(-50%);
        font-family: system-ui, sans-serif;
        font-style: normal;
        font-weight: 700;
        font-size: 28px;
        line-height: 36px;
        display: flex;
        align-items: center;
        text-align: center;
        color: #FFFFFF;
    }

    .modify-recom {
        font-family: system-ui, sans-serif;
        font-style: normal;
        font-weight: 600;
        font-size: 25px;
        line-height: 30px;
        display: flex;
        align-items: center;
        letter-spacing: 0.075em;
        color: #FFFFFF;

    }

    .modify-button {
        font-family: system-ui, sans-serif;
        font-style: normal;
        font-weight: 600;
        font-size: 14px;
        line-height: 17px;
        padding-left: 24px;
        display: flex;
        align-items: center;
        text-align: center;
        letter-spacing: 0.12em;
        color: #FFFFFF;
        box-sizing: border-box;
        height: 39px;
        background: #F94444;
        border: 2px solid #FFFFFF;
        border-radius: 30px;
        margin-top: 20px;
    }

    .modify-ellipse {
        bottom: 0;
        left: 0;
    }

    .modify-dot {
        top: 0;
        right: 0;
    } */

    .container {
        margin-top: 5%;

    }

    h2 {
        font-size: 20px;
        font-weight: semi-bold;
    }

    .img-text {
        display: block;
        padding: 7% 5%;
        border-radius: 10px;
        background-color: #f2f2f2;
    }

    .img-area {
        margin-bottom: 5px;
    }

    /* .carousel-indicators {
        /* left: 0;
        top: auto;
        bottom: -40px; 
    } */

    .carousel-indicators button {
        /* left: 0;
        top: auto; */
        bottom: -40px;
        background-color: grey;
    }

    .carousel-indicators .inactive {
        background-color: grey;
    }

    .carousel-indicators .active {
        background-color: red;
    }
</style>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<link href="https://cdnjs.cloudlfare.com/ajax/libs/twitter-bootstrap.min.css" rel="" stylesheet>
<main class="mt-5">
    <div class="container-fluid p-5">
        <div class="header">
            <div class="row">
                <div class="col">
                    <div class="word">
                        <h3>Bangun Karirmu Sebagai Developer Profesional</h3>
                        <p>Mulai belajar terarah dengan learning path</p>
                    </div>
                    <button class="btn-mulai"> Mulai Belajar </button>
                </div>
                <div class="col-auto">
                    <img class="image" src="{{ asset('assets/image/icon/education.png') }}" alt="Education">
                </div>
            </div>
        </div>
        <div class="category">
            <div class="row mt-5">
                <div class="Category container-fluid">
                    <a class="title">
                        <p>Top Category</p>
                    </a>
                    <div class="card-container">
                        <div class="card-wrap">
                            <div class="card-image">
                                <img src="{{ asset('assets/image/icon/jsicon.png') }}" alt="JavaScript Icon">
                            </div>
                            <div class="card-image">
                                <img src="{{ asset('assets/image/icon/pyicon.png') }}" alt="Python Icon">
                            </div>
                            <div class="card-image">
                                <img src="{{ asset('assets/image/icon/htmlicon.png') }}" alt="HTML Icon">
                            </div>
                            <div class="card-image">
                                <img src="{{ asset('assets/image/icon/cssicon.png') }}" alt="CSS Icon">
                            </div>
                            <div class="card-image">
                                <img src="{{ asset('assets/image/icon/darticon.png') }}" alt="Dart Icon">
                            </div>
                            <div class="card-image">
                                <img src="{{ asset('assets/image/icon/phpicon.png') }}" alt="PHP Icon">
                            </div>
                            <div class="card-image">
                                <img src="{{ asset('assets/image/icon/laravelicon.png') }}" alt="Laravel Icon">
                            </div>
                            <div class="card-image">
                                <img src="{{ asset('assets/image/icon/csharpicon.png') }}" alt="Csharp Icon">
                            </div>
                            <div class="card-image">
                                <img src="{{ asset('assets/image/icon/cplusicon.png') }}" alt="Cplus Icon">
                            </div>
                            <div class="card-image">
                                <img src="{{ asset('assets/image/icon/swiftuiicon.png') }}" alt="SwiftUI Icon">
                            </div>
                            <div class="card-image">
                                <img src="{{ asset('assets/image/icon/rubyicon.png') }}" alt="Ruby Icon">
                            </div>
                            <div class="card-image">
                                <img src="{{ asset('assets/image/icon/javaicon.png') }}" alt="Java Icon">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="sponsor">
            <div class="row mt-5">
                <div class="col text-center">
                    <h1>Telah dipercayai oleh</h1>
                </div>
            </div>
            <div class="d-flex flex-row d-flex justify-content-around mb-5">
                <div class="flex-col">
                    <div class="img-box">
                        <img class="modified-img" src="{{ asset('assets/image/sponsor/googlePNG.png') }}" title="Google">
                    </div>
                </div>
                <div class="flex-col">
                    <div class="img-box">
                        <img class="modified-img" src="{{ asset('assets/image/sponsor/microsoftPNG.png') }}" title="Microsoft">
                    </div>
                </div>
                <div class="flex-col">
                    <div class="img-box">
                        <img class="modified-apple" src="{{ asset('assets/image/sponsor/AppleSVG.svg') }}" title="Apple">
                    </div>
                </div>
                <div class="flex-col">
                    <div class="img-box">
                        <img class="modified-img" src="{{ asset('assets/image/sponsor/netflixPNG.png') }}" title="Netflix">
                    </div>
                </div>
            </div>
            <div class="d-flex flex-row d-flex justify-content-around mb-5">
                <div class="flex-col">
                    <div class="img-box">
                        <img class="modified-img" src="{{ asset('assets/image/sponsor/amazonPNG.png') }}" title="Amazon">
                    </div>
                </div>
                <div class="flex-col">
                    <div class="img-box">
                        <img class="modified-telkom" src="{{ asset('assets/image/sponsor/telkomSVG.svg') }}" title="Telkom">
                    </div>
                </div>
                <div class="flex-col">
                    <div class="img-box">
                        <img class="modified-img" src="{{ asset('assets/image/sponsor/djarumSVG.svg') }}" title="Djarum">
                    </div>
                </div>
                <div class="flex-col">
                    <div class="img-box">
                        <img class="modified-img" src="{{ asset('assets/image/sponsor/oraclePNG.png') }}" title="Oracle">
                    </div>
                </div>
            </div>
            <div class="d-flex flex-row d-flex justify-content-around mb-5">
                <div class="flex-col">
                    <div class="img-box">
                        <img class="modified-img2" src="{{ asset('assets/image/sponsor/mitPNG.png') }}" title="MIT">
                    </div>
                </div>
                <div class="flex-col">
                    <div class="img-box">
                        <img class="modified-img2" src="{{ asset('assets/image/sponsor/metaPNG.png') }}" title="META">
                    </div>
                </div>
                <div class="flex-col">
                    <div class="img-box">
                        <img class="modified-bsi" src="{{ asset('assets/image/sponsor/bsiPNG.png') }}" title="BSI">
                    </div>
                </div>
                <div class="flex-col">
                    <div class="img-box">
                        <img class="modified-arduino" src="{{ asset('assets/image/sponsor/arduinoPNG.png') }}" title="Arduino">
                    </div>
                </div>
            </div>
        </div>

        <div id="box" class="container-fluid">
            <!-- <div class="row">
                <div class="col-md-6 text-center position-relative">
                    <h1 class="modify-title">Siap Berkarir Setelah Belajar Di RUSCATION</h1>
                    <img class="modify-ellipse position-absolute" src="assets/image/redpage/multi elipse.png" alt="#">
                    <img class="modify-triangle position-absolute" src="assets/image/redpage/Triangle.png" alt="#">
                    <img class="modify-right-tri position-absolute" src="assets/image/redpage/Half triangle.png" alt="#">
                    <img class="modify-dot position-absolute" src="assets/image/redpage/Dot.png" alt="#">
                    <img class="modify-image position-absolute" src="assets/image/redpage/picture.png" alt="#">
                </div>

                <div class="col-md-6 text-center my-auto">
                    <h2 class="modify-recom">Beli Minimal 2 Kelas, Lalu Ikuti Career Mentoring dan Dapatkan Konsultasi Gratis untuk Persiapan Kerja!</h2>
                    <button class="modify-button" href="#">Lihat Selengkapnya</button>
                </div>
            </div> -->
        </div>



        <div class="d-flex justify-content-center">
            <p class="text-center font-weight-bold" style="font-size: 35px; line-height: 42px; color: #000000;">Kenapa Harus Ikut Kursus di RUSCATION</p>
        </div>

        <div class="container box-container">
            <div class="row">
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="box p-4">
                        <img src="{{ asset('assets/image/icon/beasiswa.png') }}" alt="Beasiswa Icon" class="mb-4">
                        <h3 class="mb-3">Beasiswa up to 80%</h3>
                        <p class="mb-0">Hemat biaya dengan beasiswa tambahan untuk umum & mahasiswa</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="box p-4">
                        <img src="{{ asset('assets/image/icon/magang.png') }}" alt="Magang Icon" class="mb-4">
                        <h3 class="mb-3">Kesempatan Magang</h3>
                        <p class="mb-0">Lulusan terbaik berkesempatan direkrut magang oleh perusahaan partner RUSCATION</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="box p-4">
                        <img src="{{ asset('assets/image/icon/sertificate.png') }}" alt="Sertifikasi Icon" class="mb-4">
                        <h3 class="mb-3">Sertifikasi BNSP</h3>
                        <p class="mb-0">Ada sertifikat profesi dan serifikat kursus sesuai topik yang kamu pelajari</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="box p-4">
                        <img src="{{ asset('assets/image/icon/dilatih.png') }}" alt="Dilatih Icon" class="mb-4">
                        <h3 class="mb-3">Dilatih Sampai Jago</h3>
                        <p class="mb-0">Semua materi dan simulasi disesuaikan untuk pemula pastinya dibantu belajar sampai paham</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="box p-4">
                        <img src="{{ asset('assets/image/icon/kurikulum.png') }}" alt="Kurikulum Icon" class="mb-4">
                        <h3 class="mb-3">
                            Kurikulum Siap Kerja</h3>
                        <p class="mb-0">Materi dikurasi untuk persiapan keriermu atau tingkatkan performamu di kantor</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="box p-4">
                        <img src="{{ asset('assets/image/icon/jadwal.png') }}" alt="Jadwal Icon" class="mb-4">
                        <h3 class="mb-3">Jadwal Menyenangkan</h3>
                        <p class="mb-0">Bootcamp dijadwalkan 2-3 sesi per minggu. Fleksibel banget buat kamu yang sambil bekerja atau
                            kuliah</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-center">
            <p class="text-center font-weight-bold" style="font-size: 35px; line-height: 42px; color: #000000;">Testimoni Alumni</p>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" class="inactive" aria-label="Slide 2"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="single-box">
                                            <div class="img-text">
                                                <div class="img-area"><img src="assets/image/testimoni/tp.png" alt=""></div>
                                                <p>Mengikuti bootcamp : Digital Marketing Accelerated Bootcamp Batch 1. Materinya lengkap, mulai dari perkembangan Digital Marketing, tren hingga potensi karier dan cara menjalanjan campaign yang...</p>
                                                <h2>Gibran</h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="single-box">

                                            <div class="img-text">
                                                <div class="img-area"><img src="assets/image/testimoni/tp.png" alt=""></div>
                                                <p>Mengikuti bootcamp : Digital Marketing Accelerated Bootcamp Batch 1. Materinya lengkap, mulai dari perkembangan Digital Marketing, tren hingga potensi karier dan cara menjalanjan campaign yang...</p>
                                                <h2>Andra</h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="single-box">

                                            <div class="img-text">
                                                <div class="img-area"><img src="assets/image/testimoni/tp.png" alt=""></div>
                                                <p>Mengikuti bootcamp : Digital Marketing Accelerated Bootcamp Batch 1. Materinya lengkap, mulai dari perkembangan Digital Marketing, tren hingga potensi karier dan cara menjalanjan campaign yang...</p>
                                                <h2>Bahtiar</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="single-box">

                                            <div class="img-text">
                                                <div class="img-area"><img src="assets/image/testimoni/tp.png" alt=""></div>
                                                <p>Mengikuti bootcamp : Digital Marketing Accelerated Bootcamp Batch 1. Materinya lengkap, mulai dari perkembangan Digital Marketing, tren hingga potensi karier dan cara menjalanjan campaign yang...</p>
                                                <h2>Umam</h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="single-box">

                                            <div class="img-text">
                                                <div class="img-area"><img src="assets/image/testimoni/tp.png" alt=""></div>
                                                <p>Mengikuti bootcamp : Digital Marketing Accelerated Bootcamp Batch 1. Materinya lengkap, mulai dari perkembangan Digital Marketing, tren hingga potensi karier dan cara menjalanjan campaign yang...</p>
                                                <h2>Ilman</h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="single-box">

                                            <div class="img-text">
                                                <div class="img-area"><img src="assets/image/testimoni/tp.png" alt=""></div>
                                                <p>Mengikuti bootcamp : Digital Marketing Accelerated Bootcamp Batch 1. Materinya lengkap, mulai dari perkembangan Digital Marketing, tren hingga potensi karier dan cara menjalanjan campaign yang...</p>
                                                <h2>Abhi</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.1/js/bootstrap.min.js"></script>
</main>
@endsection