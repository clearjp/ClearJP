<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Registro</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
</head>
<body>
  <header class="site-header">
    <div class="container header-inner">
      <a href="/" class="brand-mini"><img src="{{ asset('assets/logo-clearjp.png') }}" alt="Logo ClearJP" class="logo"></a>
      <div>
        <div class="brand-name">ClearJP</div>
      </div>
    </div>
  </header>

  <main class="container auth-page">
    <div class="auth-card">
      <h1>Crear cuenta</h1>
      <form id="registerForm" novalidate>
        <label for="r-name">Nombre completo</label>
        <input id="r-name" type="text" required>

        <label for="r-email">Correo</label>
        <input id="r-email" type="email" required>

        <label for="r-pass">Contrasena</label>
        <input id="r-pass" type="password" required>

        <button type="submit" class="btn primary full">Registrar</button>
        <p id="regMessage" aria-live="polite" class="small"></p>
      </form>
    </div>
  </main>

  @include('layouts.footer')
<script src="{{ asset('js/main.js') }}"></script>
  <script src="{{ asset('js/auth.js') }}"></script>
</body>
</html>



