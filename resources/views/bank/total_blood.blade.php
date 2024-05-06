@include('bank/layout/header');


  <section id="process" class="donation-care">
         <div class="container">
           <div class="row session-title">
               <h2>Blood Availability</h2>
               <p>The donation process from the time you arrive center until the time you leave</p>
           </div>
            <div class="row">
                 <div class="col-md-3 col-sm-6 vd">
                    <div class="bkjiu">
                     
                    <a href="{{url('/blood_details')}}">
                         <img style="height:200px;width:200px;" src="{{url('Bank/A.png')}}" alt="">
                            <h4><b>1 - </b>Blood A+</h4>
                    </a>
                     <p>Ut wisi enim ad minim veniam, quis laore nostrud exerci tation ulm hedi corper turet suscipit lobortis</p>
                     <button class="btn btn-sm btn-danger">Readmore <i class="fas fa-arrow-right"></i></button>
                     </div>
                 </div>
                 <div class="col-md-3 col-sm-6 vd">
                    <div class="bkjiu">
                     <a href="{{url('/a')}}">
                         
                         <img style="height:200px;width:200px;" src="{{url('/Bank/A_negative.png')}}" alt="">
                        <h4><b>2 - </b>Blood A-</h4>
                     </a>
                     <p>Ut wisi enim ad minim veniam, quis laore nostrud exerci tation ulm hedi corper turet suscipit lobortis</p>
                     <button class="btn btn-sm btn-danger">Readmore <i class="fas fa-arrow-right"></i></button>
                     </div>
                 </div>
                 <div class="col-md-3 col-sm-6 vd">
                    <div class="bkjiu">
                     <img style="height:200px;width:200px;" src="{{url('/Bank/AB.png')}}" alt="">
                        <h4><b>3 - </b>Blood AB+</h4>
                     <p>Ut wisi enim ad minim veniam, quis laore nostrud exerci tation ulm hedi corper turet suscipit lobortis</p>
                     <button class="btn btn-sm btn-danger">Readmore <i class="fas fa-arrow-right"></i></button>
                     </div>
                 </div>
                 <div class="col-md-3 col-sm-6 vd">
                    <div class="bkjiu">
                        <img style="height:200px;width:200px;" src="{{url('/Bank/ab_negative.png')}}" alt="">
                        <h4><b>4 - </b>Blood AB-</h4>
                         <p>Ut wisi enim ad minim veniam, quis laore nostrud exerci tation ulm hedi corper turet suscipit lobortis</p>
                         <button class="btn btn-sm btn-danger">Readmore <i class="fas fa-arrow-right"></i></button>
                    </div> 
                 </div>
            </div>

            <div class="row">
                 <div class="col-md-3 col-sm-6 vd">
                    <div class="bkjiu">
                     <img style="height:200px;width:200px;" src="{{url('/Bank/B.png')}}" alt="">
                     <h4><b>5 - </b>Blood B+</h4>
                     <p>Ut wisi enim ad minim veniam, quis laore nostrud exerci tation ulm hedi corper turet suscipit lobortis</p>
                     <button class="btn btn-sm btn-danger">Readmore <i class="fas fa-arrow-right"></i></button>
                     </div>
                 </div>
                 <div class="col-md-3 col-sm-6 vd">
                    <div class="bkjiu">
                     <img  style="height:200px;width:200px;" src="{{url('/Bank/b_negative.png')}}" alt="">
                        <h4><b>6 - </b>Blood B-</h4>
                     <p>Ut wisi enim ad minim veniam, quis laore nostrud exerci tation ulm hedi corper turet suscipit lobortis</p>
                     <button class="btn btn-sm btn-danger">Readmore <i class="fas fa-arrow-right"></i></button>
                     </div>
                 </div>
                 <div class="col-md-3 col-sm-6 vd">
                    <div class="bkjiu">
                     <img style="height:200px;width:200px;" src="{{url('/Bank/O.png')}}" alt="">
                        <h4><b>7 - </b>Blood O+</h4>
                     <p>Ut wisi enim ad minim veniam, quis laore nostrud exerci tation ulm hedi corper turet suscipit lobortis</p>
                     <button class="btn btn-sm btn-danger">Readmore <i class="fas fa-arrow-right"></i></button>
                     </div>
                 </div>
                 <div class="col-md-3 col-sm-6 vd">
                    <div class="bkjiu">
                        <img style="height:200px;width:200px;" src="{{url('Bank/o_negative.jpg')}}" alt="">
                        <h4><b>8 - </b>Blood O-</h4>
                         <p>Ut wisi enim ad minim veniam, quis laore nostrud exerci tation ulm hedi corper turet suscipit lobortis</p>
                         <button class="btn btn-sm btn-danger">Readmore <i class="fas fa-arrow-right"></i></button>
                    </div> 
                 </div>
            </div>
            
             
         </div>
     </section>

@include('bank/layout/footer');