<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza ; 


class PizzaController extends Controller
{
//we can define functions for pizza routes
public function index() 
{  $pizzas= Pizza::all() ; 

////////////////////////////////////////////////
/**        FILTER            */
///////////////////////////////////////////////

 /** all method is inherited from model class a
   * and it will fetch data from pizzas table  
   */
   //$pizzas= Pizza::orderBy('name' ,'desc')->get() ; 
  // $pizzas= Pizza::where('type', 'hawaiin' )->get() ; 
    return view('pizzas' , ['pizzas'=> $pizzas]) ; 
}


public function show($id)
{
  $pizza = Pizza::findOrFail($id) ; 
  return view('singlepizza',['pizza'=> $pizza ]) ; 
}


public function create()
{
  return view('pizzas.create') ; 
}

public function store()
{    
  //error_log( request('name') ) ; 
  //error_log( request('type') ) ; 
  //error_log( request('base') ) ; 
  //error_log(request('toppings[0]')) ; 

  $pizza =  new Pizza() ; 

  $pizza->name = request('name') ; 
  $pizza->type = request('type') ; 
  $pizza->base = request('base') ; 
  $pizza->price = request('price') ; 
  /** to get a json we do that in model */
  $pizza->toppings = request('toppings') ; 

  /** it saves it to the db  */
   $pizza->save() ; 

  //return(request('toppings') ) ; 
  return redirect('/')->with('mssg' , 'Thanks for your order') ;
}


public function destroy($id)
{
  $pizza = Pizza::findOrFail($id) ; 
  $pizza->delete() ; 
  return redirect('/pizzas') ; 
}

}