@extends('layout')

@section('title' , 'Home')


@section('content')
    <ul>
        @forelse($home as $homeItem)
            <li>{{ homeItem->description }}</li>
        @endforelse
    </ul>


@endsection
