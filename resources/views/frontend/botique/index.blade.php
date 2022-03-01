@extends('layouts.frontend', ['title' => 'Botique'])
@section('content')
<div class="banner ros magazine">
    <div class="grid-container">
        <div class="grid-x">
            <div class="cell medium-9 section-title-wrapper">
                <h1 class="section-title">Boutique</h1>
            </div>
        </div>
    </div>
</div>

<div id="content" class="site-content ros">
    <div class="layout">
        <div class="grid-container">
            <div class="grid-x grid-margin-x">

                <div class="cell medium-9">


                    <div id="primary" class="content-area">
                        <main id="main" class="site-main" role="main">
                            <div class="columns-3">
                                <div class="products grid-x grid-margin-x align-stretch">
                                    <div
                                        class="cell medium-6 large-4 post-144 product type-product status-publish has-post-thumbnail product_cat-abonnements last instock taxable shipping-taxable purchasable product-type-subscription">
                                        <a href="#" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                                            <img width="300" height="300"
                                                src="https://www.nouvelles-esthetiques.ca/wp-content/uploads/2018/10/magazine-2-ans-francias-1-300x300.jpg">
                                            <span class="price">
                                                <span class="woocommerce-Price-amount amount">95.00
                                                    <span class="woocommerce-Price-currencySymbol">$</span>
                                                </span>
                                                <span class="subscription-details"> pour 2 années</span>
                                            </span>
                                            <h3 class="produit-title">Abonnement 2 ans 12 numéros</h3>
                                            <div class="produit-excerpt">12 magazines | édition papier</div>
                                        </a>
                                        <a href="#"
                                            class="button product_type_subscription add_to_cart_button ajax_add_to_cart"
                                            data-product_id="144" data-product_sku=""
                                            aria-label="Ajouter “Abonnement 2 ans 12 numéros” à votre panier"
                                            rel="nofollow"><i class="fas fa-cart-plus"></i>&nbsp;&nbsp;M'abonner</a>
                                    </div>

                                    <div
                                        class="cell medium-6 large-4 post-144 product type-product status-publish has-post-thumbnail product_cat-abonnements last instock taxable shipping-taxable purchasable product-type-subscription">
                                        <a href="#" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                                            <img width="300" height="300"
                                                src="https://www.nouvelles-esthetiques.ca/wp-content/uploads/2018/10/magazine-2-ans-francias-1-300x300.jpg">
                                            <span class="price">
                                                <span class="woocommerce-Price-amount amount">95.00
                                                    <span class="woocommerce-Price-currencySymbol">$</span>
                                                </span>
                                                <span class="subscription-details"> pour 2 années</span>
                                            </span>
                                            <h3 class="produit-title">Abonnement 2 ans 12 numéros</h3>
                                            <div class="produit-excerpt">12 magazines | édition papier</div>
                                        </a>
                                        <a href="#"
                                            class="button product_type_subscription add_to_cart_button ajax_add_to_cart"
                                            data-product_id="144" data-product_sku=""
                                            aria-label="Ajouter “Abonnement 2 ans 12 numéros” à votre panier"
                                            rel="nofollow"><i class="fas fa-cart-plus"></i>&nbsp;&nbsp;M'abonner</a>
                                    </div>

                                    <div
                                        class="cell medium-6 large-4 post-144 product type-product status-publish has-post-thumbnail product_cat-abonnements last instock taxable shipping-taxable purchasable product-type-subscription">
                                        <a href="#" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                                            <img width="300" height="300"
                                                src="https://www.nouvelles-esthetiques.ca/wp-content/uploads/2018/10/magazine-2-ans-francias-1-300x300.jpg">
                                            <span class="price">
                                                <span class="woocommerce-Price-amount amount">95.00
                                                    <span class="woocommerce-Price-currencySymbol">$</span>
                                                </span>
                                                <span class="subscription-details"> pour 2 années</span>
                                            </span>
                                            <h3 class="produit-title">Abonnement 2 ans 12 numéros</h3>
                                            <div class="produit-excerpt">12 magazines | édition papier</div>
                                        </a>
                                        <a href="#"
                                            class="button product_type_subscription add_to_cart_button ajax_add_to_cart"
                                            data-product_id="144" data-product_sku=""
                                            aria-label="Ajouter “Abonnement 2 ans 12 numéros” à votre panier"
                                            rel="nofollow"><i class="fas fa-cart-plus"></i>&nbsp;&nbsp;M'abonner</a>
                                    </div>
                                </div>
                            </div>
                        </main>
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
