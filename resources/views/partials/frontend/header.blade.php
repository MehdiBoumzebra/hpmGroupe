<!-------------------- start header --------------------->
<div class="header-container">
<header class="hpm-navbar {{ isset($ishome) ? 'hpm-navbar-home' : 'navbar-at-top' }}"><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <div class="navbar-top">
        <div class="container">
            <div class="row">
                <div class="col-md-8 text-white pl-md-0 text-uppercase text-topnav">
                    <span class="navtop-shadow">{{ trans('header.navtop_test_1') }}</span>
                    <span class="ml-md-4  d-md-inline d-block">{{ trans('header.navtop_test_2') }}</span>
                </div>

                <div class="icons col-md-4 ml-auto d-none d-sm-block">
                    <ul class="nav float-right">

                        <li class="nav-item"> <a
                            @if (app()->getLocale() == 'fr') style="font-weight: bold; text-decoration: underline" @endif
                            class="nav-link {{ App::getLocale() == 'fr' ? 'lang-active' : '' }}" href="{{ route(\Illuminate\Support\Facades\Route::currentRouteName(),'fr') }}">
                            <img src="{{ asset('asset/img/extra/france.svg')}}" class="img-fluid" width="19px" alt="Fr">
                            <!--Fr-->
                            </a>
                        </li>
                        <li class="nav-item"> <a
                            @if (app()->getLocale() == 'en') style="font-weight: bold; text-decoration: underline" @endif
                            class="nav-link {{ App::getLocale() == 'en' ? 'lang-active' : '' }}" href="{{ route(\Illuminate\Support\Facades\Route::currentRouteName(),'en') }}">
                            <img src="{{ asset('asset/img/extra/uk.svg')}}" class="img-fluid" width="19px" alt="Fr">
                            <!--En-->
                            </a>
                        </li>
                        <li class="nav-item"> <a class="nav-link" href="{{ route('contact', app()->getLocale()) }}"><i class="fas fa-envelope"
                                    id="ic1"></i></a></li>
                        <li class="nav-item"> <a class="nav-link" target=”_blank” href="https://www.facebook.com/HPM-Maroc-Horizon-Project-Management-Maroc-114855735241406/"><i class="fab fa-facebook-f"
                                    id="ic1"></i></a></li>
                        <li class="nav-item"> <a class="nav-link" target=”_blank” href="https://www.linkedin.com/company/horizon-project-management---hpm-maroc"><i class="fab fa-linkedin"
                                    id="ic1"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light text-uppercase">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home' , app()->getLocale() ) }}">
                <img src="{{ asset('asset/img/logo-white.png')}}" class="logo-navbar off-scroll" alt="logo HPM">
                <img src="{{ asset('asset/img/hpm-logo.png')}}" class="logo-navbar on-scroll" alt="logo HPM">
            </a>
            <!--<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"-->
            <!--    aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">-->
            <!--    <i class="fa fa-bars" aria-hidden="true"></i>-->
            <!--</button>-->

            <a class="navbar-toggler" href="#hpm-menu">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </a>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
                <ul class="navbar-nav ml-auto mr-0 mr-md-3">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="dropdownGroup" href="{{ route('groupe', app()->getLocale()) }}" class="lentreprise"><strong>{{ trans('header.le_groupe') }}</strong></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownGroup">
                            <a class="dropdown-item" href="#equipe-section-1">{{ trans('header.le_groupe_sub_1') }}</a>
                            <a class="dropdown-item" href="#equipe-section-2">{{ trans('header.le_groupe_sub_2') }}</a>
                            <a class="dropdown-item" href="#equipe-section-3">{{ trans('header.le_groupe_sub_3') }}</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="dropdownGroup" href="{{ route('metiers', app()->getLocale()) }}" class="lentreprise"><strong>{{ trans('header.nos_metries') }}</strong></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownGroup">
                            @if(!in_array(trans('metiers.nos_metries_sub_1') , [ 'empty' , 'Empty' ] ))
                            <a class="dropdown-item" href="#metier-section-1">{{ trans('header.nos_metries_sub_1') }}</a>
                            @endif
                            @if(!in_array(trans('metiers.nos_metries_sub_2') , [ 'empty' , 'Empty' ] ))
                            <a class="dropdown-item" href="#metier-section-2">{{ trans('header.nos_metries_sub_2') }}</a>
                            @endif
                            @if(!in_array(trans('metiers.nos_metries_sub_3') , [ 'empty' , 'Empty' ] ))
                            <a class="dropdown-item" href="#metier-section-3">{{ trans('header.nos_metries_sub_3') }}</a>
                            @endif
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('references', app()->getLocale()) }}" class="nosreferences"><strong>{{ trans('header.nos_references') }}</strong></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('partenaires', app()->getLocale()) }}"><strong>{{ trans('header.nos_partenaires') }}</strong></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact', app()->getLocale()) }}" class="contacts"><strong>{{ trans('header.contact') }}</strong></a>
                    </li>
                </ul>
            </div>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="{{ route('partenaires', app()->getLocale()) }}">
                        <img src="{{ asset('asset/img/right-logo2.png')}}" class="tr-logo off-scroll" width="120px">
                        <img src="{{ asset('asset/img/bas-logo.png')}}" class="tr-logo on-scroll" width="120px">
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</header>
</div>
