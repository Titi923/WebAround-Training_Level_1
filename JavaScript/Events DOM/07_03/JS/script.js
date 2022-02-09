
removeHide = document.querySelector('.cta a')

removeHide.addEventListener('click', (event) => {
    event.preventDefault();
    removeHide.classList.toggle('hide')
    
})