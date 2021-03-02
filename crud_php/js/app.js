"use strict";


//Selector para hacer operaciones sobre tbody 
const user_body = document.querySelector(".user_body");
//Selector para  abrir el form de registro de users
const open_form_add = document.querySelector("#open_form_add");
//Selector para arrojar mensajes
const msj = document.querySelector(".msj");
//Selectores para botones  para cerrar forms sin añadir o editar 
const close_form = document.querySelector(".close_form");
const close_form_edit = document.querySelector(".close_form_edit");

//Selectores para añadir users,editar users y variable para operar el crud
var operador = "";
var form_user = document.querySelector("#form_user_add");
const form_user_edit = document.querySelector("#form_user_edit");

//adicion eventos para abrir form y cerrar manualmente forms
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
        var buton_editar =
          "<button type='button' class='btn_editar' onclick='editar(" +
          usuario.id_usuario +
          ")' >Editar</button>";
        
        var buton_elim =
          "<button type='button' class='btn_del' onclick='eliminar(" +
          usuario.id_usuario +
          ")' >Eliminar</button>";
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
          buton_editar +
          buton_elim +
          "</td>" +
          "</tr> ";

        user_body.innerHTML += user;
      }
    });
}

function open_form() {
  form_user.style.display = "block";
  form_user_edit.style.display = "none";
}

function close_form_add() {
  form_user.style.display = "none";
  limpiar_form();
}

function close_form_edi() {
  form_user_edit.style.display = "none";
  limpiar_form();
}


// Evento para registrar users
form_user.addEventListener("submit", function (e) {
  e.preventDefault();
  console.log("dsdsds");

  //el objeto formdata selecciona todo el form, es util para enviar un formulario con  muchos campos
  var name_add = document.querySelector("#name");
  var last_name_add = document.querySelector("#last_name");
  var data_user = new FormData(form_user);
  console.log(data_user.get("nombre"));
  console.log(data_user.get("apellidos"));
  operador = "registro";

  data_user.append("operador", operador);

  if (name_add.value == "" || last_name_add.value == "") {
    msj.innerHTML = "Registra un usuario pendejo";
    setTimeout(() => {
      msj.innerHTML = "";
    }, 3000);
    return false;
  } else {
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
          msj.innerHTML = "<span style='color:green;'>Se añadio el usuario con exito</span>";
          
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
  }
});


function limpiar_form() {
  document.querySelector("#name").value = "";
  document.querySelector("#last_name").value = "";
  document.querySelector("#name_edit").value = "";
  document.querySelector("#last_name_edit").value = "";
}

//funcion para obtener id de editar user
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
      form_user.style.display = "none";
      print_user_edit(edit);
    });
}

function print_user_edit(edit) {
  form_user_edit.style.display = "block";
  
  
  document.querySelector("#id_update_user").value = edit[0];
  document.querySelector("#name_edit").value = edit[1];
  document.querySelector("#last_name_edit").value = edit[2];
}

//funcion para modificar user
form_user_edit.addEventListener("submit", function (e) {
  e.preventDefault();

  //el objeto formdata selecciona todo el form, es util para enviar un formulario con  muchos campos
  var data_user_edit = new FormData(form_user_edit);
  console.log(data_user_edit.get("nombre_edit"));
  console.log(data_user_edit.get("apellidos_edit"));
  operador = "update";
  var name_edit = document.querySelector("#name_edit");
  var last_name_edit = document.querySelector("#last_name_edit");

  data_user_edit.append("operador", operador);

  if (name_edit.value == "" || last_name_edit.value == "") {
    msj.innerHTML =
      "<span style='color:red;'>Pon datos a editar</span>";
    msj.innerHTML.style.color = "red";
    setTimeout(() => {
      msj.innerHTML = "";
    }, 3000);
    return false;
  } else {
    fetch("php/controller.php", {
      method: "POST",
      body: data_user_edit,
    })
      .then((data) => data.json())
      .then((user) => {
        console.log(user);
  
          user_body.innerHTML = "";
          get_users();
          limpiar_form();
          form_user_edit.style.display = "none";
          
        msj.innerHTML =
          "<span style='color:green;'>Se modifico el usuario con exito</span>";
        msj.innerHTML.style.color = "green";
          setTimeout(() => {
            msj.innerHTML = "";
          }, 3000);
      })
      .catch((error) => console.log(error));
  }

});

//funcion para eliminar user
function eliminar(id_user) {
  console.log(id_user);

  operador = "delete_user";
  var data_del = new FormData();
  data_del.append("operador", operador);
  data_del.append("id_user_delete", id_user);

  fetch("php/controller.php", {
    method: "POST",
    body: data_del,
  })
    .then((data) => data.json())
    .then((del) => {
      console.log(del);
      user_body.innerHTML = "";
      get_users();

      
      msj.innerHTML =
        "<span style='color:green;'>Se elimino el usuario con id: </span>" +
        id_user;
      
      setTimeout(() => {
        msj.innerHTML = "";
      }, 3000);
      
    });
}


