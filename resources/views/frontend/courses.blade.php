@extends('frontend.layouts.main')
@section('content')
<style>
    p {
        font-family: 'Inter', sans-serif;
    }

    .rating-color {
        color: #ffc000;
    }

    hr{
        border-top: 1px solid silver;
        margin-top: 50px;
        margin-bottom: 50px;
    }
</style>
<main>
    <div class="container-fluid" style="padding-top: 26px; padding-left: 80px; padding-right:80px">
        <button class="btn border-left-0 border-0" type="button" style="background-color:transparent;">
            <i class="fa-solid fa-chevron-left fa-xl"></i>
        </button>

        <!-- #1 -->
        <div class="row container-fluid" style="margin-top: 70;">

            <!-- Gambar dari object -->
            <div class="col-5 text-right align-self-center">
                <img src="{{ asset('assets/image/course/c1.png') }}">
            </div>

            <!-- Judul, subjudul, dll dari objek -->
            <div class="col">
                <div class="row">
                    <div class="col">
                        <p style="font-size: 25px; font-weight: 600;">Komplit JavaScript 2023: dari nol ke Expert!</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p style="font-size: 14px; font-weight: 400;">Modern JavaScript tutorial untuk semua orang! Selesaikan JavaScript dengan project, tantangan, dan teori</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p style="font-size: 14px; font-weight: 400;">Jonas Schmedtmann</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-auto align-self-start">
                        <i class="fa-regular fa-clock" style="color:silver"></i>
                    </div>
                    <div class="col-auto align-self-center">
                        <p style="font-size: 14px; font-weight: 400;">18h 30m</p>
                    </div>
                </div>

                <!-- rating row -->
                <div class="row">
                    <div class="col-1">
                        <p style="font-size: 18px; font-weight: 700; color:#ffc000">4.7</p>
                    </div>
                    <div class="col-1">
                        <i class="fa fa-star rating-color"></i>
                    </div>
                    <div class="col-1">
                        <i class="fa fa-star rating-color"></i>
                    </div>
                    <div class="col-1">
                        <i class="fa fa-star rating-color"></i>
                    </div>
                    <div class="col-1">
                        <i class="fa fa-star rating-color"></i>
                    </div>
                    <div class="col-1">
                        <i class="fa fa-star rating-color" style="color:silver"></i>
                    </div>
                </div>
            </div>
            
            <!-- Harga -->
            <div class="col align-self-center">
                <h4 style="font-size: 20px; font-family: 'Inter', sans-serif; font-weight: 600;">Rp650,000</h4>
            </div>
        </div>
        <hr>
    </div>
</main>

@endsection