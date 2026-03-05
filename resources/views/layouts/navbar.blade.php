<style>
    /* estilo la barra de navegación. */
    header {
        display: flex; justify-content: space-between; align-items: center;
        padding: 15px 5%; background-color: var(--white);
        box-shadow: 0 2px 5px rgba(0,0,0,0.05);
    }
    .logo-container { display: flex; align-items: center; gap: 15px; }
    .logo-img { width: 60px; height: 60px; object-fit: contain; }
    .brand-text h1 { font-size: 1.5rem; color: var(--primary-color); font-weight: 700; }
    .brand-text p { font-size: 0.8rem; color: #666; }
    nav ul { display: flex; align-items: center; gap: 25px; }
    nav ul li { font-weight: 500; font-size: 0.95rem; color: #555; }
</style>

{{-- renderizo el header con logo y menú. --}}
<header>
    <div class="logo-container">
        <href="/">
            <img src="https://i.ibb.co/d45WbHC0/logo-clearjp-redondo.png" alt="logo-clearjp-redondo" class="logo-img">
        </>
        <div class="brand-text">
            
            
            
        </div>
    </div>
    <nav>
    <ul>
        <li><href="{{ url('/') }}">Inicio</></li>

        <li><href="{{ url('/servicios') }}">Servicios</></li>

        <li><href="{{ url('/productos') }}">Productos</></li>

        <li><href="{{ url('/faq') }}">FAQ</></li>

        <li><href="{{ url('/login') }}" class="btn-login">Acceso</></li>
    </ul>
</nav>
</header>
