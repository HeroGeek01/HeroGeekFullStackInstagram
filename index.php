<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./img/logo.ico">
    <link rel="stylesheet" href="./css/estilos.css">
    <title>Instagram</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq"
        crossorigin="anonymous"></script>
    <?php
    // echo var_dump($_POST);
    if ($_POST) {
        $email_post = $_POST["email"];
        $senha_post = $_POST["senha"];

        if (str_contains($email_post, "'") || str_contains($email_post, "'")) {
            echo "<script>alert('Não digite " . "\
            '" . " nos campos!');</script>";
        } else {

            $nomeservidor = "localhost";
            $nomeusuario = "root";
            $senha = "";
            $bancodados = "HeroGeekInstagram";

            $conexao = new mysqli($nomeservidor, $nomeusuario, $senha, $bancodados);
            if ($conexao->connect_error) {
                die("Conexão falhou: " . $conexao->connect_error);
            }
            $sql = "
    select * from usuario where email='$email_post' AND senha='$senha_post'
        ";
            $resposta = $conexao->query($sql);
            if ($resposta) {
                while ($linha = $resposta->fetch_assoc()) {
                    // echo var_dump ($linha);
                    $nome = $linha['Nome'];
                    $id = $linha['ID'];
                    echo "<script>localStorage.setItem('UsuarioLogadoNome','$nome')</script>";
                    echo "<script>localStorage.setItem('UsuarioLogadoID','$id')</script>";
                    header('Location: ./home.php');
                }
            }


            echo "<script>console.log('Conexão estabelecida');</script>";
            $conexao->close();
        }
    }
    ?>


</head>

<body>

    <div class="container-fluid login justify-content-center d-flex align-items-center vh-100 flex-column">
        <figure class="figure">
            <img src="./img/instagram.png" class="figure-img img-fluid">
        </figure>
        <form action="./index.php" method="POST">
            <input class="mb-2 form-control" type="email" name="email" placeholder="email">
            <input class="mb-2 form-control" type="password" name="senha" placeholder="Senha">
            <button type="submit" class="my-3 container-fluid btn btn-primary">Entrar</button>
        </form>
        <p>OU</p>

        <a href="">Esqueceu a senha?</a>
        <a href="">Entrar com o Google</a>
        <p>Nao tem uma conta? <a href="">Cadastre-se</a></p>


    </div>
    <footer class="texto-cinza container-fluid">
        <div class="container-fluid d-flex justify-content-around flex-wrap gap-3">
            <a class="link-underline link-underline-opacity-0 link-underline-opacity-100-hover" href="">Meta</a>
            <a class="link-underline link-underline-opacity-0 link-underline-opacity-100-hover" href="">Sobre</a>
            <a class="link-underline link-underline-opacity-0 link-underline-opacity-100-hover" href="">Blog</a>
            <a class="link-underline link-underline-opacity-0 link-underline-opacity-100-hover" href="">Carreiras</a>
            <a class="link-underline link-underline-opacity-0 link-underline-opacity-100-hover" href="">Ajuda</a>
            <a class="link-underline link-underline-opacity-0 link-underline-opacity-100-hover" href="">API</a>
            <a class="link-underline link-underline-opacity-0 link-underline-opacity-100-hover" href="">Privacidade</a>
            <a class="link-underline link-underline-opacity-0 link-underline-opacity-100-hover" href="">Termos</a>
            <a class="link-underline link-underline-opacity-0 link-underline-opacity-100-hover" href="">Localizações</a>
            <a class="link-underline link-underline-opacity-0 link-underline-opacity-100-hover" href="">Instagram
                Lite</a>
            <a class="link-underline link-underline-opacity-0 link-underline-opacity-100-hover" href="">Threads</a>
            <a class="link-underline link-underline-opacity-0 link-underline-opacity-100-hover" href="">Upload de
                contatos e não usuários</a>
            <a class="link-underline link-underline-opacity-0 link-underline-opacity-100-hover" href="">Meta
                Verified</a>
        </div>


        <h6>2025 HeroGeek Carlos Eduardo</h6>
    </footer>
</body>

</html>