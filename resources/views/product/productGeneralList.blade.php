@extends('layouts.master')
@section('content')
<!-- Content -->
	<div class="content-area py-1">
		<div class="container-fluid">
			<div class="col-lg-12 box box-block bg-white">
        <!-- Content -->
        <div class="content-area py-1">
          <div class="container-fluid">
            <div class="box box-block bg-white">
              <center><h4>لیست محصولات</h4> </center>
              <h6 class="mb-1">نمایش اطلاعات</h6>
              <table class="table table-striped table-bordered dataTable" id="table-2">
                <thead>
                  <tr>
                    <th>عکس</th>
                    <th>اسم کامل</th>
                    <th>آدرس</th>
                    <th>شماره</th>
                    <th>ایمیل</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($products as $product)
                  <tr>
                    <td><a href="/UploadedImages/products/{{$product->image}}"><img style="height: 30px" src="UploadedImages/products/{{$product->image}}" alt="" /> </a></td>
                    <td><a href="#">{{$product->productName}}</a></td>
                    <td>{{$product->productCode}}</td>
                    <td>{{$product->company}}</td>
                    <td>{{$product->price}}</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
   </div>
</div>
@endsection
