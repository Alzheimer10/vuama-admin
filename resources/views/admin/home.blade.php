@extends('admin.layout.admin')
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                @hasrole('Administrador','admin')
                  <p>Soy administrador</p>
                @endhasrole

                @if(Auth::guard('admin')->user()->hasPermissionTo('destroy_user','admin'))
                    <p>Pueso editar usuarios</p>
                @endif
                {{-- 
                {{Auth::guard('admin')->user()->hasPermissionTo('created_user', 'admin')}}
                {{Auth::guard('admin')->user()->roles()->get() }} --}}
            </div>
        </div>
    </div>
</div>
@endsection
