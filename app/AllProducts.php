<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class AllProducts extends Model
{
    protected $table = 'products';

    protected $fillable = ['sub_category_id', 'name_product', 'description_product', 'price_product', 'file_product'];
    
    public function get_products($id){
		$result = \DB::table($this->table)->where('sub_category_id', $id)->get();
		return $result;
	}
	
	

}