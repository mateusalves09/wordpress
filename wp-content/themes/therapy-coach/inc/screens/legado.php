<?php
defined( 'ABSPATH' ) || exit;
?>
	<section id="legado" class="athlete-section athlete-container athlete-legacy" aria-labelledby="legado-title"><div><p class="athlete-eyebrow">04 / LEGADO</p><h2 id="legado-title">O esporte inspira.<br />A história permanece.</h2></div><div class="athlete-prose"><p><?php echo esc_html( $athlete['legado'] ); ?></p><a class="athlete-text-link" href="<?php echo esc_url( therapy_coach_athlete_screen_url() ); ?>">Voltar à visão geral <span aria-hidden="true">↑</span></a></div></section>

<section class="athlete-container athlete-faq" aria-labelledby="athlete-faq-title">
 <p class="athlete-eyebrow">CONTINUE EXPLORANDO</p><h2 id="athlete-faq-title">Para ir além.</h2>
 <details><summary>Quais provas fazem parte desta história?<span aria-hidden="true">+</span></summary><p><?php echo esc_html( $athlete['especialidade'] ); ?>. Veja as marcas em <a href="<?php echo esc_url( therapy_coach_athlete_screen_url( 'conquistas' ) ); ?>">Conquistas ↗</a>.</p></details>
 <details><summary>Como acompanhar a evolução da carreira?<span aria-hidden="true">+</span></summary><p>A <a href="<?php echo esc_url( therapy_coach_athlete_screen_url( 'trajetoria' ) ); ?>">linha do tempo ↗</a> reúne os principais momentos. Escolha um ano e abra um capítulo para conhecer os detalhes.</p></details>
 <details><summary>Onde consultar as referências?<span aria-hidden="true">+</span></summary><p>Os links usados para esta biografia estão em <a href="#fontes">Fontes e referências ↓</a>, ao final da página.</p></details>
</section>
