const btnCircle = document.querySelector('.btn-circle');
const circleMenu = document.querySelector('.circle-menu');

btnCircle.addEventListener('click', () => {
    btnCircle.classList.toggle('menu-anim'); // Quand on va clicker que btnCircle, on lui ajoute la class menu-anim
    circleMenu.classList.toggle('circle-anim');
})