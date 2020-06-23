<?php

namespace App\Http\Controllers\Api;

use App\Catagory;
use App\Http\Controllers\Controller;
use App\Http\Resources\ProductIndexResource;
use App\Http\Resources\ProductResource;
use App\Http\Resources\ProductShowResource;
use App\Http\Resources\ProductStoreResource;
use App\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {

		//$data = Product::all();
		//return response()->json(['data' => $data]);

		$products = Product::all();
		return ProductIndexResource::collection($products);


	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param \Illuminate\Http\Request $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request) {


		return Product::create([
				'name' => $request['name'],
				'actors' => $request['actors'],
				'price' => $request['price'],
				'description' => $request['description'],
				'image' => $request['image'],
				'catagory_id' => $request['catagory_id']
		]);
		/*
				$product = new Product();
				$product->name = $request->input('name');
				$product->actors = $request->input('actors');
				$product->price = $request->input('price');
				$product->description = $request->input('description');
				$product->image = $request->input('image');

				$catagory = Catagory::findOrFail($request->input('catagory_id'));
				$catagory->products()->save($product);
				return new ProductResource($product);
*/

		/*
			Product::create($request->all());
			return (['message'=> 'ok']);
		*/
	}

	/**
	 * Display the specified resource.
	 *
	 * @param int $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id) {
		$product = Product::findOrFail($id);
		return new ProductShowResource($product);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param int $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id) {
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param \Illuminate\Http\Request $request
	 * @param int $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id) {
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param int $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id) {
		//
	}

	public function search($s) {

		$data = Product::where('name', 'like', '%' . $s . '%')->get();

		return response()->json(['data' => $data]);
	}


}
