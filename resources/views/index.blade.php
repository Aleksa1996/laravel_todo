@extends('layout')

@section('title')
    App | {{ $table['name'] }}
@endsection

@section('content')
    <div class="container">
        @include('components.table',['table'=>$table])
    </div>
@endsection
