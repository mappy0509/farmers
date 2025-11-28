<?php
/**
 * The template for displaying product archives.
 *
 * @package Farmers
 * @since 1.0.0
 */

get_header(); 
?>

    <main class="py-16 bg-white">
        <div class="container mx-auto px-4">
            
            <h1 class="text-fluid-h2 font-bold text-gray-800 text-center mb-10">
                <?php post_type_archive_title(); ?>
            </h1>

            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                
                <aside class="md:col-span-1 bg-gray-50 p-6 rounded-lg shadow-sm h-fit">
                    <nav>
                        <h2 class="text-xl font-bold text-gray-800 mb-4">カテゴリー</h2>
                        <ul class="space-y-2">
                            <li><a href="#" class="block text-gray-600 hover:text-green-700">すべての商品</a></li>
                            <li><a href="#" class="block text-gray-600 hover:text-green-700">野菜</a></li>
                            <li><a href="#" class="block text-gray-600 hover:text-green-700">果物</a></li>
                            <li><a href="#" class="block text-gray-600 hover:text-green-700">お米・穀物</a></li>
                            <li><a href="#" class="block text-gray-600 hover:text-green-700">詰め合わせセット</a></li>
                        </ul>
                    </nav>

                    <nav class="mt-8">
                        <h2 class="text-xl font-bold text-gray-800 mb-4">生産者で探す</h2>
                        <ul class="space-y-2">
                            <li><a href="#" class="block text-gray-600 hover:text-green-700">〇〇農園 (長野県)</a></li>
                            <li><a href="#" class="block text-gray-600 hover:text-green-700">ベジファーム (群馬県)</a></li>
                            <li><a href="#" class="block text-gray-600 hover:text-green-700">コーン農家 (千葉県)</a></li>
                        </ul>
                    </nav>
                </aside>

                <div class="md:col-span-3">
                    
                    <div class="flex justify-between items-center mb-6">
                        <p class="text-gray-600">
                            <?php
                            // 見つかった商品数を表示
                            global $wp_query;
                            echo esc_html( $wp_query->found_posts ); 
                            ?>件の商品が見つかりました
                        </p>
                        <select class="border border-gray-300 rounded-lg p-2 text-sm text-gray-700 focus:outline-none focus:ring-2 focus:ring-green-500">
                            <option value="new">新着順</option>
                            <option value="price_asc">価格が安い順</option>
                            <option value="price_desc">価格が高い順</option>
                        </select>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

                        <?php if ( have_posts() ) : ?>
                            <?php
                            // ループ開始
                            while ( have_posts() ) :
                                the_post();
                                
                                // WooCommerceの商品データを取得
                                global $product;
                                // ループ内で $product が正しくセットされているか確認し、なければ取得
                                if ( ! is_a( $product, 'WC_Product' ) ) {
                                    $product = wc_get_product( get_the_ID() );
                                }
                            ?>
                        
                            <div id="product-<?php the_ID(); ?>" <?php post_class( 'bg-white rounded-lg shadow-lg overflow-hidden flex flex-col text-left' ); ?>>
                                <div class="relative">
                                    <?php if ( has_post_thumbnail() ) : ?>
                                        <img src="<?php the_post_thumbnail_url( 'medium_large' ); ?>" alt="<?php the_title_attribute(); ?>" class="w-full h-48 object-cover">
                                    <?php else : ?>
                                        <img src="<?php echo wc_placeholder_img_src(); ?>" alt="No Image" class="w-full h-48 object-cover">
                                    <?php endif; ?>
                                    
                                    <a href="#" class="absolute bottom-3 left-3 flex items-center bg-white/90 backdrop-blur-sm rounded-full p-1 pr-3 shadow-md group transition-transform hover:scale-105">
                                        <img src="https://placehold.co/40/71717a/ffffff?text=農" alt="生産者" class="h-6 w-6 rounded-full border border-gray-200">
                                        <span class="text-gray-700 text-sm font-bold ml-2 group-hover:text-green-700">〇〇農園</span>
                                    </a>
                                    
                                    <button class="absolute top-3 right-3 bg-white/80 p-2 rounded-full shadow hover:bg-white text-gray-600 hover:text-red-500 transition-colors" aria-label="お気に入りに追加">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                          <path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 016.364 0L12 7.636l1.318-1.318a4.5 4.5 0 016.364 6.364L12 20.364l-7.682-7.682a4.5 4.5 0 010-6.364z" />
                                        </svg>
                                    </button>
                                </div>
                                <div class="p-4 flex flex-col flex-grow">
                                    <span class="text-xs text-gray-500 mb-1">注文から1-7日で発送</span>
                                    
                                    <h3 class="text-fluid-h3 font-bold mb-2 text-gray-800 hover:text-green-700 transition-colors">
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </h3>
                                    
                                    <div class="text-sm text-gray-600 mb-3 flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.828 0l-4.242-4.243a8 8 0 1111.314 0z" /><path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
                                        長野県 飯田市
                                    </div>
                                    
                                    <div class="mt-auto flex justify-end items-baseline">
                                        <?php if ( $product ) : ?>
                                            <div class="text-2xl font-bold text-red-600 price-wrapper">
                                                <?php echo $product->get_price_html(); ?>
                                            </div>
                                            <span class="text-sm text-gray-600 ml-1">(税込)</span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <?php
                            endwhile; // ループ終了
                            ?>
                        
                        <?php else : ?>

                            <p class="text-lg text-gray-700 col-span-full text-center py-10">
                                <?php esc_html_e( '現在、商品は準備中です。', 'farmers' ); ?>
                            </p>
                        
                        <?php endif; ?>

                    </div> <nav class="flex justify-center mt-12">
                         <?php
                        the_posts_pagination(
                            array(
                                'prev_text' => '&laquo;',
                                'next_text' => '&raquo;',
                                'screen_reader_text' => ' ', 
                                'before_page_number' => '<span class="px-4 py-2 border rounded-lg bg-white text-gray-600 hover:bg-gray-100">',
                                'after_page_number'  => '</span>',
                                'current_item_active_text_color' => '#ffffff', 
                                'current_item_active_background_color' => '#166534', 
                                'current_item_attributes' => 'class="px-4 py-2 border rounded-lg bg-green-700 text-white font-bold"', 
                            )
                        );
                        ?>
                    </nav>

                </div> </div> </div>
    </main>

<?php
get_footer(); 
?>