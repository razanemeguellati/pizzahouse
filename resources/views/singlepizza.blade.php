@extends('layouts.layout')

@section('content')
     <div class="wrapper">
        <h1> Order for {{$pizza->name }} </h1>
    <p class="type">
        type : {{$pizza->type}}
        <br>
        base: {{$pizza->base}}
        <br>
        <p class="toppings">
            Extra toppings : 
        </p>
        <ul>
            @foreach($pizza->toppings as $topping)
            <li> {{ $topping}}</li>
            @endforeach
        </ul>
    </p>
    <form action="/pizzas/{{ $pizza->id }}"
    method="POST">
    
        @csrf <!-- we nedd csrf each time we have-->
        @method('DELETE')
     <button> Cancel order </button>
     <input type="hidden" name="_token" value="{{ csrf_token() }}" />
   
    </form>
    
    <a href="/pizzas"> Go back </a>

    </div>
  @endsection