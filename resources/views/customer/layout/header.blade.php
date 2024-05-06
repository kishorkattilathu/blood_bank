<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- <title>Web App Landing Page Website Tempalte | Smarteyeapps.com</title> -->
    <link rel="shortcut icon" href="{{url('customer/assets/images/fav.png')}}" type="image/x-icon">
    <link href="{{url('customer/https://fonts.googleapis.com/css?family=Merriweather&display=swap')}}" rel="stylesheet">
    <link rel="shortcut icon" href="{{url('customer/assets/images/fav.jpg')}}">
    <link rel="stylesheet" href="{{url('customer/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('customer/assets/css/fontawsom-all.min.css')}}">
    <link rel="stylesheet" href="{{url('customer/assets/plugins/grid-gallery/css/grid-gallery.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('customer/assets/css/style.css')}}" />
     <style>
.dropbtn {
  color: black;
  padding: 16px;
  font-size: 16px;
  border: none;
  margin-top: 10px;
  cursor: pointer;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: #d7e2d7;
}
</style>
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
                                    <i class="fas fa-user"></i><a href="{{url('/logout')}}">Logout</a>
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
                                            <a class="nav-link" href="{{'/customer_home'}}">Home
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{url('/customer_profile')}}">My Profile</a>
                                        </li>

                                       
                                      
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{url('/my_bookings')}}">My Bookings</a>
                                        </li>

                                         <li class="nav-item">
                                            <a class="nav-link" href="{{url('/customer_receipts')}}">My Receipts</a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" href="{{'/contact_admin'}}">Contact Admin</a>
                                        </li>
                                       <!--  <li class="nav-item">
                                            <a class="nav-link" href="{{'/complaint_to_admin'}}">Complaint Admin</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{'/complaint_to_bank'}}">Complaint Bank</a>
                                        </li> -->

                                        <div class="dropdown">
                                          <button class="dropbtn">Complaint</button>
                                          <div class="dropdown-content">
                                          <a href="{{'/complaint_to_admin'}}">Complaint Admin</a>

                                          <a href="{{url('/complaint_to_bank')}}">Complaint Bank</a>
                                          </div>
                                        </div>

                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>