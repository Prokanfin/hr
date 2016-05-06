<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    //
    protected $table = 'employee';

    public function scopeValidat($query,$username,$password){

    	$result = $query->where('em_number',$username)
    			->where('em_password',$password)->first();

    	return $result;
    }
    
    public function scopeSel_em_id($query,$id){
        $result = $query->where('em_id',$id)->first();
        
        return $result;
    }
    
   
}
