<nav class="navbar" style="border:5px solid black">
    <div class="container-fluid">
        <div class="row align-items-center container-fluid">
            <div class="col-auto">
                <a class="navbar-brand mr-5" href="#"><embed src="{{ asset('assets/image/logo.svg') }}"></a>
            </div>
            <div class="col">
                <div class="input-group" >
                    <input type="text" class="form-control" placeholder="Search ......" aria-label="" style="width: 80%;">
                    <div class="input-group-append">
                        <span class="input-group-text"><i class="fa fa-search"></i></span>
                    </div>
                </div>
            </div>
            <div class="col-auto">
                <a href="" style="color:black">Mengajar Di Ruscation</a>
            </div>
            @guest
            <div class="col-auto">
                <button class="btn border-left-0 border-0" type="button" style="background-color:transparent;">
                    <i class="fa-solid fa-cart-shopping"></i>
                </button>
            </div>
            <div class="col-auto">
                    <button type="button" class="btn btn-outline-dark">Sign Up</button>
                    
            </div>
            <div class="col-auto">
                <button type="button" class="btn btn-dark">Log In</button>
            </div>
            @endguest
            @auth
            <div class="col-auto">
                        <a href="" style="color:black">Pelajaran Saya</a>
            </div>
            <div class="col-auto">
                <button class="btn border-left-0 border-0" type="button" style="background-color:transparent;">
                    <i class="fa-regular fa-heart"></i>
                </button>
            </div>
            <div class="col-auto">
                <button class="btn border-left-0 border-0" type="button" style="background-color:transparent;">
                    <i class="fa-solid fa-cart-shopping"></i>
                </button>
            </div>
            <div class="col-auto">
                <button class="btn border-left-0 border-0" type="button" style="background-color:transparent;">
                    <i class="fa-regular fa-bell"></i>
                </button>
            </div>
            <div class="col-auto">
                <button class="btn border-left-0 border-0" type="button" style="background-color:transparent;">
                    <i class="fa-regular fa-user"></i>
                </button>
            </div>
            @endauth
        </div>
    </div>
</nav>