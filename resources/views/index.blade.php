<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>ClearJP</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
</head>
<body>
  <header class="site-header">
    <div class="container header-inner">
      <a href="/" class="brand-mini"><img src="{{ asset('assets/logo-clearjp.png') }}" alt="Logo de ClearJP" class="logo"></a>
      <div>
        <div class="brand-tag muted">Limpieza profesional y con impacto social</div>
      </div>
            <!-- Boton hamburguesa para navegacion en dispositivos moviles. -->
      <button class="menu-toggle" type="button" aria-expanded="false" aria-controls="main-nav" aria-label="Abrir menu">&#9776;</button>
      <nav id="main-nav" aria-label="Navegacion principal">
        <ul class="nav-list">
          <li><a href="/">Inicio</a></li>
          <li><a href="/servicios">Servicios</a></li>
          <li><a href="/productos">Productos</a></li>
          <li><a href="/faq">FAQ</a></li>
          <li><a href="/login" class="btn outline small">Acceder</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <main id="main" class="container">
    <section class="hero">
      <div class="hero-left">
        <h1>Limpieza confiable, sostenible y con impacto social</h1>
        <p class="lead">Reserva tu servicio en linea y recibe confirmacion por WhatsApp o correo electronico.</p>
        <div class="actions">
          <a href="#reservar" class="btn primary">Reservar ahora</a>
          <a href="/servicios" class="btn outline">Ver servicios</a>
        </div>
      </div>

      <aside class="hero-right">
        <div class="card auth-card" id="reservar">
          <h3>Reserva rapida</h3>
          <form id="quickBooking" novalidate>
            <label for="q-name">Nombre completo</label>
            <input id="q-name" type="text" required>

            <label for="q-phone">Telefono</label>
            <input id="q-phone" type="tel" required>

            <label for="q-service">Tipo de servicio</label>
            <select id="q-service" required>
              <option value="">Selecciona...</option>
              <option value="puntual">Limpieza puntual</option>
              <option value="recurrente">Limpieza recurrente</option>
              <option value="profunda">Limpieza profunda</option>
            </select>

            <label for="q-date">Fecha preferida</label>
            <input id="q-date" type="date">

            <button type="submit" class="btn primary full">Enviar solicitud</button>
            <p id="quickResult" class="small" aria-live="polite"></p>
          </form>
        </div>
      </aside>
    </section>

    <section aria-label="Pasos para reservar">
      <h2 class="center">Como reservar tu limpieza</h2>
      <div class="cards-row">
        <div class="icon-card">
          <div class="icon">1</div>
          <h3>1. Solicita tu cotizacion</h3>
          <p>Completa el formulario o contactanos directamente.</p>
        </div>
        <div class="icon-card">
          <div class="icon">2</div>
          <h3>2. Agendamos la visita</h3>
          <p>Confirmamos disponibilidad y alcance del servicio.</p>
        </div>
        <div class="icon-card">
          <div class="icon">3</div>
          <h3>3. Confirmas y pagas</h3>
          <p>Recibe la confirmacion y paga por el metodo que prefieras.</p>
        </div>
        <div class="icon-card">
          <div class="icon">4</div>
          <h3>4. Disfruta tu limpieza</h3>
          <p>Recibe tu servicio profesional y calificanos.</p>
        </div>
      </div>
    </section>
  </main>

  @include('layouts.footer')
<script src="{{ asset('js/main.js') }}"></script>
  <script src="{{ asset('js/auth.js') }}"></script>
</body>
</html>



