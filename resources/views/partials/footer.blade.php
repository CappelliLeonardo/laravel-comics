@php
    $linksFooter =[
        'DC COMICS'=>[
            'Characters',
            'Comics',
            'Movie',
            'TV',
            'Games',
            'Videos',
            'News'
        ],
        'DC'=>[
            'Terms Of Use',
            'Privacy policy(New)',
            'Ad Choices',
            'Advertising',
            'Jobs',
            'Subscriptions',
            'Talent Workshops',
            'CPSC Certificates',
            'Ratings',
            'Shop Help',
            'Contact Us'
        ],
        'SITES'=>[
            'DC',
            'MAD Magazine',
            'DC Universe',
            'DC Power Visa'
        ],
        'SHOP'=>[
            'Shop DC',
            'Shop DC collectibles'
        ]
    ];
@endphp    

<footer>
    <footer>
        <div class="container-fluid footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-5 d-flex flex-wrap">
                        @foreach ($linksFooter as $key => $title)
                                <ul>
                                    <li class="title">
                                        {{ $key }}
                                    </li>
            
                                    @foreach ($title as $data)
                                        <li class="link-list">{{ $data }}</li>
                                    @endforeach
                                </ul>
                        @endforeach
                    </div>
                    <div class="col-5 offset-2">
                        <img src="{{ Vite::asset('resources/img/dc-logo-bg.png') }}" alt="dc-logo">
                    </div>    
                </div>
            </div>
        </div>
        
        
    </footer>
</footer>
