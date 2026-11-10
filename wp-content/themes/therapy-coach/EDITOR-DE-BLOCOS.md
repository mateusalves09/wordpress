# Editar o perfil por blocos

Abra **Aparência → Editor → Design → Modelos → Página inicial**.
Use a **Visão em lista** para selecionar e arrastar as seções: apresentação,
biografia, trajetória, conquistas, legado e fontes. Textos e botões são blocos
nativos. Cabeçalho, menu e rodapé também podem ser editados no Editor do site.

Para adicionar uma seção novamente, abra o inseridor **+ → Padrões → Therapy
Coach** e escolha um padrão “Atleta”. As seções não possuem bloqueio de movimento.

O arquivo `dados-atleta.php` fornece o conteúdo inicial dos padrões. Depois de
salvar no editor, as alterações ficam no banco de dados do WordPress. Não é
necessário editar PHP para mudar os textos do perfil.

Caso a instalação já tenha uma versão personalizada do modelo Página inicial,
essa versão tem prioridade sobre o arquivo do tema. Exporte ou copie a versão
anterior antes de usar a opção de limpar personalizações desse modelo para
carregar o novo layout de blocos.

Os links antigos com `?perfil=biografia` (e demais seções) redirecionam para a
seção correspondente na página inicial. O bloco dinâmico antigo permanece
registrado para compatibilidade com conteúdo já salvo.
