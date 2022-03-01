@extends('layouts.frontend', ['title' => 'panier'])
@section('content')
<div class="banner ros magazine">
        <div class="grid-container">
            <div class="grid-x">
                <div class="cell medium-9 section-title-wrapper">
                    <h1 class="section-title">PANIER</h1>
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
                                <div class="cell medium-12">
                                    <div class="woocommerce">
                                        <div class="woocommerce-notices-wrapper">
                                            <div class="woocommerce-message" role="alert">
                                                <a href="#" tabindex="1" class="button wc-forward">Poursuivre les achats</a> «Abonnement 1 an» a été ajouté à votre panier.
                                            </div>
                                        </div>
                                    </div>


                                    <form class="woocommerce-cart-form" action="#" method="post">
    
                                        <table class="shop_table shop_table_responsive cart woocommerce-cart-form__contents" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th class="product-remove">&nbsp;</th>
                                                    <th class="product-thumbnail">&nbsp;</th>
                                                    <th class="product-name">Produit</th>
                                                    <th class="product-price">Prix</th>
                                                    <th class="product-quantity">Quantité</th>
                                                    <th class="product-subtotal">Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="woocommerce-cart-form__cart-item cart_item">
                                                    <td class="product-remove">
                                                        <a href="#" class="remove" data-product_id="145">×</a>
                                                    </td>
                                                    <td class="product-thumbnail">
                                                        <a href="#">
                                                            <img width="300" height="300" src="{{ asset('assets_frontend/img/Academie-Edith-Serei.jpg') }}">
                                                        </a>
                                                    </td>
                                                    <td class="product-name">
                                                        <a href="#">Abonnement 1 an</a>
                                                    </td>
                                                    <td class="product-price">
                                                        <span class="woocommerce-Price-amount amount">55.00
                                                            <span class="woocommerce-Price-currencySymbol">$</span>
                                                        </span>
                                                        <span class="subscription-details"> pour 1 an</span>
                                                    </td>
                                                    <td class="product-quantity" data-title="Quantité">
                                                        <div class="quantity">
                                                            <label class="screen-reader-text">Quantité</label>
                                                            <input type="number" id="quantity_5c9f4309c7892" class="input-text qty text" step="1" min="0" max="" name="" value="1" title="Qté" size="4">
                                                        </div>
                                                    </td>

                                                    <td class="product-subtotal" data-title="Total">
                                                        <span class="subscription-price">
                                                            <span class="woocommerce-Price-amount amount">55.00
                                                                <span class="woocommerce-Price-currencySymbol">$</span>
                                                            </span>
                                                            <span class="subscription-details"> pour 1 an</span>
                                                        </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="6" class="actions">
                                                        <div class="coupon">
                                                            <label for="coupon_code">Code promo&nbsp;:</label>
                                                            <input type="text" name="coupon_code" class="input-text" id="coupon_code" value="" placeholder="Code promo">
                                                            <button type="submit" class="button" name="apply_coupon" value="Appliquer le code promo" style="margin-top: 15px;">Appliquer le code promo</button>
                                                        </div>
                                                        <button type="submit" class="button" name="update_cart" value="Mettre à jour le panier" disabled="">Mettre à jour le panier</button>
                                                        <input type="hidden" id="woocommerce-cart-nonce" name="woocommerce-cart-nonce" value="34c2fae455"><input type="hidden" name="_wp_http_referer" value="/panier/">
                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </form>


                                    <div class="cart-collaterals">
                                        <div class="cart_totals">
                                            <h2>Total panier</h2>
                                            <table cellspacing="0" class="shop_table shop_table_responsive">

                                                <tbody>
                                                    <tr class="cart-subtotal">
                                                        <th>Sous-total</th>
                                                        <td data-title="Sous-total">
                                                            <span class="woocommerce-Price-amount amount">55.00<span class="woocommerce-Price-currencySymbol">$</span></span>
                                                        </td>
                                                    </tr>
                                                    <tr class="order-total">
                                                        <th>Total</th>
                                                        <td data-title="Total">
                                                            <strong><span class="woocommerce-Price-amount amount">55.00<span class="woocommerce-Price-currencySymbol">$</span></span></strong>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <div class="wc-proceed-to-checkout">
                                                <a href="#" class="checkout-button button alt wc-forward">Valider la commande</a>
                                            </div>
                                        </div>
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