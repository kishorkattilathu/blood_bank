<?php

namespace App\Http\Controllers;
use App\Models\admin;
use App\Models\donor;
use App\Models\bank;
use App\Models\complaint;
use App\Models\customer;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class Admin_controller extends Controller
{
    public function admin_login()
    {
    	return view('Admin/login');
    }

    public function admin_register()
    {
    	return view('admin/register');
    }

    public function admin_insert_register(Request $req)
    {
    	$data=new admin();
    	$data->admin_name=$req->input('name');
    	$data->admin_email=$req->input('email');
    	$data->admin_phone=$req->input('phone');
    	$data->admin_address=$req->input('address');
    	$data->admin_password=$req->input('pass');
        $password=$req->input('confirm_pass');
        if ($password==$req->input('pass')) 
        {
           
        
            $count=admin::where([['admin_email',$req->input('email')]])->count();
            if ($count==0) 
            {
        	   $data->save();
        	   return redirect('/admin_login');
            }
            else
            {
                return redirect('/admin_register');
            }
        }
        else
        {
            return redirect('/admin_register');
        }
    }
    public function admin_insert_login(Request $req)
    {
    	$req->session()->put('admin_mail',$req->input('email'));
    	$data=admin::where([['admin_email',$req->input('email')],['admin_password',$req->input('pass')]])->count();
    	if ($data>0) 
    	{
    		return redirect('/admin_home')->with('pass',"Successfully Loged In");
    	}
    	else
    	{
    		return redirect('/admin_login')->with('fail',"Email or Password wrong try again");
    	}
    }

    public function admin_home()
    {
        if (session()->has('admin_mail')) 
        {
            $data=admin::where([['admin_email',session('admin_mail')]])->first();
            return view('admin/home',compact('data'));
        }
        else
        {
            return redirect ('/admin_login');
        }
    }

    public function admin_profile_update(Request $req)
    {
        $data=admin::where([['admin_email',session('admin_mail')]])->first();
        $data->admin_name=$req->input('name');
        $data->admin_phone=$req->input('phone');
        $data->admin_address=$req->input('address');
        $data->admin_password=$req->input('pass');
        $data->update();
        return redirect('/admin_home')->with('pass','Updated Successfully');
    }

    public function donor()
        {
            if (session()->has('admin_mail')) 
            {
                $bank=bank::all();
                return view('admin/donor',compact('bank'));
            }
            else
            {
                return redirect('admin_login');
            }
        }

    // public function add_donor(Request $req)
    // {
    //     $add=new donor();
    //     $add->donor_name=$req->input('name');
    //     $add->donor_email=$req->input('email');
    //     $add->gender=$req->input('gender');
    //     $add->phone=$req->input('phone');
    //     $add->location=$req->input('location');
    //     $add->bank=$req->input('bank');
    //     $add->blood=$req->input('blood');
    //     $add->type='Admin';
    //     $add->bank_status='Approved';
    //     if ($req->hasfile('documents')) 
    //     {
    //         $file=$req->file('documents');
    //         $extension=$file->getClientOriginalExtension();
    //         $filename=time().'.'.$extension;
    //         $file->move('Admin/donor',$filename);
    //         $add->documents=$filename;
    //     }
    //     $add->save();
    //     return redirect('/all_donor');
    // }

    public function all_donor()
    {
        if (session()->has('admin_mail')) 
        {
            $data=donor::where([['status','Approved']])->get();
            return view('admin/all_donor',compact('data'));
        }
        else
        {
            return redirect('admin_login');
        }
    }

    // public function edit_donor($id)
    // {
    //     if (session()->has('admin_mail')) 
    //     {
    //         $data1=bank::all();
    //         $data=donor::where([['donor_id',$id]])->first();
    //         return view('admin/edit_donor',compact('data'),compact('data1'));
    //     }
    //     else
    //     {
    //         return redirect('admin_login');
    //     }
    // }

    
    // public function delete_donor($id)
    // {
    //      $data=donor::where([['donor_id',$id]]);
    //     $data->delete();
    //     return redirect('/all_donor');
    // }

    // public function update_donor(Request $req,$id)
    // {
    //     $data=donor::where([['donor_id',$id]])->first();
    //     $data->donor_name=$req->input('name');
    //     $data->gender=$req->input('gender');
    //     $data->phone=$req->input('phone');
    //     $data->bank=$req->input('bank');
    //     $data->location=$req->input('location');
    //     $data->blood=$req->input('blood');
       
    //     $data->update();
    //     return redirect('/all_donor');
    // }

      public function add_bank()
        {
            if (session()->has('admin_mail')) 
            {
                return view('admin/add_bank');
            }
            else
            {
                return redirect ('admin_login');
            }
        }

      public function admin_register_bank(Request $req)
      {
        $data=new bank ();
        $data->bank_name=$req->input('name');
        $data->bank_email=$req->input('email');
        $data->bank_address=$req->input('address');
        $data->bank_phone=$req->input('phone');
        $data->bank_type='Admin';
        $data->bank_password=$req->input('pass');
        $password=$req->input('confirm_pass');
        $count=bank::where([['bank_email',$req->input('email')]])->count();
        if ($count==0) 
        {
                if ($password==$req->input('pass')) 
                {
                    
                
                    if ($req->hasfile('documents')) 
                    {
                       $file=$req->file('documents');
                       $extension=$file->getClientOriginalExtension();
                       $filename=time().'.'.$extension;
                       $file->move('Admin/documents',$filename);
                       $data->documents=$filename;
                    }
                    if ($req->hasfile('bank_image')) 
                    {
                        $file1=$req->file('bank_image');
                        $extension1=$file->getClientOriginalExtension();
                        $filename1=time().'.'.$extension1;
                        $file1->move('Admin/bank_image',$filename1);
                        $data->bank_image=$filename1;
                    }
                        $data->bank_status='Approved';
                        $data->save();
                        return redirect('admin_home')->with('pass','Bank Registered Successfully');
                }
                else
                {
                    return redirect('/add_bank')->with('fail','Password Mismatch Try Agian');
                }
        }
        else
        {
            return redirect('/add_bank')->with('fail','Email id Already Registered');
        }
      }

      public function manage_bank()
      {
        $data=bank::where([['bank_status','Pending']])->get();
        return view('admin/manage_bank',compact('data'));
      }  

      public function approve_bank($id)
      {
        $data=bank::where([['bank_id',$id]])->first();
        $data->bank_status='Approved';
        $data->update();
        return redirect('manage_bank')->with('pass','Bank Approved Successfully');
      }

      public function reject_bank($id)
      {
        $data=bank::where([['bank_id',$id]])->first();
        $data->bank_status='Rejected';
        $data->update();
        return redirect('manage_bank')->with('fail','Bank Rejected');
      }

      public function pending_complaints()
      {
       if (session()->has('admin_mail')) 
       {
            $data=complaint::where([['message_reply','Pending']])->get();
            return view('admin/pending_complaints',compact('data'));
       }
       else
       {
        return redirect('admin_login');
       }
      }

      public function complaint_reply($id)
      {
        if (session()->has('admin_mail')) 
        {
            $data=complaint::where([['complaint_id',$id]])->first();
            return view('admin/complaint_reply',compact('data'));
        }
        else
        {
            return redirect ('admin_login');
        }
      }

      public function complaint_reply_insert($id,Request $req)
      {
        $data=complaint::where([['complaint_id',$id]])->first();
        $data->message_reply=$req->input('reply');
        $data->update();
        return redirect('/admin_home')->with('pass','Replied Successfully');
      }

      public function all_complaints1()
      {
        $comp=complaint::all();
        return view ('admin/all_complaints',compact('comp'));
      }

      public function all_patient()
      {
        if (session()->has('admin_mail')) 
        {
            // $patient=DB::table('customers')->join('banks','banks.bank_id','=','customers.customer_bank_id')->where([['status','Approved']])->get();
            // $patient=customer::where([['status','Approved']])->get();
            $patient=customer::all();
            return view('admin/all_patient',compact('patient'));
        }
        else
        {
            return redirect('admin_login');
        }
      }

      public function admin_logout(Request $req)
      {
        $req->session()->forget('admin_mail');
        return redirect('/index')->with('pass','Logout Successfully');
      }

}
