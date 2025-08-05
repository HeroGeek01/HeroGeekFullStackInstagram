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
                        </li>
                        <li class="nav-item">
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
                        <li class="nav-item">
                            <button class="btn btn-primary me-2" data-bs-toggle="modal"
                                data-bs-target="#criarPostModal">
                                <!-- Ícone de mais -->
                                <i class="bi bi-plus-circle"></i>
                                Criar Post
                            </button>
                        </li>
                    </ul>


            </nav>
            <main class="col">

            </main>
        </div>
        <div>
            <!-- POPUP/MODAL PARA CRIAR NOVO POST -->
            <!-- Modal é o componente do Bootstrap para criar popups -->
            <!-- fade adiciona animação de aparecer/desaparecer -->
            <div class="modal fade" id="criarPostModal" tabindex="-1" aria-labelledby="criarPostModalLabel"
                aria-hidden="true">

                <!-- Contêiner do modal -->
                <!-- modal-dialog-centered centraliza o modal na tela -->
                <div class="modal-dialog modal-dialog-centered">

                    <!-- Conteúdo do modal -->
                    <div class="modal-content">

                        <!-- Cabeçalho do modal -->
                        <!-- modal-header é a classe para o topo do modal -->
                        <div class="modal-header">
                            <!-- Título do modal -->
                            <!-- modal-title é a classe para o título -->
                            <h5 class="modal-title" id="criarPostModalLabel">
                                <!-- Ícone de câmera -->
                                <i class="bi bi-camera"></i>
                                Criar Novo Post
                            </h5>

                            <!-- Botão X para fechar o modal -->
                            <!-- btn-close é a classe do Bootstrap para botão de fechar -->
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Fechar"></button>
                        </div>

                        <!-- Corpo do modal -->
                        <!-- modal-body é onde fica o conteúdo principal -->
                        <div class="modal-body">

                            <!-- Formulário para criar o post -->
                            <form>

                                <!-- Campo para upload de imagem -->
                                <!-- mb-3 adiciona margem na parte inferior -->
                                <div class="mb-3">
                                    <!-- Label (texto) para o campo -->
                                    <!-- form-label é a classe do Bootstrap para labels -->
                                    <label for="imagemPost" class="form-label">
                                        <!-- Ícone de imagem -->
                                        <i class="bi bi-image"></i>
                                        Selecionar Imagem
                                    </label>

                                    <!-- Campo de upload de arquivo -->
                                    <!-- form-control é a classe padrão para inputs -->
                                    <input type="file" class="form-control" id="imagemPost" accept="image/*">

                                    <!-- Texto de ajuda abaixo do campo -->
                                    <!-- form-text text-muted são classes para texto de ajuda -->
                                    <div class="form-text text-muted">
                                        Escolha uma imagem para o seu post (JPG, PNG, GIF)
                                    </div>
                                </div>

                                <!-- Campo para a legenda do post -->
                                <div class="mb-3">
                                    <!-- Label para o campo de texto -->
                                    <label for="legendaPost" class="form-label">
                                        <!-- Ícone de texto -->
                                        <i class="bi bi-chat-left-text"></i>
                                        Legenda do Post
                                    </label>

                                    <!-- Campo de texto grande (textarea) -->
                                    <!-- form-control é a classe padrão -->
                                    <textarea class="form-control" id="legendaPost" rows="4"
                                        placeholder="Escreva uma legenda para o seu post..."></textarea>

                                    <!-- Texto de ajuda -->
                                    <div class="form-text text-muted">
                                        Conte a história da sua foto! Use hashtags (#) para alcançar mais pessoas
                                    </div>
                                </div>

                                <!-- Campo para localização (opcional) -->
                                <div class="mb-3">
                                    <!-- Label para localização -->
                                    <label for="localizacaoPost" class="form-label">
                                        <!-- Ícone de localização -->
                                        <i class="bi bi-geo-alt"></i>
                                        Localização (opcional)
                                    </label>

                                    <!-- Campo de texto simples -->
                                    <input type="text" class="form-control" id="localizacaoPost"
                                        placeholder="Ex: São Paulo, Brasil">

                                    <!-- Texto de ajuda -->
                                    <div class="form-text text-muted">
                                        Adicione onde a foto foi tirada
                                    </div>
                                </div>

                                <!-- Prévia da imagem selecionada -->
                                <!-- d-none esconde o elemento inicialmente -->
                                <div class="mb-3 d-none" id="previaImagem">
                                    <!-- Título da prévia -->
                                    <label class="form-label">
                                        <!-- Ícone de olho -->
                                        <i class="bi bi-eye"></i>
                                        Prévia da Imagem
                                    </label>

                                    <!-- Container da prévia -->
                                    <!-- text-center centraliza o conteúdo -->
                                    <div class="text-center">
                                        <!-- Imagem de prévia -->
                                        <!-- img-fluid torna responsiva, rounded adiciona bordas arredondadas -->
                                        <img id="imagemPrevia" src="" alt="Prévia" class="img-fluid rounded"
                                            style="max-height: 300px;">
                                    </div>
                                </div>
                            </form>
                        </div>

                        <!-- Rodapé do modal -->
                        <!-- modal-footer é a classe para a parte inferior -->
                        <div class="modal-footer">

                            <!-- Botão para cancelar -->
                            <!-- btn-secondary é um botão cinza -->
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                <!-- Ícone de X -->
                                <i class="bi bi-x-circle"></i>
                                Cancelar
                            </button>

                            <!-- Botão para publicar o post -->
                            <!-- btn-primary é um botão azul -->
                            <button type="button" class="btn btn-primary">
                                <!-- Ícone de check -->
                                <i class="bi bi-check-circle"></i>
                                Publicar Post
                            </button>
                        </div>
                    </div>
                </div>
            </div>
</body>

</html>