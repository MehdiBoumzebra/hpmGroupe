
<section id="contacts">
    <div class="container-fluid px-0">
        <div class="map">
            <div class="row m-0">
                <div class="map-content order-md-1 order-2 col-md-4 ">
                    <img src="{{ asset('asset/img/hpm-logo.png') }}">
                    <p class="container mt-md-5 pt-md-2">
                        {{ __('extra.text_footer') }}
                    </p>
                    <p class="container">
                        40, rue Oued Fès – Agdal – 10 000 RABAT <br>
                        {{ __('extra.tel') }}. +212 (0)5 37 77 21 11 <br>
                        {{ __('extra.fax') }}. +212 (0)5 37 77 21 10
                    </p>
                </div>

                <div id="map" class="col-md-8 order-md-2 order-1 pos">
                    <div class="overlay"></div>
                </div>

            </div>
        </div>
    </div>
</section>

<footer>
    <p class="mb-4">Copyright &copy; 2020 HPM groupe | {{ __('extra.realisation_footer_link') }} : <a href="https://softsevenart.com">softsevenart.com</a></p>
</footer>

<div id="gotoTop" class="icon-angle-up"></div>
<script src="{{ asset('assets_frontend/js/jquery.js') }}"></script>
<script src="{{ asset('assets_frontend/js/plugins.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/js/all.min.js"></script>
<!-- load cubeportfolio -->
<script type="text/javascript" src="{{ asset('assets_frontend/js/jquery.cubeportfolio.min.js') }}"></script>
<!-- init cubeportfolio -->
<script type="text/javascript" src="{{ asset('assets_frontend/js/main.js') }}"></script>
<!--Mmenujs-->
<script type="text/javascript" src="{{ asset('asset/lib/mmenu/mmenu.js') }}"></script>
<!--<script type="text/javascript" src="{{ asset('asset/lib/mmenu/wrappers/bootstrap/mmenu.bootstrap.js') }}"></script>-->
<script type="text/javascript" src="{{ asset('asset/lib/mmenu/mmenu.polyfills.js') }}"></script>

<script type="text/javascript" src="{{ asset('asset/js/main.js') }}"></script>
<script src="{{ asset('assets_frontend/js/functions.js') }}"></script>
<script src="https://maps.google.com/maps/api/js?key=AIzaSyDc3-9Gfv_M4ubsF3gGlz6Xyd8VWCG8KPc"></script>
<script src="{{ asset('assets_frontend/js/jquery.gmap.js') }}"></script>
