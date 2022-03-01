@extends('layouts.frontend', ['title' => 'actualités', 'banner_img' => 'actualite.jpg'])
@section('content')
<div id="nos-actualites">
    <div class="content-sm container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="title margin-b-50 text-center">Actualiés
                    <span>mapaf depuis 1994</span>
                </h3>
            </div>
        </div>
        <div class="row row-fixe-height">
            @foreach($data as $act)
            <div class="col-sm-4 margin-b-70">
                <a href="{{ route('actualite.details', [app()->getLocale(), $act->slug]) }}">
                    <div class="post">
                        <div class="post-img figure">
                            <img class="img-responsive"
                                src="<?php if(!empty($act->cover)) echo asset('storage/'.$act->cover); else echo 'http://via.placeholder.com/332x211?text='; ?>"
                                alt="Latest Products Image">
                        </div>
                        <div class="post-description">
                            <span class="title-category">{{ date('M d, Y', strtotime($act->created_at)) }}</span>
                            <h4>{{ $act->title }}</h4>
                            <div class="margin-b-40 content-desc">{!! \Illuminate\Support\Str::words($act->description,
                                15, ' ...') !!}</div>
                            <a href="{{ route('actualite.details', [ app()->getLocale() ,$act->slug ]) }}" class="more-detail"> <i
                                    class="ico ico-arrow-right"></i> lire la suite</a>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
        <div class="text-center">
            {{ $data->links('vendor.pagination.bootstrap-4', ['href' => 'nos-actualites']) }}
        </div>
    </div>
</div>
@endsection
