<?php 
include 'includes/header.php';
?>

  <div class="slider">
    <div class="ism-slider" data-play_type="loop" data-interval="3000" id="my-slider">
      <ol>
        <li class="slider">
          <a href="chile.php"> <img src="img/patagonia.jpg">
          <div class="ism-caption ism-caption-0">Conoce Chile</div></a>
        </li>
        <li>
          <a href="canada.php"><img src="img/banff.jpg">
          <div class="ism-caption ism-caption-0">Deleitate con Canadá</div></a>
        </li>
        <li>
         <a href="españa.php"> <img src="img/puertas-sol.jpg">
         <div class="ism-caption ism-caption-0">Celebra en España</div></a>
        </li>
      </ol>
    </div>
  </div>
  <div class="contenedor grid">
    <main class="contenido-principal">
      <article class="entrada">
        <h2>Londres</h2>
        <img class="image" src="img/londres.jpg" alt="londres">
        <p>Muchas horas de trabajo, pocos días de descanso 
          y mucho estres acumulado; puede ser un buen argumento para tomarte unas
          merecidas vacaciones en uno de los lugares mas hermosos del mundo.
          Conoce algunos lugares turisticos a dónde ir en tus próximas vacaciones.
        </p>
        <a href="londres.php" class="boton">Leer más</a>
      </article>
      <article class="entrada">
        <h2>España</h2>
        <img class="image" src="img/españa.jpg" alt="españa">
        <p>Si te gustan los lugares con hermosas vistas, pero con un ambiente más
          tranquilo, España es tu lugar; con distintos lugares que ofrecen lo mejor de su gastronomía
          y arquitectura, no te pierdas de los lugares a donde puedes ir si decides visitar este lindo pais.
        </p>
        <a href="españa.php" class="boton">Leer más</a>
      </article>
      <article class="entrada">
        <h2>Turquia</h2>
        <img class="image" src="img/turquia.jpg" alt="turquia">
        <p>Te encantan los lugares con una vista tan magnifica que podrías quedarte horas viendola?
          O tener distintos ambientes para disfrutar?
          Pues Turquia es el lugar perfecto para ti, enterate de todos los lugares a donde puedes ir 
          estando en Turquia.
        </p>
        <a href="turquia.php" class="boton">Leer más</a>
      </article>
      <article class="entrada">
        <h2>Canadá</h2>
        <img class="image" src="img/canada.webp" alt="canada">
        <p>Si tus gustos van más hacia lugares hermosos pero con cambios climaticos, o si simplemente 
          amas el frío, Canadá es el lugar perfecto para tí. Te mostraremos lo mejor de este hermoso país,
          para que sea tu próximo destino turistico.
        </p>
        <a href="canada.php" class="boton">Leer más</a>
      </article>
    </main>
    <aside class="sidebar">
      <section class="otras-entradas">
        <h2>Acá encontrarás lugares donde:</h2>
        <ul>
          <li class="icono"><i class="fas fa-hiking"></i> Hacer Trekking</li>
          <li class="icono"><i class="fas fa-glass-cheers"></i> Festejar </li>
          <li class="icono"><i class="fas fa-umbrella-beach"></i> Broncearte</li>
          <li class="icono"><i class="fas fa-route"></i> Explorar</li>
          <li class="icono"><i class="fas fa-camera-retro"></i> Documentar</li>
        </ul>
      </section>
    </aside>
  </div>

</body>
</html>
<?php
 include 'includes/footer.php'; 
?>