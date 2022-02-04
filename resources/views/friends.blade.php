<div class="col" style="text-align: center;">
 <h3 class="font-bold text-xl  mb-4" style="text-align: center;">Followings</h3>
        @foreach (Auth()->user()->follows as $user)
              <ul class="mb-3">
                <div class="d-flex items-center text-sm">
                   <a href="{{route('profile', $user)}}"><img src="https://i.pravatar.cc/40?u={{$user->email}}" alt="" class="rounded-circle mx-2"></a>
                  <a href="{{route('profile', $user)}}"> {{$user->name}}</a>
                </div>
            </ul>
        @endforeach
 </div>