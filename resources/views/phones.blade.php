@extends('common')

@section('title') Phones @endsection

@section('content')


    <div class="container pt-5">
        {!! Form::open(['method' => 'GET']) !!}

        <div class="input-group mb-3">
            <span class="input-group-text">Memory From:</span>
            <input type="number" class="form-control" name="memory_from">
            <span class="input-group-text">Memory To:</span>
            <input type="number" class="form-control" name="memory_to">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">Ram From:</span>
            <input type="number" class="form-control" name="ram_from">
            <span class="input-group-text">Ram To:</span>
            <input type="number" class="form-control" name="ram_to">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">Screen From:</span>
            <input type="number" class="form-control" name="screen_from">
            <span class="input-group-text">Screen To:</span>
            <input type="number" class="form-control" name="screen_to">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">Camera From:</span>
            <input type="number" class="form-control" name="camera_from">
            <span class="input-group-text">Camera To:</span>
            <input type="number" class="form-control" name="camera_to">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">Cores From:</span>
            <input type="number" class="form-control" name="cores_from">
            <span class="input-group-text">Cores To:</span>
            <input type="number" class="form-control" name="cores_to">
        </div>
        <button type="submit" class="btn btn-primary">Search</button>

        {!! Form::close() !!}

        <a href="/create" class="btn btn-primary mt-2">Add New Phone</a>

        <table class="table">
            <thead>
            <tr>
                <th>id</th>
                <th>Name</th>
                <th>Price</th>
                <th>Memory</th>
                <th>Ram</th>
                <th>Camera</th>
                <th>Screen</th>
                <th>Cores</th>
            </tr>
            </thead>
            <tbody>
            @foreach($phones as $phone)
                <tr>
                    <td>{{ $phone['id'] }}</td>
                    <td>{{ $phone['name'] }}</td>
                    <td>{{ $phone['price'] }} $</td>
                    <td>{{ $phone['memory'] }} GB</td>
                    <td>{{ $phone['ram'] }} GB</td>
                    <td>{{ $phone['camera'] }} px</td>
                    <td>{{ $phone['screen'] }}"</td>
                    <td>{{ $phone['cores'] }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>


@endsection
