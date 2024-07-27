//carrusel
document.addEventListener('DOMContentLoaded', () => {
    const next = document.querySelector(".next");
    const prev = document.querySelector(".prev");
    const slide = document.querySelector(".slide");

    let isThrottled = false;
    const throttleDuration = 1000;
    function updateItemsClass() {
        const items = slide.querySelectorAll('.item');
        items.forEach((item, index) => {
            if (index === 0 || index === 1) {
                item.classList.add('large');
            } else {
                item.classList.remove('large');
            }
        });
    }
    function handleNextClick() {
        if (isThrottled) return;
        isThrottled = true;
        slide.appendChild(slide.firstElementChild);
        updateItemsClass();

        setTimeout(() => {
            isThrottled = false;
        }, throttleDuration);
    }
    function handlePrevClick() {
        if (isThrottled) return;
        isThrottled = true;
        slide.insertBefore(slide.lastElementChild, slide.firstElementChild);
        updateItemsClass();

        setTimeout(() => {
            isThrottled = false;
        }, throttleDuration);
    }
    next.addEventListener('click', handleNextClick);
    prev.addEventListener('click', handlePrevClick);
    updateItemsClass();
});
//carrusel