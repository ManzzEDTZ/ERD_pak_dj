@extends('frontend.layouts.main')
@section('content')
<style>

    h1{
        font-family: 'Montserrat', sans-serif;
        font-weight: 600;
        font-size: 1.25rem;
    }

    p, .kredit {
        font-family: 'Inter', sans-serif;
        font-weight: 400;
        font-size: 0.875rem;
    }

    input[type="text"], input[type="tel"], input[type="email"], select{
        width: 50%;
        height: 38px;
        font-family: 'Inter', sans-serif;
        font-weight: 400;
        font-size: 0.875rem;
        background-color: #F1F1F1;
        border: none;
        border-radius: 5px;
        padding-left: 10px;
    }

    .kredit {
        background-color: #F1F1F1;
        border-radius: 5px;
        border: 2px solid #9D9D9D;
    }
    .paypal {
        background-color: #F1F1F1;
        border-radius: 5px;
        border: 2px solid #9D9D9D;
    }

    .blue-border {
        border: 2px solid #29B6F6;
    }

    .cart h1 {
        font-family: 'Inter', sans-serif;
        font-weight: 600;
        font-size: 0.9rem;
    }

    .cart p {
        font-family: 'Inter', sans-serif;
        font-weight: 400;
        font-size: 0.9rem;
        color: #777272;
    }

</style>

<main>
    <div class="container-fluid" style="padding-top: 26px; padding-left: 80px; padding-right:80px">
        <button class="btn border-left-0 border-0" type="button" style="background-color:transparent;">
            <i class="fa-solid fa-chevron-left fa-xl"></i>
        </button>

        <div class="container-fluid row mt-4">
            <!-- Billing Details -->
            <div class="container-fluid col-6" style="padding-left:5%">
                <h1 class="mb-4">Billing Details</h1>
                <div class="nama mb-2">
                    <p class="mb-1">Nama Lengkap</p>
                    <input type="text" name="nama" id="nama">
                </div>
                <div class="email mb-2">
                    <p class="mb-1">Email</p>
                    <input type="email" name="email" id="email">
                </div>
                <div class="negara mb-5">
                    <p class="mb-1">Negara</p>
                    <input type="text" name="negara" id="negara">
                </div>
                
                <h1 class="mb-4">Metode Pembayaran</h1>
                <div class=" d-flex flex-row align-items-center mb-4 kredit" style="width:50%">
                    <div class="col-auto align-self-center">
                        <input class="mx-auto px-auto" type="radio" name="metode" id="kredit" value="kredit">
                    </div>
                    <div class="col align-self-center" style="flex:1;">
                        <p class="my-2">Kartu Kredit</p>
                    </div>
                    <div class="col ml-auto">
                        <div class="d-flex flex-row-reverse">
                            <div class="flex-col mx-1">
                                <img src="{{ asset('assets/image/pembayaran/mastercard.svg') }}" alt="mastercard" class="img-fluid" style="height:20px">
                            </div>
                            <div class="flex-col mx-1">
                                <img src="{{ asset('assets/image/pembayaran/jcb.svg') }}" alt="jcb" class="img-fluid" style="height:20px">
                            </div>
                            <div class="flex mx-1">
                                <img src="{{ asset('assets/image/pembayaran/bersama.svg') }}" alt="bersama" class="img-fluid" style="height:20px">
                            </div>
                            <div class="flex mx-1">
                                <img src="{{ asset('assets/image/pembayaran/prima.svg') }}" alt="prima" class="img-fluid" style="height:20px">
                            </div>

                        </div>
                    </div>
                </div>
                <div class="form-metode-kredit ms-0 ps-0 mb-4" style="width:50%; display:none;">
                    <div class="nomor mb-3">
                        <p class="mb-1">Nomor Kartu</p>
                        <input type="tel" inputmode="numeric" pattern="[0-9\s]{13,19}" maxlength="16" placeholder="xxxx xxxx xxxx xxxx" name="nomor" id="nomor" style="width:100% !important;">
                    </div>
                    <div class="d-flex flex-row justify-content-between mb-2">
                        <div class="flex-col" style="flex:1">
                            <p class="mb-1">Tanggal Kadaluarsa</p>
                            <select placeholder="Month" style="width:100% !important;">
                                <option value="" style="display:none;">Month</option>
                                <option name="January" value="Jan">January</option>
                                <option name="February" value="Feb">February</option>
                                <option name="March" value="Mar">March</option>
                                <option name="April" value="Apr">April</option>
                                <option name="May" value="May">May</option>
                                <option name="June" value="Jun">June</option>
                                <option name="July" value="Jul">July</option>
                                <option name="August" value="Aug">August</option>
                                <option name="September" value="Sep">September</option>
                                <option name="October" value="Oct">October</option>
                                <option name="November" value="Nov">November</option>
                                <option name="December" value="Dec">December</option>
                            </select>
                        </div>
                        <div class="flex-col align-self-end mx-2" style="flex:1">
                            <select placeholder="Year" style="width:100% !important;">
                                <option name="" value="" style="display:none;">Year</option>
                                @for($i = 2023; $i <= 2028; $i++)
                                <option name="{{ $i }}" value="{{ $i }}">{{ $i }}</option>
                                @endfor
                            </select>
                        </div>
                        <div class="flex-col align-self-end" style="flex:1">
                            <p class="mb-1">CVV</p>
                            <input type="tel" inputmode="numeric" maxlength="4" placeholder="xxxx" name="cvv" id="cvv" style="width:100% !important;">
                        </div>
                    </div>
                </div>
                <div class=" d-flex flex-row align-items-center mb-4 paypal" style="width:50%">
                    <div class="col-auto align-self-center">
                        <input class="mx-auto px-auto" type="radio" name="metode" id="paypal" value="paypal">
                    </div>
                    <div class="col align-self-center" style="flex:1;">
                        <p class="my-2">PayPal</p>
                    </div>
                    <div class="col ml-auto">
                        <div class="d-flex flex-row-reverse">
                            <div class="flex mx-1">
                                <img src="{{ asset('assets/image/pembayaran/paypal.svg') }}" alt="paypal" class="img-fluid" style="height:20px">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-metode-paypal ms-0 ps-0 mb-4" style="width:50%; display:none;">
                    <div class="email mb-3">
                        <p class="mb-1">PayPal Email</p>
                        <input type="email" name="email" id="email" placeholder="example@gmail.com" style="width:100% !important;">
                    </div>
                </div>
                <p class="mb-1">By clicking the button, you agree to the <a href="#">Terms and Condition</a></p>
                <button type="button" class="btn btn-success py-2" style="width:50%;">Place Order</button>
            </div>

            <!-- Cart sum -->
            <div class="container-fluid col-6 me-0 ms-auto cart" style="border: 1px solid black; ">
                <div class="container p-3" style="background-color: #F1F1F1; border-radius:10px; ">
                    <div class="row">
                        <i class="my-auto ml-2 mr-3 fa-solid fa-cart-shopping fa-xl"></i>
                        <h1>Cart Summary</h1>
                    </div>
                    <div class="row">
                        <div class="col-auto ms-0 px-0" style="background: #ffffff;">
                            <img src="{{ asset('assets/image/courses/course1.png') }}" style="height:69px">
                        </div>
                        <div class="col ml-0 ps-0" style="background: #ffffff">
                            <h1>Komplit JavaScript 2023: dari nol ke Expert!</h1>
                            <p>Jonas Schmedtmann</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<script>
    const radioButtons = document.querySelectorAll('input[type="radio"]');
    const kreditDiv = document.querySelector('.kredit');
    const paypalDiv = document.querySelector('.paypal');

    radioButtons.forEach(button => {
        button.addEventListener('change', () => {
        if (button.checked && button.value === 'kredit') {
            kreditDiv.classList.add('blue-border');
            paypalDiv.classList.remove('blue-border');

            $('.form-metode-kredit').show()
            $('.form-metode-paypal').hide()
        } else if (button.checked && button.value === 'paypal') {
            paypalDiv.classList.add('blue-border');
            kreditDiv.classList.remove('blue-border');

            $('.form-metode-paypal').show()
            $('.form-metode-kredit').hide()
        }
        });
    });
</script>
@endsection