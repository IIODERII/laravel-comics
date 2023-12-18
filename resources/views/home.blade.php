@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <main>
        <div class="row">
            @foreach ($comics as $comic)
                <div class="col-3">
                    <img src="{{ $comic['thumb'] }}" alt="" class="w-100">
                    {{ $comic['title'] }}
                </div>
            @endforeach
        </div>
    </main>
@endsection
