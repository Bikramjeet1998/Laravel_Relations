<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\State;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function index()
    {
        //$country = Country::has('states', '=', 1)->with('states')->get();
        // $country = Country::whereHas('states', function ($query) {
        //     return $query->whereNull('created_at')->has('cities');
        // })->with('states')->get();
        // dd($country);
        // foreach ($country->states as $key => $state) {
        //     dd($state->cities);
        // }
        // $country = Country::doesnthave('states')->get();
        // $country = Country::whereHas('states', function ($query) {
        //     return $query->where('state_name', '=', 'ambala')->doesnthave('cities');
        // })->get();
        // dd($country);
        $country = Country::get();
        return view('country')->with(['countries' =>  $country]);
    }
    public function store(Request $request)
    {
        $add_country = new Country();
        $add_country->name = $request->add_Country;
        $add_country->save();
        return redirect()->back()->with('message', 'added succesfully');
    }
    // public function fetchCountry()
    // {
    //     $data['countries'] = Country::get();

    //     return response()->json($data);
    // }
}













 // $country = Country::get();
        // $countrylist = $country->pluck('name', 'id');
        // $data['countries'] = Country::get(["name", "id"])
        // dd($country->pluck('name', 'id'));
        // dd($country[0]->states[1]->cities);
        // $states = State::find(3);
        // dd($states->country);  //inverse
