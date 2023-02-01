const course = document.querySelectorAll(".course");
for (let i = 0; i < course.length; i++) {
    course[i].addEventListener('click', function () {
        if (course[i].classList.contains('course_open')) {
            course[i].classList.remove('course_open');
        } else {
            course[i].classList.add('course_open');
        }

    })
}
