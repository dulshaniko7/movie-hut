<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {
	protected $fillable = [
			'name', 'actors', 'price', 'description', 'image', 'catagory_id'
	];

	public function catagory() {
		$this->belongsTo(Catagory::class);
	}
}
