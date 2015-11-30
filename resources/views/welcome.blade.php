@extends('layouts.app')
@section('content')
    <div class="title">Laravel 5 DevApp</div>

    {!! Form::open() !!}
    <p>
    <div class="form-group">
        {!! Form::label('name', 'Name:') !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>
    </p>
    {!! Form::close() !!}






@endsection
