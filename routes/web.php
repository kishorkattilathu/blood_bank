 <?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


//index//
Route::get('index','App\Http\Controllers\Customer_controller@index');


//Admin//
Route::get('admin_register','App\Http\Controllers\Admin_controller@admin_register');
Route::get('admin_login','App\Http\Controllers\Admin_controller@admin_login');
Route::get('admin_register','App\Http\Controllers\Admin_controller@admin_register');
Route::post('admin_insert_register','App\Http\Controllers\Admin_controller@admin_insert_register');
Route::post('admin_insert_login','App\Http\Controllers\Admin_controller@admin_insert_login');
Route::get('admin_home','App\Http\Controllers\Admin_controller@admin_home');
Route::post('admin_profile_update','App\Http\Controllers\Admin_controller@admin_profile_update');
Route::get('all_donor','App\Http\Controllers\Admin_controller@all_donor');
// Route::get('edit_donor/{donor_id}','App\Http\Controllers\Admin_controller@edit_donor');
// Route::post('update_donor/{donor_id}','App\Http\Controllers\Admin_controller@update_donor');
// Route::get('delete_donor/{donor_id}','App\Http\Controllers\Admin_controller@delete_donor');
Route::get('donor','App\Http\Controllers\Admin_controller@donor');
// Route::post('add_donor','App\Http\Controllers\Admin_controller@add_donor');
Route::get('add_bank','App\Http\Controllers\Admin_controller@add_bank');
Route::post('admin_register_bank','App\Http\Controllers\Admin_controller@admin_register_bank');
Route::get('manage_bank','App\Http\Controllers\Admin_controller@manage_bank');
Route::get('approve_bank/{bank_id}','App\Http\Controllers\Admin_controller@approve_bank');
Route::get('reject_bank/{bank_id}','App\Http\Controllers\Admin_controller@reject_bank');
Route::get('pending_complaints','App\Http\Controllers\Admin_controller@pending_complaints');
Route::get('complaint_reply/{complaint_id}','App\Http\Controllers\Admin_controller@complaint_reply');
Route::post('complaint_reply_insert/{complaint_id}','App\Http\Controllers\Admin_controller@complaint_reply_insert');
Route::get('all_complaints1','App\Http\Controllers\Admin_controller@all_complaints1');
Route::get('all_patient','App\Http\Controllers\Admin_controller@all_patient');
Route::get('admin_logout','App\Http\Controllers\Admin_controller@admin_logout');





//customer//
Route::get('login','App\Http\Controllers\Customer_controller@login');
Route::get('customer_register','App\Http\Controllers\Customer_controller@customer_register');
Route::post('customer_insert_register','App\Http\Controllers\Customer_controller@customer_insert_register');
Route::post('customer_insert_login','App\Http\Controllers\Customer_controller@customer_insert_login');
Route::get('customer_home','App\Http\Controllers\Customer_controller@customer_home');
Route::get('customer_profile','App\Http\Controllers\Customer_controller@customer_profile');
Route::post('customer_profile_update','App\Http\Controllers\Customer_controller@customer_profile_update');
Route::get('single_page/{bank_id}','App\Http\Controllers\Customer_controller@single_page');
Route::post('customer_booking','App\Http\Controllers\Customer_controller@customer_booking');
Route::get('my_bookings','App\Http\Controllers\Customer_controller@my_bookings');
Route::get('cancel_bookings/{booking_id}','App\Http\Controllers\Customer_controller@cancel_bookings');
Route::get('pay_bookings/{booking_id}','App\Http\Controllers\Customer_controller@pay_bookings');
Route::post('pay_insert/{booking_id}','App\Http\Controllers\Customer_controller@pay_insert');
Route::get('contact_admin','App\Http\Controllers\Customer_controller@contact_admin');
Route::post('customer_complaint','App\Http\Controllers\Customer_controller@customer_complaint');
Route::get('contact_bank/{banK_id}','App\Http\Controllers\Customer_controller@contact_bank');
Route::post('customer_bank_complaint','App\Http\Controllers\Customer_controller@customer_bank_complaint');
Route::get('complaint_to_admin','App\Http\Controllers\Customer_controller@complaint_to_admin');
Route::get('delete_complaints_to_admin/{complaint_id}','App\Http\Controllers\Customer_controller@delete_complaints_to_admin');
Route::get('complaint_to_bank','App\Http\Controllers\Customer_controller@complaint_to_bank');
Route::get('logout','App\Http\Controllers\Customer_controller@logout');
Route::get('customer_receipts','App\Http\Controllers\Customer_controller@customer_receipts');





//BloodBank//
Route::get('bank_login','App\Http\Controllers\Bank_controller@bank_login');
Route::get('bank_register','App\Http\Controllers\Bank_controller@bank_register');
Route::post('bank_insert_register','App\Http\Controllers\Bank_controller@bank_insert_register');
Route::post('bank_insert_login','App\Http\Controllers\Bank_controller@bank_insert_login');
Route::get('bank_home','App\Http\Controllers\Bank_controller@bank_home');
Route::post('bank_profile_update','App\Http\Controllers\Bank_controller@bank_profile_update');
Route::get('total_blood','App\Http\Controllers\Bank_controller@total_blood');
Route::get('add_donor','App\Http\Controllers\Bank_controller@add_donor');
Route::post('insert_donor','App\Http\Controllers\Bank_controller@insert_donor');
Route::get('all_donor_bank','App\Http\Controllers\Bank_controller@all_donor_bank');
Route::get('edit_donor_bank/{donor_id}','App\Http\Controllers\Bank_controller@edit_donor_bank');
Route::post('update_bank_donor/{donor_id}','App\Http\Controllers\Bank_controller@update_bank_donor');
Route::get('delete_donor_bank/{donor_id}','App\Http\Controllers\Bank_controller@delete_donor_bank');
Route::get('approve_customer/{customer_id}','App\Http\Controllers\Bank_controller@approve_customer');
Route::get('reject_customer/{customer_id}','App\Http\Controllers\Bank_controller@reject_customer');
Route::get('all_bookings','App\Http\Controllers\Bank_controller@all_bookings');
Route::get('approve_bookings/{booking_id}/{booking_donor_id}','App\Http\Controllers\Bank_controller@approve_bookings');
Route::get('reject_bookings/{booking_id}','App\Http\Controllers\Bank_controller@reject_bookings');
Route::get('contact_admin_bank','App\Http\Controllers\Bank_controller@contact_admin_bank');
Route::post('bank_complaint','App\Http\Controllers\Bank_controller@bank_complaint');
Route::get('bank_pending_complaint','App\Http\Controllers\Bank_controller@bank_pending_complaint');
Route::get('reply_complaints_to_customer/{customer_complaint_id}','App\Http\Controllers\Bank_controller@reply_complaints_to_customer');
Route::post('reply_to_customer/{customer_complaint_id}','App\Http\Controllers\Bank_controller@reply_to_customer');
Route::get('all_customer_complaints','App\Http\Controllers\Bank_controller@all_customer_complaints');
Route::get('bank_logout','App\Http\Controllers\Bank_controller@bank_logout');
Route::get('all_booked','App\Http\Controllers\Bank_controller@all_booked');
Route::get('my_complaints','App\Http\Controllers\Bank_controller@my_complaints');
Route::get('manage_donor','App\Http\Controllers\Bank_controller@manage_donor');
Route::get('available/{donor_id}','App\Http\Controllers\Bank_controller@available');
Route::get('unavailable/{donor_id}','App\Http\Controllers\Bank_controller@unavailable');