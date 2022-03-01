@extends('layouts.frontend', ['title' => 'articles'])
@section('content')
<div class="banner ros magazine">
        <div class="grid-container">
            <div class="grid-x">
                <div class="cell medium-9 section-title-wrapper">
                    <div class="stylized-title-wrapper">
                        <img src="https://www.nouvelles-esthetiques.ca/wp-content/themes/theme-lne/images/fancy-title-news.svg">
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
                        
                        <div class="grid-x grid-margin-x aligne-middle custom-dropdown-wrapper">
                            <div class="cell medium-shrink">
                                <span class="custom-dropdown-label">Filtrer par:</span>
                            </div>
                            <div class="cell medium-6 large-5 xxlarge-4">
                                <div class="custom-dropdown">
                                    <span class="custom-dropdown-selected">
                                        <span class="custom-dropdown-selected-label">Choisissez une option...</span> <i class="fas fa-angle-down"></i>
                                    </span>
                                    <ul style="display: none;">
                                        <li><a href="#">En vrac</a></li>
                                        <li><a href="#">Entrevue Pro</a></li>
                                        <li><a href="#">Non classifié(e)</a></li>
                                        <li><a href="#">Nos Collabos</a></li>
                                        <li><a href="#">Soins</a></li>
                                        <li><a href="#">Tendances</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="news-wrapper">
                            <div class="grid-x grid-margin-x">
                                <div class="ads-cell-twin cell medium-6 news-item-outer">
                                    <div class="news-item-wrapper large-up-right-padding-15">
                                        <div class="news-item-image-outer">
                                            <div class="news-item-image">
                                                <img src="{{ asset('assets_frontend/img/maquillage.png') }}">
                                            </div>
                                            <div class="news-item-title-wrapper">
                                                <div class="golden-bar"></div>
                                                <h3><a href="#">Comment choisir les bonnes couleurs en maquillage ?</a></h3>
                                            </div>
                                        </div>
                                        <div class="news-item-content">
                                            <a href="#">
                                                <strong>Telle une impressionniste, vous allez vous munir de vos pinceaux et de vos couleurs pour égayer et embellir le visage de vos clientes. Mais… comment ? Après avoir appris toutes les techniques, les sortes de produits, comment s’y retrouver parmi toutes les couleurs ? Choisit-on les teintes de maquillage selon la tendance du moment ou la couleur des yeux et des cheveux de la cliente ?
                                                Voici quelques conseils pour vous aider lorsque viendra le temps de choisir les couleurs que vous emploierez sur votre prochaine cliente !
                                                par Marilyn Pellerin, artiste maquilleuse et propriétaire de L’abc du maquillage Académie</strong>
                                            </a>
                                            <div class="news-item-readmore-link-wrapper">
                                                <a class="news-item-readmore" href="#">Lire la suite&nbsp;&nbsp;<i class="fas fa-caret-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="ads-cell-twin cell medium-6 news-item-outer">
                                    <div class="news-item-wrapper large-up-right-padding-15">
                                        <div class="news-item-image-outer">
                                            <div class="news-item-image">
                                                <img src="{{ asset('assets_frontend/img/maquillage.png') }}">
                                            </div>
                                            <div class="news-item-title-wrapper">
                                                <div class="golden-bar"></div>
                                                <h3><a href="#">Comment choisir les bonnes couleurs en maquillage ?</a></h3>
                                            </div>
                                        </div>
                                        <div class="news-item-content">
                                            <a href="#">
                                                <strong>Telle une impressionniste, vous allez vous munir de vos pinceaux et de vos couleurs pour égayer et embellir le visage de vos clientes. Mais… comment ? Après avoir appris toutes les techniques, les sortes de produits, comment s’y retrouver parmi toutes les couleurs ? Choisit-on les teintes de maquillage selon la tendance du moment ou la couleur des yeux et des cheveux de la cliente ?
                                                Voici quelques conseils pour vous aider lorsque viendra le temps de choisir les couleurs que vous emploierez sur votre prochaine cliente !
                                                par Marilyn Pellerin, artiste maquilleuse et propriétaire de L’abc du maquillage Académie</strong>
                                            </a>
                                            <div class="news-item-readmore-link-wrapper">
                                                <a class="news-item-readmore" href="#">Lire la suite&nbsp;&nbsp;<i class="fas fa-caret-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="ads-cell-twin cell medium-6 news-item-outer">
                                    <div class="news-item-wrapper large-up-right-padding-15">
                                        <div class="news-item-image-outer">
                                            <div class="news-item-image">
                                                <img src="{{ asset('assets_frontend/img/maquillage.png') }}">
                                            </div>
                                            <div class="news-item-title-wrapper">
                                                <div class="golden-bar"></div>
                                                <h3><a href="#">Comment choisir les bonnes couleurs en maquillage ?</a></h3>
                                            </div>
                                        </div>
                                        <div class="news-item-content">
                                            <a href="#">
                                                <strong>Telle une impressionniste, vous allez vous munir de vos pinceaux et de vos couleurs pour égayer et embellir le visage de vos clientes. Mais… comment ? Après avoir appris toutes les techniques, les sortes de produits, comment s’y retrouver parmi toutes les couleurs ? Choisit-on les teintes de maquillage selon la tendance du moment ou la couleur des yeux et des cheveux de la cliente ?
                                                Voici quelques conseils pour vous aider lorsque viendra le temps de choisir les couleurs que vous emploierez sur votre prochaine cliente !
                                                par Marilyn Pellerin, artiste maquilleuse et propriétaire de L’abc du maquillage Académie</strong>
                                            </a>
                                            <div class="news-item-readmore-link-wrapper">
                                                <a class="news-item-readmore" href="#">Lire la suite&nbsp;&nbsp;<i class="fas fa-caret-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="ads-cell-twin cell medium-6 news-item-outer">
                                    <div class="news-item-wrapper large-up-right-padding-15">
                                        <div class="news-item-image-outer">
                                            <div class="news-item-image">
                                                <img src="{{ asset('assets_frontend/img/maquillage.png') }}">
                                            </div>
                                            <div class="news-item-title-wrapper">
                                                <div class="golden-bar"></div>
                                                <h3><a href="#">Comment choisir les bonnes couleurs en maquillage ?</a></h3>
                                            </div>
                                        </div>
                                        <div class="news-item-content">
                                            <a href="#">
                                                <strong>Telle une impressionniste, vous allez vous munir de vos pinceaux et de vos couleurs pour égayer et embellir le visage de vos clientes. Mais… comment ? Après avoir appris toutes les techniques, les sortes de produits, comment s’y retrouver parmi toutes les couleurs ? Choisit-on les teintes de maquillage selon la tendance du moment ou la couleur des yeux et des cheveux de la cliente ?
                                                Voici quelques conseils pour vous aider lorsque viendra le temps de choisir les couleurs que vous emploierez sur votre prochaine cliente !
                                                par Marilyn Pellerin, artiste maquilleuse et propriétaire de L’abc du maquillage Académie</strong>
                                            </a>
                                            <div class="news-item-readmore-link-wrapper">
                                                <a class="news-item-readmore" href="#">Lire la suite&nbsp;&nbsp;<i class="fas fa-caret-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="ads-cell-twin cell medium-6 news-item-outer">
                                    <div class="news-item-wrapper large-up-right-padding-15">
                                        <div class="news-item-image-outer">
                                            <div class="news-item-image">
                                                <img src="{{ asset('assets_frontend/img/maquillage.png') }}">
                                            </div>
                                            <div class="news-item-title-wrapper">
                                                <div class="golden-bar"></div>
                                                <h3><a href="#">Comment choisir les bonnes couleurs en maquillage ?</a></h3>
                                            </div>
                                        </div>
                                        <div class="news-item-content">
                                            <a href="#">
                                                <strong>Telle une impressionniste, vous allez vous munir de vos pinceaux et de vos couleurs pour égayer et embellir le visage de vos clientes. Mais… comment ? Après avoir appris toutes les techniques, les sortes de produits, comment s’y retrouver parmi toutes les couleurs ? Choisit-on les teintes de maquillage selon la tendance du moment ou la couleur des yeux et des cheveux de la cliente ?
                                                Voici quelques conseils pour vous aider lorsque viendra le temps de choisir les couleurs que vous emploierez sur votre prochaine cliente !
                                                par Marilyn Pellerin, artiste maquilleuse et propriétaire de L’abc du maquillage Académie</strong>
                                            </a>
                                            <div class="news-item-readmore-link-wrapper">
                                                <a class="news-item-readmore" href="#">Lire la suite&nbsp;&nbsp;<i class="fas fa-caret-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="ads-cell-twin cell medium-6 news-item-outer">
                                    <div class="news-item-wrapper large-up-right-padding-15">
                                        <div class="news-item-image-outer">
                                            <div class="news-item-image">
                                                <img src="{{ asset('assets_frontend/img/maquillage.png') }}">
                                            </div>
                                            <div class="news-item-title-wrapper">
                                                <div class="golden-bar"></div>
                                                <h3><a href="#">Comment choisir les bonnes couleurs en maquillage ?</a></h3>
                                            </div>
                                        </div>
                                        <div class="news-item-content">
                                            <a href="#">
                                                <strong>Telle une impressionniste, vous allez vous munir de vos pinceaux et de vos couleurs pour égayer et embellir le visage de vos clientes. Mais… comment ? Après avoir appris toutes les techniques, les sortes de produits, comment s’y retrouver parmi toutes les couleurs ? Choisit-on les teintes de maquillage selon la tendance du moment ou la couleur des yeux et des cheveux de la cliente ?
                                                Voici quelques conseils pour vous aider lorsque viendra le temps de choisir les couleurs que vous emploierez sur votre prochaine cliente !
                                                par Marilyn Pellerin, artiste maquilleuse et propriétaire de L’abc du maquillage Académie</strong>
                                            </a>
                                            <div class="news-item-readmore-link-wrapper">
                                                <a class="news-item-readmore" href="#">Lire la suite&nbsp;&nbsp;<i class="fas fa-caret-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid-x">
                                <div class="cell medium-12">
                                    <ul class="page-numbers">
                                        <li><span aria-current="page" class="page-numbers current">1</span></li>
                                        <li><a class="page-numbers" href="#">2</a></li>
                                        <li><span class="page-numbers dots">…</span></li>
                                        <li><a class="page-numbers" href="#">11</a></li>
                                        <li><a class="next page-numbers" href="#"><i class="fas fa-caret-right"></i></a></li>
                                    </ul>
                                </div>
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
                                        <p>Graduation de l’Académie Édith Serei&nbsp;&nbsp;<i class="fas fa-caret-right"></i></p>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="actualite-row">
                                <div class="grid-x">
                                    <div class="cell medium-12 large-4 xlarge-6">
                                        <img src="{{ asset('assets_frontend/img/MASTER-CLASS-VICTOIRES-10.jpg') }}">
                                    </div>
                                    <div class="cell medium-12 large-8 xlarge-6 actualite-row-content">
                                        <p>MASTER CLASS les Victoires du Regard&nbsp;&nbsp;<i class="fas fa-caret-right"></i></p>
                                    </div>
                                </div>
                            </a>
                            <div class="bloc-footer">
                                <a href="#" class="view-all-news">Voir toutes les actualités&nbsp;&nbsp;<i class="fas fa-caret-right"></i></a>
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
                            <img class="slanted-border-right" src="https://www.nouvelles-esthetiques.ca/wp-content/themes/theme-lne/images/slanted-title-gold-lines.svg">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
