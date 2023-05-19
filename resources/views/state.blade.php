@extends('layout.app')
@section('title', 'State form')

@section('content')
    <div class="container">

        @if (session()->has('message'))
            <div class="alert alert-success mt-4">
                {{ session()->get('message') }}
            </div>
        @endif
        <div>
            {{ Form::open(['route' => 'addstate', 'method' => 'POST']) }}

            <h3 class="text-center mt-4 form-signin-heading">Please Add State</h3>

            <div class="container">
                <select id="country-dd" name="country" class="form-control">
                    <option value="">Select Country</option>
                    @foreach ($countries as $country)
                        <option value="{{ $country->id }}">
                            {{ $country->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group mt-2">
                {!! Form::text('add_state', null, ['placeholder' => 'Add state', 'class' => 'form-control mt-2']) !!}
            </div>
            <div class="form-group mt-2">
                {{ Form::submit('Submit', ['class' => 'btn btn-sm btn-primary btn-block']) }}
            </div>
            {{ Form::close() }}

        </div>
        <div class="container">
            <h1 class="mb-4 mt-4 text-center">List Of States</h1>
            <table class="table  table-hover table-bordered">
                <thead class="thead-dark fw-bold">
                    <tr>
                        <th>Id</th>
                        <th>State Name</th>
                        {{-- <th>Action</th> --}}
                    </tr>
                </thead>
                <tbody id="tablebody">
                    @foreach ($state as $state)
                        <tr>
                            <td>{{ $state->id }}</td>
                            <td>{{ $state->state_name }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
