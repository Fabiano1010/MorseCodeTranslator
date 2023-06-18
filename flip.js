const card = document.querySelector('.card__inner');
const btn = document.querySelector('.switch_button');
btn.addEventListener('click', function(){
    card.classList.toggle('is-flipped');
    
})