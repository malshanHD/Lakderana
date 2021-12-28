<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CustomerData;

class CustomerDataController extends Controller
{
    public function index()
    {
        return view('customer/index');
    }
    
    public function search(Request $request)
    {
        try {
            $id = $request->input('customer');
            $customer_name = $request->input('customer_name');          
            $email = $request->input('email');

            if ($id && $customer_name && $email) {
                $userRecord = CustomerData::where('cus_id', $id) 
                ->Where('email', $email) 
                ->Where('cus_full_name', 'like', '%' . $customer_name . '%')
                ->first();
    
            }
            elseif ($id && $customer_name) {
                $userRecord = CustomerData::where('cus_id', $id) 
                ->Where('cus_full_name', 'like', '%' . $customer_name . '%')
                ->first();
            }
            elseif ($id && $email) {
                $userRecord = CustomerData::where('cus_id', $id) 
                ->Where('email', $email) 
                ->first();
            }
            elseif ($customer_name && $email) {
                $userRecord = CustomerData::Where('email', $email) 
                ->Where('cus_full_name', 'like', '%' . $customer_name . '%')
                ->first();
            }
            elseif ($id ) {
               
                $userRecord = CustomerData::where('cus_id','like', '%' .$id . '%' ) 
                ->first();
              
            } 
            elseif ($customer_name) {
                $userRecord = CustomerData::Where('cus_full_name', 'like', '%' . $customer_name . '%')
                ->first();
            }
            elseif ($email) {
                $userRecord = CustomerData::Where('email', $email)->first();
              
    
            }
            else {
                $userRecord='';
            }
           
            return response()->json(['success'=>$userRecord]);
      
      
        } catch (\Throwable $th) {
            //throw $th;
        }
       
    }

    public function register(Request $request)
    {
        try {
            $customer_name = $request->input('customer_name');
            $mobile = $request->input('mobile');          
            $email = $request->input('email');
            $user_id = random_int(1000, 9999);
            $new_user_id= "CS". $user_id ;

            $user = New CustomerData;
            $user->cus_id =$new_user_id;
            $user->email = $email;
            $user->mobile = $mobile;
            $user->cus_full_name = $customer_name;
            $user->save();

            return response()->json(['success'=>$new_user_id]);
      
      
        } catch (\Throwable $th) {
            //throw $th;
            return response()->json(['error'=>"error"]);
        }
       
    }
    
}