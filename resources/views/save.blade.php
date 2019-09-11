@extends('layout')

@section('content')
    <div class="container">

        {{ Form::model($model, ['route' => [ request()->route()->getName(), $model->id]]) }}
            @foreach ($model->getProperties() as $property => $value)
                <div class="form-group">
                    {{ Form::label($property ,$property) }}
                    {{ Form::text($property ,null, ['class'=> ['form-control', ($errors->has($property) ? 'is-invalid' : '')]]) }}
                    @if ($errors->has($property))
                        <div class="invalid-feedback">
                            {{ $errors->first($property) }}
                        </div>
                    @endif
                </div>
            @endforeach


            {{ Form::submit('Sacuvaj',['class' => 'btn btn-info add-new']) }}
        {!! Form::close() !!}


    </div>

@endsection
