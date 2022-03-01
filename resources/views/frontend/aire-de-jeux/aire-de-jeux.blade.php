<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="no-js">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>La marocaine des jeux</title>
    @include('partials.frontend.head')
</head>

<body id="body" data-spy="scroll" data-target=".header">
    <!--========== HEADER ==========-->
    @include('partials.frontend.header')
    <!--========== END HEADER ==========-->

    <!--========== PAGE LAYOUT ==========-->
            <!-- Cards -->
        <div id="pays" class="sm-margin-t-60">
            <div class="container-fluid content-xs">
                <div class="col-md-12 text-center">
                    <h2 class="title" style="margin-bottom:20px">Aire de jeux</h2>
                </div>
                <div class="row row-no-padding">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <a href="http://softsevenart.ca/la-marocaine-des-jeux/produits/categorie/galax">
                            <div class="card-product">
                                <img src="http://softsevenart.ca/la-marocaine-des-jeux/assets_frontend/img/metal.png" class="img-responsive">
                                <div class="content-product">
                                    <strong class="title-product">Métal</strong>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <a href="http://softsevenart.ca/la-marocaine-des-jeux/produits/categorie/castle">
                            <div class="card-product">
                                <img src="http://softsevenart.ca/la-marocaine-des-jeux/assets_frontend/img/bois.png" class="img-responsive">
                                <div class="content-product">
                                    <strong class="title-product">Bois</strong>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <a href="http://softsevenart.ca/la-marocaine-des-jeux/produits/categorie/balancoire">
                            <div class="card-product">
                                <img src="http://softsevenart.ca/la-marocaine-des-jeux/assets_frontend/img/indispo.png" class="img-responsive">
                                <div class="content-product">
                                    <strong class="title-product">Les indispensables</strong>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Cards -->
        
    <!--========== END PAGE LAYOUT ==========-->
    @include('partials.frontend.references')
    <!--========== FOOTER ==========-->
    @include('partials.frontend.map')
    @include('partials.frontend.footer')
    <!--========== END FOOTER ==========-->

</body>
<!-- END BODY -->

</html>