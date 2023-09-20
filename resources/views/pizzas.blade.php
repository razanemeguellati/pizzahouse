@extends('layouts.layout')
@section('content')
      <div class="flex-center position-ref full-height bg-black-500">
         
        <div class="content">
                <div class="title m-b-md">
                Pizza Orders : 
                </div>

 
                <div class="bigdiv">
        @foreach ($pizzas as $pizza)
            <div class="pizza-item">
                
            <img src="/img/pizza.png" alt="">
            <h3> 
                <a href="/pizzas/{{$pizza->id}}"> 
                    Order for : {{$pizza->name}} -
                </a> 
            </h3>
            </div>
        
       @endforeach
     </div>
                
       

       </div>

      </div>
@endsection