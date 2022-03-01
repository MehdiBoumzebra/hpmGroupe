<!--========== SLIDER ==========-->
<section id="slider" class="slider-element slider-parallax swiper_wrapper slider-child clearfix">
    <div class="slider-parallax-inner">
        <div class="swiper-container swiper-parent">
            <div class="swiper-wrapper">
                <div class="swiper-slide dark" style="background-image: url('{{ asset($image_cover ?? 'assets_frontend/images/slider/swiper/1.jpg') }}');">
                    <div class="container clearfix">
                        <div class="slider-caption slider-caption-center">
                            <p class="d-none d-sm-block" data-animate="fadeInUp" data-delay="200">We Work Hard,
                                We Play Hard</p>
                            <h2 data-animate="fadeInUp">{!! $title_caption ?? 'explore cre<span>a</span>tive minds' !!}</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <img src="{{ asset('assets_frontend/images/emotion-slider.png') }}" data-animate="fadeInLeft" data-delay="200" alt="emotion-slider"
            class="img-fluid emotion-slider">
        <div class="slide-ask dark">
            <a href="#" class="slide-button-more">Vous avez un projet ?</a>
        </div>
    </div>
</section>
<!--========== SLIDER ==========-->