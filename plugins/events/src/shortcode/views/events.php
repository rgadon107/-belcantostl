<?php
/**
 * Events shortcode view.
 *
 * @package    spiralWebDb\Events\Shortcode
 * @since      1.0.0
 * @author     Robert A. Gadon
 * @link       http://spiralwebdb.com
 * @license    GPL-2.0+
 */

namespace spiralWebDb\Events\Shortcode;

use function spiralWebDb\Events\Template\render_post_thumbnail_before_title;
use function spiralWebDb\Events\Template\render_the_performance_community;
use function spiralWebDb\Events\Template\render_event_title;
use function spiralWebDb\Events\Template\render_performance_date_and_time;
use function spiralWebDb\Events\Template\render_event_content;
use function spiralWebDb\Events\Template\render_event_map;
use function spiralWebDb\Events\Template\render_admission_information;
use function spiralWebDb\Events\Template\render_parking_information;
use function spiralWebDb\Events\Template\render_supplemental_event_information;
use function spiralWebDb\Events\Template\render_the_event_sponsor_information;


?>

<article class="<?php echo esc_attr( $article_classes ); ?>" itemscope itemtype="https://schema.org/MusicEvent">
    <header class="event-entry-header">
		<?php
		render_post_thumbnail_before_title( $event_id );
		render_the_performance_community( $event_id );
		render_event_title( $event_id );
		?>
    </header>
    <div class="before-event-entry-content-meta two-thirds">
		    <?php
		    render_performance_date_and_time( $event_id );
		    ?>
    </div>
    <div class="event-entry-content two-thirds">
			<?php
			render_event_content( $event_id = 0 );
			?>
    </div>
    <div class="after-event-entry-content-meta two-thirds">
			<?php
			render_supplemental_event_information( $event_id = 0);
			render_event_map( $event_id );
			render_admission_information( $event_id );
			render_parking_information( $event_id );
			?>
    </div>
    <footer class="event-entry-footer two-thirds">
            <?php render_the_event_sponsor_information( $event_id ); ?>
    </footer>
</article>
