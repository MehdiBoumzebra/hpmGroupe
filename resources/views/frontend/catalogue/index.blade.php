@extends('layouts.frontend', ['title' => 'Catalogues', 'banner' => true])
@section('content')
<div id="nos-catalogues" class="margin-t-70">
    <div class="content-sm container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="title margin-b-50 text-center">Catalogues
                </h3>
            </div>
        </div>
        <div class="row row-fixe-height">
            @foreach($data as $catalogue)
            <div class="col-sm-4 margin-b-30">
                <div class="post wow fadeInUp" data-wow-duration=".3" data-wow-delay=".2s">
                    <div class="post-img figure">
                        <img class="img-responsive"
                            src="<?php if(!empty($catalogue->coverture)) echo asset('storage/'.$catalogue->coverture); else echo asset('assets_frontend/img/default-catalogue.jpg'); ?>"
                            alt="Latest Catalogue">
                        <a href="{{ asset('storage/'.json_decode($catalogue->file)[0]->download_link) }}" class="btn-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i>Télécharger</a>
                    </div>
                    <div class="post-description">
                        <span class="title-category">{{ date('M d, Y', strtotime($catalogue->created_at)) }}</span>
                        <h4>{{ $catalogue->title }}</h4>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
