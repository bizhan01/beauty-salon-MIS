<div class="box box-block bg-white" style="margin-top: -35px">
 <form method="POST" action="{{ route('addProduct') }}" enctype="multipart/form-data">
  {{ csrf_field() }}
  <div class="content-area py-1">
    <div class="container-fluid">
      <div class="box box-block bg-white">
        <h5>افزودن محصول</h5>
        <div class="form-material material-primary">
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">اسم محصول</label>
            <div class="col-sm-10">
              <input type="text" name="productName" class="form-control" id="inputEmail3" placeholder="اسم محصول">
            </div>
          </div>
        </div>
        <div class="form-material material-info">
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">کد محصول</label>
            <div class="col-sm-10">
              <input type="text" name="productCode" class="form-control" id="inputEmail3" placeholder="کد ویژه محصول">
            </div>
          </div>
        </div>
        <div class="form-material material-success">
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">ساخت</label>
            <div class="col-sm-10">
              <input type="text" name="company" class="form-control" id="inputEmail3" placeholder="کشور / کمپنی سازنده">
            </div>
          </div>
        </div>
        <div class="form-material material-danger">
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">قیمت</label>
            <div class="col-sm-10">
              <input type="number" min="1"  name="price" class="form-control" id="inputEmail3" placeholder="قیمت فروش به افغانی">
            </div>
          </div>
        </div>
        <div class="form-material material-danger">
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">تصویر محصول</label>
            <div class="col-sm-10">
              <input type="file"  name="image" id="input-file-now" class="dropify" />
            </div>
          </div>
        </div>
        <div class="row form-group">
          <div class="col-md-6">
            <input type="submit" name="submit" value="ذخیره" class="btn btn-rounded bg-flickr ">
            <input type="reset" name="reset" value="لغو" class="btn btn-rounded bg-warning ">
          </div>
       </div>
      </div>
    </div>
  </div>
  @include('layouts.errors')
</form>
</div>
