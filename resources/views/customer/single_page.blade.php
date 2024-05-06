@include ('customer/layout/header1');




   <section id="process" class="donation-care">
         <div class="container">
           <div class="row session-title">
               <h2>{{$data->bank_name}}</h2>
               <p style="text-align: center;" >The donation process from the time you arrive center until the time you leave</p>
           </div>
            <div class="row">
           @foreach ($data1 as $don)

                 <div class="col-md-3 col-sm-6 vd">
                    <div class="bkjiu">
                        <a href=""><img style="height:150px;width:150px;" src="{{url('Bank/donor/'.$don->documents)}}" alt=""></a>
                        <h4><b></b>{{$don->donor_name}}</h4>
                         <p>Address:{{$don->location}}</p>
                         <p>Phone:{{$don->phone}}</p>
                         <p>Phone:{{$don->blood}}</p>
                         <form method="post" action="{{'/customer_booking'}}">
                         	{{csrf_field()}}

                         	<input type="hidden" name="booking_bank_id" value="{{$data->bank_id}}">
                          <input type="hidden" name="booking_bank_email" value="{{$data->bank_email}}">

                          <input type="hidden" name="booking_customer_id" value="{{$data2->customer_id}}">
                          <input type="hidden" name="booking_customer_email" value="{{$data2->cust_email}}">
                          <input type="hidden" name="booking_customer_phone" value="{{$data2->cust_phone}}">
                          <input type="hidden" name="booking_customer_blood" value="{{$data2->cust_blood}}">

                          <input type="hidden" name="booking_donor_id" value="{{$don->donor_id}}">
                          <input type="hidden" name="booking_donor_name" value="{{$don->donor_name}}">
                          <input type="hidden" name="booking_donor_email" value="{{$don->donor_email}}">
                          <input type="hidden" name="booking_donor_blood" value="{{$don->blood}}">
                            
                         @php
                         if($don->donation_status=="Available")
                         {
                         @endphp
                         <button style="background-color: lightgreen;" type="submit">Book</button>
                         @php
                       }
                       else
                       {
                        @endphp

                         <button>Unavailable</button>

                         @php
                       }
                         @endphp

                         </form>
                         <!-- <button class="btn btn-sm btn-danger">Readmore <i class="fas fa-arrow-right"></i></button> -->
                    </div> 
                 </div>
           @endforeach             

            </div>
         </div>
     </section>

@include ('customer/layout/footer');