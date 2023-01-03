const elements = document.querySelectorAll('.header__menu')
const buttonReset = document.querySelector('.button__reset')

for (let i = 0; i < elements.length; i++) {
    elements[i].addEventListener('click', showButton)
}

function showButton() {
    if (this.children.length > 0) {
        buttonReset.style.visibility = 'visible'
        buttonReset.style.opacity = '1'
    }
}
buttonReset.onclick = () => {
    buttonReset.style.visibility = 'hidden'
}
