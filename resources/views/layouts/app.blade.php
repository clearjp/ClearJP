<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Limpieza Profesional')</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <!-- cargo Tailwind CDN para la tarjeta de acceso. -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <style>
        /* defino variables y un reset b?sico. */
        :root {
            --primary-color: #006d77;
            --secondary-color: #83c5be;
            --text-color: #333333;
            --light-bg: #f9f9f9;
            --white: #ffffff;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; }
        
        body { 
            color: var(--text-color); 
            background-color: var(--white); 
            display: flex; 
            flex-direction: column; 
            min-height: 100vh; /* me aseguro de que el cuerpo ocupe toda la pantalla */
        }
        
        { text-decoration: none; color: inherit; }
        ul { list-style: none; }
        
        /* Con flex: 1 en el main, logro que el footer siempre se quede abajo aunque haya poco texto */
        main { flex: 1; }

        /* defino estilos globales para botones. */
        /* defino estos aqui para no tener que repetirlos en Servicios ni en Productos */
        .btn-login {
            border: 1px solid var(--primary-color); padding: 8px 20px; border-radius: 20px;
            color: var(--primary-color); font-weight: 600; transition: 0.3s;
        }
        .btn-login:hover { background-color: var(--primary-color); color: var(--white); }

        .btn-primary {
            background-color: var(--primary-color); color: var(--white); padding: 12px 25px;
            border-radius: 5px; font-weight: 600; border: none; cursor: pointer; transition: 0.3s;
        }
        .btn-primary:hover { opacity: 0.9; }
        
        .btn-secondary {
            background-color: transparent; color: var(--primary-color); border: 1px solid var(--primary-color);
            padding: 12px 25px; border-radius: 5px; font-weight: 600; cursor: pointer; transition: 0.3s;
        }
        .btn-secondary:hover { background-color: var(--light-bg); }

        /* ajusto el responsive. */
        @media (max-width: 768px) {
            .hero { padding: 30px 5% !important; flex-direction: column !important; text-align: center; }
            .booking-card { flex: 1 1 auto; width: 100%; margin-top: 20px; }
            .steps-container { flex-direction: column; gap: 40px; }
        }
    </style>
</head>
<body>

    @include('layouts.navbar')

    <main>
        @yield('content')
    </main>

    @include('layouts.footer')

</body>
</html>

