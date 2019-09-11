@extends('layout')

@section('title')
    App | {{ $table['name'] }}
@endsection

@section('content')
    <div class="container">
        @if (session()->has('message'))
            {{ session()->get('message') }}
        @endif

        @include('components.table',['table'=>$table])
    </div>
@endsection
