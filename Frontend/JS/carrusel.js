document.addEventListener('DOMContentLoaded', () => {
    const siguiente = document.querySelector(".siguiente");
    const anterior = document.querySelector(".anterior");
    const slide = document.querySelector(".slide");

    let condicion_principal = false;
    const tiempo_duracion = 1000;
    function cambiar_clase() {
        const items = slide.querySelectorAll('.item');
        items.forEach((item, index) => {
            if (index === 0 || index === 1) {
                item.classList.add('large');
            } else {
                item.classList.remove('large');
            }
        });
    }
    function clic_siguiente() {
        if (condicion_principal) return;
        condicion_principal = true;
        slide.appendChild(slide.firstElementChild);
        cambiar_clase();

        setTimeout(() => {
            condicion_principal = false;
        }, tiempo_duracion);
    }
    function clic_atras() {
        if (condicion_principal) return;
        condicion_principal = true;
        slide.insertBefore(slide.lastElementChild, slide.firstElementChild);
        cambiar_clase();

        setTimeout(() => {
            condicion_principal = false;
        }, tiempo_duracion);
    }
    siguiente.addEventListener('click', clic_siguiente);
    anterior.addEventListener('click', clic_atras);
    cambiar_clase();
});