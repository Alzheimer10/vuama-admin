@extends('admin.layout.admin')
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
        		<h1 class="panel-heading">Services</h1>
        		<div class="panel-body">
					<services-component></services-component>
        		</div>
            </div>
        </div>
    </div>
</div>
@endsection
