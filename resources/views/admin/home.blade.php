@extends('admin.layout.admin')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                @hasrole('Administrador','admin')
                  <p>Soy administrador</p>
                @endhasrole

                @can('created_user','Administrador')
                    <p>Pueso editar usuarios</p>
                @endcan
                @can('created_user')
                    <p>Pueso editar usuarios</p>
                @endcan
                @can('created_user','admin')
                    <p>Pueso editar usuarios</p>
                @endcan
                @can('created_user|updated_user|destroy_user','admin')
                    <p>Pueso editar usuarios</p>
                @endcan
                {{-- {{Auth::guard('admin')->user()->hasPermissionTo('created_user', 'admin')}} --}}
                {{-- {{Auth::guard('admin')->user()->roles()->get() }} --}}
            </div>
        </div>
    </div>
</div>
@endsection
