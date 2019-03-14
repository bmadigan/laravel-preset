@extends('layouts.app')

@section('body')
    <div class="min-h-screen text-center">
        <h1 class="text-5xl text-indigo-dark mt-12">Greetings.</h1>
        <div class="mt-8 mb-12">
            @include('svg.logo', ['class' => 'fill-current', 'style' => 'width:12rem'])
        </div>
        <div class="mt-12 text-center text-grey-dark">
            <h3>Welcome to the Dizzytree Laravel Preset.</h3>
            <p>The preset has created a <strong>views/layouts</strong> folder</p>
        </div>
    </div>
@endsection
