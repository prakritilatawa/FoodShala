@extends('layouts.app')

@section('content')
<div class="wrapper food-details">
  <h1>Order for {{ $menu->name }}</h1>
  <p class="type">Type - {{ $menu->type }}</p>
  <p class="dish">Dish - {{ $menu->dish }}</p>
  <p class="beverages"> Beverages</p>
  <ul>
   @foreach($menu->beverages as $beverages)
    <li>{{ $beverages }}</li>
     @endforeach
  </ul>
  <form action="/menu/{{ $menu->id }}" method="POST">
     @csrf 
     @method('DELETE')
     <button id="submit">Complete Order</button>
   </form>
</div>
<a href="/menu" class="back">-Back to Menu</a>
@endsection