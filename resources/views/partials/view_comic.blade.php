@php
    $prev = $index - 1;
    $next = $index + 1;
@endphp

@extends('layouts.app')

@section('title', 'ViewComic')

@section('content')
    <main class="py-5" id="view_comic">
        <div class="container">
            <div class="d-flex justify-content-evenly align-items-start">
                <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}" class="h-100">
                <div class="px-4">
                    <h1>{{ $comic['title'] }}</h1>
                    <p>{{ $comic['description'] }}</p>
                </div>
            </div>
            <div class="d-flex justify-content-between pt-5">
                @if ($prev >= 0)
                    <a href="{{ route('view_comic', $prev) }}">
                        <i class="fa-solid fa-arrow-left"></i> Previews</a>
                @endif
                @if ($next < count($comics))
                    <a href="{{ route('view_comic', $next) }}">Next <i class="fa-solid fa-arrow-right"></i></a>
                @endif
            </div>
        </div>
    </main>
@endsection
