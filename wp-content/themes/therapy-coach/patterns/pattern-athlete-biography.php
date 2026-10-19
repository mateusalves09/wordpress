<?php
/**
 * Title: Atleta — Biografia olímpica
 * Slug: therapy-coach/athlete-biography
 * Categories: therapy-coach
 * Inserter: no
 */
defined( 'ABSPATH' ) || exit;
$athlete = therapy_coach_athlete_data();
?>
<!-- wp:html -->
<?php require get_theme_file_path( 'inc/athlete-biography.php' ); ?>
<!-- /wp:html -->
