<?php
/**
 * PREENCHA AQUI a identidade e a história do atleta.
 * Mantenha as aspas, as vírgulas e os colchetes. Não precisa editar o WordPress.
 * Nas fotos, use um caminho dentro do tema ou uma URL completa https://.
 * Exemplo: 'foto' => 'assets/images/meu-atleta.jpg',
 * Não invente resultados: preencha os campos com informações verificadas.
 */
defined( 'ABSPATH' ) || exit;

return array(
	'nome' => '[Nome do atleta]',
	'modalidade' => '[Modalidade esportiva]',
	'pais' => '[País representado]',
	'nascimento' => '[Data de nascimento]',
	'cidade_natal' => '[Cidade e estado / país]',
	'especialidade' => '[Prova ou especialidade]',
	'estreia_olimpica' => '[Ano e cidade dos Jogos]',
	'resumo' => 'Uma trajetória de dedicação, desafios e conquistas. Conheça a história de [nome do atleta] e seu caminho até os Jogos Olímpicos.',
	'foto' => '',
	'foto_descricao' => 'Retrato de [nome do atleta]',
	'foto_credito' => '[Autoria e origem da fotografia]',

	// Cada item vira um parágrafo. Acrescente ou remova itens, se necessário.
	'biografia' => array(
		'[Apresente o atleta: onde nasceu, suas origens e como surgiu o interesse pelo esporte.]',
		'[Conte como foram os primeiros treinos, quem incentivou a carreira e quais desafios marcaram esse período.]',
		'[Descreva a chegada ao alto rendimento, a participação nos Jogos Olímpicos e a importância de sua trajetória.]',
	),

	// Use números reais. O travessão indica um dado ainda não preenchido.
	'numeros' => array(
		array( 'valor' => '—', 'rotulo' => 'Participações olímpicas' ),
		array( 'valor' => '—', 'rotulo' => 'Medalhas olímpicas' ),
		array( 'valor' => '—', 'rotulo' => 'Anos de carreira' ),
	),
	'medalhas' => array( 'ouro' => '—', 'prata' => '—', 'bronze' => '—' ),

	'trajetoria' => array(
		array( 'ano' => '[Ano]', 'titulo' => 'Os primeiros passos', 'texto' => '[Conte quando e como o atleta começou a praticar a modalidade.]' ),
		array( 'ano' => '[Ano]', 'titulo' => 'A primeira grande conquista', 'texto' => '[Descreva um resultado que marcou a evolução de sua carreira.]' ),
		array( 'ano' => '[Ano]', 'titulo' => 'O sonho olímpico', 'texto' => '[Apresente a classificação e a estreia nos Jogos Olímpicos.]' ),
		array( 'ano' => '[Ano]', 'titulo' => 'Uma história em construção', 'texto' => '[Registre os acontecimentos mais recentes ou o legado após a carreira.]' ),
	),
	'conquistas' => array(
		array( 'competicao' => '[Competição / edição]', 'resultado' => '[Colocação ou medalha]', 'detalhe' => '[Ano, local e prova disputada.]' ),
		array( 'competicao' => '[Competição / edição]', 'resultado' => '[Colocação ou medalha]', 'detalhe' => '[Ano, local e prova disputada.]' ),
		array( 'competicao' => '[Competição / edição]', 'resultado' => '[Recorde ou título]', 'detalhe' => '[Marca alcançada e contexto da conquista.]' ),
	),
	'galeria' => array(
		array( 'foto' => '', 'descricao' => '[Descreva a imagem do atleta em competição]', 'legenda' => '[Competição, local e ano]', 'credito' => '[Crédito da fotografia]' ),
		array( 'foto' => '', 'descricao' => '[Descreva a imagem de um momento de treinamento]', 'legenda' => '[Preparação e rotina de treinos]', 'credito' => '[Crédito da fotografia]' ),
		array( 'foto' => '', 'descricao' => '[Descreva a imagem de um momento marcante]', 'legenda' => '[Um momento especial da trajetória]', 'credito' => '[Crédito da fotografia]' ),
	),
	'legado' => '[Explique a contribuição do atleta para o esporte, sua influência nas novas gerações e eventuais projetos fora das competições.]',
	'fontes' => array(
		array( 'titulo' => '[Fonte sobre a biografia]', 'url' => '', 'acesso' => '[Data de acesso]' ),
		array( 'titulo' => '[Fonte sobre os resultados esportivos]', 'url' => '', 'acesso' => '[Data de acesso]' ),
	),
	// Deixe URLs vazias para ocultar os links opcionais.
	'links' => array( 'Instagram' => '', 'Site oficial' => '', 'Perfil esportivo' => '' ),
	'autor_projeto' => '[Seu nome]',
);
