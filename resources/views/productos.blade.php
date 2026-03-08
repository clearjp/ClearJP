<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Productos</title>
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
          <li><a href="/servicios">Servicios</a></li>
          <li><a href="/productos" aria-current="page">Productos</a></li>
          <li><a href="/faq">FAQ</a></li>
          <li><a href="/login" class="btn outline small">Acceder</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <main class="container" id="main">
    <h1>Productos de aseo</h1>
    <p class="lead">Venta de productos seleccionados para limpieza profesional y domestica.</p>

    <section class="product-grid" aria-label="Productos">
      <article class="product">
        <img src="{{ asset('img/detergente.png') }}" alt="Detergente multiusos 1L">
        <h3>Detergente multiusos 1L</h3>
        <p class="small muted">2500 ml - Concentrado</p>
        <p class="price">COP $12.000</p>
        <button class="btn outline">Agregar al carrito</button>
      </article>

      <article class="product">
        <img src="{{ asset('img/detergente.png') }}" alt="Desinfectante 500ml">
        <h3>Desinfectante 500ml</h3>
        <p class="small muted">Ideal para superficies</p>
        <p class="price">COP $8.000</p>
        <button class="btn outline">Agregar al carrito</button>
      </article>

      <article class="product">
        <img src="{{ asset('img/detergente.png') }}" alt="Panos microfibra">
        <h3>Panos microfibra (pack 3)</h3>
        <p class="small muted">Suaves y absorbentes</p>
        <p class="price">COP $10.000</p>
        <button class="btn outline">Agregar al carrito</button>
      </article>
    </section>
  </main>

  @include('layouts.footer')
<script src="{{ asset('js/main.js') }}"></script>
</body>
</html>





