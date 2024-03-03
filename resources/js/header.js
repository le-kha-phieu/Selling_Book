let lastScrollTop = 0
const header = document.querySelector(".header-navbar")

window.addEventListener("scroll", function() {
    const currentScrollTop = window.scrollY

    if (currentScrollTop === 0) {
        header.classList.remove("header-scrolled")
    } else {
        header.classList.add("header-scrolled")
    }

    lastScrollTop = currentScrollTop
})

const cartShopping = document.getElementById('cartShopping')
const cartBox = document.getElementById('cartBox')
cartShopping.addEventListener('click', function() {
    cartBox.style.display = 'block'
    // cartBox.style.display = 'none'
})

