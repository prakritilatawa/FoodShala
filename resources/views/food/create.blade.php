@extends('layouts.layout')

@section('content')
 <div class="wrapper create-order">
   <h1>Create a new order</h1>
   <form action="/menu " method="POST">
   @csrf
      <label for="name">Your name:</label>
      <input type="text" id="name" name="name">
      <label for="type">Choose your type:</label>
      <select name="type" id="type">
        <option value="vegetarian">Vegetarian</option>
        <option value="non-veg">Non-Vegetarian</option>
      </select>

      <label for="type">Your order:</label>
      <select name="dish" id="dish">
        <option value="fried rice">Fried Rice</option>
        <option value="red sauce pasta">Red sauce pasta</option>
        <!-- <option value="chilly chicken">Chilly chicken</option> -->
        <option value="supreme pizza">Supreme pizza</option>
        <option value="platter">Platter</option>
        <option value="white suace pasta">White sauce pasta</option>
        <option value="sushi">Sushi</option>
        <option value="farmhouse pizza">Farmhouse pizza</option>
        <option value="manchurian">Manchurian</option>
        <option value="hot n sour soup">Hot N Sour Soup</option>

      </select>
      <fieldset>
         <label for="beverages">Beverages</label><br>
         <input type="checkbox" name="beverages[]" value="peach iced tea" id="ck">Peach iced tea <br>
         <input type="checkbox" name="beverages[]" value="lemon iced tea" id="ck">Lemon iced tea <br>
         <input type="checkbox" name="beverages[]" value="virgin mojito" id="ck">Virgin mojito <br>
         <input type="checkbox" name="beverages[]" value="water melon juice" id="ck">Water melon juice <br>

      </fieldset>
      <button type="submit" value="place your order" id="submit">Place your order</button>

   </form>

 </div>
@endsection