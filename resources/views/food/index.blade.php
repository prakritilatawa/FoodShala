@extends('layouts.app')

@section('content')
<div class="wrapper index">
    <h1>Your Order</h1>

    @foreach($menu as $m)
        <div class="pizza-item">
            <img src="/img/3.png" alt="order" id="image2">
        <h4><a href="/menu/{{ $m->id}}">{{ $m->name }}</a> </h4>
        </div>
    @endforeach
</div>
 @endsection
