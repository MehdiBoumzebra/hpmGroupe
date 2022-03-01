@extends('layouts.frontend', ['title' => 'Références'])
@section('content')

<section class="app-banner groupe-page">
    <div class="container">
        <div class="row">
            <div class="col-md-7 text-white">
                <p class="h2 banner-title">{{ __('projet.page_title') }}</p>
                <p class="banner-content">{{ __('projet.page_subtitle') }}</p>
            </div>
        </div>
    </div>
</section>


<section id="portfolio" class="py-5 section-references">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                {{-- <div id="js-filters-masonry-projects" class="cbp-l-filters-buttonCenter">
                    <div data-filter="*" class="cbp-filter-item-active cbp-filter-item">
                        All <div class="cbp-filter-counter"></div>
                    </div>
                    @if(isset($categories) && !empty($categories))
                        @foreach($categories as $categorie)
                        <div data-filter="{{ '.'.$categorie->slug }}" class="cbp-filter-item">
                            {{ $categorie->name }} <div class="cbp-filter-counter"></div>
                        </div>
                        @endforeach
                    @endif
                </div> --}}
                <div id="js-filters-masonry-projects" class="cbp-l-filters-buttonCenter references-filter row">
                    <div hidden data-filter="*" class="cbp-filter-item-active cbp-filter-item col">
                        <div class="cbp-filter-counter"></div>
                    </div>
                    @if(isset($categories) && !empty($categories))
                    @foreach($categories as $categorie)
                    <div data-filter="{{ '.'.$categorie->slug }}" class="cbp-filter-item filter-item px-4 col-md-2 col-sm-6 col-xs-6 m-0 text-center">
                        <div class="filter-icon py-4">
                            @php

                                if (isset($categorie->image)) {
                                    $img = json_decode($categorie->image);
                                    // dd($img[0]->download_link);
                                    $img = $img[0]->download_link;
                                }
                            @endphp
                            <img src="{{ isset($img) ? asset('storage/'.$img) : asset( 'asset/img/icons/international.svg') }}" class="img-fluid" />
                        </div>
                        <h3 class="filter-title">{{ $categorie->getTranslatedAttribute('name' , \App::getLocale() , 'fr') ?? 'Category' }}</h3>
                    </div>
                    @endforeach
                    @endif
                </div>
                <div id="js-grid-masonry-projects" class="cbp cbp-l-grid-masonry-projects">

                    @foreach($projects as $project)
                        <div class="cbp-item {{ implode(' ', $project->getSlugs()) }}">
                            <div class="cbp-caption">
                                <div class="cbp-caption-defaultWrap">
                                    <img src="{{ asset('storage/'.$project->cover) }}" alt="">
                                </div>
                                <div class="cbp-caption-activeWrap">
                                    <div class="cbp-l-caption-alignCenter">
                                        <div class="cbp-l-caption-body">
                                            <div class="cbp-l-caption-title"> {{ $project->getTranslatedAttribute('title' , \App::getLocale() , 'fr') }} </div>
                                            <a class="cbp-l-caption-link cbp-singlePage stretched-link" href="{{ route('projects.category', [ app()->getLocale(), $project->slug ] ) }}">{{ __('extra.plus_details') }} [+]</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
