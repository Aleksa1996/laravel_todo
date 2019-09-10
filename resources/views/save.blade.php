@extends('layout')

@section('content')
    <div class="container">

        {!! Form::open(['url' => route('positions_save')]) !!}
            <div class="form-group">
                {{ Form::label('name','Ime') }}
                {{ Form::text('name',$position->name,['class'=>'form-control']) }}
            </div>

            {{ Form::submit('Sacuvaj',['class' => 'btn btn-info add-new']) }}
        {!! Form::close() !!}


    </div>

@endsection
