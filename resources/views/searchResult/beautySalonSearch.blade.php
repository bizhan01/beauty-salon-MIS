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
  </form>
</div>
