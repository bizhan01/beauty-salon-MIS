<div class="box box-block bg-white" style="margin-top: -35px">
    <form method="POST" action="{{ route('searchBeautySalon') }}" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="input-group">
      <input type="text" name="q" value=""  class="form-control "  placeholder="جستجوی آرایشگاه ها..." required >
      <span class="input-group-btn">
        <button type="submit" id="check-minutes" class="btn btn-rounded bg-flickr ">جستجو</button>
      </span>
    </div>
    @include('layouts.errors')
  </form> <br>
  <div class="row">
    <div class="col-lg-12">
      <table class="table table-striped table-bordered dataTable">
        @foreach($bUsers as $user)
        <tr>
          <td><a href="/UploadedImages/{{$user->profileImage}}"><img style="height: 30px" src="UploadedImages/{{$user->profileImage}}" alt="" /> </a></td>
          <td><a href="/publicProfile/{{ $user->id }}">{{$user->name}}</a></td>
          <td>{{$user->address}}</td>
          <td>{{$user->phone_number}}</td>
          <td>{{$user->email}}</td>
        </tr>
        @endforeach
      </table>
    </div>
  </div>
</div>
