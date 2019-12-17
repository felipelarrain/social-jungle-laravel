@extends('layouts.app')

@section('content')

<div class="container-fluid contenedor">
    <section class="contenedorMenus .d-sm-none .d-md-block">
        <a href="" class="botonPerfil">
            <div class="usuario">
                <img src="img/profile.png" alt="" class="imgPerfil"> <!-- imagen perfil -->
                <h5>Nombre <br>
                    Apellido</h5>
            </div>
        </a>
        <br>

        <div class="paginas">
            <ul class="menus">
                <li>
                    <h3><a href="inicio.php">Inicio</a></h3>
                </li>
                <li>
                    <h3><a href="">Notificaciones</a></h3>
                </li>
                <li>
                    <h3><a href="">Mensajes</a></h3>
                </li>
                <li>
                    <h3><a href="">Destacados</a></h3>
                </li>

            </ul>
        </div>
        <div class="contenedorTemas">
            <ul class="temas">
                <li><a href="deportes.php">Deportes</a></li>
                <li><a href="">Espectaculos</a></li>
                <li><a href="">Politica</a></li>
                <li><a href="">Economia</a></li>
                <li><a href="">Tecnologia</a></li>
                <li><a href="">Diseño</a></li>
                <li><a href="">Autos</a></li>

            </ul>
        </div>
    </section>
    <section class=" contenedorPosteos sm">
        <div class="posteos">
            <article class="post">
                <div class="persona">
                    <img src="img/profile.png" alt=""> <!-- imagen perfil -->
                    <h6>NOMBRE APELLIDO</h6>
                </div>
                <div class="informe">
                    <h6>DEPORTES</h6>
                    <h3>Titulo Nota</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum officiis numquam repudiandae
                        voluptatibus consequuntur culpa repellendus, laborum quibusdam laboriosam, maxime ab, rem
                        adipisci commodi tempora perspiciatis aperiam consequatur amet. Deserunt accusamus officiis
                        voluptatum dolore, sit eius repellendus, perferendis, eos eaque debitis adipisci corporis
                        illo dolorem suscipit culpa non corrupti nulla.
                    </p>
                    <img src="img/imagen.jpg" alt="">
                    <!-- imagen publicacion (chequear para que haya un tama;o maximo de imagen y que se adapte a eso, ) -->

                </div>
            </article>
            <hr>
            <article class="post">
                <div class="persona">
                    <img src="img/profile.png" alt=""> <!-- imagen perfil -->
                    <h6>NOMBRE APELLIDO</h6>
                </div>
                <div class="informe">
                    <h6>FUTBOL</h6>
                    <h3>Titulo Nota</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum officiis numquam repudiandae
                        voluptatibus consequuntur culpa repellendus, laborum quibusdam laboriosam, maxime ab, rem
                        adipisci commodi tempora perspiciatis aperiam consequatur amet. Deserunt accusamus officiis
                        voluptatum dolore, sit eius repellendus, perferendis, eos eaque debitis adipisci corporis
                        illo dolorem suscipit culpa non corrupti nulla.
                    </p>
                    <img src="img/imagen.jpg" alt="">
                    <!-- imagen publicacion (chequear para que haya un tama;o maximo de imagen y que se adapte a eso, ) -->

                </div>
            </article>
            <hr>
            <article class="post">
                <div class="persona">
                    <img src="img/profile.png" alt=""> <!-- imagen perfil -->
                    <h6>NOMBRE APELLIDO</h6>
                </div>
                <div class="informe">
                    <h6>TECNOLOGIA</h6>
                    <h3>Titulo Nota</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum officiis numquam repudiandae
                        voluptatibus consequuntur culpa repellendus, laborum quibusdam laboriosam, maxime ab, rem
                        adipisci commodi tempora perspiciatis aperiam consequatur amet. Deserunt accusamus officiis
                        voluptatum dolore, sit eius repellendus, perferendis, eos eaque debitis adipisci corporis
                        illo dolorem suscipit culpa non corrupti nulla.
                    </p>
                    <img src="img/imagen.jpg" alt="">
                    <!-- imagen publicacion (chequear para que haya un tama;o maximo de imagen y que se adapte a eso, ) -->

                </div>
            </article>
            <hr>
            <article class="post">
                <div class="persona">
                    <img src="img/profile.png" alt=""> <!-- imagen perfil -->
                    <h6>NOMBRE APELLIDO</h6>
                </div>
                <div class="informe">
                    <h6>CINE</h6>
                    <h3>Titulo Nota</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum officiis numquam repudiandae
                        voluptatibus consequuntur culpa repellendus, laborum quibusdam laboriosam, maxime ab, rem
                        adipisci commodi tempora perspiciatis aperiam consequatur amet. Deserunt accusamus officiis
                        voluptatum dolore, sit eius repellendus, perferendis, eos eaque debitis adipisci corporis
                        illo dolorem suscipit culpa non corrupti nulla.
                    </p>
                    <img src="img/imagen.jpg" alt="">
                    <!-- imagen publicacion (chequear para que haya un tama;o maximo de imagen y que se adapte a eso, ) -->

                </div>
            </article>
            <div class="boton">
                <!-- porque no aparece el boton? -->

                <a href="#"><img src="img/boton.png" alt=""></a>
            </div>
        </div>

    </section>

</div>
@endsection
