<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Employee;

class LoginController extends Controller
{
    //
    public function checkAuth(Request $request){
         
        //return $request->all();
      
    	//$result=Employee::Validat('admin','1234');
         
         if($result=Employee::Validat($request->input('username'),$request->input('password'))){
            
             //return $result;
             $request->session()->put('em_id',$result->em_id);
             $request->session()->put('em_name',$result->em_name);
             $request->session()->put('em_role',$result->em_role);
             $request->session()->put('em_number',$result->em_number);
             $request->session()->put('company',$result->customer_id);
             
             return response()->json(['status'=>'true']);
             
             
         }else{
             return response()->json(['status'=>'false']);
             //return $request->session()->all();
         }	 
    }
    
    //logout destoy session
    public function onLogout(){
        
    $data = session()->flush();
       

    }    
  
}
