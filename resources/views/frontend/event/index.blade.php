@extends('layouts.frontend', ['title' => 'events'])
@section('content')
<div class="banner ros magazine">
    <div class="grid-container">
        <div class="grid-x">
            <div class="cell medium-9 section-title-wrapper">
                <div class="stylized-title-wrapper">
                    <img src="{{ asset('assets_frontend/img/fancy-title-events.svg') }}">
                </div>
            </div>
        </div>
    </div>
</div>

<div id="content" class="site-content ros">
    <div class="layout">
        <div class="grid-container">
            <div class="grid-x grid-margin-x">

                <div class="cell medium-9">
                    <div class="news-wrapper">
                        <div class="grid-x grid-margin-x">

                            <div class="ads-grid grid-x grid-margin-x event-list-row">
                                <div class="cell medium-4 large-4">
                                    <a href="#" class="event-list-thumbnail-wrapper">
                                        <img src="{{ asset('assets_frontend/img/Billet-en-vente-dès-maintenant.jpg') }}" alt="Congrès LNE 2019">
                                        <div class="event-list-date">
                                            <span class="first-row">06</span>
                                            <span class="second-row">mai</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="cell medium-8 large-8 event-list-content">
                                    <h2><a href="#" class="event-list-thumbnail-wrapper">Congrès LNE 2019</a></h2>
                                    <div class="evant-list-description">
                                        LE CONGRÈS DES NOUVELLES ESTHÉTIQUES CANADA &nbsp; LE RENDEZ-VOUS DES
                                        PROFESSIONNELS DE L’INDUSTRIE DE LA BEAUTÉ Un congrès à la hauteur de vos
                                        attentes L’équipe des Nouvelles Esthétiques Canada ...
                                    </div>
                                    <div class="event-list-readmore-link-wrapper">
                                        <a href="#" class="event-list-readmore-link">Lire la suite&nbsp;&nbsp;<i
                                                class="fas fa-caret-right"></i></a>
                                    </div>
                                </div>
                            </div>

                        </div>


                        <div class="grid-x">
                            <div class="cell medium-12"></div>
                        </div>
                    </div>
                </div>

                <div class="cell medium-3 right-column">
                    <div class="derniere-edition">
                        <h3>Dernière <span class="gold-text">édition </span></h3>
                        <img src="{{ asset('assets_frontend/img/last-edition.png') }}">
                        <a href="#">Commander ma copie <i class="fas fa-caret-right"></i></a>
                    </div>
                    <div class="bloc golden">
                        <a href="#"><img src="{{ asset('assets_frontend/img/right-column-image-congres.jpg') }}"></a>
                    </div>
                    <div class="bloc golden blogroll">
                        <div class="bloc-title-wrapper">
                            <h3>Ça bouge <span class="gold-text">chez lne</span></h3>
                        </div>
                        <a href="#" class="actualite-row">
                            <div class="grid-x">
                                <div class="cell medium-12 large-4 xlarge-6">
                                    <img src="{{ asset('assets_frontend/img/Image-pour-médias-sociaux-2.png') }}">
                                </div>
                                <div class="cell medium-12 large-8 xlarge-6 actualite-row-content">
                                    <p>Lancement de la gamme de gels…&nbsp;&nbsp;<i class="fas fa-caret-right"></i></p>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="actualite-row">
                            <div class="grid-x">
                                <div class="cell medium-12 large-4 xlarge-6">
                                    <img src="{{ asset('assets_frontend/img/2019-02-18_Image-titre-article-site-web-1.jpg') }}">
                                </div>
                                <div class="cell medium-12 large-8 xlarge-6 actualite-row-content">
                                    <p>Séminaire 2019 Davincia&nbsp;&nbsp;<i class="fas fa-caret-right"></i></p>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="actualite-row">
                            <div class="grid-x">
                                <div class="cell medium-12 large-4 xlarge-6">
                                    <img src="{{ asset('assets_frontend/img/EDITH-SEREI-1.jpg') }}">
                                </div>
                                <div class="cell medium-12 large-8 xlarge-6 actualite-row-content">
                                    <p>Graduation de l’Académie Édith Serei&nbsp;&nbsp;<i
                                            class="fas fa-caret-right"></i></p>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="actualite-row">
                            <div class="grid-x">
                                <div class="cell medium-12 large-4 xlarge-6">
                                    <img src="{{ asset('assets_frontend/img/MASTER-CLASS-VICTOIRES-10.jpg') }}">
                                </div>
                                <div class="cell medium-12 large-8 xlarge-6 actualite-row-content">
                                    <p>MASTER CLASS les Victoires du Regard&nbsp;&nbsp;<i
                                            class="fas fa-caret-right"></i></p>
                                </div>
                            </div>
                        </a>
                        <div class="bloc-footer">
                            <a href="#" class="view-all-news">Voir toutes les actualités&nbsp;&nbsp;<i
                                    class="fas fa-caret-right"></i></a>
                        </div>
                    </div>
                    <div class="bloc">
                        <a target="_blank" href="#">
                            <img src="{{ asset('assets_frontend/img/Academie-Edith-Serei.jpg') }}">
                        </a>
                    </div>
                    <div class="bloc">
                        <a target="_blank" href="#">
                            <img src="{{ asset('assets_frontend/img/pub-foreo-2.jpg') }}">
                        </a>
                    </div>
                    <div class="bloc">
                        <a target="_blank" href="#">
                            <img src="{{ asset('assets_frontend/img/Pub_esthederm-1.jpg') }}">
                        </a>
                    </div>
                    <div class="devenez-annonceur">
                        <h3>Devenez<span class="gold-text">annonceur!</span></h3>
                        <a href="#" class="btn white">Informez-vous</a>
                        <img class="slanted-border-right"
                            src="https://www.nouvelles-esthetiques.ca/wp-content/themes/theme-lne/images/slanted-title-gold-lines.svg">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection