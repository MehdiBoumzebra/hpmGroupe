@extends('layouts.frontend', ['title' => 'Métiers'])
@section('content')

<section class="app-banner metiers-page">
    <div class="container">
        <div class="row">
            <div class="col-md-7 text-white">
                <p class="h2 banner-title">{{ __('metiers.page_title') }}</p>
                <p class="banner-content">{{ __('metiers.page_subtitle') }}</p>
            </div>
        </div>
    </div>
</section>


<section id="metier-section-1" class="section-mt-ouvrage position-relative">
    <div class="container">
        <div class="row">
            <div class="col-md-8 py-5 block-content">
                <h3 class="block-title">{{ __('metiers.section_1_title') }}</h3>
                <p>{{ __('metiers.section_1_subtitle') }}</p>
                <p>{{ __('metiers.section_1_subtitle_2') }}</p>
                <div id="accordion">
                    @if( trans('metiers.section_1_list_1_title') != 'empty' )
                    <h5 class="accordion-title collapsed" data-toggle="collapse" id="headingOne" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                        {{ __('metiers.section_1_list_1_title') }}
                    </h5>
                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                        <ul class="ml-4">
                            {!! __('metiers.section_1_list_1_item_1') != 'empty' ? '<li>'.__('metiers.section_1_list_1_item_1').'</li>' : '' ; !!}
                            {!! __('metiers.section_1_list_1_item_2') != 'empty' ? '<li>'.__('metiers.section_1_list_1_item_2').'</li>' : '' ;  !!}
                            {!! __('metiers.section_1_list_1_item_3') != 'empty' ? '<li>'.__('metiers.section_1_list_1_item_3').'</li>' : '' ;  !!}
                            {!! __('metiers.section_1_list_1_item_4') != 'empty' ? '<li>'.__('metiers.section_1_list_1_item_4').'</li>' : '' ;  !!}
                            {!! __('metiers.section_1_list_1_item_5') != 'empty' ? '<li>'.__('metiers.section_1_list_1_item_5').'</li>' : '' ;  !!}
                            {!! __('metiers.section_1_list_1_item_6') != 'empty' ? '<li>'.__('metiers.section_1_list_1_item_6').'</li>' : '' ;  !!}
                        </ul>
                    </div>
                    @endif

                    @if( trans('metiers.section_1_list_2_title') != 'empty' )
                    <h5 class="accordion-title collapsed" data-toggle="collapse" id="headingTow" data-target="#collapseTow" aria-expanded="false" aria-controls="collapseTow">
                        {{ __('metiers.section_1_list_2_title') }}
                    </h5>
                    <div id="collapseTow" class="collapse" aria-labelledby="headingTow" data-parent="#accordion">
                        <ul class="ml-4">
                            {!! __('metiers.section_1_list_2_item_1') != 'empty' ? '<li>'.__('metiers.section_1_list_2_item_1').'</li>' : '' ; !!}
                            {!! __('metiers.section_1_list_2_item_2') != 'empty' ? '<li>'.__('metiers.section_1_list_2_item_2').'</li>' : '' ; !!}
                            {!! __('metiers.section_1_list_2_item_3') != 'empty' ? '<li>'.__('metiers.section_1_list_2_item_3').'</li>' : '' ; !!}
                            {!! __('metiers.section_1_list_2_item_4') != 'empty' ? '<li>'.__('metiers.section_1_list_2_item_4').'</li>' : '' ; !!}
                            {!! __('metiers.section_1_list_2_item_5') != 'empty' ? '<li>'.__('metiers.section_1_list_2_item_5').'</li>' : '' ; !!}
                            {!! __('metiers.section_1_list_2_item_6') != 'empty' ? '<li>'.__('metiers.section_1_list_2_item_6').'</li>' : '' ; !!}
                            {!! __('metiers.section_1_list_2_item_7') != 'empty' ? '<li>'.__('metiers.section_1_list_2_item_7').'</li>' : '' ; !!}
                        </ul>
                    </div>
                    @endif
                    
                    @if( trans('metiers.section_1_list_3_title') != 'empty' )
                    <h5 class="accordion-title collapsed" data-toggle="collapse" id="headingthre" data-target="#collapseThre" aria-expanded="false" aria-controls="collapseThre">
                        {{ __('metiers.section_1_list_3_title') }}
                    </h5>
                    <div id="collapseThre" class="collapse" aria-labelledby="headingthre" data-parent="#accordion">
                        <ul class="ml-4">
                            {!! __('metiers.section_1_list_3_item_1') != 'empty' ? '<li>'.__('metiers.section_1_list_3_item_1').'</li>' : '' ; !!}
                            {!! __('metiers.section_1_list_3_item_2') != 'empty' ? '<li>'.__('metiers.section_1_list_3_item_2').'</li>' : '' ; !!}
                            {!! __('metiers.section_1_list_3_item_3') != 'empty' ? '<li>'.__('metiers.section_1_list_3_item_3').'</li>' : '' ; !!}
                            {!! __('metiers.section_1_list_3_item_4') != 'empty' ? '<li>'.__('metiers.section_1_list_3_item_4').'</li>' : '' ; !!}
                            {!! __('metiers.section_1_list_3_item_5') != 'empty' ? '<li>'.__('metiers.section_1_list_3_item_5').'</li>' : '' ; !!}
                            {!! __('metiers.section_1_list_3_item_6') != 'empty' ? '<li>'.__('metiers.section_1_list_3_item_6').'</li>' : '' ; !!}
                            {!! __('metiers.section_1_list_3_item_7') != 'empty' ? '<li>'.__('metiers.section_1_list_3_item_7').'</li>' : '' ; !!}
                            {!! __('metiers.section_1_list_3_item_8') != 'empty' ? '<li>'.__('metiers.section_1_list_3_item_8').'</li>' : '' ; !!}
                        </ul>
                    </div>
                    @endif

                    @if( trans('metiers.section_1_list_4_title') != 'empty' )
                    <h5 class="accordion-title collapsed" data-toggle="collapse" id="headingFor" data-target="#collapseFor" aria-expanded="false" aria-controls="collapseFor">
                        {{ __('metiers.section_1_list_4_title') }}
                    </h5>
                    <div id="collapseFor" class="collapse" aria-labelledby="headingFor" data-parent="#accordion">
                        <ul class="ml-4">
                            {!! __('metiers.section_1_list_4_item_1') != 'empty' ? '<li>'.__('metiers.section_1_list_4_item_1').'</li>' : '' ; !!}</li>
                            {!! __('metiers.section_1_list_4_item_2') != 'empty' ? '<li>'.__('metiers.section_1_list_4_item_2').'</li>' : '' ; !!}</li>
                            {!! __('metiers.section_1_list_4_item_3') != 'empty' ? '<li>'.__('metiers.section_1_list_4_item_3').'</li>' : '' ; !!}</li>
                            {!! __('metiers.section_1_list_4_item_4') != 'empty' ? '<li>'.__('metiers.section_1_list_4_item_4').'</li>' : '' ; !!}</li>
                            {!! __('metiers.section_1_list_4_item_5') != 'empty' ? '<li>'.__('metiers.section_1_list_4_item_5').'</li>' : '' ; !!}</li>
                        </ul>
                    </div>
                    @endif
                </div>
            </div>
            <div class="col-md-4  out-right h-100">
                <div class="imgeblock w-100" style="background-image: url({{ asset('asset/img/maitrise/slide01.jpg')}});"></div>
            </div>
        </div>
    </div>
</section>

@if( trans('metiers.section_2_title') != 'empty' )
<section id="metier-section-2" class="section-mt-ouvrageDe position-relative">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8  out-left h-100">
                <div class="imgeblock w-100 h-100" style="background-image: url({{ asset('asset/img/maitrise/slide2.jpg')}});"></div>
            </div>
            <div class="col-md-7 py-4 px-4 block-content  ml-auto my-md-5 my-0">
                <div class="block-wrapper">
                    @if(!in_array(trans('metiers.section_2_title') , [ 'empty' , 'Empty' ] ))
                    <h3 class="block-title">{!! __('metiers.section_2_title') !!}</h3>
                    @endif
                    @if(!in_array(trans('metiers.section_2_subtitle') , [ 'empty' , 'Empty' ] ))
                    <p class="block-test">{!! __('metiers.section_2_subtitle') !!}</p>
                    @endif
                    <p>{!! __('metiers.section_2_list_1_title') !!}<br>
                        <strong>{!! __('metiers.section_2_list_1_item_1') !!}</strong><br>
                        <strong>{!! __('metiers.section_2_list_1_item_2') !!}</strong><br>
                        <strong>{!! __('metiers.section_2_list_1_item_3') !!}</strong><br>
                        <strong>{!! __('metiers.section_2_list_1_item_4') != 'empty' ? __('metiers.section_2_list_1_item_4') : '' ; !!}</strong></p>
                </div>
            </div>
        </div>
    </div>
</section>
@endif



<section id="metier-section-3" class="section-mt-ouvrage-oe position-relative">
    <div class="container">
        <div class="row">
            <div class="col-md-8 block-content">
                @if(!in_array(trans('metiers.section_3_title') , [ 'empty' , 'Empty' ] ))
                <h3 class="block-title">{{ __('metiers.section_3_title') }}</h3>
                @endif
                @if(!in_array(trans('metiers.section_3_subtitle') , [ 'empty' , 'Empty' ] ))
                <p>{!! __('metiers.section_3_subtitle') !!}</p>
                @endif
                <div id="accordion-2">
                    @if( trans('metiers.section_3_list_1_title') != 'empty' )
                    <h5 class="accordion-title collapsed" data-toggle="collapse" id="heading2One" data-target="#collapse2One" aria-expanded="false" aria-controls="collapse2One">
                        {!! __('metiers.section_3_list_1_title') !!}
                    </h5>
                    <div id="collapse2One" class="collapse" aria-labelledby="heading2One" data-parent="#accordion-2">
                        <ul class="ml-4">
                            <li>
                                {!! __('metiers.section_3_list_1_item_1') != 'empty' ? __('metiers.section_3_list_1_item_1') : '' ; !!}
                                @if( (!in_array(trans('metiers.section_3_list_1_item_1_1') , [ 'empty' , 'Empty' ])) && (!in_array(trans('metiers.section_3_list_1_item_1_2') , [ 'empty' , 'Empty' ])) )
                                <ul class="ml-4">
                                    {!! __('metiers.section_3_list_1_item_1_1') != 'empty' ? '<li>'.__('metiers.section_3_list_1_item_1_1').'</li>' : '' ; !!}
                                    {!! __('metiers.section_3_list_1_item_1_2') != 'empty' ? '<li>'.__('metiers.section_3_list_1_item_1_2').'</li>' : '' ; !!}
                                </ul>
                                @endif
                            </li>
                            {!! __('metiers.section_3_list_1_item_2') != 'empty' ? '<li>'.__('metiers.section_3_list_1_item_2').'</li>' : '' ; !!}
                            {!! __('metiers.section_3_list_1_item_3') != 'empty' ? '<li>'.__('metiers.section_3_list_1_item_3').'</li>' : '' ; !!}
                            {!! __('metiers.section_3_list_1_item_4') != 'empty' ? '<li>'.__('metiers.section_3_list_1_item_4').'</li>' : '' ; !!}
                            {!! __('metiers.section_3_list_1_item_5') != 'empty' ? '<li>'.__('metiers.section_3_list_1_item_5').'</li>' : '' ; !!}
                        </ul>
                    </div>
                    @endif

                    @if(!in_array(trans('metiers.section_3_list_2_title') , [ 'empty' , 'Empty' ] ))
                    <h5 class="accordion-title collapsed" data-toggle="collapse" id="heading2Tow" data-target="#collapse2Tow" aria-expanded="false" aria-controls="collapse2Tow">
                        {!! __('metiers.section_3_list_2_title') !!}
                    </h5>
                    <div id="collapse2Tow" class="collapse" aria-labelledby="heading2Tow" data-parent="#accordion-2">
                        <ul class="ml-4">
                            {!! __('metiers.section_3_list_2_item_1') != 'empty' ? '<li>'.__('metiers.section_3_list_2_item_1').'</li>' : '' ; !!}
                            {!! __('metiers.section_3_list_2_item_2') != 'empty' ? '<li>'.__('metiers.section_3_list_2_item_2').'</li>' : '' ; !!}
                            {!! __('metiers.section_3_list_2_item_3') != 'empty' ? '<li>'.__('metiers.section_3_list_2_item_3').'</li>' : '' ; !!}
                            {!! __('metiers.section_3_list_2_item_4') != 'empty' ? '<li>'.__('metiers.section_3_list_2_item_4').'</li>' : '' ; !!}
                            {!! __('metiers.section_3_list_2_item_5') != 'empty' ? '<li>'.__('metiers.section_3_list_2_item_5').'</li>' : '' ; !!}
                            {!! __('metiers.section_3_list_2_item_6') != 'empty' ? '<li>'.__('metiers.section_3_list_2_item_6').'</li>' : '' ; !!}
                            {!! __('metiers.section_3_list_2_item_7') != 'empty' ? '<li>'.__('metiers.section_3_list_2_item_7').'</li>' : '' ; !!}
                        </ul>
                    </div>
                    @endif
                    
                    @if(!in_array(trans('metiers.section_3_list_3_title') , [ 'empty' , 'Empty' ] ))
                    <h5 class="accordion-title collapsed" data-toggle="collapse" id="heading2thre" data-target="#collapse2Thre" aria-expanded="false" aria-controls="collapse2Thre">
                        {!! __('metiers.section_3_list_3_title') !!}
                    </h5>
                    <div id="collapse2Thre" class="collapse" aria-labelledby="heading2thre" data-parent="#accordion-2">
                        <ul class="ml-4">
                            {!! __('metiers.section_3_list_3_item_1') != 'empty' ? '<li>'.__('metiers.section_3_list_3_item_1').'</li>' : '' ; !!}
                            {!! __('metiers.section_3_list_3_item_2') != 'empty' ? '<li>'.__('metiers.section_3_list_3_item_2').'</li>' : '' ; !!}
                            {!! __('metiers.section_3_list_3_item_3') != 'empty' ? '<li>'.__('metiers.section_3_list_3_item_3').'</li>' : '' ; !!}
                            {!! __('metiers.section_3_list_3_item_4') != 'empty' ? '<li>'.__('metiers.section_3_list_3_item_4').'</li>' : '' ; !!}
                            {!! __('metiers.section_3_list_3_item_5') != 'empty' ? '<li>'.__('metiers.section_3_list_3_item_5').'</li>' : '' ; !!}
                            {!! __('metiers.section_3_list_3_item_6') != 'empty' ? '<li>'.__('metiers.section_3_list_3_item_6').'</li>' : '' ; !!}
                        </ul>
                    </div>
                    @endif
                    
                    @if(!in_array(trans('metiers.section_3_list_4_title') , [ 'empty' , 'Empty' ] ))
                    <h5 class="accordion-title collapsed" data-toggle="collapse" id="heading2For" data-target="#collapse2For" aria-expanded="false" aria-controls="collapse2For">
                        {!! __('metiers.section_3_list_4_title') !!}
                    </h5>
                    <div id="collapse2For" class="collapse" aria-labelledby="heading2For" data-parent="#accordion-2">
                        <ul class="ml-4">
                            {!! __('metiers.section_3_list_4_item_1') != 'empty' ? '<li>'.__('metiers.section_3_list_4_item_1').'</li>' : '' ; !!}
                            {!! __('metiers.section_3_list_4_item_2') != 'empty' ? '<li>'.__('metiers.section_3_list_4_item_2').'</li>' : '' ; !!}
                            {!! __('metiers.section_3_list_4_item_3') != 'empty' ? '<li>'.__('metiers.section_3_list_4_item_3').'</li>' : '' ; !!}
                            {!! __('metiers.section_3_list_4_item_4') != 'empty' ? '<li>'.__('metiers.section_3_list_4_item_4').'</li>' : '' ; !!}
                            {!! __('metiers.section_3_list_4_item_5') != 'empty' ? '<li>'.__('metiers.section_3_list_4_item_5').'</li>' : '' ; !!}
                        </ul>
                    </div>
                    @endif
                    
                    @if(!in_array(trans('metiers.section_3_list_5_title') , [ 'empty' , 'Empty' ] ))
                    <h5 class="accordion-title collapsed" data-toggle="collapse" id="heading2Five" data-target="#collapse2Five" aria-expanded="false" aria-controls="collapse2Five">
                        {!! __('metiers.section_3_list_5_title') !!}
                    </h5>
                    <div id="collapse2Five" class="collapse" aria-labelledby="heading2Five" data-parent="#accordion-2">
                        <ul class="ml-4">
                            {!! __('metiers.section_3_list_5_item_1') != 'empty' ? '<li>'.__('metiers.section_3_list_5_item_1').'</li>' : '' ; !!}
                            {!! __('metiers.section_3_list_5_item_2') != 'empty' ? '<li>'.__('metiers.section_3_list_5_item_2').'</li>' : '' ; !!}
                            {!! __('metiers.section_3_list_5_item_3') != 'empty' ? '<li>'.__('metiers.section_3_list_5_item_3').'</li>' : '' ; !!}
                            {!! __('metiers.section_3_list_5_item_4') != 'empty' ? '<li>'.__('metiers.section_3_list_5_item_4').'</li>' : '' ; !!}
                            {!! __('metiers.section_3_list_5_item_5') != 'empty' ? '<li>'.__('metiers.section_3_list_5_item_5').'</li>' : '' ; !!}
                            {!! __('metiers.section_3_list_5_item_6') != 'empty' ? '<li>'.__('metiers.section_3_list_5_item_6').'</li>' : '' ; !!}
                            {!! __('metiers.section_3_list_5_item_7') != 'empty' ? '<li>'.__('metiers.section_3_list_5_item_7').'</li>' : '' ; !!}
                            {!! __('metiers.section_3_list_5_item_8') != 'empty' ? '<li>'.__('metiers.section_3_list_5_item_8').'</li>' : '' ; !!}
                            
                        </ul>
                    </div>
                    @endif
                </div>
            </div>
            <div class="col-md-4  out-right h-100">
                <div class="imgeblock w-100" style="background-image: url({{ asset('asset/img/maitrise/slide3.jpg')}});"></div>
            </div>
        </div>
    </div>
</section>


@endsection
