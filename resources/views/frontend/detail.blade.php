@extends('frontend.layouts.main')
@section('content')
<style>
    p {
        font-family: 'Montserrat', sans-serif;
    }

    .rating-color {
        color: #ffc000;
    }

    .red-background {
        background-color: #FF5555;
        border-radius: 10px;
        padding: 10px;
    }

    .red-background h5 {
        color: white;
        margin-top: 0;
        margin-bottom: 10px;
    }

    .red-background ul {
        list-style: none;
        margin: 0;
        padding: 0;
    }

    .red-background li {
        padding: 10px 0;
        border-bottom: 1px solid white;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .red-background li:last-child {
        border-bottom: none;
    }

    .red-background li span {
        font-weight: bold;
    }
</style>

<main>
    <div class="container container-contact">
        <div class="row decor-default">
            <div class="col-md-12">
                <a href="#" class="arrow left"></a>
                <div class="contact">
                    <div class="row">
                        <div class="col-auto mt-5">
                            <img src="{{ asset('assets/image/detail/jscourse.jpg') }}" class="img-fluid">
                        </div>
                        <div class="col-auto mt-5">
                            <div class="row mb-2">
                                <div class="col-12">
                                    <p class="mb-0" style="font-size: 18px; font-weight: 700; color:#ffbf00">
                                        <span class="mr-1">4.7</span>
                                        <i class="fa fa-star rating-color"></i>
                                    </p>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-12">
                                    <p class="mb-0" style="font-size: 25px; font-weight: 600;">Komplit JavaScript 2023: dari nol ke Expert!</p>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-1 align-items-center d-flex">
                                    <i class="fas fa-clock" style="color:silver"></i>
                                </div>
                                <div class="col-11 align-items-center d-flex">
                                    <p class="mb-0" style="font-size: 14px; font-weight: 400;">21 Jam 25 Menit Belajar</p>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-12">
                                    <p style="font-size: 14px; font-weight: 400;">Modern JavaScript tutorial untuk semua orang! Selesaikan JavaScript <br> project, tantangan, dan teori</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2.5 mt-5">
                            <div class="d-flex flex-column justify-content-center align-items-center h-100">
                                <a href="#" type="button" class="btn btn-danger btn-block mb-3">Masukkan keranjang</a>
                                <a href="#" type="button" class="btn btn-outline-secondary btn-block">Beli sekarang</a>
                            </div>
                        </div>
                    </div>

                    <hr class="mt-4" style="border-top: 1px solid #ddd;">

                    <div class="container">
                        <div class="row">
                            <div class="row">
                                <div class="col-md-6">
                                    <h5>Apa yang akan Anda pelajari:</h5>
                                    <ul>
                                        <li>Membangun website menggunakan kode HTML, CSS, dan JavaScript sederhana.</li>
                                        <li>Menerapkan struktur website yang baik menggunakan standar semantic HTML.</li>
                                        <li>Mendemonstrasikan penyusunan layout website menggunakan teknik float atau flexbox.</li>
                                    </ul>

                                    <h5>Apa yang Anda dapatkan:</h5>
                                    <ul>
                                        <li>Sertifikat 8</li>
                                        <li>Video kursus</li>
                                        <li>Kuis</li>
                                        <li>Modul tutorial</li>
                                    </ul>
                            </div>

                            <div class="col-md-6">
                                <h5>Konten kursus</h5>
                                <ul class="text-white red-background">
                                    <li>
                                        Selamat datang
                                        <span class="ms-auto mx-0">5m</span>
                                    </li>
                                    <li>
                                        Fundamental JavaScript - Part 1
                                        <span class="ms-auto mx-0">2j</span>
                                    </li>
                                    <li>
                                        Fundamental JavaScript - Part 2
                                        <span class="ms-auto mx-0">2j</span>
                                    </li>
                                    <li>
                                        Membuat Program JavaScript Pertama
                                        <span class="ms-auto mx-0">10j 25m</span>
                                    </li>
                                    <li>
                                        Mengenal Console JavaScript
                                        <span class="ms-auto mx-0">2j</span>
                                    </li>
                                    <li>
                                        Mengenal Console JavaScript
                                        <span class="ms-auto mx-0">2j</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
    </div>
    </div>

</main>
@endsection