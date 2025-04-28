document.addEventListener('DOMContentLoaded', function () {
    const btnAccesibilidad = document.getElementById('btnAccesibilidad');
    const menuAccesibilidad = document.getElementById('menuAccesibilidad');

    btnAccesibilidad.addEventListener('click', function () {
        menuAccesibilidad.style.display = menuAccesibilidad.style.display === 'flex' ? 'none' : 'flex';
    });

    document.getElementById('contrasteBtn').addEventListener('click', function () {
        document.body.classList.toggle('modo-alto-contraste');
    });

    // Aumentar texto de la pagina
    document.getElementById('aumentarBtn').addEventListener('click', function () {
        document.body.classList.add('texto-grande');
        fontSize = fontSize + 2;
        document.body.style.fontSize = fontSize + "em"
    });

    //Reducir texto de la pagina
    document.getElementById('reducirBtn').addEventListener('click', function () {
        document.body.classList.remove('texto-grande');
    });

    // lectura de la paguina
    document.getElementById('lecturaBtn').addEventListener('click', function () {
        const texto = document.body.innerText;
        const speech = new SpeechSynthesisUtterance(texto);
        speech.lang = "es-ES";
        window.speechSynthesis.speak(speech);
    });
});
