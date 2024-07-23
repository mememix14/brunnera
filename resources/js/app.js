import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();


document.addEventListener('DOMContentLoaded', function () {
    const userMenuButton = document.querySelector('header .relative button');
    const userMenu = document.querySelector('header .relative .absolute');

    userMenuButton.addEventListener('click', function () {
        userMenu.classList.toggle('hidden');
    });

    document.addEventListener('click', function (event) {
        if (!userMenu.contains(event.target) && !userMenuButton.contains(event.target)) {
            userMenu.classList.add('hidden');
        }
    });
});
