<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/** Route classe :: methode get 
 * it takes 2 arguments : first one is the route of the request 
 * second one is te function that does nothing but return the view 
 * view are kept in the ressources folder 
 */
Route::get('/', function () {
    return view('welcome');
});

/** this is called a route handler , and it handles requests 
 */

 /*Route::get('/pizzas' , function() {
    return view('pizzas') ; 
 }); 


 /**  we dont have to always return views we can just return strings */
 Route::get('/string' , function() {
    //return 'pizzas'; 
    /* now in here if we inspect networks we'll find that it returned text/html even tho its plain text  */
     return [ 'name' => ' veg pizza ' , 'base' => 'classic'] ; 
    /** here we're returning an array but laravel is gonna convert to to jason so the content type will be application/json  */
}); 

/** to pass variables into views */
Route::get('/learning', function()
   {/** an array of key value  */
    /** tkhyli we're getting data from data base here w rah npassiwha  */

/* return view('pizzas' , ['type' => 'hawaiin' , 'base' => 'cheesy crost ']) ; */
$pizza = [
 'type'=> 'hawaiin' , 
 'base' => 'cheesy crost ' , 
 'price' => 15 /* this is an int not a string */
] ; 
/** we can access them in the browser individually */
 return view('learning' , $pizza) ;
}); 


Route::get('/learn', function()
{ $pizzas= 
    [ [   'type'=> 'hawaiin' , 
           'base' => 'cheesy crost ' , 
           'price' => 15 
      ], 

       ['type'=> 'veg' , 
        'base' => 'crusty' , 
        'price' => 15 
       ], 
       [   'type'=> 'volcano' , 
            'base' => 'garlic ' , 
            'price' => 15 
       ] , 
    ]; 
    return view('learn',['pizzas'=>$pizzas]) ; 
}); 


Route::get('/pizzass', function()
{ $name=request('name') ; 
    //this request function gets a query string and stores its value in the name variable 

    // there are 2 way to do it 
   return view('pizzass', ['name'=>$name , 'age'=>$age=request('age')]) ; 
}); 


Route::get('/pizzass/{id}', function($id)
{// use the $id to query db for a record
 return view('details' , ['id' =>$id]) ; 
}); 


// Real deal: Routes with controllers 
Route::get('/pizzas','App\Http\Controllers\PizzaController@index'); 
Route::get('/pizzas/create' , 'App\Http\Controllers\PizzaController@create'); 
Route::get('/pizzas/{id}','App\Http\Controllers\PizzaController@show');
Route::post('/pizzas' , 'App\Http\Controllers\PizzaController@store' ); 
Route::delete('/pizzas/{id}' , 'App\Http\Controllers\PizzaController@destroy'); 
