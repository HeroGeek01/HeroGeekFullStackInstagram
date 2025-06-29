<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./img/logo.ico">
    <link rel="stylesheet" href="./css/estilos.css">
    <title>Instagram</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq"
        crossorigin="anonymous"></script>
    <script>
        funtion estaLogado(){
            idUsuario = localStorage.getItem('UsuarioLogadoID');
            NomeUsuario = localStorage.getItem('UsuarioLogadoNome');
            if (idUsuario === undefined || idUsuario === '' || NomeUsuario === undefined || NomeUsuario === '') {
                window.location.href = '.index.php';
                console.log('usuario não está logado!!!')
            }
        }

        function deslogar() {
            localStorage.setItem('UsuarioLogadoID', '');
            localStorage.setItem('UsuarioLogadoNome', '');
            window.location.href = '.index.php';
        }

        estaLogado();
    </script>
    <?php


    ?>
</head>

<body class="bg-light">
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar (Menu) -->
            <nav class="col-12 bg-white border-end p-3 position-fixed h-100 sidebar" style="max-width:300px">
                <div class="d-flex flex-column h-100">
                    <!-- Logo -->
                    <img src="" alt="">
                    <!-- Menu Navegação-->
                    <ul class="nav flex-column gap-2">
                        <li class="nav-item">
                            <a class="nav-link text-dark d-flex align-items-center gap-3 px-3 py-2 rounded"
                                href="./home.php">
                                <i class="bi bi-house fs-5"></i>
                                <p class=""> Página Inicial</p>

                            </a>
                        </li><li class="nav-item">
                            <a class="nav-link text-dark d-flex align-items-center gap-3 px-3 py-2 rounded" 
                               href="home.php">
                                <i class="bi bi-search fs-5"></i>
                                <span class="d-none d-md-inline">Pesquisa</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark d-flex align-items-center gap-3 px-3 py-2 rounded" 
                               href="mensagens.php">
                                <i class="bi bi-send fs-5"></i>
                                <span class="d-none d-md-inline">Mensagens</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark d-flex align-items-center gap-3 px-3 py-2 rounded" 
                               href="perfil.php">
                                <i class="bi bi-person-circle fs-5"></i>
                                <span class="d-none d-md-inline">Perfil</span>
                            </a>
                        </li>
                    </ul>


            </nav>
        <main class="col">

        </main>
        </div>
        <div>
</body>

</html>