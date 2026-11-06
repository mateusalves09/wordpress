<?php
/** Composição das telas do perfil. Os caminhos são definidos por uma lista fixa. */
defined( 'ABSPATH' ) || exit;
$screen = therapy_coach_athlete_screen();
$screens = therapy_coach_athlete_screens();
$current = $screens[ $screen ];
?>
<main id="wp--skip-link--target" class="athlete-main" tabindex="-1">
 <?php if ( 'inicio' !== $screen ) : ?>
 <div class="athlete-container athlete-screen-heading">
  <nav class="athlete-breadcrumb" aria-label="Caminho da página"><a href="<?php echo esc_url( therapy_coach_athlete_screen_url() ); ?>">Visão geral</a><span aria-hidden="true">/</span><span aria-current="page"><?php echo esc_html( $current['label'] ); ?></span></nav>
  <p class="athlete-eyebrow"><?php echo esc_html( $athlete['nome'] ); ?> / PERFIL OLÍMPICO</p>
  <h1><?php echo esc_html( $current['title'] ); ?></h1>
  <p class="athlete-screen-intro"><?php echo esc_html( $current['intro'] ); ?></p>
 </div>
 <?php endif; ?>
 <?php require get_theme_file_path( 'inc/screens/' . $screen . '.php' ); ?>
 <section class="athlete-section athlete-container athlete-explore" aria-labelledby="explore-title">
  <div class="athlete-section-heading"><p class="athlete-eyebrow">EXPLORE O PERFIL</p><h2 id="explore-title">Uma história, muitos caminhos.</h2></div>
  <div class="athlete-screen-cards">
   <?php foreach ( $screens as $slug => $info ) : if ( 'inicio' === $slug || $screen === $slug ) { continue; } ?>
   <a class="athlete-screen-card" href="<?php echo esc_url( therapy_coach_athlete_screen_url( $slug ) ); ?>"><span class="athlete-eyebrow"><?php echo esc_html( $info['label'] ); ?><span aria-hidden="true">↗</span></span><h3><?php echo esc_html( $info['title'] ); ?></h3><p><?php echo esc_html( $info['intro'] ); ?></p></a>
   <?php endforeach; ?>
  </div>
  <div class="athlete-share"><button type="button" class="athlete-button" data-athlete-share hidden>Copiar link desta página <span aria-hidden="true">↗</span></button><span role="status" aria-live="polite" data-share-status></span><input type="text" data-share-link hidden readonly aria-label="Link desta página para copiar" /></div>
 </section>
 <?php require get_theme_file_path( 'inc/screens/fontes.php' ); ?>
</main>
