@extends('layouts.frontend', ['title' => 'About us'])
@section('content')
@include('partials.frontend.slide-child')
<!-- About -->
<section class="content" id="about-block">
    <div class="container-fluid p-0">
        <div class="row no-gutters justify-content-end">
            <div class="col-md offset-md-1">
                <div class="content-about-wrap">
                    <span class="slug-lg">Artcoustic Studios a pour but
                        de vous accompagner à
                        travers les stratégies, une meilleure
                        communication avec un retour
                        sur investissement rentable.</span>
                    <p>Artcoustic Studios a pour but de vous accompagner à travers les stratégies, une meilleure
                        communication avec un retour sur investissement rentable.
                        L’expertise et la créativité de notre agence sont intimement liées, l’esprit créatif qui nous
                        anime est mis au service de votre satisfaction.
                        <br><br>
                        Artcoustic Studios s’occupe de votre image autour de concepts fédérateurs et donnons une unité
                        et une cohérence à vos de actions de communication.
                        <br><br>
                        Dirigée par une équipe dynamique, Artcoustic Studios exploite les canaux de communication les
                        plus créatifs favorisant les dimensions expérientielles, sociales et culturelles afin de nouer
                        des connexions émotionnelles entre nos clients et leurs publics.</p>
                </div>
            </div>
            <div class="col-md-5 text-right">
                <div class="cover-about">
                    <img src="{{ asset('assets_frontend/images/studio.jpg') }}" alt="" class="img-fluid">
                    <img src="{{ asset('assets_frontend/images/emotion-artcoustic.png') }}" data-animate="fadeInUp" data-delay="200" alt="emotion"
                        class="img-fluid emotion-about">
                    <span class="slug-about">A propos de nous</span>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End About -->
@endsection
