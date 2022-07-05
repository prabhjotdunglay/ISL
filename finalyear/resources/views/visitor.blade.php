<!doctype html>
<html lang="en">
<head>
    <title>Visitor</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900|Raleway" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">

    <!-- Theme Style -->
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

<header role="banner">

    <nav class="navbar navbar-expand-md navbar-dark bg-light">
        <div class="container">
            <a href="/visitor" class="navbar-brand"><img src="images/eventimg/logo.png"></a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse navbar-light" id="navbarsExample05">
                <ul class="navbar-nav ml-auto pl-lg-5 pl-0">
                    <a class="nav-item">
                        <a class="nav-link active" href="/">Home</a>
                        {{--<a class="nav-link active">{{ Auth::guard('hello')->user()->companyname }}</a>--}}


            </div>
        </div>
    </nav>
</header>
<!-- END header -->

<section class="site-hero overlay" data-stellar-background-ratio="0.5" style="background-image: url(images/visitor/big_image_1.jpg);">
    <div class="container">
        <div class="row align-items-center site-hero-inner justify-content-center">
            <div class="col-md-8 text-center">
                <form class="form-detail" action={{route('visitor.send')}} method="post">
                    @csrf
                    @if(count($errors)>0)
                        @foreach($errors->all() as $error)
                            <p class = "alert alert-danger">{{$error}}</p>
                        @endforeach
                    @endif
                    <div class="mb-5 element-animate">
                        <h1>Welcome Visitor.</h1>
                        <p>Please Enter Your Phone Number</p>
                    </div>

                    <div class="form-inline element-animate" id="search-form">
                        <input type="tel" class="form-control form-control-block search-input" name="phone" id="autocomplete" placeholder="+91 Enter Mobile Number" required >
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <h3><i> @if(session('Status'))
                                    <p>{{session('Status')}}</p></i>
                            @endif</h3>
                    </div>
                </form>

            </div>
        </div>
    </div>
</section>
<!-- END section -->





<!-- loader -->
<div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/></svg></div>

<script src="js/jss/jquery-3.2.1.min.js"></script>
<script src="js/jss/jquery-migrate-3.0.0.js"></script>
<script src="js/jss/popper.min.js"></script>
<script src="js/jss/bootstrap.min.js"></script>
<script src="js/jss/owl.carousel.min.js"></script>
<script src="js/jss/jquery.waypoints.min.js"></script>
<script src="js/jss/jquery.stellar.min.js"></script>



<script src="js/jss/main.js"></script>
</body>
</html>
