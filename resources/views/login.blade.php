<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Acceder</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
</head>
<body>
  <header class="site-header">
    <div class="container header-inner">
      <a href="/" class="brand-mini"><img src="{{ asset('assets/logo-clearjp.png') }}" alt="Logo de ClearJP" class="logo"></a>
      <div>
        <div class="brand-name">ClearJP</div>
      </div>
    </div>
  </header>

  <main class="container auth-page" id="main">
    <div class="auth-card">
      <h1>Acceder</h1>
      <form id="loginForm" novalidate>
        <label for="u-email">Correo</label>
        <input id="u-email" type="email" required>

        <label for="u-pass">Contrasena</label>
        <input id="u-pass" type="password" required>

        <button type="submit" class="btn primary full">Ingresar</button>
        <p id="authMessage" aria-live="polite" class="small"></p>
      </form>

      <div class="divider center small">o</div>

      <div class="center">
        <a href="/registro" class="btn outline small">Crear cuenta</a>
      </div>
    </div>
  </main>

  @include('layouts.footer')
<script src="{{ asset('js/main.js') }}"></script>
  <script src="{{ asset('js/auth.js') }}"></script>
</body>
</html>



