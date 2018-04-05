@extends('layouts.master')
@section('title', 'Mi cuenta')

@section('styles')
    <style>
        @media screen and (max-width: 500px) {
            .fullname{
                font-size: 2rem
            }
        }
        .card-r{
            border-left: 6px solid #8d463d;
        }
        .nav-tabs.nav-tabs-perfil li{
            padding: 0px;
        }
        .nav-tabs.nav-tabs-perfil li a{
            display: block;
            padding: 10px 0px;
            text-align: center;
        }
    </style>
    <!-- END PAGE LEVEL PLUGINS -->
@stop

@section('content')

    <section class="prem-5" id="perfil">
        <div class="container">
            <div class="row align-items-center h-100 h-100">
                <div class="col-3 pl-0 pr-0 mx-auto">                    
                    <img src="{{ asset('avatars') }}/{{ $user->avatar }}" class="rounded-circle img-fluid">
                </div>
                <div class="col-9 mx-auto">
                    <h1 class="mb-0 text-capitalize fullname">{{ $user->fullname() }}</h1>
                    <li class="list-inline-item">
                        <span class="badge badge-dark badge-pill">ARQUITECTO</span>
                    </li>
                    <li class="list-inline-item"><i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </li>
                    <p class="mb-0"><i class="fas fa-map-marker-alt"></i> AmericanAirlines Arena, Biscayne Blvd, Miami, Florida, EE. UU.</p>
                    <button class="btn btn-info mt-y">Contactar</button>
                </div>
            </div>
            <hr>
            <div class="row">
                <h2 class="mb-0">Sobre mi</h2>
                <p>{{ $user->description }}</p>
            </div>

            <div class="row">
                <h2 class="col-12">Recomendaciones</h2>

                <div class="col-12 col-sm-6 mb-2 card-r">
                    <div class="row border-bottom pb-2">
                        <div class="col-12">
                            <img src="http://vuama.local/avatars/default_avatar.png" alt="perfil" class="rounded-circle img-fluid" width="100px" style="float: left;">
                            <h4 class="mb-0 mt-0">
                                Juan Carlos
                            </h4>
                            <p class="mt-0 mb-0">dipi labore fuga corporis sapiente exercitationem, quas quae. Odit, unde.</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 mb-2 card-r">
                    <div class="row border-bottom pb-2">
                        <div class="col-12">
                            <img src="http://vuama.local/avatars/default_avatar.png" alt="perfil" class="rounded-circle img-fluid" width="100px" style="float: left;">
                            <h4 class="mb-0 mt-0">
                                Maria soto
                            </h4>
                            <p class="mt-0 mb-0">dipi labore fuga corporis sapiente exercitationem, quas quae. Odit, unde.</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 mb-2 card-r">
                    <div class="row border-bottom pb-2">
                        <div class="col-12">
                            <img src="http://vuama.local/avatars/default_avatar.png" alt="perfil" class="rounded-circle img-fluid" width="100px" style="float: left;">
                            <h4 class="mb-0 mt-0">
                               Pedro romero
                            </h4>
                            <p class="mt-0 mb-0">dipi labore fuga corporis sapiente exercitationem, quas quae. Odit, unde.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <!-- BEGIN PAGE LEVEL PLUGINS -->
@endsection

