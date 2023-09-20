@extends('layouts.layout')
@section('content')
      <div class="flex-center position-ref full-height bg-black-500">
         
        <div class="content">
            <img src="/img/pizza-house.png" alt="">
             <div class="title m-b-md">
                The North's best pizzas
             </div>
             <p> {{session('mssg')}} </p>
             <a href="/pizzas/create"> Order a pizza</a>
       </div>

      </div>
  @endsection