@extends('layout')

@section('title' , 'Home')


@section('content')
    <ul>
        @forelse($home as $homeItem)
            <li class="text">{{ $homeItem->description }}</li>
        @empty
            <li>No hay elementos para mostrar</li>
        @endforelse
    </ul>

@endsection
