<?php
/** Página inicial; altere os textos e imagens em dados-atleta.php. */
defined( 'ABSPATH' ) || exit;
$portrait = therapy_coach_athlete_image_url( $athlete['foto'] );
?>
<main id="wp--skip-link--target" class="athlete-main" tabindex="-1">
	<section class="athlete-hero" aria-labelledby="athlete-name">
		<div class="athlete-container athlete-hero-grid">
			<div class="athlete-hero-copy">
				<p class="athlete-eyebrow"><span class="athlete-status" aria-hidden="true"></span> ESPORTE · HISTÓRIA · LEGADO</p>
				<p class="athlete-kicker">Uma vida dedicada ao esporte.</p>
				<h1 id="athlete-name"><?php echo esc_html( $athlete['nome'] ); ?></h1>
				<p class="athlete-discipline"><?php echo esc_html( $athlete['modalidade'] ); ?> <span aria-hidden="true">/</span> <?php echo esc_html( $athlete['pais'] ); ?></p>
				<p class="athlete-intro"><?php echo esc_html( $athlete['resumo'] ); ?></p>
				<div class="athlete-actions"><a class="athlete-button" href="#biografia">Conheça a história <span aria-hidden="true">↗</span></a><a class="athlete-text-link" href="#conquistas">Ver conquistas <span aria-hidden="true">↓</span></a></div>
				<div class="athlete-hero-bottom"><span class="athlete-mini-line" aria-hidden="true"></span><span>O caminho até os Jogos Olímpicos</span></div>
			</div>
			<figure class="athlete-portrait">
				<div class="athlete-portrait-art">
					<span class="athlete-photo-label">PERFIL DO ATLETA</span>
					<?php if ( $portrait ) : ?>
						<img class="athlete-real-portrait" src="<?php echo $portrait; ?>" alt="<?php echo esc_attr( $athlete['foto_descricao'] ); ?>" width="800" height="1000" fetchpriority="high" />
					<?php else : ?>
						<img class="athlete-placeholder-art" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/athlete-placeholder.svg' ) ); ?>" alt="Espaço reservado para a fotografia do atleta" width="800" height="1000" fetchpriority="high" />
						<span class="athlete-photo-hint">SUA FOTO AQUI <span aria-hidden="true">↗</span></span>
					<?php endif; ?>
					<span class="athlete-portrait-tag"><?php echo esc_html( $athlete['modalidade'] ); ?></span>
				</div>
				<figcaption><?php echo $portrait ? esc_html( $athlete['foto_credito'] ) : 'Uma história que merece ser contada.'; ?></figcaption>
			</figure>
		</div>
	</section>
	<div class="athlete-stat-strip"><dl class="athlete-container athlete-stats">
		<?php foreach ( $athlete['numeros'] as $stat ) : ?>
		<div><dt><?php echo esc_html( $stat['rotulo'] ); ?></dt><dd><?php echo esc_html( $stat['valor'] ); ?></dd></div>
		<?php endforeach; ?>
	</dl></div>

	<section id="biografia" class="athlete-section athlete-container" aria-labelledby="biografia-title">
		<div class="athlete-section-heading"><p class="athlete-eyebrow">01 / BIOGRAFIA</p><h2 id="biografia-title">Muito além<br />da competição.</h2></div>
		<div class="athlete-bio-grid"><div class="athlete-prose">
			<?php foreach ( $athlete['biografia'] as $paragraph ) : ?><p><?php echo esc_html( $paragraph ); ?></p><?php endforeach; ?>
		</div><aside class="athlete-profile" aria-label="Ficha do atleta"><h3>Em poucas palavras</h3><dl>
			<?php foreach ( array( 'Nome completo' => 'nome', 'Nascimento' => 'nascimento', 'Origem' => 'cidade_natal', 'País' => 'pais', 'Modalidade' => 'modalidade', 'Especialidade' => 'especialidade', 'Estreia olímpica' => 'estreia_olimpica' ) as $label => $field ) : ?>
			<div><dt><?php echo esc_html( $label ); ?></dt><dd><?php echo esc_html( $athlete[ $field ] ); ?></dd></div>
			<?php endforeach; ?>
		</dl></aside></div>
	</section>

	<section id="trajetoria" class="athlete-timeline-section" aria-labelledby="trajetoria-title"><div class="athlete-container athlete-section">
		<div class="athlete-section-heading athlete-heading-row"><div><p class="athlete-eyebrow">02 / TRAJETÓRIA</p><h2 id="trajetoria-title">Cada etapa conta.</h2></div><p>Dos primeiros treinos<br />ao maior palco do esporte.</p></div>
		<ol class="athlete-timeline">
			<?php foreach ( $athlete['trajetoria'] as $event ) : ?>
			<li><span class="athlete-timeline-year"><?php echo esc_html( $event['ano'] ); ?></span><div class="athlete-timeline-copy"><h3><?php echo esc_html( $event['titulo'] ); ?></h3><p><?php echo esc_html( $event['texto'] ); ?></p></div></li>
			<?php endforeach; ?>
		</ol>
	</div></section>

	<section id="conquistas" class="athlete-section athlete-container" aria-labelledby="conquistas-title">
		<div class="athlete-section-heading athlete-heading-row"><div><p class="athlete-eyebrow">03 / CONQUISTAS</p><h2 id="conquistas-title">Marcas na história.</h2></div><p>Resultados que representam<br />anos de preparação.</p></div>
		<dl class="athlete-medals" aria-label="Medalhas olímpicas">
			<?php foreach ( array( 'ouro' => 'Ouro', 'prata' => 'Prata', 'bronze' => 'Bronze' ) as $key => $label ) : ?>
			<div class="athlete-medal athlete-medal-<?php echo esc_attr( $key ); ?>"><span class="athlete-medal-icon" aria-hidden="true">✦</span><dt><?php echo esc_html( $label ); ?><span>Medalhas olímpicas</span></dt><dd><?php echo esc_html( $athlete['medalhas'][ $key ] ); ?></dd></div>
			<?php endforeach; ?>
		</dl>
		<div class="athlete-achievements">
			<?php foreach ( $athlete['conquistas'] as $index => $achievement ) : ?>
			<article><span class="athlete-card-number" aria-hidden="true"><?php echo esc_html( sprintf( '%02d', $index + 1 ) ); ?></span><p class="athlete-eyebrow"><?php echo esc_html( $achievement['competicao'] ); ?></p><h3><?php echo esc_html( $achievement['resultado'] ); ?></h3><p><?php echo esc_html( $achievement['detalhe'] ); ?></p></article>
			<?php endforeach; ?>
		</div>
	</section>

	<section id="galeria" class="athlete-gallery-section" aria-labelledby="galeria-title"><div class="athlete-section athlete-container">
		<div class="athlete-section-heading"><p class="athlete-eyebrow">04 / GALERIA</p><h2 id="galeria-title">Instantes de uma jornada.</h2></div>
		<div class="athlete-gallery">
			<?php foreach ( $athlete['galeria'] as $index => $photo ) : $url = therapy_coach_athlete_image_url( $photo['foto'] ); ?>
			<figure>
				<?php if ( $url ) : ?><img src="<?php echo $url; ?>" alt="<?php echo esc_attr( $photo['descricao'] ); ?>" loading="lazy" width="800" height="600" />
				<?php else : ?><div class="athlete-gallery-empty" role="img" aria-label="Espaço reservado para fotografia"><span class="athlete-gallery-cross" aria-hidden="true">+</span><span>FOTO <?php echo esc_html( sprintf( '%02d', $index + 1 ) ); ?></span><small>Um momento para recordar</small></div><?php endif; ?>
				<figcaption><strong><?php echo esc_html( $photo['legenda'] ); ?></strong><?php if ( $url ) : ?><span><?php echo esc_html( $photo['credito'] ); ?></span><?php endif; ?></figcaption>
			</figure>
			<?php endforeach; ?>
		</div>
	</div></section>

	<section id="legado" class="athlete-section athlete-container athlete-legacy" aria-labelledby="legado-title"><div><p class="athlete-eyebrow">05 / LEGADO</p><h2 id="legado-title">O esporte inspira.<br />A história permanece.</h2></div><div class="athlete-prose"><p><?php echo esc_html( $athlete['legado'] ); ?></p><a class="athlete-text-link" href="#athlete-name">Voltar ao início <span aria-hidden="true">↑</span></a></div></section>

	<section id="fontes" class="athlete-sources" aria-labelledby="fontes-title"><div class="athlete-container"><h2 id="fontes-title">Fontes e referências</h2><p>Referências utilizadas na pesquisa desta biografia.</p><ul>
		<?php foreach ( $athlete['fontes'] as $source ) : $source_url = esc_url( $source['url'], array( 'http', 'https' ) ); ?><li><?php if ( $source_url ) : ?><a href="<?php echo $source_url; ?>" target="_blank" rel="noopener noreferrer"><?php echo esc_html( $source['titulo'] ); ?> <span aria-label="abre em nova aba">↗</span></a><?php else : ?><span><?php echo esc_html( $source['titulo'] ); ?></span><?php endif; ?><small>Acesso: <?php echo esc_html( $source['acesso'] ); ?></small></li><?php endforeach; ?>
	</ul></div></section>
</main>
