@extends('layouts.app')

@section('page_title')

Laravel Comics
    
@endsection

 @section('content')
 <div class="main-cards">
    <div class="container py-4">
        <div class="row">
            
    
               @foreach ($comics as $comic)
               <div class="col-2">
    
                    <div class="card " style="width: 15rem  height: 15rem;">
                        <img src="{{ $comic['thumb'] }}" class="card-img-top" alt="...">
                        <h5 class="card-title py-4">{{ $comic['series'] }}</h5>
                    </div>
                </div>
               @endforeach
    
           <div class="text-center">
            <button class="bg-primary fw-bold">
                LOAD MORE
            </button>
           </div>
        </div>
    </div>
 </div>

 <div class="info-cards bg-primary">
    <div class="container py-4">
        <div class="row d-flex justify-content-between">
            <div class="col-2 d-flex align-items-center  ">
                <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" class="w-25" alt="">
                <p>
                    DIGITAL COMICS
                </p>
            </div>
            <div class="col-2 d-flex align-items-center">
                <img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" class="w-25"  alt="">
                <p>
                    DC MERCHANDISE
                </p>
            </div>
            <div class="col-2 d-flex align-items-center">
                <img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" class="w-25" alt="">
                <p>
                    SUBSCRIPTION
                </p>
            </div>
            <div class="col-2 d-flex align-items-center">
                <img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" class="w-25" alt="">
                <p>
                    COMIC SHOP LOCATOR
                </p>
            </div>
            <div class="col-2 d-flex align-items-center">
                <img src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}" class="w-25" alt="">
                <p>
                    DC POWER VISA
                </p>
            </div>
        </div>
    </div>
    

 </div>
 
 @endsection      
            
       

