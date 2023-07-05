// BOTON DE SELECCION DEL USUARIO
let user = document.getElementById('user');
let menuDrop = document.getElementById('menuDrop');

user.addEventListener('click', ToggleText);

function ToggleText() {
    menuDrop.classList.toggle('show');
};

// BARRA DE BUSQUEDA
