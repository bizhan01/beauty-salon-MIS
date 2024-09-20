<div class="box box-block bg-white" style="margin-top: -35px">
    <form method="POST" action="{{ route('searchProduct') }}" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="input-group">
      <input type="text" name="q" value=""  class="form-control "  placeholder="جستجوی محصولات..." required >
      <span class="input-group-btn">
        <button type="submit" id="check-minutes" class="btn btn-rounded bg-flickr ">جستجو</button>
      </span>
    </div>
    @include('layouts.errors')
  </form><br>
  <div class="row">
    <div class="col-lg-12">
      <table class="table table-striped table-bordered dataTable" >
        @foreach($products as $product)
        <tr>
          <td><a href="/UploadedImages/{{$product->profileImage}}"><img style="height: 30px" src="UploadedImages/products/{{$product->image}}" alt="" /> </a></td>
          <td><a href="/publicProfile/{{ $product->id }}">{{$product->productName}}</a></td>
          <td>{{$product->productCode}}</td>
          <td>{{$product->company}}</td>
          <td>{{$product->price}} <span style="color: blue">افغانی</span></td>
        </tr>
        @endforeach
      </table>
    </div>
  </div>
</div>