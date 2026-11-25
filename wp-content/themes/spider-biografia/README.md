# Spider Biografia

Tema de blocos WordPress 6.6+ para a biografia bilíngue de Anderson Silva. A versão em português abre por padrão. O link de idioma registra a escolha na URL, que pode ser compartilhada.

## Parte 1 — Wireframe e edição visual

```text
Capa (front-page.html)
└── Main · container pai .spider-site
    ├── Artigo PT-BR · padrão pt.php
    │   ├── Link de salto
    │   ├── Cabeçalho · Flex
    │   │   ├── Marca
    │   │   └── Navegação + seletor de idioma
    │   ├── Grupo de conteúdo
    │   │   ├── Hero · Grid
    │   │   │   ├── Imagem de fundo + overlay CSS
    │   │   │   └── Grupo interno · título, subtítulo e CTA
    │   │   ├── Seção Carreira
    │   │   │   └── Artigos · um por marco, com ano, título e descrição
    │   │   ├── Seção Cartel
    │   │   │   └── Grupo Grid · três cards com números e rótulos
    │   │   ├── Seção Estilo
    │   │   │   └── Artigos · um por modalidade, com título, descrição e imagem
    │   │   └── Seção Quiz
    │   │       └── Três grupos · pergunta + lista de opções
    │   └── Rodapé · créditos e fontes
    └── Artigo EN · padrão en.php, com a mesma hierarquia
```

Ative **Spider Biografia** em **Aparência → Temas**. Em **Aparência → Editor → Modelos**, abra o modelo da página inicial e use a visualização em lista para selecionar o idioma e a seção a editar. Textos, imagens, cartões e perguntas usam blocos nativos. A navegação e o link de salto usam blocos HTML personalizados.

Mantenha as classes e âncoras existentes ao editar os blocos. Em cada pergunta, atribua a classe adicional `spider-correct` a exatamente um dos itens da lista. Em cada estatística, coloque o número inteiro em negrito antes do texto. Em cada marco, mantenha o ano com a classe `spider-kicker`. Preserve os títulos de nível 3 dos cartões, que também fornecem rótulos aos controles. No hero, substitua a imagem pelo seletor de mídia do bloco. A imagem de fundo é decorativa, com texto alternativo vazio.

## Parte 2 — HTML5 e CSS3

- `html/index.html` contém o documento HTML portátil. Abra-o com a pasta do tema intacta para carregar o CSS, o JavaScript e as imagens.
- `style.css` define a paleta, o overlay, o foco, Flexbox, Grid e a adaptação para telas estreitas.
- `patterns/pt.php` e `patterns/en.php` contêm o conteúdo editável em Gutenberg. Se alterar textos nesses padrões, reflita as mudanças no HTML portátil.

Em outro tema ou no Elementor, copie o conteúdo de `<main>` para a página. Se o tema já renderizar um `<main>`, use um `<div class="spider-site">` no lugar da raiz do exemplo. No Elementor, atribua a classe `spider-site` ao container pai e replique a hierarquia com Containers. Preserve a estrutura interna de cada interação em um widget HTML ou em elementos que renderizem a mesma estrutura. Carregue o CSS e o JS uma vez pelo tema filho ou pela configuração de código do site. Substitua as URLs relativas das imagens pelas da Biblioteca de Mídia.

## Parte 3 — JavaScript Vanilla

`assets/spider.js` deriva os controles dos blocos publicados. O HTML já contém todo o texto e os totais, inclusive com JavaScript desativado.

| Componente | Teclado |
| --- | --- |
| Linha do tempo | Tab percorre os botões. Enter e Espaço ativam o marco. Esquerda/Direita percorrem os anos. Home/End saltam aos extremos. |
| Abas | Tab entra na aba ativa e segue ao painel. Esquerda/Direita alternam as abas. Home/End selecionam a primeira/última. Enter e Espaço ativam o botão. |
| Quiz | Tab muda de grupo ou aciona botões. Setas percorrem as opções nativas. Espaço seleciona. O resultado é anunciado em uma região de status. |
| Cartel | Os totais ficam disponíveis como texto estático para leitores de tela. A animação visual depende da entrada no viewport e respeita a preferência de movimento reduzido. |

Ao validar WCAG 2.2 AA no WordPress publicado, percorra os dois idiomas com teclado e leitor de tela, confira foco visível e desobstruído, teste zoom e largura de 320 CSS px, verifique movimento reduzido e repita os testes após trocar mídia, cores, tema ou plugins.
