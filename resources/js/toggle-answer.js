const questions = document.querySelectorAll('.questions__item');
for (let i = 0; i < questions.length; i++) {
    const question = questions[i],
    answers = question.querySelectorAll('.answers__item');
    for (let i = 0; i < answers.length; i++) {
        const answer = answers[i];
        answer.addEventListener('click', function(){
            for (let i = 0; i < answers.length; i++) {
               if (answers[i].classList.contains('answers__item_active')){
                answers[i].classList.remove('answers__item_active')
               }
            }
            answer.classList.add('answers__item_active');
        });
    }
}
