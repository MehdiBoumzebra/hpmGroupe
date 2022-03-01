<div class="cbp-l-project-title">{{ $project->getTranslatedAttribute('title' , \App::getLocale() , 'fr') }}</div>
<!-- <div class="cbp-l-project-subtitle">by Paul Flavius Nechita</div> -->
@if(count($projectImages) > 0)
<div class="cbp-slider">
    <ul class="cbp-slider-wrap">
        @foreach($projectImages as $img)
            <li class="cbp-slider-item">
                <img src="{{ asset($img['url']) }}" alt="{{ $project->title }}">
            </li>
        @endforeach
    </ul>
</div>
@else
    <div class="cbp-cover text-center">
        <img src="{{ asset('storage/'.$project->cover) }}" alt="{{ $project->title }}" class="img-fluid">
    </div>
@endif
<div class="cbp-l-project-container">
    <div class="cbp-l-project-desc">
        <div class="cbp-l-project-desc-title"><span>{{ trans('projet.description') }}</span></div>
        <div class="cbp-l-project-desc-text">{!! $project->getTranslatedAttribute('description' , \App::getLocale() , 'fr') !!}</div>
        <div class="cbp-l-project-desc-title"><span>{{ trans('projet.ourmission') }}</span></div>
        <div class="cbp-l-project-desc-text">{!! $project->getTranslatedAttribute('notre_mission' , \App::getLocale() , 'fr') !!}</div>
    </div>

    <div class="cbp-l-project-details">
        <div class="cbp-l-project-details-title"><span>{{ trans('projet.detailprojet') }}</span></div>
        <table class="table">
            @if(isset($project->client) && !empty($project->client))
            <tr>
                <td> <strong>Client</strong> </td>
                <td colspan="2">{{ $project->getTranslatedAttribute('client' , \App::getLocale() , 'fr') }}</td>
            </tr>
            @endif
            @if(isset($project->architecte) && !empty($project->architecte))
            <tr>
                <td> <strong>{{ trans('projet.architecte') }}</strong> </td>
                <td colspan="2">{{ $project->getTranslatedAttribute('architecte' , \App::getLocale() , 'fr') }}</td>
            </tr>
            @endif
            @if(isset($project->surface) && !empty($project->surface))
            <tr>
                <td> <strong>{{ trans('projet.surface') }}</strong> </td>
                <td colspan="2">{{ $project->getTranslatedAttribute('surface' , \App::getLocale() , 'fr') }}</td>
            </tr>
            @endif
            @if(isset($project->date) && !empty($project->date))
            <tr>
                <td> <strong>{{ trans('projet.date') }}</strong> </td>
                <td colspan="2">{{ date_format(date_create($project->date),"d M Y") }}</td>
            </tr>
            @endif
            <tr>
                <td> <strong>{{ trans('projet.categorie') }}</strong> </td>
                <td colspan="2">
                    @php
                        foreach($project->categories()->get() as $key => $item){
                            $trans_slug = $item->getTranslatedAttribute('name' , \App::getLocale() , 'fr');
                            echo $key == 0 ?  $trans_slug : ', '.$trans_slug ;
                        }
                        //$arr = []; foreach( $project->getSlugsByName() as $cat ) { $arr[] = \Str::singular($cat); }
                        //echo implode(', ', $project->getSlugs()); 
                    @endphp
                </td>
            </tr>
            @if(isset($project->status) && !empty($project->status))
            <tr>
                <td> <strong>{{ trans('projet.statut') }}</strong> </td>
                <td colspan="2">{{ $project->status == 'PROJET LIVRE' ? trans('projet.projet_livre') : trans('projet.projet_en_cours') }}</td>
            </tr>
            @endif
        </table>
        @if(isset($project->url_project) && !empty($project->url_project))
            <a href="{{ $project->url_project }}" target="_blank" class="cbp-l-project-details-visit">visit the project</a>
        @endif
    </div>
</div>
