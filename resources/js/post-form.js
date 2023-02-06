document.addEventListener('DOMContentLoaded', function () {

    let validation = function (form) {
        const inputs = form.querySelectorAll(".form-control");
        let validation = true;
        for (let i = 0; i < inputs.length; i++) {
            let input = inputs[i],
                wrapperInput = input.closest('.wrapper-control');

            if (input.hasAttribute("data-text-input")) {
                if (input.value.length < 1) {
                    validation = false;
                    wrapperInput.classList.add("wrapper-control_invalid");
                } else {
                    wrapperInput.classList.remove("wrapper-control_invalid");
                }
            }

            if (input.hasAttribute("data-tel-input")) {
                let inputValue = input.value.match(/\d/g);
                if (inputValue == null) {
                    validation = false;
                    wrapperInput.classList.add("wrapper-control_invalid");
                } else {
                    if (["7", "8", "9"].indexOf(inputValue[0]) > -1) {
                        if (inputValue.length < 11) {
                            validation = false;
                            wrapperInput.classList.add("wrapper-control_invalid");
                        } else {
                            wrapperInput.classList.remove("wrapper-control_invalid");
                        }
                    } else {
                        if (inputValue.length < 7) {
                            validation = false;
                            wrapperInput.classList.add("wrapper-control_invalid");
                        } else {
                            wrapperInput.classList.remove("wrapper-control_invalid");
                        }
                    }
                }
            }

        }
        return validation;
    };

    var modal = new bootstrap.Modal("#exampleModal");
    const form = document.querySelectorAll('form');
    for (let i = 0; i < form.length; i++) {
        form[i].addEventListener('submit', function (e) {
            e.preventDefault();
            const inputName = form[i].querySelector('input[data-text-input]').value,
                inputPhone = form[i].querySelector('input[data-tel-input]').value;
            if (validation(e.target)) {
                $.ajax({
                    url: "",
                    headers: { 'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content') },
                    type: "POST",
                    data: {
                        name: inputName,
                        phone: inputPhone,
                    },
                    success: function (response) {
                        modal.hide();
                        const inputs = form[i].querySelectorAll(".form-control");
                        for (let i = 0; i < inputs.length; i++) {
                            inputs[i].value = "";
                        }
                        console.log(response);
                    },
                    error: function (response) {
                        console.log('Ошибка')
                    }
                });
            };

        });
    }
})

