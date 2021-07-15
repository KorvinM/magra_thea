<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Planet;

class PlanetController extends Controller
{

  public function __construct(){
    //protect all Routes
    //$this->middleware('auth');
  }
  public function index(){

    $planets = Planet::all();
    $planetsByName = Planet::orderBy('name', 'desc')->get();
    $planetsRocky = Planet::where('type', 'rocky')->get();
    return view('planets.index',[
	    'planets' => $planets,
	    'planetsByName' => $planetsByName,
	    'planetsRocky' => $planetsRocky,
	    'name' => request('name'),
   	    'age' => request('age')
    ]);

  }
  public function show($id){
    $planet = Planet::findOrFail($id);

    return view ('planets.show',['planet' => $planet]);

  }

  public function create(){
    return view ('planets.create');
  }

  public function store(){
    $planet = new Planet();
    $planet->name=request('name');
    $planet->type=request('type');
    $planet->galaxy=request('galaxy');
    $planet->features= request('features');
    error_log($planet);

    $planet->save();
    return redirect('/')->with('mssg', 'Thank you for your order');
  }

  public function destroy($id){
    $planet = Planet::findOrFail($id);
    $planet -> delete();
    return redirect('/planets')->with('mssg', 'Planet destroyed');
  }

}
