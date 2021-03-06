<?php get_header();?>
    <main class="main-content row u-clearfix">
        <div class="cat-header">
            <h1 class="tag">
                <?php echo 'Category Archives: <span>' . single_cat_title( '', false ) . '</span>'; ?>
            </h1>
            <?php if ( category_description() ) : // Show an optional category description ?>
                <div class="description"><?php echo category_description(); ?></div>
            <?php endif; ?>
        </div>
        <div class="layoutMultiColumn--primary" role="main">
            <?php if ( have_posts() ) : ?>
                <div class="blockGroup">
                    <?php while (have_posts()) : the_post();?>
                        <?php get_template_part( 'template-parts/content',get_post_format());?>
                    <?php endwhile;?>
                </div>
            <?php  endif;?>
            <div class="u-textAlignCenter page-nav">
                <?php the_posts_pagination( array(
                    'prev_next'          => 0,
                    'before_page_number' => '',
                ) ); ?>
            </div>
        </div>
        <?php get_sidebar();?>
    </main>
<?php get_footer();?>