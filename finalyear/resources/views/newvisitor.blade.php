<!doctype html>
<html lang="en">
<head>
    <title>New Visitor</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900|Raleway" rel="stylesheet">

    <link rel="stylesheet" href="{!! asset('css/bootstrap.css') !!}">
    <link rel="stylesheet" href="{!! asset('css/animate.css') !!}">
    <link rel="stylesheet" href="{!! asset('css/owl.carousel.min.css') !!}">

    <link rel="stylesheet" href="{!! asset('fonts/ionicons/css/ionicons.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('fonts/fontawesome/css/font-awesome.min.css') !!}">

    <!-- Theme Style -->
    <link rel="stylesheet" href="{!! asset('css/styles.css') !!}">
</head>
<body>

<header role="banner">

    <nav class="navbar navbar-expand-md navbar-dark bg-light">
        <div class="container">
            <a href="/visitor" class="navbar-brand"><img src="{!! asset('images/eventimg/logo.png') !!} "></a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse navbar-light" id="navbarsExample05">
                <ul class="navbar-nav ml-auto pl-lg-5 pl-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="/visitor">Home</a>
                    </li>




            </div>
        </div>
    </nav>
</header>
<!-- END header -->
<section class="site-hero overlay" data-stellar-background-ratio="0.5" style="background-image: url({!!asset('images/visitor/big_image_1.jpg')!!});">
    <div class="container">
        <div class="row align-items-center site-hero-inner justify-content-center">
            <div class="col-md-8 text-center">
                <form class="form-detail" action={{route('visitor.store')}} method="post">
                    @csrf
                    @if(count($errors)>0)
                        @foreach($errors->all() as $error)
                            <p class = "alert alert-danger">{{$error}}</p>
                        @endforeach
                    @endif

                    <div class="mb-5 element-animate">
                        <h1>Welcome Visitor.</h1>
                        <p>Please fill the details</p>
                    </div>
                    <div  class="mb-5">
                        <h3><i>
                           {{-- @if($Status)
                                        <p style="color:red;">{{ $Status }}</p></i>
                            @endif
                            --}}
                        </h3>

                    </div>

                    <div class="form-group element-animate" >

                        <input type="text"  name ="name" id="name" placeholder="Enter Name" required >
                        <input type="email" name="email" id="email"  placeholder="Enter Email" required >
                        <input type="number" name="otp" id="otp" placeholder="Enter OTP" required>
                        <input type="text"  name="code" id="code"  placeholder="Enter Code" required>
                        <input type="hidden"  name="phone" id="phone" value="{{$phone}}" >
                    </div>


                    <div class="form-group">
                        <label>Choose Department</label>
                        <select class="form-control" name="departmentname" >
                            @foreach($department as $depar)
                                <option value = "{{$depar->id}}"> {{$depar->departmentname}}</option>
                                    @endforeach
                                </select>
                            </div>

                             <div class="form-group">

                                <label>Whom to meet</label>
                                <select class="form-control" name="employeename" >
                                    @foreach($employee as $emp)
                                        <option value ="{{$emp->id}}">{{$emp->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        <div class="form-group element-animate" >

                            <input type="text"  name ="purpose" id="purpose" placeholder="Enter purpose" required >
                        </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- END section -->





<!-- loader -->
<div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/></svg></div>

<script src="{!! asset('js/jss/jquery-3.2.1.min.js') !!} "></script>
<script src="{!! asset('js/jss/jquery-migrate-3.0.0.js') !!} "></script>
<script src="{!! asset('js/jss/popper.min.js') !!} "></script>
<script src="{!! asset('js/jss/bootstrap.min.js') !!} "></script>
<script src="{!! asset('js/jss/owl.carousel.min.js') !!} "></script>
<script src="{!! asset('js/jss/jquery.waypoints.min.js') !!} "></script>
<script src="{!! asset('js/jss/jquery.stellar.min.js') !!} "></script>



<script src="{!! asset('js/jss/main.js') !!} "></script>
</body>
</html>
