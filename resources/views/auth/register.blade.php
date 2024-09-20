<!DOCTYPE html>
<html lang="en">
<head>
	<title>ورود</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
  <link rel="stylesheet" href="/css/bootstrap-select.min.css">
	<link rel="stylesheet" type="text/css" href="css/registerStyle.css">
</head>
<body style="background-color: #999999;">

	<div class="limiter">
		<div class="container-login100">
			<div class="login100-more" style="background-image: url(img/photos-1/6.jpg);">
			</div>

			<div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50 col-sm-12" style="direction: rtl">
						<!-- login Start -->
					<br>
					<center><img src="\img\logo\logo.png" height="60px" alt="" /></center>
					<center><h2>سیستم مدیریت یکپارچه زیبایی</h2></center>
					<div class="alert alert-danger" style="color: red">
							@include('layouts.errors')
         	</div>

					<!-- Sign Up Start -->
						<center><h2>همین امروز باما بپویندید</h2></center>
          <form method="POST" action="{{ route('register') }}"  class="login100-form ">
              @csrf
						<div class="wrap-input100 validate-input" data-validate="لطفا اسم تان را وارد کنید">
							<span class="label-input100">اسم کامل</span>
							<input class="input100" type="text" name="name" id="name" placeholder="اسم کامل">
							<span class="focus-input100"></span>
						</div>

						<div class="wrap-input100 validate-input" data-validate = "لطفا یک ایمیل آدرس معتبر وارد کنید">
							<span class="label-input100">ایمیل آدرس</span>
							<input class="input100" type="text" name="email" id="email" placeholder="someone@domain.com">
							<span class="focus-input100"></span>
						</div>

						<div class="wrap-input100 validate-input" data-validate = "لطفا پاسورد تان را وارد کنید">
							<span class="label-input100">گذرواژه / پاسورد</span>
							<input class="input100" type="password" name="password" id="password" placeholder="*************">
							<span class="focus-input100"></span>
						</div>

						<div class="wrap-input100 validate-input" data-validate = "لطفا پاسورد تان را تکرار کنید">
							<span class="label-input100">تکرار گذرواژه / پاسورد</span>
							<input class="input100" type="password" name="password_confirmation" placeholder="*************">
							<span class="focus-input100"></span>
						</div>
						<input type="hidden" name="address" value=" ">
						<input type="hidden" name="phone_number" value=" ">


						<div class="wrap-input100 validate-input" data-validate = "Pleas Select Your Acount Type">
							<span class="label-input100">نوعیت کاربری</span> <br>
							<input class="" type="radio" name="isAdmin"  id="isAdmin" value="1" checked>
							<span class="label-input100">آرایشگاه</span> &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;
							<input  type="radio"   name="isAdmin" id="isAdmin" value="2" >
							<span class="label-input100">فروشگاه</span> &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;
							<input  type="radio"   name="isAdmin" id="isAdmin" value="3" >
							<span class="label-input100">کاربر عادی</span>
						</div>



					<div class="container-login100-form-btn btn" style="margin-right: 140px">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" type="submit">
								راجستر
							</button>
						</div>
					</div>
				</form>
				<!--Sign Up End  -->
			</div>
		</div>
	</div>
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/mainRegister.js"></script>
</body>
</html>
