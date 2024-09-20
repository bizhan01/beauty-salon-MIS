<div class="sidebar-activity animated fadeIn ">
 <form class="card write-something" method="post" action="{{ route('addPost') }}" enctype="multipart/form-data" style="margin-top: -35px">
     {{ csrf_field() }}
   <div class="form-material material-primary">
     <div class="form-group row">
       <div class="col-sm-10" style="margin-right: 20px">
         <input type="text" name="title" class="form-control" id="inputEmail3" placeholder="عنوان پست">
       </div>
     </div>
   </div>
   <textarea name="content" placeholder="به چی فکر میکند؟"></textarea>
   <input type="file"  name="image" accept="image/*"  id="input-file-now" class="dropify" />
   <div class="card-footer">
     <div class="clearfix">
       <div class="float-xs-right">
         <button type="submit" class="btn btn-rounded bg-flickr">پست</button>
       </div>
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
