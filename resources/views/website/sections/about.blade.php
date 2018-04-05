@extends('layouts.master')
@section('title', 'Nosotros')

@section('styles')
@stop

@section('content')
	<div class="jumbotron jumbotron-fluid my-0">
		<div class="container">
			<div class="row align-items-center h-100">
				<div class="cols">
					<h1 class="display-3"> <img src="{{ asset('img/logo/logo.png') }}" style="max-width: 4.5rem" width="100%"> SOBRE VUAMA</h1>
					<p class="px-3">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, voluptatum dicta, rerum cumque vitae maxime, ut dolorem odio minima impedit rem earum illum, doloribus reprehenderit. In perferendis voluptatum aut reprehenderit.
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate eum incidunt pariatur quae ipsum reiciendis aliquid optio exercitationem, consequatur, nisi, expedita hic veritatis. Quasi dicta aliquid placeat doloribus, esse porro.
					</p>
				</div>
			</div>
		</div>	
	</div>

	<div class="container-fluid py-5 bg-grey">
		<div class="container">
			<div class="row justify-content-center">
			<div class="col-sm-4 col-10">
				<img src="{{ asset('img/about/fix2.png') }}" class="img-fluid">
				<h4 class="p-2">Misión</h4>
				<p class="px-1 pb-1">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum facilis id assumenda harum dolorum, similique placeat et cumque unde libero, illo tempora ut. Consequuntur optio velit fugit, neque rerum, dignissimos.
				</p>
			</div>
			<div class="col-sm-4 col-10">
				<img src="{{ asset('img/about/fix2.png') }}" class="img-fluid">
				<h4 class="p-2">Visión</h4>
				<p class="px-1 pb-1">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum facilis id assumenda harum dolorum, similique placeat et cumque unde libero, illo tempora ut. Consequuntur optio velit fugit, neque rerum, dignissimos.
				</p>
			</div>
			<div class="col-sm-4 col-10">
				<img src="{{ asset('img/about/fix2.png') }}" class="img-fluid">
				<h4 class="p-2">Valores</h4>
				<p class="px-1 pb-1">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum facilis id assumenda harum dolorum, similique placeat et cumque unde libero, illo tempora ut. Consequuntur optio velit fugit, neque rerum, dignissimos.
				</p>
			</div>
		</div>
		</div>
	</div>

	<!-- ally -->
		<section id="ally" class="mb-5">
			<div class="container">
				<h1 class="py-4 w-100 text-uppercase text-light text-center">Nuestros Aliados</h1>
				<div class="row wow fadeInUp">

					<div class="col-4 text-center">
						<img src="{{ asset('img/ally/ally.svg') }}" alt="ally">
					</div>

					<div class="col-4 text-center">
						<img src="{{ asset('img/ally/ally_2.svg') }}" alt="ally_2">
					</div>

					<div class="col-4 text-center">
						<img src="{{ asset('img/ally/ally_3.svg') }}" alt="ally_3">
					</div>

				</div>
			</div>
		</section><!-- #ally -->
	<!-- ally-END -->
@endsection

@section('scripts')
@endsection