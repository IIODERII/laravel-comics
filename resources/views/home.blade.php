@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <main>
        <div class="row" id="mainTop">

            <div class="jumbo position-relative">
                <div class="container">
                    <button class="btn btn-primary rounded-0">Current series</button>
                </div>
            </div>

            <div class="bg-black">
                <div class="container fs-3 fw-bold py-5">
                    <div class="row align-items-start justify-content-center">
                        @foreach ($comics as $comic)
                            <div class="text-white col-12 col-md-6 col-lg-4 col-xxl-3 py-2">
                                <div class="c-img">
                                    <img src="{{ $comic['thumb'] }}" :alt="title" />
                                </div>
                                <div class="py-2">
                                    <h5>{{ $comic['title'] }}</h5>
                                    <span>{{ $comic['price'] }}</span>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
    </main>
@endsection
