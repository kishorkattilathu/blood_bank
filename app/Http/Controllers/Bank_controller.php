<?php

namespace App\Http\Controllers;
use App\Models\bank;
use App\Models\donor;
use App\Models\customer;
use App\Models\bookings;
use App\Models\complaint;
use App\Models\bank_complaint;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class Bank_controller extends Controller
{
    public function bank_login()
    {
    	return view('bank/login');
    }

    public function bank_register()
    {
    	return view('bank/register');
    }

    public function bank_insert_register(Request $req)
    {
    	$data=new bank();
    	$data->bank_name=$req->input('name');
    	$data->bank_email=$req->input('email');
    	$data->bank_address=$req->input('address');
    	$data->bank_phone=$req->input('phone');
    	$data->bank_type='Bank';
        $data->bank_status='Pending';
        $data->bank_password=$req->input('pass');
        $password=$req->input('confirm_pass');

        if ($password==$req->input('pass')) 
        {
        
                $count=bank::where([['bank_email',$req->input('email')]])->count();
                if ($count==0) 
                {

                    if ($req->hasfile('bank_image')) 
                    {
                        $file=$req->file('bank_image');
                        $extension=$file->getClientOriginalExtension();
                        $filename=time().'.'.$extension;
                        $file->move('Admin/bank_image',$filename);
                        $data->bank_image=$filename;
                    }
                    if ($req->hasfile('documents')) 
                    {
                        $file1=$req->file('documents');
                        $extension1=$file1->getClientOriginalExtension();
                        $filename1=time().'.'.$extension1;
                        $file1->move('Admin/documents',$filename1);
                        $data->documents=$filename1;
                    }


                	$data->save();
                	return redirect('/bank_login')->with('pass','Registered Successfully');
                
                }
                else
                {
                    return redirect('/bank_register')->with('fail','Email Already Registered');

                }
        }
        else
        {
            return redirect('/bank_register')->with('fail','Password does not match try again');
        }
    }

    public function bank_insert_login(Request $req)
    {
    	$req->session()->put('bank_mail',$req->input('email'));

    	$data=bank::where([['bank_email',$req->input('email')],['bank_password',$req->input('pass')]])->count();

    	if ($data>0) 
    	{
            $approve=bank::where([['bank_email',$req->input('email')],['bank_status','Approved']])->count();
            if ($approve>0) 
            {
    		    return redirect('/bank_home')->with('pass','Login Successfully');
            }
            else
            {
    		return redirect('/bank_login')->with('fail','Not Approved By Admin Yet');
            }
    	}
    	else
    	{
    		return redirect('/bank_login')->with('fail','Wrong Email id or Password');
    	}
    }

    public function bank_home()
    {
    	if (session()->has('bank_mail')) 
    	{	
    		$data=bank::where([['bank_email',session('bank_mail')]])->first();
    		return view('bank/bank_home',compact('data'));
    	}
    	else
    	{
    		return redirect('bank_login');
    	}
    }

    public function bank_profile_update(Request $req)
    {
        $update=bank::where([['bank_email',session('bank_mail')]])->first();
        $update->bank_name=$req->input('name');
        $update->bank_phone=$req->input('phone');
        $update->bank_address=$req->input('address');
        $update->bank_password=$req->input('pass');
        if ($req->hasfile('bank_image')) 
        {
            $file=$req->file('bank_image');
            $extension=$file->getClientOriginalExtension();
            $filename=time().'.'.$extension;
            $file->move('Admin/bank_image',$filename);
            $update->bank_image=$filename;
        }
        if ($req->hasfile('documents')) 
        {
            $file1=$req->file('documents');
            $extension1=$file1->getClientOriginalExtension();
            $filename1=time().'.'.$extension1;
            $file1->move('Admin/documents',$filename1);
            $update->documents=$filename1;
        }
        $update->update();
        return redirect('/bank_home')->with('pass','Profile Updated Successfully');
    }

        // public function total_blood()
        // {
        //     if (session()->has('bank_mail')) 
        //     {
        //         return view('bank/total_blood');
        //     }
        //     else
        //     {
        //         return redirect ('bank_login');
        //     }
        // }

        public function add_donor()
        {
            if (session()->has('bank_mail')) 
            {
                $data=bank::where([['bank_email',session('bank_mail')]])->first();
                return view('bank/add_donor',compact('data'));
            }
            else
            {
                return redirect('bank_login');
            }
        }

        public function insert_donor(Request $req)
        {
            $data=new donor();
            $data->donor_name=$req->input('name');
            $data->donor_email=$req->input('email');
            $data->gender=$req->input('gender');
            $data->phone=$req->input('phone');
            // $data->bank=session('bank_mail');
            $data->bank=$req->input('bank');
            $data->donor_bank_id=$req->input('bank_id');
            $data->donor_bank_email=$req->input('bank_email');
            $data->location=$req->input('location');
            $data->blood=$req->input('blood');
            $data->type='Bank';
            $data->status='Approved';
            $data->donation_status='Available';
            if ($req->hasfile('documents')) 
            {   
                $file=$req->file('documents');
                $extension=$file->getClientOriginalExtension();
                $filename=time().'.'.$extension;
                $file->move('Bank/donor',$filename);
                $data->documents=$filename;
            }
            $count=donor::where([['donor_email',$req->input('email')]])->count();
            if ($count==0) 
            {
            $data->save();
            return redirect('/all_donor_bank')->with('pass','Donor Added Successfully'); 
            }
            else
            {
                return redirect ('/add_donor')->with('fail','Email already exist try another email id');
            }       
        }

        public function all_donor_bank()
        {
             $data=donor::where([['donor_bank_email',session('bank_mail')]])->get();
             return view('bank/all_donor_bank',compact('data'));

        }

        public function edit_donor_bank($id)
        {
            $data=donor::where([['donor_id',$id]])->first();
            return view('bank/edit_donor',compact('data'));
        }

        public function update_bank_donor(Request $req,$id)
        {
            $data=donor::where([['donor_id',$id]])->first();
            $data->donor_name=$req->input('name');
            $data->gender=$req->input('gender');
            $data->phone=$req->input('phone');
            $data->location=$req->input('location');
            $data->blood=$req->input('blood');
            if ($req->hasfile('documents')) 
            {
                $file=$req->file('documents');
                $extension=$file->getClientOriginalExtension();
                $filename=time().'.'.$extension;
                $file->move('Bank/donor',$filename);
                $data->documents=$filename;
               
            }
             $data->update();
             return redirect('/all_donor_bank')->with('pass','Donor Updated Successfully');

        }

        public function manage_donor()
        {
            $data=donor::where([['donor_bank_email',session('bank_mail')]])->get();
            return view('bank/manage_donor',compact('data')); 
        }
        public function available($donor_id)
        {
            $available=donor::where([['donor_id',$donor_id]])->first();
            $available->donation_status='Available';
            $available->update();
            return redirect('/manage_donor')->with('pass','Donor is now Available');
        }
        public function unavailable($donor_id)
        {
            $available=donor::where([['donor_id',$donor_id]])->first();
            $available->donation_status='Unavailable';
            $available->update();
            return redirect('/manage_donor')->with('pass','Donor is now Unavailable');
        }
        public function delete_donor_bank($id)
        {
            $data=donor::where([['donor_id',$id]])->first();
            $data->delete();
            return redirect('all_donor_bank')->with('fail','Donor Deleted Successfully');
        }

        // public function user_request()
        // {
        //     if (session()->has('bank_mail')) 
        //     {
        //         $data=DB::table('customers')->join('banks','banks.bank_id','=','customers.customer_bank_id')->where([['status','Pending']])->get();

        //         return view('bank/user_request1',compact('data'));
        //     }
        //     else
        //     {
        //         return redirect('bank_login');
        //     }
        // }

        public function approve_customer($id)
        {
            $data=customer::where([['customer_id',$id]])->first();
            $data->status='Approved';
            $data->update();
            return redirect('/user_request');
        }

        public function reject_customer($id)
        {
            $data=customer::where([['customer_id',$id]])->first();
            $data->status='Rejected';
            $data->update();
            return redirect('/user_request');
        }

        public function all_bookings()
        {
            if (session()->has('bank_mail')) 
            {
                $data=bookings::where([['booking_bank_email',session('bank_mail')],['booking_status','Pending']])->get();
                return view('bank/all_bookings',compact('data'));
               
            }
            else
            {
                return redirect ('bank_login');
            }
        }

        public function approve_bookings($id,$donor_id)
        {
            $book=bookings::where([['booking_id',$id]])->first();
            $book->booking_status='Approved';
            $update=$book->update();
            if ($update) 
            {
                $available=donor::where([['donor_id',$donor_id]])->first();
                $available->donation_status='Unavailable';
                $available->update();
            }
           return redirect('/all_bookings')->with('pass','Bookings Approved Successfully');
        }

        public function reject_bookings($id)
        {
            $book=bookings::where([['booking_id',$id]])->first();
            $book->booking_status='Rejected';
            $book->update();
            return redirect('/all_bookings')->with('fail','Bookings Rejected Successfully');
        }

        public function contact_admin_bank()
        {
            if (session()->has('bank_mail')) 
            {
                $data=bank::where([['bank_email',session('bank_mail')]])->first();
                return view('bank/contact_admin',compact('data'));
            }
             else
            {
                return redirect ('bank_login');
            }
        }

        public function bank_complaint(Request $req)
        {
            $comp=new complaint();
            $comp->complaint_name=$req->input('name');
            $comp->complaint_email=$req->input('email');
            $comp->complaint_type='Bank';
            $comp->message=$req->input('msg');
            $comp->message_reply='Pending';
            $comp->save();
            return redirect ('bank_home')->with('pass','Complaint Sended to Admin');
        }
        public function my_complaints()
        {
            if (session()->has('bank_mail')) 
            {
                $complaints=complaint::where([['complaint_email',session('bank_mail')]])->get();
                return view('bank/my_complaints',compact('complaints'));
            }
        }

        public function bank_pending_complaint()
        {
            if (session()->has('bank_mail')) 
            {
                $data=bank_complaint::where([['bank_message_reply','Pending'],['customer_bank_email',session('bank_mail')]])->get();
                return view('bank/pending_complaints',compact('data'));
            }
             else
            {
                return redirect ('bank_login');
            }
           

        }

        public function reply_complaints_to_customer($id)
        {
            $data=bank_complaint::where([['customer_complaint_id',$id]])->first();
            return view('bank/reply_complaints_to_customer',compact('data'));

        }

        public function reply_to_customer(Request $req ,$id)
        {
            $data=bank_complaint::where([['customer_complaint_id',$id]])->first();
            $data->bank_message_reply=$req->input('reply');
            $data->update();
            return redirect('/bank_pending_complaint')->with('pass','Replied Successfully');

        }

        public function all_customer_complaints()
        {
            if (session()->has('bank_mail')) 
            {
                $data=bank_complaint::where([['customer_bank_email',session('bank_mail')]])->get();
                return view('bank/all_customer_complaints',compact('data'));
            }
            else
            {
                return redirect('/bank_login');
            }
        }

        public function bank_logout(Request $req)
        {
            $req->session()->forget('bank_mail');
            return redirect('/index')->with('pass','Logged Out Successfully');
        }

           public function all_booked()
        {
            if (session()->has('bank_mail')) 
            {
                $data=bookings::where([['booking_bank_email',session('bank_mail')],['booking_status','Approved']])->get();
                return view('bank/all_booked',compact('data'));
               
            }
            else
            {
                return redirect ('bank_login');
            }
        }

      
   
}
