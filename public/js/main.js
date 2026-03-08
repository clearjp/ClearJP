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