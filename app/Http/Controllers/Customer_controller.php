<?php

namespace App\Http\Controllers;
use App\Models\customer;
use App\Models\bank;
use App\Models\donor;
use App\Models\bookings;
use App\Models\payment;
use App\Models\complaint;
use App\Models\bank_complaint;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class Customer_controller extends Controller
{
    public function index()
    {
        
    	return view('customer/index');
    }

    public function login()
    {
    	return view('customer/login');
    }

    public function customer_register()
    {
    	return view('customer/register');
    }

    public function customer_insert_register(Request $req)
    {
        $data=new customer();
        $data->cust_name=$req->input('name');
        $data->cust_email=$req->input('email');
        $data->cust_phone=$req->input('phone');
        $data->cust_address=$req->input('address');
        $data->cust_blood=$req->input('blood');
        $data->password=$req->input('pass');
        $password=$req->input('confirm_pass');
        if ($req->hasfile('fitness')) 
        {
            $file=$req->file('fitness');
            $extension=$file->getClientOriginalExtension();
            $filename=time().'.'.$extension;
            $file->move('customer/fitness_doc',$filename);
            $data->fitness_doc=$filename;
        }
        if ($req->hasfile('proof')) 
        {
            $file1=$req->file('proof');
            $extension1=$file1->getClientOriginalExtension();
            $filename1=time().'.'.$extension1;
            $file1->move('customer/id_proof',$filename1);
            $data->id_proof=$filename1;
        }
       $count=customer::where([['cust_email',$req->input('email')]])->count();
       if ($count>0) 
         {
            return redirect('/customer_register')->with('fail','Email Already Registered');
         }
         else
         {
        
            if ($password==$req->input('pass')) 
            {
                $data->save();
                return redirect('/login')->with('pass','Registered Successfully');
            }
            else
            {
                return redirect('/customer_register')->with('fail','Password does not match try again');
            }
         }
    }

    public function customer_insert_login(Request $req)
    {
        $req->session()->put('cust_mail',$req->input('email'));
        $data=customer::where([['cust_email',$req->input('email')],['password',$req->input('pass')]])->count();
        if ($data>0) 
        {
            
            return redirect('/customer_home')->with('pass','Welcome to Home Page');

        }
        else
        {
            return redirect('/login')->with('fail','Email or Password Wrong Try Again');
        }
    }

    public function customer_home()
    {
        if (session()->has('cust_mail')) 
        {
            $bank=bank::where([['bank_status','Approved']])->get();
            return view('customer/home',compact('bank'));
        }
        else
        {
            return redirect('login');
        }
    }

    public function customer_profile()
    {
        if (session()->has('cust_mail'))
        {
            $data=customer::where([['cust_email',session('cust_mail')]])->first();
            return view('customer/my_profile',compact('data'));
        }
        else
        {
            return redirect('login');
        }
    }

    public function customer_profile_update(Request $req)
    {
        $data=customer::where([['cust_email',session('cust_mail')]])->first();
        $data->cust_name=$req->input('name');
        $data->cust_phone=$req->input('phone');
        $data->cust_address=$req->input('address');
        $data->cust_blood=$req->input('blood');
        $data->password=$req->input('pass');
        $data->update();
        return redirect ('customer_profile')->with('pass','Profile Updated Successfully');
    }

    public function single_page($id)
    {

        if (session()->has('cust_mail')) 
        {
            $email=session('cust_mail');
            $data=bank::where([['bank_id',$id]])->first();
            $data1=donor::where([['donor_bank_id',$id]])->get();
            $data2=customer::where([['cust_email',session('cust_mail')]])->first();
            // $data3=bookings::all();

           
            return view('customer/single_page',compact('data','data1','data2'));
        }
        else
        {
            return redirect('login');
        }
    }

    public function customer_booking(Request $req)
    {
        $booking=new bookings();
        $booking->booking_bank_id=$req->input('booking_bank_id');
        $booking->booking_bank_email=$req->input('booking_bank_email');
        $booking->booking_customer_id=$req->input('booking_customer_id');
        $booking->booking_customer_email=$req->input('booking_customer_email');
        $booking->booking_customer_phone=$req->input('booking_customer_phone');
        $booking->booking_customer_blood=$req->input('booking_customer_blood');
        $booking->booking_donor_id=$req->input('booking_donor_id');
        $booking->booking_donor_name=$req->input('booking_donor_name');
        $booking->booking_donor_email=$req->input('booking_donor_email');
        $booking->booking_donor_blood=$req->input('booking_donor_blood');
        $booking->booking_status='Pending';
        $booking->payment_status='Pending';

        $count=bookings::where([['booking_bank_id',$req->input('booking_bank_id')],['booking_customer_id',$req->input('booking_customer_id')],
        ['booking_donor_id',$req->input('booking_donor_id')]])->count();
        if ($count==0) 
        {
            $booking->save();
            return redirect('/my_bookings')->with('pass','Booking Successfully');
        }
        else
        {
            return redirect('/customer_home')->with('fail','Already Booked');
        }
       
    }

    public function my_bookings()
    {
        if (session()->has('cust_mail')) 
        {
            $data=bookings::where([['booking_customer_email',session('cust_mail')],['payment_status','Pending']])->get();
            return view('customer/my_bookings',compact('data'));
            
        }
        else
        {
            return redirect('login');
        }
    }

    public function cancel_bookings($id)
    {
        $book=bookings::where([['booking_id',$id]])->first();
        $book->delete();
        return redirect('/my_bookings')->with('pass','Deleted Successfully');
    }

    public function pay_bookings($id)
    {
        if (session()->has('cust_mail')) 
        {
            $payment=bookings::where([['booking_id',$id]])->first();
            return view('customer/payment',compact('payment'));
        }
        else
        {
            return redirect('login');
        }
    }

    public function pay_insert(Request $req,$id)
    {
        $pay=new payment();
        $pay->holder_name=$req->input('name');
        $pay->card_number=$req->input('card');
        $pay->cvv=$req->input('cvv');
        $pay->expiry_month=$req->input('month');
        $pay->expiry_year=$req->input('year');
        $pay->amount=$req->input('amount');
        $pay->payment_customer_id=$req->input('user_id');
        $pay->payment_customer_email=$req->input('user_email');
        $save=$pay->save();
        if($save) 
        {
        
            $book=bookings::where([['booking_id',$id]])->first();
            $book->payment_status='Paid';
            $book->update();
            return redirect('/customer_home')->with('pass','Payment Done Successfully');
        }
        
       
    }

    public function contact_admin()
    {
        if (session()->has('cust_mail')) 
        {
            $data=customer::where([['cust_email',session('cust_mail')]])->first();
            return view('customer/contact_admin',compact('data'));
        }
        else
        {
            return redirect('login');
        }
    }

    public function customer_complaint(Request $req)
    {
        $comp=new complaint();
        $comp->complaint_name=$req->input('name');
        $comp->complaint_email=$req->input('email');
        $comp->complaint_type='Customer';
        $comp->message=$req->input('msg');
        $comp->message_reply='Pending';
        $comp->save();
        return redirect('/customer_home')->with('pass','Complaint Registered Successfully');
    }

    public function contact_bank($id)
    {
        if (session()->has('cust_mail')) 
        {
            $data=bank::where([['bank_id',$id]])->first();
            $data1=customer::where([['cust_email',session('cust_mail')]])->first();
            return view ('customer/contact_bank',compact('data','data1'));
            
        }
        else
        {
            return redirect ('/login');
        }
    }

    Public function customer_bank_complaint(Request $req)
    {
       $bank=new bank_complaint();
       $bank->customer_complaint_name=$req->input('c_name');
       $bank->customer_complaint_email=$req->input('c_email');
       $bank->customer_bank_name=$req->input('name');
       $bank->customer_bank_email=$req->input('email');
       $bank->customer_message=$req->input('msg');
       $bank->bank_message_reply='Pending';
       $bank->save();
       return redirect('/customer_home')->with('pass','Complaint Registered Successfully');
    }

    public function complaint_to_admin()
    {
       if (session()->has('cust_mail')) 
       {
           $data=complaint::where([['complaint_email',session('cust_mail')]])->get();
           return view('customer/complaints_to_admin',compact('data'));
       }
       else
       {
        return redirect('/login');
       }
    }

    public function delete_complaints_to_admin($id)
    {
        $delete=complaint::where([['complaint_id',$id]])->first();
        $delete->delete();
        return redirect('customer_home')->with('pass','Complaint Deleted Successfully');
    }

    public function complaint_to_bank()
    {
        if (session()->has('cust_mail')) 
        {
            $data=bank_complaint::where([['customer_complaint_email',session('cust_mail')]])->get();
            return view('customer/complaint_to_bank',compact('data'));
        }
        else
        {
            return redirect('/login');
        }
    }

    public function logout(Request $req)
    {
        $req->session()->forget('cust_mail');
         return redirect('/index')->with('pass','Logged Out Successfully');
    }

    public function customer_receipts()
    {
       if (session()->has('cust_mail')) 
       {
            $data=DB::table('payments')->join('customers','payments.payment_customer_email','=','customers.cust_email')->join('bookings','bookings.booking_customer_id','=','payments.payment_customer_id')->join('donors','donors.donor_id','=','bookings.booking_donor_id')->join('banks','bookings.booking_bank_id','=','banks.bank_id')->where([['payments.payment_customer_email',session('cust_mail')]])->where([['bookings.payment_status','Paid']])->get();



           // $data=payment::where([['payment_customer_email',session('cust_mail')]])->get();
           return view('customer/customer_receipts',compact('data'));
       }
       else
       {
        return redirect ('/login');
       }
    }

   

}
