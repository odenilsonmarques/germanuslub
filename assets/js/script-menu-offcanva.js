document.addEventListener('DOMContentLoaded', function () {
    const offcanvasElement = document.getElementById('offcanvasNavbar');
    const offcanvas = new bootstrap.Offcanvas(offcanvasElement);

    // Seleciona todos os links dentro do offcanvas
    offcanvasElement.querySelectorAll('a').forEach(function (link) {
        link.addEventListener('click', function () {
            if (link.getAttribute('href').startsWith('#')) {
                // Fecha o offcanvas somente se for um link âncora
                offcanvas.hide();
            }
        });
    });
});
