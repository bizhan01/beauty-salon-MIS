@extends('layouts.master')
@section('content')
<!-- Content -->
	<div class="content-area py-1">
		<div class="container-fluid">
			<div class="col-lg-12 box box-block bg-white">
				<div class="alert alert-success-fill alert-dismissible fade in" role="alert">
					<center><br>
					<form action = "/updatedAdvertisement/<?php echo $advertisement[0]->id; ?>" method ="post" enctype="multipart/form-data" >
						<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
						<input type="hidden" name="user_id" value="<?php echo $advertisement[0]->user_id; ?>">
						<input type="hidden" name="image" value="<?php echo $advertisement[0]->image; ?>">
						<input type="hidden" name="status" value="1">
						<strong>آیا مطمین استید مورد فوق تائید شود؟</strong><br></br>
						<input type="submit" name="submit" value="تائید نشر" class="btn btn-rounded btn-info">
					</form>
					@include('layouts.errors')
				</center>
				</div>
      </div>
   </div>
</div>
@endsection
