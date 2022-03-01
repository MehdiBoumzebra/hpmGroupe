<section class="carousel-container banner-carousel">
    <div id="carouselExampleIndicators" class="carousel carousel-banner slide carousel-fade" data-ride="carousel">
        <div class="container">
            <ol class="carousel-indicators">
                @if(!in_array(trans('header.nos_metries_sub_1') , [ 'empty' , 'Empty' ] ))
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                @endif
                @if(!in_array(trans('header.nos_metries_sub_2') , [ 'empty' , 'Empty' ] ))
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                @endif
                @if(!in_array(trans('header.nos_metries_sub_3') , [ 'empty' , 'Empty' ] ))
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                @endif
            </ol>
        </div>

        <div class="carousel-inner">
            @if(!in_array(trans('header.nos_metries_sub_1') , [ 'empty' , 'Empty' ] ))
            <div class="carousel-item active item1">
                <div class="container">
                    <div class="carousel-content">
                        <h3 class="banner-subtitle">Horizon Project Management</h3>
                        <h1 class="banner-title">{{ trans('header.nos_metries_sub_1') }}</h1>
                        <a class="banner-btn" href="{{ route('metiers',[app()->getLocale(), '#metier-section-1']) }}">{{ __('extra.lire_suite') }} &nbsp;<i
                                class="fas fa-long-arrow-alt-right"></i></a>
                    </div>
                </div>
            </div>
            @endif
            @if(!in_array(trans('header.nos_metries_sub_2') , [ 'empty' , 'Empty' ] ))
            <div class="carousel-item item2">
                <div class="container">
                    <div class="carousel-content">
                        <h3 class="banner-subtitle">Horizon Project Management</h3>
                        <h1 class="banner-title">{{ trans('header.nos_metries_sub_2') }}</h1>
                        <a class="banner-btn" href="{{ route('metiers',[app()->getLocale(), '#metier-section-2']) }}">{{ __('extra.lire_suite') }} &nbsp;<i
                                class="fas fa-long-arrow-alt-right"></i></a>
                    </div>
                </div>
            </div>
            @endif
            @if(!in_array(trans('header.nos_metries_sub_3') , [ 'empty' , 'Empty' ] ))
            <div class="carousel-item item3">
                <div class="container">
                    <div class="carousel-content">
                        <h3 class="banner-subtitle">Horizon Project Management</h3>
                        <h1 class="banner-title">{{ trans('header.nos_metries_sub_3') }}</h1>
                        <a class="banner-btn" href="{{ route('metiers',[app()->getLocale(), '#metier-section-3']) }}">{{ __('extra.lire_suite') }} &nbsp;<i
                                class="fas fa-long-arrow-alt-right"></i></a>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>

    <div class="hpm-logo">
        <img src="{{asset('asset/img/hpm-logo.jpg')}}">
    </div>
</section>
