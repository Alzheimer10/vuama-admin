<footer>
    <!-- section_link -->
        <section id="section_link">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-4">
                        <ul>
                            <li><h3 class="border__bottom mb-2">Descubrenos</h3></li>
                            <li><a href="{{ route('about') }}">Sobre VUAMA</a></li>
                            <li><a href="{{ route('jobs') }}">Trabajos</a></li>
                            <li><a href="{{ route('offices') }}">Oficinas</a></li>
                            <li><a href="{{ route('contact') }}">Contáctanos</a></li>
                        </ul>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <ul>
                            <li><h3 class="border__bottom mb-2">VuamaAPP</h3></li>
                            @if(!Auth::check())
                                <li><a href="{{ route('register') }}">Registrarme</a></li>
                            @endif
                            <li><a href="{{ route('my-account') }}">Mi Cuenta</a></li>
                            <li><a href="{{ route('providers') }}">Proveedores</a></li>
                            <li><a href="{{ route('privacy-policy') }}">Políticas de Privacidad</a></li>
                            <li><a href="{{ route('help') }}">Ayuda</a></li>
                        </ul>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <h3 class="border__bottom">Descarga nuestra APP</h3>
                        <div class="row">
                            <div class="w-50"><a href="#"><img src="{{ asset('img/app/app_store.png') }}" alt="img_app_store" width="100%" style="position: relative; z-index: 0;"></a></div>
                            <div class="w-50"><a href="#"><img src="{{ asset('img/app/google_play.png') }}" alt="img_google_play" width="100%" style="position: relative; z-index: 0;"></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- section_link-END -->

    <div id="footer-bottom">
        <span style="font-size: .8rem">Todos los derechos reservados @ 2018 | <a href="#" class="color-font-primary" style="font-size: .8rem">IMPRESSUM</a></span>
        <ul class="social">
            <li><a href="#" title="Rss"><i class="fab fa-linkedin fa-lg"></i></a></li>
            <li><a href="#" title="Facebook"><i class="fab fa-facebook fa-lg"></i></a></li>
            <li><a href="#" title="Twitter"><i class="fab fa-twitter fa-lg"></i></a></li>
            <li><a href="#" title="Google +"><i class="fab fa-google-plus fa-lg"></i></a></li>
            <li><a href="#" title="Linkedin"><i class="fab fa-linkedin fa-lg"></i></a></li>
        </ul>   
    </div>
</footer>