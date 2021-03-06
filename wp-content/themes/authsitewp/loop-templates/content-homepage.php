<?php
/**
 * Partial template for content in page.php
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<div class="container">
    <div class="row">
            <!-- start #primary -->
            <div class="col-lg-6 offset-lg-1 content-area" id="primary">
                <main class="site-main" id="main">
                        <?php $the_query = new WP_Query( array( // the query
                            'posts_per_page' => 3,
                        ));	?>

                        <?php if ( $the_query->have_posts() ) : ?>
                            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                                <article <?php post_class('post-content'); ?> id="post-<?php the_ID(); ?>">
                                    <div class="row">
	                                    <?php if (has_post_thumbnail() ) : ?>
                                            <div class="col-md-12 post-thumbnail-wrap">
                                                <a href="<?php echo get_permalink(); ?>">
                                                    <div class="post-thumbnail" style="background-image: url('<?php echo the_post_thumbnail_url('large'); ?>')"></div>
                                                </a>
                                            </div>
                                        <?php endif; ?><!-- end post featured image -->

                                        <div class="col-md-12">
                                            <div class="blog-feed-content">
                                                <header class="entry-header">
                                                    <h2 class="entry-title">
                                                        <a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
                                                    </h2>
                                                    <div class="entry-meta">
                                                        <h5 class="entry-date"><time class="entry-date" datetime="<?php echo get_the_date(); ?>"><?php the_date(); ?></time>
                                                        </h5>
                                                    </div><!-- .entry-meta -->
                                                </header><!-- .entry-header -->
                                                <div class="entry-summary">
                                                    <a class="text-decoration-none" href="<?php echo get_permalink(); ?>">
	                                                    <?php the_excerpt(); ?>
                                                    </a>
                                                </div><!-- .entry-summary -->
                                            </div>
                                        </div>
                                    </div>
                                </article><!-- #post-## -->
                            <?php endwhile; ?>
                            <?php echo wp_reset_postdata(); ?>
                        <?php else : ?>
                            <p><?php __('No News'); ?></p>
                        <?php endif; ?>
                </main><!-- #main -->
            </div><!-- closing #primary -->

            <!-- start #right-sidebar -->
            <div class="col-lg-4" id="right-sidebar">
                <div class="row">
                    <div class="col-md-12">
                        <div class="advert-wrapper">
                            <i class="fab fa-grav"></i>
                            <h3>Spread The Word</h3>
                            <span>We have an impact across the globe with content that people really love and relate to. If you enjoy your time here feel free to spread the word, it makes a huge difference!</span>
                        </div>
                    </div>
                </div>
            </div><!-- #right-sidebar -->
    </div><!-- close .row -->
</div><!-- close .container -->