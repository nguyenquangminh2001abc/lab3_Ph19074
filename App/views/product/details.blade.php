@extends('layouts.master')

@section('title','chi tiết sản phẩm')

@section('content-title', 'Chi Tiết Sản Phẩm')

@section('content')

@foreach($product as $product)
<h2>{{$product['name']}}</h2>
<img src="{{$product['image']}}" width="150" height="150" alt="">
<p> price : {{$product['price']}}</p>
<p> color : {{$product['color']}}</p>
<p> Quantity : {{$product['quantity']}}</p>
@endforeach

<a href="?url=product" class="btn btn-outline-success">Danh Sách Sản Phẩm</a>
@endsection