<!-- Sidebar -->
<div class="site-overlay"></div>
<div class="site-sidebar <?php if (Auth::user()->isAdmin == '1' || Auth::user()->isAdmin == '2' || Auth::user()->isAdmin == '3'): ?>
    <?php echo 'hide' ?>
  <?php endif ?>" style="background-color: #373944">
  <div class="custom-scroll custom-scroll-light">
    <ul class="sidebar-menu">
      <li class="menu-title">مینو ها</li>

      <li class="with-sub">
        <a href="/home" class="waves-effect  waves-light">
          <span class="s-icon"><i class="fa  fa-home"></i></span>
          <span class="s-text">داشبورد</span>
        </a>
      </li>

      <li class="with-sub">
        <a href="{{route('beautySalonList')}}" class="waves-effect  waves-light">
          <span class="s-icon"><i class="fa  fa-shopping-bag"></i></span>
          <span class="s-text">آرایشگاه ها</span>
        </a>
      </li>

      <li class="with-sub">
        <a href="{{route('storeList')}}" class="waves-effect  waves-light">
          <span class="s-icon"><i class="fa fa-cart-arrow-down"></i></span>
          <span class="s-text">فروشگاه ها</span>
        </a>
      </li>

      <li class="with-sub">
        <a href="{{route('normalUserList')}}" class="waves-effect  waves-light">
          <span class="s-icon"><i class="fa fa-user"></i></span>
          <span class="s-text">کابران عادی</span>
        </a>
      </li>

      <li class="with-sub">
        <a href="{{route('productGeneralList')}}" class="waves-effect  waves-light">
          <span class="s-icon"><i class="fa  fa-viadeo"></i></span>
          <span class="s-text">محصولات</span>
        </a>
      </li>

      <li class="with-sub">
        <a href="#" class="waves-effect  waves-light">
          <span class="s-caret"><i class="fa fa-angle-down"></i></span>
          <span class="s-icon"><i class="fa fa-users"></i></span>
          <span class="s-text">کاربران</span>
        </a>
        <ul>
          <li><a href="{{route('userList')}}">لیست کاربران</a></li>
          <li><a href="{{ route('blockList') }}">کاربران بلاک شده</a></li>
        </ul>
      </li>

      <li class="with-sub">
        <a href="#" class="waves-effect  waves-light">
          <span class="s-caret"><i class="fa fa-angle-down"></i></span>
          <span class="s-icon"><i class="fa fa-bullhorn"></i></span>
          <span class="s-text">تبلیغات</span>
        </a>
        <ul>
          <li><a href="{{route('addAdv')}}">افزودن</a></li>
          <li><a href="{{route('blockAdv')}}">تبلیغات جدید</a></li>
          <li><a href="{{ route('unBlockAdv') }}">تائید شده</a></li>
        </ul>
      </li>

    </ul>
  </div>
</div>
<!-- Aside End -->


<div class="site-sidebar <?php if (Auth::user()->isAdmin == '0'): ?>
    <?php echo 'hide' ?>
  <?php endif ?>" style="background-color: #d9dee6">
  <div class="custom-scroll custom-scroll-light">
    <ul class="sidebar-menu">
      <center><li class="menu-title" style="font-size: 20px; color: black">ثبت آگاهی</li></center>
      <center><li class="menu-title" style="font-size: 15px; color: black">اعلانات شما در اینجا!</li></center>
      <center><li class="menu-title" style="font-size: 10px; color: red">فقط فایل های تصویری</li></center>
      <li class="with-sub">
        <a href="" class="waves-effect  waves-light">
          <!-- <span class="s-icon"><i class="fa  fa-user-md"></i></span> -->
          <span class="s-text">
          <form method="post" action="{{ route('addAdvertisement') }}" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="file" name="image" accept="image/*" id="input-file-now" class="dropify" required/>
            <input type="hidden" name="status" value="0">
            <br>
            <input type="submit"  class="btn btn-rounded bg-flickr form-control" value="ذخیره">
          </form>
        </span> <br>
        <!-- ُSuccess Flash Message -->
          @if($successAdv = session('successAdv'))
          <div class="alert alert-success alert-dismissible fade in" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
              <div>{{$successAdv}}</div>
          </div>
          @endif
        </a>
      </li>
    </ul>
  </div>
</div>
