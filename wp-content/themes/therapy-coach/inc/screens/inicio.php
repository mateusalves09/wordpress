<?php
defined( 'ABSPATH' ) || exit;
?>
	<section class="athlete-hero" aria-labelledby="athlete-name">
		<div class="athlete-container athlete-hero-grid">
			<div class="athlete-hero-copy">
				<p class="athlete-eyebrow"><span class="athlete-status" aria-hidden="true"></span> ESPORTE · HISTÓRIA · LEGADO</p>
				<p class="athlete-kicker">O homem que redefiniu a velocidade.</p>
				<h1 id="athlete-name"><?php echo esc_html( $athlete['nome'] ); ?></h1>
				<p class="athlete-discipline"><?php echo esc_html( $athlete['modalidade'] ); ?> <span aria-hidden="true">/</span> <?php echo esc_html( $athlete['pais'] ); ?></p>
				<p class="athlete-intro"><?php echo esc_html( $athlete['resumo'] ); ?></p>
				<div class="athlete-actions"><a class="athlete-button" href="<?php echo esc_url( therapy_coach_athlete_screen_url( 'biografia' ) ); ?>">Conheça a história <span aria-hidden="true">↗</span></a><a class="athlete-text-link" href="<?php echo esc_url( therapy_coach_athlete_screen_url( 'conquistas' ) ); ?>">Ver conquistas <span aria-hidden="true">↓</span></a></div>
				<div class="athlete-hero-bottom"><span class="athlete-mini-line" aria-hidden="true"></span><span>O caminho até os Jogos Olímpicos</span></div>
			</div>
            <aside class="bolt-record-art" aria-label="Recorde mundial dos 100 metros: 9,58 segundos, Berlim 2009">
                <span class="bolt-art-label">VELOCIDADE QUE FEZ HISTÓRIA</span>
                <span class="bolt-lightning" aria-hidden="true">ϟ</span>
                <div class="bolt-record"><strong>9,58<span>s</span></strong><span>100 METROS · BERLIM, 2009</span></div>
                <span class="bolt-art-footer">JAMAICA / PARA O MUNDO ↗</span>
            </aside>
		</div>
	</section>
	<div class="athlete-stat-strip"><dl class="athlete-container athlete-stats">
		<?php foreach ( $athlete['numeros'] as $stat ) : ?>
		<div><dt><?php echo esc_html( $stat['rotulo'] ); ?></dt><dd><?php echo esc_html( $stat['valor'] ); ?></dd></div>
		<?php endforeach; ?>
	</dl></div>
