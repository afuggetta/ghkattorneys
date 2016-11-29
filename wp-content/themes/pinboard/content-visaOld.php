    <?php
    $class = get_post_meta( get_the_ID(), 'class' );
    $apply_class = ($class[0]) ? $class[0] : '' ;

    $color = get_post_meta( get_the_ID(), 'metro-color' );
    $color = ($color[0]) ?  $color[0] : 'green' ;

    $delay = get_post_meta( get_the_ID(), 'metro-delay' );
    $delay = ($delay[0]) ?  $delay[0] : '5000' ;

    $style = get_post_meta( get_the_ID(), 'style' );
    $style = ($style[0]) ?  $style[0] : 'flip' ;

    ?>
    <?php /* <div class="live-tile accent green exclude" <?php post_class(); ?> id="post-<?php the_ID(); ?>"> */ ?>
<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
    <div  class="<?php echo $color; ?> live-tile <?php echo $apply_class; ?>" data-mode="<?php echo $style; ?>" data-delay="<?php echo $delay; ?>"  <?php post_class(); ?> id="post-<?php the_ID(); ?>" >
        <div>
            <?php
            if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                the_post_thumbnail();
            } else {
            ?>
            <span class="tile-title"><?php the_title(); ?></span>
            <?php } ?>
        </div>
        <div>
            <!-- <img class="full" src="/images/sample/4tw.gif" alt="4" /> -->
            <span class="tile-title"><?php the_excerpt(); ?></span>
        </div>
    </div>
</a>



     

        <?php /*
        <div class="tiles blue tile-group four-wide entry-container">
            <header class="entry-header">
                <<?php pinboard_title_tag( 'post' ); ?> class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></<?php pinboard_title_tag( 'post' ); ?>>
                <?php if( pinboard_post_is_full_width() ) : ?>
                    <?php pinboard_entry_meta(); ?>
                <?php endif; ?>
            </header><!-- .entry-header -->
            <?php if( pinboard_post_is_full_width() ) : ?>
                <?php pinboard_post_thumbnail(); ?>
            <?php endif; ?>
            <?php if( ! is_category( pinboard_get_option( 'portfolio_cat' ) ) && ! ( is_category() && cat_is_ancestor_of( pinboard_get_option( 'portfolio_cat' ), get_queried_object() ) ) ) : ?>
                <div class="entry-summary">
                    <?php the_excerpt(); ?>
                </div><!-- .entry-summary -->
            <?php endif; ?>
            <div class="clear"></div>
        </div><!-- .entry-container -->

        */ ?>


        <?php /*
        <div class="entry-container">
            <header class="entry-header">
                <<?php pinboard_title_tag( 'post' ); ?> class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></<?php pinboard_title_tag( 'post' ); ?>>
                <?php if( pinboard_post_is_full_width() ) : ?>
                    <?php pinboard_entry_meta(); ?>
                <?php endif; ?>
            </header><!-- .entry-header -->
            <?php if( pinboard_post_is_full_width() ) : ?>
                <?php pinboard_post_thumbnail(); ?>
            <?php endif; ?>
            <?php if( ! is_category( pinboard_get_option( 'portfolio_cat' ) ) && ! ( is_category() && cat_is_ancestor_of( pinboard_get_option( 'portfolio_cat' ), get_queried_object() ) ) ) : ?>
                <div class="entry-summary">
                    <?php the_excerpt(); ?>
                </div><!-- .entry-summary -->
            <?php endif; ?>
            <div class="clear"></div>
        </div><!-- .entry-container -->

        <?php if( ! pinboard_post_is_full_width() ) : ?>
            <?php //pinboard_entry_meta(); ?>
        <?php endif; ?>
    </div><!-- .entry -->
</article><!-- .post -->
 */ ?>