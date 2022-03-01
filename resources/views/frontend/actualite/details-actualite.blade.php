@extends('layouts.frontend', ['title' => $actualite->title, 'banner_img' => 'actualite.jpg'])
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
        <div class="row">
            <div class="col-md-12">
                <h2 class="title-actualite">{{ $actualite->title }}</h2>
                <hr>
                <span class="date-actualite">{{ 'Publié le '.date('M d, Y', strtotime($actualite->created_at)) }}</span>
            </div>
            <div class="col-sm-8 col-xs-12 margin-b-30">
                <img class="img-responsive cover-actualite"
                    src="<?php if(!empty($actualite->image)) echo asset('storage/'.$actualite->image); else echo 'http://via.placeholder.com/332x211?text='; ?>"
                    alt="Latest Products Image">
                <div class="content-actualite">{!! $actualite->description !!} </div>
                @if(!empty($actualite->video))
                <hr>
                <h3 class="text-uppercase">Vidéo</h3>
                <iframe width="100%" height="315" src="{{'https://www.youtube.com/embed/'.$actualite->video}}"
                    frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
                @endif
            </div>
            <div class="col-sm-4 col-xs-12 margin-b-30">
                <?php $actualites = last_actualites(); ?>
                <ul class="media-list main-list">
                    @foreach($actualites as $act)
                    <li class="media">
                        <a class="pull-left" href="{{ route('actualite.details',[ app()->getLocale() , $act->slug ]) }}">
                            <img class="media-object img-responsive"
                                src="<?php if(!empty($act->cover)) echo asset('storage/'.$act->cover); else echo 'http://via.placeholder.com/150x90?text='; ?>"
                                alt="...">
                        </a>
                        <div class="media-body">
                        <a href="{{ route('actualite.details',[ app()->getLocale(), $act->slug]) }}">
                            <h4 class="media-heading">Lorem ipsum dolor asit amet</h4>
                            <span
                                class="date-media">{{ 'Publié le '.date('M d, Y', strtotime($act->created_at)) }}</span>
                            <div>{!! \Illuminate\Support\Str::words($act->description, 3, ' ...') !!}</div>
                        </a>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
