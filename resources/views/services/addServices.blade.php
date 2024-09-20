<div class="box box-block bg-white" style="margin-top: -35px">
    <form method="POST" action="{{ route('addService') }}" enctype="multipart/form-data">
    {{ csrf_field() }}
      <div class="row form-group">
        <div class="col-md-12">
          <label  style="color: black">خدمات</label>
          <input type="text" name="title" max="40" value=""  class="form-control"  placeholder="خدمات" required>
        </div>
      </div>
      <div class="row form-group">
        <div class="col-md-12">
          <label  style="color: black">توضیحات</label><br>
          <textarea name="description" rows="5" class="col-md-12" placeholder="توضیحات..."></textarea>
        </div>
      </div>
      <div class="row form-group">
        <div class="col-md-6">
          <input type="submit" name="submit" value="ذخیره" class="btn btn-rounded bg-flickr ">
        </div>
     </div>
  </form>
</div>
<!-- ُSuccess Flash Message -->
  @if($success = session('success'))
  <div class="alert alert-success alert-dismissible fade in" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
      </button>
      <div>{{$success}}</div>
  </div>
  @endif
