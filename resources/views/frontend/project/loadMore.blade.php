@php
    $nbPage = ceil(($count) / 6);
@endphp
@for($i=0; $i<$nbPage; $i++)
<div class="cbp-loadMore-block{{$i+1}}">
    @if(count($projects) > 0)
    @php $pos = $i*6 @endphp
    @foreach($projects as $key => $project)
    @if($key >= $pos && $key <= ($pos + 5))
        <div class="cbp-item @php echo implode(' ', $project->getSlugs()); @endphp">
            <div class="cbp-caption">
                <div class="cbp-caption-defaultWrap">
                    <img src="{{ asset('storage/'.$project->cover) }}" alt="">
                </div>
                <div class="cbp-caption-activeWrap">
                    <div class="cbp-l-caption-alignCenter">
                        <div class="cbp-l-caption-body">
                            <a href="{{ route('projects.category',[ app()->getLocale(), $project->slug]) }}"
                                class="cbp-singlePage cbp-l-caption-buttonLeft" rel="nofollow"><i class="icon-line2-info"></i></a>
                            @if(isset($project->url_video) && !empty($project->url_video))
                            <a href="{{ $project->url_video }}"
                                class="cbp-lightbox cbp-l-caption-buttonRight"
                                data-title="{{ $project->title }}"><i class="icon-video"></i></a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
    @endforeach
    @endif
</div>
@endfor
