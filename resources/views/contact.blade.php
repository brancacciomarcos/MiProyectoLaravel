@extends('layout')

@section('title' , 'Contacto')

@section('content')
    <h1>{{ __('Contact') }}</h1>
    <div class="contact-form">
        <form method="POST" action="{{ route('messages.store') }}">
            @csrf
            <input name="name" placeholder="Nombre..." value="{{ old('name') }}"><br>
            {!! $errors->first('name', '<strong>:message</strong><br>') !!}

            <input type="email" name="email" placeholder="Email..." value="{{ old('email') }}"><br>
            {!! $errors->first('email', '<strong>:message</strong><br>') !!}

            <input name="subject" placeholder="Asunto..." value="{{ old('subject') }}"><br>
            {!! $errors->first('subject', '<strong>:message</strong><br>') !!}

            <textarea name="content" placeholder="Mensaje...">{{ old('content') }}</textarea><br>
            {!! $errors->first('content', '<strong>:message</strong><br>') !!}

            <button class="boton-color-contact">@lang('Send')</button>
        </form>
    </div>
@endsection