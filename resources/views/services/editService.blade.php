@extends('layouts.master')
@section('content')
<!-- Content -->
  <div class="content-area py-1">
    <div class="container-fluid">
      <nav class="navbar navbar-light bg-white b-a mb-2">
        <center><h3>ویرایش رکورد</h3></center>
        <form action = "/updateService/<?php echo $service[0]->id; ?>" method = "post" enctype="multipart/form-data" >
          <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
          <input type="hidden" name="user_id" value="<?php echo $service[0]->user_id; ?>">
          <div class="row form-group">
					 <div class="col-md-12">
						 <label  style="color: black">عنوان خدمات</label><br>
						   <input type="text" name="title" value="<?php echo $service[0]->title; ?>" class="form-control b-a" placeholder="عنوان خدمات" required>
					 </div>
				 </div>
         <div class="row form-group">
         <div class="col-md-12">
           <label  style="color: black">تفصیل</label><br>
           <textarea name="description" rows="5" class="col-md-12" placeholder="تفصیل..."><?php echo $service[0]->description; ?></textarea>
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
