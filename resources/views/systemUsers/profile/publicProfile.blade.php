@extends('layouts.master')
@section('content')
<div class="content-area pb-1">
	<div class="profile-header mb-1">
		<div class="profile-header-cover img-cover" style="background-image: url(/img/photos-1/4.jpg);"></div>
		<div class="profile-header-counters clearfix">
		</div>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-4 col-md-3">
				@foreach($users as $user)
				<div class="card profile-card">
					<div class="profile-avatar">
						<img src="{{ asset('UploadedImages').'/'.$user->profileImage }}" alt="">
					</div>
					<div class="card-block">
						<h4 class="mb-0-25">{{$user->name }}</h4>
						<!-- <div class="text-muted mb-1">اسم مکتب</div> -->
					</div>
					<ul class="list-group">
						<a class="list-group-item" href="#">
							<i class="ti-worlds mr-0-5"></i>
							<span>شماره تماس:</span>
							<span>{{$user->phone_number}}</span>
						</a>
					</ul>
					<ul class="list-group">
						<a class="list-group-item" href="#">
							<i class="ti-worlds mr-0-5"></i>
							<span>ایمیل آدرس:</span>
							<span>{{$user->email}}</span>
						</a>
					</ul>
					<ul class="list-group">
						<a class="list-group-item" href="#">
							<i class="ti-worlds mr-0-5"></i>
							<span>آدرس:</span>
							<span>{{$user->address}}</span>
						</a>
					</ul>
				</div>
				@endforeach
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
				<div class="card mb-0">
					<div class="tab-content">
						<!-- Services section Start-->
							<div class="row">
							<div class="col-lg-1"></div><button class="col-lg-10 btn btn-rounded bg-flickr" style="margin: 15px">خدمات</button>
								@foreach($services as $service)
								<div class="col-xs-12 col-sm-12">
									<div class="box box-block mb-1">
										<div class="media">
											<div class="media-left">
												<div class="avatar box-48">
													<img class="b-a-radius-circle" src="{{ asset('UploadedImages').'/'.$service->profileImage }}" alt="">
													<i class="status bg-success bottom right"></i>
												</div>
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
								    <div class="p-img img-cover" style="background-image: url(../UploadedImages/products/{{$product->image}});">
								        <div class="float-xs-right col-lg-3 bg-flickr">{{$product->productCode}}</div>
								      <button type="submit" class="btn btn-rounded bg-flickr btn-block"><a href="details/{{ $product->id }}">توضیحات</a></button>
								    </div>
								    <div class="p-content">
								      <div class="clearfix">
								        <h5 class="float-xs-left"><a class="text-black" href="#">{{$product->productName}}</a></h5>
								        <div class="p-price float-xs-right">{{$product->price}}<span style="color: blue">افغانی</span></div>
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
											<img class="b-a-radius-circle" src="{{ asset('UploadedImages').'/'.$post->profileImage }}" alt="">
										</div>
									</div>
									<div class="media-body">
										<h6 class="media-heading">
											<a class="text-black" href="#">{{$post->name}}</a>
										</h6>
										<span class="font-90 stream-meta">{{$post->created_at}}</span>
										<div class="stream-body">
											<h6>{{$post->title}}</h6>
											<p>{{$post->content}}</p>
											<center><img src="/UploadedImages/posts/{{$post->image}}" alt="" /></center>
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
												<div class="float-xs-left" style="color:green">
													<i class="ti-heart mr-0-5"></i> 105
												</div>
												<div class="float-xs-right">
													<i class="ti-heart mr-0-5"></i> 105
												</div>
											</div>
										</div>
									</div>
									@endforeach
								</div>	<br>
							<!-- Advertisements section End-->

							<!-- Comments section Start-->
								<div class="row">
								<div class="col-lg-1"></div><button class="col-lg-10 btn btn-rounded bg-facebook" style="margin: 15px">نظریه ها و رتبه بندی</button>
								  <div class="col-lg-1"></div>
								  <div class="col-xs-10 col-sm-10" style="margin-right: 20px">
										<form method="POST" action="{{ route('addComment') }}" enctype="multipart/form-data">
										{{ csrf_field() }}
										<div class="row form-group">
											@foreach($users as $user)
												<input type="hidden" name="profile_id" value="{{$user->id}}">
											@endforeach
											<div class="col-md-12">
											<input type="text" name="comment" value=""  class="form-control "  placeholder="کامنت بگزارید...">
											</div>
										</div>
										<div class="row form-group">
											<div class="col-md-12">
												<fieldset class="starability-checkmark" dir="rtl">
		                        <h5>رتبه دهی:</h5>
		                        <input type="radio" id="checkmark-rate5" name="value" value="5" />
		                        <label for="checkmark-rate5" title="Amazing"></label>
		                        <input type="radio" id="checkmark-rate4" name="value" value="4" />
		                        <label for="checkmark-rate4" title="Very good"></label>
		                        <input type="radio" id="checkmark-rate3" name="value" value="3" />
		                        <label for="checkmark-rate3" title="Average"></label>
		                        <input type="radio" id="checkmark-rate2" name="value" value="2" />
		                        <label for="checkmark-rate2" title="Not good"></label>
		                        <input type="radio" id="checkmark-rate1" name="value" value="1" />
		                        <label for="checkmark-rate1" title="Terrible"></label>
		                    </fieldset>
											</div>
										</div>
										<div class="row form-group">
							        <div class="col-md-12">
							          <input type="submit" name="submit" value="ذخیره" class="btn btn-rounded bg-flickr ">
							        </div>
							     </div>
										@include('layouts.errors')
									</form>
								  </div>
									@foreach($comments as $comment)
									<div class="col-xs-12 col-sm-12">
										<div class="box box-block mb-1">
											<div class="media">
												<div class="media-left">
													<div class="avatar box-48">
														<img class="b-a-radius-circle" src="{{ asset('UploadedImages').'/'.$comment->profileImage }}" alt="">
														<i class="status bg-success bottom right"></i>
													</div>
												</div>
												<div class="media-body">
													<h6 class="media-heading mt-0-5"><a class="text-black" href="#">{{$comment->name}}</a></h6>
													<span class="font-90 text-muted">{{$comment->comment}}</span>
													<fieldset class="starability-checkmark" dir="rtl">
														@switch ($comment->value)
														    @case (1)
														        <img src="\img\stars\1.png" alt="" />
														        @break;
															@case (2)
													        <img src="\img\stars\2.png" alt="" />
													        @break;
															@case (3)
													        <img src="\img\stars\3.png" alt="" />
													        @break;
															@case (4)
													        <img src="\img\stars\4.png" alt="" />
													        @break;
															@case (5)
													        <img src="\img\stars\5.png" alt="" />
													        @break;
														    @default:
														@endswitch
													</fieldset>
												</div>
											</div>
										</div>
									</div>
									@endforeach
								</div>
							<!-- Comments section End-->

						</div>
					</div>
				</div>
			</div>
	</div>
</div>
@endsection
