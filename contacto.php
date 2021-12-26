<?php 
include 'includes/header.php';
?>
  
<div class="contenedor">
   <h1 class="sidebar">Comunícate con nosotros</h1>
   <div class="contacto-bg"></div>
    <form class="formulario contenedor">
        <div class="campo">
            <label class="campo__label" for="nombre">Nombre</label>
            <input class="campo__field" type="text" placeholder="Nombre" id="nombre" require>
        </div>
        <div class="campo">
            <label class="campo__label" for="email">E-mail</label>
            <input class="campo__field" type="E-mail" placeholder="E-mail" id="email" require>
        </div>
        <div class="campo">
            <label class="campo__label" for="mensaje">Mensaje</label>
            <textarea class="campo__field campo__field--textarea" name="mensaje" id="mensaje" require></textarea>
        </div>
        <div class="campos">
         <input type="submit" value="Enviar" class="boton">
        </div>
    </form>
</div>
<?php
 include 'includes/footer.php'; 
?>