@extends('layouts.master')
@section('title', 'contacto')

@section('content')
    <section id="contact">
		<div class="container">
			<div class="contact-about border__bottom">
				<h3 class="text-uppercase">Contáctanos</h3>
			</div>
		 	<div class="row">

				<div class="col-xs-12 col-sm-6">
					<div class="row">
						<div class="col-12">
							<div class="contact-about text-center">
				        	    <p>Cras fermentum odio eu feugiat. Justo eget magna fermentum iaculis eu non diam phasellus. Scelerisque felis imperdiet proin fermentum leo. Amet volutpat consequat mauris nunc congue.</p>
							</div>
						    <div class="row">
								<div class="col-12">
									<a href="#" target="_blank"> <span class="btn btn-social btn-icon btn-round"><i class="fa fa-map-marker"></i></span>
									 	lorem, lorem 45-5 lorem lorem
									</a>
						  		</div>

								<div class="col-12">
									<a href="mailto:info@example.com"  target="_blank"> <span class="btn btn-social btn-icon btn-round"><i class="fa fa-at"></i></span>
									mi-correo@gmail.com
									</a>
						  		</div>

								<div class="col-12">
									<a href="tel:+1 5589 55488 55" target="_blank"> <span class="btn btn-social btn-icon btn-round"><i class="fa fa-phone"></i></span>
									+58-555-5555
									</a>
						  		</div>
						  	</div>
						</div>
					</div>
				</div>

				<div class="col-xs-12 col-sm-6">
					<div class="form">
						<div id="sendmessage">Your message has been sent. Thank you!</div>
						<div id="errormessage"></div>
						<form action="" role="form" class="contactForm">
							<div class="form-row">
								<div class="form-group col-lg-6">
									<input type="text" name="name" class="form-control" id="name" placeholder="Nombre" data-rule="minlen:4" data-msg="Please enter at least 4 chars"  required="true" />
									<div class="validation"></div>
								</div>
								<div class="form-group col-lg-6">
									<input type="email" class="form-control" name="email" id="email" placeholder="Email" data-rule="email" data-msg="Please enter a valid email"  required="true" />
									<div class="validation"></div>
								</div>
							</div>
							<div class="form-group">
								<input type="text" class="form-control" name="subject" id="subject" placeholder="Asunto" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject"  required="true" />
								<div class="validation"></div>
							</div>
							<div class="form-group">
							  	<textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Mensaje" required="true"></textarea>
							  	<div class="validation"></div>
							</div>

							<div class="text-center"><button type="submit" title="Send Message">Enviar Mensaje</button></div>
						</form>
					</div>
				</div>
        	</div>
     	</div>
    </section><!-- #contact -->
@endsection

@section('scripts')
@endsection