@extends('layouts.master')
@section('content')
<div class="content-area pb-1">
	<div class="profile-header mb-1">
		<div class="profile-header-cover img-cover" style="background-image: url(img/photos-1/4.jpg);"></div>
		<div class="profile-header-counters clearfix">
		</div>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-4 col-md-3">
				<div class="card profile-card">
					<div class="profile-avatar">
						<img src="{{ asset('UploadedImages').'/'.Auth::user()->profileImage }}" alt="">
					</div>
					<div class="card-block">
						<h4 class="mb-0-25">{{ Auth::user()->name }}</h4>
						<!-- <div class="text-muted mb-1">اسم مکتب</div> -->
					</div>
					<ul class="list-group">
						<a class="list-group-item" href="#">
							<i class="ti-worlds mr-0-5"></i>
							<span>وضیعت:</span>
							<span>
								@if(auth()->user()->status == 1)
									فعال
								@elseif(auth()->user()->status == 0)
									غیرفعال
								@else
									ادمین
								@endif
							</span>
						</a>
					</ul>
					<ul class="list-group">
						<a class="list-group-item" href="#" >
							<i class="ti-worlds mr-0-5"></i>
							<span>شماره تماس:</span>
							<span style="direction: ltr; text-align: left">{{Auth::user()->phone_number}}</span>
						</a>
					</ul>
					<ul class="list-group">
						<a class="list-group-item" href="#">
							<i class="ti-worlds mr-0-5"></i>
							<span>نام کاربری:</span>
							<span>{{Auth::user()->email}}</span>
						</a>
					</ul>
					<ul class="list-group">
						<a class="list-group-item" href="#">
							<i class="ti-worlds mr-0-5"></i>
							<span>آدرس:</span>
							<span>{{Auth::user()->address}}</span>
						</a>
					</ul>
				</div>
				<!-- Who to follow Start-->
				<div class="card">
					<div class="card-header text-uppercase"><b>Who to follow</b></div>
					<div class="items-list">
						<div class="il-item">
							<a class="text-black" href="#">
								<div class="media">
									<div class="media-left">
										<div class="avatar box-48">
											<img class="b-a-radius-circle" src="img/avatars/1.jpg" alt="">
											<i class="status bg-success bottom right"></i>
										</div>
									</div>
									<div class="media-body">
										<h6 class="media-heading">John Doe</h6>
										<span class="text-muted">Software Engineer</span>
									</div>
								</div>
								<div class="il-icon"><i class="fa fa-angle-right"></i></div>
							</a>
						</div>
						<div class="il-item">
							<a class="text-black" href="#">
								<div class="media">
									<div class="media-left">
										<div class="avatar box-48">
											<img class="b-a-radius-circle" src="img/avatars/2.jpg" alt="">
											<i class="status bg-danger bottom right"></i>
										</div>
									</div>
									<div class="media-body">
										<h6 class="media-heading">John Doe</h6>
										<span class="text-muted">Software Engineer</span>
									</div>
								</div>
								<div class="il-icon"><i class="fa fa-angle-right"></i></div>
							</a>
						</div>
						<div class="il-item">
							<a class="text-black" href="#">
								<div class="media">
									<div class="media-left">
										<div class="avatar box-48">
											<img class="b-a-radius-circle" src="img/avatars/3.jpg" alt="">
											<i class="status bg-secondary bottom right"></i>
										</div>
									</div>
									<div class="media-body">
										<h6 class="media-heading">John Doe</h6>
										<span class="text-muted">Software Engineer</span>
									</div>
								</div>
								<div class="il-icon"><i class="fa fa-angle-right"></i></div>
							</a>
						</div>
					</div>
					<div class="card-block">
						<button type="submit" class="btn btn-primary btn-block">Show more</button>
					</div>
				</div>
				<!-- Who to follow End-->
			</div>

			<div class="col-sm-8 col-md-9">
				<div>
  					@include('layouts.errors')
				</div>

				<div class="card mb-0">
					<ul class="nav nav-tabs nav-tabs-2 profile-tabs" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" data-toggle="tab" href="#stream" role="tab">ویرایش اطلاعات</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#photos" role="tab">تغییر عکس</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#change-password" role="tab">تغییر گذرواژه</a>
						</li>
					</ul>
					<div class="tab-content">
						<div class="tab-pane active" id="stream" role="tabpanel">
							<form method="post" action="{{ route('updateNameUser') }}">
								@csrf
								<div class="row">
									<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
									<div class="col-xs-12 col-sm-12 col-md-8 col-lg-6">
										<label for="name">اسم کاربری</label>
										<input type="name" name="name" class="form-control" value="{{Auth::user()->name}}">
									</div>
									<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
								</div>
								<div class="row">
									<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
									<div class="col-xs-12 col-sm-12 col-md-8 col-lg-6">
										<label for="name">شماره تماس</label>
										<input type="text" name="phone_number" placeholder="0799999999" data-mask="0799999999" class="form-control" style="direction: ltr" value="{{Auth::user()->phone_number}}">
									</div>
									<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
								</div>
								<div class="row">
									<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
									<div class="col-xs-12 col-sm-12 col-md-8 col-lg-6">
										<label for="name">آدرس</label>
										<input type="name" name="address" class="form-control" value="{{Auth::user()->address}}">
									</div>
									<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
								</div>
								<div class="row">
									<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
									<div class="col-xs-12 col-sm-12 col-md-8 col-lg-6">
										<label>&nbsp;</label>
										<input type="submit" class="btn btn-success form-control" value="ذخیره">
									</div>
									<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
								</div>
							</form>
						</div>
						<div class="tab-pane card-block" id="photos" role="tabpanel">
							<div class="gallery-2 row">
								<form method="post" action="{{ route('updateUserImage') }}" enctype="multipart/form-data">
									@csrf
									<div class="col-md-3 col-sm-3"></div>
									<div class="col-md-6 col-sm-6 col-xs-12">
										<div class="g-item">
											<div>
                    		<input type="file" name="image" accept="image/*" id="input-file-now" class="dropify" required/>
                    		<input type="submit" class="btn btn-success form-control" value="ذخیره">
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
						<div class="tab-pane card-block" id="change-password" role="tabpanel">
							<form method="post" action="{{ route('updateUserPass') }}">
								@csrf
								<div class="row">
									<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
									<div class="col-xs-12 col-sm-12 col-md-8 col-lg-6">
										<label>گذروارژه قبلی</label>
										<input type="password" name="current-password" class="form-control">
									</div>
									<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
								</div>
								<div class="row">
									<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
									<div class="col-xs-12 col-sm-12 col-md-8 col-lg-6">
										<label>گذرواژه جدید</label>
										<input type="password" name="new-password" class="form-control">
									</div>
									<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
								</div>
								<div class="row">
									<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
									<div class="col-xs-12 col-sm-12 col-md-8 col-lg-6">
										<label>تکرار گذرواژه ی جدید</label>
										<input type="password" name="confirm_password" class="form-control">
									</div>
									<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
								</div>
								<div class="row">
									<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
									<div class="col-xs-12 col-sm-12 col-md-8 col-lg-6">
										<label>&nbsp;</label>
										<input type="submit" class="btn btn-success form-control" value="ذخیره">
									</div>
									<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
								</div>
							</form>
						</div>
					</div>
				</div><br>



				<div class="card mb-0">
					<div class="tab-content">
						<!-- Services section Start-->
							<div class="row">
							<div class="col-lg-1" ></div><button class="col-lg-10 btn btn-rounded bg-flickr" style="margin: 15px">خدمات</button>
								@foreach($services as $service)
								<div class="col-xs-12 col-sm-12">
									<div class="box box-block mb-1">
										<div class="media">
											<div class="media-left">
												<div class="avatar box-48">
													<img class="b-a-radius-circle" src="{{ asset('UploadedImages').'/'.Auth::user()->profileImage }}" alt="">
													<i class="status bg-success bottom right"></i>
												</div><br>
												<a class="fa fa-edit"  href="editService/{{ $service->id }}"></a>
												<a class="fa fa-trash"  href="deleteService/{{ $service->id }}" onclick='return confirm("آیا مطمین استید حذف شود؟")' style="color: red"></a>
											</div>
											<div class="media-body">
												<h6 class="media-heading mt-0-5"><a class="text-black" href="#">{{$service->title}}</a></h6>
												<span class="font-90 text-muted">{{$service->description}}</span>
											</div>
										</div>
									</div>
								</div>
								@endforeach
							</div>
							<!-- Services section End -->

							<!--Product Section Start  -->
							<div class="row row-sm">
								<div class="col-lg-1"></div><button class="col-lg-10 btn btn-rounded bg-twitter" style="margin: 15px">محصولات</button>
								@foreach($products as $product)
								<div class="col-md-4">
								  <div class="box bg-white product product-3">
								    <div class="p-img img-cover" style="background-image: url(UploadedImages/products/{{$product->image}});">
								        <div class="float-xs-right col-lg-3 bg-flickr">{{$product->productCode}}</div>
								      <button type="submit" class="btn btn-rounded bg-flickr btn-block"><a href="details/{{ $product->id }}">توضیحات</a></button>
								    </div>
								    <div class="p-content">
								      <div class="clearfix">
								        <h5 class="float-xs-left"><a class="text-black" href="#">{{$product->productName}}</a></h5>
								        <div class="p-price float-xs-right">{{$product->price}}<span style="color: blue">افغانی</span></div>
								      </div>
								      <div class="p-info">
								        <h5 class="float-xs-left"><a class="fa fa-edit"  href="editProduct/{{ $product->id }}"></a></h5>
								        <div class="p-price float-xs-right">
								            <h5 class="float-xs-left"><a class="fa fa-trash"  href="deleteProduct/{{ $product->id }}" onclick='return confirm("آیا مطمین استید حذف شود؟")' style="color: red"></a></h5>
								        </div>
								      </div>
								    </div>
								  </div>
								</div>
								@endforeach
							  	<button class="col-lg-10 btn btn-rounded bg-pinterest" style="margin: 15px; margin-right: 77px">نوشته ها</button>
								</div>

							<!-- Product Section End  -->


						<!-- Posts Section Start -->

							@foreach($posts as $post)
								<div class="media stream-item">
									<div class="media-left">
										<div class="avatar box-64">
											<img class="b-a-radius-circle" src="{{ asset('UploadedImages').'/'.Auth::user()->profileImage }}" alt="">
										</div> <br>
										<a class="fa fa-edit"  href="editPost/{{ $post->id }}"></a>
										<a class="fa fa-trash"  href="deletePost/{{ $post->id }}" onclick='return confirm("آیا مطمین استید حذف شود؟")' style="color: red"></a>
									</div>
									<div class="media-body">
										<h6 class="media-heading">
											<a class="text-black" href="#">{{Auth::user()->name}}</a>
										</h6>
										<span class="font-90 stream-meta">{{$post->created_at}}</span>
										<div class="stream-body">
											<h6>{{$post->title}}</h6>
											<p>{{$post->content}}</p>
											<center><img src="UploadedImages/posts/{{$post->image}}" alt="" /></center>
										</div>
									</div>
								</div><hr>
							@endforeach
						<!-- Posts Section End -->

							<!-- Advertisements section Start-->
								<div class="gallery-2 row">
									<div class="col-lg-1"></div><button class="col-lg-10 btn btn-rounded bg-dropbox" style="margin: 15px">آگاهی های تجارتی</button>
									@foreach($advertisements as $adv)
									<div class="col-md-4 col-sm-6 col-xs-6">
										<div class="g-item">
											<a href="/UploadedImages/adv/{{$adv->image}}">
												<img src="/UploadedImages/adv/{{$adv->image}}" alt="" width="100%" height="250px">
											</a>
											<div class="g-item-overlay clearfix" style="color:yellow">
												<i class="ti-heart mr-0-5"></i> 105 &nbsp &nbsp
												<div class="float-xs-left" style="color:green">
													<i class="ti-heart mr-0-5"></i> 105
												</div>
												<div class="float-xs-right">
												 <a href="deleteAdvertisement/{{ $adv->id }}" onclick='return confirm("آیا مطمین استید حذف شود؟")'><i class="ti-trash mr-0-5" style="color:red"></i></a>
												</div>
											</div>
										</div>
									</div>
									@endforeach
								</div>	<br>
							<!-- Advertisements section End-->
						</div>
					</div>
				</div>
			</div>
	</div>
</div>
@endsection
