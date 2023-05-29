<?php

namespace App\Http\Controllers;

use App\Models\Dish;
use App\Models\Restaurant;
use App\Models\User;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;

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
    $dishes = Dish::where('restaurant_id', $restaurant_id)->where('visible', true)->orderBy("name", "ASC")->get();
    foreach ($dishes as $dish) {
      $dish->picture = $dish->getPictureUri();
    }
    return view('admin.dishes.index', compact('dishes'));
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
    if (Arr::exists($data, 'picture')) { //$data = array mentre 'picture' = chiave che stai cercando
      $img_path = public_path() . '/uploads/dishes/';
      // dd($img_path);
      // exit;
      $imageName = time() . '.' . $request->picture->extension();
      File::ensureDirectoryExists($img_path);
      $path = $request->picture->move(public_path('/uploads/dishes'), $imageName);
      // File::isDirectory($img_path) or File::makeDirectory($img_path, 0777, true, true);
      // $path = Storage::disk('public/uploads/dishes')->put('example.txt', 'Contents');
      // $path = Storage::put('/public/uploads/dishes', $data['picture']); //Metti in public/storage/uploads/restaurants l' immagine che riceviamo
      $data['picture'] = "http://127.0.0.1:8000/uploads/dishes/$imageName"; //METODO 2, nella chiave 'picture' mettici il $path che hai appena salvato alla riga sopra
    } else $data['picture'] = null;

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
    if (Auth::user()->restaurant->id == $dish->restaurant_id)
      return view('admin.dishes.show', compact('dish'));
    else
      return view('admin.error403');
    // die("non sei autorizzato a visualizzare questo piatto");
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
    if (Auth::user()->restaurant->id == $dish->restaurant_id)
      return view('admin.dishes.edit', compact('dish'));
    else
      return view('admin.error403');
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

    if (Arr::exists($data, 'picture')) {
      if ($dish->picture) Storage::delete($dish->picture);
      $path = Storage::put('uploads/dishes', $data['picture']);
      $data['picture'] = $path;
    }
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
    if (Auth::user()->restaurant->id == $dish->restaurant_id) {
      if ($dish->picture) Storage::delete($dish->picture);
      $dish->delete();
      return redirect()->route('dishes.index');
    } else
      return view('admin.error403');
  }

  private function validation($data)
  {
    $validator = Validator::make(
      $data,
      [
        'name' => 'required|string',
        'description' => 'required|string',
        'price' => 'required|numeric|min:0',
        'picture' => 'nullable|image|mimes:jpg,png,jpeg',
        'visible' => 'boolean',
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
