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
             <!--    <div class="col-lg-4 col-md-12 footer-links">
                   <div class="row no-margin mt-2">
                    <h2>Quick Links</h2>
                    <ul>
                        <li>Home</li>
                        <li>About Us</li>
                        <li>Contacts</li>
                        <li>Pricing</li>
                        <li>Gallery</li>
                        <li>eatures</li>

                    </ul>
                    </div>
                   <div class="row no-margin mt-1">
                       <h2 class="m-t-2">More Products</h2>
                     <ul>
                        <li>Forum PHP Script</li>
                        <li>Edu Smart</li>
                        <li>Smart Event</li>
                        <li>Smart School</li>


                    </ul>
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
            icon:'success',
            confirmButtonText:'OK'
        });
    </script>
        
    @endif

    @if(session('fail'))
    <script type="text/javascript"> 
        Swal.fire({
            text:'{{session('fail')}}',
            icon:'danger',
            confirmButtonText:'OK'
        });
    </script>
        
    @endif
</html>