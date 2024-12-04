// Selección del formulario
const form = document.querySelector('form');

// Evento al enviar el formulario
form.addEventListener('submit', function (event) {
    event.preventDefault(); // Evita el envío por defecto
    alert('¡Formulario enviado correctamente!');
    form.reset(); // Reinicia los campos del formulario
});
