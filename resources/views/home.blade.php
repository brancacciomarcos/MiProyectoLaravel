<?php
$descriptionHome = \DB::table('table_home')->get();

?>
@extends('layout')

@section('title' , 'Home | ' . $descriptionHome->descripcion)


@section('content')
    <h1>{{ $descriptionItem->description}}</h1>


@endsection
