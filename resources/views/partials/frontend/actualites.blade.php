<!-- Services -->
<div id="nos-actualites">
    <div class="content-sm container">
        <div class="row">
            <div class="col-md-6 col-sm-offset-3">
            <h3 class="title margin-b-50 text-center">Nos Actualites
                    <span>mapaf</span>
                </h3>
            </div>
        </div>
        <div class="row">
            <?php $actualites = last_actualites(); ?>
            <!-- Latest Products -->
            @foreach($actualites as $key => $act)
            @if($loop->first)
                <div class="col-md-7 sm-margin-b-50">
                    <a href="{{ route('actualite.details', $act->slug) }}">
                        <div class="post post-first">
                            <div class="post-img figure">
                                <img class="img-responsive" src="<?php if(!empty($act->image)) echo asset('storage/'.$act->image); else echo 'http://via.placeholder.com/332x211?text='; ?>"
                                    alt="Latest Products Image">
                            </div>
                            <div class="post-description">
                                <span class="title-category">{{ date('M d, Y', strtotime($act->created_at)) }}</span>
                                <h4>{{ $act->title }}</h4>
                                <div class="margin-b-40 content-desc">{!! \Illuminate\Support\Str::words($act->description, 15, ' ...') !!}</div>
                                <a href="{{ route('actualite.details', [ app()->getLocale() , $act->slug ]) }}" class="more-detail"> <i class="ico ico-arrow-right"></i> Lire la suite</a>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-5 row-no-padding sm-margin-b-50">
                @else
                    <a href="{{ route('actualite.details', [ app()->getLocale(), $act->slug ]) }}">
                        <div class="post post-opt clearfix margin-b-30">
                            <div class="col-md-6">
                                <div class="post-img figure">
                                    <img class="img-responsive" src="<?php if(!empty($act->image)) echo asset('storage/'.$act->image); else echo 'http://via.placeholder.com/332x211?text='; ?>"
                                        alt="Latest Products Image">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="post-description">
                                    <h4>{{ $act->title }}</h4>
                                    <div class="margin-b-40 content-desc visible-md-block visible-lg-block">{!! \Illuminate\Support\Str::words($act->description, 7, ' ...') !!}</div>
                                    <div class="margin-b-40 content-desc visible-sm-block visible-xs-block">{!! \Illuminate\Support\Str::words($act->description, 15, ' ...') !!}</div>
                                    <a href="{{ route('actualite.details',[ app()->getLocale() , $act->slug]) }}" class="more-detail"> <i class="ico ico-arrow-right"></i> Lire la suite</a>
                                </div>
                            </div>
                        </div>
                    </a>
                @endif
            @endforeach
            </div>
            <!-- End Latest Products -->
        </div>
    </div>
</div>
<!-- End Services -->
