<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Blood Bank</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="shortcut icon" href="{{url('customer/assets/images/fav.png')}}" type="image/x-icon">
    <link href="{{url('customer/https://fonts.googleapis.com/css?family=Merriweather&display=swap')}}" rel="stylesheet">
    <link rel="shortcut icon" href="{{url('customer/assets/images/fav.jpg')}}">
    <link rel="stylesheet" href="{{url('customer/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('customer/assets/css/fontawsom-all.min.css')}}">
    <link rel="stylesheet" href="{{url('customer/assets/plugins/grid-gallery/css/grid-gallery.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('customer/assets/css/style.css')}}" />
</head>

<body>
        <header class="continer-fluid ">
            <div class="header-top">
                <div class="container">
                    <div class="row col-det">
                        <div class="col-lg-6 d-none d-lg-block">
                            <ul class="ulleft">
                                <li>
                                    <i class="far fa-envelope"></i>
                                    savelifewithblood.com
                                    <span>|</span></li>
                                <li>
                                    <i class="far fa-clock"></i>
                                    Service Time : 24/7</li>
                            </ul>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <ul class="ulright">
                                
                                <li>
                                    <i class="fas fa-user"></i><a href="{{url('/admin_logout')}}">Logout</a>
                                    </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div id="menu-jk" class="header-bottom">
                <div class="container">
                    <div class="row nav-row">
                        <div class="col-md-3 logo">
                            <img src="{{url('customer/assets/images/logo.jpg')}}" alt="">
                        </div>
                        <div class="col-md-9 nav-col">
                            <nav class="navbar navbar-expand-lg navbar-light">

                                <button
                                    class="navbar-toggler"
                                    type="button"
                                    data-toggle="collapse"
                                    data-target="#navbarNav"
                                    aria-controls="navbarNav"
                                    aria-expanded="false"
                                    aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarNav">
                                    <ul class="navbar-nav">
                                        <li class="nav-item active">
                                            <a class="nav-link" href="{{url('/admin_home')}}">My Profile
                                            </a>
                                        </li>
                                        {{-- <li class="nav-item active">
                                            <a class="nav-link" href="{{url('/donor')}}">Donor</a>
                                        </li> --}}
                                        
                                     
                                       
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{url('/all_donor')}}">All Donor</a>
                                        </li>
                                         <li class="nav-item">
                                            <a class="nav-link" href="{{url('all_patient')}}">Patient</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{url('/pending_complaints')}}">Pending Complaints</a>
                                        </li>
                                         <li class="nav-item">
                                            <a class="nav-link" href="{{url('/all_complaints1')}}">All Complaints</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{url('/add_bank')}}">Add Bank</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{url('/manage_bank')}}">Manage Bank</a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>