@php
$title = (!empty($title)) ? $title : 'categories';
if(isset($categories) && !empty($categories)) $countCategories = $categories->count();
@endphp
@extends('layouts.frontend', ['title' => $title, 'banner' => true])
@section('content')
<!-- Produts -->
<div id="categories" class="margin-t-70">
    <div class="content-md container">
        <div class="row">
            <div class="col-md-12">
                @if(isset($info->image))
                    <img class="logo-brand" src="@if($info->image) {{ asset('storage/'.$info->image) }} @else {{ 'https://via.placeholder.com/161x99?text=marques' }} @endif" alt="{{ $info->name }}" />
                @else
                    <h3 class="title margin-b-30 text-center"> @if(isset($info->name)) {{ $info->name }} @else {{ 'recherche' }} @endif</h3>
                @endif
                <div class="description-wrap">
                    @if(isset($info->description))
                    {!! $info->description !!}
                    @else {!! '<p>Forte de son leadership commercial, de son
                        réseau de partenaires, du support de ses clients à l’intérieur du royaume et à
                        l’extérieur, Mapaf se positionne en tant qu’acteur majeur dans l’évolution du
                        marché marocain. Ceci se traduit dans son offre de produits et services, qui
                        couvrent aujourd’hui quasiment tous les segments du scolaire et du bureau.</p>' !!}
                    @endif
                </div>
            </div>
        </div>
        <div class="row row-fixe-height scrollspy">
            @if(isset($filterCategories))
                <div class="col-md-3">
                    <form @if($countCategories > 4){{'data-spy=affix id=filter-categorie'}}@endif class="margin-b-30 form-filter">
                        <div class="header-accordion">
                            <i class="fa fa-filter margin-r-5"></i>filter
                        </div>
                        @php
                            $parents = categoriesParent(null);
                        @endphp
                        @if($parents != null)
                            @include('voyager::menu.categories-link', ['items' => $parents, 'id_marque' => null])
                        @endif
                    </form>
                </div>
            @endif
            <div class="col-md-9">
                @if($countCategories > 0)
                @foreach($categories as $category)
                <div class="col-md-6 col-category">
                    <a href="@if(!$category->children->isEmpty()) {{ route('child.categories', [ app()->getLocale(), $category->slug ]) }} @else {{ route('produits.category', [app()->getLocale(), $category->slug]) }} @endif" class="d-block">
                        <div class="ribbon wow fadeInUp" data-wow-duration=".3" data-wow-delay=".2s">
                                <img src="@if($category->image) {{ voyager::image($category->image) }} @else {{ asset('assets_frontend/img/default-category.jpg') }} @endif" class="img-responsive" />
                                <span class="ribbon5">{{ $category->name }}</span>
                        </div>
                    </a>
                </div>
                @endforeach
                @endif
            </div>
        </div>
    </div>
</div>
<!-- End Produts -->
@endsection
