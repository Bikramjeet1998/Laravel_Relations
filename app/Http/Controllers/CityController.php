<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\State;
use App\Models\Country;

use Illuminate\Http\Request;

class CityController extends Controller
{
    public function index()
    {



        // $country = Country::with('states')->get(); //we are getting counties with states and cities
        $country = Country::with('states')->get();

        $stateNames = $country->flatMap(function ($country) {
            return $country->states->pluck('state_name');
        });

        dd($stateNames);

        return view('table')->with(['countries' =>  $country]);


        // $country = Country::get();
        // $state = State::get();
        // $city = City::get();

        // return view('city')->with(['countries' =>  $country, 'state' => $state,  'city' => $city]);
    }
    public function store(Request $request)
    {
        // dd($request->all());
        $addcity = new City();
        $addcity->state_id = $request->state;
        $addcity->city_name = $request->add_city;
        $addcity->save();
        return redirect()->back()->with('message', 'added succesfully');
    }
}
