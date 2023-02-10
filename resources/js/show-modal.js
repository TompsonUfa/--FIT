document.addEventListener('DOMContentLoaded', function(){
    function showModal(){
        let modal = document.querySelector('#exampleModal2');
        modal = bootstrap.Modal.getOrCreateInstance(modal);
        modal.show()
};
setTimeout(showModal, 15000);
});