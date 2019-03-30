<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{config('app.name', 'MEZMUR-buy')}}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="{{ asset('css/pages.css') }}" />

        <!-- JavaScript -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
    </head>
    <body>
        <div class="align-items-start full-height">
            <div class="content justify-content-center flex-center position-ref">
                <div class="container-fluid">
                    <div class="row">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col">
                                    <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-fixed-top">
                                        <a class="navbar-brand" href="#"><h2 style="background-color: transparent; padding: 5px; 10px; color: #7e8d22;">MEZMUR-buy</h2></a>
                                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                                            <span class="navbar-toggler-icon"></span>
                                        </button>
                                        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                                            <div class="navbar-nav">
                                                <a class="nav-item nav-link active" href="/"><i class="fa fa-home"></i> Home <span class="sr-only">(current)</span></a>
                                                <a class="nav-item nav-link" href="/explore"><i class="fa fa-eye"></i> Explore</a>
                                                <a class="nav-item nav-link" href="/shop"><i class="fa fa-shopping-cart"></i> Shop</a>
                                            </div>
                                        </div>
                                    </nav>
                                </div>
                                <div class="col">
                                    @if (Route::has('login'))
                                        <div class="top-right links">
                                            @auth
                                                <a href="{{ url('/home') }}">Home</a>
                                            @else
                                                <a href="{{ route('login') }}"><i class="fa fa-user-circle-o"></i> Login</a>
                        
                                                @if (Route::has('register'))
                                                    <a href="{{ route('register') }}"><i class="fa fa-sign-in"></i> Register</a>
                                                @endif
                                            @endauth
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col">
                                    <!-- Slider -->
                                    <div class="row slider">
                                        <div class="col">
                                            <!--Carousel Slider-->
                                            <div id="indicators" class="carousel slide" data-ride="carousel">
                                                <ol class="carousel-indicators">
                                                    <li data-target="#indicators" data-slide-to="0" class="active"></li>
                                                    <li data-target="#indicators" data-slide-to="1"></li>
                                                    <li data-target="#indicators" data-slide-to="2"></li>
                                                    <li data-target="#indicators" data-slide-to="3"></li>
                                                </ol>
                                                <div class="carousel-inner">
                                                    <div class="carousel-item active">
                                                        <img class="img-responsive carousel_images" src="images/carousel/banner_0.png" alt="First slide" width="100%" height="100%">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img class="img-responsive carousel_images" src="images/carousel/banner_1.png" alt="Second slide" width="100%" height="100%">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img class="img-responsive carousel_images" src="images/carousel/banner_0.png" alt="Third slide" width="100%" height="100%">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img class="img-responsive carousel_images" src="images/carousel/banner_1.png" alt="Fourth slide" width="100%" height="100%">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Content body -->
                        <div class="container-fluid">
                            <div class="row">
                                <!-- Small column -->
                                <div class="col-3 text-left text-uppercase font-weight-bold">
                                    <h3 class="text-left text-success" style="margin: 50px 0;"><i class="fa fa-folder-open-o"></i></h3>
                                    <ul class="nav flex-column border-right">
                                        <li class="nav-item">
                                            <a class="nav-link active" href="#"><i class="fa fa-newspaper-o"></i>&emsp;New Released</a>
                                        </li>
                                        <div class="dropdown-divider"></div>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#"><i class="fa fa-microphone"></i>&emsp;Singer</a>
                                        </li>
                                        <div class="dropdown-divider"></div>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#"><i class="fa fa-user"></i>&emsp;Album</a>
                                        </li>
                                        <div class="dropdown-divider"></div>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#"><i class="fa fa-music"></i>&emsp;Listen</a>
                                        </li>
                                        <div class="dropdown-divider"></div>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#"><i class="fa fa-shopping-cart"></i>&emsp;Buy</a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Big column -->
                                <div class="col-9 text-left">
                                    <div class="container">
                                        @yield('content')
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col">
                                    <!-- footer -->
                                    <footer>
                                        <div class="row">
                                            <div class="col text-center" style="margin: 15px 0; font-family: 'Cormorant Garamond', serif; font-family: 'Arapey', serif;">
                                                <p id="copyright">
                                                    Copyright &copy; <?php echo date("Y"); ?><a href="https://mezmur.com"> MEZMUR</a> All Rights Reserved. &emsp;
                                                </p>
                                            </div>
                                        </div>
                                    </footer>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
