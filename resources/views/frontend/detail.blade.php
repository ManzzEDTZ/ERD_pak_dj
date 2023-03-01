@extends('frontend.layouts.main')
@section('content')
<style>
        p {
            font-family: 'Montserrat', sans-serif;
        }

        .rating-color {
            color: #ffc000;
        }
    </style>

    <main>
        <div class="container container-contact">
            <div class="row decor-default">
                <div class="col-md-12">
                    <a href="#" class="arrow left"></a>
                    <div class="contact">
                        <div class="row">
                            <div class="col-md-5 align-self-center">
                                <img src="{{ asset('assets/image/detailpage/image 16.jpg') }}" class="img-fluid">
                            </div>
                            <div class="col-md-7">
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
                                    <div class="col-1">
                                        <i class="fas fa-clock" style="color:silver"></i>
                                    </div>
                                    <div class="col-8">
                                        <p class="mb-0" style="font-size: 14px; font-weight: 400;">21 Jam 25 Menit Belajar</p>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-12">
                                        <p style="font-size: 14px; font-weight: 400;">Modern JavaScript tutorial untuk semua orang! Selesaikan JavaScript dengan project, tantangan, dan teori</p>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-6">
                                        <a href="#" type="button" class="btn btn-danger btn-block">Masukkan keranjang</a>
                                    </div>
                                    <div class="col-6">
                                        <a href="#" type="button" class="btn btn-outline-secondary btn-block">Beli sekarang</a>
                                    </div>
                                </div>
                            </div>

                            <div class="container">
                                <div class="row">
                                    <div class="col">
                                        <h5>Apa yang akan Anda pelajari:</h5>
                                        <ul>
                                            <li>Membangun website menggunakan kode HTML, CSS, dan JavaScript sederhana.</li>
                                            <li>Menerapkan struktur website yang baik menggunakan standar semantic HTML.</li>
                                            <li>Mendemonstrasikan penyusunan layout website menggunakan teknik float atau flexbox.</li>
                                        </ul>
                                    </div>
                                    <div class="col">
                                        <h5>Apa yang Anda dapatkan:</h5>
                                        <ul>
                                            <li>Sertifikat 8 Jam video kursus</li>
                                            <li>Kuis</li>
                                            <li>Modul tutorial</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <h5>Konten kursus:</h5>
                                        <ul>
                                            <li class="d-flex justify-content-between">Selamat datang<span>5m</span></li>
                                            <li class="d-flex justify-content-between">Fundamental JavaScript - Part 1<span>2j</span></li>
                                            <li class="d-flex justify-content-between">Fundamental JavaScript - Part 2<span>2j</span></li>
                                            <li class="d-flex justify-content-between">Membuat Program JavaScript Pertama<span>10j 25m</span></li>
                                            <li class="d-flex justify-content-between">Mengenal Console JavaScript<span>2j</span></li>
                                            <li class="d-flex justify-content-between">Mengenal Console JavaScript<span>2j</span></li>
                                        </ul>
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