<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Servicios</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
</head>
<body>
  <header class="site-header">
    <div class="container header-inner">
      <a href="/" class="brand-mini"><img src="{{ asset('assets/logo-clearjp.png') }}" alt="Logo de ClearJP" class="logo"></a>
      
            <!-- Boton hamburguesa para navegacion en dispositivos moviles. -->
      <button class="menu-toggle" type="button" aria-expanded="false" aria-controls="main-nav" aria-label="Abrir menu">&#9776;</button>
      <nav id="main-nav" aria-label="Navegacion principal">
        <ul class="nav-list">
          <li><a href="/">Inicio</a></li>
          <li><a href="/servicios" aria-current="page">Servicios</a></li>
          <li><a href="/productos">Productos</a></li>
          <li><a href="/faq">FAQ</a></li>
          <li><a href="/login" class="btn outline small">Acceder</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <main class="container" id="main">
    <h1>Servicios</h1>
    <p class="lead">Ofrecemos servicios para hogares y empresas con personal capacitado.</p>

    <section class="service-list" aria-label="Lista de servicios">
      <article class="service-item">
        <h2>Limpieza por unica vez</h2>
        <p>Servicio puntual para dejar su espacio impecable.</p>
      </article>
      <article class="service-item">
        <h2>Limpieza recurrente</h2>
        <p>Planes semanales, quincenales o mensuales.</p>
      </article>
      <article class="service-item">
        <h2>Limpieza profunda</h2>
        <p>Desinfeccion y limpieza de fondo de todas las areas.</p>
      </article>
      <article class="service-item">
        <h2>Limpieza de mudanza</h2>
        <p>Limpieza final para entrega o recibo de viviendas.</p>
      </article>
      <article class="service-item">
        <h2>Limpieza post-construccion</h2>
        <p>Retiro de polvo, restos y limpieza tecnica post-obra.</p>
      </article>
    </section>

    <section style="margin-top:1.2rem">
      <a href="/#reservar" class="btn primary">Reservar ahora</a>
    </section>
  </main>

  @include('layouts.footer')
<script src="{{ asset('js/main.js') }}"></script>
</body>
</html>



