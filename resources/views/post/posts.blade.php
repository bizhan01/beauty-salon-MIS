@foreach($posts as $post)
<div class="box box-block bg-white">
  <div class="box bg-white post post-1">
    <div class="p-content">
      <a href="#"  aria-expanded="false">
        <span class="avatar box-32">
         <img src="UploadedImages/{{$post->profileImage}}" style="width: 40px; height: 40px;">
        </span>&nbsp;&nbsp;&nbsp;
        {{$post->name}}
      </a> <br></br>
      <h5><a class="text-black" href="#">{{$post->title}}</a></h5>
      <p class="mb-0">{{$post->content}}<a class="text-primary" href="#">
        <span class="underline">بیشتر بخوانید</span></a></p>
    </div>
    <div class="p-img img-cover" style="background-image: url(/UploadedImages/posts/{{$post->image}});">
      <span class="tag tag-danger">Lifestyle</span>
      <div class="p-info clearfix">
        <div class="float-xs-left">
          <span class="small text-uppercase">{{$post->created_at}}</span>
        </div>
        <div class="float-xs-right">
          <span class="mr-1"><i class="fa fa-heart"></i>57</span>
          <span><i class="fa fa-comment"></i>14</span>
        </div>
      </div>
    </div>
  </div>
</div>
@endforeach
