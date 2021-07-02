"use strict";

var save = document.querySelector("#form1");

save.addEventListener("submit", function (e) {
    e.preventDefault();
    console.log("dsdsds");

    //el objeto formdata selecciona todo el form, es util para enviar un formulario con  muchos campos
    var cont = 0;
    const name = document.querySelector("#name");
    const apellido = document.querySelector("#apellido");
    const checkboxes = document.querySelectorAll(
        'input[name="carrera"]:checked'
    );
    var data_user = new FormData(save);
    console.log(data_user.get("name"));

    let carrera = [];
    checkboxes.forEach((checkbox) => {
        carrera.push(checkbox.value);
        cont ++;
    });
    console.log(carrera);
    data_user.append("carrera", carrera);

    if (name.value == "" || apellido.value == "" || cont == 0) {
        alert("rellene estos campos");
        return false;
    } else {
        fetch("assets/controller.php", {
            method: "POST",
            body: data_user,
        })
            .then((data) => data.json())
            .then((user) => {
                console.log(user);
                cont = 0;
            })
            .catch((error) => console.log(error));
    }
});
