<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estileira.css" media="screen" />
    <style>
@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap');
</style>
    <title>Document</title>
</head>
<body>

    <header class="header">
        <div class="div_logo">
            <img class="logo" src="imgs/logotipoRYB.svg">
        </div>
        <nav class="nav">
            <ul>
                <li><a href="#home">HOME</a></li>
                <li><a href="#home">Sobre Nós</a></li>
                <li><a href="#home">Como Funciona</a></li>
                <li><a href="#home">Produtos e Serviços</a></li>
            </ul>
            <button class="cadastro">CADASTRE-SE</button>
</nav>
        <div class="login">
        <div class="login-form">
            <input type="text" placeholder="Usuário" name="username">
            <input type="password" placeholder="Senha" name="password">
            <button>LOGIN</button>
        </div>
        </div>
    </header>
    
    <?php
        echo "vamos testando live server.";
    ?>
</body>
</html>