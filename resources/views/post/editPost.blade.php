@extends('layouts.master')
@section('content')
<!-- Content -->
  <div class="content-area py-1">
    <div class="container-fluid">
      <nav class="navbar navbar-light bg-white b-a mb-2">
        <center><h3>ویرایش رکورد</h3></center>
        <form action = "/updatePost/<?php echo $post[0]->id; ?>" method = "post" enctype="multipart/form-data" >
          <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
          <input type="hidden" name="user_id" value="<?php echo $post[0]->user_id; ?>">
          <div class="row form-group">
					 <div class="col-md-12">
						 <label  style="color: black">عنوان پست</label><br>
						   <input type="text" name="title" value="<?php echo $post[0]->title; ?>" class="form-control b-a" placeholder="عنوان پست">
					 </div>
				 </div>
         <div class="row form-group">
          <div class="col-md-12">
            <label  style="color: black">متن</label><br>
               <textarea name="content" rows="5" class="col-md-12" placeholder="تفصیل..."><?php echo $post[0]->content; ?></textarea>
          </div>
        </div>
        <div class="row form-group">
          <div class="col-md-12">
            <label  style="color: black">تصویر</label>
            <input type="hidden" name="image" value="<?php echo $post[0]->image; ?>">
            <input type="file" name="image" id="input-file-now-custom-1" class="dropify" data-default-file="/UploadedImages/posts/<?php echo $post[0]->image; ?>" />
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
