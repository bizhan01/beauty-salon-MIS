@extends('layouts.master')
@section('content')
<!-- Content -->
	<div class="content-area py-1">
		<div class="container-fluid">
			<div class="col-lg-12 box box-block bg-white">
        <!-- Content -->
        <center><h3>افزودن تبلیغات</h3></center>
        <form method="post" action="{{ route('addAdvertisement') }}" enctype="multipart/form-data">
          {{ csrf_field() }}
          <input type="file" name="image" id="input-file-now" class="dropify" required/>
          <input type="hidden" name="status" value="1">
          <br>
          <input type="submit" class="btn btn-rounded bg-flickr form-control" value="ذخیره">
        </form>
      </div>
   </div>
</div>
@endsection
