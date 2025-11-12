// main.js - shared interactions
document.addEventListener('DOMContentLoaded', function(){
  // year
  const yearEl = document.getElementById('year');
  if(yearEl) yearEl.textContent = new Date().getFullYear();

  // FAQ accordion accessible
  document.querySelectorAll('.faq-q').forEach(btn => {
    btn.addEventListener('click', () => {
      const expanded = btn.getAttribute('aria-expanded') === 'true';
      btn.setAttribute('aria-expanded', !expanded);
      const panel = btn.nextElementSibling;
      if(panel) panel.hidden = expanded;
    });
    // keyboard support
    btn.addEventListener('keydown', (e) => {
      if(e.key === 'Enter' || e.key === ' ') btn.click();
    });
  });

  // Quick booking feedback
  const bookingForm = document.getElementById('quickBooking');
  if(bookingForm){
    bookingForm.addEventListener('submit', (e)=>{
      e.preventDefault();
      const name = document.getElementById('q-name').value.trim();
      const phone = document.getElementById('q-phone').value.trim();
      const service = document.getElementById('q-service').value;
      const result = document.getElementById('quickResult');
      if(!name || !phone || !service){
        result.textContent = 'Por favor completa los campos requeridos.';
        result.style.color = '#b00020';
        return;
      }
      result.style.color = '#0b6b5f';
      result.textContent = `Gracias ${name}, tu solicitud ha sido enviada. Te contactaremos pronto.`;
      bookingForm.reset();
    });
  }
});