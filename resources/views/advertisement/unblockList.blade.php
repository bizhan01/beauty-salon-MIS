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
              <center><h4>لیست تبلیغات تائید شده</h4> </center>
              <h6 class="mb-1">نمایش اطلاعات</h6>
              <table class="table table-striped table-bordered dataTable">
                <thead>
                  <tr>
                    <th>شماره</th>
                    <th>تبلیغات</th>
                    <th>حذف</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($advertisements as $adv)
                  <tr>
                    <td>{{$adv->id}}</td>
                    <td><a href="/UploadedImages/adv/{{$adv->image}}"><img style="height: 30px" src="UploadedImages/adv/{{$adv->image}}" alt="" /> </a></td>
                    <td><a href = 'deleteAdvertisement/{{ $adv->id }}' onclick='return confirm("حذف شود؟")' title="حذف"> <i class="fa fa-trash text-danger"></i></a></td>
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
