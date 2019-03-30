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
        <link rel="stylesheet" href="{{ asset('css/home.css') }}" />

        <!-- JavaScript -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
    </head>
    <body>
        <div class="align-items-start full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            <div class="content justify-content-center flex-center position-ref">
                <div class="container-fluid">
                    <div class="row">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col">
                                    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
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
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col">
                                    <div class="jumbotron">
                                        <h1 class="display-4">Welcome!</h1>
                                        <p class="lead" style="color: #7e8d22;">MEZMUR-buy Where music lives</p>
                                        <hr class="my-4">
                                        <h5>
                                            We provide the largest inventory of Gospel and Christian Music online shopping. We are delighted that 
                                            you have come to mezmurbuy.com for your worship related resources and products. Our vision to provide the 
                                            gospel and christian listening community with an outlet that cares about this genre of music. Mezmur Buy, Inc., 
                                            is passionate about providing you with an excellent shopping experience --  If you are familiar with online shopping, 
                                            we think our online store will be easy for you to both manage and use- and we hope that our service will be an encouraging 
                                            aspect to your experience. 
                                            Flow is all your favorite songs, mixed with fresh recommendations and songs you forgot you loved. 
                                            It gets to know what you like and what you don't, and plays an infinite stream of music chosen<br> 
                                            just for you. All you have to do is explor more.
                                        </h5><br>
                                        <h4 class="text-success">MEZMUR-buy lets you play the music you just have to hear, instantly.</h4><br>
                                        <a class="btn btn-primary btn-lg" href="#" role="button">Explore</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container-fluid">
                            <h3 class="text-center">Get Connected With New Released</h3>
                            <div class="row text-center" style="margin: 45px 0";>
                                <div class="col-sm-4">
                                <div class="thumbnail">
                                    <img class="img-responsive" src="images/album/zerfe.png" alt="Zerfe" width="280" height="350">
                                    <p class="card-text" style="color: #7e8d22;">Singer ZERFE KEBEDE</p>
                                </div>
                                </div>
                                <div class="col-sm-4">
                                <div class="thumbnail">
                                    <img class="img-responsive" src="images/album/samuel.png" alt="Zerfe" width="280" height="350">
                                    <p class="card-text" style="color: #7e8d22;">Singer SAMUEL TESFAMICHAEL</p>
                                </div>
                                </div>
                                <div class="col-sm-4">
                                <div class="thumbnail">
                                    <img class="img-responsive" src="images/album/meskerem.png" alt="Zerfe" width="280" height="350">
                                    <p class="card-text" style="color: #7e8d22;">Singer Meskerem Getu</p>
                                </div>
                                </div>  
                            </div>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm">
                                                <div class="card text-center">
                                                    <div class="card-header">
                                                        Featured
                                                    </div>
                                                    <div class="card-body">
                                                        <h5 class="card-title">Know more about your music</h5>
                                                        <p style="font-size: 100px; color: #85ae4d;" class="card-text"><i class="fa fa-music mr-4"></i></p>
                                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm">
                                                <div class="card text-center">
                                                    <div class="card-header">
                                                        Featured
                                                    </div>
                                                    <div class="card-body">
                                                        <h5 class="card-title">Craft your collection</h5>
                                                        <p style="font-size: 100px; color: #d31009;" class="card-text"><i class="fa fa-play-circle mr-4"></i></p>
                                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm">
                                                <div class="card text-center">
                                                    <div class="card-header">
                                                        Featured
                                                    </div>
                                                    <div class="card-body">
                                                        <h5 class="card-title">Where music lives</h5>
                                                        <p style="font-size: 100px; color: #2e2f85;" class="card-text"><i class="fa fa-shopping-bag mr-4"></i></p>
                                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>  
                                </div>
                            </div>
                        </div>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col text-center" style="margin: 35px 0;">
                                    <h3>Stay Connected & Share It</h3>
                                    <a class="fb-ic"><i class="fa fa-facebook white-text mr-4 social" style="color: #55ACEE;"></i></a> 
                                    <a class="tw-ic"><i class="fa fa-twitter white-text mr-4 social" style="color: #21A1D2;"></i></a>
                                    <a class="yt-ic"><i class="fa fa-youtube white-text mr-4 social" style="color: red;"></i></a>
                                    <a class="yt-ic"><i class="fa fa-instagram white-text mr-4 social" style="color: #000000;"></i></a>
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
