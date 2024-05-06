
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Blood Doners</title>
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
                               <!--  <li>
                                    <i class="fas fa-cloud-upload-alt"></i>
                                    Upload Video
                                    <span>|</span></li> -->
                                <li>
                                    <i class="fas fa-user"></i><a href="{{url('/login')}}">Login</a>
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
                                            <a class="nav-link" href="#">Home
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#about">About</a>
                                        </li>
                                       
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{url('/bank_login')}}">Blood Bank</a>
                                        </li>
                                         <li class="nav-item">
                                            <a class="nav-link" href="{{url('/admin_login')}}">Admin</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#blog">Blog</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#contact">Contact US</a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        
        
    <!-- ################# Slider Starts Here#######################--->

    <div class="slider-detail">

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>

            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="{{url('customer/assets/images/slider/slide-02.jpg')}}" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class=" bounceInDown">Donate Blood & Save a Life</h5>
                        <p class=" bounceInLeft">Every donation is critical and you can make a lifesaving difference.  <br>
                           Patients with trauma, undergoing surgery,<br> or with conditions that require blood transfusions,<br>
                            </p>

                       <!--  <div class=" vbh">

                            <div class="btn btn-success  bounceInUp"> Contact US </div>
                        </div> -->
                    </div>
                </div>

                <div class="carousel-item">
                    <img class="d-block w-100" src="{{url('customer/assets/images/slider/slide-03.jpg')}}" alt="Third slide">
                    <div class="carousel-caption vdg-cur d-none d-md-block">
                        <h5 class=" bounceInDown">Donate Blood & Save a Life</h5>
                        <p class=" bounceInLeft">Individuals are not at risk of contracting COVID-19 through the blood donation process. Blood  Bank  is taking all precautions for the staff, <br>
                            Blood Donor and patient attended by using thermal scanners, disinfectant cleaning of couches,<br>
                            gloves, masks, maintaining distance etc. </p>

                       <!--  <div class=" vbh">

                            
                            <div class="btn btn-danger  bounceInUp"> Contact US </div>
                        </div> -->
                    </div>
                </div>

            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>


    </div>
    
    <!--*************** About Us Starts Here ***************-->
   <section id="about" class="contianer-fluid about-us">
       <div class="container">
           <div class="row session-title">
               <h2>About Us</h2>
               <p>The aim of the organization is to phase out replacement donors and achieve 100% voluntary blood donation in future.</p>
           </div>
            <div class="row">
                <div class="col-md-6 text">
                    <h2>About Blood Doners</h2>
                    <p>With the Centre, declaring blood services as essential services, IRCS will start holding blood donation camps by sending mobile blood collection units to various localities across Delhi from 13 April, 2020. IRCS, NHQ will follow all infection control and social distancing measures such as two couches instead of the earlier practice of four to draw blood. There will be at least 3 metre gap between the two couches and at one time there will be no more than three people allowed in the camp. The vans will be disinfected on a regular basis.</p>
                   
                    <p>The age of the donor must be above 18 years and below 65 years of age. He/she must have a haemoglobin count that is not less than 12.5 g/dl. The Weigh should not less than 45 kgs. One should have a normal body temperature at the time of donation.

                    You should always drink lots of water before the donation. Also, keep in mind that you should take a well-balanced meal prior to and after donating blood. This will keep you healthy and fit.

                    </p>
                    <p>Transfusion of blood is an essential part of modern health care management. The first Blood Centre was started in India by Indian Red Cross Society (IRCS) in 1942 at All India Institute of Hygiene & Public Health, Calcutta (West Bengal).</p>
                </div>
                <div class="col-md-6 image">
                    <img src="{{url('customer/assets/images/about.jpg')}}" alt="">
                </div>
            </div>
       </div>
   </section>
    
          
    
      <!-- ################# Gallery Start Here #######################--->
     
    
    
    
    
     <!-- ################# Donation Process Start Here #######################--->
     
     <section id="process" class="donation-care">
         <div class="container">
           <div class="row session-title">
               <h2>Donation Process</h2>
               <p style="text-align: center;">The donation process from the time you arrive center until the time you leave</p>
           </div>
            <div class="row">
                 <div class="col-md-3 col-sm-6 vd">
                    <div class="bkjiu">
                     <img src="{{url('customer/assets/images/gallery/g1.jpg')}}" alt="">
                     <h4><b>1 - </b>Registration</h4>
                     <p>Registration is must to get blood donation quickly.</p>
                     <!-- <button class="btn btn-sm btn-danger">Readmore <i class="fas fa-arrow-right"></i></button> -->
                     </div>
                 </div>
                 <div class="col-md-3 col-sm-6 vd">
                    <div class="bkjiu">
                     <img src="{{url('customer/assets/images/gallery/g2.jpg')}}" alt="">
                        <h4><b>2 - </b>Seeing</h4>
                     <p>Our Expert Doctor will see and verify everything before donation process.</p>
                     <!-- <button class="btn btn-sm btn-danger">Readmore <i class="fas fa-arrow-right"></i></button> -->
                     </div>
                 </div>
                 <div class="col-md-3 col-sm-6 vd">
                    <div class="bkjiu">
                     <img src="{{url('customer/assets/images/gallery/g3.jpg')}}" alt="">
                        <h4><b>3 - </b>Donation</h4>
                     <p>Professional Nurse will always be there with you till end of donation.</p>
                     <!-- <button class="btn btn-sm btn-danger">Readmore <i class="fas fa-arrow-right"></i></button> -->
                     </div>
                 </div>
                 <div class="col-md-3 col-sm-6 vd">
                    <div class="bkjiu">
                        <img src="{{url('customer/assets/images/gallery/g4.jpg')}}" alt="">
                        <h4><b>4 - </b>Save Life</h4>
                         <p>Your one time donation can save a life.Remember you can donate every 6 months.</p>
                         <!-- <button class="btn btn-sm btn-danger">Readmore <i class="fas fa-arrow-right"></i></button> -->
                    </div> 
                 </div>
            </div>
            
             
         </div>
     </section>
     
     
     
     
         <!--################### Our Blog Starts Here #######################--->
       <!--  <div id="blog" class="blog-container contaienr-fluid">
            <div class="container">
                <div class="session-title row">
                  <h2>Latest Blog</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce fringilla vel nisl a dictum. Donec ut est arcu. Donec hendrerit velit consectetur adipiscing elit.</p>
                </div>
                <div class="row news-row">
                    <div class="col-md-6">
                        <div class="news-card">
                            <div class="image">
                                <img src="{{url('customer/assets/images/blog/blog_01.jpg')}}" alt="">
                            </div>
                            <div class="detail">
                                <h3>Latest News about Smarteye</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce fringilla vel nisl a dictum. Donec ut est arcu. Donec hendrerit consectetur adipiscing elit. </p>
                                <p class="footp">
                                    27 Comments <span>/</span>
                                    Blog Design <span>/</span>
                                    Read More
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="news-card">
                            <div class="image">
                                <img src="{{url('customer/assets/images/blog/blog_02.jpg')}}" alt="">
                            </div>
                            <div class="detail">
                                <h3>Apple Launch its New Phone</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce fringilla vel nisl a dictum. Donec ut est arcu. Donec hendrerit consectetur adipiscing elit. </p>
                                <p class="footp">
                                    27 Comments <span>/</span>
                                    Blog Design <span>/</span>
                                    Read More
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="news-card">
                            <div class="image">
                                <img src="{{url('customer/assets/images/blog/blog_03.jpg')}}" alt="">
                            </div>
                            <div class="detail">
                                <h3>About Windows 10 Update</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce fringilla vel nisl a dictum. Donec ut est arcu. Donec hendrerit consectetur adipiscing elit. </p>
                                <p class="footp">
                                    27 Comments <span>/</span>
                                    Blog Design <span>/</span>
                                    Read More
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="news-card">
                            <div class="image">
                                <img src="{{url('customer/assets/images/blog/blog_04.jpg')}}" alt="">
                            </div>
                            <div class="detail">
                                <h3>Latest News about Smarteye</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce fringilla vel nisl a dictum. Donec ut est arcu. Donec hendrerit consectetur adipiscing elit. </p>
                                <p class="footp">
                                    27 Comments <span>/</span>
                                    Blog Design <span>/</span>
                                    Read More
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

        <br>
        <br>
        <br>
        <br>

     
     

   
      <!--*************** Footer  Starts Here *************** -->
    <footer id="contact" class="container-fluid">
        <div class="container">
            
            <div class="row content-ro">
                <div class="col-lg-4 col-md-12 footer-contact">
                    <h2>Contact Informatins</h2>
                    <div class="address-row">
                        <div class="icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="detail">
                            <p>46-29 Thrissur Round, Southernbank, Kerala,India</p>
                        </div>
                    </div>
                    <div class="address-row">
                        <div class="icon">
                            <i class="far fa-envelope"></i>
                        </div>
                        <div class="detail">
                            <p>savelifewithblood.com <br> support@savelifewithblood.com</p>

                        </div>
                    </div>
                    <div class="address-row">
                        <div class="icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="detail">
                            <p>+91 9751791203 <br> +91 9159669599</p>
                        </div>
                    </div>
                </div>
                <!--   -->
               <!--  <div class="col-lg-4 col-md-12 footer-form">
                    <div class="form-card">
                        <div class="form-title">
                            <h4>Quick Message</h4>
                        </div>
                        <div class="form-body">
                            <input type="text" placeholder="Enter Name" class="form-control">
                            <input type="text" placeholder="Enter Mobile no" class="form-control">
                            <input type="text" placeholder="Enter Email Address" class="form-control">
                            <input type="text" placeholder="Your Message" class="form-control">
                            <button class="btn btn-sm btn-primary w-100">Send Request</button>
                        </div>
                    </div>
                </div> -->
            </div>
            <div class="footer-copy">
                <div class="row">
                    <div class="col-lg-8 col-md-6">
                        <p>@2023 | Laravel Frame Work  | ATEES Industrial Training Pvt Ltd</p>
                    </div>
                    <div class="col-lg-4 col-md-6 socila-link">
                        <ul>
                            <li><a><i class="fab fa-github"></i></a></li>
                            <li><a><i class="fab fa-google-plus-g"></i></a></li>
                            <li><a><i class="fab fa-pinterest-p"></i></a></li>
                            <li><a><i class="fab fa-twitter"></i></a></li>
                            <li><a><i class="fab fa-facebook-f"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    
    
</body>

    <script src="{{url('customer/assets/js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{url('customer/assets/js/popper.min.js')}}"></script>
    <script src="{{url('customer/assets/js/bootstrap.min.js')}}"></script>
    <script src="{{url('customer/assets/plugins/grid-gallery/js/grid-gallery.min.js')}}"></script>
    <script src="{{url('customer/assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js')}}"></script>
    <script src="{{url('customer/assets/js/script.js')}}"></script>

    @if(session('pass'))
    <script type="text/javascript">
       Swal.fire({
        text:'{{session('pass')}}',
        icon:'danger',
        confirmButtonText:'OK'

       });
    </script>
        
    @endif
</html>
