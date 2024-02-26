@extends('layouts.app')

@section('page-title', 'Home')

@section('main-content')
    <main>
        <div class="bg-box">
            <div class=" container  d-flex flex-wrap ">
                @foreach ($comics as $comic)
                    <div class="card m-2 " style="width: 12rem;">
                        <img src="{{ $comic['thumb'] }}" class="card-img-top" alt="">
                        <div class="card-body">
                            <p class="card-text">{{ $comic['series'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </main>
@endsection
