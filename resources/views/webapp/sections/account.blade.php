@extends('layouts.master')
@section('title', 'Mi cuenta')

@section('styles')
    <!-- BEGIN PAGE LEVEL STYLES -->
    <style>
        .inputFile {
            width: 0.1px;
            height: 0.1px;
            opacity: 0;
            overflow: hidden;
            position: absolute;
            z-index: -1;
        }
        .inputFile + label {
            cursor: pointer; /* "hand" cursor */
        }
        input:disabled {
            background: transparent;
            border: none;
        }
        label{
            position: relative;
            font-size: .7rem;
        }
    </style>
<style>
</style>
    <!-- END PAGE LEVEL PLUGINS -->
@stop

@section('content')

    <section class="prem-5" id="perfil">
        <div class="container-fluid">
            <div class="row">
                    <!-- BEGIN PROFILE SIDEBAR -->
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 portler-card pt-1 pb-2">
                        <!-- PORTLET MAIN -->
                        <div class="profile-sidebar-portlet">
                            <!-- SIDEBAR USERPIC -->
                            <div class="profile-userpic text-center">
                            <!-- CHANGE AVATAR TAB -->
                                <avatar-component img="{{ asset(Auth::user()->avatar) }}" class="rounded-circle"></avatar-component>
                            <!-- END CHANGE AVATAR TAB -->
                            </div>
                            <!-- END SIDEBAR USERPIC -->
                            <!-- SIDEBAR USER TITLE -->
                            <div class="profile-usertitle">
                                <h3 class="text-center text-capitalize"> {{ Auth::user()->name }} {{ Auth::user()->lastname }} </h3>
                            </div>
                            <!-- END SIDEBAR USER TITLE -->

                        </div>
                        <!-- END PORTLET MAIN -->
                        <!-- PORTLET MAIN -->
                        <div class="portlet">
                            <!-- STAT -->
                            <div class="row">
                                <div class="col-6 br">
                                    <div class="text-uppercase text-center"> Proyectos </div>
                                    <div class="text-uppercase text-center"> 37 </div>
                                </div>
                                <div class="col-6">
                                    <div class="text-uppercase text-center"> Saldo </div>
                                    <div class="text-uppercase text-center"> 610$ </div>
                                </div>
                            </div>
                            <hr>
                            <!-- END STAT -->
                            <div class="p-1">
                                <div class="profile-desc-link">
                                    <i class="fa fa-globe"></i>
                                    <a href="#">www.keenthemes.com</a>
                                </div>
                                <div class="profile-desc-link">
                                    <i class="fab fa-twitter"></i>
                                    <a href="#">@keenthemes</a>
                                </div>
                                <div class="profile-desc-link">
                                    <i class="fab fa-facebook"></i>
                                    <a href="#">keenthemes</a>
                                </div>
                            </div>
                        </div>
                        <!-- END PORTLET MAIN -->
                    </div>
                    <account-component :user="{{ json_encode(\Auth::user()) }}"></account-component>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <!-- END PAGE LEVEL PLUGINS -->
    <script>

    </script>
@endsection
