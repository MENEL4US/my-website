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

<body>
    <div class="container">
        <div class="navigation">
            <ul>
                <li><span title="Exibir formas de contato">CONTATO</span></li>
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
                <h2 title="Descrição das linguagens">Lorem ipsum dolor sit amet consectetur.</h2>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="footer">
            <ul>
                <li title="Link para perfil do linkedin"><a href=""><i class="fa-brands fa-linkedin-in"></i></a></li>
            </ul>
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

        typeWriter(document.querySelector('.banner .title h2'))
    </script>
    
</body>
</html>
<!-- 
    Luiz Mendes 
    Florianópolis, SC
    23/03/2022
-->