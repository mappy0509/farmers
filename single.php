<?php
/**
 * The template for displaying all single posts
 *
 * @package Farmers
 * @since 1.0.0
 */

get_header(); 
?>

    <main class="py-12 bg-white">
        <div class="container mx-auto px-4">

            <?php
            // ループ開始
            while ( have_posts() ) :
                the_post();
            ?>

            <nav class="text-sm text-gray-600 mb-6" aria-label="Breadcrumb">
                <ol class="list-none p-0 inline-flex space-x-2">
                    <li class="flex items-center">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="hover:text-green-700">ホーム</a>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 mx-2 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" /></svg>
                    </li>
                    <li class="flex items-center">
                        <?php
                        // 「投稿ページ」として設定された固定ページのURLを取得
                        $blog_page_url = get_permalink( get_option( 'page_for_posts' ) );
                        ?>
                        <a href="<?php echo esc_url( $blog_page_url ); ?>" class="hover:text-green-700">ブログ・お知らせ</a>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 mx-2 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" /></svg>
                    </li>
                    <li class="flex items-center text-gray-800 font-bold" aria-current="page">
                        <?php the_title(); ?>
                    </li>
                </ol>
            </nav>

            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                
                <article id="post-<?php the_ID(); ?>" <?php post_class( 'md:col-span-3 bg-white p-6 sm:p-8 rounded-lg shadow-lg' ); ?>>
                    
                    <header class="mb-6">
                        <div class="text-sm font-bold text-green-700 hover:text-green-900">
                            <?php the_category( ', ' ); ?>
                        </div>
                        <h1 class="text-fluid-h2 font-bold text-gray-800 mt-2 mb-3">
                            <?php the_title(); ?>
                        </h1>
                        <span class="text-base text-gray-500"><?php echo get_the_date( 'Y年m月d日' ); ?></span>
                    </header>

                    <?php if ( has_post_thumbnail() ) : ?>
                    <div class="mb-8 rounded-lg overflow-hidden shadow">
                        <img src="<?php the_post_thumbnail_url( 'full' ); // 'full' は最大サイズ ?>" alt="<?php the_title_attribute(); ?>" class="w-full h-auto object-cover">
                    </div>
                    <?php endif; ?>

                    <div class="prose lg:prose-lg max-w-none text-gray-700">
                        <?php the_content(); ?>
                    </div> <footer class="mt-12 pt-8 border-t border-gray-200 flex justify-between">
                        <div>
                            <?php previous_post_link( '%link', '&larr; %title' ); ?>
                        </div>
                        
                        <a href="<?php echo esc_url( $blog_page_url ); ?>" class="text-gray-600 hover:text-green-700 transition-colors">
                            ブログ一覧へ
                        </a>

                        <div>
                            <?php next_post_link( '%link', '%title &rarr;' ); ?>
                        </div>
                    </footer>

                </article> <aside class="md:col-span-1 bg-gray-50 p-6 rounded-lg shadow-sm h-fit">
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

            </div> <?php
            endwhile; // ループ終了
            ?>

        </div>
    </main>
<?php
get_footer(); 
?>