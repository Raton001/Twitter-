@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-between">
            <div class="row ">
                @if (auth()->check())
                   @include('sidebar')
                   @endif  
                      <div class="col  col-lg-6">
                            <form method="post" action="{{route('newTweet')}}">
                                    @csrf
                                <div class="form-group">
                                    <textarea class="form-control" rows="5"  name="body" placeholder="What's up?" required></textarea>
                                    <hr class="my-2">
                                    <footer class="d-flex justify-content-between">
                                    <img src="https://i.pravatar.cc/40?u={{Auth()->user()->email}}" alt="your avatar" class="rounded-circle">
                                        <button type="submit" class="btn btn-primary text-white">
                                            Publish-Tweet
                                        </button>
                                    </footer>
                                </div>
                            </form>
                                <hr>
                                @foreach ($tweets as $tweet)
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
