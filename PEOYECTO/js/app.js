const loginForm = document.getElementById("loginForm");

if (loginForm) {

    loginForm.addEventListener("submit", function(event) {

        event.preventDefault();

        const usuario = document.getElementById("usuario").value;
        const password = document.getElementById("password").value;
        const mensajeError = document.getElementById("mensajeError");

        if (usuario === "admin" && password === "1234") {

            window.location.href = "admin.html";

        } else {

            mensajeError.classList.remove("d-none");

        }

    });

}

function mostrarSeccion(id) {

    const secciones = document.querySelectorAll(".seccion");

    secciones.forEach(function(seccion) {

        seccion.classList.add("d-none");

    });


    document.getElementById(id).classList.remove("d-none");

}


function cerrarSesion() {

    window.location.href = "login.html";

}