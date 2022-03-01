@extends('layouts.frontend', ['title' => 'Contact'])
@section('content')

<section class="app-banner contact-page">
    <div class="container">
        <div class="row">
            <div class="col-md-7 text-white">
                <p class="h2 banner-title">{!! __('contact.page_title') !!}</p>
                <p class="banner-content">{!! __('contact.page_subtitle') !!}</p>
            </div>
        </div>
    </div>
</section>


<section class="section-mt-ouvrage section-gp-about position-relative">
    <div class="container">
        <div class="row">
            <div class="col-md-7 py-md-5 py-3 order-md-1 order-2 block-content">
                <h3 class="block-title">{!! __('contact.section_1_title') !!}</h3>
                <p class="mb-3">
                    40, rue Oued Fès – Agdal – 10 000 RABAT<br>
                    {{ __('extra.tel') }}. <a class="text-reset" href="tel:+212537772111">+212 (0)5 37 77 21 11</a> <br>
                    {{ __('extra.fax') }}. <a class="text-reset" href="tel:+212537772111">+212 (0)5 37 77 21 10</a> <br>
                </p>
                <strong>Contacts</strong>
                <p>
                    <strong>Thierry CUSSET</strong> - {{ __('extra.directeur_mail') }} - Mail : <a class="text-reset" href="mailto:thierry.cusset@hpmgroupe.com">thierry.cusset@hpmgroupe.com</a> <br>
                    <strong>Antoine DUPLOUY</strong> - {{ __('extra.directeurTechnique_mail') }} - Mail : <a class="text-reset" href="mailto:antoine.duplouy@hpmgroupe.com">antoine.duplouy@hpmgroupe.com</a>
                </p>
            </div>
            <div class="col-md-5 order-md-2 order-1 about-block-img-container p-md-0">
                <img class="img-fluid" src="{{ asset('asset/img/group/group.png')}}" alt="">
            </div>
        </div>
    </div>
</section>


<section class="section-mt-ouvrageDe section-joinus position-relative">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8  out-left h-100">
                <div class="imgeblock w-100 h-100" style="background-image: url({{ asset('asset/img/contact/section2.webp') }});"></div>
            </div>
            <!-- py-5 px-5 -->
            <div class="col-md-9  block-content px-4 py-5 p ml-auto my-md-5 my-0">
                <div class="row px-3 py-3">
                    <div class="col-md-6 active-head">
                        <h3 class="block-title">{!! __('contact.section_2_title') !!}</h3>
                        <p class="block-subtitle">{!! __('contact.section_2_pg_1') !!}</p>
                        <p>{!! __('contact.section_2_pg_2') !!}</p>
                    </div>
                    <div class="col-md-5 active-detail">
                        <p>{!! __('contact.section_2_pg_3') !!}</p>
                        <p class="mb-0">{!! __('contact.section_2_pg_4') !!} <strong> <a class="text-reset" href="mailto:contact@hpmgroupe.com">contact@hpmgroupe.com</a></strong></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('partials.frontend.references')

@endsection
