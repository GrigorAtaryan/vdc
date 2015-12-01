<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class About extends Model
{
    protected $table = 'about';
    protected $fillable = ['text'];
    
    

    public function get_about(){

      $result = \DB::table($this->table)->where('id', 1)->get();
	  return $result;
    }

   public function update_about($data){

        \DB::table($this->table)->where('id', 1)->update($data);
    }


}