@extends('layouts.layout')
@section('content')
      <div class="flex-center position-ref full-height bg-black-500">
         
        <div class="content">
                <div class="title m-b-md">
                    Pizza List
                </div>

                <div class='dumb'>
            <p> loops </p>
                    @for($i = 0 ; $i< 3 ; $i++ )
                    <p> value of i is = {{$i}}</p>
                    @endfor
             </div>

            <p> for loop : </p>
                @for($i = 0 ; $i < count($pizzas) ; $i++ )
                <p>{{ $pizzas[$i]['type']   }} </p>
                @endfor

               
            <p> foreach loop : </p>
                <!-- yparcouri pizzas w refers to each element as $pizza -->
            @foreach($pizzas as $pizza)
              <div>
               {{$loop->index}}: {{$pizza['type']}} -  {{ $pizza['base']}} 
               @if($loop->first)
               <span> "first pizza"</span>
               @endif

               @if($loop->last)
               <span> "last pizza"</span>
               @endif
                </div>
           @endforeach
                  

       </div>

      </div>
  @endsection