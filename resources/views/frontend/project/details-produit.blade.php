@extends('layouts.frontend', ['title' => 'details-produit', 'banner' => true])
@section('content')
        <!-- Details Produts -->
        <div id="details-products" class="margin-t-70">
            <div class="content-md container">
                @if($produit != null)
                <div class="row">
                    <div class="col-md-12">
                        @if(isset($produit->marque->image))
                            <img class="logo-brand" src="@if($produit->marque->image) {{ asset('storage/'.$produit->marque->image) }} @else {{ 'https://via.placeholder.com/161x99?text=marques' }} @endif" alt="{{ $produit->marque->name }}" />
                        @else
                            <h3 class="title margin-b-30 text-center"> @if(isset($produit->marque->name)) {{ $produit->marque->name }} @else {{ 'recherche' }} @endif</h3>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div id="projets-content" class="@if(!$productImages) {{ 'one-img' }} @endif">
                            @if($productImages)
                                <div class="swiper-container gallery-top">
                                    <div class="swiper-wrapper">
                                        @foreach($productImages as $image)
                                        <div class="swiper-slide">
                                            <div class="swiper-slide-container"><img src="{{ asset($image['url']) }}" alt="{{ $image['name'] }}" class="img-responsive"></div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="swiper-container gallery-thumbs fixed-thumbs">
                                    <div class="swiper-wrapper">
                                        @foreach($productImages as $thumb)
                                            <div class="swiper-slide">
                                                <div class="swiper-slide-container"><img src="{{ asset($thumb['thumb_url']) }}" alt="{{ $thumb['name'] }}" class="img-responsive"></div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            @else
                            <img src="@if($produit->image && \Illuminate\Support\Facades\Storage::exists($produit->image)) {{ asset('storage/'.$produit->image) }} @else {{ asset('assets_frontend/img/products/p-01.jpg') }} @endif" alt="{{ $produit->title }}" class="img-responsive one-img">
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="box-details-product margin-t-50">
                            <strong class="name-product">{{ $produit->title }}</strong>
                            @if(isset($produit->url_video) && !empty($produit->url_video))
                                <a class="popup-youtube youtube-icon" href="{{ $produit->url_video }}"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                            @endif
                            <p class="details-product">
                                <span>
                                    <strong class="margin-r-15 margin-r-15">Reference</strong>{{ $produit->reference }}</span>
                            </p>
                            {!! $produit->description !!}
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
        <!-- End Details Produts -->
        @include('partials.frontend.marques')
@endsection