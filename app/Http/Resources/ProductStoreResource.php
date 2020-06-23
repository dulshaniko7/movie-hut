<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductStoreResource extends JsonResource {
	/**
	 * Transform the resource into an array.
	 *
	 * @param \Illuminate\Http\Request $request
	 * @return array
	 */
	public function toArray($request) {
		return [
				'id' => $this->id,
				'name' => $this->name,
				'actors' => $this->actors,
				'description' => $this->description,
				'image' => $this->image,
				'price' => $this->price,
				'catagory_id' => $this->catagory_id
		];

	}
}
