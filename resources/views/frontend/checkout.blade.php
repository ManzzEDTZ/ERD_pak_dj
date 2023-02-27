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

    input[type="text"], input[type="tel"], select{
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
    }

</style>

<main>
    <div class="container-fluid" style="padding-top: 26px; padding-left: 80px; padding-right:80px">
        <button class="btn border-left-0 border-0" type="button" style="background-color:transparent;">
            <i class="fa-solid fa-chevron-left fa-xl"></i>
        </button>

        <div class="container-fluid row mt-4">
            <div class="container-fluid col-6 ms-0 me-auto">
                <h1 class="mb-4">Billing Details</h1>
                <div class="nama mb-2">
                    <p class="mb-1">Nama Lengkap</p>
                    <input type="text" name="nama" id="nama">
                </div>
                <div class="email mb-2">
                    <p class="mb-1">Email</p>
                    <input type="text" name="email" id="email">
                </div>
                <div class="negara mb-5">
                    <p class="mb-1">Negara</p>
                    <input type="text" name="negara" id="negara">
                </div>
                
                <h1 class="mb-4">Metode Pembayaran</h1>
                <div class="kredit d-flex flex-row align-items-center mb-4" style="border: 1px solid black; width:50%">
                    <div class="col-auto align-self-center">
                        <input class="mx-auto px-auto" type="radio" name="metode" id="kredit" value="kredit">
                    </div>
                    <div class="col-auto align-self-center">
                        <p class="my-2">Kartu Kredit</p>
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
            </div>
            <div class="container-fluid col-6 me-0 ms-auto" style="border: 1px solid black">
                <div class="container-fluid" >
                    <h1>HALOOOOOOOOOOOOOOOOOOOO</h1>
                </div>
            </div>
        </div>
    </div>
</main>
<script>
    $(document).ready(function() {
        $('input[name=metode]:radio').change(function(e) {
            let value = e.target.value.trim()

            $('[class^="form-metode"]').css('display', 'none');
            
            switch (value) {
            case 'kredit':
                $('.form-metode-kredit').show()
                break;
            default:
                break;
            }
        })
    })
</script>
@endsection