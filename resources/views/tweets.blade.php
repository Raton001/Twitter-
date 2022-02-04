
  <div class=" border border-blue rounded px-8 py-8" style="width:530px;">
        <div class="d-inline">
            <a href="{{route('profile', $tweet->user)}}"><img src="https://i.pravatar.cc/35?u={{$tweet->user->email}}" alt="" class="rounded-circle mb-3 mt-2 mx-2"></a>
            <div class="d-inline  fw-bold fs-5"> 
              <a href="{{route('profile', $tweet->user)}}"> {{$tweet->user->name}} </a>
            </div> 
        </div>  
        
         <div class="mx-4"> 
            <p class="text-sm" >{{$tweet->body}}</p>
        </div> 
        
      @error('body')
           <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
     @enderror               
 </div> 
