"use strict";

const get_datos = document.querySelector("#get_datos");
const user_body = document.querySelector(".user_body");
const open_form_add = document.querySelector("#open_form_add");
const msj = document.querySelector(".msj");
const close_form = document.querySelector("#close_form");



var form_user = document.querySelector("#form_user");

get_datos.addEventListener("click", () => get_users());
open_form_add.addEventListener("click", () => open_form());
close_form.addEventListener("click", () => close_form_add());

var get_users = () => {
  fetch("php/controller.php")
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
        get_datos.disabled = true;
      });
    });
};

function open_form() {
  form_user.style.display = "block";
}

function close_form_add() {
  form_user.style.display = "none";
  limpiar_form();
}

form_user.addEventListener("submit", function (e) {
  e.preventDefault();
  console.log("dsdsds");

  //el objeto formdata selecciona todo el form, es util para enviar un formulario con  muchos campos
  var data_user = new FormData(form_user);
  console.log(data_user.get("nombre"));
  console.log(data_user.get("apellidos"));
  var operador = "registro";

  data_user.append("operador", operador);

  fetch("php/controller.php", {
    method: "POST",
    body: data_user,
  })
    .then((data) => data.json())
    .then((user) => {
      if (user) {
        user_body.innerHTML = '';
        get_users();
        limpiar_form();
        form_user.style.display = "none";

        msj.innerHTML = "Se añadio el usuario con exito";
        setTimeout(() => {
          msj.innerHTML = "";
        }, 3000);
      } else {
        msj.innerHTML = "Hubo un error pendejo";
        setTimeout(() => {
          msj.innerHTML = "";
        }, 3000);
      }
    })
    .catch((error) => console.log(error));
});

function limpiar_form() {
  document.querySelector('#name').value = "";
  document.querySelector('#last_name').value = "";
}



