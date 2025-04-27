document.addEventListener('DOMContentLoaded', function () {
    const btnAccesibilidad = document.getElementById('btnAccesibilidad');
    const menuAccesibilidad = document.getElementById('menuAccesibilidad');

    btnAccesibilidad.addEventListener('click', function () {
        menuAccesibilidad.style.display = menuAccesibilidad.style.display === 'flex' ? 'none' : 'flex';
    });

    document.getElementById('contrasteBtn').addEventListener('click', function () {
        document.body.classList.toggle('modo-alto-contraste');
    });

    document.getElementById('aumentarBtn').addEventListener('click', function () {
        document.body.classList.add('texto-grande');
    });

    document.getElementById('reducirBtn').addEventListener('click', function () {
        document.body.classList.remove('texto-grande');
    });

    document.getElementById('lecturaBtn').addEventListener('click', function () {
        const texto = document.body.innerText;
        const speech = new SpeechSynthesisUtterance(texto);
        speech.lang = "es-ES";
        window.speechSynthesis.speak(speech);
    });
});
