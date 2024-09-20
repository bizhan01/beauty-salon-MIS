@extends('layouts.master')
@section('content')
<!-- Content -->
<div class="content-area py-1">
  <div class="container-fluid">
    <div class="row row-md mb-1">
      <div class="col-md-8">
        <div style="margin-bottom: -50px">
          <ul class="  nav nav-tabs" role="tablist" style="background-color: #d9dee6; padding: 5px">
            <li class="nav-item">
              <a class="nav-link active" data-toggle="tab" href="#tab-1" role="tab">پست</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#tab-2" role="tab">آرایشگاه</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#tab-3" role="tab">فروشگاه</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#tab-4" role="tab">محصولات</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#tab-4" role="tab"></a>
            </li>


          </ul>
          <div class="tab-content ">
            <div class="tab-pane active" id="tab-1" role="tabpanel">
              @include('post.addPost');
            </div>
            <div class="tab-pane" id="tab-2" role="tabpanel">
              @include('search.beautySalonSearch');
            </div>
            <div class="tab-pane" id="tab-3" role="tabpanel">
              @include('search.shopSearch');
            </div>
            <div class="tab-pane" id="tab-4" role="tabpanel">
              @include('search.productSearch');
            </div>
          </div>
        </div>
        <!-- @include('people.people'); -->
        @include('post.posts');
      </div>
      <div class="col-md-4">
        @include('advertisement.advertisements');
      </div>
    </div>
  </div>
</div>
@endsection
