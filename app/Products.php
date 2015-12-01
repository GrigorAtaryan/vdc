<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Products extends Model
{
    protected $table = 'category';

    protected $fillable = ['category_name'];
    
    

    public function insert_category($data_category){
	
      \DB::table($this->table)->insert(array('category_name' => $data_category));

    }
	
	public function get_category(){
		$result = \DB::table($this->table)->get();
		return $result;
	}
	
	public function get_category_by_id($id){
		$result = \DB::table($this->table)->where('id', $id)->get();
		return $result;
	}

	


}