<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\State;
use App\Models\Country;

class StateController extends Controller
{
    public function showState()
    {
        // foreach ($country as $post) {
        //     echo ($post->id);
        // }
        // dd($country[0]->id);
        $country = Country::get();
        $state = State::get();

        return view('state')->with(['countries' =>  $country, 'state' => $state]);
    }
    public function store(Request $request)
    {
        // dd($request->all());
        $add_state = new State();
        $add_state->country_id = $request->country;
        $add_state->state_name = $request->add_state;
        $add_state->save();
        return redirect()->back()->with('message', 'added succesfully');
    }
}
