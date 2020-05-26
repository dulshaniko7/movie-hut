@extends('backend.template')
@section('content')


<h1>Admin home</h1>
<a href="{{ route('products.create') }}">Add Product</a>
<br>
<a href="">Add Category</a>
    @endsection
