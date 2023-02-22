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
    position: absolute;
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

/* button {
    left: 80px;
    top: 400px;
    padding: 0.8em 1.8em;
    border: 2px solid #F94444;
    position: relative;
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

button::before {
    content: '';
    width: 0;
    height: 300%;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%) rotate(45deg);
    background: #F94444;
    transition: .5s ease;
    display: block;
    z-index: -1;
}

button:hover::before {
    width: 105%;
}

button:hover {
    color: rgb(255, 255, 255);
} */

.title {
    position: absolute;
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
    position: absolute;
    width: 346px;
    height: 346px;
    left: 858px;
    top: 96px;
}

.card-container {
    position: absolute;
    width: 1120px;
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
    background-position: center;
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
    position: relative;
    width: 1100px;
    top: 700px;

    left: 50%;
    transform: translate(-50%, -50%);
}

.box-text {
    position: absolute;
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
</style>

<main>
    <div class="container-fluid" style="border: 5px solid black">
        <div class="row">
            <div class="col">

                <div class="word">
                    <h3>Bangun Karirmu Sebagai Developer Profesional</h3>
                    <p>Mulai belajar terarah dengan learning path</p>
                </div>
                <button> Mulai Belajar </button>
            </div>
            <div class="col">
                <img class="image" src="{{ asset('assets/image/icon/education.png') }}" alt="Education">

            </div>
        </div>
        <div class="Category">
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
                <p>Bootcamp dijadwalkan 2-3 <br> sesi per minggu. Fleksibel <br> banget buat kamu yang <br> sambil bekerja
                    atau kuliah</p>
            </div>
        </div>
    
        <!-- <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="word">
                        <h3>Bangun Karirmu Sebagai Developer Profesional</h3>
                        <p>Mulai belajar terarah dengan learning path</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <button class="btn btn-primary mt-5">Mulai Belajar</button>
                </div>
            </div>
    
            <div class="row mt-5">
                <div class="col-md-4">
                    <img class="image" src="asset/icon/education.png" alt="Education">
                </div>
                <div class="col-md-8">
                    <div class="Category">
                        <h4 class="title">Top Category</h4>
                        <div class="card-container">
                            <div class="card-wrap d-flex flex-wrap">
                                <div class="card-image">
                                    <img src="asset/icon/jsicon.png" alt="JavaScript Icon">
                                </div>
                                <div class="card-image">
                                    <img src="asset/icon/pyicon.png" alt="Python Icon">
                                </div>
                                <div class="card-image">
                                    <img src="asset/icon/htmlicon.png" alt="HTML Icon">
                                </div>
                                <div class="card-image">
                                    <img src="asset/icon/cssicon.png" alt="CSS Icon">
                                </div>
                                <div class="card-image">
                                    <img src="asset/icon/darticon.png" alt="Dart Icon">
                                </div>
                                <div class="card-image">
                                    <img src="asset/icon/phpicon.png" alt="PHP Icon">
                                </div>
                                <div class="card-image">
                                    <img src="asset/icon/laravelicon.png" alt="Laravel Icon">
                                </div>
                                <div class="card-image">
                                    <img src="asset/icon/csharpicon.png" alt="Csharp Icon">
                                </div>
                                <div class="card-image">
                                    <img src="asset/icon/cplusicon.png" alt="Cplus Icon">
                                </div>
                                <div class="card-image">
                                    <img src="asset/icon/swiftuiicon.png" alt="SwiftUI Icon">
                                </div>
                                <div class="card-image">
                                    <img src="asset/icon/rubyicon.png" alt="Ruby Icon">
                                </div>
                                <div class="card-image">
                                    <img src="asset/icon/javaicon.png" alt="Java Icon">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
                <div class="row mt-5">
                    <div class="col-md-12">
                        <div class="box-text">
                            <h4>Kenapa Harus Ikut Kursus di RUSCATION</h4>
                        </div>
                        <div class="box-container">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="box">
                                        <img src="asset/icon/beasiswa.png" alt="Beasiswa Icon">
                                        <h3 class="mt-3">Beasiswa up to 80%</h3>
                                        <p>Hemat biaya dengan beasiswa tambahan untuk umum & mahasiswa</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="box">
                                        <img src="asset/icon/magang.png" alt="Magang Icon">
                                        <h3 class="mt-3">Kesempatan Magang</h3>
                                        <p>Lulusan terbaik berkesempatan direkrut magang oleh perusahaan partner RUSCATION</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="box">
                                        <img src="asset/icon/sertificate.png" alt="Sertificate Icon">
                                        <h3 class="mt-3">Sertifikasi BNSP</h3>
                                        <p>Lulusan terbaik berkesempatan direkrut kerja oleh perusahaan partner RUSCATION</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="box">
                                        <img src="asset/icon/sertificate.png" alt="Sertificate Icon">
                                        <h3 class="mt-3">Sertifikasi BNSP</h3>
                                        <p>Lulusan terbaik berkesempatan direkrut kerja oleh perusahaan partner RUSCATION</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="box">
                                        <img src="asset/icon/sertificate.png" alt="Sertificate Icon">
                                        <h3 class="mt-3">Sertifikasi BNSP</h3>
                                        <p>Lulusan terbaik berkesempatan direkrut kerja oleh perusahaan partner RUSCATION</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="box">
                                        <img src="asset/icon/sertificate.png" alt="Sertificate Icon">
                                        <h3 class="mt-3">Sertifikasi BNSP</h3>
                                        <p>Lulusan terbaik berkesempatan direkrut kerja oleh perusahaan partner RUSCATION</p>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div> -->
    </div>

</main>
@endsection