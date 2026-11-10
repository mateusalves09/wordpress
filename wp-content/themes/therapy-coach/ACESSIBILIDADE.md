# Responsividade e acessibilidade

As melhorias têm como referência a WCAG 2.2 nível AA. Não constituem uma
certificação de conformidade: conteúdo novo, plugins e personalizações salvas
no WordPress precisam de avaliação própria.

## Alterações

- Colunas com largura flexível e reorganização em telas pequenas; contêineres
  sem largura mínima que force rolagem horizontal.
- Texto em unidades relativas, títulos fluidos, quebra de URLs e botões que
  crescem com o conteúdo, sem alturas fixas para os textos.
- Botões dourados sobre fundo escuro, links no texto sublinhados e foco visível
  com contorno de duas cores. Controles de navegação e botões com pelo menos
  44 × 44 px na configuração padrão.
- Cabeçalho sem sobreposição ao conteúdo; links de salto e de seções transferem
  o foco para o destino, sem adicionar as seções à sequência de Tab.
- Título principal único no perfil; estatísticas são parágrafos, não títulos.
  O raio decorativo é desenhado por CSS, sem um caractere isolado no conteúdo.
- Preferência por movimento reduzido e modo de cores forçadas respeitados.
- Estilos de acessibilidade compartilhados pelo site e pelo editor de blocos.
- Contêineres dos blocos de botões corrigidos para a marcação nativa do WordPress.

## Verificação realizada

Prévia estática dos padrões com os estilos reais do WordPress e do tema,
executada no Chromium com Playwright e axe-core:

- Larguras de 320, 360, 390, 600, 768, 960, 1024 e 1440 px sem transbordamento.
  A largura de 320 px também representa o espaço disponível em uma janela de
  1280 px com zoom de 400%.
- Nenhuma violação automatizada nos conjuntos WCAG A/AA selecionados e nas
  boas práticas do axe, nas oito larguras.
- Primeiro Tab alcança “Pular para o conteúdo”; Enter leva o foco ao conteúdo.
  Link de biografia leva o foco à seção e Tab continua a partir dela.
- Texto em 200% na largura de 320 px, junto com entrelinha de 1,5, espaçamento
  de letras de 0,12 em, de palavras de 0,16 em e de parágrafos de 2 em, sem
  rolagem horizontal.
- Foco visível no modo de cores forçadas e ausência de animação com preferência
  por movimento reduzido.

## Verificação na instalação WordPress

Esta cópia não tem PHP nem `wp-config.php`; portanto, o menu móvel nativo,
o editor, conteúdos do banco e combinações reais de leitor de tela/navegador
não foram testados. Na instalação em funcionamento, conferir:

1. Abrir e fechar o menu móvel por teclado, Escape e retorno do foco.
2. Leitura das regiões, títulos e links com NVDA ou VoiceOver.
3. Zoom real de 200% e 400%, menu aberto e orientação horizontal em celular.
4. Contraste e foco após alterações de cores ou inclusão de novos blocos.
5. Se modelos já personalizados no banco estão usando os novos padrões.

As alterações nos arquivos do tema não substituem automaticamente modelos
já salvos no banco. Consulte `EDITOR-DE-BLOCOS.md` antes de limpar qualquer
personalização existente.
