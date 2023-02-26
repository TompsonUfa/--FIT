
document.addEventListener('DOMContentLoaded', function () {
    const prevImg = document.querySelector('.file-input');
    prevImg.querySelector("input").addEventListener("change", function () {
        if (this.files[0]) {
            var fr = new FileReader();
            fr.addEventListener("load", function () {
                prevImg.querySelector("img").src = fr.result;
            }, false);
            fr.readAsDataURL(this.files[0]);
        }
    });
})

