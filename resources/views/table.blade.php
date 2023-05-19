@extends('layout.app')
@section('title', 'City form')
@section('content')
    <div class="container">
        <h2 class="text-center mt-4"> Records list</h2>
        <table class="table  table-hover table-bordered mt-4">
            <thead class="thead-dark fw-bold">
                <tr>
                    <th> country</th>
                    <th> state</th>
                    <th> city</th>
                </tr>
            </thead>


            <tbody>
                @foreach ($countries as $country)
                    <tr>
                        <td>{{ $country->name }}</td>
                        <td>{{ $country->states }}</td>
                        <td>{{ $country->state_name }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
