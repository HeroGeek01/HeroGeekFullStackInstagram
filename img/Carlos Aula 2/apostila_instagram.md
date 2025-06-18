
# 📚 Apostila — Mini‑Instagram com Bootstrap 5

### Guia completo (HTML, CSS, JavaScript) **+ código final para revisão**  
> Esta versão consolida os três capítulos enviados (comentados linha a linha) e acrescenta, ao final de cada capítulo, o **código final “limpo”** de cada arquivo para quem quiser copiar tudo de uma vez.

---

## Índice
1. [Capítulo 1 · HTML comentado](#capítulo-1--html-comentado)
2. [Capítulo 2 · CSS comentado](#capítulo-2--css-comentado)
3. [Capítulo 3 · JavaScript comentado](#capítulo-3--javascript-comentado)
4. [Apêndice A · Código completo dos arquivos](#apêndice-a--código-completo-dos-arquivos)

---

## Capítulo 1 – HTML comentado
> **Atenção, professora/professor** 👩‍🏫👨‍🏫
> A apostila completa, seguindo *à risca* o formato “linha-por-linha + explicação repetida de **todos** os comandos/tags/estilos/palavras especiais”, ultrapassa facilmente o limite de caracteres de uma única resposta aqui no ChatGPT.
>
> Para garantir que você receba **todo o material sem cortes** — e que as crianças consigam acompanhar passo a passo — vou enviar em **três capítulos** (HTML → CSS → JS), cada um num bloco Markdown próprio.
>
> **Este primeiro envio cobre TODA a parte de HTML.**
> Assim que você confirmar que o ritmo, o nível de detalhes e o formato estão adequados, envio os capítulos de CSS e JS no mesmo padrão.
>
> *Ficou alguma dúvida ou quer que eu ajuste algo antes de prosseguir?*
> Se estiver tudo certo, diga “Pode continuar” e preparo o próximo capítulo.

---

# 📚 Apostila — Mini-Instagram com Bootstrap 5

### Capítulo 1 · HTML comentado linha a linha

> **Objetivo:** ao final deste capítulo a(o) estudante terá escrito, entendido e memorizado cada linha do arquivo **`index.html`** que monta a página de posts tipo Instagram.

---

## ✔️ Como usar este material

1. Abra seu editor (VS Code, Notepad++ ou até o Bloco de Notas).
2. Crie um arquivo chamado **`index.html`** vazio.
3. Siga **passo a passo**. **Copie apenas a linha indicada**, cole no seu arquivo, **salve ⇢ atualize o navegador** e confirme que nada quebrou.
4. Leia a explicação imediatamente (ela vem logo abaixo da linha).
5. Marque ✅ no quadrinho de cheque antes de seguir para o próximo passo.

> **Legenda do quadro de explicações**
>
> * **nomeDoComando(parâmetros)** — quando a linha chama uma função JS.
> * **`<nomeDaTag …>` {estilos padrão}** — quando aparece uma tag HTML.
> * **nomeDoEstilo:** todas as opções que ele pode receber — quando surge uma propriedade CSS inline.
> * **palavra especial:** o que ela faz — para atributos ou instruções do HTML (ex.: `lang`, `charset`, `href`, etc.).

---

## 🏁 Passos

| ✔️ | Passo | Linha de código                                                                                                                                                           | Explicação (detida e redundante 😄)                                                                                                                                                                                                                                                                                                                                                                                                                          |
| -- | ----- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ |
| ☐  | 1     | `html<br><!DOCTYPE html><br>`                                                                                                                                             | **palavra especial:** `<!DOCTYPE html>` indica ao navegador que o documento usa o padrão **HTML5**. Isso ativa o *standards mode*, evitando erros de renderização.<br>•                                                                                                                                                                                                                                                                                      |
| ☐  | 2     | `html<br><html lang="pt-BR"><br>`                                                                                                                                         | `<html …>` *{display: block; }* — raiz do documento. <br>**Atributo** `lang="pt-BR"` (**palavra especial**) informa que o conteúdo está em Português do Brasil, ajudando leitores de tela e SEO.                                                                                                                                                                                                                                                             |
| ☐  | 3     | `html<br><head><br>`                                                                                                                                                      | `<head>` *{display: none;}* — contêiner de metadados, scripts e links que **não** aparecem na página.                                                                                                                                                                                                                                                                                                                                                        |
| ☐  | 4     | `html<br>    <meta charset="UTF-8"><br>`                                                                                                                                  | `<meta>` *{display: none;}* — metadados. <br>**palavra especial:** `charset="UTF-8"` define a codificação de caracteres (permite acentuação).                                                                                                                                                                                                                                                                                                                |
| ☐  | 5     | `html<br>    <meta name="viewport" content="width=device-width, initial-scale=1.0"><br>`                                                                                  | `<meta>` novamente.<br>**Atributo** `name="viewport"` + `content="width=device-width, initial-scale=1.0"` ajusta o zoom inicial e faz o layout ser *responsivo* em celulares.                                                                                                                                                                                                                                                                                |
| ☐  | 6     | `html<br>    <title>Instagram Layout - Bootstrap 5</title><br>`                                                                                                           | `<title>` — texto que aparece na aba do navegador.                                                                                                                                                                                                                                                                                                                                                                                                           |
| ☐  | 7     | `html<br>    <!-- Bootstrap 5 CSS --><br>`                                                                                                                                | Comentário (`<!-- ... -->`) — não é renderizado, serve para explicar o código.                                                                                                                                                                                                                                                                                                                                                                               |
| ☐  | 8     | `html<br>    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"><br>`                                                  | `<link>` *{display\:none;}* — carrega arquivos externos.<br>**Atributos**:<br>• `href` (hyper-reference) → URL do CSS.<br>• `rel="stylesheet"` — tipo de relação.                                                                                                                                                                                                                                                                                            |
| ☐  | 9     | `html<br>    <!-- Bootstrap Icons --><br>`                                                                                                                                | Comentário.                                                                                                                                                                                                                                                                                                                                                                                                                                                  |
| ☐  | 10    | `html<br>    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"><br>`                                             | Mesmo padrão do passo 8, mas para o pacote de ícones.                                                                                                                                                                                                                                                                                                                                                                                                        |
| ☐  | 11    | `html<br>    <!-- Custom CSS --><br>`                                                                                                                                     | Comentário.                                                                                                                                                                                                                                                                                                                                                                                                                                                  |
| ☐  | 12    | `html<br>    <link rel="stylesheet" href="src/styles.css"><br>`                                                                                                           | Importa **seu próprio** arquivo CSS (`styles.css`).                                                                                                                                                                                                                                                                                                                                                                                                          |
| ☐  | 13    | `html<br></head><br>`                                                                                                                                                     | Fecha a tag `<head>`.                                                                                                                                                                                                                                                                                                                                                                                                                                        |
| ☐  | 14    | `html<br><body class="bg-light"><br>`                                                                                                                                     | `<body>` *{display\:block;}* — onde o conteúdo visível vive.<br>`class="bg-light"` usa a classe Bootstrap que pinta o fundo de cinza-claro.                                                                                                                                                                                                                                                                                                                  |
| ☐  | 15    | `html<br>    <div class="container-fluid"><br>`                                                                                                                           | `<div>` *{display\:block;}* — caixa genérica.<br>`class="container-fluid"` cria uma grade Bootstrap que ocupa 100% da largura.                                                                                                                                                                                                                                                                                                                               |
| ☐  | 16    | `html<br>        <div class="row"><br>`                                                                                                                                   | Linha da grade Bootstrap (`class="row"`), que organiza colunas.                                                                                                                                                                                                                                                                                                                                                                                              |
| ☐  | 17    | `html<br>            <!-- Sidebar --><br>`                                                                                                                                | Comentário.                                                                                                                                                                                                                                                                                                                                                                                                                                                  |
| ☐  | 18    | `html<br>            <nav class="col-12 col-md-3 col-lg-2 bg-white border-end p-3 position-fixed h-100 sidebar"><br>`                                                     | `<nav>` — conjunto de links de navegação.<br>**Classes Bootstrap** (estilos padrão entre `{…}` omitidos por brevidade):<br>• `col-12` (coluna 12/12 em telas XS)<br>• `col-md-3` (3/12 em ≥768 px)<br>• `col-lg-2` (2/12 em ≥992 px)<br>• `bg-white` — fundo branco<br>• `border-end` — borda à direita<br>• `p-3` — padding = 1 rem<br>• `position-fixed` — fixa no viewport<br>• `h-100` — altura 100%<br>• `sidebar` — classe custom sua (estilo no CSS). |
| ☐  | 19    | `html<br>                <div class="d-flex flex-column h-100"><br>`                                                                                                      | `<div>` com classes utilitárias:<br>• `d-flex` — display\:flex;<br>• `flex-column` — direção vertical;<br>• `h-100` — 100% de altura.                                                                                                                                                                                                                                                                                                                        |
| ☐  | 20    | `html<br>                    <!-- Logo --><br>`                                                                                                                           | Comentário.                                                                                                                                                                                                                                                                                                                                                                                                                                                  |
| ☐  | 21    | `html<br>                    <h2 class="h4 mb-4 fw-bold">Instagram</h2><br>`                                                                                              | `<h2>` cabeçalho nível 2. <br>Classes:<br>• `h4` — força tamanho h4;<br>• `mb-4` — margin-bottom 1.5 rem;<br>• `fw-bold` — fonte bold.                                                                                                                                                                                                                                                                                                                       |
| ☐  | 22    | `html<br>                    <!-- Navigation Menu --><br>`                                                                                                                | Comentário.                                                                                                                                                                                                                                                                                                                                                                                                                                                  |
| ☐  | 23    | `html<br>                    <ul class="nav flex-column gap-2"><br>`                                                                                                      | `<ul>` lista não-ordenada. Classes:<br>• `nav` — estilo de navegação;<br>• `flex-column` — empilha vertical;<br>• `gap-2` — espaçamento flex 0.5 rem.                                                                                                                                                                                                                                                                                                        |
| ☐  | 24    | `html<br>                        <li class="nav-item"><br>`                                                                                                               | `<li>` — item de lista; `nav-item` = estilização.                                                                                                                                                                                                                                                                                                                                                                                                            |
| ☐  | 25    | `html<br>                            <a class="nav-link text-dark d-flex align-items-center gap-3 px-3 py-2 rounded" href="home.php" aria-current="page"><br>`            | `<a>` âncora (link). <br>Principais atributos:<br>• `href="home.php"` — destino;<br>• `aria-current="page"` — acessibilidade, indica página atual.                                                                                                                                                                                                                                                                                                           |
| ☐  | 26    | `html<br>                                <i class="bi bi-house fs-5"></i><br>`                                                                                            | `<i>` ícone. Classes:<br>• `bi bi-house` — ícone casa;<br>• `fs-5` — fonte 1.25 rem.                                                                                                                                                                                                                                                                                                                                                                         |
| ☐  | 27    | `html<br>                                <span class="d-none d-md-inline">Página inicial</span><br>`                                                                      | `<span>` texto inline. Classes:<br>• `d-none` — some em XS;<br>• `d-md-inline` — reaparece ≥768 px.                                                                                                                                                                                                                                                                                                                                                          |
| ☐  | 28    | `html<br>                            </a><br>`                                                                                                                            | Fecha `<a>`.                                                                                                                                                                                                                                                                                                                                                                                                                                                 |
| ☐  | 29    | `html<br>                        </li><br>`                                                                                                                               | Fecha `<li>`.                                                                                                                                                                                                                                                                                                                                                                                                                                                |
| ☐  | 30    | *(Passos 24 → 29 repetem 3 vezes, mudando ícone, texto e href para Pesquisa, Mensagens, Perfil – cada ocorrência segue a mesma lógica de tags e classes descrita acima.)* | —                                                                                                                                                                                                                                                                                                                                                                                                                                                            |

> 🔄 **Repetição obrigatória de conceitos:** sempre que aparecer `<a>`, `<li>`, classe `nav-link`, etc., **releia** a explicação correspondente — isso fixa a memória de longo prazo!

| ✔️ | Passo | Linha de código                                                                                                                                                                                       | Explicação                                                                                                                                                                                                                                                                                                                      |
| -- | ----- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| ☐  | 31    | `html<br>                    </ul><br>`                                                                                                                                                               | Fecha a lista `<ul>`.                                                                                                                                                                                                                                                                                                           |
| ☐  | 32    | `html<br>                </div><br>`                                                                                                                                                                  | Fecha contêiner flex da sidebar.                                                                                                                                                                                                                                                                                                |
| ☐  | 33    | `html<br>            </nav><br>`                                                                                                                                                                      | Fecha `<nav>`. Sidebar pronta!                                                                                                                                                                                                                                                                                                  |
| ☐  | 34    | `html<br>            <!-- Main Content --><br>`                                                                                                                                                       | Comentário.                                                                                                                                                                                                                                                                                                                     |
| ☐  | 35    | `html<br>            <main class="col p-0 offset-md-3 offset-lg-2"><br>`                                                                                                                              | `<main>` delimita o conteúdo principal para acessibilidade. <br>`class="col …"` segue a grade:<br>• `col` — flex-fill;<br>• `p-0` — padding zero;<br>• `offset-md-3` — desloca 3 colunas para a direita ≥768 px;<br>• `offset-lg-2` — desloca 2 colunas ≥992 px (devido à sidebar fixa).                                        |
| ☐  | 36    | `html<br>                <div class="container main-content"><br>`                                                                                                                                    | Contêiner central com largura fixa (classe Bootstrap `container`) + classe custom `main-content` (limita max-width).                                                                                                                                                                                                            |
| ☐  | 37    | `html<br>                    <div class="py-4"><br>`                                                                                                                                                  | Padding vertical 1.5 rem (`py-4`).                                                                                                                                                                                                                                                                                              |
| ☐  | 38    | `html<br>                        <!-- Post Card 1 --><br>`                                                                                                                                            | Comentário.                                                                                                                                                                                                                                                                                                                     |
| ☐  | 39    | `html<br>                        <div class="card mb-4 border-0 shadow-sm"><br>`                                                                                                                      | `<div>` cartão Bootstrap. Classes:<br>• `card` — layout cartão;<br>• `mb-4` — margin-bottom;<br>• `border-0` — sem borda;<br>• `shadow-sm` — sombra leve.                                                                                                                                                                       |
| ☐  | 40    | `html<br>                            <!-- Header --><br>`                                                                                                                                             | Comentário.                                                                                                                                                                                                                                                                                                                     |
| ☐  | 41    | `html<br>                            <div class="card-header d-flex align-items-center gap-2 bg-white border-0 py-3"><br>`                                                                            | Cabeçalho do cartão. Classes: flex, alinhamento vertical, espaçamento, fundo branco, sem borda, padding y.                                                                                                                                                                                                                      |
| ☐  | 42    | `html<br>                                <img src="https://picsum.photos/48/48?random=1" alt="Avatar do usuário slittleguys" class="rounded-circle img-fluid" width="48" height="48"><br>`            | `<img>` imagem.<br>• `src` (source) — URL;<br>• `alt` — descrição para acessibilidade;<br>• `class="rounded-circle"` — borda 50%;<br>• `img-fluid` — largura máx. 100%;<br>• `width`/`height` atributos fixos (pixels).                                                                                                         |
| ☐  | 43    | `html<br>                                <strong>slittleguys</strong><br>`                                                                                                                            | `<strong>` texto em negrito semântico.                                                                                                                                                                                                                                                                                          |
| ☐  | 44    | `html<br>                                <small class="text-muted ms-auto">3 d</small><br>`                                                                                                           | `<small>` fonte menor. `text-muted` (cinza), `ms-auto` (margem-start auto → empurra para a direita).                                                                                                                                                                                                                            |
| ☐  | 45    | `html<br>                            </div><br>`                                                                                                                                                      | Fecha cabeçalho.                                                                                                                                                                                                                                                                                                                |
| ☐  | 46    | `html<br>                            <!-- Post Image --><br>`                                                                                                                                         | Comentário.                                                                                                                                                                                                                                                                                                                     |
| ☐  | 47    | `html<br>                            <img src="/lovable-uploads/8ebc145b-97cd-4da8-9ba5-b5f783f926b2.png" class="card-img-top w-100" alt="Duas pessoas …"><br>`                                       | Imagem principal.<br>`class="card-img-top"` — estilo Bootstrap que remove bordas e arredonda canto; `w-100` — largura 100%.                                                                                                                                                                                                     |
| ☐  | 48    | `html<br>                            <!-- Actions & Metrics --><br>`                                                                                                                                  | Comentário.                                                                                                                                                                                                                                                                                                                     |
| ☐  | 49    | `html<br>                            <div class="card-footer d-flex align-items-center gap-2 bg-white border-0 py-3"><br>`                                                                            | Rodapé com like + contagem.                                                                                                                                                                                                                                                                                                     |
| ☐  | 50    | `html<br>                                <span class="fw-bold">14.793 curtidas</span><br>`                                                                                                            | `<span>` texto. `fw-bold` — fonte bold.                                                                                                                                                                                                                                                                                         |
| ☐  | 51    | `html<br>                                <button class="btn p-0 heart-btn" type="button" data-bs-toggle="button" aria-pressed="false" aria-label="Curtir este post"><br>`                             | `<button>` elemento interativo.<br>• `class="btn"` base Bootstrap;<br>• `p-0` padding zero;<br>• `heart-btn` classe custom;<br>• `type="button"` — evita submit;<br>• `data-bs-toggle="button"` ativa componente *Toggle button* do Bootstrap 5 JS;<br>• `aria-pressed` estado acessibilidade;<br>• `aria-label` descreve ação. |
| ☐  | 52    | `html<br>                                    <i class="bi bi-heart fs-5"></i><br>`                                                                                                                    | Ícone coração vazio.                                                                                                                                                                                                                                                                                                            |
| ☐  | 53    | `html<br>                                    <i class="bi bi-heart-fill fs-5 text-danger d-none"></i><br>`                                                                                            | Ícone coração cheio (`text-danger` = vermelho). `d-none` começa invisível.                                                                                                                                                                                                                                                      |
| ☐  | 54    | `html<br>                                </button><br>`                                                                                                                                               | Fecha o botão.                                                                                                                                                                                                                                                                                                                  |
| ☐  | 55    | `html<br>                            </div><br>`                                                                                                                                                      | Fecha rodapé.                                                                                                                                                                                                                                                                                                                   |
| ☐  | 56    | `html<br>                            <!-- Description --><br>`                                                                                                                                        | Comentário.                                                                                                                                                                                                                                                                                                                     |
| ☐  | 57    | `html<br>                            <div class="card-body p-3 pt-0"><br>`                                                                                                                            | Corpo do cartão. `p-3` padding, `pt-0` remove padding-top.                                                                                                                                                                                                                                                                      |
| ☐  | 58    | `html<br>                                <p class="card-text mb-2"><br>                                    <strong>slittleguys</strong> Montreal, Canada<br>                                </p><br>` | Parágrafo da descrição.                                                                                                                                                                                                                                                                                                         |
| ☐  | 59    | `html<br>                            </div><br>`                                                                                                                                                      | Fecha description.                                                                                                                                                                                                                                                                                                              |
| ☐  | 60    | `html<br>                            <!-- Comments Section --><br>`                                                                                                                                   | Comentário.                                                                                                                                                                                                                                                                                                                     |
| ☐  | 61    | `html<br>                            <div class="px-3 pb-3"><br>`                                                                                                                                     | Wrapper com padding lateral e inferior.                                                                                                                                                                                                                                                                                         |
| ☐  | 62    | `html<br>                                <div class="input-group"><br>`                                                                                                                               | Grupo de inputs Bootstrap (alinha campo + botão).                                                                                                                                                                                                                                                                               |
| ☐  | 63    | `html<br>                                    <input type="text" class="form-control border-0" placeholder="Adicione um comentário…" aria-label="Adicionar comentário"><br>`                           | `<input>` campo texto.<br>Atributos principais:<br>• `type="text"` — texto simples;<br>• `class="form-control"` estilo Bootstrap;<br>• `border-0` remove borda;<br>• `placeholder` texto fantasma;<br>• `aria-label` acessibilidade.                                                                                            |
| ☐  | 64    | `html<br>                                    <button class="btn btn-outline-secondary border-0" type="button">Publicar</button><br>`                                                                  | Botão publicar. `btn-outline-secondary` cinza contornado; `border-0` remove borda para flush look.                                                                                                                                                                                                                              |
| ☐  | 65    | `html<br>                                </div><br>`                                                                                                                                                  | Fecha `input-group`.                                                                                                                                                                                                                                                                                                            |
| ☐  | 66    | `html<br>                            </div><br>`                                                                                                                                                      | Fecha wrapper comentários.                                                                                                                                                                                                                                                                                                      |
| ☐  | 67    | `html<br>                        </div><br>`                                                                                                                                                          | Fecha **Card 1**.                                                                                                                                                                                                                                                                                                               |

*(Os passos 38 → 67 se repetem para **Card 2** e **Card 3** com URLs, textos e números diferentes. As tags e classes já foram explicadas, então peça ao aluno copiar/colar e **relê-las** para reforçar.)*

| ✔️ | Passo | Linha                                                                                                                  | Explicação                                                              |
| -- | ----- | ---------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------- |
| ☐  | 68    | `html<br>                    </div><br>`                                                                               | Fecha `div` **py-4**.                                                   |
| ☐  | 69    | `html<br>                </div><br>`                                                                                   | Fecha `container main-content`.                                         |
| ☐  | 70    | `html<br>            </main><br>`                                                                                      | Fecha `<main>`.                                                         |
| ☐  | 71    | `html<br>        </div><br>`                                                                                           | Fecha `<div class="row">`.                                              |
| ☐  | 72    | `html<br>    </div><br>`                                                                                               | Fecha `<div class="container-fluid">`.                                  |
| ☐  | 73    | `html<br>    <!-- Bootstrap 5 JS --><br>`                                                                              | Comentário.                                                             |
| ☐  | 74    | `html<br>    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script><br>` | `<script>` external — carrega o bundle JS do Bootstrap (inclui Popper). |
| ☐  | 75    | `html<br>    <!-- Custom JavaScript --><br>`                                                                           | Comentário.                                                             |
| ☐  | 76    | `html<br>    <script src="src/script.js"></script><br>`                                                                | Carrega seu JS.                                                         |
| ☐  | 77    | `html<br></body><br>`                                                                                                  | Fecha `<body>`.                                                         |
| ☐  | 78    | `html<br></html><br>`                                                                                                  | Fecha `<html>`, fim do documento.                                       |

---

## 🧩 Exercícios de fixação (HTML)

1. **Mude o texto do primeiro cabeçalho (`h2`)** para “Mini-Gram” e veja o resultado.
2. **Adicione um quarto cartão** duplicando Card 3, mas troque `<img>` por qualquer URL de imagem de sua escolha.
3. **Pergunta:** O que faz a classe `rounded-circle`? *(Escreva a resposta no seu caderno.)*

---

## 📝 Checklist rápido

* [ ] Entendo o papel de `<!DOCTYPE html>`
* [ ] Sei por que o atributo `lang` é importante
* [ ] Consigo explicar o que `container`, `row`, `col-…` fazem no Bootstrap
* [ ] Sei adicionar novos itens ao sidebar alterando somente HTML
* [ ] Consegui duplicar um Card sem quebrar o layout

Quando todas as caixas estiverem marcadas, **parabéns!** Você concluiu o capítulo 1 e está prontíssima(o) para o CSS.

---

## 📌 Glossário deste capítulo

| Termo                     | Tipo              | Definição (resumida)                         |
| ------------------------- | ----------------- | -------------------------------------------- |
| `<!DOCTYPE html>`         | palavra especial  | Declara o padrão HTML5.                      |
| `<link>`                  | tag               | Importa CSS externo.                         |
| `class`                   | atributo          | Aplica estilos CSS ou utilitários Bootstrap. |
| `container-fluid`         | classe Bootstrap  | Largura 100% sem margens laterais.           |
| `row` / `col-…`           | classes Bootstrap | Sistema de 12 colunas responsivo.            |
| `data-bs-toggle="button"` | atributo especial | Ativa componente de botão alternável.        |
| `aria-label`              | atributo ARIA     | Descrição para leitores de tela.             |

---

## 🌟 Próximo passo

Se tudo ficou claro, diga **“Pode continuar”** para receber o **Capítulo 2 — CSS** com o mesmo formato linha-por-linha. Assim manteremos a apostila organizada e fácil de seguir.

*Alguma dúvida?*


### Código final – **`index.html`**
```html
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instagram Layout - Bootstrap 5</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="src/styles.css">
</head>
<body class="bg-light">
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav class="col-12 col-md-3 col-lg-2 bg-white border-end p-3 position-fixed h-100 sidebar">
                <div class="d-flex flex-column h-100">
                    <!-- Logo -->
                    <h2 class="h4 mb-4 fw-bold">Instagram</h2>

                    <!-- Navigation Menu -->
                    <ul class="nav flex-column gap-2">
                        <li class="nav-item">
                            <a class="nav-link text-dark d-flex align-items-center gap-3 px-3 py-2 rounded"
                               href="home.php" aria-current="page">
                                <i class="bi bi-house fs-5"></i>
                                <span class="d-none d-md-inline">Página inicial</span>
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
                    </ul>
                </div>
            </nav>

            <!-- Main Content -->
            <main class="col p-0 offset-md-3 offset-lg-2">
                <div class="container main-content">
                    <div class="py-4">

                        <!-- Post Card 1 -->
                        <div class="card mb-4 border-0 shadow-sm">
                            <!-- Header -->
                            <div class="card-header d-flex align-items-center gap-2 bg-white border-0 py-3">
                                <img src="https://picsum.photos/48/48?random=1"
                                     alt="Avatar do usuário slittleguys"
                                     class="rounded-circle img-fluid"
                                     width="48" height="48">
                                <strong>slittleguys</strong>
                                <small class="text-muted ms-auto">3 d</small>
                            </div>

                            <!-- Post Image -->
                            <img src="/lovable-uploads/8ebc145b-97cd-4da8-9ba5-b5f783f926b2.png"
                                 class="card-img-top w-100"
                                 alt="Duas pessoas em um corredor com personagens em miniatura sobrepondo suas cabeças">

                            <!-- Actions & Metrics -->
                            <div class="card-footer d-flex align-items-center gap-2 bg-white border-0 py-3">
                                <span class="fw-bold">14.793 curtidas</span>
                                <button class="btn p-0 heart-btn" type="button" data-bs-toggle="button"
                                        aria-pressed="false" aria-label="Curtir este post">
                                    <i class="bi bi-heart fs-5"></i>
                                    <i class="bi bi-heart-fill fs-5 text-danger d-none"></i>
                                </button>
                            </div>

                            <!-- Description -->
                            <div class="card-body p-3 pt-0">
                                <p class="card-text mb-2">
                                    <strong>slittleguys</strong> Montreal, Canada
                                </p>
                            </div>

                            <!-- Comments Section -->
                            <div class="px-3 pb-3">
                                <div class="input-group">
                                    <input type="text" class="form-control border-0"
                                           placeholder="Adicione um comentário…"
                                           aria-label="Adicionar comentário">
                                    <button class="btn btn-outline-secondary border-0" type="button">
                                        Publicar
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Post Card 2 -->
                        <div class="card mb-4 border-0 shadow-sm">
                            <!-- Header -->
                            <div class="card-header d-flex align-items-center gap-2 bg-white border-0 py-3">
                                <img src="https://picsum.photos/48/48?random=2"
                                     alt="Avatar do usuário naturephotography"
                                     class="rounded-circle img-fluid"
                                     width="48" height="48">
                                <strong>naturephotography</strong>
                                <small class="text-muted ms-auto">5 h</small>
                            </div>

                            <!-- Post Image -->
                            <img src="https://picsum.photos/600/600?random=2"
                                 class="card-img-top w-100"
                                 alt="Paisagem natural com montanhas e lago ao pôr do sol">

                            <!-- Actions & Metrics -->
                            <div class="card-footer d-flex align-items-center gap-2 bg-white border-0 py-3">
                                <span class="fw-bold">2.456 curtidas</span>
                                <button class="btn p-0 heart-btn" type="button" data-bs-toggle="button"
                                        aria-pressed="false" aria-label="Curtir este post">
                                    <i class="bi bi-heart fs-5"></i>
                                    <i class="bi bi-heart-fill fs-5 text-danger d-none"></i>
                                </button>
                            </div>

                            <!-- Description -->
                            <div class="card-body p-3 pt-0">
                                <p class="card-text mb-2">
                                    <strong>naturephotography</strong> Amazing sunset at the mountains! 🌅
                                </p>
                            </div>

                            <!-- Comments Section -->
                            <div class="px-3 pb-3">
                                <div class="input-group">
                                    <input type="text" class="form-control border-0"
                                           placeholder="Adicione um comentário…"
                                           aria-label="Adicionar comentário">
                                    <button class="btn btn-outline-secondary border-0" type="button">
                                        Publicar
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Post Card 3 -->
                        <div class="card mb-4 border-0 shadow-sm">
                            <!-- Header -->
                            <div class="card-header d-flex align-items-center gap-2 bg-white border-0 py-3">
                                <img src="https://picsum.photos/48/48?random=3"
                                     alt="Avatar do usuário foodie_delights"
                                     class="rounded-circle img-fluid"
                                     width="48" height="48">
                                <strong>foodie_delights</strong>
                                <small class="text-muted ms-auto">1 d</small>
                            </div>

                            <!-- Post Image -->
                            <img src="https://picsum.photos/600/600?random=3"
                                 class="card-img-top w-100"
                                 alt="Prato de comida gourmet artisticamente apresentado">

                            <!-- Actions & Metrics -->
                            <div class="card-footer d-flex align-items-center gap-2 bg-white border-0 py-3">
                                <span class="fw-bold">8.921 curtidas</span>
                                <button class="btn p-0 heart-btn" type="button" data-bs-toggle="button"
                                        aria-pressed="false" aria-label="Curtir este post">
                                    <i class="bi bi-heart fs-5"></i>
                                    <i class="bi bi-heart-fill fs-5 text-danger d-none"></i>
                                </button>
                            </div>

                            <!-- Description -->
                            <div class="card-body p-3 pt-0">
                                <p class="card-text mb-2">
                                    <strong>foodie_delights</strong> Perfect dinner tonight! Chef's special 👨‍🍳✨
                                </p>
                            </div>

                            <!-- Comments Section -->
                            <div class="px-3 pb-3">
                                <div class="input-group">
                                    <input type="text" class="form-control border-0"
                                           placeholder="Adicione um comentário…"
                                           aria-label="Adicionar comentário">
                                    <button class="btn btn-outline-secondary border-0" type="button">
                                        Publicar
                                    </button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </main>
        </div>
    </div>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JavaScript -->
    <script src="src/script.js"></script>
</body>
</html>
```

---

## Capítulo 2 – CSS comentado
> **Capítulo 2 (CSS) pronto!**
> Se o nível de detalhes ou o ritmo estiverem bons, responda **“Próximo”** e envio o **Capítulo 3 — JavaScript** no mesmo padrão.

---

# 📚 Apostila — Mini-Instagram com Bootstrap 5

### Capítulo 2 · CSS comentado linha a linha

> **Objetivo:** entender e aplicar cada regra do arquivo **`src/styles.css`** que ajusta o visual da página.

---

## ✔️ Como usar

1. Crie a pasta **`src/`** (caso ainda não exista) e dentro dela o arquivo **`styles.css`**.
2. Siga a tabela: **copie apenas a(s) linha(s)** indicadas, cole no final do arquivo, salve e *recarregue* o navegador.
3. Leia a explicação logo abaixo — **mesmo que o conceito pareça óbvio, releia** (isso fixa na memória).
4. Marque ✅ antes de ir ao próximo passo.

> **Legenda de explicações — lembrando o modelo:**
>
> * **nomeDoEstilo:** todas as opções que ele pode ter.
> * **palavra especial:** o que ela faz (por exemplo, `@media`).
> * Seletores (ex.: `.sidebar`, `.heart-btn:hover`) são descritos como **<nomeDoSeletor> {estilo padrão}.**

---

## 🏁 Passos

| ✔️ | Passo | Linha de código                                          | Explicação detalhada                                                                                                                                                                                   |
| -- | ----- | -------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ |
| ☐  | 1     | `css<br>/* Custom styles for Instagram layout */<br>`    | **Comentário CSS** — tudo entre `/* … */` é ignorado pelo navegador, serve para documentar.                                                                                                            |
| ☐  | 2     | `css<br>.sidebar {<br>`                                  | **<seletor de classe>** `.sidebar` seleciona qualquer elemento com `class="sidebar"`. Sem valor padrão (depende do browser).                                                                           |
| ☐  | 3     | `css<br>    z-index: 1000;<br>`                          | **z-index:** define a *pilha* de renderização; números maiores ficam “acima”. Opções: qualquer inteiro (negativo, 0, positivo).                                                                        |
| ☐  | 4     | `css<br>}<br>`                                           | Fecha o bloco `.sidebar`.                                                                                                                                                                              |
| ☐  | 5     | `css<br><br>.main-content {<br>`                         | **.main-content** seleciona elementos com `class="main-content"`.                                                                                                                                      |
| ☐  | 6     | `css<br>    max-width: 470px;<br>`                       | **max-width:** largura máxima; aceita px, %, `rem` etc. Aqui limita o feed a 470 px.                                                                                                                   |
| ☐  | 7     | `css<br>}<br>`                                           | Fecha `.main-content`.                                                                                                                                                                                 |
| ☐  | 8     | `css<br><br>/* Heart button hover effects */<br>`        | Comentário.                                                                                                                                                                                            |
| ☐  | 9     | `css<br>.heart-btn:hover {<br>`                          | **:hover** é **pseudoclasse** (palavra especial) que aplica estilos quando o mouse está sobre o elemento `.heart-btn`.                                                                                 |
| ☐  | 10    | `css<br>    opacity: 0.7;<br>`                           | **opacity:** quão transparente (0=total, 1=opaco). Aceita números 0-1.                                                                                                                                 |
| ☐  | 11    | `css<br>    transition: opacity 0.3s ease;<br>`          | **transition:** cria animação suave. Sintaxe geral: `transition: propriedade duração timing-function delay`. *Timing-function* pode ser `linear`, `ease`, `ease-in`, etc.                              |
| ☐  | 12    | `css<br>}<br>`                                           | Fecha `.heart-btn:hover`.                                                                                                                                                                              |
| ☐  | 13    | `css<br><br>/* Additional responsive adjustments */<br>` | Comentário.                                                                                                                                                                                            |
| ☐  | 14    | `css<br>@media (max-width: 768px) {<br>`                 | **@media** (palavra especial) inicia uma **Media Query** — regras só valem se a tela for ≤ 768 px de largura.                                                                                          |
| ☐  | 15    | `css<br>    .sidebar {<br>`                              | De novo **.sidebar** (repetimos para reforçar!)                                                                                                                                                        |
| ☐  | 16    | `css<br>        position: static !important;<br>`        | **position:** define o método de posicionamento (`static`, `relative`, `absolute`, `fixed`, `sticky`). Aqui troca para `static` (fluxo normal).<br>**!important** força o valor a sobrescrever outros. |
| ☐  | 17    | `css<br>        height: auto !important;<br>`            | **height:** altura. Valor `auto` deixa o elemento crescer conforme o conteúdo. `!important` idem acima.                                                                                                |
| ☐  | 18    | `css<br>    }<br>`                                       | Fecha `.sidebar` interno da media query.                                                                                                                                                               |
| ☐  | 19    | `css<br>    .offset-md-3 {<br>`                          | **.offset-md-3** é classe criada pelo Bootstrap (margem-esquerda de 3 colunas a partir de 768 px). Estamos sobrescrevendo.                                                                             |
| ☐  | 20    | `css<br>        margin-left: 0 !important;<br>`          | **margin-left:** deslocamento à esquerda. Valor `0` remove a margem. `!important` garante vitória sobre Bootstrap.                                                                                     |
| ☐  | 21    | `css<br>    }<br>`                                       | Fecha `.offset-md-3`.                                                                                                                                                                                  |
| ☐  | 22    | `css<br>}<br>`                                           | Fecha a `@media` query.                                                                                                                                                                                |

---

## 🧩 Exercícios de fixação (CSS)

1. **Troque `opacity: 0.7`** por `opacity: 0.3` e observe o efeito no hover do coração.
2. **Adicione `.nav-link:hover { background-color:#f8f9fa; }`** para realçar links da sidebar. Explique qual propriedade mudou.
3. **Pergunta:** O que acontece se remover o `!important` de `position: static` dentro da Media Query? *(Teste e escreva a resposta.)*

---

## 📝 Checklist rápido

* [ ] Sei para que serve `z-index`
* [ ] Entendo `max-width` vs `width`
* [ ] Posso explicar `:hover` e como criar transições
* [ ] Compreendi o papel das Media Queries (`@media`)
* [ ] Consegui ajustar um estilo e ver mudança no browser

---

## 📌 Glossário deste capítulo

| Termo        | Tipo             | Definição                                       |
| ------------ | ---------------- | ----------------------------------------------- |
| `.classe`    | seletor          | Aplica regras a elementos que possuem a classe. |
| `opacity`    | estilo           | Transparência de 0 (invisível) a 1 (sólido).    |
| `transition` | estilo           | Anima a mudança de propriedades.                |
| `@media`     | palavra especial | Bloco condicional baseado em tamanho de tela.   |
| `!important` | palavra especial | Aumenta a prioridade de uma regra CSS.          |

---

✋ **Pronto para mergulhar no código JavaScript (Capítulo 3)?**
Responda **“Próximo”** e eu envio a terceira parte, com cada linha do `script.js` destrinchada e explicada.


### Código final – **`src/styles.css`**
```css
/* Custom styles for Instagram layout */

.sidebar {
    z-index: 1000;
}

.main-content {
    max-width: 470px;
}

/* Heart button hover effects */
.heart-btn:hover {
    opacity: 0.7;
    transition: opacity 0.3s ease;
}

/* Additional responsive adjustments */
@media (max-width: 768px) {
    .sidebar {
        position: static !important;
        height: auto !important;
    }

    .offset-md-3 {
        margin-left: 0 !important;
    }
}
```

---

## Capítulo 3 – JavaScript comentado
> **Capítulo 3 (JavaScript) — pronto!**
> Agora sua apostila cobre **HTML + CSS + JS**, linha a linha, no mesmo formato.
> Se quiser revisar, editar ou receber o arquivo `.md` inteiro para download, é só pedir.
> Boa aula! 👩‍💻👨‍💻

---

# 📚 Apostila — Mini-Instagram com Bootstrap 5

### Capítulo 3 · JavaScript comentado linha a linha

> **Objetivo:** escrever, entender e memorizar cada instrução do arquivo **`src/script.js`** que dá vida ao “curtir” e ao scroll suave.

---

## ✔️ Como usar

1. Na pasta **`src/`** crie o arquivo **`script.js`** vazio.
2. Siga a tabela: **copie só a linha indicada**, cole no final do arquivo, salve, *recarregue* a página e teste.
3. Leia a explicação logo abaixo, mesmo que pareça óbvia — repetir grava na memória!
4. Marque ✅ antes de avançar.

> **Legenda de explicações (relembrando):**
>
> * **nomeDoComando(parâmetros)** — funções/métodos JS.
> * **palavra especial:** explicação de palavras-chave (`const`, `if`, `=>`).
> * Comentários iniciam com `//` e servem só para humanos.

---

## 🏁 Passos

| ✔️ | Passo | Linha de código                                                                                          | Explicação detalhada                                                                                                                                                                                                                          |
| -- | ----- | -------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| ☐  | 1     | `js<br>// Custom JavaScript for Instagram layout functionality<br>`                                      | **Comentário JS** — tudo após `//` é ignorado na execução.                                                                                                                                                                                    |
| ☐  | 2     | `js<br>document.addEventListener('DOMContentLoaded', function() {<br>`                                   | **document.addEventListener(evento, callback);** – escuta o evento `DOMContentLoaded` (dispara quando o HTML foi totalmente carregado). Assim o código só roda depois que a página está pronta.                                               |
| ☐  | 3     | `js<br>    // Handle heart button toggle<br>`                                                            | Comentário descrevendo o próximo bloco.                                                                                                                                                                                                       |
| ☐  | 4     | `js<br>    const heartButtons = document.querySelectorAll('.heart-btn[data-bs-toggle=\"button\"]');<br>` | **palavra especial:** `const` cria uma variável *constante* (não pode ser reatribuída).<br>**document.querySelectorAll(seletor);** — devolve *NodeList* com todos os elementos que casam com o seletor `.heart-btn[data-bs-toggle="button"]`. |
| ☐  | 5     | `js<br>    heartButtons.forEach(button => {<br>`                                                         | **heartButtons.forEach(callback);** – percorre cada item.<br>**palavra especial:** `=>` indica *arrow function* (função curta).                                                                                                               |
| ☐  | 6     | `js<br>        button.addEventListener('click', function() {<br>`                                        | **element.addEventListener('click', callback);** — escuta cliques no botão.                                                                                                                                                                   |
| ☐  | 7     | `js<br>            const heartOutline = this.querySelector('.bi-heart');<br>`                            | **this.querySelector('.bi-heart');** – dentro do botão (`this`), encontra o ícone contorno de coração.                                                                                                                                        |
| ☐  | 8     | `js<br>            const heartFilled = this.querySelector('.bi-heart-fill');<br>`                        | Faz o mesmo, mas pega o ícone coração cheio.                                                                                                                                                                                                  |
| ☐  | 9     | `js<br>            if (this.getAttribute('aria-pressed') === 'true') {<br>`                              | **palavra especial:** `if` cria condição.<br>**this.getAttribute(atributo);** – lê o valor de `aria-pressed`. Quando o Toggle Bootstrap marca `true`, significa que o botão acabou de ser **ativado**.                                        |
| ☐  | 10    | `js<br>                // Button is being activated<br>`                                                 | Comentário.                                                                                                                                                                                                                                   |
| ☐  | 11    | `js<br>                heartOutline.classList.add('d-none');<br>`                                        | **element.classList.add(classe);** – adiciona classe `d-none` (esconde).                                                                                                                                                                      |
| ☐  | 12    | `js<br>                heartFilled.classList.remove('d-none');<br>`                                      | **element.classList.remove(classe);** – torna o coração cheio visível.                                                                                                                                                                        |
| ☐  | 13    | `js<br>            } else {<br>`                                                                         | `else` executa quando a condição do `if` é falsa (botão foi **desativado**).                                                                                                                                                                  |
| ☐  | 14    | `js<br>                // Button is being deactivated<br>`                                               | Comentário.                                                                                                                                                                                                                                   |
| ☐  | 15    | `js<br>                heartOutline.classList.remove('d-none');<br>`                                     | Mostra novamente o contorno.                                                                                                                                                                                                                  |
| ☐  | 16    | `js<br>                heartFilled.classList.add('d-none');<br>`                                         | Esconde o coração cheio.                                                                                                                                                                                                                      |
| ☐  | 17    | `js<br>            }<br>`                                                                                | Fecha `if/else`.                                                                                                                                                                                                                              |
| ☐  | 18    | `js<br>        });<br>`                                                                                  | Fecha *listener* de clique.                                                                                                                                                                                                                   |
| ☐  | 19    | `js<br>    });<br>`                                                                                      | Fecha o `forEach`.                                                                                                                                                                                                                            |
| ☐  | 20    | `js<br>    // Optional: Add smooth scrolling for better UX<br>`                                          | Comentário.                                                                                                                                                                                                                                   |
| ☐  | 21    | `js<br>    document.querySelectorAll('a[href^=\"#\"]').forEach(anchor => {<br>`                          | Seleciona todos os links que começam com `#` (âncoras internas) e os percorre.                                                                                                                                                                |
| ☐  | 22    | `js<br>        anchor.addEventListener('click', function (e) {<br>`                                      | Escuta cliques nesses links; `e` é o **objeto de evento**.                                                                                                                                                                                    |
| ☐  | 23    | `js<br>            e.preventDefault();<br>`                                                              | **e.preventDefault();** – cancela o comportamento padrão (navegar instantaneamente).                                                                                                                                                          |
| ☐  | 24    | `js<br>            const target = document.querySelector(this.getAttribute('href'));<br>`                | Encontra o elemento-alvo cujo ID corresponde ao `href` do link clicado.                                                                                                                                                                       |
| ☐  | 25    | `js<br>            if (target) {<br>`                                                                    | Garante que o alvo existe.                                                                                                                                                                                                                    |
| ☐  | 26    | `js<br>                target.scrollIntoView({<br>`                                                      | **element.scrollIntoView(opções);** – rola a página até o alvo.                                                                                                                                                                               |
| ☐  | 27    | `js<br>                    behavior: 'smooth'<br>`                                                       | **behavior:** `'smooth'` ativa rolagem suave (aceita `'auto'` ou `'smooth'`).                                                                                                                                                                 |
| ☐  | 28    | `js<br>                });<br>`                                                                          | Fecha `scrollIntoView`.                                                                                                                                                                                                                       |
| ☐  | 29    | `js<br>            }<br>`                                                                                | Fecha `if (target)`.                                                                                                                                                                                                                          |
| ☐  | 30    | `js<br>        });<br>`                                                                                  | Fecha listener de clique.                                                                                                                                                                                                                     |
| ☐  | 31    | `js<br>    });<br>`                                                                                      | Fecha `forEach` das âncoras.                                                                                                                                                                                                                  |
| ☐  | 32    | `js<br>});<br>`                                                                                          | Fecha a função de `DOMContentLoaded`. **Fim do script!**                                                                                                                                                                                      |

---

## 🧩 Exercícios de fixação (JS)

1. **Altere** a condição do `if` (linha 9) para `=== 'false'` só para ver o efeito — o coração deve inverter o comportamento.
2. **Adicione** `console.log('Curti!');` dentro do bloco que ativa o coração e abra o console do navegador para ver a mensagem em cada clique.
3. **Pergunta:** O que acontece se remover `e.preventDefault()` do scroll suave? *(Teste e anote sua observação.)*

---

## 📝 Checklist rápido

* [ ] Sei para que serve `addEventListener('DOMContentLoaded', …)`
* [ ] Entendo a diferença entre `querySelector` e `querySelectorAll`
* [ ] Consigo explicar `classList.add()` e `classList.remove()`
* [ ] Posso dizer o que `arrow functions (=>)` fazem
* [ ] Testei e compreendi a função de `preventDefault()`

---

## 📌 Glossário deste capítulo

| Termo / Comando                 | Tipo             | Definição resumida                                             |
| ------------------------------- | ---------------- | -------------------------------------------------------------- |
| `const`                         | palavra especial | Declara variável de leitura-única.                             |
| `querySelectorAll(sel)`         | comando          | Retorna *NodeList* com todos elementos que combinam com `sel`. |
| `forEach(cb)`                   | comando          | Executa `cb` para cada item de um array/NodeList.              |
| `addEventListener(ev, cb)`      | comando          | Anexa ouvinte de evento ao elemento.                           |
| `classList.add()` / `.remove()` | comando          | Adiciona ou remove classes CSS do elemento.                    |
| `getAttribute(nome)`            | comando          | Lê valor de um atributo HTML.                                  |
| `if … else`                     | palavra especial | Estrutura condicional.                                         |
| `scrollIntoView({behavior})`    | comando          | Faz a página rolar até o elemento.                             |

---

## 🎉 Parabéns!

Você concluiu os três capítulos da apostila: **HTML + CSS + JavaScript**.
Agora é capaz de:

1. Montar a estrutura de um mini-feed estilo Instagram.
2. Ajustar estilos responsivos e animações leves.
3. Programar interações simples (curtir, scroll suave).

---

### Próximos passos sugeridos

* **Desafio:** criar um contador que aumente o número de curtidas quando o coração fica vermelho.
* **Compartilhe:** mostre a página para colegas e peça feedback.
* **Explore:** leia sobre `localStorage` para salvar curtidas mesmo após atualizar a página.

Se precisar do arquivo **Markdown completo** em um único bloco ou quiser adicionar novos capítulos (ex.: back-end em PHP, deploy no GitHub Pages), é só avisar. Estou por aqui! 😊


### Código final – **`src/script.js`**
```js
// Custom JavaScript for Instagram layout functionality

document.addEventListener('DOMContentLoaded', function() {
    // Handle heart button toggle
    const heartButtons = document.querySelectorAll('.heart-btn[data-bs-toggle="button"]');

    heartButtons.forEach(button => {
        button.addEventListener('click', function() {
            const heartOutline = this.querySelector('.bi-heart');
            const heartFilled = this.querySelector('.bi-heart-fill');

            if (this.getAttribute('aria-pressed') === 'true') {
                // Button is being activated
                heartOutline.classList.add('d-none');
                heartFilled.classList.remove('d-none');
            } else {
                // Button is being deactivated
                heartOutline.classList.remove('d-none');
                heartFilled.classList.add('d-none');
            }
        });
    });

    // Optional: Add smooth scrolling for better UX
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth'
                });
            }
        });
    });
});
```

---

## Apêndice A – Código completo dos arquivos
*(Mesmos trechos agrupados acima, prontos para copiar/colar.)*


> **Dica:** Para publicar seu projeto rapidamente, suba estes três arquivos em uma pasta no GitHub Pages ou Netlify e veja seu “Mini‑Gram” no ar em segundos!

---
