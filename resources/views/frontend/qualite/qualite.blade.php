@extends('layouts.frontend', ['title' => 'Qualité'])
@section('content')
    <!-- Qualite -->
    <div id="qualite" class="sm-margin-t-60">
        <div class="content-xs container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <h2 class="title">qualité</h2>
                </div>
            </div>
            <div class="row margin-b-80">
                <div class="col-md-4 pull-right" style="margin-top:22px">
                    <img src="{{ asset('assets_frontend/img/qualite/01.jpg') }}" alt="" class="img-responsive">
                </div>
                <div class="col-md-8 pull-left" style="margin-top:22px">
                    <div class="bloc-txt">
                        <strong style="font-size:18px">Notre gamme de produits se compose de deux systèmes d'équipements : </strong>
                        <strong style="font-size:20px">BOIS :</strong>
                        <p style="line-height:1.5">Les bois utilisés sont le Pin Suédois et le Pin Sylvestre. Ils sont lamellés-collés afin de
                            résister aux fissurations, laminés avec une colle spéciale pour extérieur (contreplaqué).
                            <br><br>
                            Leur surface est imprégnée par des agents correcteurs afin de garantir la meilleure
                            résistance
                            possible contre les intempéries et les canicules.
                            <br><br>
                            Les poteaux en bois sont intégrés à des ancrages en acier galvanisé pour protéger le bois
                            contre le contact avec le sol.
                            <br><br>
                            Nous commercialisons également une gamme de produits en bois robinier; l’un des rares bois
                            autoclave classe 4 à l’état brut et sans aucun traitement chimique.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <img src="{{ asset('assets_frontend/img/qualite/02.jpg') }}" alt="" class="img-responsive margin-b-20">
                    <img src="{{ asset('assets_frontend/img/qualite/03.jpg') }}" alt="" class="img-responsive">
                </div>
                <div class="col-md-8">
                    <div class="bloc-txt">
                        <strong style="font-size:20px">METAL:</strong>
                        <p style="line-height:1.5">Toutes les parties métalliques sont en acier galvanisé à chaud et peintes par poudrage afin
                            de
                            prévenir la corrosion.</p>
                        <br>
                        <strong style="font-size:20px">Et pour l’ensemble de nos produits :</strong>
                        <ul class="list">
                            <li>Tous les équipements sont montés sur une fondation en béton</li>
                            <li>Toutes les pièces en acier sont galvanisées et peintes par poudrage</li>
                            <li>Les toits sont fabriqués en stratifié HPL durable et résistant aux UV</li>
                            <li>Les glissières des toboggans sont en acier inoxydable, leurs panneaux latéraux en HDPE
                            </li>
                            <li>Tous les garde-corps sont en polyéthylène HDPE fixé à la structure à l'aide d'un cadre
                                en
                                acier</li>
                            <li>Les marches d'escaliers sont en contreplaqué stratifié antidérapant</li>
                            <li>Les cordes sont en polypropylène avec âme en acier, reliées par des connecteurs en
                                aluminium
                                et en plastique</li>
                            <li>Les prises des murs d'escalade sont en résine organique </li>
                            <li>Les passerelles tunnels sont fabriquées en PVC durable qui ne chauffe pas au soleil
                            </li>
                            <li>Les toboggans hélicoïdaux et tubulaires sont en LDPE</li>
                            <li>Les tubes et spirales de pompiers sont fabriqués en acier inoxydable</li>
                            <li>Tous les boulons et les écrous sont faits en acier inoxydable et protégés par des
                                bouchons
                                en plastique</li>
                            <li>Les poteaux sont finis avec des capuchons en plastique</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Qualite -->
@endsection
