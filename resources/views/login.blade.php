@section('title', 'Acceso')
@extends('layouts.app')

@section('content')
<!-- centro la tarjeta de acceso con estilos del sitio. -->
<div class="min-h-[70vh] flex items-center justify-center"
     style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
    <div class="w-full max-w-md bg-white border border-[#e5e7eb] rounded-2xl shadow-[0_12px_30px_rgba(0,0,0,0.10)] p-6">
        <!-- muestro pestañas superiores (solo visuales). -->
        <div class="bg-[#f2f6f6] rounded-xl p-1.5 flex gap-1.5">
            <button id="tab-login" type="button" class="flex-1 text-center py-2 rounded-lg bg-white text-[#006d77] font-semibold shadow-sm">
                Iniciar sesión
            </button>
            <button id="tab-register" type="button" class="flex-1 text-center py-2 rounded-lg text-[#555] font-semibold hover:bg-white hover:text-[#006d77] transition">
                Registro
            </button>
        </div>

        <h2 id="form-title" class="mt-4 text-[#006d77] text-xl font-bold">Bienvenido</h2>
        <p id="form-subtitle" class="text-[#555] text-sm mt-1">Ingresa con tu cuenta</p>

        <!-- presento el formulario de login. -->
        <form id="login-form" class="mt-4">
            <label class="block text-sm font-semibold text-[#006d77] mb-1">Usuario</label>
            <div class="flex items-center gap-2 bg-[#f9f9f9] border border-[#e5e7eb] rounded-xl px-3 py-2 focus-within:border-[#006d77] focus-within:ring-4 focus-within:ring-[#83c5be]/30 transition">
                <!-- muestro el icono de usuario. -->
                <svg class="w-5 h-5 text-[#83c5be]" viewBox="0 0 24 24" fill="none">
                    <path d="M20 21a8 8 0 1 0-16 0" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"/>
                    <circle cx="12" cy="7" r="4" stroke="currentColor" stroke-width="1.7"/>
                </svg>
                <input id="login-usuario" class="w-full bg-transparent outline-none text-[#333] text-sm" type="email" placeholder="usuario@correo.com" required />
            </div>

            <label class="block text-sm font-semibold text-[#006d77] mb-1 mt-4">Contraseña</label>
            <div class="flex items-center gap-2 bg-[#f9f9f9] border border-[#e5e7eb] rounded-xl px-3 py-2 focus-within:border-[#006d77] focus-within:ring-4 focus-within:ring-[#83c5be]/30 transition">
                <!-- muestro el icono de candado. -->
                <svg class="w-5 h-5 text-[#83c5be]" viewBox="0 0 24 24" fill="none">
                    <rect x="5" y="10" width="14" height="10" rx="2" stroke="currentColor" stroke-width="1.7"/>
                    <path d="M8 10V7a4 4 0 0 1 8 0v3" stroke="currentColor" stroke-width="1.7"/>
                </svg>
                <input id="login-password" class="w-full bg-transparent outline-none text-[#333] text-sm" type="password" placeholder="••••••••" required />
            </div>

            <button type="submit" class="mt-5 w-full bg-[#006d77] text-white font-bold py-2.5 rounded-xl shadow-[0_10px_18px_rgba(0,109,119,0.28)] hover:bg-[#005a63] hover:-translate-y-0.5 transition">
                Ingresar
            </button>

            <href="#" class="block mt-3 text-center text-[0.95rem] text-[#006d77] hover:underline">
                ¿Olvidaste tu contraseña?
            </>
        </form>

        <!-- presento el formulario de registro. -->
        <form id="register-form" class="mt-4 hidden">
            <label class="block text-sm font-semibold text-[#006d77] mb-1">Usuario</label>
            <div class="flex items-center gap-2 bg-[#f9f9f9] border border-[#e5e7eb] rounded-xl px-3 py-2 focus-within:border-[#006d77] focus-within:ring-4 focus-within:ring-[#83c5be]/30 transition">
                <svg class="w-5 h-5 text-[#83c5be]" viewBox="0 0 24 24" fill="none">
                    <path d="M20 21a8 8 0 1 0-16 0" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"/>
                    <circle cx="12" cy="7" r="4" stroke="currentColor" stroke-width="1.7"/>
                </svg>
                <input id="register-usuario" class="w-full bg-transparent outline-none text-[#333] text-sm" type="email" placeholder="usuario@correo.com" required />
            </div>

            <label class="block text-sm font-semibold text-[#006d77] mb-1 mt-4">Contraseña</label>
            <div class="flex items-center gap-2 bg-[#f9f9f9] border border-[#e5e7eb] rounded-xl px-3 py-2 focus-within:border-[#006d77] focus-within:ring-4 focus-within:ring-[#83c5be]/30 transition">
                <svg class="w-5 h-5 text-[#83c5be]" viewBox="0 0 24 24" fill="none">
                    <rect x="5" y="10" width="14" height="10" rx="2" stroke="currentColor" stroke-width="1.7"/>
                    <path d="M8 10V7a4 4 0 0 1 8 0v3" stroke="currentColor" stroke-width="1.7"/>
                </svg>
                <input id="register-password" class="w-full bg-transparent outline-none text-[#333] text-sm" type="password" placeholder="mínimo 6 caracteres" required />
            </div>

            <button type="submit" class="mt-5 w-full bg-[#006d77] text-white font-bold py-2.5 rounded-xl shadow-[0_10px_18px_rgba(0,109,119,0.28)] hover:bg-[#005a63] hover:-translate-y-0.5 transition">
                Crear cuenta
            </button>
        </form>

        <div id="form-message" class="mt-4 font-semibold"></div>
    </div>
</div>

{{-- manejo la lógica de pestañas y llamadas al API. --}}
<script>
    const API_BASE_URL = '{{ url('/api') }}';

    const loginForm = document.getElementById('login-form');
    const registerForm = document.getElementById('register-form');
    const formMessage = document.getElementById('form-message');
    const tabLogin = document.getElementById('tab-login');
    const tabRegister = document.getElementById('tab-register');
    const formTitle = document.getElementById('form-title');
    const formSubtitle = document.getElementById('form-subtitle');

    // alterno el estado visual entre login y registro.
    function setActiveTab(isLogin) {
        loginForm.classList.toggle('hidden', !isLogin);
        registerForm.classList.toggle('hidden', isLogin);
        formMessage.textContent = '';

        if (isLogin) {
            tabLogin.classList.add('bg-white', 'text-[#006d77]', 'shadow-sm');
            tabRegister.classList.remove('bg-white', 'text-[#006d77]', 'shadow-sm');
            tabRegister.classList.add('text-[#555]');
            formTitle.textContent = 'Bienvenido';
            formSubtitle.textContent = 'Ingresa con tu cuenta';
        } else {
            tabRegister.classList.add('bg-white', 'text-[#006d77]', 'shadow-sm');
            tabLogin.classList.remove('bg-white', 'text-[#006d77]', 'shadow-sm');
            tabLogin.classList.add('text-[#555]');
            formTitle.textContent = 'Crea tu cuenta';
            formSubtitle.textContent = 'Regístrate en segundos';
        }
    }

    tabLogin.addEventListener('click', () => setActiveTab(true));
    tabRegister.addEventListener('click', () => setActiveTab(false));

    loginForm.addEventListener('submit', async (e) => {
        e.preventDefault();

        // construyo el payload del login.
        const payload = {
            usuario: document.getElementById('login-usuario').value,
            password: document.getElementById('login-password').value,
        };

        try {
            const response = await fetch(`${API_BASE_URL}/login`, {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify(payload),
            });

            const data = await response.json();

            // muestro el mensaje que retorna la API.
            formMessage.textContent = data.mensaje || 'Respuesta recibida';
            formMessage.style.color = response.ok ? '#0f766e' : '#b91c1c';
        } catch (error) {
            // muestro el error de red.
            formMessage.textContent = 'Error de red al intentar iniciar sesión';
            formMessage.style.color = '#b91c1c';
        }
    });

    registerForm.addEventListener('submit', async (e) => {
        e.preventDefault();

        // construyo el payload del registro.
        const payload = {
            usuario: document.getElementById('register-usuario').value,
            password: document.getElementById('register-password').value,
        };

        try {
            const response = await fetch(`${API_BASE_URL}/register`, {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify(payload),
            });

            const data = await response.json();
            let mensaje = data.mensaje || 'Respuesta recibida';
            if (!response.ok && data.errors) {
                const errores = Object.values(data.errors).flat();
                if (errores.length) mensaje = errores.join(' | ');
            }

            formMessage.textContent = mensaje;
            formMessage.style.color = response.ok ? '#0f766e' : '#b91c1c';
        } catch (error) {
            formMessage.textContent = 'Error de red al intentar registrarse';
            formMessage.style.color = '#b91c1c';
        }
    });
</script>
@endsection
