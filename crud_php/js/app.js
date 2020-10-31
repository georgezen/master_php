"use strict";

const get_datos = document.querySelector("#get_datos");
const user_body = document.querySelector(".user_body");

get_datos.addEventListener("click", () => get_users());

var get_users = () => {
  fetch("http://localhost/master_php/crud_php/crudProcesses.php")
    .then((data) => data.json())
    .then((data) => {
      console.log(data[0]);
      data.forEach((usuario) => {
        
        var user = `
        <tr class='id-${usuario.id_usuario}'>
            <td class='idi'>${usuario.id_usuario}</td>
            <td>${usuario.nombre}</td>
            <td>${usuario.apellidos}</td>
        </tr>
        `;
        user_body.innerHTML += user;
        document.querySelector('.id-'+ usuario.id_usuario).firstElementChild.nextElementSibling.innerHTML = 'red';
      });
    });

};
