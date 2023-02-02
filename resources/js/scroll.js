const header = document.querySelector('.wrapper-header'),
    heightHeader = header.offsetHeight;
window.addEventListener('scroll', function () {
    if (this.scrollY >= heightHeader) {
        if (!header.classList.contains('wrapper-header_fixed')) {
            header.classList.add('wrapper-header_fixed');
        }
    } else {
        header.classList.remove('wrapper-header_fixed');
    };
});

