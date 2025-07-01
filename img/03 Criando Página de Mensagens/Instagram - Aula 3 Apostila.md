<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <!-- Meta tags obrigatórias para o Bootstrap -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instagram Clone - Mensagens</title>
    
    <!-- Link para o CSS do Bootstrap (framework de CSS) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Link para os ícones do Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    
    <style>
        /* Cores customizadas para parecer com o Instagram real */
        :root {
            --instagram-bg: #fafafa;
            --instagram-white: #ffffff;
            --instagram-border: #dbdbdb;
            --instagram-text: #262626;
            --instagram-text-light: #8e8e8e;
            --instagram-blue: #0095f6;
            --instagram-message-bg: #efefef;
            --instagram-user-message: #0095f6;
        }
        
        body {
            background-color: var(--instagram-bg) !important;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif !important;
        }
        
        .instagram-border {
            border-color: var(--instagram-border) !important;
        }
        
        .instagram-text {
            color: var(--instagram-text) !important;
        }
        
        .instagram-text-light {
            color: var(--instagram-text-light) !important;
        }
        
        .instagram-blue {
            color: var(--instagram-blue) !important;
        }
        
        .message-received {
            background-color: var(--instagram-message-bg) !important;
            border: 1px solid var(--instagram-border) !important;
        }
        
        .message-sent {
            background-color: var(--instagram-user-message) !important;
            color: white !important;
        }
        
        .chat-input {
            border: 1px solid var(--instagram-border) !important;
            background-color: var(--instagram-white) !important;
        }
        
        .sidebar-nav {
            background-color: var(--instagram-white) !important;
            border-right: 1px solid var(--instagram-border) !important;
        }
        
        .conversation-item:hover {
            background-color: #f5f5f5 !important;
        }
        
        .conversation-selected {
            background-color: #f0f0f0 !important;
        }
    </style>
</head>

<body>
    <!-- Container principal que ocupa toda a altura da tela -->
    <div class="container-fluid vh-100">
        <!-- Row (linha) principal que divide a tela em colunas -->
        <div class="row h-100">
            
            <!-- COLUNA 1: BARRA DE NAVEGAÇÃO LATERAL ESQUERDA -->
            <div class="col-1 sidebar-nav">
                <div class="d-flex flex-column align-items-center py-4">
                    <!-- Logo do Instagram -->
                    <i class="bi bi-instagram fs-2 instagram-text mb-4"></i>
                    <!-- Ícone de casa (home/início) -->
                    <i class="bi bi-house fs-4 instagram-text mb-4"></i>
                    <!-- Ícone de mensagem (avião de papel) - ATIVO -->
                    <i class="bi bi-send fs-4 instagram-blue"></i>
                </div>
            </div>
            
            <!-- COLUNA 2: LISTA DE CONVERSAS -->
            <div class="col-4 sidebar-nav">
                <!-- Cabeçalho da seção de mensagens -->
                <div class="p-3" style="border-bottom: 1px solid var(--instagram-border);">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h5 class="mb-0 instagram-text fw-bold">mariana.santos92</h5>
                        <i class="bi bi-chevron-down instagram-text"></i>
                    </div>
                    <!-- Campo de pesquisa -->
                    <input type="text" class="form-control chat-input rounded-pill py-2" placeholder="Pesquisar" style="background-color: #f5f5f5;">
                </div>
                
                
                
                <!-- Lista de conversas -->
                <div class="overflow-auto" style="height: calc(100vh - 280px);">
                    
                    <!-- Conversa 1: Ana Clara -->
                    <div class="p-3 conversation-item" style="border-bottom: 1px solid var(--instagram-border);">
                        <div class="d-flex align-items-center">
                            <div class="bg-primary rounded-circle me-3 d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                <i class="bi bi-person-fill text-white"></i>
                            </div>
                            <div>
                                <div class="fw-bold instagram-text">Ana Clara</div>
                                <small class="instagram-text-light">Online há 2 min</small>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Conversa 2: Pedro Henrique -->
                    <div class="p-3 conversation-item" style="border-bottom: 1px solid var(--instagram-border);">
                        <div class="d-flex align-items-center">
                            <div class="bg-success rounded-circle me-3 d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                <i class="bi bi-person-fill text-white"></i>
                            </div>
                            <div>
                                <div class="fw-bold instagram-text">Pedro Henrique</div>
                                <small class="instagram-text-light">Online há 15 min</small>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Conversa 3: Gabriela Lima -->
                    <div class="p-3 conversation-item" style="border-bottom: 1px solid var(--instagram-border);">
                        <div class="d-flex align-items-center">
                            <div class="bg-warning rounded-circle me-3 d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                <i class="bi bi-person-fill text-white"></i>
                            </div>
                            <div>
                                <div class="fw-bold instagram-text">Gabriela Lima</div>
                                <small class="instagram-text-light">• 2 h</small>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Conversa 4: João Victor -->
                    <div class="p-3 conversation-item" style="border-bottom: 1px solid var(--instagram-border);">
                        <div class="d-flex align-items-center">
                            <div class="bg-info rounded-circle me-3 d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                <i class="bi bi-person-fill text-white"></i>
                            </div>
                            <div>
                                <div class="fw-bold instagram-text">João Victor</div>
                                <small class="instagram-text-light">Online há 1 h</small>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Conversa 5: Larissa Oliveira (SELECIONADA) -->
                    <div class="p-3 conversation-selected" style="border-bottom: 1px solid var(--instagram-border);">
                        <div class="d-flex align-items-center">
                            <div class="bg-danger rounded-circle me-3 d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                <i class="bi bi-person-fill text-white"></i>
                            </div>
                            <div>
                                <div class="fw-bold instagram-text">Larissa Oliveira</div>
                                <small class="instagram-text-light">Online agora</small>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Conversa 6: Rafael Costa -->
                    <div class="p-3 conversation-item" style="border-bottom: 1px solid var(--instagram-border);">
                        <div class="d-flex align-items-center">
                            <div class="bg-secondary rounded-circle me-3 d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                <i class="bi bi-person-fill text-white"></i>
                            </div>
                            <div>
                                <div class="fw-bold instagram-text">Rafael Costa</div>
                                <small class="instagram-text-light">• 1 dia</small>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Conversa 7: Camila Ferreira -->
                    <div class="p-3 conversation-item" style="border-bottom: 1px solid var(--instagram-border);">
                        <div class="d-flex align-items-center">
                            <div class="bg-dark rounded-circle me-3 d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                <i class="bi bi-person-fill text-white"></i>
                            </div>
                            <div>
                                <div class="fw-bold instagram-text">Camila Ferreira</div>
                                <small class="instagram-text-light">• 3 dias</small>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            
            <!-- COLUNA 3: ÁREA DE CHAT PRINCIPAL -->
            <div class="col-7" style="background-color: var(--instagram-white);">
                
                <!-- Cabeçalho do chat -->
                <div class="p-3" style="border-bottom: 1px solid var(--instagram-border);">
                    <div class="d-flex align-items-center">
                        <!-- Avatar do contato ativo -->
                        <div class="bg-danger rounded-circle me-3 d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                            <i class="bi bi-person-fill text-white"></i>
                        </div>
                        <div>
                            <div class="fw-bold instagram-text">Larissa Oliveira</div>
                            <small class="instagram-text-light">Online agora</small>
                        </div>
                    </div>
                </div>
                
                <!-- Área das mensagens -->
                <div class="flex-grow-1 overflow-auto p-3" style="height: calc(100vh - 160px);">
                    
                    <!-- Data da conversa -->
                    <div class="text-center mb-4">
                        <small class="instagram-text-light">Hoje 14:30</small>
                    </div>
                    
                    <!-- Mensagem recebida -->
                    <div class="d-flex mb-3">
                        <div class="me-2">
                            <div class="bg-danger rounded-circle d-flex align-items-center justify-content-center" style="width: 30px; height: 30px;">
                                <i class="bi bi-person-fill text-white fs-6"></i>
                            </div>
                        </div>
                        <div>
                            <div class="message-received rounded p-2" style="max-width: 300px;">
                                <span class="instagram-text">Oi! Tudo bem? Conseguiu fazer aquele trabalho de história?</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- MENSAGEM ENVIADA (pelo usuário) - À DIREITA -->
                    <div class="d-flex justify-content-end mb-3">
                        <div>
                            <div class="message-sent rounded p-2" style="max-width: 300px;">
                                <span>Oi Lari! Tudo sim! Consegui terminar ontem à noite 😅</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Mensagem recebida -->
                    <div class="d-flex mb-3">
                        <div class="me-2">
                            <div class="bg-danger rounded-circle d-flex align-items-center justify-content-center" style="width: 30px; height: 30px;">
                                <i class="bi bi-person-fill text-white fs-6"></i>
                            </div>
                        </div>
                        <div>
                            <div class="message-received rounded p-2" style="max-width: 300px;">
                                <span class="instagram-text">Que alívio! Eu ainda tô fazendo aqui kkkk</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- MENSAGEM ENVIADA -->
                    <div class="d-flex justify-content-end mb-3">
                        <div>
                            <div class="message-sent rounded p-2" style="max-width: 300px;">
                                <span>Quer ajuda? Posso mandar minhas anotações!</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Mensagem recebida com emojis -->
                    <div class="d-flex mb-3">
                        <div class="me-2">
                            <div class="bg-danger rounded-circle d-flex align-items-center justify-content-center" style="width: 30px; height: 30px;">
                                <i class="bi bi-person-fill text-white fs-6"></i>
                            </div>
                        </div>
                        <div>
                            <div class="message-received rounded p-2 mb-2" style="max-width: 300px;">
                                <span class="instagram-text">Sério?! Você é um anjo! 😍❤️</span>
                            </div>
                            <!-- Reações de emoji -->
                            <div class="d-flex">
                                <div class="bg-warning rounded-circle text-center me-1" style="width: 20px; height: 20px; line-height: 20px; font-size: 12px;">❤️</div>
                                <div class="bg-warning rounded-circle text-center me-1" style="width: 20px; height: 20px; line-height: 20px; font-size: 12px;">❤️</div>
                                <div class="bg-warning rounded-circle text-center" style="width: 20px; height: 20px; line-height: 20px; font-size: 12px;">❤️</div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- MENSAGEM ENVIADA -->
                    <div class="d-flex justify-content-end mb-3">
                        <div>
                            <div class="message-sent rounded p-2" style="max-width: 300px;">
                                <span>Claro! Vou mandar agora no WhatsApp 📚</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Espaço entre mensagens -->
                    <div class="text-center mb-4">
                        <small class="instagram-text-light">15:45</small>
                    </div>
                    
                    <!-- Mensagem recebida -->
                    <div class="d-flex mb-3">
                        <div class="me-2">
                            <div class="bg-danger rounded-circle d-flex align-items-center justify-content-center" style="width: 30px; height: 30px;">
                                <i class="bi bi-person-fill text-white fs-6"></i>
                            </div>
                        </div>
                        <div>
                            <div class="message-received rounded p-2" style="max-width: 300px;">
                                <span class="instagram-text">Obrigada mesmo! Vou conseguir entregar no prazo agora 🙏</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- MENSAGEM ENVIADA -->
                    <div class="d-flex justify-content-end mb-3">
                        <div>
                            <div class="message-sent rounded p-2" style="max-width: 300px;">
                                <span>Imagina! Sempre que precisar é só falar! 😊</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Mensagem recebida -->
                    <div class="d-flex mb-3">
                        <div class="me-2">
                            <div class="bg-danger rounded-circle d-flex align-items-center justify-content-center" style="width: 30px; height: 30px;">
                                <i class="bi bi-person-fill text-white fs-6"></i>
                            </div>
                        </div>
                        <div>
                            <div class="message-received rounded p-2" style="max-width: 300px;">
                                <span class="instagram-text">Você é demais! Vamos sair no fim de semana para comemorar? 🎉</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- MENSAGEM ENVIADA FINAL -->
                    <div class="d-flex justify-content-end mb-3">
                        <div>
                            <div class="message-sent rounded p-2" style="max-width: 300px;">
                                <span>Bora sim! Vamos no shopping ou no cinema? 🍿</span>
                            </div>
                        </div>
                    </div>
                    
                </div>
                
                <!-- Barra de input para nova mensagem -->
                <div class="position-fixed bottom-0 p-3" style="right: 0; left: 41.66%; background-color: var(--instagram-white); border-top: 1px solid var(--instagram-border);">
                    <div class="d-flex align-items-center w-100">
                        <!-- Ícone de emoji/smile -->
                        <i class="bi bi-emoji-smile me-3 fs-5 instagram-text-light"></i>
                        <!-- Campo de input da mensagem -->
                        <input type="text" class="form-control chat-input rounded-pill flex-grow-1 py-2" placeholder="Mensagem..." style="border: 1px solid var(--instagram-border);">
                        <!-- Ícone de envio -->
                        <i class="bi bi-send ms-3 fs-5 instagram-blue"></i>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    
    <!-- Script do Bootstrap (JavaScript) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>