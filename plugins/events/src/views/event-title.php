<?php
/**
 * The single Event title view.
 */

namespace spiralWebDb\Events;

?>
<h1 class="entry-title event-title two-thirds" itemprop="headline">
	<?php if ( ! is_front_page() ) : ?>
    <a href="<?php echo esc_url( get_permalink( $event_id ) ); ?>">' ?>
		<?php endif;
		echo esc_html( get_the_title( $event_id ) ); ?>
    </a>
</h1>