@section('title', 'Inicio | ClearJP Limpieza Profesional') @extends('layouts.app')

@section('content')

<style>
    /* Estilos espec?ficos de esta pagina */
    .hero {
        display: flex; justify-content: space-between; align-items: flex-start;
        padding: 60px 10%; flex-wrap: wrap; gap: 40px;
        background-color: var(--white); /* aseguro que el fondo sea limpio */
    }
    .hero-content { flex: 1; max-width: 600px; padding-top: 20px; }
    .hero-content h2 { font-size: 2.5rem; color: var(--primary-color); line-height: 1.2; margin-bottom: 20px; }
    .hero-content p { font-size: 1rem; color: #666; margin-bottom: 30px; }
    .hero-buttons { display: flex; gap: 15px; }

    /* estilo el formulario flotante. */
    .booking-card {
        flex: 0 0 350px; background: #ffffff; padding: 25px;
        border-radius: 10px; box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        border-top: 4px solid var(--secondary-color);
    }
    .booking-card h3 { color: var(--primary-color); margin-bottom: 20px; font-size: 1.1rem; }
    .form-group { margin-bottom: 15px; }
    .form-group label { display: block; font-size: 0.9rem; color: var(--primary-color); font-weight: 700; margin-bottom: 5px; }
    .form-group input, .form-group select {
        width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px; font-size: 0.9rem; outline: none;
    }
    .form-group input:focus, .form-group select:focus { border-color: var(--primary-color); }
    .btn-submit {
        width: 100%; background-color: var(--primary-color); color: #ffffff; border: none;
        padding: 12px; border-radius: 5px; font-weight: 600; cursor: pointer; margin-top: 10px;
    }

    /* Seccion Pasos */
    .steps-section { text-align: center; padding: 60px 10%; background-color: var(--light-bg); } /* uso el fondo claro aqu? para contrastar */
    .steps-section h2 { color: var(--primary-color); margin-bottom: 50px; font-size: 1.8rem; }
    .steps-container { display: flex; justify-content: space-between; flex-wrap: wrap; gap: 20px; }
    .step-item { flex: 1; min-width: 200px; text-align: center; }
    .icon-box { font-size: 2.5rem; margin-bottom: 15px; height: 50px; }
    
    /* asigno colores los iconos. */
    .fa-file-alt { color: var(--secondary-color); } /* ajusto los colores para que combinen con tu paleta */
    .fa-calendar-alt { color: var(--primary-color); }
    .fa-check-square { color: var(--secondary-color); }
    .fa-home { color: var(--primary-color); }
    
    .step-item h4 { color: var(--primary-color); margin-bottom: 10px; font-size: 1rem; }
    .step-item p { font-size: 0.85rem; color: #666; line-height: 1.5; padding: 0 10px; }
</style>

{{-- muestro la sección hero con reserva rápida. --}}
<section class="hero">
    <div class="hero-content">
        <h2>Limpieza confiable, sostenible y con impacto social</h2>
        <p>Reserva tu servicio en línea y recibe confirmación por WhatsApp o correo electrónico.</p>
        <div class="hero-buttons">
            <button class="btn-primary" onclick="document.getElementById('nombre').focus()">Reservar ahora</button>
            <a href="{{ url('/servicios') }}" class="btn-secondary" style="display:inline-block; text-align:center;">Ver servicios</a>
        </div>
    </div>

    <div class="booking-card">
        <h3>Reserva rápida</h3>
        <form action="#">
            <div class="form-group">
                <label for="nombre">Nombre completo</label>
                <input type="text" id="nombre" placeholder="Tu nombre">
            </div>
            <div class="form-group">
                <label for="telefono">Teléfono</label>
                <input type="tel" id="telefono" placeholder="Tu celular">
            </div>
            <div class="form-group">
                <label for="servicio">Tipo de servicio</label>
                <select id="servicio">
                    <option>Selecciona...</option>
                    <option>Limpieza Hogar</option>
                    <option>Limpieza Oficina</option>
                </select>
            </div>
            <div class="form-group">
                <label for="fecha">Fecha preferida</label>
                <input type="date" id="fecha">
            </div>
            <button type="submit" class="btn-submit">Enviar solicitud</button>
        </form>
    </div>
</section>

{{-- explico los pasos para reservar. --}}
<section class="steps-section">
    <h2> reservar tu limpieza</h2>
    <div class="steps-container">
        <div class="step-item">
            <div class="icon-box"><i class="far fa-file-alt"></i></div>
            <h4>1. Solicita tu cotización</h4>
            <p>Completa el formulario o contáctanos directamente.</p>
        </div>
        <div class="step-item">
            <div class="icon-box"><i class="far fa-calendar-alt"></i></div>
            <h4>2. Agendamos la visita</h4>
            <p>Confirmamos disponibilidad y alcance del servicio.</p>
        </div>
        <div class="step-item">
            <div class="icon-box"><i class="far fa-check-square"></i></div>
            <h4>3. Confirmas y pagas</h4>
            <p>Recibe la confirmaci?n y paga por el m?todo que prefieras.</p>
        </div>
        <div class="step-item">
            <div class="icon-box"><i class="fas fa-home"></i></div>
            <h4>4. Disfruta tu limpieza</h4>
            <p>Recibe tu servicio profesional y calificanos.</p>
        </div>
    </div>
</section>

@endsection

