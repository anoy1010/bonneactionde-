const sideBar = document.querySelector('.sideBar')
function onToggleMenu(e) {
    e.name = e.name === 'menu' ? 'close' : 'menu'
    e.name = e.name === 'close' ? 'menu' : 'close'

    sideBar.classList.toggle('hidden')
}