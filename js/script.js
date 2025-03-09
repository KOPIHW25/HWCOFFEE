// toggel class active
const navbarNav = document.querySelector('.navbar-nav');
// ketika humberger di klik
document.querySelector('#hamberger-menu').onclick = () => {
    navbarNav.classList.toggle('active');
};
// on klik di luar navbar untuk menghilangkan navbar
const hamberger = document.querySelector('#hamberger-menu');

document.addEventListener('click', function (e) {
    if (!hamberger.contains(e.target) && !navbarNav.contains(e.target)) {
        navbarNav.classList.remove('active');
    }
});