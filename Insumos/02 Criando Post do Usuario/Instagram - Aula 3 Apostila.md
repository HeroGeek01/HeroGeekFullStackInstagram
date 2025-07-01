# Apostila Passo a Passo: Instagram Clone - Página de Pesquisa

## Passo a Passo do Código

### 1. `<!DOCTYPE html>`
- Define o tipo do documento como HTML5. Informa ao navegador que este é um documento HTML moderno.

### 2. `<html lang="pt-br">`
- Inicia o elemento raiz do HTML.
- O atributo `lang="pt-br"` indica que o conteúdo está em português do Brasil.

### 3. `<head>`
- Início da seção de cabeçalho do documento HTML. Aqui ficam as configurações, links e metadados.

### 4. `    <!-- Meta tags obrigatórias para o Bootstrap funcionar corretamente -->`
- Comentário explicando que as próximas linhas são meta tags necessárias para o Bootstrap.

### 5. `    <meta charset="UTF-8">`
- Define a codificação de caracteres como UTF-8, permitindo acentuação e caracteres especiais.

### 6. `    <meta name="viewport" content="width=device-width, initial-scale=1.0">`
- Define a viewport para responsividade, ajustando o layout para diferentes tamanhos de tela.

### 7. `    <!-- Título da página que aparece na aba do navegador -->`
- Comentário indicando que a próxima linha define o título da aba do navegador.

### 8. `    <title>Instagram Clone - Página de Pesquisa</title>`
- Define o texto que aparecerá na aba do navegador: "Instagram Clone - Página de Pesquisa".

### 9. `    <!-- Link para carregar o CSS do Bootstrap 5 da internet -->`
- Comentário explicando que o próximo link importa o CSS do Bootstrap 5.

### 10. `    <!-- Isso traz todos os estilos prontos que vamos usar -->`
- Comentário reforçando que o link anterior traz estilos prontos do Bootstrap.

### 11. `    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">`
- Importa o arquivo CSS do Bootstrap 5.3.0 de um CDN, permitindo usar as classes do Bootstrap.

### 12. `    <!-- Link para carregar os ícones do Bootstrap Icons -->`
- Comentário indicando que o próximo link importa os ícones do Bootstrap.

### 13. `    <!-- Isso nos dá acesso aos ícones como casa, lupa, etc -->`
- Comentário explicando que o link anterior permite usar ícones como casa, lupa, etc.

### 14. `    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">`
- Importa o CSS dos ícones do Bootstrap Icons versão 1.10.0, permitindo usar ícones no HTML.

### 15. `</head>`
- Fecha a seção de cabeçalho do documento HTML.

### 16. ``
- Linha em branco para organização visual do código.

### 17. `<body>`
- Início do corpo do documento HTML, onde o conteúdo visível da página é colocado.

### 18. `    <!-- Container principal que ocupa toda a tela -->`
- Comentário explicando que o próximo elemento é o container principal da página.

### 19. `    <!-- d-flex = display flex (para organizar elementos lado a lado) -->`
- Comentário explicando que a classe `d-flex` ativa o flexbox para organizar elementos horizontalmente.

### 20. `    <!-- vh-100 = height 100% da viewport (altura total da tela) -->`
- Comentário explicando que a classe `vh-100` faz o container ocupar 100% da altura da tela.

### 21. `    <div class="d-flex vh-100">`
- Cria um `div` com as classes `d-flex` (flexbox) e `vh-100` (altura total da tela), servindo como container principal.

### 22. `        `
- Linha em branco para organização visual do código.

### 23. `        <!-- MENU LATERAL PRINCIPAL (lado esquerdo) -->`
- Comentário indicando que o próximo bloco é o menu lateral principal, localizado à esquerda.

### 24. `        <!-- bg-white = fundo branco -->`
- Comentário explicando que a classe `bg-white` define o fundo branco.

### 25. `        <!-- border-end = borda à direita -->`
- Comentário explicando que a classe `border-end` adiciona uma borda à direita do elemento.

### 26. `        <!-- p-3 = padding (espaçamento interno) de 3 unidades -->`
- Comentário explicando que a classe `p-3` adiciona espaçamento interno de 3 unidades.

### 27. `        <!-- flex-shrink-0 = não permite que este elemento diminua -->`
- Comentário explicando que a classe `flex-shrink-0` impede que o elemento diminua de tamanho no flexbox.

### 28. `        <div class="bg-white border-end p-3 flex-shrink-0" style="width: 80px;">`
- Cria um `div` para o menu lateral com fundo branco, borda à direita, padding de 3, não encolhe no flexbox e largura fixa de 80px.

### 29. `            `
- Linha em branco para organização visual do código.

### 30. `            <!-- Logo do Instagram no topo -->`
- Comentário indicando que o próximo bloco é a logo do Instagram no topo do menu.

### 31. `            <!-- text-center = centraliza o texto -->`
- Comentário explicando que a classe `text-center` centraliza o conteúdo.

### 32. `            <!-- mb-4 = margin-bottom (espaço embaixo) de 4 unidades -->`
- Comentário explicando que a classe `mb-4` adiciona margem inferior de 4 unidades.

### 33. `            <div class="text-center mb-4">`
- Cria um `div` para a logo, centralizando o conteúdo e adicionando margem inferior.

### 34. `                <!-- Ícone do Instagram usando Bootstrap Icons -->`
- Comentário indicando que o próximo elemento é o ícone do Instagram.

### 35. `                <!-- fs-2 = font-size 2 (tamanho grande) -->`
- Comentário explicando que a classe `fs-2` define o tamanho da fonte como grande.

### 36. `                <!-- text-dark = cor do texto escura -->`
- Comentário explicando que a classe `text-dark` define a cor do texto como escura.

### 37. `                <i class="bi bi-instagram fs-2 text-dark"></i>`
- Adiciona o ícone do Instagram usando as classes do Bootstrap Icons, tamanho grande e cor escura.

### 38. `            </div>`
- Fecha o `div` da logo do Instagram.

### 39. `            `
- Linha em branco para organização visual do código.

### 40. `            <!-- Lista de ícones do menu -->`
- Comentário indicando que o próximo bloco é a lista de ícones do menu lateral.

### 41. `            <!-- nav = elemento de navegação -->`
- Comentário explicando que o elemento `nav` é usado para navegação.

### 42. `            <!-- flex-column = organiza os itens em coluna (um embaixo do outro) -->`
- Comentário explicando que a classe `flex-column` organiza os itens verticalmente.

### 43. `            <nav class="nav flex-column">`
- Cria um elemento de navegação com as classes `nav` e `flex-column`, organizando os links em coluna.

### 44. `                `
- Linha em branco para organização visual do código.

### 45. `                <!-- Botão Home (Início) -->`
- Comentário indicando que o próximo bloco é o botão Home (Início).

### 46. `                <!-- nav-link = estilo padrão para links de navegação -->`
- Comentário explicando que a classe `nav-link` aplica o estilo padrão de navegação.

### 47. `                <!-- text-dark = texto escuro -->`
- Comentário explicando que a classe `text-dark` deixa o texto escuro.

### 48. `                <!-- p-2 = padding de 2 unidades -->`
- Comentário explicando que a classe `p-2` adiciona padding de 2 unidades.

### 49. `                <!-- mb-2 = margin-bottom de 2 unidades -->`
- Comentário explicando que a classe `mb-2` adiciona margem inferior de 2 unidades.

### 50. `                <!-- text-center = centraliza o conteúdo -->`
- Comentário explicando que a classe `text-center` centraliza o conteúdo.

### 51. `                <a href="#" class="nav-link text-dark p-2 mb-2 text-center" aria-label="Início" title="Início">`
- Cria um link de navegação para Home, com texto escuro, padding, margem inferior e centralização.

### 52. `                    <!-- Ícone de casa -->`
- Comentário indicando que o próximo elemento é o ícone de casa.

### 53. `                    <!-- fs-4 = font-size 4 (tamanho médio-grande) -->`
- Comentário explicando que a classe `fs-4` define o tamanho da fonte como médio-grande.

### 54. `                    <i class="bi bi-house fs-4"></i>`
- Adiciona o ícone de casa usando Bootstrap Icons, tamanho médio-grande.

### 55. `                </a>`
- Fecha o link de navegação Home.

### 56. `                `
- Linha em branco para organização visual do código.

### 57. `                <!-- Botão Search (Pesquisa) -->`
- Comentário indicando que o próximo bloco é o botão de pesquisa.

### 58. `                <!-- Este botão está "ativo" porque estamos na página de pesquisa -->`
- Comentário explicando que este botão está destacado, pois representa a página atual.

### 59. `                <!-- bg-light = fundo claro para mostrar que está selecionado -->`
- Comentário explicando que a classe `bg-light` deixa o fundo claro, indicando seleção.

### 60. `                <!-- rounded = bordas arredondadas -->`
- Comentário explicando que a classe `rounded` deixa as bordas arredondadas.

### 61. `                <a href="#" class="nav-link text-dark p-2 mb-2 text-center bg-light rounded">`
- Cria um link de navegação para pesquisa, com texto escuro, padding, margem inferior, centralização, fundo claro e bordas arredondadas.

### 62. `                    <!-- Ícone de lupa (pesquisa) -->`
- Comentário indicando que o próximo elemento é o ícone de pesquisa (lupa).

### 63. `                    <i class="bi bi-search fs-4"></i>`
- Adiciona o ícone de pesquisa usando Bootstrap Icons, tamanho médio-grande.

### 64. `                </a>`
- Fecha o link de navegação de pesquisa.

### 65. `                `
- Linha em branco para organização visual do código.

### 66. `                <!-- Botão Explore (Explorar) -->`
- Comentário indicando que o próximo bloco é o botão de explorar.

### 67. `                <a href="#" class="nav-link text-dark p-2 mb-2 text-center">`
- Cria um link de navegação para explorar, com texto escuro, padding, margem inferior e centralização.

### 68. `                    <!-- Ícone de coração (curtidas/explorar) -->`
- Comentário indicando que o próximo elemento é o ícone de coração.

### 69. `                    <i class="bi bi-heart fs-4"></i>`
- Adiciona o ícone de coração usando Bootstrap Icons, tamanho médio-grande.

### 70. `                </a>`
- Fecha o link de navegação de explorar.

### 71. `                `
- Linha em branco para organização visual do código.

### 72. `                <!-- Botão Messages (Mensagens) -->`
- Comentário indicando que o próximo bloco é o botão de mensagens.

### 73. `                <a href="#" class="nav-link text-dark p-2 mb-2 text-center">`
- Cria um link de navegação para mensagens, com texto escuro, padding, margem inferior e centralização.

### 74. `                    <!-- Ícone de chat (mensagens) -->`
- Comentário indicando que o próximo elemento é o ícone de chat.

### 75. `                    <i class="bi bi-chat fs-4"></i>`
- Adiciona o ícone de chat usando Bootstrap Icons, tamanho médio-grande.

### 76. `                </a>`
- Fecha o link de navegação de mensagens.

### 77. `            </nav>`
- Fecha o elemento de navegação do menu lateral.

### 78. `        </div>`
- Fecha o `div` do menu lateral principal.

### 79. `        `
- Linha em branco para organização visual do código.

### 80. `        <!-- PAINEL DE PESQUISA (meio-esquerdo) -->`
- Comentário indicando que o próximo bloco é o painel de pesquisa, localizado no meio à esquerda.

### 81. `        <!-- Este painel aparece quando clicamos no ícone de pesquisa -->`
- Comentário explicando que este painel é exibido ao clicar no ícone de pesquisa.

### 82. `        <!-- bg-white = fundo branco -->`
- Comentário explicando que a classe `bg-white` define o fundo branco.

### 83. `        <!-- border-end = borda à direita -->`
- Comentário explicando que a classe `border-end` adiciona uma borda à direita.

### 84. `        <!-- p-3 = padding de 3 unidades -->`
- Comentário explicando que a classe `p-3` adiciona padding de 3 unidades.

### 85. `        <!-- flex-shrink-0 = não permite que diminua de tamanho -->`
- Comentário explicando que a classe `flex-shrink-0` impede que o elemento diminua de tamanho no flexbox.

### 86. `        <div class="bg-white border-end p-3 flex-shrink-0" style="width: 350px;">`
- Cria um `div` para o painel de pesquisa, com fundo branco, borda à direita, padding de 3, não encolhe no flexbox e largura fixa de 350px.

### 87. `            `
- Linha em branco para organização visual do código.

### 88. `            <!-- Título do painel de pesquisa -->`
- Comentário indicando que o próximo elemento é o título do painel de pesquisa.

### 89. `            <!-- h4 = heading 4 (título de tamanho médio) -->`
- Comentário explicando que a tag `h4` é um título de nível 4, tamanho médio.

### 90. `            <!-- fw-bold = font-weight bold (texto em negrito) -->`
- Comentário explicando que a classe `fw-bold` deixa o texto em negrito.

### 91. `            <!-- mb-3 = margin-bottom de 3 unidades -->`
- Comentário explicando que a classe `mb-3` adiciona margem inferior de 3 unidades.

### 92. `            <h4 class="fw-bold mb-3">Pesquisa</h4>`
- Cria um título "Pesquisa" com negrito e margem inferior.

### 93. `            `
- Linha em branco para organização visual do código.

### 94. `            <!-- Campo de entrada para digitar a pesquisa -->`
- Comentário indicando que o próximo bloco é o campo de entrada para pesquisa.

### 95. `            <!-- mb-3 = margin-bottom de 3 unidades -->`
- Comentário explicando que a classe `mb-3` adiciona margem inferior de 3 unidades.

### 96. `            <div class="mb-3">`
- Cria um `div` com margem inferior de 3 unidades para o campo de pesquisa.

### 97. `                <!-- input-group = agrupa o campo de entrada com outros elementos -->`
- Comentário explicando que a classe `input-group` agrupa o campo de entrada com outros elementos.

### 98. `                <div class="input-group">`
- Cria um `div` com a classe `input-group` para agrupar o campo de entrada.

### 99. `                    <!-- form-control = estilo padrão para campos de entrada -->`
- Comentário explicando que a classe `form-control` aplica o estilo padrão de campos de entrada.

### 100. `                    <!-- bg-light = fundo claro -->`
- Comentário explicando que a classe `bg-light` deixa o fundo do campo claro.

### 101. `                    <!-- border-0 = sem borda -->`
- Comentário explicando que a classe `border-0` remove a borda do campo.

### 102. `                    <!-- value=\"paula\" = texto que já aparece no campo (como na imagem) -->`
- Comentário explicando que o atributo `value="paula"` faz o campo já aparecer preenchido com "paula".

### 103. `                    <input type="text" class="form-control bg-light border-0" placeholder="Pesquisar" value="paula">`
- Cria um campo de texto para pesquisa, com fundo claro, sem borda, preenchido com "paula" e placeholder "Pesquisar".

### 104. `                </div>`
- Fecha o `div` do grupo de entrada.

### 105. `            </div>`
- Fecha o `div` do campo de pesquisa.

```html
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Meta tags obrigatórias para o Bootstrap funcionar corretamente -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Título da página que aparece na aba do navegador -->
    <title>Instagram Clone - Página de Pesquisa</title>
    
    <!-- Link para carregar o CSS do Bootstrap 5 da internet -->
    <!-- Isso traz todos os estilos prontos que vamos usar -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Link para carregar os ícones do Bootstrap Icons -->
    <!-- Isso nos dá acesso aos ícones como casa, lupa, etc -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body>
    <!-- Container principal que ocupa toda a tela -->
    <!-- d-flex = display flex (para organizar elementos lado a lado) -->
    <!-- vh-100 = height 100% da viewport (altura total da tela) -->
    <div class="d-flex vh-100">
        
        <!-- MENU LATERAL PRINCIPAL (lado esquerdo) -->
        <!-- bg-white = fundo branco -->
        <!-- border-end = borda à direita -->
        <!-- p-3 = padding (espaçamento interno) de 3 unidades -->
        <!-- flex-shrink-0 = não permite que este elemento diminua -->
        <div class="bg-white border-end p-3 flex-shrink-0" style="width: 80px;">
            
            <!-- Logo do Instagram no topo -->
            <!-- text-center = centraliza o texto -->
            <!-- mb-4 = margin-bottom (espaço embaixo) de 4 unidades -->
            <div class="text-center mb-4">
                <!-- Ícone do Instagram usando Bootstrap Icons -->
                <!-- fs-2 = font-size 2 (tamanho grande) -->
                <!-- text-dark = cor do texto escura -->
                <i class="bi bi-instagram fs-2 text-dark"></i>
            </div>
            
            <!-- Lista de ícones do menu -->
            <!-- nav = elemento de navegação -->
            <!-- flex-column = organiza os itens em coluna (um embaixo do outro) -->
            <nav class="nav flex-column">
                
                <!-- Botão Home (Início) -->
                <!-- nav-link = estilo padrão para links de navegação -->
                <!-- text-dark = texto escuro -->
                <!-- p-2 = padding de 2 unidades -->
                <!-- mb-2 = margin-bottom de 2 unidades -->
                <!-- text-center = centraliza o conteúdo -->
                <a href="#" class="nav-link text-dark p-2 mb-2 text-center" aria-label="Início" title="Início">
                    <!-- Ícone de casa -->
                    <!-- fs-4 = font-size 4 (tamanho médio-grande) -->
                    <i class="bi bi-house fs-4"></i>
                </a>
                
                <!-- Botão Search (Pesquisa) -->
                <!-- Este botão está "ativo" porque estamos na página de pesquisa -->
                <!-- bg-light = fundo claro para mostrar que está selecionado -->
                <!-- rounded = bordas arredondadas -->
                <a href="#" class="nav-link text-dark p-2 mb-2 text-center bg-light rounded">
                    <!-- Ícone de lupa (pesquisa) -->
                    <i class="bi bi-search fs-4"></i>
                </a>
                
                <!-- Botão Explore (Explorar) -->
                <a href="#" class="nav-link text-dark p-2 mb-2 text-center">
                    <!-- Ícone de coração (curtidas/explorar) -->
                    <i class="bi bi-heart fs-4"></i>
                </a>
                
                <!-- Botão Messages (Mensagens) -->
                <a href="#" class="nav-link text-dark p-2 mb-2 text-center">
                    <!-- Ícone de chat (mensagens) -->
                    <i class="bi bi-chat fs-4"></i>
                </a>
                
            </nav>
        </div>
        
        <!-- PAINEL DE PESQUISA (meio-esquerdo) -->
        <!-- Este painel aparece quando clicamos no ícone de pesquisa -->
        <!-- bg-white = fundo branco -->
        <!-- border-end = borda à direita -->
        <!-- p-3 = padding de 3 unidades -->
        <!-- flex-shrink-0 = não permite que diminua de tamanho -->
        <div class="bg-white border-end p-3 flex-shrink-0" style="width: 350px;">
            
            <!-- Título do painel de pesquisa -->
            <!-- h4 = heading 4 (título de tamanho médio) -->
            <!-- fw-bold = font-weight bold (texto em negrito) -->
            <!-- mb-3 = margin-bottom de 3 unidades -->
            <h4 class="fw-bold mb-3">Pesquisa</h4>
            
            <!-- Campo de entrada para digitar a pesquisa -->
            <!-- mb-3 = margin-bottom de 3 unidades -->
            <div class="mb-3">
                <!-- input-group = agrupa o campo de entrada com outros elementos -->
                <div class="input-group">
                    <!-- form-control = estilo padrão para campos de entrada -->
                    <!-- bg-light = fundo claro -->
                    <!-- border-0 = sem borda -->
                    <!-- value="paula" = texto que já aparece no campo (como na imagem) -->
                    <input type="text" class="form-control bg-light border-0" placeholder="Pesquisar" value="paula">
                </div>
            </div>
            
            <!-- Lista de resultados da pesquisa -->
            <!-- Cada resultado é um usuário que corresponde à pesquisa "paula" -->
            <div>
                
                <!-- Primeiro resultado: paula.daniela1992 -->
                <!-- d-flex = display flex (organiza elementos lado a lado) -->
                <!-- align-items-center = alinha verticalmente ao centro -->
                <!-- p-2 = padding de 2 unidades -->
                <!-- mb-2 = margin-bottom de 2 unidades -->
                <!-- rounded = bordas arredondadas -->
                <!-- Este div funciona como um botão clicável -->
                <div class="d-flex align-items-center p-2 mb-2 rounded hover-effect" style="cursor: pointer;">
                    
                    <!-- Avatar (foto do perfil) -->
                    <!-- me-3 = margin-end (margem à direita) de 3 unidades -->
                    <!-- flex-shrink-0 = não permite que a imagem diminua -->
                    <div class="me-3 flex-shrink-0">
                        <!-- rounded-circle = faz a imagem ficar redonda -->
                        <!-- Usando uma imagem placeholder do site picsum.photos -->
                        <img src="https://picsum.photos/seed/paula1/40/40" alt="Avatar de paula.daniela1992" class="rounded-circle" width="40" height="40">
                    </div>
                    
                    <!-- Informações do usuário (nome e username) -->
                    <div>
                        <!-- Nome de usuário em negrito -->
                        <!-- fw-bold = font-weight bold -->
                        <!-- mb-0 = margin-bottom 0 (sem espaço embaixo) -->
                        <div class="fw-bold mb-0">paula.daniela1992</div>
                        <!-- Nome real em cor mais clara -->
                        <!-- text-muted = cor do texto mais clara/cinza -->
                        <!-- small = texto menor -->
                        <div class="text-muted small">Paula Daniela • Seguindo(a) por jaopaulo1440...</div>
                    </div>
                </div>
                
                <!-- Segundo resultado: paulaarquitetta -->
                <!-- Mesma estrutura do resultado anterior -->
                <div class="d-flex align-items-center p-2 mb-2 rounded hover-effect" style="cursor: pointer;">
                    <div class="me-3 flex-shrink-0">
                        <!-- Usando seed diferente para gerar avatar diferente -->
                        <img src="https://picsum.photos/seed/paula2/40/40" alt="Avatar de paulaarquitetta" class="rounded-circle" width="40" height="40">
                    </div>
                    <div>
                        <div class="fw-bold mb-0">paulaarquitetta</div>
                        <div class="text-muted small">Paula Gonçalves | Arquiteta • Seguindo(a) por j...</div>
                    </div>
                </div>
                
                <!-- Terceiro resultado: _mariapaulaaps -->
                <div class="d-flex align-items-center p-2 mb-2 rounded hover-effect" style="cursor: pointer;">
                    <div class="me-3 flex-shrink-0">
                        <img src="https://picsum.photos/seed/paula3/40/40" alt="Avatar de _mariapaulaaps" class="rounded-circle" width="40" height="40">
                    </div>
                    <div>
                        <div class="fw-bold mb-0">_mariapaulaaps</div>
                        <div class="text-muted small">Maria Paula • Seguindo(a) por jgcamposj e m...</div>
                    </div>
                </div>
                
                <!-- Quarto resultado: mariasouto14_ -->
                <div class="d-flex align-items-center p-2 mb-2 rounded hover-effect" style="cursor: pointer;">
                    <div class="me-3 flex-shrink-0">
                        <img src="https://picsum.photos/seed/paula4/40/40" alt="Avatar de mariasouto14_" class="rounded-circle" width="40" height="40">
                    </div>
                    <div>
                        <div class="fw-bold mb-0">mariasouto14_</div>
                        <div class="text-muted small">Maria Paula Souto</div>
                    </div>
                </div>
                
                <!-- Quinto resultado: paulasilva3884 -->
                <div class="d-flex align-items-center p-2 mb-2 rounded hover-effect" style="cursor: pointer;">
                    <div class="me-3 flex-shrink-0">
                        <img src="https://picsum.photos/seed/paula5/40/40" alt="Avatar de paulasilva3884" class="rounded-circle" width="40" height="40">
                    </div>
                    <div>
                        <div class="fw-bold mb-0">paulasilva3884</div>
                        <div class="text-muted small">Paulinha Lima • Seguindo(a) por jaopaulo1440...</div>
                    </div>
                </div>
                
            </div>
        </div>
        
        <!-- ÁREA PRINCIPAL DE CONTEÚDO (lado direito) -->
        <!-- Esta área normalmente mostraria o perfil selecionado ou o feed -->
        <!-- Na imagem está vazia porque o usuário está apenas pesquisando -->
        <!-- flex-grow-1 = ocupa todo o espaço restante -->
        <!-- bg-white = fundo branco -->
        <!-- d-flex = display flex -->
        <!-- align-items-center = alinha verticalmente ao centro -->
        <!-- justify-content-center = alinha horizontalmente ao centro -->
        <div class="flex-grow-1 bg-white d-flex align-items-center justify-content-center">
            
            <!-- Mensagem explicativa (esta parte não aparece na imagem original) -->
            <!-- text-center = centraliza o texto -->
            <!-- text-muted = cor do texto mais clara -->
            <div class="text-center text-muted">
                <!-- Ícone grande de pesquisa -->
                <!-- display-1 = tamanho muito grande -->
                <!-- mb-3 = margin-bottom de 3 unidades -->
                <i class="bi bi-search display-1 mb-3"></i>
                <!-- Texto explicativo -->
                <!-- h5 = heading 5 (título pequeno) -->
                <h5>Selecione um resultado da pesquisa</h5>
                <!-- Texto menor com mais detalhes -->
                <p>Clique em um dos usuários encontrados para ver o perfil</p>
            </div>
            
        </div>
        
    </div>

    <!-- Script do Bootstrap (JavaScript) -->
    <!-- Este script adiciona funcionalidades interativas aos componentes do Bootstrap -->
    <!-- Colocamos no final do body para a página carregar mais rápido -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- 
    EXPLICAÇÃO GERAL DA ESTRUTURA:
    
    1. CONTAINER PRINCIPAL (d-flex vh-100):
       - Usa flexbox para organizar os elementos lado a lado
       - Ocupa 100% da altura da tela
    
    2. MENU LATERAL (80px de largura):
       - Contém os ícones principais (home, pesquisa, etc.)
       - Fica fixo no lado esquerdo
       - O ícone de pesquisa está destacado (fundo claro)
    
    3. PAINEL DE PESQUISA (350px de largura):
       - Mostra o campo de busca e os resultados
       - Lista os usuários encontrados com avatar e informações
       - Cada resultado é clicável (cursor: pointer)
    
    4. ÁREA PRINCIPAL (ocupa o resto da tela):
       - Normalmente mostraria o feed ou perfil selecionado
       - Está vazia como na imagem original
       - Contém apenas uma mensagem explicativa
    
    CLASSES BOOTSTRAP MAIS USADAS:
    
    - d-flex: transforma o elemento em flex container
    - flex-column: organiza filhos em coluna (vertical)
    - align-items-center: alinha verticalmente ao centro
    - justify-content-center: alinha horizontalmente ao centro
    - mb-X: margin-bottom (espaço embaixo)
    - me-X: margin-end (espaço à direita)
    - p-X: padding (espaçamento interno)
    - bg-white: fundo branco
    - bg-light: fundo claro
    - text-center: centraliza texto
    - text-muted: texto em cor clara
    - fw-bold: texto em negrito
    - rounded: bordas arredondadas
    - border-end: borda à direita
    
    O número X nas classes (como mb-3, p-2) representa o tamanho:
    - 0 = sem espaço
    - 1 = pequeno
    - 2 = médio-pequeno  
    - 3 = médio
    - 4 = médio-grande
    - 5 = grande
    -->

</body>
</html>
```

/* Exemplo de CSS para hover */
.hover-effect:hover {
  background-color: #f8f9fa;
}

