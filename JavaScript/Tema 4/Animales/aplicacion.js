document.addEventListener("DOMContentLoaded", () => {
    const animales = [
        { nombre: 'pez', img: './imagenes/pez.png' },
        { nombre: 'abeja', img: './imagenes/abeja.png' },
        { nombre: 'caballo', img: './imagenes/caballo.png' },
        { nombre: 'oveja', img: './imagenes/oveja.png' },
        { nombre: 'pinguino', img: './imagenes/pinguino.png' },
        { nombre: 'vaca', img: './imagenes/vaca.png' },
        { nombre: 'pez', img: './imagenes/pez.png' },
        { nombre: 'abeja', img: './imagenes/abeja.png' },
        { nombre: 'caballo', img: './imagenes/caballo.png' },
        { nombre: 'oveja', img: './imagenes/oveja.png' },
        { nombre: 'pinguino', img: './imagenes/pinguino.png' },
        { nombre: 'vaca', img: './imagenes/vaca.png' },
    ];

    // Aleatorizar los animales
    animales.sort(() => 0.5 - Math.random());

    const grid = document.querySelector(".grid");
    const mostrar_resultado = document.querySelector('#resultado');
    let cartaElegida = [];
    let cartaElegidaId = [];
    let cartaGanadora = [];
    let puntos = 0;
    // Crear el tablero
    function crearTablero() {
        for (let i = 0; i < animales.length; i++) {
            const animal = document.createElement('img');
            animal.setAttribute('src', './imagenes/animales.png'); // Imagen por defecto
            animal.setAttribute('posicion', i); // Posición en el array
            animal.addEventListener('click', comprueba); 
            grid.appendChild(animal); 
        }
    }

    // Comprobar si las cartas elegidas son iguales
    
    function compruebeElegidas() {
        const cartas = document.querySelectorAll('img');
        const id1 = cartaElegidaId[0];
        const id2 = cartaElegidaId[1];
        const nombre1 = cartaElegida[0];
        const nombre2 = cartaElegida[1];

        if (nombre1 === nombre2) {
            alert(`¡Acertaste! ${nombre1} y ${nombre2}`);
            cartas[id1].setAttribute('src', './imagenes/blanco.png');
            cartas[id2].setAttribute('src', './imagenes/blanco.png');
            cartas[id1].removeEventListener('click',comprueba);
            cartas[id2].removeEventListener('click',comprueba);
            puntos += 5;
            document.getElementById('resultado').innerHTML = puntos;

        } else {
            cartas[id1].setAttribute('src', './imagenes/animales.png'); // Restablece la imagen
            cartas[id2].setAttribute('src', './imagenes/animales.png');
        }

        cartaElegida = [];
        cartaElegidaId = [];
    }

    // Manejar clic en una carta

    function comprueba() {
        const carta = this.getAttribute('posicion');
        console.log(`Carta seleccionada: ${carta}, ${animales[carta].nombre}`);
        this.setAttribute('src', animales[carta].img); // Muestra la imagen real
        cartaElegida.push(animales[carta].nombre);
        cartaElegidaId.push(carta);

        if (cartaElegida.length === 2) {
            setTimeout(compruebeElegidas, 500); // Esperar antes de comprobar
        }
    }

    crearTablero();
});
