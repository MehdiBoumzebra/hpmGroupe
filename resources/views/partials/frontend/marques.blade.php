<!-- Marques -->
@php
    $marques = getMarques();
@endphp
@if($marques != null)
<div id="marques" class="hidden-xs">

    <div class="content-xs container-fluid">

        <div class="col-md-12">

            <h3 class="title margin-b-50 text-center">marques

                <span>découvrez notre nouveautés</span>

            </h3>

        </div>

        <!-- Swiper Clients -->

        <div class="swiper-slider swiper-marques">

            <!-- Swiper Wrapper -->

            <div class="swiper-wrapper">

                @foreach($marques as $marque)

                    <div class="swiper-slide">
                        <a href="{{ route('produits.marque', [app()->getLocale() , $marque->slug ]) }}">
                            <img class="swiper-marques-img" src="@if($marque->image) {{ asset('storage/'.$marque->image) }} @else {{ 'https://via.placeholder.com/161x99?text=marque' }} @endif" alt="{{ $marque->name }}">
                        </a>
                    </div>

                @endforeach

            </div>

            <!-- End Swiper Wrapper -->

        </div>

        <!-- End Swiper Clients -->

    </div>

</div>
@endif
<!-- End Marques -->
