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
        body.classList.remove('sidebar-off')
        body.classList.add('show-sidebar')
    } else {
        body.classList.add('sidebar-off')
        body.classList.remove('show-sidebar')
    }
});
document.querySelector(".sidebar .header .close-icon").addEventListener("click", function(e) {
    const body = document.querySelector('body');

    if (body.classList.contains('show-sidebar')) {
        body.classList.remove('show-sidebar')
        body.classList.add('sidebar-off')
    }
});

// Menu mobile
document.querySelector(".navigation li.hamburguer-icon").addEventListener("click", function(e) {
    const body = document.querySelector('body');
    const icon = document.querySelector(".navigation li.hamburguer-icon");

    if (!body.classList.contains('mobile-menu')) {
        body.classList.add('mobile-menu');
        icon.innerHTML = '&times;';
    } else {
        body.classList.remove('mobile-menu');
        icon.innerHTML = '&#9776;';
    }
});

// Luiz Mendes
// Florianópolis, sc. 23/03/2022