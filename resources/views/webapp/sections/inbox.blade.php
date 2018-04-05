@extends('layouts.master-user')
@section('title', 'Bandeja')

@section('styles')
    <link href="webapp/apps/css/todo-2.min.css" rel="stylesheet" type="text/css">
@stop

@section('content')

<div class="page-content">

    <div class="page-bar">
        <ul class="page-breadcrumb">
            <li>
                <a href="{{ route('home') }}">Inicio</a>
                <i class="fa fa-circle"></i>
            </li>
            <li>
                <span>Mi Bandeja</span>
            </li>
        </ul>
        <div class="page-toolbar">
            <div id="dashboard-report-range" class="pull-right tooltips btn btn-sm">
                <span class="thin uppercase hidden-xs">February 14, 2018 - March 15, 2018</span>&nbsp;
            </div>
        </div>
    </div>
    <br>

    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN TODO SIDEBAR -->
            <div class="todo-ui">
                <div class="todo-sidebar">
                    <div class="portlet light ">
                        <div class="portlet-title">
                            <div class="caption">
                                <span class="caption-subject font-green-sharp bold uppercase">BANDEJA </span>
                            </div>
                            <div class="actions">
                                <div class="btn-group">
                                    <a class="btn green btn-circle btn-outline btn-sm todo-projects-config" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                        <i class="icon-settings"></i> &nbsp;
                                        <i class="fa fa-angle-down"></i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li>
                                            <a href="javascript:;"> New Project </a>
                                        </li>
                                        <li class="divider"> </li>
                                        <li>
                                            <a href="javascript:;"> Pending
                                                <span class="badge badge-danger"> 4 </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;"> Completed
                                                <span class="badge badge-success"> 12 </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;"> Overdue
                                                <span class="badge badge-warning"> 9 </span>
                                            </a>
                                        </li>
                                        <li class="divider"> </li>
                                        <li>
                                            <a href="javascript:;"> Archived Projects </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="portlet-body todo-project-list-content" style="height: auto;">
                            <div class="todo-project-list">
                                <ul class="nav nav-stacked">
                                    <li>
                                        <a href="javascript:;">
                                            <span class="badge badge-info"> 6 </span>  NOMBRE_PROYECTO </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <span class="badge badge-info"> 2 </span> NOMBRE_PROYECTO </a>
                                    </li>
                                    <li class="active">
                                        <a href="javascript:;">
                                            <span class="badge badge-success"> 3 </span> NOMBRE_PROYECTO </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <span class="badge badge-info"> 1 </span> NOMBRE_PROYECTO </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <span class="badge badge-danger"> 0 </span> NOMBRE_PROYECTO </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <span class="badge  badge-info"> 6 </span> NOMBRE_PROYECTO </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END TODO SIDEBAR -->
                <!-- BEGIN TODO CONTENT -->
                <div class="todo-content">
                    <div class="portlet light ">
                        <!-- PROJECT HEAD -->
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="icon-bar-chart font-green-sharp hide"></i>
                                <span class="caption-helper">NOMBRE_PROYECTO: </span> &nbsp;
                                <span class="caption-subject font-green-sharp bold uppercase"> Juan Carlos </span>
                            </div>
                            <div class="actions">
                                <div class="btn-group">
                                    <ul class="dropdown-menu pull-right">
                                        <li>
                                            <a href="javascript:;"> New Task </a>
                                        </li>
                                        <li class="divider"> </li>
                                        <li>
                                            <a href="javascript:;"> Pending
                                                <span class="badge badge-danger"> 4 </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;"> Completed
                                                <span class="badge badge-success"> 12 </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;"> Overdue
                                                <span class="badge badge-warning"> 9 </span>
                                            </a>
                                        </li>
                                        <li class="divider"> </li>
                                        <li>
                                            <a href="javascript:;"> Delete Project </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- end PROJECT HEAD -->
                        <div class="portlet-body">
                            <div class="row">
                                
                                <div class="todo-tasklist-devider"> </div>
                                <div class="col-xs-12">
                                    <form action="#" class="form-horizontal">
                                        <!-- TASK HEAD -->

                                        <!-- TASK COMMENTS -->
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <ul class="media-list">
                                                    <li class="media">
                                                        <a class="pull-left" href="javascript:;">
                                                            <img class="todo-userpic" src="webapp/pages/media/users/avatar5.jpg" width="27px" height="27px"> </a>
                                                        <div class="media-body todo-comment">
                                                            <p class="todo-comment-head">
                                                                <span class="todo-comment-username">Juan Carlos</span> &nbsp;
                                                                <span class="todo-comment-date">18 Sep 2014 at 9:22am</span>
                                                            </p>
                                                            <p class="todo-text-color"> Cras sit amet nibh libero, in gravida nulla. Scelerisque ante sollicitudin commodo Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum
                                                                in vulputate at, tempus viverra turpis.
                                                                <br> </p>
                                                        </div>
                                                    </li>

                                                    <li class="media">
                                                        <a class="pull-right" href="javascript:;">
                                                            <img class="todo-userpic" src="webapp/layouts/layout/img/avatar3_small.jpg" width="27px" height="27px"> </a>
                                                        <div class="media-body todo-comment text-right">
                                                            <p class="todo-comment-head">
                                                                <span class="todo-comment-date">18 Sep 2014 at 11:50am</span> &nbsp;
                                                                <span class="todo-comment-username">{{ Auth::user()->name }} {{ Auth::user()->lastname }}</span>
                                                            </p>
                                                            <p class="todo-text-color"> Cras sit amet nibh libero, in gravida nulla. Scelerisque ante sollicitudin commodo Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum
                                                                in vulputate at, tempus viverra turpis.
                                                                <br> </p>
                                                        </div>
                                                    </li>

                                                    <li class="media">
                                                        <a class="pull-left" href="javascript:;">
                                                            <img class="todo-userpic" src="webapp/pages/media/users/avatar6.jpg" width="27px" height="27px"> </a>
                                                        <div class="media-body todo-comment">
                                                            <p class="todo-comment-head">
                                                                <span class="todo-comment-username">Juan Carlos</span> &nbsp;
                                                                <span class="todo-comment-date">18 Sep 2014 at 11:50am</span>
                                                            </p>
                                                            <p class="todo-text-color"> Cras sit amet nibh libero, in gravida nulla. Scelerisque ante sollicitudin commodo Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum
                                                                in vulputate at, tempus viverra turpis.
                                                                <br> </p>
                                                        </div>
                                                    </li>

                                                    <li class="media">
                                                        <a class="pull-right" href="javascript:;">
                                                            <img class="todo-userpic" src="webapp/layouts/layout/img/avatar3_small.jpg" width="27px" height="27px"> </a>
                                                        <div class="media-body todo-comment text-right">
                                                            <p class="todo-comment-head">
                                                                <span class="todo-comment-date">18 Sep 2014 at 11:50am</span> &nbsp;
                                                                <span class="todo-comment-username">{{ Auth::user()->name }} {{ Auth::user()->lastname }}</span>
                                                            </p>
                                                            <p class="todo-text-color"> Cras sit amet nibh libero, in gravida nulla. Scelerisque ante sollicitudin commodo Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum
                                                                in vulputate at, tempus viverra turpis.
                                                                <br> </p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- END TASK COMMENTS -->
                                        <!-- TASK COMMENT FORM -->
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <ul class="media-list">
                                                    <li class="media">
                                                        <a class="pull-left" href="javascript:;">
                                                            <img class="todo-userpic" src="webapp/pages/media/users/avatar4.jpg" width="27px" height="27px"> </a>
                                                        <div class="media-body">
                                                            <textarea class="form-control todo-taskbody-taskdesc" rows="4" placeholder="Type comment..."></textarea>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <button type="button" class="pull-right btn btn-sm btn-circle green"> &nbsp; Submit &nbsp; </button>
                                            </div>
                                        </div>
                                        <!-- END TASK COMMENT FORM -->
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END TODO CONTENT -->
            </div>
        </div>
        <!-- END PAGE CONTENT-->
    </div>
</div>

@endsection

@section('scripts')
@endsection