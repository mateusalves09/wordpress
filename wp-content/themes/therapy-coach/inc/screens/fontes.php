<?php
defined( 'ABSPATH' ) || exit;
?>
	<section id="fontes" class="athlete-sources" aria-labelledby="fontes-title"><div class="athlete-container"><h2 id="fontes-title">Fontes e referências</h2><p>Referências utilizadas na pesquisa desta biografia.</p><ul>
		<?php foreach ( $athlete['fontes'] as $source ) : $source_url = esc_url( $source['url'], array( 'http', 'https' ) ); ?><li><?php if ( $source_url ) : ?><a href="<?php echo $source_url; ?>" target="_blank" rel="noopener noreferrer"><?php echo esc_html( $source['titulo'] ); ?> <span aria-label="abre em nova aba">↗</span></a><?php else : ?><span><?php echo esc_html( $source['titulo'] ); ?></span><?php endif; ?><small>Acesso: <?php echo esc_html( $source['acesso'] ); ?></small></li><?php endforeach; ?>
	</ul></div></section>
