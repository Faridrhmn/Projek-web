const menu = document.querySelector(".menuklik input")
const nav = document.querySelector('nav ul');

menu.addEventListener('click', function(){
    nav.classList.toggle('slide');
});
