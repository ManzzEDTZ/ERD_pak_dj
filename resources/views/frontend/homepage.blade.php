@extends('frontend.layouts.main')
@section('content')
<style>
    :root {
    --main-color: #000000;
    --grey: #eeeeee;
    --bg: #ffffff;
     --border:.1rem solid rgba(255, 255, 255, .3); 
}

.word {
    /* position: absolute; */
    width: 694px;
    height: 196px;
    left: 80px;
    top: 164px;

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
    top: 574px;
    left: 80px;

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

.box-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    margin-top: 800px;
}

.box-container {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(20rem, 1fr));
    gap: 1.5rem;
    padding: 10rem;
    /* position: relative; */
    width: 1100px;
    top: 700px;

    left: 50%;
    transform: translate(-50%, -50%);
}

.box-text {
    /* position: absolute; */
    width: 706px;
    height: 43px;
    left: 287px;
    top: 1100px;

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
    left: 80px;
    top: 1350px; 
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


.modified-img{
    width: 150px;
    height: auto;
}

.modified-apple{
    width: 40px;
    height: auto;
}

.modified-telkom{
    width: 200px;
    height: 50px;
}

.modified-img2{
    width: 150px;
    height: 90px;
}

.modified-bsi{
    width: 90px;
    height: 80px;
}

.modified-arduino{
    width: 80px;
    height: 60px;
}
</style>

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
                            <a href="#">
                                <div class="card-image">
                                    <img src="{{ asset('assets/image/icon/jsicon.png') }}" alt="JavaScript Icon">
                                </div>
                            </a>
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
                    <h1 >Telah dipercayai oleh</h1>
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
    
        <div class="kenapa">

            <div class="box-text">
                <p>Kenapa Harus Ikut Kursus di RUSCATION</p>
            </div>
            <div class="box-container">
                <div class="box">
                    <img src="{{ asset('assets/image/icon/beasiswa.png') }}" alt="Beasiswa Icon">
                    <h3>Beasiswa up to 80%</h3>
                    <p>Hemat biaya dengan <br> beasiswa tambahan untuk <br> umum & mahasiswa</p>
                </div>
                <div class="box">
                    <img src="{{ asset('assets/image/icon/magang.png') }}" alt="Magang Icon">
                    <h3>Kesempatan Magang</h3>
                    <p>Lulusan terbaik <br> berkesempatan direkrut <br> magang oleh perusahaan <br> partner RUSCATION</p>
                </div>
                <div class="box">
                    <img src="{{ asset('assets/image/icon/sertificate.png') }}" alt="Sertifikasi Icon">
                    <h3>Sertifikasi BNSP</h3>
                    <p>Ada sertifikat profesi dan <br> serifikat kursus sesuai topik <br> yang kamu pelajari</p>
                </div>
                <div class="box">
                    <img src="{{ asset('assets/image/icon/dilatih.png') }}" alt="Dilatih Icon">
                    <h3>Dilatih Sampai Jago</h3>
                    <p>Semua materi dan simulasi <br> disesuaikan untuk pemula <br> pastinya dibantu belajar <br> sampai paham
                    </p>
                </div>
                <div class="box">
                    <img src="{{ asset('assets/image/icon/kurikulum.png') }}" alt="Kurikulum Icon">
                    <h3>Kurikulum Siap Kerja</h3>
                    <p>Materi dikurasi untuk <br> persiapan keriermu atau <br> tingkatkan performamu di <br> kantor</p>
                </div>
                <div class="box">
                    <img src="{{ asset('assets/image/icon/jadwal.png') }}" alt="Jadwal Icon">
                    <h3>Jadwal Menyenangkan</h3>
                    <p>Bootcamp dijadwalkan 2-3 <br> sesi per minggu. Fleksibel <br> banget buat kamu yang <br> sambil bekerja atau kuliah</p>
                </div>
            </div>
        </div>
    </div>

</main>
@endsection