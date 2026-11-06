<?php
defined( 'ABSPATH' ) || exit;
?>
	<section id="trajetoria" class="athlete-timeline-section" aria-labelledby="trajetoria-title"><div class="athlete-container athlete-section">
		<div class="athlete-section-heading athlete-heading-row"><div><p class="athlete-eyebrow">02 / TRAJETÓRIA</p><h2 id="trajetoria-title">Cada etapa conta.</h2></div><p>Dos primeiros treinos<br />ao maior palco do esporte.</p></div>
		<div class="athlete-filter-bar" data-timeline-controls hidden>
   <div class="athlete-filters" role="group" aria-label="Filtrar trajetória por ano">
    <button type="button" data-year-filter="all" aria-pressed="true" aria-controls="athlete-timeline">Todos os anos</button>
    <?php foreach ( array_unique( array_column( $athlete['trajetoria'], 'ano' ) ) as $year ) : ?>
    <button type="button" data-year-filter="<?php echo esc_attr( $year ); ?>" aria-pressed="false" aria-controls="athlete-timeline"><?php echo esc_html( $year ); ?></button>
    <?php endforeach; ?>
   </div>
   <p class="athlete-filter-count" role="status" aria-live="polite" data-timeline-count></p>
  </div>
  <ol class="athlete-timeline" id="athlete-timeline">
			<?php foreach ( $athlete['trajetoria'] as $index => $event ) : ?>
			<li data-timeline-year="<?php echo esc_attr( $event['ano'] ); ?>"><span class="athlete-timeline-year"><?php echo esc_html( $event['ano'] ); ?></span><details class="athlete-timeline-copy"<?php if ( 0 === $index ) : ?> open<?php endif; ?>><summary><h3><?php echo esc_html( $event['titulo'] ); ?></h3><span class="athlete-detail-icon" aria-hidden="true">+</span></summary><p><?php echo esc_html( $event['texto'] ); ?></p></details></li>
			<?php endforeach; ?>
		</ol>
	</div></section>
