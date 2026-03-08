<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>FAQ - ClearJP</title>
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
          <li><a href="/productos">Productos</a></li>
          <li><a href="/faq" aria-current="page">FAQ</a></li>
          <li><a href="/login" class="btn outline small">Acceder</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <main class="container" id="main">
    <h1>Preguntas frecuentes</h1>
    <section class="faq-list" aria-label="Preguntas frecuentes">
      <div class="faq-item">
        <button class="faq-q" aria-expanded="false">Como puedo reservar un servicio?</button>
        <div class="faq-" hidden>
          <p>Puedes reservar desde nuestro formulario en la pagina de inicio o llamando al +57 304 346 0665. Te confirmaremos por correo y WhatsApp.</p>
        </div>
      </div>

      <div class="faq-item">
        <button class="faq-q" aria-expanded="false">Que formas de pago aceptan?</button>
        <div class="faq-" hidden>
          <p>Aceptamos transferencia bancaria, PSE (proximamente) y pago en efectivo al finalizar el servicio.</p>
        </div>
      </div>

      <div class="faq-item">
        <button class="faq-q" aria-expanded="false">Los productos estan incluidos?</button>
        <div class="faq-" hidden>
          <p>En limpiezas estandar utilizamos nuestros productos. Si prefieres que utilicemos los tuyos, indicalo en la reserva.</p>
        </div>
      </div>

      <div class="faq-item">
        <button class="faq-q" aria-expanded="false">Tienen contrato para empresas?</button>
        <div class="faq-" hidden>
          <p>Si, ofrecemos contratos y reportes periodicos para servicios comerciales. Contacta ventas para cotizacion.</p>
        </div>
      </div>
    </section>
  </main>

  @include('layouts.footer')
<script src="{{ asset('js/main.js') }}"></script>
</body>
</html>





