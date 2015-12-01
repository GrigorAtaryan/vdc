<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class SubProducts extends Model
{
    protected $table = 'sub_category';

    protected $fillable = ['category_id', 'sub_category_name'];
    
    

    public function insert_sub_category($id, $data_sub_category){
    	$strDataSaubCategoryName = $data_sub_category['sub_category_name'];
		$strTocken = $data_sub_category['_token'];
	
        $result = \DB::table($this->table)->insert(array('category_id' => $id, 'sub_category_name' => $strDataSaubCategoryName, '_token' => $strTocken));
      

    }
	
	public function get_sub_category(){
		$result = \DB::table($this->table)->get();
		return $result;
	}
	

	
	public function get_sub_category_by_category_id($id){
		$result = \DB::table($this->table)->where('category_id', $id)->get();
		return $result;
	}


}