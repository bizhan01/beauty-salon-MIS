@if(auth()->user()->isAdmin == 0 && auth()->user()->status == 1)
	@include('admin')
@elseif(auth()->user()->isAdmin == 1 && auth()->user()->status == 1)
	@include('beautySalons')
@elseif(auth()->user()->isAdmin == 2 && auth()->user()->status == 1)
	@include('shops')
@elseif(auth()->user()->isAdmin == 3 && auth()->user()->status == 1)
	@include('users')
@else
  @include('blocked')
@endif
