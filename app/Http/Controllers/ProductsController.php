<?php

namespace App\Http\Controllers;

use App\Catagory;
use App\Http\Resources\ProductIndexResource;
use App\Http\Resources\ProductShowResource;
use App\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		//
		return ProductIndexResource::collection(
				Product::all()
		);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		//
		$categories = Catagory::all();
		return view('backend.products.create', compact('categories'));

	}

	/**
	 * Store a newly created resource in storage.php
	 *
	 * @param \Illuminate\Http\Request $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request) {
		//
		$p = new Product();
		$p->name = $request->name;
		$p->actors = $request->actors;
		$p->description = $request->description;
		$p->price = $request->price;

		if ($request->hasFile('image')) {
			$file = $request->file('image');
			$extention = $file->getClientOriginalExtension();
			$filename = time() . '.' . $extention;
			$file->move('upload/images/', $filename);
			$p->image = $filename;
		} else {
			return $request;
			$product->image = '';
		}
		$c = Catagory::findOrFail($request->category_id);
		$c->products()->save($p);
		return redirect()->route('products.create');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param int $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id) {
		//
		return new ProductShowResource(Product::findOrFail($id));
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
}
