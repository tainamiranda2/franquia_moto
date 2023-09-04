function setActiveMenuItem() {
    var currentLocation = window.location.pathname;
    var menuItems = document.querySelectorAll('.item a');

    menuItems.forEach(function (menuItem) {
        if (menuItem.getAttribute('href') === currentLocation) {
            menuItem.parentElement.classList.add('active');
        }
    });
}

window.addEventListener('DOMContentLoaded', setActiveMenuItem);