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
              <a class="nav-link active" data-toggle="tab" href="#tab-1" role="tab">عمومی</a>
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
              @include('search.generalSearch');
            </div>
            <div class="tab-pane" id="tab-2" role="tabpanel">
              @include('searchResult.beautySalonSearch');
            </div>
            <div class="tab-pane" id="tab-3" role="tabpanel">
              @include('searchResult.shopSearch');
            </div>
            <div class="tab-pane" id="tab-4" role="tabpanel">
              @include('searchResult.productSearch');
            </div>
          </div>
        </div>

        <div class="box box-block bg-white">
          <div class="box bg-white post post-1">
            <!-- Show Result -->
             <section class="colorlib-skills" data-section="companies" >
              @if(isset($details))
               <table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0" width="100%">
                   <thead>
                     <tr>
                       <th>تصویر</th>
                       <th>اسم</th>
                       <th>کتگوری</th>
                       <th>آدرس</th>
                     </tr>
                   </thead>
                   <tbody>
                     @foreach($details as $user)
                     <tr>
                       <td><a href="publicProfile/{{ $user->id }}"><img src="/UploadedImages/{{$user->profileImage}}" height="40px" width="40px" /></a></td>
                       <td><a href="publicProfile/{{ $user->id }}">{{$user->name}}</a></td>
                       <td>{{$user->address}}</td>
                       <td>
                         @if($user->isAdmin == 1)
                           آرایشگاه
                         @elseif($user->isAdmin == 2)
                           فروشگاه
                         @elseif($user->isAdmin == 3)
                           کاربر عادی
                         @else
                           ادمین
                         @endif
                       </td>
                     </tr>
                     @endforeach
                   </tbody>
               </table>
             @endif

             @if(isset($detailsb ))
              <table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0" width="100%">
                  <thead>
                    <tr>
                      <th>تصویر</th>
                      <th>اسم</th>
                      <th>کتگوری</th>
                      <th>آدرس</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($detailsb  as $user)
                    <tr>
                      <td><a href="publicProfile/{{ $user->id }}"><img src="/UploadedImages/{{$user->profileImage}}" height="40px" width="40px" /></a></td>
                      <td><a href="publicProfile/{{ $user->id }}">{{$user->name}}</a></td>
                      <td>{{$user->address}}</td>
                      <td>
                        @if($user->isAdmin == 1)
                          آرایشگاه
                        @elseif($user->isAdmin == 2)
                          فروشگاه
                        @elseif($user->isAdmin == 3)
                          کاربر عادی
                        @else
                          ادمین
                        @endif
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
              </table>
            @endif

            @if(isset($detailss ))
             <table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0" width="100%">
                 <thead>
                   <tr>
                     <th>تصویر</th>
                     <th>اسم</th>
                     <th>کتگوری</th>
                     <th>آدرس</th>
                   </tr>
                 </thead>
                 <tbody>
                   @foreach($detailss  as $user)
                   <tr>
                     <td><a href="publicProfile/{{ $user->id }}"><img src="/UploadedImages/{{$user->profileImage}}" height="40px" width="40px" /></a></td>
                     <td><a href="publicProfile/{{ $user->id }}">{{$user->name}}</a></td>
                     <td>{{$user->address}}</td>
                     <td>
                       @if($user->isAdmin == 1)
                         آرایشگاه
                       @elseif($user->isAdmin == 2)
                         فروشگاه
                       @elseif($user->isAdmin == 3)
                         کاربر عادی
                       @else
                         ادمین
                       @endif
                     </td>
                   </tr>
                   @endforeach
                 </tbody>
             </table>
           @endif

              @if(isset($detailsp))
                <table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                      <tr>
                        <th>تصویر</th>
                        <th>اسم</th>
                        <th>کد</th>
                        <th>قیمت</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($detailsp as $product)
                      <tr>
                        <td><a href=""><img src="/UploadedImages/products/{{$product->image}}" height="40px" width="40px" /></a></td>
                        <td><a href="">{{$product->productName}}</a></td>
                        <td>{{$product->productCode}}</td>
                        <td>{{$product->price}}</td>
                      </tr>
                      @endforeach
                    </tbody>
                </table>
              @endif
             </section>
            <!-- End -->
          </div>
        </div>
      </div>
      <div class="col-md-4">
        @include('advertisement.advertisements');
      </div>
    </div>
  </div>
</div>
@endsection
