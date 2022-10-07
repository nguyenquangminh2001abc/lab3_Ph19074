
@extends('layouts.master')

@section('title','sản phẩm')

@section('content-title','danh sách sản phẩm')

@section('content')
<form action="index.php?url=product/insert" method="post">
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Name</label>
        <input type="text" class="form-control" name="name_pro" placeholder="Name">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Price</label>
        <input type="number" class="form-control" name='price_pro' placeholder="price">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Color</label>
        <input type="text" class="form-control" name='color_pro' placeholder="color">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Quantity</label>
        <input type="number" class="form-control" name='quantity_pro' placeholder="price">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">image</label>
        <input type="text" class="form-control" name='image_pro' placeholder="image">
    </div>
    <div class="mb-3">
      
        <input type="submit" class="form-control btn-outline-success" value="Insert">
    </div>
</form>
@endsection