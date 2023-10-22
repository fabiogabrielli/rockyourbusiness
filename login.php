<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilo.css" media="screen" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/0cb18bf594.js" crossorigin="anonymous"></script>
    <title>Rock Your Business</title>
</head>
<body>

<div class="mainStage">
    <div class="loginStage">
        <img src="imgs/1.svg" alt="LOGOTIPO ROCK YOUR BUSINESS">
        <form action="/path-to-process-login" method="post">
            <input type="text" id="email" name="email" placeholder="Email ou Telefone" required>
            <input type="password" id="password" name="password" placeholder="Senha" required>
            <button id="btnSubmit" type="submit">Entrar</button>
        </form>
        <a href="#">Esqueceu sua senha?</a>
        <hr class="solid">
        <button onclick="location.href='cadastro.php'" id="btnCadastro">Cadastrar conta</button>
    </div>
</div>


<script src="script.js"></script>
<!-- Scripts do Bootstrap e suas dependências -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<!-- Scripts JQUERY -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</body>
</html>