@extends('layouts.master')
@section('title', 'Ayuda')

@section('content')

	<section id="help">
		<div class="container">

			<div class="section-header">
			  <h3 class="text-uppercase mb-2">Preguntas frecuentes</h3>
			  <p >Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque ipsa sed eligendi atque asperiores, error amet sint? Doloremque nisi ab animi nemo ullam maiores, dolores soluta voluptatem, non atque debitis.</p>
			</div>

			<ul id="help-list" >
				<li>
				  <a data-toggle="collapse" class="collapsed" href="#help1">Alguna pregunta? <!-- <i class=""></i> --></a>
				  <div id="help1" class="collapse" data-parent="#help-list">
				    <p>
				      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus recusandae pariatur voluptatem aliquam similique autem magnam id cum ullam mollitia vero exercitationem numquam, culpa magni suscipit hic error. Quasi, voluptate?
				    </p>
				  </div>
				</li>

				<li>
				  <a data-toggle="collapse" href="#help2" class="collapsed">Alguna pregunta? <!-- <i class=""></i> --></a>
				  <div id="help2" class="collapse" data-parent="#help-list">
				    <p>
				      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus recusandae pariatur voluptatem aliquam similique autem magnam id cum ullam mollitia vero exercitationem numquam, culpa magni suscipit hic error. Quasi, voluptate?
				    </p>
				  </div>
				</li>

				<li>
				  <a data-toggle="collapse" href="#help3" class="collapsed">Alguna pregunta? <!-- <i class=""></i> --></a>
				  <div id="help3" class="collapse" data-parent="#help-list">
				    <p>
				      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus recusandae pariatur voluptatem aliquam similique autem magnam id cum ullam mollitia vero exercitationem numquam, culpa magni suscipit hic error. Quasi, voluptate?
				    </p>
				  </div>
				</li>

				<li>
				  <a data-toggle="collapse" href="#help4" class="collapsed">Alguna pregunta? <!-- <i class=""></i> --></a>
				  <div id="help4" class="collapse" data-parent="#help-list">
			      	<p>
			        	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus recusandae pariatur voluptatem aliquam similique autem magnam id cum ullam mollitia vero exercitationem numquam, culpa magni suscipit hic error. Quasi, voluptate?
			      	</p>
				  </div>
				</li>

				<li>
				  <a data-toggle="collapse" href="#help5" class="collapsed">Alguna pregunta? <!-- <i class=""></i> --></a>
				  <div id="help5" class="collapse" data-parent="#help-list">
				    	<p>
				     		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus recusandae pariatur voluptatem aliquam similique autem magnam id cum ullam mollitia vero exercitationem numquam, culpa magni suscipit hic error. Quasi, voluptate?
				    	</p>
				  </div>
				</li>

				<li>
					<a data-toggle="collapse" href="#help6" class="collapsed">Alguna pregunta? <!-- <i class=""></i> --></a>
					<div id="help6" class="collapse" data-parent="#help-list">
					  	<p>
					    	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus recusandae pariatur voluptatem aliquam similique autem magnam id cum ullam mollitia vero exercitationem numquam, culpa magni suscipit hic error. Quasi, voluptate?
					  	</p>
					</div>
				</li>
			</ul>
		</div>
	</section><!-- #help -->

@endsection
