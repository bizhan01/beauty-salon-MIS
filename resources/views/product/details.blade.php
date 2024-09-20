@extends('layouts.master')
@section('content')
<!-- Content -->
<div class="row row-sm">
  <div class="col-lg-3"></div>
<div class="col-md-5">
  <div class="box bg-white product product-3">
    <div class="p-img img-cover" style="background-image: url(/UploadedImages/products/<?php echo $product[0]->image; ?>);">
    </div>
    <div class="p-content">
      <center><h3>توضیحات کامل محصول</h3></center> <hr>
      <div class="clearfix">
        <h5 class="float-xs-left"><a class="text-black" href="#">اسم محصول:</a></h5>
        <h5 class="p-price float-xs-right"><?php echo $product[0]->productName; ?></h5>
      </div> <hr>

      <div class="clearfix">
        <h5 class="float-xs-left"><a class="text-black" href="#">سریال نمبر محصول:</a></h5>
        <h5 class="p-price float-xs-right"><?php echo $product[0]->productCode; ?></h5>
      </div> <hr>

      <div class="clearfix">
        <h5 class="float-xs-left"><a class="text-black" href="#">ساخت:</a></h5>
        <h5 class="p-price float-xs-right"><?php echo $product[0]->company; ?></h5>
      </div> <hr>

      <div class="clearfix">
        <h5 class="float-xs-left"><a class="text-black" href="#">قیمت:</a></h5>
        <h5 class="p-price float-xs-right"><?php echo $product[0]->price; ?> <span style="color: blue">افغانی</span></h5>
      </div> <hr>

    </div>
  </div>
</div>
</div>

@endsection
