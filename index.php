<!DOCTYPE html>
<html lang="es">
  <?php
     include "./php/head.php"
  ?>
  <body>
   <?php
      include "./php/header.php"
   ?> 

    <div class="ventajas">
      <div class="contenido-ventajas contenedor">
        <div class="ventaja">
          <i class="fa-duotone fa-block-brick"></i>
          <h3>Compra Lo Nuestro</h3>
          <p>
           Lorem ipsum dolor sit, amet consectetur adipisicing elit. Incidunt nulla quidem, ullam, autem quam vitae odit in atque soluta non delectus eaque temporibus illo quo, perspiciatis fugit repellat dignissimos. Dignissimos.
          </p>
        </div>
        <div class="ventaja">
          <i class="fa-solid fa-fire-flame-curved"></i>
          <h3>Calderas,Aislamientos,Ceramica Refractaria Industrial</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum
            aspernatur dolorum vitae consectetur doloremque tempore quisquam
            labore incidunt! Praesentium libero alias perspiciatis. Magni ad
            provident illo error? Veritatis, et laudantium.
          </p>
        </div>
        <div class="ventaja">
          <i class="fa-thin fa-00"></i>
          <h3>Los Mejores estandares de Calidad</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum
            aspernatur dolorum vitae consectetur doloremque tempore quisquam
            labore incidunt! Praesentium libero alias perspiciatis. Magni ad
            provident illo error? Veritatis, et laudantium.
          </p>
        </div>
      </div>
    </div>
    <section class="contenedor nosotros">
      <h2>Sobre Nosotros</h2>
      <div class="contenido-nosotros">
        <div class="texto-nosotros">
          <h3>Hornos de pizza y cocina</h3>
          <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Temporibus
            est, accusamus excepturi, praesentium dignissimos sunt beatae quis
            quae voluptatum tempore esse iste laborum totam, delectus similique
            facilis at voluptas ab.
          </p>

          <a href="#" class="btn bordes">Saber Mas</a>
        </div>
      </div>
    </section>
    <section class="servicios contenedor" id="servicios">
    <h2>Servicios</h2>
    <div class="contenido-servicios" >
      <div class="servicio">
        <i class="fa-solid fa-headphones"></i>
        <h3>Ladrillos R-33</h3>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident
          fuga incidunt at dolorum ipsam est soluta adipisci nulla, omnis in,
          iste expedita? Laudantium, ea quas earum sequi amet nesciunt veniam?
        </p>
        <div class="servicio">
          <i class="fa-solid fa-whiskey-glass"></i>
          <h3>Escoria Sintetica</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident
            fuga incidunt at dolorum ipsam est soluta adipisci nulla, omnis in,
            iste expedita? Laudantium, ea quas earum sequi amet nesciunt veniam?
          </p>
          <div class="servicio">
            <i class="fa-solid fa-headphones"></i>
            <h3>Ladrillos RC-26</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident
              fuga incidunt at dolorum ipsam est soluta adipisci nulla, omnis in,
              iste expedita? Laudantium, ea quas earum sequi amet nesciunt veniam?
            </p>
            <div class="servicio">
              <i class="fa-solid fa-temperature-quarter"></i>
              <h3>Mantas Ceramicas</h3>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident
                fuga incidunt at dolorum ipsam est soluta adipisci nulla, omnis in,
                iste expedita? Laudantium, ea quas earum sequi amet nesciunt veniam?
              </p>
              <div class="servicio">
                <i class="fa-solid fa-headphones"></i>
                <h3>Aditivos</h3>
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident
                  fuga incidunt at dolorum ipsam est soluta adipisci nulla, omnis in,
                  iste expedita? Laudantium, ea quas earum sequi amet nesciunt veniam?
                </p>
                <div class="servicio">
                  <i class="fa-solid fa-headphones"></i>
                  <h3>Mantenimiento de Hornos</h3>
                  <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident
                    fuga incidunt at dolorum ipsam est soluta adipisci nulla, omnis in,
                    iste expedita? Laudantium, ea quas earum sequi amet nesciunt veniam?
                  </p>
      </div>
    </div>
  </section>
  <section class="contacto" id="contacto">
    <h2>Contactanos</h2>
    <div class="contenido-contacto">
      <div class="informacion-contacto">
        <h3>Informacion de Contacto</h3>
        <p>Reframetalweb.com</p>
        <p>604-317-22-20</p>

      </div>
      <form class="formulario-contacto">
        <div class="input-contacto">
        <label for="nombre">Nombre</label>
       <input type="text" id="nombre" placeholder="Ingresa Tu Nombre">
        </div>

        <form class="formulario-contacto">
          <div class="input-contacto">
            <label for="nombre">Correo</label>
         <input type="text" id="correo" placeholder="Ingresa Tu Correo">
          </div>

          <form class="formulario-contacto">
            <div class="input-contacto">
            <label for="telefono">Telefono</label>
           <input type="text" id="telefono" placeholder="Ingresa Tu Telefono">
            </div>

            <form class="formulario-contacto">
              <div class="input-contacto">
              <label for="mensaje">Mensaje</label>
             <textarea></textarea>
              </div>

              
                <div class="input-contacto">
                <label for="nombre">Nombre</label>
               <input type="submit" value="enviar" class="btn azul">
                </div>
        
      </form>
    </div>
  </section>
  <footer class="footer">
<div class="logo">
  <h2>Refra <span>Metal</span></h2>
</div>
<p>Todos los derechos reservados <span class="fecha"></span>&copy; Desarrolado por Diego Londoño</p>

  </footer>
    <script src="js/app.js"></script>
    <script
    src="js/fontawesome.js"
    crossorigin="anonymous"
  ></script>
  <script src="https://kit.fontawesome.com/54037278ad.js" crossorigin="anonymous"></script>
  </body>
</html>
