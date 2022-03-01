@extends('layouts.frontend', ['title' => 'articles'])
@section('content')
<div class="banner ros magazine">
    <div class="grid-container">
        <div class="grid-x">
            <div class="cell medium-9 section-title-wrapper">
                <h1 class="section-title">COLLABOS</h1>
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

                            <div class="ads-cell-twin cell medium-6 news-item-outer">
                                <div class="news-item-wrapper large-up-right-padding-15">
                                    <div class="news-item-image-outer">
                                        <div class="news-item-image">
                                            <img src="{{ asset('assets_frontend/img/shutterstock_flower.jpg') }}">
                                        </div>
                                        <div class="news-item-title-wrapper">
                                            <div class="golden-bar"></div>
                                            <h3><a href="#">5 astuces pour rentabiliser votre section de cosmétiques
                                                    naturels</a></h3>
                                        </div>
                                    </div>
                                    <div class="news-item-content">
                                        <a href="#">
                                            <p>Maintenant devenue adepte des produits plus naturels, je sais
                                                pertinemment qu’il peut paraître plus ardu de rentabiliser cette section
                                                de votre institut, qu’elle soit petite, ou de plus grande ampleur.
                                                Dites-vous prime abord, que cela est tout à fait normal,
                                                particulièrement si vous venez tout juste d’ouvrir votre salon, ou si
                                                vous n’êtes pas habituée de vendre du maquillage ou des cosmétiques
                                                bios.</p>
                                        </a>
                                        <div class="news-item-readmore-link-wrapper">
                                            <a class="news-item-readmore" href="#">Lire la suite&nbsp;&nbsp;<i
                                                    class="fas fa-caret-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="ads-cell-twin cell medium-6 news-item-outer">
                                <div class="news-item-wrapper large-up-right-padding-15">
                                    <div class="news-item-image-outer">
                                        <div class="news-item-image">
                                            <img src="{{ asset('assets_frontend/img/shutterstock_flower.jpg') }}">
                                        </div>
                                        <div class="news-item-title-wrapper">
                                            <div class="golden-bar"></div>
                                            <h3><a href="#">5 astuces pour rentabiliser votre section de cosmétiques
                                                    naturels</a></h3>
                                        </div>
                                    </div>
                                    <div class="news-item-content">
                                        <a href="#">
                                            <p>Maintenant devenue adepte des produits plus naturels, je sais
                                                pertinemment qu’il peut paraître plus ardu de rentabiliser cette section
                                                de votre institut, qu’elle soit petite, ou de plus grande ampleur.
                                                Dites-vous prime abord, que cela est tout à fait normal,
                                                particulièrement si vous venez tout juste d’ouvrir votre salon, ou si
                                                vous n’êtes pas habituée de vendre du maquillage ou des cosmétiques
                                                bios.</p>
                                        </a>
                                        <div class="news-item-readmore-link-wrapper">
                                            <a class="news-item-readmore" href="#">Lire la suite&nbsp;&nbsp;<i
                                                    class="fas fa-caret-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="ads-cell-twin cell medium-6 news-item-outer">
                                <div class="news-item-wrapper large-up-right-padding-15">
                                    <div class="news-item-image-outer">
                                        <div class="news-item-image">
                                            <img src="{{ asset('assets_frontend/img/shutterstock_flower.jpg') }}">
                                        </div>
                                        <div class="news-item-title-wrapper">
                                            <div class="golden-bar"></div>
                                            <h3><a href="#">5 astuces pour rentabiliser votre section de cosmétiques
                                                    naturels</a></h3>
                                        </div>
                                    </div>
                                    <div class="news-item-content">
                                        <a href="#">
                                            <p>Maintenant devenue adepte des produits plus naturels, je sais
                                                pertinemment qu’il peut paraître plus ardu de rentabiliser cette section
                                                de votre institut, qu’elle soit petite, ou de plus grande ampleur.
                                                Dites-vous prime abord, que cela est tout à fait normal,
                                                particulièrement si vous venez tout juste d’ouvrir votre salon, ou si
                                                vous n’êtes pas habituée de vendre du maquillage ou des cosmétiques
                                                bios.</p>
                                        </a>
                                        <div class="news-item-readmore-link-wrapper">
                                            <a class="news-item-readmore" href="#">Lire la suite&nbsp;&nbsp;<i
                                                    class="fas fa-caret-right"></i></a>
                                        </div>
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