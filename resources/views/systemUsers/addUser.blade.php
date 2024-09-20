@extends('layouts.master')
@section('content')
<!-- Content -->
	<div class="content-area py-1">
		<div class="container-fluid">
			<div class="col-lg-12 box box-block bg-white">
        <center> <h4>ثبت مکتب جدید</h4> </center><br>
          <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="row form-group" >
                 <div class="col-md-4">
                   <label  for="Field of Study" style="color:black">اسم مکتب (مطابق به جواز اخذ شده)</label>
                   <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus required placeholder="اسم کامل کاربر">

	                   @if ($errors->has('name'))
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $errors->first('name') }}</strong>
                       </span>
	                   @endif
                   </div>

									 	<div class="col-lg-4 ">
											<label for="">نوع مالکیت</label>
												<select class="form-control" name="type" required>
													<option value="">-------</option>
													<option value="0">دولتی</option>
													<option value="1">خصوصی</option>
												</select>
										</div>

										<div class="col-lg-4 ">
											<label for="">سطح</label>
												<select class="form-control" name="level" required>
													<option value="">-------</option>
													<option value="1">ابتدایی</option>
													<option value="2">متوسطه</option>
													<option value="3">عالی (لیسه)</option>
												</select>
								  	</div>

                 </div>

								 <div class="row form-group" >
	 									 	<div class="col-lg-4 ">
	 											<label for="">آدرس</label>
	 											<input type="text" name="address" class="form-control" placeholder="موقیعت کنونی">
	 										</div>

											<div class="col-lg-4 ">
												<label for="">شماره تماس</label>
												<input type="text" name="phone_number" class="form-control" placeholder="0700000000">
											</div>

	 										<div class="col-lg-4 ">
	 											<label for="">وضیعت</label>
	 											<select class="form-control" name="status">
	 												<option value="1">فعال</option>
	 												<option value="0">غیرفعال</option>
	 											</select>
	 								  	</div>

	                  </div>

                 <div class="row form-group" >
									 <div class="col-lg-4">
									 <label  for="University Name" style="color:black">ایمیل آدرس</label>
									 <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required required placeholder="someone@domain.com">
									 @if ($errors->has('email'))
											 <span class="invalid-feedback" role="alert">
													 <strong>{{ $errors->first('email') }}</strong>
											 </span>
									 @endif
									 </div>
                   <div class="col-lg-4 ">
                   <label  for="University Name" style="color:black">گذرواژه</label>
                   <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="**********">
                   @if ($errors->has('password'))
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $errors->first('password') }}</strong>
                       </span>
                   @endif
                   </div>


                   <div class="col-lg-4">
                     <label  for="Field of Study" style="color:black">تکرار گذرواژه </label>
                     <input id="password-confirm" type="password" class="form-control"  name="password_confirmation"  required required placeholder="**********">
                  </div>


                <input type="hidden" name="isAdmin" value="1">

                 <div class="col-lg-4">
                   <div class="wrap-input100 validate-input form-control" data-validate = "Pleas Select Your Acount Type" style="border: none; outline: none; margin-top: 20px;">
                    <button type="submit" name="submit" class="btn btn-success"> <i class="fa fa-save"></i> افزودن مکتب جدید </button>
                 </div>
                 </div>
              </div>


            <div class="col-md-2"></div>
             @include('layouts.errors')
            </form>

              <!-- Content -->
              <div class="content-area py-1">
                <div class="container-fluid">
                  <div class="box box-block bg-white">
                    <center><h4>مدیر سیستم</h4> </center>
                    <h6 class="mb-1">نمایش اطلاعات</h6>
                    <table class="table table-striped table-bordered dataTable">
                      <thead>
                        <tr>
                          <th>شماره</th>
                          <th>عکس</th>
                          <th>اسم کامل</th>
                          <th>ایمیل</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($admin as $user)
                        <tr>
                          <td>{{$loop->iteration}}</td>
                          <td><a href="/UploadedImages/{{$user->profileImage}}"><img style="height: 30px" src="UploadedImages/{{$user->profileImage}}" alt="" /> </a></td>
                          <td>{{$user->name}}</td>
                          <td>{{$user->email}}</td>
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
