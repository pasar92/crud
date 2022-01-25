<?php

namespace App\Http\Controllers;

use App\Models\car;
use Illuminate\Http\Request;

class CarController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    return view('car.index', ['cars' => Car::all()]);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create(Car $car)
  {
    return view('car.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    $request->validate([
      'license_plate' => 'required',
      'brand' => 'required',
      'model' => 'required',
      'description' => 'required',
      'price' => 'required|numeric'
    ]);
    Car::create($request->all());

    return redirect()->route('car.index')
      ->with('success', 'Car created successfully!');
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\car  $car
   * @return \Illuminate\Http\Response
   */
  public function show(car $car)
  {
    return view('car.show', compact('car'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\car  $car
   * @return \Illuminate\Http\Response
   */
  public function edit(car $car)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\car  $car
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, car $car)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\car  $car
   * @return \Illuminate\Http\Response
   */
  public function destroy(car $car)
  {
    //
  }
}
