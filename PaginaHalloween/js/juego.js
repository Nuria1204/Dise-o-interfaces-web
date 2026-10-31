let puntos = 0;
let tiempo = 10;
let intervalo;
let jugando = false;
const puntosHTML = document.getElementById("puntos");
const tiempoHTML = document.getElementById("tiempo");
const botonInicio = document.getElementById("botonInicio");
const botonParar = document.getElementById("botonParar");
const calabaza = document.getElementById("calabaza");
const mensaje = document.getElementById("mensaje");

botonInicio.addEventListener("click", function () {

    if (jugando) {
        return;
    }

    puntos = 0;
    tiempo = 10;
    jugando = true;

    puntosHTML.textContent = puntos;
    tiempoHTML.textContent = tiempo;

    mensaje.textContent = "¡Haz clic en la calabaza para conseguir puntos!";

    botonInicio.textContent = "Volver a jugar";
    botonInicio.disabled = true;
    botonParar.disabled = false;

    calabaza.disabled = false;

    intervalo = setInterval(function () {

        tiempo--;

        tiempoHTML.textContent = tiempo;

        if (tiempo === 0) {
            terminarJuego();
        }

    }, 1000);

});

calabaza.addEventListener("click", function () {

    if (jugando) {

        puntos++;

        puntosHTML.textContent = puntos;

    }

});

botonParar.addEventListener("click", function () {

    if (jugando) {

        clearInterval(intervalo);

        jugando = false;

        calabaza.disabled = true;
        botonParar.disabled = true;
        botonInicio.disabled = false;

        mensaje.textContent = "⏸️ Has parado el juego. Puntuación: " + puntos;

        botonInicio.textContent = "Volver a jugar";

    }

});

function terminarJuego() {

    clearInterval(intervalo);

    jugando = false;

    calabaza.disabled = true;
    botonParar.disabled = true;
    botonInicio.disabled = false;

    mensaje.textContent = "🎃 ¡Se acabó el tiempo! Has conseguido " +
        puntos + " puntos.";

    botonInicio.textContent = "Volver a jugar";

}