@extends('layouts.frontend', ['title' => 'Marques', 'banner_img' => ''])

@section('content')

        <!-- Marques -->

        <div id="marques">

            <div class="content-md container">

                <div class="row">

                    <div class="col-md-12">

                        <h3 class="title margin-b-50 text-center">marques

                            <span>ils nous font confiance</span>

                        </h3>

                    </div>

                </div>

                @if($marques != null)

                    <div class="row">

                        @foreach($marques as $marque)

                            <div class="col-md-3">

                                <div class="box-marques margin-b-20">

                                    <a href="{{ route('produits.marque', [ app()->getLocale(), $marque->slug]) }}" class="d-flex">

                                        <img src="@if($marque->image) {{ asset('storage/'.$marque->image) }} @else {{ 'https://via.placeholder.com/161x99?text=marques' }} @endif" alt="{{ $marque->name }}" class="img-responsive">

                                    </a>

                                </div>

                            </div>

                        @endforeach

                    </div>

                @endif

            </div>

        </div>

        <!-- End Marques -->

@endsection
