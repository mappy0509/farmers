<?php
/**
 * The template for displaying the blog index (posts page).
 *
 * @package Farmers
 * @since 1.0.0
 */

get_header(); 
?>

    <main class="py-16 bg-white">
        <div class="container mx-auto px-4">
            
            <h1 class="text-fluid-h2 font-bold text-gray-800 text-center mb-10">
                <?php
                // 「投稿ページ」として設定された固定ページのタイトルを表示
                echo esc_html( get_the_title( get_option( 'page_for_posts' ) ) );
                ?>
            </h1>

            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                
                <div class="md:col-span-3">
                    <div class="space-y-8">
                        
                        <?php if ( have_posts() ) : ?>

                            <?php
                            // ループ開始
                            while ( have_posts() ) :
                                the_post();
                            ?>

                            <article id="post-<?php the_ID(); ?>" <?php post_class( 'flex flex-col sm:flex-row bg-white rounded-lg shadow-lg overflow-hidden' ); ?>>
                                <a href="<?php the_permalink(); ?>" class="block sm:w-1/3">
                                    <?php if ( has_post_thumbnail() ) : ?>
                                        <img src="<?php the_post_thumbnail_url( 'large' ); // 'large' は適切な画像サイズを指定 ?>" alt="<?php the_title_attribute(); ?>" class="w-full h-48 sm:h-full object-cover">
                                    <?php else : ?>
                                        <img src="https://placehold.co/400x300/e0e0e0/ffffff?text=No+Image" alt="画像がありません" class="w-full h-48 sm:h-full object-cover">
                                    <?php endif; ?>
                                </a>
                                <div class="p-6 sm:w-2/3 flex flex-col justify-between">
                                    <div>
                                        <span class="text-sm text-gray-500"><?php echo get_the_date( 'Y.m.d' ); ?></span>
                                        <h2 class="text-fluid-h3 font-bold text-gray-800 mb-2 hover:text-green-700 transition-colors">
                                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                        </h2>
                                        <div class="text-gray-600 text-base leading-relaxed mb-4">
                                            <?php the_excerpt(); // 記事の抜粋を表示 ?>
                                        </div>
                                    </div>
                                    <a href="<?php the_permalink(); ?>" class="text-green-700 font-bold hover:text-green-900 self-start">
                                        続きを読む &rarr;
                                    </a>
                                </div>
                            </article>

                            <?php
                            endwhile; // ループ終了
                            ?>

                        <?php else : ?>
                            
                            <p class="text-lg text-gray-700">
                                <?php esc_html_e( 'Sorry, no posts matched your criteria.', 'farmers' ); ?>
                            </p>

                        <?php endif; ?>


                    </div> <nav class="flex justify-center mt-12">
                        <?php
                        // WordPress 標準のページネーション
                        the_posts_pagination(
                            array(
                                'prev_text' => '&laquo;',
                                'next_text' => '&raquo;',
                                'screen_reader_text' => ' ', // スクリーンリーダー用のテキストを隠す（デザインによる）
                                'before_page_number' => '<span class="px-4 py-2 border rounded-lg bg-white text-gray-600 hover:bg-gray-100">',
                                'after_page_number'  => '</span>',
                                'current_item_active_text_color' => '#ffffff', // 'current' のテキスト色
                                'current_item_active_background_color' => '#166534', // 'current' の背景色 (green-700)
                                'current_item_attributes' => 'class="px-4 py-2 border rounded-lg bg-green-700 text-white font-bold"', // 現在のページ
                            )
                        );
                        ?>
                    </nav>

                </div> <aside class="md:col-span-1 bg-gray-50 p-6 rounded-lg shadow-sm h-fit">
                    <nav>
                        <h2 class="text-xl font-bold text-gray-800 mb-4">カテゴリー</h2>
                        <ul class="space-y-2">
                            <li><a href="#" class="block text-gray-600 hover:text-green-700">すべてのお知らせ</a></li>
                            <li><a href="#" class="block text-gray-600 hover:text-green-700">新商品</a></li>
                            <li><a href="#" class="block text-gray-600 hover:text-green-700">キャンペーン</a></li>
                            <li><a href="#" class="block text-gray-600 hover:text-green-700">生産者インタビュー</a></li>
                        </ul>
                    </nav>

                    <nav class="mt-8">
                        <h2 class="text-xl font-bold text-gray-800 mb-4">アーカイブ</h2>
                        <ul class="space-y-2">
                            <li><a href="#" class="block text-gray-600 hover:text-green-700">2025年11月</a></li>
                            <li><a href="#" class="block text-gray-600 hover:text-green-700">2025年10月</a></li>
                            <li><a href="#" class="block text-gray-600 hover:text-green-700">2025年9月</a></li>
                        </ul>
                    </nav>
                </aside>

            </div> </div>
    </main>

<?php
get_footer(); 
?>