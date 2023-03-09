<header >
    <div class="bg-primary">
        <div class="container">
            <div class="row d-flex justify-content-end ">
                <div class="col-2 ">
                    <a class="text-white" href="">DC POWER VISA</a>
                    
                </div>
                <div class="col-2 ">
                    <a class="text-white" href="">ADDITIONA DC SITE</a>
                    
                </div>
            </div>
    
        </div>
    </div>


    <div class="bg-white">
        <div class="container py-2">
            <div class="row d-flex flex-row align-items-center">
                <div class="col">
                    <a href="{{ route('home') }}">
                        <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="">
                    </a>
                   
                </div>

                <div class="col">
                    <ul class="d-flex flex-row justify-content-between list-unstyled">
                        <li><a href="#">CHARACTERS</a></li>
                        <li><a href="{{ route('home') }}">COMICS</a></li>
                        <li><a href="#">MOVIES</a></li>
                        <li><a href="#">TV</a></li>
                        <li><a href="#">GAMES</a></li>
                        <li><a href="#">COLLECTIBLES</a></li>
                        <li><a href="#">VIDEOS</a></li>
                        <li><a href="#">FANS</a></li>
                        <li><a href="#">NEWS</a></li>
                        <li><a href="{{ route('shop') }}">SHOP</a></li>
                    </ul>

                </div>

                <div class="col ">
                    <div class="input-group ">
                        <div class="form-outline">
                          <input type="search" id="form1" class="form-control" placeholder="Search" />
                          <label class="form-label" for="form1"></label>
                        </div>
                        
                      </div>
                </div>

            </div>
        </div>

    </div>

    <div class="jumbo">
        <div class="current-series">
            CURRENT SERIES
        </div>
    </div>
    
</header>