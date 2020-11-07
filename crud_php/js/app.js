"use strict";

const user_body = document.querySelector(".user_body");
const open_form_add = document.querySelector("#open_form_add");
const msj = document.querySelector(".msj");
const close_form = document.querySelector(".close_form");
const close_form_edit = document.querySelector(".close_form_edit");

var operador = "";
var form_user = document.querySelector("#form_user_add");
const form_user_edit = document.querySelector("#form_user_edit");

open_form_add.addEventListener("click", () => open_form());
close_form.addEventListener("click", () => close_form_add());
close_form_edit.addEventListener("click", () => close_form_edi());

get_users();

function get_users() {
  fetch("php/controller.php")
    .then((data) => data.json())
    .then((data) => {
      for (var usuario of data) {
        //console.log(usuario);
        var buton =
          "<button type='button' onclick='editar(" +
          usuario.id_usuario +
          ")' data='${usuario.id_usuario}'>Editar</button>";
        var user =
          "<tr >" +
          "<td class='idi'>" +
          usuario.id_usuario +
          "</td>" +
          "<td>" +
          usuario.nombre +
          "</td>" +
          "<td>" +
          usuario.apellidos +
          "</td>" +
          "<td>" +
          buton +
          "</td>" +
          "</tr> ";

        user_body.innerHTML += user;
      }
    });
}

function open_form() {
  form_user.style.display = "block";
}

function close_form_add() {
  form_user.style.display = "none";
  limpiar_form();
}

function close_form_edi() {
  form_user_edit.style.display = "none";
  limpiar_form();
}

form_user.addEventListener("submit", function (e) {
  e.preventDefault();
  console.log("dsdsds");

  //el objeto formdata selecciona todo el form, es util para enviar un formulario con  muchos campos
  var data_user = new FormData(form_user);
  console.log(data_user.get("nombre"));
  console.log(data_user.get("apellidos"));
  operador = "registro";

  data_user.append("operador", operador);

  fetch("php/controller.php", {
    method: "POST",
    body: data_user,
  })
    .then((data) => data.json())
    .then((user) => {
      if (user) {
        user_body.innerHTML = "";
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
  document.querySelector("#name").value = "";
  document.querySelector("#last_name").value = "";
  document.querySelector("#name_edit").value = "";
  document.querySelector("#last_name_edit").value = "";
}

function editar(id_user) {
  console.log(id_user);
  operador = "get_id_for_edit";
  var data_edit = new FormData();
  data_edit.append("operador", operador);
  data_edit.append("id_user_edit", id_user);

  // console.log(data_edit);

  fetch("php/controller.php", {
    method: "POST",
    body: data_edit,
  })
    .then((data) => data.json())
    .then((edit) => {
      console.log(edit);

      print_user_edit(edit);
    });
}

function print_user_edit(edit) {
  form_user_edit.style.display = "block";

  document.querySelector("#id_update_user").value = edit[0];
  document.querySelector("#name_edit").value = edit[1];
  document.querySelector("#last_name_edit").value = edit[2];
}
