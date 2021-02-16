@extends('layouts.main')

@section('title', 'HDC Events')
@section('content')
   
    <h1> Hello,world!</h1>
    <img src="/img/banner.jpg" alt="banner">

    @foreach($events as $event)
        <p>{{ $event->title }} -- {{ $event->description }}</p>
    @endforeach

@endsection