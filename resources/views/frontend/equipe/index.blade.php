@extends('layouts.frontend', ['title' => 'Le Groupe'])
@section('content')


<section class="app-banner groupe-page">
    <div class="container">
        <div class="row">
            <div class="col-md-7 text-white">
                <p class="h2 banner-title">{{ __('legroupe.page_title') }}</p>
                <p class="banner-content">{{ __('legroupe.page_subtitle') }}</p>
            </div>
        </div>
    </div>
</section>


<section id="equipe-section-1" class="section-mt-ouvrage section-gp-about position-relative">
    <div class="container">
        <div class="row">
            <div class="col-md-7 py-md-5 py-3 order-md-1 order-2 block-content">
                <p>{!! __('legroupe.section_1_pg_1') !!}</p>
                <p class="mb-3">{!! __('legroupe.section_1_pg_2') !!}</p>
                <p>{!! __('legroupe.section_1_pg_3') !!}</p>
                
                <p>{!! __('legroupe.section_1_pg_4') !!}</p>
                <p>{!! __('legroupe.section_1_pg_5') !!}</p>
                <p>{!! __('legroupe.section_1_pg_6') !!}</p>
            </div>
            <div class="col-md-5 order-md-2 order-1 about-block-img-container p-md-0">
                <img class="img-fluid" src="{{ asset('asset/img/group/group.png')}}" alt="">
            </div>
        </div>
    </div>
</section>


<section id="equipe-section-2" class="section-mt-ouvrageDe section-groupe-activ position-relative">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8  out-left h-100">
                <div class="imgeblock w-100 h-100" style="background-image: url({{ asset('asset/img/group/section2.jpg') }});"></div>
            </div>
            <!-- py-5 px-5 -->
            <div class="col-md-7  block-content  ml-auto my-md-5 my-0">
                <div class="row">
                    <div class="col-md-6 active-head">
                        <h3 class="block-title">{!! __('legroupe.section_2_title') !!}</h3>
                        <p>{!! __('legroupe.section_2_pg_1') !!}</p>
                    </div>
                    <div class="col-md-5 active-detail">
                        <p>{!! __('legroupe.section_2_pg_2') !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('partials.frontend.references')

<section id="equipe-section-3" class="section-ourexpertise pt-md-5 pt-3">
    <div class="container">
        <h3 class="block-title">{!! __('legroupe.section_3_title') !!}</h3>
        <div class="row">
            <div class="col-md-6 block-content">
                <p class="oexp-text-italic">{!! __('legroupe.section_3_pg_1') !!}</p>
                <p>{!! __('legroupe.section_3_pg_2') !!}</p>
            </div>
            <div class="col-md-6 block-content">
                <p>{!! __('legroupe.section_3_pg_3') !!}</p>
                <p>{!! __('legroupe.section_3_pg_4') !!}</p>
                <p>{!! __('legroupe.section_3_pg_5') !!}</p>
            </div>
        </div>
    </div>
</section>

@include('partials.frontend.cards')

@endsection
