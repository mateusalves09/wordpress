<?php
/**
 * Title: Atleta — Rodapé
 * Slug: therapy-coach/footer
 * Categories: therapy-coach
 */
defined( 'ABSPATH' ) || exit;
$athlete = therapy_coach_athlete_data();
?>
<!-- wp:html -->
<div class="athlete-footer"><div class="athlete-container">
 <div class="athlete-footer-top"><div><p class="athlete-eyebrow">UMA TRAJETÓRIA PARA INSPIRAR</p><p class="athlete-footer-name"><?php echo esc_html( $athlete['nome'] ); ?></p><p><?php echo esc_html( $athlete['modalidade'] . ' · ' . $athlete['pais'] ); ?></p></div>
 <div class="athlete-footer-links"><a href="<?php echo esc_url( home_url( '/#fontes' ) ); ?>">Fontes e referências ↗</a>
 <?php foreach ( $athlete['links'] as $label => $url ) : $safe_url = esc_url( $url, array( 'http', 'https' ) ); if ( $safe_url ) : ?><a href="<?php echo $safe_url; ?>" target="_blank" rel="noopener noreferrer"><?php echo esc_html( $label ); ?> <span aria-label="abre em nova aba">↗</span></a><?php endif; endforeach; ?>
 </div></div>
 <div class="athlete-footer-bottom"><p>Projeto biográfico de <?php echo esc_html( $athlete['autor_projeto'] ); ?></p><p>Histórias que vão além do pódio.</p></div>
</div></div>
<!-- /wp:html -->
