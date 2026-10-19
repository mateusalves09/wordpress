<?php
/**
 * Title: Atleta — Cabeçalho
 * Slug: therapy-coach/header
 * Categories: therapy-coach
 */
defined( 'ABSPATH' ) || exit;
$athlete = therapy_coach_athlete_data();
$home = home_url( '/' );
?>
<!-- wp:html -->
<div class="athlete-header">
 <div class="athlete-container athlete-header-inner">
  <a class="athlete-brand" href="<?php echo esc_url( $home ); ?>" aria-label="Biografia olímpica — página inicial"><span class="athlete-brand-symbol" aria-hidden="true">✦</span><span>PERFIL<span class="athlete-brand-sub">OLÍMPICO</span></span></a>
  <button class="athlete-menu-button" type="button" aria-expanded="false" aria-controls="athlete-navigation">Menu <span aria-hidden="true">☰</span></button>
  <nav id="athlete-navigation" class="athlete-nav" aria-label="Navegação principal">
   <?php foreach ( array( 'biografia' => 'Biografia', 'trajetoria' => 'Trajetória', 'conquistas' => 'Conquistas', 'galeria' => 'Galeria' ) as $anchor => $label ) : ?>
    <a href="<?php echo esc_url( $home . '#' . $anchor ); ?>"><?php echo esc_html( $label ); ?></a>
   <?php endforeach; ?>
   <a class="athlete-nav-feature" href="<?php echo esc_url( $home . '#legado' ); ?>">O legado <span aria-hidden="true">↗</span></a>
  </nav>
 </div>
</div>
<!-- /wp:html -->
