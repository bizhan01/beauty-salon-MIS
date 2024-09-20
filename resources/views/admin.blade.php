@extends('layouts.master')
@section('content')
<div class="content-area py-1">
  <div class="container-fluid">
    <div class="row row-md mb-1">
      <div class="col-md-4">
        <div class="box bg-white user-1">
          <div class="u-img img-cover" style="background-image: url(img/photos-1/4.jpg);"></div>
          <div class="u-content">
            <div class="avatar box-64">
              <img class="b-a-radius-circle shadow-white" src="/UploadedImages/{{Auth::user()->profileImage}}" alt="">
              <i class="status bg-success bottom right"></i>
            </div>
            <h5><a class="text-black" href="#">{{ Auth::user()->name }}</a></h5>
            <p class="text-muted pb-0-5">مدیر سیستم</p>
            <div class="text-xs-center pb-0-5">
              <a href="{{ route('profile') }}"><button type="submit" class="btn btn-success btn-rounded mr-0-5"><i class="ti-user mr-0-5"></i> پروفایل</button></a>
              <a href="{{ route('logout') }}"
                 onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                  <button type="submit" class="btn btn-danger btn-rounded"><i class="ti-power-off mr-0-5"></i> خروج</button></a>
            </div>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
          </div>
          <div class="u-counters">
            <div class="row no-gutter">
              <div class="col-xs-6 uc-item">
                <a class="text-black" href="#">
                  <strong>137</strong>
                  <span>New message</span>
                </a>
              </div>
              <div class="col-xs-6 uc-item">
                <a class="text-black" href="#">
                  <strong>459</strong>
                  <span>Open tickets</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-8">
        <div class="box box-block bg-white">
          <div class="clearfix mb-1">
            <h5 class="float-xs-left">آمار فعالیت</h5>
            <div class="float-xs-right">
              <button class="btn btn-link btn-sm text-muted" type="button"><i class="ti-angle-down"></i></button>
              <button class="btn btn-link btn-sm text-muted" type="button"><i class="ti-reload"></i></button>
              <button class="btn btn-link btn-sm text-muted" type="button"><i class="ti-close"></i></button>
            </div>
          </div>
          <div id="advanced" class="chart-container mb-1" style="height: 295px;"></div>
          <div class="text-xs-center">
            <span class="mx-1"><i class="fa fa-circle text-success"></i> فروشگاه ها</span>
            <span class="mx-1"><i class="fa fa-circle text-warning"></i> محصولات</span>
            <span class="mx-1"><i class="fa fa-circle text-danger"></i> آرایشگاه ها</span>
            <span class="mx-1"><i class="fa fa-circle text-primary"></i> سایر </span>
          </div>
        </div>
      </div>
    </div>


    <div class="row row-md">
      <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
        <div class="box box-block tile tile-2 bg-danger mb-2">
          <div class="t-icon right"><i class="ti-shopping-cart-full"></i></div>
          <div class="t-content">
            <h1 class="mb-1">{{$salonCount}}</h1>
            <h6 class="text-uppercase">آرایشگاه ها</h6>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
        <div class="box box-block tile tile-2 bg-success mb-2">
          <div class="t-icon right"><i class="ti-bar-chart"></i></div>
          <div class="t-content">
            <h1 class="mb-1">{{$storeCount}}</h1>
            <h6 class="text-uppercase">فروشگاه ها</h6>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
        <div class="box box-block tile tile-2 bg-primary mb-2">
          <div class="t-icon right"><i class="ti-package"></i></div>
          <div class="t-content">
            <h1 class="mb-1">{{$productCount}}</h1>
            <h6 class="text-uppercase">محصولات</h6>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
        <div class="box box-block tile tile-2 bg-warning mb-2">
          <div class="t-icon right"><i class="ti-receipt"></i></div>
          <div class="t-content">
            <h1 class="mb-1">{{$userCount}}</h1>
            <h6 class="text-uppercase">کاربران عادی</h6>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
