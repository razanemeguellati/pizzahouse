@extends('layouts.layout')
 <!-- but we need to define this as section bch y3rf win yhtha fel layout -->
  @section('content')
 <div class="flex-center position-ref full-height bg-black-500">
            <div class="content">
                <div class="title m-b-md">
                    Pizza List
                </div>
                <p> {{$type}} - {{$base}} - {{$price}}</p>
             
                <div class='dumb'>
                   <p> directives</p>
                @if( $price > 10)
                <p> this pizza is expensive</p>
                @endif

                @if($price < 2)
                <p> hi</p>
                @elseif ($price > 20)
                <p> coconut </p>
                @else
                <p> pizza cute</p>
                @endif

                @php
                    $name= 'rosie' ; 
                    echo($name); 
                @endphp
                </div >
            </div>
        </div>
@endsection
 