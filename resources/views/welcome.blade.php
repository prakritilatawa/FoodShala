  
       @extends('layouts.layout')

@section('content')
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
            <img src="/img/2.jpg" alt="foodshala">
                <div class="title m-b-md">
                   <b> FoodShala! </b>
                </div>
                <p class="msg">{{session('msg')}}</p>
                <a href="/menu/create">Place your order now!</a>
            </div>
        </div>
        @endsection
    