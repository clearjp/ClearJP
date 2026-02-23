@section('title', 'Catálogo de Productos | ClearJP') @extends('layouts.app')

@section('content')
<style>
    .banner-productos {
        background-color: var(--primary-color);
        color: var(--white);
        padding: 80px 10%;
        text-align: center;
    }
    .productos-container {
        background-color: var(--light-bg);
        padding: 60px 10%;
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 30px;
    }
    .producto-card {
        background: var(--white);
        border-radius: 12px;
        overflow: hidden;
        border-bottom: 4px solid var(--secondary-color);
        box-shadow: 0 4px 15px rgba(0,0,0,0.05);
        transition: transform 0.3s ease;
        padding: 20px;
        display: flex;
        flex-direction: column;
        justify-content: space-between; /* Yo aseguro que el botón siempre quede al final */
    }
    .producto-card:hover {
        transform: translateY(-5px);
    }
    .producto-card h3 {
        color: var(--primary-color);
        margin: 10px 0;
    }
    .badge {
        display: inline-block;
        width: fit-content;
        background-color: var(--secondary-color);
        color: var(--primary-color);
        padding: 5px 12px;
        border-radius: 20px;
        font-size: 0.8rem;
        font-weight: bold;
    }
    /* Yo añado un estilo para el botón que sea consistente con tu app.blade.php */
    .btn-detalle {
        background: var(--primary-color);
        color: var(--white);
        border: none;
        padding: 10px 15px;
        border-radius: 5px;
        cursor: pointer;
        font-weight: 600;
        margin-top: 15px;
        transition: 0.3s;
    }
    .btn-detalle:hover {
        opacity: 0.9;
    }
</style>

<section class="banner-productos">
    <h1>Catálogo de Productos</h1>
    <p>Insumos certificados para una desinfección total y segura.</p>
</section>

<div class="productos-container">
    <div class="producto-card">
        <div>
            <span class="badge">Ecológico</span>
            <h3>Desinfectante Multiusos</h3>
            <p>Fórmula de alta eficiencia que elimina el 99.9% de gérmenes sin químicos corrosivos.</p>
        </div>
        <button class="btn-detalle">Ver detalles</button>
    </div>

    <div class="producto-card">
        <div>
            <span class="badge">Industrial</span>
            <h3>Desengrasante Pesado</h3>
            <p>Ideal para cocinas industriales y motores. Remueve grasa difícil en segundos.</p>
        </div>
        <button class="btn-detalle">Ver detalles</button>
    </div>

    <div class="producto-card">
        <div>
            <span class="badge">Hogar</span>
            <h3>Kit de Microfibras</h3>
            <p>Paños de alta absorción que no dejan rastro ni rayan las superficies delicadas.</p>
        </div>
        <button class="btn-detalle">Ver detalles</button>
    </div>
</div>
@endsection