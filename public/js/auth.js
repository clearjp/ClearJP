// valido de forma básica el login y el registro (solo cliente, modo demo).
document.addEventListener('DOMContentLoaded', function(){
  // manejo el formulario de inicio de sesión.
  const loginForm = document.getElementById('loginForm');
  if(loginForm){
    loginForm.addEventListener('submit', function(e){
      e.preventDefault();
      const email = document.getElementById('u-email').value.trim();
      const pass = document.getElementById('u-pass').value.trim();
      const msg = document.getElementById('authMessage');
      if(!email || !pass){
        msg.textContent = 'Ingresa correo y contraseña.';
        msg.style.color = '#b00020';
        return;
      }
      // hago una validación simple de formato de email.
      const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      if(!re.test(email)){
        msg.textContent = 'Ingresa un correo válido.';
        msg.style.color = '#b00020';
        return;
      }
      msg.style.color = '#0b6b5f';
      msg.textContent = 'Inicio de sesión simulado. (Implementa backend para funcionalidad real)';
      loginForm.reset();
    });
  }

  // manejo el formulario de registro.
  const regForm = document.getElementById('registerForm');
  if(regForm){
    regForm.addEventListener('submit', function(e){
      e.preventDefault();
      const name = document.getElementById('r-name').value.trim();
      const email = document.getElementById('r-email').value.trim();
      const pass = document.getElementById('r-pass').value.trim();
      const msg = document.getElementById('regMessage');
      if(!name || !email || !pass){
        msg.textContent = 'Completa todos los campos.';
        msg.style.color = '#b00020';
        return;
      }
      if(pass.length < 6){
        msg.textContent = 'La contraseña debe tener al menos 6 caracteres.';
        msg.style.color = '#b00020';
        return;
      }
      msg.style.color = '#0b6b5f';
      msg.textContent = 'Registro simulado. Comprueba el backend para crear usuarios reales.';
      regForm.reset();
    });
  }
});
