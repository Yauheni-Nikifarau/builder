@extends('common')

@section('title') Create Phone @endsection

@section('content')


    <div class="container">

        <h1>New Phone</h1>


        {!! Form::open(['method' => 'post']) !!}

        <div class="input-group mb-3">
            <span class="input-group-text">Name:</span>
            <input type="text" class="form-control" name="name">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">Price:</span>
            <input type="number" class="form-control" name="price">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">Memory:</span>
            <input type="number" class="form-control" name="memory">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">Ram:</span>
            <input type="number" class="form-control" name="ram">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">Screen:</span>
            <input type="number" class="form-control" name="screen">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">Camera:</span>
            <input type="number" class="form-control" name="camera">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">Cores:</span>
            <input type="number" class="form-control" name="cores">
        </div>
        <button type="submit" class="btn btn-primary">Create</button>

        {!! Form::close() !!}

    </div>


@endsection
