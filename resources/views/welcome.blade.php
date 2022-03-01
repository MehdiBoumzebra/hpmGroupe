<!DOCTYPE html>
<html dir="ltr" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>{{ __('home.title') }} </title>
	<meta name="description" content="{{ __('home.seo_description') }}" />

	@include('partials.frontend.head')
</head>

<body class="stretched">
    <div class="cssload-loader-container">
        <div class="cssload-loader"><div class="cssload-inner cssload-one"></div><div class="cssload-inner cssload-two"></div><div class="cssload-inner cssload-three"></div></div>
    </div>

    <!-- The page -->
    <div class="page">
        <!--========== HEADER ==========-->
        @include('partials.frontend.header' , [ 'ishome' => true ])
        <!--========== END HEADER ==========-->
        <div class="content">
            @include('partials.frontend.slide-home')
            <!--========== PAGE LAYOUT ==========-->
            <section id="lentreprise" class="about-area">
        		<div class="presentation container">
        			<div class="row justify-content-center">
        				<div class="main-pres col-md-9 col-sm-12">
        					<p class="lead">
        						<strong>Horizon Project Management</strong> est une société d’ingénierie en conseil, études
        						techniques et management de projets de construction, dans le domaine du bâtiment et des travaux
        						publics.
        					</p>
        				</div>
        			</div>
        		</div>
        	</section>
            @include('partials.frontend.references')

            <section id="nosmetiers">
        		<div class="container-fluid">
        			<div class="row">
        				<div class="col-md-3 p-0">

        					<img src="{{ asset('asset/img/div1.jpg')}}" height="100%" style="object-fit: cover;">
        					<div class="description">
        						<div>
        							<img src="{{ asset('asset/img/icon1.png')}}">
        						</div>
        						<div>
        							<h5><a class="text-reset stretched-link" href="{{ route('metiers', [ app()->getLocale() , '#metier-section-1'] ) }}">{{ trans('header.nos_metries_sub_1') }}</a></h5>
        						</div>
        					</div>


        				</div>
        				<div class="col-md-3 p-0 ">

        					<img src="{{ asset('asset/img/div2.jpg')}}" height="100%" style="object-fit: cover;">
        					<div class="description">
        						<div>
        							<img src="{{ asset('asset/img/icon3.png')}}">
        						</div>
        						<div>
        							<h5><a class="text-reset stretched-link" href="{{ route('metiers', [ app()->getLocale() , '#metier-section-2'] ) }}">{{ trans('header.nos_metries_sub_2') }}</a></h5>
        						</div>
        					</div>

        				</div>
        				<div class="col-md-3 p-0">

        					<img src="{{ asset('asset/img/div3.jpg')}}" height="100%" style="object-fit: cover;">

        					<div class="description">
        						<div>
        							<img src="{{ asset('asset/img/icon2.png')}}">
        						</div>
        						<div>
        							<h5><a class="text-reset stretched-link" href="{{ route('metiers', [ app()->getLocale() , '#metier-section-3'] ) }}">{{ trans('header.nos_metries_sub_3') }}</a></h5>
        						</div>
        					</div>
        				</div>
        				<div class="col-md-3 p-0">
        					<img src="{{ asset('asset/img/div4.jpg')}}" height="100%" style="object-fit: cover;">
        					<div class="description">
        						<div>
        							<img src="{{ asset('asset/img/icon4.png')}}">
        						</div>
        						<div>
        							<h5><a class="text-reset stretched-link" href="{{ route('groupe', [ app()->getLocale() , '#equipe-section-3'] ) }}">{{ trans('header.le_groupe_sub_3') }}</a></h5>
        						</div>
        					</div>
        				</div>
        			</div>
        		</div>
        	</section>

            <!--========== END PAGE LAYOUT ==========-->
            <!--========== FOOTER ==========-->
            @include('partials.frontend.cards')
            @include('partials.frontend.footer')
        </div>
    </div>

    <!-- The menu -->
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
	{{-- <nav id="hpm-menu">
        <ul>
            <li><a href="{{ route('groupe', app()->getLocale()) }}"><strong>{{ trans('header.le_groupe') }}</strong></a></li>
            <li><a class="side-submenu" href="{{ route('groupe' , [ app()->getLocale() , '#equipe-section-1' ]) }}">{{ trans('header.le_groupe_sub_1') }}</a></li>
            <li><a class="side-submenu" href="{{ route('groupe' , [ app()->getLocale() , '#equipe-section-2' ]) }}">{{ trans('header.le_groupe_sub_2') }}</a></li>
            <li><a class="side-submenu" href="{{ route('groupe' , [ app()->getLocale() , '#equipe-section-3' ]) }}">{{ trans('header.le_groupe_sub_3') }}</a></li>
            <li><a href="{{ route('metiers', app()->getLocale()) }}"><strong>{{ trans('header.nos_metries') }}</strong></a></li>
            <li><a class="side-submenu" href="{{ route('metiers' , [ app()->getLocale() , '#metier-section-1' ]) }}">{{ trans('header.nos_metries_sub_1') }}</a></li>
            <li><a class="side-submenu" href="{{ route('metiers' , [ app()->getLocale() , '#metier-section-2' ]) }}">{{ trans('header.nos_metries_sub_2') }}</a></li>
            <li><a class="side-submenu" href="{{ route('metiers' , [ app()->getLocale() , '#metier-section-3' ]) }}">{{ trans('header.nos_metries_sub_3') }}</a></li>
            <li class="nav-item">
                <a href="{{ route('references', app()->getLocale()) }}" class="nosreferences"><strong>{{ trans('header.nos_references') }}</strong></a>
            </li>
            <li class="nav-item">
                <a href="{{ route('partenaires', app()->getLocale()) }}"><strong>{{ trans('header.nos_partenaires') }}</strong></a>
            </li>
            <li>
                <a href="{{ route('contact', app()->getLocale()) }}" class="contacts"><strong>{{ trans('header.contact') }}</strong></a>
            </li>
        </ul>
    </nav> --}}
</body>
<!-- END BODY -->

</html>
