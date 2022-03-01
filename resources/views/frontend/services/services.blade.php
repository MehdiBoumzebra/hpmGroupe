@extends('layouts.frontend', ['title' => 'Services'])
@section('content')
<div id="services" class="sm-margin-t-60">
        <div class="content-xs container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <h2 class="title">Services</h2>
                </div>
            </div>
            <div class="row margin-b-30">
                <div class="col-md-4 pull-right" style="margin-top:22px">
                    <img src="{{ asset('assets_frontend/img/services/01.png') }}" alt="" class="img-responsive">
                </div>
                <div class="col-md-8 pull-left" style="margin-top:22px">
                    <div class="bloc-txt">
                        <p style="line-height:1.5">
                            <strong style="font-size:18px">Installation professionnelle des équipements d'aires de jeux</strong>
                                Notre équipe de techniciens, formée par notre fabricant européen, assure un montage et une
                            installation professionnels conformes aux normes de sécurité en vigueur PN-EN 1176-7: 2009.
                            <br><br>Tous les équipements sont installés sur des ancrages en acier galvanisé en
                            respectant
                            les zones de sécurité.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="bloc-txt">
                        <p style="line-height:1.5" class="margin-b-60">Nous fournissons également l’assistance technique pour les clients qui le
                            souhaitent : Un
                            de nos techniciens est alors chargé d’assister la main d’œuvre du client sur le chantier
                            en les formant sur le montage de chaque produit et en leur transmettant les données
                            techniques nécessaires à l’installation et au respect des zones de sécurité.</p>
                        <strong style="font-size:18px">Entretien de l'aire de jeux - pour un jeu en toute sécurité</strong>
                        <p style="line-height:1.5">Une fois l'aire de jeux installée, elle doit être contrôlée et entretenue
                            régulièrement pour assurer la sécurité des utilisateurs.
                            <br>
                            A cet effet, nous proposons un contrat de maintenance annuel qui comprend :
                        </p>
                        <br><br>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10 col-centered">
                    <div class="row row-no-padding">
                        <div class="col-md-6">
                            <div class="bloc-pop figure margin-b-10">
                                <a class="popup-modal" href="#maintenance-preventive">
                                    <img src="{{ asset('assets_frontend/img/services/02.jpg') }}" alt="maintenance preventive" class="img-responsive">
                                    <span class="title-pop">maintenance préventive</span>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="bloc-pop figure margin-b-10">
                                <a class="popup-modal" href="#maintenance-corrective">
                                    <img src="{{ asset('assets_frontend/img/services/03.jpg') }}" alt="maintenance corrective" class="img-responsive">
                                    <span class="title-pop">maintenance corrective</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="maintenance-preventive" class="white-popup-block mfp-hide">
            <h1>maintenance préventive</h1>
            <div class="body-popup">
                <p style="line-height:1.5">La maintenance préventive prévoit la vérification de toutes les structures, les fixations et surtout
                    les
                    éléments mobiles et le vernissage de tous les éléments en bois, afin de maintenir les équipements
                    dans
                    un état de bon fonctionnement, selon la régularité suivante :
                    <br>
                    Ces visites de contrôle et maintenance des aires de jeux seront répertoriées en deux catégories et
                    réalisés en 3 passages annuels :</p>
                <div class="row">
                    <div class="col-md-6">
                        <div class="block-popup">
                            <strong class="title-pop">Une visite annuelle</strong>
                            <p>La visite annuelle consistera à effectuer les prestations suivantes :</p>
                            <ul>
                                <li>Contrôle du niveau de sûreté globale de l’équipement</li>
                                <li>Contrôle «d’éventuelles variations du niveau de sûreté des équipements qui ont fait
                                    l’objet de réparations, ou des éléments qui ont été ajoutés ou remplacés». Un soin
                                    tout
                                    particulier sera accordé aux éléments modifiés afin de vérifier qu’ils ne présentent
                                    pas
                                    de risques pour les utilisateurs (incitations à grimper, coincements de tête, de
                                    cordon...)</li>
                                <li>Vernissage de tous les éléments en bois ou peinture pour les éléments nécessitant
                                    cette
                                    prestation</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="block-popup">
                            <strong class="title-pop">Deux visites fonctionnelles</strong>
                            <p style="line-height:1.5">
                                Les visites fonctionnelles consisteront à effectuer les prestations suivantes: </p>
                            <ul>
                                <li>Contrôle visuel de routine : intégrité de la structure, propreté, vérification du
                                    niveau
                                    0 et du dégagement des équipements au sol</li>
                                <li>Contrôle fonctionnel: vérification du fonctionnement et de la stabilité de
                                    l’équipement
                                </li>
                                <li>Blocage des fixations, resserrage et remplacement des visseries défectueuses (y
                                    compris
                                    cache-boulons)</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <a class="popup-modal-dismiss" href="#"><i class="fa fa-times" aria-hidden="true"></i></a>
        </div>
        <div id="maintenance-corrective" class="white-popup-block mfp-hide">
            <h1>maintenance corrective</h1>
            <div class="body-popup">
                <p>Les interventions effectuées au titre de la maintenance corrective ont pour objet la remise en état du fonctionnement des équipements suite à une défaillance totale ou partielle.<br> À cet effet, le prestataire assure la réparation des équipements et le remplacement des pièces défectueuses.<br>
                Cette prestation consiste à : </p>
                <div class="row">
                    <div class="col-md-12">
                        <div class="block-popup">
                            <ul>
                                <li>Un diagnostic de l’incident et l’identification du problème avant intervention</li>
                                <li>L’établissement d’un devis de réparation ou remplacement des articles endommagés</li>
                                <li>La validation de l’intervention par le client</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <a class="popup-modal-dismiss" href="#"><i class="fa fa-times" aria-hidden="true"></i></a>
        </div>
    </div>
@endsection
