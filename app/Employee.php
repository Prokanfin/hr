<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    //
    protected $table = 'employee';
    public $timestamps = false;

    public function scopeValidat($query,$username,$password){

    	$result = $query->where('em_number',$username)
    			->where('em_password',$password)->get();

    	return $result;
    }
    
    public function scopeSel_em_id($query,$id){
        $result = $query->where('em_id',$id)->first();
        
        return $result;
    }
    
    /*public function scopeSel_em_all($query){
        $result = $query->all();
        
        return $result;
    }*/
    
    public function  scopeIns_em($query,$data){
        //return $data;
        $result = $query->insert($data);
        
        return $result;    
    }
    
    public function scopeUpdate_em_id($query,$id,$data){
        
        $result = $query->where('em_id',$id)->update($data);
        
        return $result;
        
        
    }
    
    public function scopeDelete_em_id($query,$id){
        $result = $query->where('em_id',$id)->delete();
    }
   
}
