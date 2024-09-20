<div class="content-area py-1">
    <div class="box box-block bg-white mb-0">
      <div class="owl-carousel" style=" text-align: right">
         @foreach($users as $user)
         <a href="publicProfile/{{ $user->id }}"><div class="item"><img src="UploadedImages/{{$user->profileImage}}" height="150px"> <span style="text-align: center">{{$user->name}}</span></div></a>
         @endforeach
      </div>
    </div>
</div>
