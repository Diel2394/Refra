<section class="contacto" id="contacto">
    <h2>Contáctanos</h2>
    <div class="contenido-contacto">
        <div class="informacion-contacto">
            <h3>Información de Contacto</h3>
            <p>Reframetalweb.com</p>
            <p>604-317-22-20</p>
        </div>
        <form class="formulario-contacto" id='form'>
	        <label for="name" class='input-contacto'>
		        <span>Nombre</span>
		        <input type="text" id="name" name='name' placeholder="Ingresa Tu Nombre" />
	        </label>
	        <label for="email" class='input-contacto'>
		        <span>Correo</span>
		        <input type="text" id="email" name='email' placeholder="Ingresa Tu Correo">
	        </label>
	        <label for="telefono" class='input-contacto'>
		        <span>Teléfono</span>
		        <input type="text" id="telefono" placeholder="Ingresa Tu Telefono">
	        </label>
	        <label for="mensaje" class='input-contacto'>
		        <span>Mensaje</span>
		        <textarea></textarea>
	        </label>
	        <input type="submit" value="enviar" class="btn azul">
        </form>
    </div>
</section>
<script>
	const name = document.getElementById('name');
	const email = document.getElementById('email');
	const form = document.getElementById('form');

	form.addEventListener('submit', (e) => {
		e.preventDefault();

		console.log(name.value);
		console.log(email.value);

	})
</script>