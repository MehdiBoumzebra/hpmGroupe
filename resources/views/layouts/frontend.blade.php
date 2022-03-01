<!DOCTYPE html>
<html dir="ltr" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title> {{ env('APP_NAME') }} | {{ $title ?? 'Home'}}</title>

    @include('partials.frontend.head')
</head>
<!-- END HEAD -->
<!-- BODY -->
<body class="stretched">
    <div class="cssload-loader-container">
        <div class="cssload-loader"><div class="cssload-inner cssload-one"></div><div class="cssload-inner cssload-two"></div><div class="cssload-inner cssload-three"></div></div>
    </div>

    <!-- The page -->
    <div class="page">
        @if( $title == "Home" )
            @include('partials.frontend.header' , [ 'ishome' => true ])
        @else
            @include('partials.frontend.header')
        @endif
        <div class="content">
            <!--========== PAGE LAYOUT ==========-->
            @yield('content')
            <!--========== END PAGE LAYOUT ==========-->
            @include('partials.frontend.footer')
        </div>
    </div>

    <!-- The menu -->
    <nav id="hpm-menu">
        <ul>
            <li><a href="{{ route('groupe', app()->getLocale()) }}"><strong>{{ trans('header.le_groupe') }}</strong></a></li>
            <li><a class="side-submenu" href="{{ route('groupe' , [ app()->getLocale() , '#equipe-section-1' ]) }}">{{ trans('header.le_groupe_sub_1') }}</a></li>
            <li><a class="side-submenu" href="{{ route('groupe' , [ app()->getLocale() , '#equipe-section-2' ]) }}">{{ trans('header.le_groupe_sub_2') }}</a></li>
            <li><a class="side-submenu" href="{{ route('groupe' , [ app()->getLocale() , '#equipe-section-3' ]) }}">{{ trans('header.le_groupe_sub_3') }}</a></li>
            <li><a href="{{ route('metiers', app()->getLocale()) }}"><strong>{{ trans('header.nos_metries') }}</strong></a></li>
            <li><a class="side-submenu" href="{{ route('metiers' , [ app()->getLocale() , '#metier-section-1' ]) }}">{{ trans('header.nos_metries_sub_1') }}</a></li>
            <li><a class="side-submenu" href="{{ route('metiers' , [ app()->getLocale() , '#metier-section-2' ]) }}">{{ trans('header.nos_metries_sub_2') }}</a></li>
            <li><a class="side-submenu" href="{{ route('metiers' , [ app()->getLocale() , '#metier-section-3' ]) }}">{{ trans('header.nos_metries_sub_3') }}</a></li>

            <li>
                <a href="{{ route('references', app()->getLocale()) }}" class="nosreferences"><strong>{{ trans('header.nos_references') }}</strong></a>
            </li>
            <li>
                <a href="{{ route('partenaires', app()->getLocale()) }}"><strong>{{ trans('header.nos_partenaires') }}</strong></a>
            </li>
            <li>
                <a href="{{ route('contact', app()->getLocale()) }}" class="contacts"><strong>{{ trans('header.contact') }}</strong></a>
            </li>
            <li> 
				<a class="nav-link {{ App::getLocale() == 'fr' ? 'lang-active' : '' }}" style="max-width:70px" href="{{ route(\Illuminate\Support\Facades\Route::currentRouteName(),'fr') }}">
				<img src="{{ asset('asset/img/extra/france.svg')}}" class="img-fluid" width="29px" alt="Fr">
				<!--Fr-->
				</a>
				<a class="nav-link {{ App::getLocale() == 'en' ? 'lang-active' : '' }}" style="max-width:70px" href="{{ route(\Illuminate\Support\Facades\Route::currentRouteName(),'en') }}">
				<img src="{{ asset('asset/img/extra/uk.svg')}}" class="img-fluid" width="29px" alt="Fr">
				<!--En-->
				</a>
			</li>
        </ul>
    </nav>
</body>
<!-- END BODY -->
</html>



