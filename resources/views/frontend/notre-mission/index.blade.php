@extends('layouts.frontend', ['title' => 'notre mission'])
@section('content')
<div class="banner ros magazine">
    <div class="grid-container">
        <div class="grid-x">
            <div class="cell medium-9 section-title-wrapper">
                <h1 class="section-title">NOTRE MISSION</h1>
            </div>
        </div>
    </div>
</div>

<div id="content" class="site-content ros">
    <div class="layout">
        <div class="grid-container">
            <div class="grid-x grid-margin-x">

                <div class="cell medium-9">

                    <div class="entry-content">
                        <div class="grid-x">
                            <div class="cell medium-12 add-margin-bottom-50">

                                <h1 class="article-main-title" style="font-family: 'Playfair Display', serif">Mission
                                </h1>
                                <div class="entry-content">
                                    <p>La raison d’être du réseau Les Nouvelles Esthétiques Spa est avant tout de
                                        contribuer au développement des affaires et au rayonnement personnel de ses
                                        membres en favorisant les échanges, le réseautage, l’interaction entre les
                                        professionnels de l’industrie, tout en mettant en évidence les compétences et la
                                        qualité de service de chacun, pour une meilleure reconnaissance.<br>
                                        Le réseau s’engage également à favoriser les échanges et la synergie avec les
                                        gens d’affaires locaux, consultants et formateurs compétents susceptibles
                                        d’aider et d’encadrer &nbsp;les membres du réseau dans la gestion et le
                                        développement de leur entre- prise et ainsi contribuer grandement à leur succès.
                                    </p>
                                    <p>Favoriser le réseautage entre les professionnels de l’industrie, les gens
                                        d’affaires locaux, les coachs d’entreprise sur les bases de l’échange, de
                                        collaboration ou de formation.<br>
                                        Créer une synergie avec &nbsp;les professions connexes à l’esthétique,
                                        professionnels de la santé, médecine et thérapies alternatives, entraîneurs
                                        sportifs, etc.<br>
                                        Promouvoir les échanges commerciaux entre &nbsp;professionnels (fournisseurs,
                                        écoles et centres de formations, spas,&nbsp;instituts de beauté,&nbsp;cliniques
                                        médico- esthétiques, salons de coiffure, salons d’ongles, salons de
                                        massothérapie et salons multi-services.<br>
                                        Promouvoir la formation &nbsp;professionnelle et la qualité de services par des
                                        conférences et des formations des meilleurs spécialistes.</p>
                                </div>
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