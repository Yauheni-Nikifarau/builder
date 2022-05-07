@extends('common')

@section('title') Create Phone @endsection

@section('content')


    <div class="container">

        <h1>New Phone</h1>


        {!! Form::open(['method' => 'post']) !!}

        <div class="input-group mb-3">
            <span class="input-group-text">Base Phone:</span>
            <select class="form-select" name="phone_template">
                <option selected>Open this select menu</option>
                <option value="iphone_12">iPhone 12</option>
                <option value="xiaomi_redmi_note_4">Xiaomi Redmi Note 4</option>
                <option value="samsung_15">Samsung 15</option>
            </select>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">Price:</span>
            <input type="number" class="form-control" name="price">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">Memory:</span>
            <input type="number" class="form-control" name="memory">
        </div>

        <button type="submit" class="btn btn-primary">Create</button>

        {!! Form::close() !!}

    </div>


@endsection
