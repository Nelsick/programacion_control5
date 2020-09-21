'use strict';

let formulario = document.getElementById('selection');
let celda = document.getElementById('celda');

let aceptados = 0;
let rechazados = 0;
let aprobado = "";

console.log(celda);

formulario.addEventListener('submit', ( e ) => {

    e.preventDefault();

    let datos = new  FormData(formulario);

    let altura = datos.get('altura');
    let edad = datos.get('edad');

    if( (altura >= 1.70) && (edad >= 18) ){

        aceptados += 1;
        aprobado = "Si";

        celda.innerHTML += `
            <tr>
                <th scope="row">` + aceptados + `</th>
                <th>` + rechazados + `</th>
                <th>` + altura + `</th>
                <th>` + edad + `</th>
                <th>` + aprobado + `</th>
            </tr>
        `
    }else{

        rechazados += 1;
        aprobado = "No";

        celda.innerHTML += `
        <tr>
            <th scope="row">` + aceptados + `</th>
            <th>` + rechazados + `</th>
            <th>` + altura + `</th>
            <th>` + edad + `</th>
            <th>` + aprobado + `</th>
        </tr>
    `
    }


})

