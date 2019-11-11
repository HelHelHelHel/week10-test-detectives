@extends('layouts/layout')

@section('content')
<h1>The detectives list</h1>
@foreach($detectives as $detective)
        <div>
            <h2>{{ $detective->name }}</h2>
            
            
        </div>
    @endforeach
@endsection