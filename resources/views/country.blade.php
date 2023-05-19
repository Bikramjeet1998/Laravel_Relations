@extends('layout.app')
@section('title', 'Country form')

@section('content')
    <div>
        <nav class="navbar .navbar-inverse">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand fs-3" href="#">BikramApp</a>
                </div>
                <ul class="nav navbar-inline mx-auto">
                    <a class="navbar-brand mx-5 fs-3" href="#">Home</a>
                    <a class="active navbar-brand mx-5 fs-3" href="{{ url('/showCountry') }}">Add Country</a>
                    <a class="active navbar-brand  mx-5 fs-3" href="{{ url('/showState') }}">Add State</a>
                    <a class="active navbar-brand mx-5 fs-3" href="{{ url('/showCity') }}">Add City</a>
                </ul>
            </div>
        </nav>
    </div>



    <div class="container">

        @if (session()->has('message'))
            <div class="alert alert-success mt-4">
                {{ session()->get('message') }}
            </div>
        @endif

        <div>
            {{ Form::open(['route' => 'addcountry', 'method' => 'POST']) }}

            <h3 class="text-center mt-4 form-signin-heading">Please Add Country</h3>

            <div class="form-group mt-2">
                {!! Form::text('add_Country', null, ['placeholder' => 'Add country', 'class' => 'form-control mt-2']) !!}
            </div>
            <div class="form-group mt-2">
                {{ Form::submit('Submit', ['class' => 'btn btn-sm btn-primary btn-block']) }}
            </div>
            {{ Form::close() }}

        </div>
        <div class="container">
            <h1 class="mb-4 mt-4 text-center">List Of Countries</h1>
            <table class="table  table-hover table-bordered">
                <thead class="thead-dark fw-bold">
                    <tr>
                        <th>Id</th>
                        <th>Country Name</th>
                        {{-- <th>Action</th> --}}
                    </tr>
                </thead>
                <tbody id="tablebody">
                    @foreach ($countries as $country)
                        <tr>
                            <td>{{ $country->id }}</td>
                            <td>{{ $country->name }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="container">
            <div class="form-group mb-3">
                <select id="country-dd" class="form-control">
                    <option value="">Select Country</option>
                    @foreach ($countries as $data)
                        <option value="{{ $data->id }}">
                            {{ $data->name }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>
    @endsection
