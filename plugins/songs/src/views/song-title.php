<?php
/**
 * The single song title view.
 */

namespace spiralWebDb\Songs;

use function spiralWebDb\Songs\Template\render_song_taxonomy_term;
?>
<em>
    <h4 class="song-title" itemprop="headline">
        <?php
        echo sprintf( '%1s' . ' -- ' . '%2s',
            esc_html( get_the_title( $song_id ) ),
            render_song_taxonomy_term( $song_id ) );
        ?>
    </h4>
</em>