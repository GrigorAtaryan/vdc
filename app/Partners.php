<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Partners extends Model
{
    protected $table = 'partners';
    protected $fillable = ['text'];
    
    

    public function get_partners(){

      $result = \DB::table($this->table)->where('id', 1)->get();
	  return $result;
    }

	public function update_partners($data){

        \DB::table($this->table)->where('id', 1)->update($data);
    }


}