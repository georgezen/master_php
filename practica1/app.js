'use strict';

const nombre = document.querySelector('#nombre');
const apellido = document.querySelector('#apellido');
const buton = document.querySelector('#save');


buton.addEventListener('click', () => {
    save();
});

function save() {
  

    var form = document.getElementById('form');

    var data_user = new FormData(form);
    
    fetch('serv.php' ,{
        method: "POST",
        body: data_user,
      })
    .then(res => res.json())
    .then(data => {
        console.log(data);
    })
    .catch(err => {
        console.log(err);
    });
}
