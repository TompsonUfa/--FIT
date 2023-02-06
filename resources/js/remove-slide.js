function removeSlider(screen) {
    const sliderMulti = document.querySelector('.carousel-inner_multi'),
        sliderSolo = document.querySelector('.carousel-inner_solo');
    if (sliderMulti != null || sliderSolo != null) {
        if (screen > 768) {
            sliderSolo.remove();
        } else {
            sliderMulti.remove();
        }
    }

}
const screen = window.screen.width;
document.addEventListener('DOMContentLoaded', removeSlider(screen));
