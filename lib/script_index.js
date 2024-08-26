document.addEventListener('DOMContentLoaded', function () {
    const activeItem = document.getElementById('activeItem');
    const navLinks = document.querySelectorAll('.navbar-nav .nav-link');

    // Función para actualizar el texto y el ícono del elemento activo
    function updateActiveItem(title, icon) {
        activeItem.innerHTML = `<i class="bi ${icon}"></i>&nbsp; ${title}`;
    }

    // Inicializa el texto y el ícono del elemento activo
    const firstLink = navLinks[0];
    updateActiveItem(firstLink.getAttribute('data-title'), firstLink.getAttribute('data-icon'));

    // Agrega eventos de clic para actualizar el texto y el ícono del elemento activo
    navLinks.forEach(link => {
        link.addEventListener('click', function () {
            updateActiveItem(this.getAttribute('data-title'), this.getAttribute('data-icon'));
        });
    });
});