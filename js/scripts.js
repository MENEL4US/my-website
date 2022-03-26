// Função que simula o efeito de digitação de uma máquina de escrever
function typeWriter(e) {
    const text = e.innerHTML.split('');

    e.innerHTML = '';
    setTimeout(() => {
        text.forEach((c, i) => {
            setTimeout(() => {
                e.innerHTML += c;
            }, 100 * i);
        })
    }, 5000);
}

// Navegação do sidebar de contato
document.querySelector(".navigation li.link").addEventListener("click", function(e) {
    const body = document.querySelector('body');

    if (!body.classList.contains('show-sidebar')) {
        body.classList.remove('sidebar-off');
        body.classList.add('show-sidebar');
    } else {
        body.classList.add('sidebar-off');
        body.classList.remove('show-sidebar');
    }
});
document.querySelector(".sidebar .header .close-icon").addEventListener("click", function(e) {
    const body = document.querySelector('body');

    if (body.classList.contains('show-sidebar')) {
        body.classList.remove('show-sidebar');
        body.classList.add('sidebar-off');
    }
});

// Menu mobile
document.querySelector(".navigation li.hamburguer-icon").addEventListener("click", function(e) {
    const body = document.querySelector('body');

    if (body.classList.contains('menu-mobile-off')) {
        body.classList.remove('menu-mobile-off');
        body.classList.add('menu-mobile-show');
    } else {
        body.classList.remove('menu-mobile-show');
        body.classList.add('menu-mobile-off');
    }
});

document.querySelector(".menu-mobile .close-icon").addEventListener("click", function(e) {
    const body = document.querySelector('body');

    if (body.classList.contains('menu-mobile-off')) {
        body.classList.remove('menu-mobile-off');
        body.classList.add('menu-mobile-show');
    } else {
        body.classList.remove('menu-mobile-show');
        body.classList.add('menu-mobile-off');
    }
});

document.querySelector(".menu-mobile li.link").addEventListener("click", function(e) {
    const body = document.querySelector('body');

    if (!body.classList.contains('show-sidebar')) {
        body.classList.remove('sidebar-off');
        body.classList.add('show-sidebar');

        body.classList.remove('menu-mobile-show');
        body.classList.add('menu-mobile-off');
    } else {
        body.classList.add('sidebar-off');
        body.classList.remove('show-sidebar');
    }
});

// Luiz Mendes
// Florianópolis, sc. 23/03/2022