document.addEventListener("DOMContentLoaded", function () {

    // === Mostrar Banner ===
    if (!localStorage.getItem("cookie_consent")) {
        document.getElementById("cookie-banner").style.display = "block";
    }

    // === Clique em Aceitar ===
    document.getElementById("cookie-accept").onclick = function () {
        localStorage.setItem("cookie_consent", "accepted");
        document.getElementById("cookie-banner").style.display = "none";
        loadAnalytics();
    };

    // === Clique em Recusar ===
    document.getElementById("cookie-deny").onclick = function () {
        localStorage.setItem("cookie_consent", "denied");
        document.getElementById("cookie-banner").style.display = "none";
    };

    // === Carregar GA somente se já aceitou ===
    if (localStorage.getItem("cookie_consent") === "accepted") {
        loadAnalytics();
    }

});

// === Função que injeta o GA ===
function loadAnalytics() {
    if (window.ga_loaded) return; // evita duplicar
    window.ga_loaded = true;

    var gtagScript = document.createElement("script");
    gtagScript.src = "https://www.googletagmanager.com/gtag/js?id=G-SEU-ID-AQUI";
    gtagScript.async = true;
    document.head.appendChild(gtagScript);

    gtagScript.onload = function () {
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag("js", new Date());
        gtag("config", "G-SEU-ID-AQUI");
    };
}
