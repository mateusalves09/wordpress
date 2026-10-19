# Perfil Olímpico — biografia de atleta

Esta é uma adaptação do tema Therapy Coach. A pasta continua se chamando
`therapy-coach` para manter a identificação do tema no WordPress.
Não é necessário instalar Elementor, AllCoach ou outro construtor para esta página.

## 1. Instalar no seu projeto

1. Faça uma cópia de segurança da pasta atual do tema.
2. Copie o conteúdo desta pasta para `wp-content/themes/therapy-coach/`
   da sua instalação WordPress. O caminho correto no ZIP é
   `wordpress-main/wp-content/themes/therapy-coach/`.
3. No painel do WordPress, vá a **Aparência → Temas** e ative
   **Perfil Olímpico (Therapy Coach)**, caso o tema ainda não esteja ativo.
4. Abra a página inicial do site. O arquivo `templates/front-page.html`
   apresenta a biografia tanto com a opção de posts recentes quanto com uma
   página estática definida como início.

Você só precisa copiar a pasta do tema. Não precisa substituir os arquivos do
núcleo do WordPress, `wp-config.php`, plugins, uploads ou banco de dados.
Este ZIP não contém uma exportação do banco de dados.

## 2. Preencher a identidade do atleta pelo Code Server

Abra `wp-content/themes/therapy-coach/dados-atleta.php`.
Esse arquivo reúne nome, modalidade, país, nascimento, cidade natal, especialidade,
estreia olímpica, resumo, biografia, estatísticas, medalhas, linha do tempo,
conquistas, galeria, legado, fontes, links oficiais e autoria do projeto.

Substitua os textos entre colchetes e os travessões pelos dados corretos.
Os textos entre colchetes e os travessões são campos não preenchidos: não são
resultados reais. Use 0 quando o atleta não tiver determinada medalha e o dado
estiver confirmado. Você pode acrescentar ou remover itens das listas.
Mantenha as aspas, vírgulas e os colchetes da estrutura PHP.
Se o texto contiver apóstrofo, escreva `\'` dentro de uma string com aspas simples.
Os valores são exibidos como texto; não coloque HTML nesses campos.

Exemplo:

```php
'nome' => 'Nome completo do atleta',
'modalidade' => 'Modalidade do atleta',
'pais' => 'País representado',
'foto' => 'assets/images/meu-atleta.jpg',
```

Os campos `numeros` e `medalhas` são independentes: mantenha os totais coerentes.
A classificação das conquistas e a ordem da linha do tempo seguem a ordem dos
itens no arquivo. Deixe URLs de links oficiais vazias para ocultá-los.

## 3. Adicionar fotos

1. Copie as imagens para `assets/images/` dentro do tema.
2. Preencha `foto` com o caminho relativo, por exemplo
   `assets/images/meu-atleta.jpg`. Não coloque uma barra inicial.
3. Para a galeria, preencha também `foto` em cada item de `galeria`.
4. Atualize a descrição alternativa, as legendas e os créditos.

Você também pode usar uma URL completa `https://...` de uma imagem da Biblioteca
de mídia do WordPress. Não use o caminho de arquivos do seu computador.
Prefira retrato vertical para a foto principal e imagens horizontais na galeria.
Os campos vazios mantêm espaços reservados e não mostram pessoas fictícias.
Use imagens que você tenha autorização para utilizar e informe os créditos.

## 4. Alterar a aparência e a estrutura

- `dados-atleta.php`: informações, números, textos e imagens.
- `assets/css/athlete.css`: cores, espaçamentos e layout responsivo.
- `inc/athlete-biography.php`: HTML/PHP das seções da página.
- `patterns/pattern-header.php`: marca e links do cabeçalho.
- `patterns/pattern-footer.php`: rodapé e links oficiais.
- `assets/js/navigation.js`: abertura e fechamento do menu no celular.
- `templates/front-page.html`: composição da página inicial em blocos.
- `theme.json`: paleta e configurações globais do tema.

Os padrões antigos de terapia permanecem no tema para preservar os arquivos
originais, mas não são usados pela nova página inicial. Evite inseri-los na
biografia. As outras páginas e posts continuam utilizando os modelos do tema.

## 5. Se o site continuar mostrando a versão antiga

O Editor do site pode ter salvo cabeçalho, rodapé ou página inicial no banco.
Essas personalizações têm prioridade sobre os arquivos do tema.

1. Vá a **Aparência → Editor → Design → Modelos** e localize a página inicial.
2. No menu do modelo, use a opção de limpar/restaurar personalizações (o nome
   varia conforme a versão e o idioma). Faça isso apenas no modelo necessário.
3. Repita para cabeçalho e rodapé em **Padrões → Partes do modelo**, se eles
   também tiverem sido personalizados. Copie antes qualquer edição que queira guardar.
4. Limpe o cache do site/navegador e recarregue a página com `Ctrl + F5`.

Depois, mantenha a edição dos dados pelo arquivo PHP. Se salvar uma cópia do
padrão como HTML no Editor, essa cópia deixa de acompanhar `dados-atleta.php`.
Não é necessário apagar páginas nem alterar o banco manualmente.

## 6. Verificar antes de apresentar

Preencha todos os campos, confira datas e resultados nas fontes, teste os links
 e veja a página no celular. O título da página inicial usa o nome preenchido.
Para outras páginas, ajuste também o título e a descrição do site em
**Configurações → Geral**.

Esta entrega modifica os arquivos do projeto. A ativação e a visualização na sua
instância da AWS dependem de copiar a pasta e seguir as etapas acima.
Como esta é uma adaptação direta, guarde uma cópia antes de atualizar o tema original.
