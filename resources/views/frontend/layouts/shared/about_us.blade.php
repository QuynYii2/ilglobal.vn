<div class="row gy-4">
    <div class="col-lg-6 position-relative align-self-start order-lg-last order-first">
        @if($configs)
            <img src="{{asset($configs->avatar)}}" class="img-fluid" alt="">
        @endif
    </div>
    <div class="col-lg-6 content order-last order-lg-first">
        <h3>{{ __('home.About Us') }}</h3>
        <p>
            @if($configs)
                @if(app()->getLocale() == 'vi')
                    {{$configs->short_introduction_vi}}
                @else
                    {{$configs->short_introduction_en}}
                @endif
            @endif
        </p>
    </div>
</div>
