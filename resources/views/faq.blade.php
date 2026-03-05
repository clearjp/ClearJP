@section('title', 'Preguntas Frecuentes | ClearJP') @extends('layouts.app')

@section('content')
<style>
    /* aplico estilos al banner superior. */
    .banner-faq {
        background-color: var(--primary-color);
        color: var(--white);
        padding: 80px 10%;
        text-align: center;
    }

    /* defino el contenedor central de preguntas. */
    .faq-section {
        max-width: 800px;
        margin: 50px auto;
        padding: 0 20px;
    }

    /* estilo cada bloque de pregunta. */
    .faq-item {
        margin-bottom: 25px;
        padding: 20px;
        background-color: var(--light-bg);
        border-left: 6px solid var(--secondary-color);
        border-radius: 0 10px 10px 0;
        transition: transform 0.3s ease, box-shadow 0.3s ease; /* añado suavidad */
    }

    /* añado un efecto sutil al pasar el mouse sobre la pregunta */
    .faq-item:hover {
        transform: translateX(10px);
        box-shadow: 2px 5px 15px rgba(0,0,0,0.05);
    }

    .faq-item h3 {
        color: var(--primary-color);
        margin-top: 0;
        font-size: 1.2rem;
        margin-bottom: 10px;
    }

    .faq-item p {
        color: var(--text-color);
        line-height: 1.6;
        margin-bottom: 0;
    }
</style>

{{-- presento el banner de FAQ. --}}
<section class="banner-faq">
    <h1>Preguntas Frecuentes</h1>
    <p>Todo lo que necesitas saber sobre nuestros servicios de limpieza profesional.</p>
</section>

{{-- agrupo las preguntas frecuentes. --}}
<div class="faq-section">
    <div class="faq-item">
        <h3>¿Cómo puedo agendar un servicio?</h3>
        <p>Puedes hacerlo través de nuestro formulario de "Reserva rápida" en la página de inicio o enviándonos un mensaje directo por WhatsApp.</p>
    </div>

    <div class="faq-item">
        <h3>¿Los productos que usan son tóxicos?</h3>
        <p>No. Utilizamos exclusivamente productos biodegradables y certificados que son seguros para niños, mascotas y el medio ambiente.</p>
    </div>

    <div class="faq-item">
        <h3>¿Qué sucede si necesito cancelar reserva?</h3>
        <p>Solicitamos un aviso de al menos 24 horas de anticipación para reprogramar tu servicio sin cargos adicionales.</p>
    </div>

    <div class="faq-item">
        <h3>¿Ofrecen servicios para empresas grandes?</h3>
        <p>Sí, contamos con equipo industrial y personal capacitado para el mantenimiento de naves, bodegas y edificios corporativos.</p>
    </div>
</div>
@endsection