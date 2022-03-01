@extends('layouts.frontend', ['title' => 'Contact'])
@section('content')
@include('partials.frontend.slide-child', ['title_caption' => 'Contactez-n<span>o</span>us', 'image_cover' => 'assets_frontend/images/slider/swiper/contact.jpg'])
<!-- Contact -->
<section id="contact" class="content">
        <div class="container clearfix">
            <div class="postcontent nobottommargin">
                <div class="form-widget">
                    <div class="form-result">
                    </div>
                    <form class="nobottommargin" id="template-contactform" name="template-contactform"
                        action="{{ route('contact.send', app()->getLocale() ) }}" method="post">
                        @csrf
                        <div class="form-process"></div>
                        <div class="col_one_third">
                            <label for="template-contactform-name">Name <small>*</small></label>
                            <input type="text" id="template-contactform-name" name="nom" value=""
                                class="sm-form-control required" />
                        </div>
                        <div class="col_one_third">
                            <label for="template-contactform-email">Email <small>*</small></label>
                            <input type="email" id="template-contactform-email" name="email"
                                value="" class="required email sm-form-control" />
                        </div>
                        <div class="col_one_third col_last">
                            <label for="template-contactform-phone">Phone</label>
                            <input type="text" id="template-contactform-phone" name="phone"
                                value="" class="sm-form-control" />
                        </div>
                        <div class="clear"></div>
                        <div class="col_two_third">
                            <label for="template-contactform-subject">Subject <small>*</small></label>
                            <input type="text" id="template-contactform-subject" name="subject" value=""
                                class="required sm-form-control" />
                        </div>
                        <div class="col_one_third col_last">
                            <label for="template-contactform-service">Services</label>
                            <select id="template-contactform-service" name="service"
                                class="sm-form-control">
                                <option value="Demande d’information">Demande d’information</option>
                                <option value="Demande de formation">Demande de formation</option>
                                <option value="Contact presse">Contact presse</option>
                                <option value="Réclamation">Réclamation</option>
                            </select>
                        </div>
                        <div class="clear"></div>
                        <div class="col_full">
                            <label for="template-contactform-message">Message <small>*</small></label>
                            <textarea class="required sm-form-control" id="template-contactform-message"
                                name="message" rows="6" cols="30"></textarea>
                        </div>
                        <div class="col_full hidden">
                            <input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck"
                                value="" class="sm-form-control" />
                        </div>
                        <div class="col_full">
                            <button class="button button-3d nomargin" type="submit" id="template-contactform-submit"
                                name="template-contactform-submit" value="submit">Envoyer</button>
                        </div>
                        <input type="hidden" name="prefix" value="template-contactform-">
                    </form>
                </div>
            </div>

            <div class="sidebar col_last nobottommargin widget widget-adresse mt-0">
                <address>
                    <strong>Adresse :</strong><br>
                    239, BOULEVARD YACOUB EL MANSOUR <br>
                    1 er ETAGE N°1- CASABLANCA
                </address>
                <strong>Téléphone :</strong> <span>(+212) 5 22 94 14 95</span> <br>
                <strong>Email :</strong> <span>contact@Artcoustic.ma</span>
            </div>
        </div>
</section>
<!-- End Contact -->
@endsection
