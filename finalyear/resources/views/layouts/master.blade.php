<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        @yield('title')
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- CSS Files -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/now-ui-dashboard.css?v=1.3.0" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
<div class="wrapper ">
    <div class="sidebar" data-color="red">
        <!--
          Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
      -->
        <div class="logo">
{{--            <a href="/" class="simple-text logo-mini">--}}
{{--                EA--}}
{{--            </a>--}}
            <a href="/" class="simple-text logo-normal">
                Entry Access
            </a>
        </div>
        <div class="sidebar-wrapper" id="sidebar-wrapper">
            <ul class="nav">

                <li>
                    <a href="/admin">
                        <i class="now-ui-icons design_app"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a class="now-ui-icons education_atom nav-link dropdown-toggle" data-toggle="dropdown">Merchandiser</a>
                        <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{route('company.create')}}">Add new Merchandiser</a>
                        <a class="dropdown-item" href="{{route('company.index')}}">View all Merchandiser</a>
                    </div>
                </li>

                {{-- <li>
                        <a class="now-ui-icons ui-1_bell-53 nav-link dropdown-toggle" data-toggle="dropdown">Reception</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{route('reception.create')}}">Add Receptionist </a>
                            <a class="dropdown-item" href="{{route('reception.index')}}">View all Receptionist</a>
                        </div>

                </li> --}}
                <li>
                        <a class=" now-ui-icons location_map-big  nav-link dropdown-toggle" data-toggle="dropdown">License</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{route('license.create')}}">Add new License </a>
                            <a class="dropdown-item" href="{{route('license.index')}}">View all License</a>
                        </div>

                </li>
                <li>
                        <a class=" now-ui-icons ui-1_bell-53 nav-link dropdown-toggle" data-toggle="dropdown">Enquiry's</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="/enquiry">View all Enquiries </a>

                        </div>
                </li>

                <li>
                    <a class=" now-ui-icons ui-1_bell-53 nav-link dropdown-toggle" data-toggle="dropdown">Order Booking</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{route('order.create')}}">Add new Order </a>
                        <a class="dropdown-item" href="{{route('order.index')}}">View all Orders</a>

                    </div>
                </li>
                <li>
                    <a class=" now-ui-icons ui-1_bell-53 nav-link dropdown-toggle" data-toggle="dropdown">Master</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{route('accessory.create')}}">Add new accessory </a>
                        <a class="dropdown-item" href="{{route('activity.create')}}">Add new Activity </a>
                        <a class="dropdown-item" href="{{route('buyer.create')}}">Add new Buyer</a>
                        <a class="dropdown-item" href="{{route('buyinghouse.create')}}">Add new Buying house</a>
                        <a class="dropdown-item" href="{{route('challan.create')}}">Add new challan</a>
                        <a class="dropdown-item" href="{{route('costinghead.create')}}">Add new Costing</a>
                        <a class="dropdown-item" href="{{route('costingprocess.create')}}">Add new Costing Process</a>
                        <a class="dropdown-item" href="{{route('country.create')}}">Add new country</a>
                        <a class="dropdown-item" href="{{route('courier.create')}}">Add new courier</a>
                        <a class="dropdown-item" href="{{route('currency.create')}}">Add new currency</a>
                        <a class="dropdown-item" href="{{route('division.create')}}">Add new division</a>
                        <a class="dropdown-item" href="{{route('designation.create')}}">Add new designation</a>
                        <a class="dropdown-item" href="{{route('dox.create')}}">Add new dox</a>
                        <a class="dropdown-item" href="{{route('email.create')}}">Add new email</a>
                        <a class="dropdown-item" href="{{route('firm.create')}}">Add new firm</a>
                        <a class="dropdown-item" href="{{route('hour.create')}}">Add new hour</a>
                        <a class="dropdown-item" href="{{route('light.create')}}">Add new light</a>
                        <a class="dropdown-item" href="{{route('line.create')}}">Add new line</a>
                        <a class="dropdown-item" href="{{route('location.create')}}">Add new location</a>
                        <a class="dropdown-item" href="{{route('machine.create')}}">Add new machine</a>
                        <a class="dropdown-item" href="{{route('make.create')}}">Add new make</a>
                        <a class="dropdown-item" href="{{route('process.create')}}">Add new process</a>
                        <a class="dropdown-item" href="{{route('prodline.create')}}">Add new prodline</a>
                        <a class="dropdown-item" href="{{route('sampling.create')}}">Add new sample</a>
                        <a class="dropdown-item" href="{{route('samplingprocess.create')}}">Add new sampling process</a>
                        <a class="dropdown-item" href="{{route('production.create')}}">Add new production</a>
                        <a class="dropdown-item" href="{{route('season.create')}}">Add new season</a>
                        <a class="dropdown-item" href="{{route('reason.create')}}">Add new reason</a>
                        <a class="dropdown-item" href="{{route('shade.create')}}">Add new shade</a>
                        <a class="dropdown-item" href="{{route('shadeno.create')}}">Add new shade no</a>
                        <a class="dropdown-item" href="{{route('size.create')}}">Add new size</a>
                        <a class="dropdown-item" href="{{route('state.create')}}">Add new state</a>
                        <a class="dropdown-item" href="{{route('store.create')}}">Add new store</a>
                        <a class="dropdown-item" href="{{route('style.create')}}">Add new style</a>
                        <a class="dropdown-item" href="{{route('styledescription.create')}}">Add new style description</a>
                        <a class="dropdown-item" href="{{route('tna.create')}}">Add new Tna</a>
                        <a class="dropdown-item" href="{{route('transport.create')}}">Add new transport</a>
                        <a class="dropdown-item" href="{{route('uom.create')}}">Add new uom</a>
                        <a class="dropdown-item" href="{{route('vendor.create')}}">Add new vendor</a>
                        <a class="dropdown-item" href="{{route('composition.create')}}">Add new composition</a>
                        <a class="dropdown-item" href="{{route('construction.create')}}">Add new construction</a>
                        <a class="dropdown-item" href="{{route('count.create')}}">Add new count</a>
                        <a class="dropdown-item" href="{{route('fabric.create')}}">Add new fabric</a>
                        <a class="dropdown-item" href="{{route('fabrictype.create')}}">Add new fabrictype</a>
                        <a class="dropdown-item" href="{{route('width.create')}}">Add new width</a>
                        
                    </div>
                </li>


                 <li class="active ">
                    <a href="#">
                        <i class="now-ui-icons users_single-02"></i>
                        <p>Coming Soon</p>
                    </a>
                </li>
{{--                <li class="active ">--}}
{{--                    <a href="./tables.html">--}}
{{--                        <i class="now-ui-icons design_bullet-list-67"></i>--}}
{{--                        <p>Table List</p>--}}
{{--                    </a>--}}
{{--                </li>--}}


            </ul>
        </div>
    </div>
    <div class="main-panel" id="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
            <div class="container-fluid">
                <div class="navbar-wrapper">
                    <div class="navbar-toggle">
                        <button type="button" class="navbar-toggler">
                            <span class="navbar-toggler-bar bar1"></span>
                            <span class="navbar-toggler-bar bar2"></span>
                            <span class="navbar-toggler-bar bar3"></span>
                        </button>
                    </div>
                    <a class="navbar-brand" href="#pablo">Admin Dashboard</a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                    <span class="navbar-toggler-bar navbar-kebab"></span>


                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navigation">

                    <ul class="navbar-nav">



                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                {{ Auth::user()->name }}

                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">

                                <a class="dropdown-item" href="{{ url('/logout') }}">Logout</a>

                            </div>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->


        <div class="panel-header panel-header-sm">
        </div>
        <div class="content">

            @yield('content')


        </div>



        <footer class="footer">
            <div class="container-fluid">
                <nav>
                    <ul>
                        <li>
                            <a href="https://www.creative-tim.com">
                                Creative Tim
                            </a>
                        </li>
                        <li>
                            <a href="http://presentation.creative-tim.com">
                                About Us
                            </a>
                        </li>
                        <li>
                            <a href="http://blog.creative-tim.com">
                                Blog
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="copyright" id="copyright">
                    &copy;
                    <script>
                        document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
                    </script>, Designed by
                    <a href="https://www.invisionapp.com" target="_blank">Invision</a>. Coded by
                    <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>.
                </div>
            </div>
        </footer>
    </div>
</div>
<!--   Core JS Files   -->
<script src="../assets/js/core/jquery.min.js"></script>
<script src="../assets/js/core/popper.min.js"></script>
<script src="../assets/js/core/bootstrap.min.js"></script>
<script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Chart JS -->
<script src="../assets/js/plugins/chartjs.min.js"></script>
<!--  Notifications Plugin    -->
<script src="../assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
<script src="../assets/js/now-ui-dashboard.min.js?v=1.3.0" type="text/javascript"></script>
<!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
<script src="../assets/demo/demo.js"></script>

@yield('scripts')

</body>

</html>
