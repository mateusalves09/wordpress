<?php
defined( 'ABSPATH' ) || exit;
?>
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
