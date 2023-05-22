@extends('layout.app')
@section('title', 'City form')
@section('content')
    <div class="container">
        <h2 class="text-center mt-4"> Records list</h2>
        <table class="table  table-hover table-bordered mt-4">
            <thead class="thead-dark fw-bold">
                <tr>
                    <th> Country</th>
                    <th> State </th>
                    <th> City</th>
                </tr>
            </thead>


            <tbody>

                @foreach ($countries as $country)
                    <tr>
                        <td>{{ $country->name }}</td>
                        <td>
                            @foreach ($country->states as $state)
                                {{ $state->state_name }}
                            @endforeach
                        </td>
                        <td>
                            @foreach ($country->countryCity as $city)
                                {{ $city->city_name }}
                            @endforeach
                        </td>




                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
