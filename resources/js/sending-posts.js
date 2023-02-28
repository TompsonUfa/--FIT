document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector('form');
    form.addEventListener('submit', function (e) {
        e.preventDefault();
        $.ajax({
            url: '',
            method: 'post',
            headers: { 'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content') },
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success: function (response) {
                if (response) {
                    window.location = response.url;
                }
            },
            error: function (response) {
                let modal = document.querySelector('.modal'),
                    modalText = modal.querySelector('.modal-body');
                const errors = response.responseJSON.errors,
                    div = document.createElement("div"),
                    ul = document.createElement("ul");
                div.className = "alert alert-danger text-danger";
                for (let key in errors) {
                    const li = document.createElement("li");
                    li.append(errors[key]);
                    ul.append(li);
                }
                div.append(ul);
                modalText.replaceChild(div, modalText.childNodes[0]);
                modal = bootstrap.Modal.getOrCreateInstance(modal);
                modal.show();
            }
        });
    })
});
