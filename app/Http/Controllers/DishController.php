<?php

namespace App\Http\Controllers;

use App\Models\Dish;
use App\Models\Restaurant;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DishController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $restaurant_id = Auth::user()->restaurant->id;
      $dishes = Dish::where('restaurant_id', $restaurant_id)->get();
  
      return view('admin.dishes.index')->with('dishes', $dishes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {  
       return view('admin.dishes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $this->validation($request->all());
        $restaurant_id = Auth::user()->restaurant->id;
        $dish = new Dish();
        $dish->fill($data);
        $dish->restaurant_id = $restaurant_id;
        $dish->save();

        return to_route('dishes.index')
            ->with('message_type', 'alert-success') // TODO aggiungere le classi nei form
            ->with('message_content', 'Piatto aggiunto correttamente'); // TODO aggiungere le classi nei form
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dish  $dish
     * @return \Illuminate\Http\Response
     */
    public function show(Dish $dish)
    {
      // $restaurant_id = Auth::user()->restaurant->id;
      // $dishes = Dish::where('restaurant_id', $restaurant_id)->get();
      if(Auth::user()->restaurant->id == $dish->restaurant_id)
      return view('admin.dishes.show', compact('dish'));
      else
      die("non sei autorizzato a visualizzare questo piatto");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dish  $dish
     * @return \Illuminate\Http\Response
     */
    public function edit(Dish $dish)
    {
      // dd(Auth::user()->restaurant->id);
      if(Auth::user()->restaurant->id == $dish->restaurant_id)
      return view('admin.dishes.edit', compact('dish'));
      else
      die("non sei autorizzato a modificare questo piatto");
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dish  $dish
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dish $dish)
    {
        $data = $this->validation($request->all());
        $dish->update($data);
        
        return redirect()->route('dishes.index')->with('message_type', 'alert-success') // TODO aggiungere le classi nei form
            ->with('message_content', 'Piatto modificato correttamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dish  $dish
     * @return \Illuminate\Http\Response
     */
     public function destroy(Dish $dish)
    {   
        if(Auth::user()->restaurant->id == $dish->restaurant_id) {

          $dish->delete();
          return redirect()->route('dishes.index');
        }
        else
          die("non sei autorizzato a cancellare questo piatto");
    }
    
    private function validation($data) {
     $validator = Validator::make(
        $data,
        [
          'name' =>'required|string',
          'description' =>'required|string',
          'price' =>'required|numeric|min:0',
          'picture' =>'nullable|image|mimes: jpg, png, jpeg',
          'visible' =>'boolean',
        ],
        [
          'name.required' => 'Il nome del piatto è obbligatorio',
          'name.string' => 'Il nome del piatto deve essere una stringa',

          'description.string' => 'La descrizione del piatto deve essere una stringa',
          'description.required' => 'La descrizione del piatto è obbligatoria',

          'price.required' => 'Il prezzo del piatto è obbligatorio',
          'price.numeric' => 'Il prezzo del piatto deve essere un numero',
          'price.min' => 'Il prezzo del piatto deve essere un numero maggiore di 0',

          'picture.image' => 'Il file caricato deve essere un immagine',
          'picture.mimes' => 'le estenzioni dei file accettate sono: jpg, png, jpeg.',
          
          'visible.boolean' => 'Il valore deve essere un booleano',
        ]
        )->validate();
        return $validator;
    }
}