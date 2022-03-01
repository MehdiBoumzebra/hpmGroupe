@php
$title = (!empty($title)) ? $title : 'produits';
@endphp
@extends('layouts.frontend', ['title' => $title, 'banner' => true ])
@section('content')
@include('partials.frontend.slide-child', ['parentCat' => strtolower($produit->categorieParent())])
<!-- Produts -->
<div id="produits" class="sm-margin-t-20">
    <div class="content-sm container">
        <div class="row">
            <div class="col-md-3">
                <form class="margin-b-30 form-filter">
                @php
                    $parents = categoriesParent(null);
                @endphp
                @if($parents != null)
                    @include('voyager::menu.categories-link', ['items' => $parents, 'id_marque' => null])
                @endif
                </form>
            </div>
            <div class="col-md-9">
                <div id="blok-ajax-loade">
                    <h2 id="{{ $produit->slug }}" class="title t-section margin-b-30 t-section">{{ $produit->title }}</h2>
                    {!! $produit->description !!}
                    <div class="zoom-gallery margin-t-40">
                        <div class="row">
                            @foreach($productImages as $img)
                            <div class="col-md-4">
                                <a href="{{ asset($img['url']) }}" class="gallery-img margin-b-20"
                                    title="{{ $produit->title }}">
                                    <img src="{{ asset($img['thumb_url']) }}" class="img-responsive">
                                </a>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="loader-bloc" style="display: none;"></div>
            </div>
        </div>
    </div>
</div>
<!-- End Produts -->
@include('partials.frontend.references')
@endsection

