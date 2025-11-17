<?php
/**
 * Template Name: ふるさと納税
 *
 * This is the template that displays the "Furusato" page.
 *
 * @package Farmers
 * @since 1.0.0
 */

get_header(); 
?>

    <main>

        <?php
        // ループ開始
        while ( have_posts() ) :
            the_post();
        ?>
        
        <section class="relative h-[40vh] bg-cover bg-center" style="background-image: url('https://placehold.co/1600x800/65a30d/ffffff?text=ふるさと納税イメージ');">
            <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center">
                <div class="text-center text-white p-4">
                    <h1 class="text-fluid-hero font-bold">
                        <?php the_title(); ?>
                    </h1>
                </div>
            </div>
        </section>

        <section class="py-16 bg-white">
            <div class="container mx-auto px-4 max-w-4xl">
                
                <div class="text-center mb-10">
                    <h2 class="text-fluid-h2 font-bold text-gray-800 mb-6">
                        食卓Farmの野菜を
                        <br class="sm:hidden">
                        ふるさと納税で
                    </h2>
                    <p class="text-lg text-gray-700 leading-relaxed max-w-2xl mx-auto">
                        食卓Farmがセレクトした一部の商品は、ふるさと納税の返礼品としてもお選びいただけます。
                        <br>
                        詳しくは、ふるさと納税サイト「さとふる」のページをご確認ください。
                    </p>
                </div>

                <div class="text-center mb-12">
                    <a href="https://www.satofull.jp/" target="_blank" rel="noopener noreferrer" class="inline-block px-10 py-4 bg-blue-600 text-white text-lg font-bold rounded-lg shadow-lg hover:bg-blue-700 transition-colors">
                        「さとふる」トップページはこちら
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-block ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                        </svg>
                    </a>
                </div>

                <div class="bg-white rounded-lg shadow-lg overflow-hidden border border-gray-200">
                    <div class="p-4 bg-gray-50 border-b border-gray-200">
                        <h3 class="text-lg font-bold text-gray-700">「さとふる」トップページ</h3>
                    </div>
                    
                    <div class="w-full h-[70vh] bg-gray-100">
                        <iframe src="https://www.satofull.jp/" class="w-full h-full border-0" title="さとふるトップページ">
                            <p class="p-4 text-gray-600">
                                お使いのブラウザでは、このコンテンツを直接表示できません。
                                <a href="https://www.satofull.jp/" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:underline">
                                    こちらから「さとふる」にアクセスしてください。
                                </a>
                            </p>
                        </iframe>
                    </div>

                    <div class="p-4 bg-gray-50 border-t border-gray-200">
                        <p class="text-sm text-gray-600">
                            ※うまく表示されない場合や操作がしづらい場合は、上の青いボタンから「さとふる」のサイトに直接アクセスしてご確認ください。
                        </p>
                    </div>
                </div>

            </div>
        </section>
        
        <?php
        endwhile; // ループ終了
        ?>

    </main>

<?php
get_footer(); 
?>