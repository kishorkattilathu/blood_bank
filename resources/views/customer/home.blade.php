@include('customer/layout/header');
        
        
   
     
     <section id="process" class="donation-care">
         <div class="container">
           <div class="row session-title">
               <h2>Blood Bank Near You</h2>
               <p style="text-align: center;" >The donation process from the time you arrive center until the time you leave</p>
           </div>
            <div class="row">
           @foreach ($bank as $ban)

                 <div class="col-md-3 col-sm-6 vd">
                    <div class="bkjiu">
                        <a href="{{'single_page/'.$ban->bank_id}}"><img style="height:150px;width:150px;" src="{{url('Admin/bank_image/'.$ban->bank_image)}}" alt=""></a>
                        <h4><b></b>{{$ban->bank_name}}</h4>
                         <p>Address:{{$ban->bank_address}}</p>
                         <p>Phone:{{$ban->bank_phone}}</p><br>
                        <!--  <button class="btn btn-sm btn-danger">Readmore <i class="fas fa-arrow-right"></i></button> -->
                    </div> 
                 </div>
           @endforeach             

            </div>
         </div>
     </section>
     
     
     @include('customer/layout/footer');
   
