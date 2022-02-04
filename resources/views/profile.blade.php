@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-between">
            <div class="row ">
                @if (auth()->check())
                   @include('sidebar')
                @endif  
                <div class="col  col-lg-6">
                     <header >
                       <img
                            src="/images/default-profile-banner.jpg"
                            alt=""
                            class="rounded-full mb-4"
                            style="width:550px; left: calc(50% - 75px); top: 138px"
                        >
                    <div class="d-flex justify-content-between items-center mb-4">
                        <div>
                            <h6 class="fw-bold text-2xl mb-0">{{ $user->name }}</h6>
                            <p class="text-sm">Joined {{ $user->created_at->diffForHumans() }}</p>
                        </div>

                        <div class="d-flex">
                            <a href="" class="bg-success rounded shadow border border-gray py-2 px-4 text-black text-xs mb-3">Edit Profile</a>

                            <form method="post" action="{{route('followMe',$user->name)}}">
                            @csrf  
                                <button type="submit" class="bg-dark rounded shadow py-2 px-4 text-white text-xs mb-3">
                                {{auth()->user()->following($user) ? 'Unfollow me' : 'Follow Me'}}</button>
                            </form>
                        </div>
                    </div>

                    <img
                        src="https://i.pravatar.cc/50?u={{$user->email}}"
                        alt=""
                        class="rounded-circle position-absolute"
                        style="width:60px; left: calc(50% - 55px); top: 270px"
                    >

                     <p class="text-sm">
                        This is bio. I am simple
                    </p>

                     </header>
                       @foreach ($user->tweets as $tweet)
                          @include('tweets')
                        @endforeach
                </div>
               @if (auth()->check())
                    @include('friends')  
               @endif
                    
            </div>
        </div>
</div>
@endsection
