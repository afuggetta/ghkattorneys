<?php get_header(); ?>
	<?php if( is_home() && ! is_paged() ) : ?>
		<?php if( pinboard_get_option( 'slider' ) ) : ?>
			<?php get_template_part( 'slider' ); ?>
		<?php endif; ?>
		<?php get_sidebar( 'wide' ); ?>
		<?php get_sidebar( 'boxes' ); ?>
	<?php elseif( ( is_home() && is_paged() ) || ( ! is_home() && pinboard_get_option( 'location' ) ) ) : ?>
		<?php pinboard_current_location(); ?>
	<?php endif; ?>
	<div id="container" style="width: 100%;position: relative;top: 0px;">
		<section id="content" <?php pinboard_content_class(); ?> style="position: relative;top: -10px;left: -50px;width: 800px;">
			<?php if( is_category( pinboard_get_option( 'portfolio_cat' ) ) || ( is_category() && cat_is_ancestor_of( pinboard_get_option( 'portfolio_cat' ), get_queried_object() ) ) ) : ?>
				<?php pinboard_category_filter( pinboard_get_option( 'portfolio_cat' ) ); ?>
			<?php endif; ?>
			<?php if( have_posts() ) : ?>
				<div class="entries">


            <?php /* ?>

    <!-- Mango Flip List that triggers every 3 seconds -->
<!--     <div class="list-tile mango">
        <span class="tile-title">flip list</span>
        <ul class="flip-list fourTiles" data-mode="flip-list" data-delay="2000">
            <li>
                <div><img class="full" src="/images/sample/1t.gif" alt="1" /></div>
                <div><img class="full" src="/images/sample/1tw.gif" alt="1" /></div>
            </li>
            <li>
                <div><img class="full" src="/images/sample/2t.gif" alt="2" /></div>
                <div><img class="full" src="/images/sample/2tw.gif" alt="2" /></div>
            </li>
            <li>
                <div><img class="full" src="/images/sample/3t.gif" alt="3" /></div>
                <div><img class="full" src="/images/sample/3tw.gif" alt="3" /></div>
            </li>
            <li data-direction="horizontal">
                <div><img class="full" src="/images/sample/4t.gif" alt="4" /></div>
                <div><img class="full" src="/images/sample/4tw.gif" alt="4" /></div>
            </li>
        </ul>
    </div> -->
    <!-- Green Static Tile -->
    <div class="live-tile accent green exclude">
        <span class="tile-title">static tile</span>
        <p>Static tiles can take advantage of theming too!</p>
    </div>
</div>


<?php */ ?>



					<?php while( have_posts() ) : the_post(); ?>
						<?php get_template_part( 'content-visa', get_post_format() ); ?>
					<?php endwhile; ?>
				</div><!-- .entries -->

                <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
                <script type="text/javascript" src="<?php echo get_option('siteurl') . '/wp-content/themes/pinboard/scripts/metro-js/MetroJs.js';?>"></script>
                <!-- Activate live tiles -->
                <script type="text/javascript">
//                    console.log('hello');
                    // apply regular slide universally unless .exclude class is applied 
                    // NOTE: The default options for each liveTile are being pulled from the 'data-' attributes
                    var $livetiles = jQuery.noConflict();
                    $livetiles(window).load(function() {
//                        console.log('Hello livetile');
                        $livetiles(".live-tile, .flip-list").not(".exclude").liveTile();
                    });
                </script>
                
				<?php pinboard_posts_nav(); ?>
			<?php else : ?>
				<?php pinboard_404(); ?>
			<?php endif; ?>
		</section><!-- #content -->
		<?php if( 'no-sidebars' != pinboard_get_option( 'layout' ) && 'full-width' != pinboard_get_option( 'layout' ) && ! is_category( pinboard_get_option( 'portfolio_cat' ) ) && ! ( is_category() && cat_is_ancestor_of( pinboard_get_option( 'portfolio_cat' ), get_queried_object() ) ) ) : ?>
			<?php get_sidebar(); ?>
		<?php endif; ?>
		<div class="clear"></div>
	</div><!-- #container -->
<?php get_footer(); ?>