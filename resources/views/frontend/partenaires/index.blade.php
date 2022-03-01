@extends('layouts.frontend', ['title' => 'Partenaires'])
@section('content')


<section class="app-banner partenaires-page">
    <div class="container">
        <div class="row">
            <div class="col-md-7 text-white">
                <p class="h2 banner-title">{!! __('partenaires.page_title') !!}</p>
                <p class="banner-content">{!! __('partenaires.page_subtitle') !!}</p>
            </div>
        </div>
    </div>
</section>


<section class="section-mt-ouvrage section-ingerop-about position-relative">
    <div class="container">
        <div class="row">
            <div class="col-md-7 py-md-5 py-3 order-md-1 order-2 block-content">
                <p>{!! __('partenaires.section_1_pg_1') !!}</p>
                <p>{!! __('partenaires.section_1_pg_2') !!}<p>
                <p>{!! __('partenaires.section_1_pg_3') !!}</p>
                <p>{!! __('partenaires.section_1_pg_4') !!}</p>
            </div>
            <div class="col-md-5 order-md-2 order-1 out-right h-100">
                <div class="imgeblock w-100" style="background-image: url({{ asset('asset/img/img-tr.png')}});"></div>
            </div>
        </div>
    </div>
</section>


<section class="section-ingrop-info position-relative mb-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 out-left h-100">
                <div class="imgeblock w-100 h-100 pt-4 pl-5" style="background-image: url({{ asset('asset/img/partenaires/section-2.webp') }});">
                    <img class="ml-5" src="{{ asset('asset/img/bas-logo.png') }}" width="200" alt="">
                </div>
            </div>
            <div class="col-md-7 block-content py-5 px-4 ml-auto my-md-5 my-0">
                <p class="font-italic">{!! __('partenaires.section_2_pg_1') !!}</p>
                <p class="mt-5 mb-0">{!! __('partenaires.section_2_pg_link') !!} : <a class="text-reset" href="https://www.ingerop.fr/">www.ingerop.fr</a>  » </p>
            </div>
        </div>
    </div>
</section>

@endsection
