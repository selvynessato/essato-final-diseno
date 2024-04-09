<footer>
    <div class="footer-parte">
        <div class="container-fluid">
            <div class="row align-items-start">
                <div id="footer-parte-gris" class="col-md-8 col-12 align-self-stretch">
                    <div class="container">
                        <div class="row">
                            <div class="col-1"></div>
                            <div class="col-4">
                                <h1>CONTACTANOS</h1>
                            </div>
                            <div class="col-1"></div>
                            <div class="col-5"></div>
                            <div class="col-1"></div>
                        </div>
                    </div>
                    <div class="container">             
                        <div class="row">
                            <div class="col-1">
                            </div>
                            <div class="col-4">
                                <form>
                                    <div class="mb-2">
                                        <label for="nombre" class="form-label">Nombre y apellido</label>
                                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Mi nombre es" required>
                                    </div>
                                    <div class="mb-2">
                                        <label for="telefono" class="form-label">Número de teléfono</label>
                                        <input type="number" class="form-control" id="telefono" name="telefono" placeholder="Mi numero es" required>
                                    </div>
                                    <div class="mb-2">
                                        <label for="trabajo" class="form-label">Trabajo en</label>
                                        <input type="text" class="form-control" id="trabajo" name="trabajo" placeholder="Mi empresa se llama" required>
                                    </div>
                                    <div class="mb-2">
                                        <label for="contacto" class="form-label">Contáctanos en</label>
                                        <input type="email" class="form-control" id="contacto" name="contacto" placeholder="micorreo@dominio.com" required>
                                    </div>
                                    <div class="mb-2">
                                        <label for="pais" class="form-label">País</label>
                                        <select class="form-select" id="pais" name="pais" required>
                                            <option value="" disabled selected>Selecciona tu país</option>
                                            @foreach ($paises as $pais)
                                                <option value="{{ $pais->id_pais }}">{{ $pais->nombre_pais }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </form>
                            </div>
                            <div class="col-1"></div>
                            <div class="col-5">
                                <form>
                                    <div class="mb-2">
                                        <label for="departamento" class="form-label">Departamento/Provincia</label>
                                        <select class="form-select" id="departamento" name="departamento" required>
                                            <option value="" disabled selected>Selecciona tu departamento o provincia</option>
                                            @foreach ($departamentos as $departamento)
                                                <option value="{{ $departamento->id_departamento }}">{{ $departamento->nombre_departamento }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mb-2">
                                        <label for="comoEncontraste" class="form-label">¿Cómo nos encontraste?</label>
                                        <input type="text" class="form-control" id="comoEncontraste" name="comoEncontraste" placeholder="Cuéntanos cómo nos encontraste" required>
                                    </div>
                                    <div class="mb-2">
                                        <label for="asunto" class="form-label">Asunto</label>
                                        <input type="text" class="form-control" id="asunto" name="asunto" placeholder="Mi asunto es" required>
                                    </div>
                                    <div class="mb-2">
                                        <label for="mensaje" class="form-label">Mensaje</label>
                                        <textarea class="form-control" id="mensaje" name="mensaje" rows="6" placeholder="Empieza a escribir aqui" required></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Enviar</button>
                                </form>
                            </div>
                            <div class="col-1">
                            </div>
                        </div>
                    </div>                  
                </div>
                <div id="footer-parte-negro" class="col-md-4 col-12 position-relative align-self-stretch">
                    <ul>
                        <li class="listado-footer"><a href="">Nosotros</a></li>
                        <li class="listado-footer"><a href="">Portafolio</a></li>
                        <li class="listado-footer"><a href="">Clientes</a></li>
                        <li class="listado-footer"><a href="">Servicios</a></li>
                        <li class="listado-footer"><a href="">ODS</a></li>
                        <li class="listado-footer"><a href="">Empleos</a></li>
                        <li class="listado-footer"><a href="">Pasantías</a></li>
                        <li class="listado-footer"><a href="">Asociados</a></li>
                    </ul>
                    <ul>
                        <li id="dato-personal-footer" class="datos-personal-footer">Quetzaltenango, Guatemala.</li>
                        <li class="datos-personal-footer">3 avenida 8-25 zona 1</li>        
                        <li class="datos-personal-footer">(+502) 77610106 / (+502) 41994781</li>
                    </ul>               
                    <ul>
                        <li class="politicas-footer">Politicas de privacidad</li>
                    </ul>

                    <ul>
                        <li class="red-social-footer"><a href="https://www.behance.net/Damaochoa"><img src="{{asset('/images/youtube.png')}}" class="img-fluid" width="200" height="200" alt="youtube"></a> Behance/essato</li>
                        <li class="red-social-footer"><a href="https://www.linkedin.com/company/essato/?viewAsMember=true"><img src="{{asset('/images/youtube.png')}}" class="img-fluid" width="200" height="200" alt="linkedin"></a> Linkedin/essato</li>
                    </ul>
                </div>
            </div>
        </div>
    <div id="container-footer" class="container">
        <div class="row">
            <div class="col-md-4 mb-3 mb-md-0">
                <div class="social-icons">
                    <div class="social-icon">
                        <a href="https://www.facebook.com/essatomarketing" target="_blank">
                            <img src="{{asset('/images/facebook.png')}}" class="img-fluid" alt="facebook">
                        </a>
                    </div>
                    <div class="social-icon">
                        <a href="https://www.instagram.com/essatomarketing/" target="_blank">
                            <img src="{{asset('/images/instagram.png')}}" class="img-fluid" alt="instagram">
                        </a>
                    </div>
                    <div class="social-icon">
                        <a href="https://www.tiktok.com/@essato_marketing" target="_blank">
                            <img src="{{asset('/images/tik-tok.png')}}" class="img-fluid" alt="tik-tok">
                        </a>
                    </div>
                    <div class="social-icon">
                        <a href="https://www.youtube.com/@essato_marketing" target="_blank">
                            <img src="{{asset('/images/youtube.png')}}" class="img-fluid" alt="youtube">
                        </a>
                    </div>
                </div>
            </div>
            <!-- Espacio entre las columnas -->
            <div class="col-md-2 d-none d-md-block" style="border:none;"></div> 
            <div class="col-md-6">
                <p class="text-center text-md-end">&copy; Copyringht Essato Marketing y Publicidad - 2024</p>
            </div>
        </div>
    </div>
</footer>