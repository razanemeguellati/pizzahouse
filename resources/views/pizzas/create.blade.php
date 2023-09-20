@extends('layouts.layout')
@section('content')
    <div class="wrapper create-pizza">
        <h1> Create a new pizza</h1>
        <form action="/pizzas" method="POST">
         
        @csrf

        <label for="name">Your name </label>
        <input type="text" id="name" name="name">

<label for="type">Choose pizza type :</label>
        <select name="type" id="type">
            <option value="margarita"> Margarita</option>
            <option value="hawaiin"> Hawaiin</option>
            <option value="veg supreme"> Veg supreme </option>
            <option value="Volcano">Volcano</option>
        </select>


        <label for="base">Choose base type :</label>
        <select name="base" id="base">
            <option value="cheesy crust"> cheesy crust </option>
            <option value="garlic Crust"> Garlic Crust</option>
            <option value="thin and crispy"> Thin and crispy </option>
            <option value="thick">Thick</option>
        </select>

       
       
        <label for="price">Price </label>
        <input type="number" id="price" name="price">

        <fieldset>
            <label for="">Extra toppings:</label>
        <input type="checkbox" name="toppings[]" value="mushrooms">Mushrooms <br>
        <input type="checkbox" name="toppings[]" value="peppers">Peppers <br>
        <input type="checkbox" name="toppings[]" value="garlic">Garlic <br>
        <input type="checkbox" name="toppings[]" value="olives">Olives
        
       </fieldset>

        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <input type="submit" value="Order pizza">


        </form>
    </div>
  @endsection