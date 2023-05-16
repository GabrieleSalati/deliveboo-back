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
      // todo aggiungere route
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

        $dish = new Dish();        
        $dish->fill($data);
        $dish->save();
        // todo aggiungere route
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dish  $dish
     * @return \Illuminate\Http\Response
     */
    public function edit(Dish $dish)
    {
      
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dish  $dish
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dish $dish)
    {
        //
    }
    private function validation($data) {
     $validator = Validator::make(
        $data,
        [
          'name' =>'required|string',
          'description' =>'nullable|string',
          'price' =>'required|numeric|min:0',
          'picture' =>'nullable|image|mimes: jpg, png, jpeg',
          'visible' =>'boolean',
          'restaurant_id' =>'numeric|required'
        ],
        [
          'name.required' => 'Il nome del piatto è obbligatorio',
          'name.string' => 'Il nome del piatto deve essere una stringa',

          'description.string' => 'La descrizione del piatto deve essere una stringa',

          'price.required' => 'Il prezzo del piatto è obbligatorio',
          'price.numeric' => 'Il prezzo del piatto deve essere un numero',
          'price.min' => 'Il prezzo del piatto deve essere un numero maggiore di 0',

          'restaurant_id.numeric' => 'Il prezzo del piatto deve essere un numero',
          'restaurant_id.required' => 'Il prezzo del piatto è obligatorio',

          'picture.image' => 'Il file caricato deve essere un immagine',
          'picture.mimes' => 'le estenzioni dei file accettate sono: jpg, png, jpeg.',
          
          'visible.boolean' => 'Il valore deve essere un booleano',
        ]
        )->validate();
        return $validator;
    }
}