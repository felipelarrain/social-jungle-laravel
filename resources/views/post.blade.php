@extends('layouts.master')

@section('contenido')
    <div class="contenedor">

        <div class="dropdown _publicar">
            <button class="btn btn-secondary dropdown-toggle _boton1" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              De que quieres hablar hoy?
            </button>
            <div class="dropdown-menu _publicacion">
                <form class="px-4 py-3" method="POST">
                  <div class="form-group">
                    <label for="tema">Selecciona un tema</label>
                    <select class="form-control form-control-md" required>
                        <option value="">Deportes</option>
                        <option value="">Economia</option>
                        <option value="">Cine</option>
                    </select>                      
                  </div>
                  <div class="form-group">
                    <label for="titulo">Titulo</label>
                    <input type="text" class="form-control" id="titulo" placeholder="Titulo" required>
                  </div>
                  <div class="form-group">
                    <label for="texto">Texto</label>
                    <textarea class="form-control _.nota" id="texto" rows="3" placeholder="De que quieres hablar hoy?" required></textarea>  
                  </div>
                  <div class="form-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="customFileLang" lang="es">
                        <label class="custom-file-label" for="customFileLang">Seleccionar Archivo</label>
                      </div>
                  </div>

                  <button type="submit" class="btn _boton">Publicar</button>
                </form>
                
              </div>
          </div>



        <!--<div class="escribir">
            <form action="" method="POST">
                <select name="temas" id="">
                  <option value="Economia">Economia</option>
                  <option value="Deportes">Deportes</option>
                </select>

                <textarea name="postear" id="" cols="30" rows="10" class="texto" placeholder="De que quieres hablar hoy?"></textarea>
                
            </form>
        </div>-->
        <div class="posteos">
            <article class="post">
                <div class="persona">
                    <img src="img/profile.png" alt=""  > <!-- imagen perfil -->
                    <h6>NOMBRE APELLIDO</h6>
                </div>
                <div class="informe">
                    <h6 >DEPORTES</h6>
                    <h3 >Titulo Nota</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum officiis numquam repudiandae voluptatibus consequuntur culpa repellendus, laborum quibusdam laboriosam, maxime ab, rem adipisci commodi tempora perspiciatis aperiam consequatur amet. Deserunt accusamus officiis voluptatum dolore, sit eius repellendus, perferendis, eos eaque debitis adipisci corporis illo dolorem suscipit culpa non corrupti nulla.
                    </p>
                    <img src="img/imagen.jpg" alt=""> <!-- imagen publicacion (chequear para que haya un tama;o maximo de imagen y que se adapte a eso, ) -->

                </div>
            </article>
            <hr>
            <article class="post">
                <div class="persona">
                    <img src="img/profile.png" alt=""  > <!-- imagen perfil -->
                    <h6>NOMBRE APELLIDO</h6>
                </div>
                <div class="informe">
                    <h6 >FUTBOL</h6>
                    <h3 >Titulo Nota</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum officiis numquam repudiandae voluptatibus consequuntur culpa repellendus, laborum quibusdam laboriosam, maxime ab, rem adipisci commodi tempora perspiciatis aperiam consequatur amet. Deserunt accusamus officiis voluptatum dolore, sit eius repellendus, perferendis, eos eaque debitis adipisci corporis illo dolorem suscipit culpa non corrupti nulla.
                    </p>
                    <div class="imagen">
                        <img src="img/3.jpg" alt=""> <!-- imagen publicacion (chequear para que haya un tama;o maximo de imagen y que se adapte a eso, ) -->
                    </div>
                </div>
            </article>
            <hr>
            <article class="post">
                <div class="persona">
                    <img src="img/profile.png" alt=""  > <!-- imagen perfil -->
                    <h6>NOMBRE APELLIDO</h6>
                </div>
                <div class="informe">
                    <h6 >TECNOLOGIA</h6>
                    <h3 >Titulo Nota</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum officiis numquam repudiandae voluptatibus consequuntur culpa repellendus, laborum quibusdam laboriosam, maxime ab, rem adipisci commodi tempora perspiciatis aperiam consequatur amet. Deserunt accusamus officiis voluptatum dolore, sit eius repellendus, perferendis, eos eaque debitis adipisci corporis illo dolorem suscipit culpa non corrupti nulla.
                    </p>
                    <img src="img/imagen.jpg" alt=""> <!-- imagen publicacion (chequear para que haya un tama;o maximo de imagen y que se adapte a eso, ) -->

                </div>
            </article>
            <hr>
            <article class="post">
                <div class="persona">
                    <img src="img/profile.png" alt=""  > <!-- imagen perfil -->
                    <h6>NOMBRE APELLIDO</h6>
                </div>
                <div class="informe">
                    <h6 >CINE</h6>
                    <h3 >Titulo Nota</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum officiis numquam repudiandae voluptatibus consequuntur culpa repellendus, laborum quibusdam laboriosam, maxime ab, rem adipisci commodi tempora perspiciatis aperiam consequatur amet. Deserunt accusamus officiis voluptatum dolore, sit eius repellendus, perferendis, eos eaque debitis adipisci corporis illo dolorem suscipit culpa non corrupti nulla.
                    </p>
                    <img src="img/imagen.jpg" alt=""> <!-- imagen publicacion (chequear para que haya un tama;o maximo de imagen y que se adapte a eso, ) -->

                </div>
            </article>



    </div>
@endsection
@push('styles')
<link rel="stylesheet" href="/css/post.css">
@endpush