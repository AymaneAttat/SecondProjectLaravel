@extends('layouts.app')

@section('content')
<br>
    <h1>Contact</h1>
    {!! Form::open(['url' => 'contact/submit', 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('name', 'Name')}}
            {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Enter name'])}}
        </div>
        <div class="form-group">
            {{Form::label('email', 'E-Mail Address')}}
            {{Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'example@gmail.com'])}}
        </div>
        <div class="form-group">
            {{Form::label('message', 'Message')}}
            {{Form::textarea('message', '', ['class' => 'form-control', 'placeholder' => 'Enter message'])}}
        </div>
        <div class="container">
            <div class="row text-center">
                
                    {{Form::submit('submit', ['class' => 'btn btn-primary btn-lg'])}}
                
            </div>
        </div>    
    {!! Form::close() !!}

@endsection