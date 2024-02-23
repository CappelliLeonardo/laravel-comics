@php
    $links = [
        [
            'url' => '/',
            'label' => 'Characters',

        ],
        [
            'url' => '/comics',
            'label' => 'Comics',

        ],
        [
            'url' => '/movie',
            'label' => 'Movie',

        ],
        [
            'url' => '/tv',
            'label' => 'TV',

        ],
        [
            'url' => '/games',
            'label' => 'Games',

        ],
        [
            'url' => '/collectibles',
            'label' => 'Collectibles',

        ],
        [
            'url' => '/videos',
            'label' => 'Videos',

        ],
        [
            'url' => '/fans',
            'label' => 'Fans',

        ],
        [
            'url' => '/news',
            'label' => 'News',

        ],
        [
            'url' => '/shop',
            'label' => 'Shop',

        ]
 ];
@endphp

{{-- <header>
    <div class="container-fluid ">
        <div class="upper-colored-nav"></div>
        <div class="container">
            <div>
                <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="">
            </div>
            <nav>
                <ul class="d-flex justify-content-between text-uppercase ">
                    @foreach ($links as $link)
                        <li>
                            <a href="{{ $link['url'] }}">
                                {{ $link['label'] }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </nav>
        </div>
       
    </div>
    
</header> --}}

<header>
    <div class="container-fluid g-0 ">
        <div class="upper-colored-nav"></div>
        <div class="container">
            <nav class="navbar navbar-expand">
                <a class="navbar-brand" href="/"><img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt=""></a>
                  <div class="navbar-nav text-uppercase">
                    @foreach ($links as $link)
                    <a class="nav-link" href="#">
                      {{ $link["label"] }}
                      <div class="after-div" tabindex="0"></div>
                    </a>
                    @endforeach
                  </div>
                  <form class="form-inline d-flex ">
                      <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                      <button class="btn" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                  </form>
            </nav>
        </div>
    </div>
    <div class="container-fluid g-0 ">
        <div class="jumbotron">
        </div>
    </div>
  
    
</header>
