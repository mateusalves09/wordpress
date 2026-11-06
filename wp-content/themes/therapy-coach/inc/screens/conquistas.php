<?php
defined( 'ABSPATH' ) || exit;
?>
	<section id="conquistas" class="athlete-section athlete-container" aria-labelledby="conquistas-title">
		<div class="athlete-section-heading athlete-heading-row"><div><p class="athlete-eyebrow">03 / CONQUISTAS</p><h2 id="conquistas-title">Marcas na história.</h2></div><p>Resultados que representam<br />anos de preparação.</p></div>
		<dl class="athlete-medals" aria-label="Medalhas olímpicas">
			<?php foreach ( array( 'ouro' => 'Ouro', 'prata' => 'Prata', 'bronze' => 'Bronze' ) as $key => $label ) : ?>
			<div class="athlete-medal athlete-medal-<?php echo esc_attr( $key ); ?>"><span class="athlete-medal-icon" aria-hidden="true">✦</span><dt><?php echo esc_html( $label ); ?><span>Medalhas olímpicas</span></dt><dd><?php echo esc_html( $athlete['medalhas'][ $key ] ); ?></dd></div>
			<?php endforeach; ?>
		</dl>
		<div class="athlete-achievements">
			<?php foreach ( $athlete['conquistas'] as $index => $achievement ) : ?>
			<article><span class="athlete-card-number" aria-hidden="true"><?php echo esc_html( sprintf( '%02d', $index + 1 ) ); ?></span><p class="athlete-eyebrow"><?php echo esc_html( $achievement['competicao'] ); ?></p><h3><?php echo esc_html( $achievement['resultado'] ); ?></h3><details class="athlete-record-detail"><summary>Entenda a marca <span aria-hidden="true">+</span></summary><p><?php echo esc_html( $achievement['detalhe'] ); ?></p></details></article>
			<?php endforeach; ?>
		</div>
	</section>
