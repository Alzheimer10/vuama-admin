@extends('layouts.master')
@section('title', 'Projecto')


@section('styles')
	<style>
		.card-project{
    		background-color: #f7f5f5;
	    	border-radius: 5px;
		}
	</style>
    <!-- END PAGE LEVEL PLUGINS -->
@stop


@section('content')
    <section class="prem-5">

        <div class="container">
            <div class="row p-3 align-items-center h-100 h-100">
				<h2 class="w-100 border-bottom mb-1" >{{ $project->title }}
				</h2>

		        <button class="btn btn-info mb-2" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
		        	Ofertar
		        </button>


				<div id="accordion" class="w-100">
				    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
				     	<div class="card-body">
							<div class="alert alert-secondary w-100" role="alert">
				   				NOTA: La comisión de Freelancer será cobrada solo cuando te adjudiquen el proyecto y hayas aceptado.
							</div>
							<form action="" class="container">
								<div class="col-xs-12 col-sm-10 col-nd-8 offset-md-1">

                                    <!-- EMAIL-INPUT -->
                                    <div class="form-group col-xs-12 col-sm-6 col-lg-4">
                                        <label for="mount" class="control-label">Pagado a ti:</label>
                                        <input type="mount" name="email"  maxlength="50" placeholder="0,00$" value="" class="form-control" required/>
                                    </div>

									<div class="form-group col-12"><label class="control-label">Propuesta</label>
									<textarea name="description" id="description" maxlength="1000" minlength="50" rows="3" placeholder="Propuesta" class="form-control" style="overflow: hidden; word-wrap: break-word; height: 95.9913px;">
									</textarea>

				        			<button class="btn btn-info mb-2 mt-2" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
				        				ENVIAR
				        			</button>
								</div>
							</div>
							</form>
				     	</div>
				    </div>
				</div>

				<div class="col-12">
					<div class="row p-2 align-items-center h-100 h-100 card-project mb-3">
						<div class="col pl-2 pr-2 border-right">
							<h3 class="mb-0 text-center">Oferta
							 <strong><span class="d-block">0</span></strong>
							</h3>
						</div>
						<div class="col pl-2 pr-2 border-right">
							<h3 class="mb-0 text-center">Oferta.prom. (USD)
								<strong><span class="d-block">$105</span></strong>
							</h3>
						</div>
						<div class="col pl-2 pr-2 border-right">
							<h3 class="mb-0 text-center">Presupuesto. (USD)
								<strong><span class="d-block">$30 - $250</span></strong>
							</h3>
						</div>
						<div class="col pl-2 pr-2">
							<h3 class="mb-0 text-right">
								Queda(n) 6 día(s) y 23 hora(s)
								<strong><span class="d-block">ABIERTO</span></strong>
							</h3>
						</div>
					</div>
				</div>
				<div class="row p-3 card-project">
					<h3 class="mb-0 w-100">
						<strong>Descripción del Proyecto</strong>
					</h3>
					<p>{{ $project->description }}</p>
					<h3 class="mb-0 w-100"><strong>Acerca del empleador</strong></h3>
					<p class="mb-0 w-100"><a href="{{ route('perfil', $project->user->id) }}">{{ $project->user->fullname() }}</a></p>
					<p class="mb-0 w-100"><strong>Proyectos publicados:</strong> 5</p>
					<p>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
					</p>
					<h3 class="mb-0 w-100"><strong>Habilidades requeridas</strong></h3>
					<p>Carpintero, Jardinero, Eléctricista</p>
					<hr>
					<p class="mb-0 w-100"><strong>Nº del proyecto:</strong> 16543698</p>
					<p class="mb-0 w-100"><strong>Publicado el: </strong>{{ $project->created_at }}</p>
					<p class="mb-0 w-100"><a href="#">Denunciar proyecto</a></p>
				</div>
            </div>
            <div class="row">
            	
            	<h3 class="w-100 bg-info p-3 text-white">Personas que han ofertado (0)</h3>
            </div>
    </section>
@endsection

@section('scripts')
@endsection
