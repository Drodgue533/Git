const pantalla = document.querySelector(".pantalla");
const botones = document.querySelectorAll('button'); // Cambiado a querySelectorAll para obtener todos los botones
let calculos = []; // Declarado como global
let acumulados = ""; // Declarado como global

console.log(pantalla);
console.log(botones);

function calcular(boton)
{
    const valor = boton.textContent;
    if (valor == "Borrar")
    {
        calculos = []; // Reiniciar calculos
        pantalla.textContent = ""; // Limpiar pantalla
    } else if (valor == "=")
    {
        pantalla.textContent = eval(acumulados); // Evaluar la expresión acumulada
    } 
    else {
        calculos.push(valor); // Agregar el valor actual al array calculos
        acumulados = calculos.join(""); // Crear una cadena de texto acumulada
        pantalla.textContent = acumulados; // Mostrar en pantalla
    }
}

botones.forEach((button) => 
    button.addEventListener("click", () => calcular(button))); // Añadir el evento a cada botón
