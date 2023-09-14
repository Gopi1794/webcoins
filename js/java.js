const toggleBtn = document.querySelector('.toggle_btn')
const toggleBtnIcon = document.querySelector('.toggle_btn i')
const dropDownMenu = document.querySelector('.dropdown_menu')

toggleBtn.onclick = function () {
    dropDownMenu.classList.toggle('open')
    const isOpen = dropDownMenu.classList.contains('open')

    toggleBtnIcon.classList = isOpen ?
        'fa-brands fa-xing' :
        'fa-solid fa-bars-staggered'
}

/*SVG*/

const countstart = 100

const svg = document.getElementById('svg-body');
svg.innerHTML = [...Array(countstart).keys()].map(i =>`
<circle 
class="star"
cx="${Math.random() * window.innerWidth}" 
cy="${Math.random() * window.innerHeight}"
r="${Math.random() * 1}" 
stroke="white" stroke-width="3" fill="white" 
style="--V:${1 + Math.random() * 1}"
/>`).join('');

window.addEventListener('scroll' , function(e){
    document.documentElement.style.setProperty(
    '--f' , 1 - (window.scrollY / document.documentElement.scrollHeight)
    )
})