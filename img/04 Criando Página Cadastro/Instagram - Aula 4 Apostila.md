
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Meta tags obrigatórias para definir o conjunto de caracteres e responsividade -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Título da página que aparece na aba do navegador -->
    <title>Instagram - Cadastre-se</title>
    
    <!-- Link para o CSS do Bootstrap 5 via CDN (Content Delivery Network) -->
    <!-- CDN significa que estamos carregando o Bootstrap direto dos servidores do Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Link para os ícones do Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body>
    <!-- Container principal que centraliza todo o conteúdo da página -->
    <!-- bg-light = fundo cinza claro -->
    <!-- min-vh-100 = altura mínima de 100% da tela -->
    <!-- d-flex = display flex (usado para alinhar elementos) -->
    <!-- align-items-center = alinha verticalmente no centro -->
    <!-- justify-content-center = alinha horizontalmente no centro -->
    <div class="bg-light min-vh-100 d-flex align-items-center justify-content-center">
        
        <!-- Container que limita a largura do conteúdo -->
        <div class="container">
            
            <!-- Row (linha) do Bootstrap para organizar o layout em colunas -->
            <div class="row justify-content-center">
                
                <!-- Coluna que ocupa tamanhos diferentes dependendo do tamanho da tela -->
                <!-- col-12 = 12 colunas em telas muito pequenas (celular) -->
                <!-- col-md-6 = 6 colunas em telas médias (tablet) -->  
                <!-- col-lg-4 = 4 colunas em telas grandes (desktop) -->
                <div class="col-12 col-md-6 col-lg-4">
                    
                    <!-- Card principal que contém todo o formulário de cadastro -->
                    <!-- card = classe do Bootstrap que cria uma caixa com bordas arredondadas -->
                    <!-- shadow = adiciona uma sombra sutil -->
                    <!-- bg-white = fundo branco -->
                    <div class="card shadow bg-white">
                        
                        <!-- Corpo do card onde fica todo o conteúdo -->
                        <!-- card-body = espaçamento interno padrão do Bootstrap -->
                        <!-- p-4 = padding (espaçamento interno) de tamanho 4 -->
                        <div class="card-body p-4">
                            
                            <!-- Título "Instagram" centralizado -->
                            <!-- text-center = alinha o texto no centro -->
                            <!-- mb-3 = margin-bottom (margem inferior) de tamanho 3 -->
                            <!-- fw-bold = font-weight bold (texto em negrito) -->
                            <!-- display-4 = tamanho de fonte grande para títulos -->
                            <h1 class="text-center mb-3 fw-bold display-4" style="font-family: cursive;">Instagram</h1>
                            
                            <!-- Subtítulo explicativo -->
                            <!-- text-muted = cor de texto acinzentada (mais suave) -->
                            <!-- text-center = centraliza o texto -->
                            <!-- mb-4 = margem inferior de tamanho 4 -->
                            <!-- fs-6 = font-size 6 (tamanho de fonte pequeno) -->
                            <p class="text-muted text-center mb-4 fs-6">
                                Cadastre-se para ver fotos e vídeos dos seus amigos.
                            </p>
                            
                            <!-- Botão do Facebook -->
                            <!-- btn = classe base para botões do Bootstrap -->
                            <!-- btn-primary = botão com cor azul (cor principal) -->
                            <!-- w-100 = width 100% (largura total disponível) -->
                            <!-- mb-3 = margem inferior de tamanho 3 -->
                            <!-- d-flex = display flex para alinhar ícone e texto -->
                            <!-- align-items-center = alinha verticalmente no centro -->
                            <!-- justify-content-center = alinha horizontalmente no centro -->
                            <button class="btn btn-primary w-100 mb-3 d-flex align-items-center justify-content-center">
                                <!-- Ícone do Facebook usando Bootstrap Icons -->
                                <!-- bi-facebook = ícone específico do Facebook -->
                                <!-- me-2 = margin-end (margem à direita) de tamanho 2 -->
                                <i class="bi bi-facebook me-2"></i>
                                Entrar com o Facebook
                            </button>
                            
                            <!-- Divisor "OU" -->
                            <!-- d-flex = display flex -->
                            <!-- align-items-center = alinha verticalmente no centro -->
                            <!-- mb-3 = margem inferior de tamanho 3 -->
                            <div class="d-flex align-items-center mb-3">
                                <!-- Linha horizontal à esquerda -->
                                <!-- flex-grow-1 = cresce para ocupar espaço disponível -->
                                <!-- border-top = borda superior -->
                                <div class="flex-grow-1 border-top"></div>
                                
                                <!-- Texto "OU" no meio -->
                                <!-- mx-3 = margin horizontal (esquerda e direita) de tamanho 3 -->
                                <!-- text-muted = cor acinzentada -->
                                <!-- fw-bold = negrito -->
                                <span class="mx-3 text-muted fw-bold">OU</span>
                                
                                <!-- Linha horizontal à direita -->
                                <!-- flex-grow-1 = cresce para ocupar espaço disponível -->
                                <!-- border-top = borda superior -->
                                <div class="flex-grow-1 border-top"></div>
                            </div>
                            
                            <!-- Formulário de cadastro -->
                            <!-- Início do formulário HTML -->
                            <form>
                                
                                <!-- Campo para número de celular ou email -->
                                <!-- mb-3 = margem inferior de tamanho 3 -->
                                <div class="mb-3">
                                    <!-- form-control = classe do Bootstrap para campos de entrada -->
                                    <!-- Deixa o campo com aparência padrão e responsiva -->
                                    <input type="text" class="form-control" placeholder="Número do celular ou email">
                                </div>
                                
                                <!-- Campo para senha -->
                                <!-- mb-3 = margem inferior de tamanho 3 -->
                                <div class="mb-3">
                                    <!-- type="password" = esconde os caracteres digitados -->
                                    <!-- form-control = estilo padrão do Bootstrap para inputs -->
                                    <input type="password" class="form-control" placeholder="Senha">
                                </div>
                                
                                <!-- Campo para nome completo -->
                                <!-- mb-3 = margem inferior de tamanho 3 -->
                                <div class="mb-3">
                                    <!-- form-control = classe do Bootstrap para campos de entrada -->
                                    <input type="text" class="form-control" placeholder="Nome completo">
                                </div>
                                
                                <!-- Campo para nome de usuário -->
                                <!-- mb-3 = margem inferior de tamanho 3 -->
                                <div class="mb-3">
                                    <!-- form-control = classe do Bootstrap para campos de entrada -->
                                    <input type="text" class="form-control" placeholder="Nome de usuário">
                                </div>
                                
                                <!-- Texto explicativo sobre informações de contato -->
                                <!-- small = texto pequeno -->
                                <!-- text-muted = cor acinzentada -->
                                <!-- text-center = centralizado -->
                                <!-- mb-3 = margem inferior de tamanho 3 -->
                                <small class="text-muted text-center d-block mb-3">
                                    As pessoas que usam nosso serviço podem ter carregado suas informações de contato no Instagram. 
                                    <!-- Link "Saiba mais" -->
                                    <!-- text-decoration-none = remove o sublinhado padrão dos links -->
                                    <a href="#" class="text-decoration-none">Saiba mais</a>
                                </small>
                                
                                <!-- Texto sobre termos e políticas -->
                                <!-- small = texto pequeno -->
                                <!-- text-muted = cor acinzentada -->
                                <!-- text-center = centralizado -->
                                <!-- mb-3 = margem inferior de tamanho 3 -->
                                <small class="text-muted text-center d-block mb-3">
                                    Ao se cadastrar, você concorda com nossos 
                                    <!-- Links para Termos, Política de Privacidade e Cookies -->
                                    <!-- text-decoration-none = remove sublinhado dos links -->
                                    <a href="#" class="text-decoration-none">Termos</a>, 
                                    <a href="#" class="text-decoration-none">Política de Privacidade</a> e 
                                    <a href="#" class="text-decoration-none">Política de Cookies</a>.
                                </small>
                                
                                <!-- Botão de cadastro -->
                                <!-- btn = classe base para botões -->
                                <!-- btn-info = botão com cor azul claro/lilás -->
                                <!-- w-100 = largura 100% -->
                                <!-- mb-3 = margem inferior de tamanho 3 -->
                                <button type="submit" class="btn btn-info w-100 mb-3 text-white">
                                    Cadastre-se
                                </button>
                                
                            </form>
                            <!-- Fim do formulário -->
                            
                        </div>
                        <!-- Fim do corpo do card -->
                    </div>
                    <!-- Fim do card principal -->
                    
                    <!-- Card secundário para login -->
                    <!-- mt-3 = margin-top (margem superior) de tamanho 3 -->
                    <!-- card = caixa com bordas arredondadas -->
                    <!-- bg-white = fundo branco -->
                    <div class="card mt-3 bg-white">
                        <!-- card-body = espaçamento interno padrão -->
                        <!-- text-center = centraliza o conteúdo -->
                        <!-- py-3 = padding vertical (superior e inferior) de tamanho 3 -->
                        <div class="card-body text-center py-3">
                            <!-- Texto perguntando se já tem conta -->
                            Tem uma conta? 
                            <!-- Link para conectar (fazer login) -->
                            <!-- text-decoration-none = remove sublinhado -->
                            <!-- fw-bold = negrito -->
                            <a href="#" class="text-decoration-none fw-bold">Conecte-se</a>
                        </div>
                    </div>
                    
                    <!-- Seção "Obtenha o aplicativo" -->
                    <!-- text-center = centraliza o texto -->
                    <!-- mt-4 = margem superior de tamanho 4 -->
                    <!-- mb-3 = margem inferior de tamanho 3 -->
                    <div class="text-center mt-4 mb-3">
                        <p>Obtenha o aplicativo.</p>
                        
                        <!-- Container dos badges das lojas de aplicativos -->
                        <!-- d-flex = display flex -->
                        <!-- justify-content-center = centraliza horizontalmente -->
                        <!-- gap-2 = espaçamento entre os elementos -->
                        <div class="d-flex justify-content-center gap-2">
                            
                            <!-- Badge do Google Play -->
                            <!-- Link que simularia ir para a Google Play Store -->
                            <a href="#" class="text-decoration-none">
                                <!-- badge = crachá/emblema -->
                                <!-- bg-dark = fundo escuro -->
                                <!-- text-white = texto branco -->
                                <!-- px-3 = padding horizontal -->
                                <!-- py-2 = padding vertical -->
                                <!-- rounded = bordas arredondadas -->
                                <!-- d-flex = display flex -->
                                <!-- align-items-center = alinha verticalmente no centro -->
                                <div class="badge bg-dark text-white px-3 py-2 rounded d-flex align-items-center">
                                    <!-- Ícone do Google Play -->
                                    <!-- bi-google-play = ícone do Google Play -->
                                    <!-- me-2 = margem à direita -->
                                    <!-- fs-5 = tamanho da fonte 5 -->
                                    <i class="bi bi-google-play me-2 fs-5"></i>
                                    <!-- Texto do badge -->
                                    <div>
                                        <!-- d-block = display block (quebra linha) -->
                                        <!-- small = texto pequeno -->
                                        <small class="d-block">DISPONÍVEL NO</small>
                                        <!-- fw-bold = negrito -->
                                        <span class="fw-bold">Google Play</span>
                                    </div>
                                </div>
                            </a>
                            
                            <!-- Badge da Microsoft Store -->
                            <!-- Link que simularia ir para a Microsoft Store -->
                            <a href="#" class="text-decoration-none">
                                <!-- badge = crachá/emblema -->
                                <!-- bg-dark = fundo escuro -->
                                <!-- text-white = texto branco -->
                                <!-- px-3 = padding horizontal -->
                                <!-- py-2 = padding vertical -->
                                <!-- rounded = bordas arredondadas -->
                                <!-- d-flex = display flex -->
                                <!-- align-items-center = alinha verticalmente no centro -->
                                <div class="badge bg-dark text-white px-3 py-2 rounded d-flex align-items-center">
                                    <!-- Ícone da Microsoft -->
                                    <!-- bi-microsoft = ícone da Microsoft -->
                                    <!-- me-2 = margem à direita -->
                                    <!-- fs-5 = tamanho da fonte 5 -->
                                    <i class="bi bi-microsoft me-2 fs-5"></i>
                                    <!-- Texto do badge -->
                                    <div>
                                        <!-- d-block = display block (quebra linha) -->
                                        <!-- small = texto pequeno -->
                                        <small class="d-block">BAIXE DA</small>
                                        <!-- fw-bold = negrito -->
                                        <span class="fw-bold">Microsoft</span>
                                    </div>
                                </div>
                            </a>
                            
                        </div>
                        <!-- Fim do container dos badges -->
                    </div>
                    <!-- Fim da seção "Obtenha o aplicativo" -->
                    
                </div>
                <!-- Fim da coluna principal -->
            </div>
            <!-- Fim da row -->
        </div>
        <!-- Fim do container -->
    </div>
    <!-- Fim do container principal -->
    
    <!-- Rodapé da página -->
    <!-- bg-light = fundo cinza claro -->
    <!-- py-4 = padding vertical (superior e inferior) de tamanho 4 -->
    <!-- mt-auto = margem superior automática (empurra para baixo) -->
    <footer class="bg-light py-4 mt-auto">
        
        <!-- Container para o conteúdo do rodapé -->
        <div class="container">
            
            <!-- Lista de links do rodapé -->
            <!-- d-flex = display flex -->
            <!-- flex-wrap = permite quebra de linha -->
            <!-- justify-content-center = centraliza horizontalmente -->
            <!-- gap-3 = espaçamento entre os elementos -->
            <!-- mb-3 = margem inferior de tamanho 3 -->
            <div class="d-flex flex-wrap justify-content-center gap-3 mb-3">
                
                <!-- Cada link do rodapé -->
                <!-- text-decoration-none = remove sublinhado -->
                <!-- text-muted = cor acinzentada -->
                <!-- small = texto pequeno -->
                <a href="#" class="text-decoration-none text-muted small">Meta</a>
                <a href="#" class="text-decoration-none text-muted small">Sobre</a>
                <a href="#" class="text-decoration-none text-muted small">Blog</a>
                <a href="#" class="text-decoration-none text-muted small">Carreiras</a>
                <a href="#" class="text-decoration-none text-muted small">Ajuda</a>
                <a href="#" class="text-decoration-none text-muted small">API</a>
                <a href="#" class="text-decoration-none text-muted small">Privacidade</a>
                <a href="#" class="text-decoration-none text-muted small">Termos</a>
                <a href="#" class="text-decoration-none text-muted small">Localizações</a>
                <a href="#" class="text-decoration-none text-muted small">Instagram Lite</a>
                <a href="#" class="text-decoration-none text-muted small">Threads</a>
                <a href="#" class="text-decoration-none text-muted small">Upload de contatos e não usuários</a>
                <a href="#" class="text-decoration-none text-muted small">Meta Verified</a>
                
            </div>
            <!-- Fim da lista de links -->
            
            <!-- Seção inferior do rodapé -->
            <!-- d-flex = display flex -->
            <!-- justify-content-center = centraliza horizontalmente -->
            <!-- align-items-center = alinha verticalmente no centro -->
            <!-- gap-3 = espaçamento entre elementos -->
            <div class="d-flex justify-content-center align-items-center gap-3">
                
                <!-- Seletor de idioma -->
                <!-- text-muted = cor acinzentada -->
                <!-- small = texto pequeno -->
                <span class="text-muted small">Português (Brasil)</span>
                
                <!-- Copyright -->
                <!-- text-muted = cor acinzentada -->
                <!-- small = texto pequeno -->
                <span class="text-muted small">© 2025 Instagram from Meta</span>
                
            </div>
            <!-- Fim da seção inferior -->
            
        </div>
        <!-- Fim do container do rodapé -->
    </footer>
    <!-- Fim do rodapé -->

    <!-- Script do Bootstrap (JavaScript) -->
    <!-- Necessário para funcionalidades interativas como dropdowns, modais, etc -->
    <!-- Mesmo não usando JavaScript personalizado, é importante incluir para o Bootstrap funcionar completamente -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
    