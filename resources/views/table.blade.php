@extends('layout.app')
@section('title', 'City form')
@section('content')
    <div class="container">
        <h2 class="text-center mt-4"> Records list</h2>
        <table class="table  table-hover table-bordered mt-4">
            <thead class="thead-dark fw-bold">
                <tr>
                    <th> City</th>
                    <th> state</th>
                    <th> Country</th>
                </tr>
            </thead>


            <tbody>
                @foreach ($countries as $country)
                    <tr>
                        <td>{{ $country->city_name }}</td>
                        <td>{{ $country->state->state_name }}</td>
                        <td>{{ $country->state->country->name }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
