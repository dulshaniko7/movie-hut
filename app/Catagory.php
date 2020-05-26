<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catagory extends Model
{
    //
	protected $fillable =['name'];
	public function products(){
		return $this->hasMany(Product::class);

	}
}
