<?php
/**
 * Songs shortcode view.
 *
 * @package    spiralWebDb\Songs\Shortcode
 * @since      1.0.0
 * @author     Robert A. Gadon
 * @link       http://spiralwebdb.com
 * @license    GPL-2.0+
 */

namespace spiralWebDb\Songs\Shortcode;

use function spiralWebDb\Songs\Template\render_song_title;

?>

<article class="<?php echo esc_attr( $article_classes ); ?>" itemscope itemtype="https://schema.org/CreativeWork">
    <header class="entry-header">
		<?php
		render_song_title( $song_id );
		?>
    </header>
    <div class="entry-content" itemprop="text">
		<?php the_content(); ?>
    </div>
</article>