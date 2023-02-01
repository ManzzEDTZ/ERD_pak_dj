<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/40752e6f71.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('navbar.css') }}">
</head>
<body>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <div class="row align-items-center">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <div class="col-auto">
                        <a class="navbar-brand mr-5" href="#"><embed src="{{ asset('assets/image/logo.svg') }}"></a>
                    </div>
                    <div class="col-8">
                        <ul class="navbar-nav">
                            <li class="nav-item" style="min-width: 50rem;">
                                <div class="input-group">
                                    <input class="form-control py-2 border-right-0 border" type="search" placeholder="Search for anything" id="search-input">
                                    <span class="input-group-append">
                                        <button class="btn btn-outline-secondary border-left-0 border" type="button">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </span>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-2">
                        <a href="" style="color:black">Mengajar Di Ruscation</a>
                        
                    </div>
                    <div class="col-auto">
                        <button class="btn border-left-0 border-0" type="button" style="background-color:transparent;">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </button>
                    </div>
                    <div class="col-auto me-auto">
                        <button type="button" class="btn btn-outline-dark">Sign Up</button>
                        
                    </div>
                    <div class="col-auto">
                        <button type="button" class="btn btn-dark">Log In</button>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</body>
</html>