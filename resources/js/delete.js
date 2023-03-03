document.addEventListener('DOMContentLoaded', function () {
    var modal = document.querySelector('#exampleModal');
    
    var modalText = modal.querySelector('.modal-desc'),
        btnRemove = modal.querySelector('.btn_remove');
        modal = bootstrap.Modal.getOrCreateInstance(modal);

    function deleteItem(id) {
        modal.hide();
        const loader = document.querySelector('.loader');
        loader.classList.add('loader_visible')
        document.querySelector('body').classList.add('overflow-hidden');
        $.ajax({
            url: "",
            headers: { 'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content') },
            type: "POST",
            data: {
                id: id,
            },
            success: function (response) {
                location.reload();
            },
        });
    }
    function openDeleteWindow(event) {
        const courseId = this.course.id,
            courseTitle = this.course.title;
        modalText.innerHTML = `Вы точно хотите удалить курс  <br> «${courseTitle}» ?`;
        btnRemove.onclick = function () { deleteItem(courseId); }
        modal.show();
    }
    const btnsRemove = document.querySelectorAll('.table__btn_remove');
    for (let i = 0; i < btnsRemove.length; i++) {
        const btn = btnsRemove[i],
            courseId = btn.closest('[data-course-id]'),
            courseTitle = courseId.querySelector('.table__title').textContent;
        const course = {
            id: courseId.dataset.courseId,
            title: courseTitle,
        }
        btn.addEventListener('click', { handleEvent: openDeleteWindow, course });
    }
})

