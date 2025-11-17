<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 *
 * @package Farmers
 * @since 1.0.0
 */

get_header(); 
?>

    <main class="py-16 bg-white">
        <div class="container mx-auto px-4">
            
            <?php if ( have_posts() ) : ?>

                <?php if ( is_archive() || is_search() ) : ?>
                    <h1 class="text-fluid-h2 font-bold text-gray-800 text-center mb-10">
                        <?php the_archive_title(); ?>
                    </h1>
                <?php endif; ?>


                <div class="max-w-3xl mx-auto prose lg:prose-lg text-gray-700">
                    <?php
                    // ループ開始
                    while ( have_posts() ) :
                        the_post();
                        ?>

                        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                            <header class="entry-header mb-4">
                                <?php if ( is_singular() ) : ?>
                                    <h1 class="entry-title text-fluid-h2 font-bold text-gray-800"><?php the_title(); ?></h1>
                                <?php else : ?>
                                    <h2 class="entry-title text-fluid-h3 font-bold text-gray-800 hover:text-green-700">
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </h2>
                                <?php endif; ?>
                            </header><div class="entry-content">
                                <?php
                                if ( is_singular() ) {
                                    the_content();
                                } else {
                                    // アーカイブページでは抜粋を表示
                                    the_excerpt();
                                }
                                ?>
                            </div></article><?php
                    endwhile; // ループ終了
                    ?>
                </div>

                <?php
                // ページネーション (
                the_posts_pagination(
                    array(
                        'prev_text' => '&larr; ' . __( 'Prev', 'farmers' ),
                        'next_text' => __( 'Next', 'farmers' ) . ' &rarr;',
                    )
                );

                ?>

            <?php else : ?>
                <div class="text-center">
                    <h1 class="text-fluid-h2 font-bold text-gray-800 mb-6">
                        <?php esc_html_e( 'Nothing Found', 'farmers' ); ?>
                    </h1>
                    <p class="text-lg text-gray-700 mb-6">
                        <?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'farmers' ); ?>
                    </p>
                    <?php get_search_form(); ?>
                </div>
            <?php endif; ?>

        </div> </main>

<?php
get_footer(); 
?>