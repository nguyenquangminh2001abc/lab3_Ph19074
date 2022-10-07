

@extends('layouts.master')

@section('title','sản phẩm')

@section('content-title','danh sách sản phẩm')

@section('content')

<a class="btn btn-outline-success" href='?url=product/create'>tạo mới</a>

<table class="table mt-2">

  <thead>
    <tr>
      <th>id</th>
      <th>Tên sản phẩm</th>
      <th>giá</th>
      <th>color</th>
      <th>Số Lượng</th>
      <th>Ảnh</th>
      <th>Chi Tiết</th>
    </tr>
  </thead>
  <tbody>
@foreach($product as $product)
  <tr>
    <td>{{$product['id']}}</td>
    <td>{{$product['name']}}</td>
    <td>{{$product['price']}}</td>
    <td>{{$product['color']}}</td>
    <td>{{$product['quantity']}}</td>
    <td><img src="{{$product['image']}}" width="70" height="70" alt=""></td>
    <td><a href="?url=product/details&&id_pro={{$product['id']}}">chi tiết</a></td>
   
  </tr>
@endforeach
</tbody>
</table>
@endsection 

    

