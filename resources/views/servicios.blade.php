@section('title', 'Nuestros Servicios | ClearJP') @extends('layouts.app')

@section('content')
<style>
    /* Estilos específicos para la página de servicios */
    .hero-servicios {
        background-color: var(--primary-color);
        color: var(--white);
        padding: 80px 10%;
        text-align: center;
    }
    
    .servicios-grid {
        background-color: var(--light-bg); 
        padding: 50px 10%;
    }

    .card-servicio {
        background: var(--white);
        border-top: 5px solid var(--secondary-color);
        padding: 30px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.05);
        border-radius: 8px;
        transition: transform 0.3s ease; /* Yo añado esto para que se mueva suave al pasar el mouse */
    }

    .card-servicio:hover {
        transform: translateY(-5px); /* Un pequeño efecto visual de elevación */
    }

    .text-highlight {
        color: var(--primary-color);
        font-weight: bold;
        margin-bottom: 15px;
        display: block;
        font-size: 1.4rem;
    }

    .card-servicio p {
        line-height: 1.6;
        color: #555;
    }
</style>

<section class="hero-servicios">
    <h1>Nuestros Servicios</h1>
    <p>Soluciones frescas y profesionales con el mejor impacto.</p>
</section>

<div class="servicios-grid">
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px;">
        
        <div class="card-servicio">
            <span class="text-highlight">Limpieza de Oficinas</span>
            <p>Espacios impecables para un mejor ambiente laboral. Nos enfocamos en la desinfección de áreas comunes y estaciones de trabajo.</p>
        </div>

        <div class="card-servicio">
            <span class="text-highlight">Mantenimiento Industrial</span>
            <p>Equipos especializados para trabajos pesados. Limpieza de maquinaria, bodegas y pisos de alta resistencia.</p>
        </div>

        <div class="card-servicio">
            <span class="text-highlight">Limpieza Residencial</span>
            <p>Llevamos la calidad profesional a tu hogar. Limpieza profunda de alfombras, vidrios y áreas difíciles.</p>
        </div>

    </div>
</div>
@endsection