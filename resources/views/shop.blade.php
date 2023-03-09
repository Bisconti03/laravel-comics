@extends('layouts.app')

@section('page_title')

Shop
    
@endsection


@section('content')
    <div class="bg-secondary">
        <div class="container py-5">
            <div class="row">
                @foreach ($comics as $comic)
                <div class="col" >
                    <div class="card h-100 bg-transparent border-0" style="width: 18rem; ">
                        <img src="{{ $comic['thumb'] }}" class="card-img-top h-100" alt="...">
                        <div class="card-body">
                          <h5 class="card-title text-white">{{ $comic['title'] }}</h5>
                          <p class="card-text">{{ $comic['series'] }}</p>
                          <p class="card-text fw-bold">{{ $comic['price'] }}</p>
                          <a href="#" class="btn btn-primary">Acquista</a>
                        </div>
                      </div>
                </div>
                @endforeach
                
            </div>
        </div>
    </div>
    
    
@endsection