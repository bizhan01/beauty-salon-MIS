@extends('layouts.master')
@section('content')
<!-- Content -->
  <div class="content-area py-1">
    <div class="container-fluid">
      <nav class="navbar navbar-light bg-white b-a mb-2">
        <center><h3>ویرایش رکورد</h3></center>
        <form action = "/updateProduct/<?php echo $product[0]->id; ?>" method = "post" enctype="multipart/form-data" >
          <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
          <input type="hidden" name="user_id" value="<?php echo $product[0]->user_id; ?>">
          <div class="row form-group">
					 <div class="col-md-6">
						 <label  style="color: black">اسم محصول</label><br>
						   <input type="text" name="productName" value="<?php echo $product[0]->productName; ?>" class="form-control b-a" placeholder="لطفا فعالیت های عمده تان را در حداکثر 10 کلمه بیان نماید" required>
					 </div>
           <div class="col-md-6">
						 <label  style="color: black">کد محصول</label><br>
						   <input type="text" name="productCode" value="<?php echo $product[0]->productCode; ?>" class="form-control b-a" placeholder="لطفا فعالیت های عمده تان را در حداکثر 10 کلمه بیان نماید" required>
					 </div>
				 </div>
         <div class="row form-group">
          <div class="col-md-6">
            <label  style="color: black">کمپنی سازنده</label><br>
              <input type="text" name="company" value="<?php echo $product[0]->company; ?>" class="form-control b-a" placeholder="لطفا فعالیت های عمده تان را در حداکثر 10 کلمه بیان نماید" required>
          </div>
          <div class="col-md-6">
            <label  style="color: black">قیمت</label><br>
              <input type="text" name="price" value="<?php echo $product[0]->price; ?>" class="form-control b-a" placeholder="لطفا فعالیت های عمده تان را در حداکثر 10 کلمه بیان نماید" required>
          </div>
        </div>
        <div class="row form-group">
          <div class="col-md-12">
            <label  style="color: black">تصویر</label>
            <input type="hidden" name="image" value="<?php echo $product[0]->image; ?>">
            <input type="file" name="image" id="input-file-now-custom-1" class="dropify" data-default-file="/UploadedImages/products/<?php echo $product[0]->image; ?>" />
          </div>
        </div>

				 <div class="row form-group">
					 <div class="col-md-6">
						 <input type="submit" name="submit" value="ذخیره" class="btn btn-success ">
						 <input type="reset"  value="لغو" class="btn btn-warning ">
					 </div>
				</div>
			 @include('layouts.errors')
        </form>
      </nav>
    </div>
  </div>
@endsection
