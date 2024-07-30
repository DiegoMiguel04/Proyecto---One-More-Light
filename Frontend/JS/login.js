var boton3 = document.getElementById("boton3");
var modalbox = document.querySelector(".modalbox_der");
var mover_modalbox = true;

boton3.addEventListener("click", function() {
    if (mover_modalbox) {
        modalbox.classList.add("cambio");
    } else {
        modalbox.classList.remove("cambio");
    }
    mover_modalbox = !mover_modalbox;
});
