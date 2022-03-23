<?php
    $v = time();
?>

    <!DOCTYPE html>
    <html lang="pt-BR">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Luiz Mendes</title>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400&display=swap" rel="stylesheet">

        <script src="https://kit.fontawesome.com/8f1e203266.js" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="css/styles.css?<?=$v;?>">
    </head>

    <body class="sidebar-off">
        <div class="container">
            <div class="navigation menu">
                <ul>
                    <li class="link"><span title="Exibir formas de contato">CONTATO</span></li>
                    <li title="exibir opções de menu" class="hamburguer-icon">&#9776;</li>
                </ul>
            </div>
        </div>

        <div class="container">
            <div class="banner">
                <div class="pic">
                    <img title="Foto de perfil Luiz Mendes" src="img/luiz-mendes.png" alt="Foto de Luiz Mendes">
                </div>

                <div class="title">
                    <h1 title="Nome Luiz Mendes">Luiz<span>Mendes</span></h1>
                    <h2 title="Descrição das linguagens">Desenvolvedor PHP | Python | JavaScript | MySQL | Node.js</h2>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="footer">
                <ul>
                    <li title="Link para perfil do linkedin"><a href="https://www.linkedin.com/in/luiz-mendes-dev/" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a></li>
                </ul>
            </div>
        </div>

        <div class="sidebar">
            <div class="header">
                <h2 class="close-icon" title="Fechar">&Cross;</h2>
            </div>

            <div class="body">
                <p title="Endereço de e-mail"><i class="fa-regular fa-envelope"></i> <span>luizrodriguesbmm@gmail.com</span></p>
                <p title="Visitar Linkedin"><a href="https://www.linkedin.com/in/luiz-mendes-dev/" target="_blank"><i class="fa-brands fa-linkedin-in"></i> <span>Linkedin</span></a></p>
            </div>
        </div>

        <script>
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

                // console.log(text)
            }

            // typeWriter(document.querySelector('.banner .title h2'))

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

            document.querySelector(".navigation li.hamburguer-icon").addEventListener("click", function(e) {
                const body = document.querySelector('body');
                const icon = document.querySelector(".navigation li.hamburguer-icon");
                
                if (!body.classList.contains('mobile-menu')) {
                    // body.classList.remove('sidebar-off')
                    body.classList.add('mobile-menu');
                    icon.innerHTML = '&times;';
                } else {
                    // body.classList.add('sidebar-off')
                    body.classList.remove('mobile-menu');
                    icon.innerHTML = '&#9776;';
                }
            });

            document.querySelector(".sidebar .header .close-icon").addEventListener("click", function(e) {
                const body = document.querySelector('body');

                if (body.classList.contains('show-sidebar')) {
                    body.classList.remove('show-sidebar')
                    body.classList.add('sidebar-off')
                }
            });
        </script>

    </body>

    </html>
    <!-- 
    Luiz Mendes 
    Florianópolis, SC
    23/03/2022
-->