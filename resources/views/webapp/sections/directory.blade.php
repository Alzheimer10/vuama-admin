@extends('layouts.master')
@section('title', 'Perfil')

@section('styles')
    <!-- BEGIN PAGE LEVEL STYLES -->
    <style>
        .jumbotron .container{
            position: relative;
        }
        .img-jumbotron{
            width: 100%;
        }
        .jumbotron-header{
            background: #355c7d;
            background: /* gradient overlay */ linear-gradient( to left, rgba(229, 84, 51, 0.72), /* #171616 */ rgba(74, 59, 67, 0.61) /* #4a3b44 */ ), /* bottom image */ url(https://cdn.stocksnap.io/img-thumbs/960w/VPYPAS4FVT.jpg) no-repeat left top;
            background-size: cover;
            z-index: 0;
            border-radius: 0px;
        }
        .jumbotron-header *{
            color: white !important
        }
    </style>
<style>

</style>
    <!-- END PAGE LEVEL PLUGINS -->
@stop

@section('content')
    <div class="jumbotron jumbotron-header pb-0">
        <div class="container">
            <div class="row align-items-center h-100 h-100">
                
            <div class="col-4 mx-auto">                    
                <img src="http://themeinnovation.com/demo2/html/build-up/img/home1/service-banner.png" class="img-jumbotron">
            </div>
            <div class="col-8 mx-auto">
                <a href="#" class="visible-xs" data-toggle="offcanvas"><i class="fa fa-lg fa-reorder"></i></a>
                <h1>Hello, world!</h1>
                <p> This is an example to show the potential of an offcanvas layout pattern in Bootstrap. Try some responsive-range viewport sizes to see it in action.</p>
            </div>
            </div>
        </div>
    </div>
    <section class="prem-5">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-8">
                    <div class="row">
                        @forelse ($users as $user)
                            <div class="col-xs-6 col-md-4 col-lg-6 mb-5">
                                <div class="row border-bottom">
                                    <div class="car-img col-3">
                                        <a href="#">
                                            <img class="rounded-circle" src="{{ asset('avatars/default_avatar.png') }}" alt="perfil" width="100%">
                                        </a>
                                    </div>
                                    <div class="col-9">
                                        <h1 class="mb-0" style="font-size: 100%"><a href="{{ route('perfil', $user->id) }}">{{$user->fullname()}}</a></h1>
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item">
                                                <span class="badge badge-dark badge-pill">ARQUITECTO</span>
                                            </li>
                                            <li class="list-inline-item"><i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </li>
                                        </ul>
                                        <p  class="mt-0 mb-0">dipi labore fuga corporis sapiente exercitationem, quas quae. Odit, unde.</p>
                                    </div>
                                </div>
                            </div>
                        @empty
                        @endforelse
                    </div>
                </div>
                <div class="col-xs-12 col-md-4">
                    <div class="jumbotron pt-5 pb-5 mb-3 text-center">
                        <h3 class="mb-0">ANUNCIO</h3>
                        {{-- <p class="mb-0 mt-0">A simple example using the 4.0 Responsive Navbar to create a vertical menu that will switch to a mobile, collapsible menu.</p> --}}
                    </div>
                    <div class="jumbotron pt-5 pb-5 mb-3 text-center">
                        <h3 class="mb-0">ANUNCIO</h3>
                        {{-- <p class="mb-0 mt-0">A simple example using the 4.0 Responsive Navbar to create a vertical menu that will switch to a mobile, collapsible menu.</p> --}}
                    </div>
                    <div class="jumbotron pt-5 pb-5 mb-3 text-center">
                        <h3 class="mb-0">ANUNCIO</h3>
                        {{-- <p class="mb-0 mt-0">A simple example using the 4.0 Responsive Navbar to create a vertical menu that will switch to a mobile, collapsible menu.</p> --}}
                    </div>

                    <hr>
                    <div class="row ml-1">              
                        <ul class="tags">
                            @forelse($services as $service)
                                <li class="tag">
                                    <a href="#"><span class="name">{{ $service->name }}</span>
                                        <span class="extra">480</span>
                                    </a>
                                </li>
                            @empty
                            @endforelse
                        </ul>
                    </div>
                    <hr>
                </div>
            </div>
        </div>
    </div>
@stop