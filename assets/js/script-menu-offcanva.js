document.addEventListener('DOMContentLoaded', function () {
    const offcanvasElement = document.getElementById('offcanvasNavbar');
    const offcanvas = new bootstrap.Offcanvas(offcanvasElement);

    offcanvasElement.querySelectorAll('a').forEach(function (link) {
        link.addEventListener('click', function (event) {
            const href = link.getAttribute('href');

            if (href.startsWith('/#') || href.startsWith('#')) {
                event.preventDefault(); // Impede o comportamento padrão do link
                offcanvas.hide(); // Fecha o menu offcanvas

                const targetSection = document.querySelector(href.replace('/', ''));
                if (targetSection) {
                    window.scrollTo({
                        top: targetSection.offsetTop - 80, // Ajuste para menus fixos
                        behavior: 'smooth'
                    });
                } else {
                    // Se estiver em outra página, redireciona para a home com o ID correto
                    window.location.href = '/' + href.replace('/', '');
                }
            }
        });
    });
});
