@extends('app')

@section('title', 'Hello City')

@section('content')
    
        <h1>Hello from Abidjan!</h1>
        
        <p>It's currently {{date('h:i A')}}.</p>

@endsection