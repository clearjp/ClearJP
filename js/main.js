// Centralizo interacciones compartidas del sitio.
document.addEventListener('DOMContentLoaded', function () {
  // Actualizo el anio del footer automaticamente.
  const yearEl = document.getElementById('year');
  if (yearEl) yearEl.textContent = new Date().getFullYear();

  // Activo el menu hamburguesa para navegacion movil.
  const siteHeader = document.querySelector('.site-header');
  const menuToggle = document.querySelector('.menu-toggle');
  const navList = document.querySelector('.nav-list');

  if (siteHeader && menuToggle && navList) {
    menuToggle.addEventListener('click', () => {
      const isOpen = siteHeader.classList.toggle('nav-open');
      menuToggle.setAttribute('aria-expanded', String(isOpen));
      menuToggle.setAttribute('aria-label', isOpen ? 'Cerrar menu' : 'Abrir menu');
    });

    // Cierro el menu al seleccionar una opcion en movil.
    navList.querySelectorAll('a').forEach((link) => {
      link.addEventListener('click', () => {
        siteHeader.classList.remove('nav-open');
        menuToggle.setAttribute('aria-expanded', 'false');
        menuToggle.setAttribute('aria-label', 'Abrir menu');
      });
    });
  }

  // Aplico el efecto Interactive Text Repel en elementos marcados.
  const repelElements = document.querySelectorAll('[data-repel-text]');
  repelElements.forEach((element) => {
    const text = (element.getAttribute('data-repel-text') || element.textContent || '').trim();
    if (!text) return;

    // Construyo el texto en caracteres individuales para animarlos.
    element.textContent = '';
    const fragment = document.createDocumentFragment();

    Array.from(text).forEach((char) => {
      if (char === ' ') {
        fragment.appendChild(document.createTextNode(' '));
        return;
      }

      const span = document.createElement('span');
      span.className = 'repel-char';
      span.textContent = char;
      fragment.appendChild(span);
    });

    element.appendChild(fragment);
    const chars = element.querySelectorAll('.repel-char');

    const radius = 72;
    const maxPush = 14;

    const resetChars = () => {
      chars.forEach((charEl) => {
        charEl.style.transform = 'translate3d(0, 0, 0)';
      });
      element.classList.remove('is-active');
    };

    const moveChars = (event) => {
      element.classList.add('is-active');

      chars.forEach((charEl) => {
        const rect = charEl.getBoundingClientRect();
        const cx = rect.left + rect.width / 2;
        const cy = rect.top + rect.height / 2;

        const dx = cx - event.clientX;
        const dy = cy - event.clientY;
        const distance = Math.hypot(dx, dy);

        if (distance === 0 || distance > radius) {
          charEl.style.transform = 'translate3d(0, 0, 0)';
          return;
        }

        const force = (1 - distance / radius);
        const push = maxPush * force;
        const tx = (dx / distance) * push;
        const ty = (dy / distance) * push;

        charEl.style.transform = `translate3d(${tx}px, ${ty}px, 0)`;
      });
    };

    element.addEventListener('pointermove', moveChars);
    element.addEventListener('pointerleave', resetChars);
    element.addEventListener('pointercancel', resetChars);
  });

  // Habilito el acordeon de FAQ con soporte de teclado.
  document.querySelectorAll('.faq-q').forEach((btn) => {
    btn.addEventListener('click', () => {
      const expanded = btn.getAttribute('aria-expanded') === 'true';
      btn.setAttribute('aria-expanded', String(!expanded));
      const panel = btn.nextElementSibling;
      if (panel) panel.hidden = expanded;
    });

    btn.addEventListener('keydown', (e) => {
      if (e.key === 'Enter' || e.key === ' ') btn.click();
    });
  });

  // Conecto la reserva rapida al endpoint real del backend.
  const bookingForm = document.getElementById('quickBooking');
  if (bookingForm) {
    bookingForm.addEventListener('submit', async (e) => {
      e.preventDefault();

      const name = document.getElementById('q-name').value.trim();
      const phone = document.getElementById('q-phone').value.trim();
      const service = document.getElementById('q-service').value;
      const date = document.getElementById('q-date').value || null;
      const result = document.getElementById('quickResult');

      // Validacion minima antes de enviar al servidor.
      if (!name || !phone || !service) {
        result.textContent = 'Por favor completa los campos requeridos.';
        result.style.color = '#b00020';
        return;
      }

      try {
        const response = await fetch('/api/reservas-rapidas', {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json',
            'Accept': 'application/json'
          },
          body: JSON.stringify({
            nombre: name,
            telefono: phone,
            tipo_servicio: service,
            fecha_preferida: date
          })
        });

        const data = await response.json();

        if (!response.ok || !data.ok) {
          result.textContent = data.mensaje || 'No fue posible registrar la solicitud.';
          result.style.color = '#b00020';
          return;
        }

        result.textContent = `Gracias ${name}, tu solicitud fue registrada.`;
        result.style.color = '#0b6b5f';
        bookingForm.reset();
      } catch (error) {
        result.textContent = 'Error de conexion. Intenta nuevamente.';
        result.style.color = '#b00020';
      }
    });
  }
});