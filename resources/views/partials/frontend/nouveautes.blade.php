<!-- Nouveautes -->
@php
$produits = getLastProduits();
@endphp
@if($produits != null)
<div id="nouveautes" class="hidden-xs">
    <div class="overlay">
        <div class="content-sm container">
            <div class="col-md-12">
                <h3 class="title margin-b-50 text-center">nouveautés
                    <span>découvrez notre nouveautés</span>
                </h3>
            </div>
            <!-- Swiper Nouveautes -->
            <div class="swiper-slider swiper-nouveautes">
                <!-- Swiper Wrapper -->
                <div class="swiper-wrapper">
                    @foreach($produits as $produit)
                    <div class="swiper-slide">
                        <div class="swiper-item-news">
                            <a href="{{ route('produit.details', $produit->slug) }}" class="d-block">
                                <div class="box-img-news">
                                    <img src="@if($produit->image && \Illuminate\Support\Facades\Storage::exists($produit->image)) {{ asset('storage/'.$produit->image) }} @else {{ 'https://via.placeholder.com/800x800?text=produit' }} @endif"
                                        alt="{{ $produit->reference }}" class="img-responsive">
                                </div>
                                <span>{{ $produit->title }}</span>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
                <!-- End Swiper Wrapper -->
            </div>
            <!-- If we need navigation buttons -->
            <!-- End Swiper Nouveautes -->
        </div>
    </div>
</div>
<div id="nouveautes-tabs" class="visible-xs-block">
    <div class="overlay">
        <div class="content-sm container">
            <div class="col-md-12">
                <h3 class="title margin-b-50 text-center">nouveautés
                    <span>découvrez notre nouveautés</span>
                </h3>
            </div>
            <!-- Swiper Nouveautes -->
            <div class="swiper-slider swiper-nouveautes">
                <!-- Swiper Wrapper -->
                <div class="swiper-wrapper">
                    @php $produits = $produits->toArray(); $count = count($produits); @endphp
                    @for ($i = 0; $i < $count ; $i += 4)
                        <div class="swiper-slide">
                            <div class="swiper-item-news">
                                <div class="row row-no-padding">
                                    @if($i < $count)
                                    <div class="col-xs-6">
                                        <a href="{{ route('produit.details', $produits[$i]['slug']) }}" class="d-block">
                                            <div class="box-img-news">
                                                <img src="@if($produits[$i]['image'] && \Illuminate\Support\Facades\Storage::exists($produits[$i]['image'])) {{ asset('storage/'.$produits[$i]['image']) }} @else {{ 'https://via.placeholder.com/800x800?text=produit' }} @endif"
                                                    alt="{{ $produits[$i]['reference'] }}" class="img-responsive">
                                            </div>
                                            <span>{{ $produits[$i]['title'] }}</span>
                                        </a>
                                    </div>
                                    @endif
                                    @if($i + 1 < $count)
                                    <div class="col-xs-6">
                                        <a href="{{ route('produit.details', $produits[$i + 1]['slug']) }}" class="d-block">
                                            <div class="box-img-news">
                                                <img src="@if($produits[$i + 1]['image'] && \Illuminate\Support\Facades\Storage::exists($produits[$i + 1]['image'])) {{ asset('storage/'.$produits[$i + 1]['image']) }} @else {{ 'https://via.placeholder.com/800x800?text=produit' }} @endif"
                                                    alt="{{ $produits[$i + 1]['reference'] }}" class="img-responsive">
                                            </div>
                                            <span>{{ $produits[$i + 1]['title'] }}</span>
                                        </a>
                                    </div>
                                    @endif
                                    @if($i + 2 < $count)
                                    <div class="col-xs-6">
                                        <a href="{{ route('produit.details', $produits[$i + 2]['slug']) }}" class="d-block">
                                            <div class="box-img-news">
                                                <img src="@if($produits[$i + 2]['image'] && \Illuminate\Support\Facades\Storage::exists($produits[$i + 2]['image'])) {{ asset('storage/'.$produits[$i + 2]['image']) }} @else {{ 'https://via.placeholder.com/800x800?text=produit' }} @endif"
                                                    alt="{{ $produits[$i + 2]['reference'] }}" class="img-responsive">
                                            </div>
                                            <span>{{ $produits[$i + 2]['title'] }}</span>
                                        </a>
                                    </div>
                                    @endif
                                    @if($i + 3 < $count)
                                    <div class="col-xs-6">
                                        <a href="{{ route('produit.details', $produits[$i + 3]['slug']) }}" class="d-block">
                                            <div class="box-img-news">
                                                <img src="@if($produits[$i + 3]['image'] && \Illuminate\Support\Facades\Storage::exists($produits[$i + 3]['image'])) {{ asset('storage/'.$produits[$i + 3]['image']) }} @else {{ 'https://via.placeholder.com/800x800?text=produit' }} @endif"
                                                    alt="{{ $produits[$i + 3]['reference'] }}" class="img-responsive">
                                            </div>
                                            <span>{{ $produits[$i + 3]['title'] }}</span>
                                        </a>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>
                <!-- End Swiper Wrapper -->
            </div>
            <!-- If we need navigation buttons -->
            <!-- End Swiper Nouveautes -->
        </div>
    </div>
</div>
@endif
<!-- End Nouveautes -->