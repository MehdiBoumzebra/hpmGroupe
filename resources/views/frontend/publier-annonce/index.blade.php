@extends('layouts.frontend', ['title' => 'publier une annonce'])
@section('content')
<div class="banner ros magazine">
        <div class="grid-container">
            <div class="grid-x">
                <div class="cell medium-9 section-title-wrapper">
                    <h1 class="section-title">PUBLIER UNE ANNONCE</h1>
                </div>
            </div>
        </div>
    </div>

    <div id="content" class="site-content ros">
        <div class="layout">
            <div class="grid-container">
                <div class="grid-x grid-margin-x">

                    <div class="cell medium-9">
                        <p><strong>Vendre n’a jamais été aussi facile!</strong><br>
                        Pour publier une annonce, remplissez le bloc d’informations ci-dessous en prenant soin de joindre 3 photos et un court descriptif du produit à vendre. Votre annonce sera rendue publique dans un délai de 24 à 48 heures suivant l’envoi de votre demande.**</p>


                        <div class="gf_browser_chrome gform_wrapper">
                            <form method="post" id="gform_3" enctype="multipart/form-data">
                                <div class="gform_body">
                                    <ul class="gform_fields top_label form_sublabel_below description_below">
                                        <li>
                                            <label class="gfield_label">Titre de l'annonce</label>
                                            <div class="ginput_container ginput_container_post_title">
                                                <input name="input_1" type="text" value="" class="medium" aria-invalid="false">
                                            </div>
                                        </li>
                                        <li>
                                            <label class="gfield_label">Catégorie de l'annonce</label>
                                            <div class="ginput_container ginput_container_post_title">
                                                <select name="input_25" id="input_3_25" class="medium gfield_select" aria-invalid="false">
                                                    <option value="">Type d'annonce classée</option>
                                                    <option value="1">À louer</option>
                                                    <option value="2">À vendre</option>
                                                    <option value="3">Équipements à louer</option>
                                                    <option value="4">Équipements à vendre</option>
                                                    <option value="5">Local à louer</option>
                                                    <option value="6">Offre d'emploi</option>
                                                    <option value="7">Salons et spas à vendre</option>
                                                    <option value="8">Stage et formations</option>
                                                </select>
                                            </div>
                                        </li>
                                        <li>
                                            <label class="gfield_label">Prix demandé</label>
                                            <div class="ginput_container ginput_container_post_title">
                                                <input name="input_1" type="text" value="" class="medium" aria-invalid="false">
                                            </div>
                                        </li>
                                        <li>
                                            <label class="gfield_label">Votre annonce</label>
                                            <div class="ginput_container ginput_container_post_title">
                                                <textarea class="textarea medium" maxlength="10000" aria-required="true" aria-invalid="false" rows="10" cols="50"></textarea>
                                            </div>
                                        </li>
                                        <li>
                                            <label class="gfield_label">Image liée a l'annonce</label>
                                            <div class="ginput_container ginput_container_post_title">
                                                <span class="ginput_full">
                                                    <input name="input_14" id="input_3_14" type="file" class="medium">
                                                </span>
                                            </div>
                                        </li>
                                        <li class="gfield gsection field_sublabel_below field_description_below gfield_visibility_visible">
                                            <h2 class="gsection_title">Personne contact</h2>
                                        </li>
                                        <li>
                                            <label class="gfield_label">Prénom</label>
                                            <div class="ginput_container ginput_container_post_title">
                                                <input name="input_1" type="text" value="" class="medium" aria-invalid="false">
                                            </div>
                                        </li>
                                        <li>
                                            <label class="gfield_label">Nom</label>
                                            <div class="ginput_container ginput_container_post_title">
                                                <input name="input_1" type="text" value="" class="medium" aria-invalid="false">
                                            </div>
                                        </li>
                                        <li>
                                            <label class="gfield_label">Email</label>
                                            <div class="ginput_container ginput_container_post_title">
                                                <input name="input_1" type="text" value="" class="medium" aria-invalid="false">
                                            </div>
                                        </li>
                                        <li>
                                            <label class="gfield_label">Téléphone</label>
                                            <div class="ginput_container ginput_container_post_title">
                                                <input name="input_1" type="text" value="" class="medium" aria-invalid="false">
                                            </div>
                                        </li>
                                        <li>
                                            <button type="submit" class="gform_button">Envoyer</button>
                                        </li>
                                    </ul>
                                </div>
                            </form>
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