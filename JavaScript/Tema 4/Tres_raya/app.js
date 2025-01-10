let jugador = 0;
var tablero=[];
const botonpulsado=(evento, posicion)=>{
    jugador++;
    console.log(jugador);
    const boton = evento.target;
    const color = jugador % 2 ? "yellow":"blue";
    boton.style.backgroundColor=color;
    tablero[posicion]=color;
    console.log(tablero[posicion]);
    comprobarTablero();
}

/*const comprobarTablero=()=>{};*/

function comprobarTablero(){

    if(tablero[0] && tablero[0]==tablero[1] && tablero[0] == tablero[2]){
        return true;
    }else if(tablero[3] && tablero[3] == tablero[4] && tablero[3] == tablero[5]){
        return true;
    }else if(tablero[6] && tablero[6] == tablero[7] && tablero[6] == tablero[8]){
        return true;
    }
}

const coleccion_botones = document.querySelectorAll("button");
// console.log(coleccion);
coleccion_botones.forEach((objeto,posicion)=>objeto.addEventListener("click", 
    
    (e)=>botonpulsado(e,posicion)));