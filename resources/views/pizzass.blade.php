@extends('layouts.layout')
@section('content')
      <div class="flex-center position-ref full-height bg-black-500">
         
        <div class="content">
                <div class="title m-b-md">
                  These are two Query string / parameters
                </div>
         <p> {{$name}}  {{$age}}</p>

       </div>

      </div>
  @endsection