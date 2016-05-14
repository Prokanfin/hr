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
            unset($result['em_password']);
            return response()->json($result);
        }  
    }
    
    public function ins_em(Request $request){
        if ($request->session()->has('em_id')){
            
            //return response()->json($request->all());
            $result=Employee::Ins_em($request->all());
            
            return response()->json($result);
        }
    }

    
    public function update_em(Request $request){
        if($request->session()->get('em_role') == "ผู้ใช้งาน"){
            $dataEmployee=$request->all();
            unset($dataEmployee['em_id'],
                  $dataEmployee['em_status'],
                  $dataEmployee['em_role'],
                  $dataEmployee['em_number'],
                  $dataEmployee['em_audit_number'],
                  $dataEmployee['em_start_work'],
                  $dataEmployee['em_salary_rate'],
                  $dataEmployee['em_salary_day'],
                  $dataEmployee['em_day_work'],
                  $dataEmployee['em_benefit'],
                  $dataEmployee['em_note'],
                  $dataEmployee['customer_id']);
            $result=Employee::Update_em($request->input('em_id'),$dataEmployee);
            
            return response()->json($result);
            
        }elseif($request->session()->get('em_role') == "ผู้ดูแลระบบ"){
            $dataEmployee=$request->all();
            unset($dataEmployee['em_id']);
             $result=Employee::Update_em($request->input('em_id'),$dataEmployee);
            
            return response()->json($result);
        }
    }
}
