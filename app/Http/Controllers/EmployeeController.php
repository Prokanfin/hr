<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Employee;

class EmployeeController extends Controller
{
    //
    public function sel_profile(Request $request){
        
        if ($request->session()->has('em_id')) {
            $result=Employee::Sel_em_id($request->session()->get('em_id'));
            
            return response()->json($result);
        }  
    }
    
    public function update_profile(Request $request){
        
    }
}
