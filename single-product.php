<?php
/**
 * The template for displaying single products
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
                
                // WooCommerceの商品オブジェクトを取得
                global $product;
                if ( ! is_a( $product, 'WC_Product' ) ) {
                    $product = wc_get_product( get_the_ID() );
                }
            ?>

            <nav class="text-sm text-gray-600 mb-6" aria-label="Breadcrumb">
                <ol class="list-none p-0 inline-flex space-x-2">
                    <li class="flex items-center">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="hover:text-green-700">ホーム</a>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 mx-2 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" /></svg>
                    </li>
                    <li class="flex items-center">
                        <a href="<?php echo esc_url( get_post_type_archive_link( 'product' ) ); ?>" class="hover:text-green-700">商品一覧</a>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 mx-2 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" /></svg>
                    </li>
                    <li class="flex items-center text-gray-800 font-bold" aria-current="page">
                        <?php the_title(); ?>
                    </li>
                </ol>
            </nav>

            <section class="grid grid-cols-1 md:grid-cols-2 gap-8">
                
                <div>
                    <div class="mb-4 rounded-lg overflow-hidden shadow-lg">
                        <?php 
                        $main_image_url = '';
                        if ( has_post_thumbnail() ) {
                            $main_image_url = get_the_post_thumbnail_url( get_the_ID(), 'full' );
                            echo '<img id="main-product-image" src="' . esc_url( $main_image_url ) . '" alt="' . esc_attr( get_the_title() ) . '" class="w-full h-auto object-cover">';
                        } else {
                            $main_image_url = wc_placeholder_img_src();
                            echo '<img id="main-product-image" src="' . esc_url( $main_image_url ) . '" alt="No Image" class="w-full h-auto object-cover">';
                        }
                        ?>
                    </div>
                    
                    <div class="grid grid-cols-4 gap-2">
                        <?php
                        // メイン画像を1枚目として表示
                        ?>
                        <button class="border-2 border-green-700 rounded overflow-hidden">
                            <img src="<?php echo esc_url( $main_image_url ); ?>" alt="メイン画像" class="w-full h-auto object-cover">
                        </button>

                        <?php
                        // ギャラリー画像の取得
                        $attachment_ids = $product->get_gallery_image_ids();
                        if ( $attachment_ids && has_post_thumbnail() ) {
                            foreach ( $attachment_ids as $attachment_id ) {
                                $image_url = wp_get_attachment_image_url( $attachment_id, 'thumbnail' ); // 小さいサイズ
                                $full_url  = wp_get_attachment_image_url( $attachment_id, 'full' );      // 大きいサイズ（切り替え用）
                                ?>
                                <button class="border-2 border-transparent rounded overflow-hidden hover:border-green-700" data-full-src="<?php echo esc_url( $full_url ); ?>">
                                    <img src="<?php echo esc_url( $image_url ); ?>" alt="ギャラリー画像" class="w-full h-auto object-cover">
                                </button>
                                <?php
                            }
                        }
                        ?>
                    </div>
                </div>

                <div class="flex flex-col">
                    <a href="#" class="inline-flex items-center mb-3 group">
                        <img src="https://placehold.co/40/71717a/ffffff?text=農" alt="生産者" class="h-8 w-8 rounded-full border border-gray-200">
                        <span class="text-gray-700 text-base font-bold ml-2 group-hover:text-green-700">〇〇農園 (長野県 飯田市)</span>
                    </a>
                    
                    <h1 class="text-fluid-h2 font-bold text-gray-800 mb-3">
                        <?php the_title(); ?>
                    </h1>
                    
                    <div class="text-gray-600 text-lg mb-4">
                        <?php echo apply_filters( 'woocommerce_short_description', $post->post_excerpt ); ?>
                    </div>

                    <div class="mb-5 flex items-baseline">
                        <span class="text-4xl font-bold text-red-600">
                            <?php echo $product->get_price(); ?>
                        </span>
                        <span class="text-lg text-gray-700 ml-1">円 (税込)</span>
                    </div>

                    <?php if ( $product->is_type( 'simple' ) && $product->is_purchasable() && $product->is_in_stock() ) : ?>
                        
                        <form class="cart" action="<?php echo esc_url( apply_filters( 'woocommerce_add_to_cart_form_action', $product->get_permalink() ) ); ?>" method="post" enctype='multipart/form-data'>
                            
                            <div class="flex items-center mb-6">
                                <label for="quantity_<?php echo $product->get_id(); ?>" class="text-gray-700 font-bold mr-3">数量:</label>
                                <select id="quantity_<?php echo $product->get_id(); ?>" name="quantity" class="border border-gray-300 rounded-lg p-2 text-base text-gray-700 focus:outline-none focus:ring-2 focus:ring-green-500">
                                    <?php
                                    // 在庫数や設定に合わせて上限を変更可能ですが、ここでは1〜10で固定
                                    for ( $i = 1; $i <= 10; $i++ ) {
                                        echo '<option value="' . $i . '">' . $i . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>

                            <div class="flex flex-col sm:flex-row gap-3">
                                <button type="submit" name="add-to-cart" value="<?php echo esc_attr( $product->get_id() ); ?>" class="flex-1 inline-flex justify-center items-center px-8 py-4 bg-yellow-500 text-gray-800 text-lg font-bold rounded-lg shadow hover:bg-yellow-600 transition-colors border-0 cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                      <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                                    </svg>
                                    カートに入れる
                                </button>
                                
                                <button type="button" class="px-4 py-4 bg-gray-100 text-gray-600 rounded-lg shadow hover:bg-gray-200 hover:text-red-500 transition-colors" aria-label="お気に入りに追加">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                      <path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 016.364 0L12 7.636l1.318-1.318a4.5 4.5 0 016.364 6.364L12 20.364l-7.682-7.682a4.5 4.5 0 010-6.364z" />
                                    </svg>
                                </button>
                            </div>

                        </form>

                    <?php else : ?>
                        
                        <div class="mb-6">
                            <?php 
                            // WooCommerce標準のカートボタンを表示 (デザインは崩れる可能性がありますが機能優先)
                            woocommerce_template_single_add_to_cart(); 
                            ?>
                        </div>

                    <?php endif; ?>


                    <div class="mt-8 pt-6 border-t border-gray-200 text-sm text-gray-600 space-y-2">
                        <p><span class="font-bold text-gray-800 w-24 inline-block">発送目安:</span> 注文から1-7日で発送</p>
                        <p><span class="font-bold text-gray-800 w-24 inline-block">産地:</span> 長野県 飯田市</p>
                        <p><span class="font-bold text-gray-800 w-24 inline-block">SKU:</span> <?php echo ( $sku = $product->get_sku() ) ? $sku : 'N/A'; ?></p>
                    </div>

                </div>
            </section>

            <section class="mt-16 pt-12 border-t border-gray-200">
                <h2 class="text-fluid-h2 font-bold text-gray-800 mb-6 text-center">商品のこだわり</h2>
                <div class="max-w-3xl mx-auto prose lg:prose-lg text-gray-700">
                    <?php the_content(); ?>
                </div>
            </section>

            <section class="mt-16 pt-12 border-t border-gray-200 bg-gray-50 -mx-4 px-4 py-12 sm:rounded-lg">
                <h2 class="text-fluid-h2 font-bold text-gray-800 mb-6 text-center">生産者について</h2>
                <div class="max-w-3xl mx-auto flex flex-col sm:flex-row items-center bg-white p-6 rounded-lg shadow-lg">
                    <img src="https://placehold.co/150/71717a/ffffff?text=生産者の顔" alt="生産者" class="h-32 w-32 rounded-full border-4 border-white shadow-md mb-4 sm:mb-0 sm:mr-6">
                    <div>
                        <h3 class="text-fluid-h3 font-bold text-gray-800 mb-2">〇〇農園</h3>
                        <p class="text-gray-600 mb-3">長野県 飯田市</p>
                        <p class="text-gray-700">
                            「子供たちに安心して食べさせられる野菜を」という想いから、3代続く農家です。南アルプスの麓、寒暖差の激しい気候を活かし、野菜本来の甘みを引き出す栽培を心がけています。
                        </p>
                    </div>
                </div>
            </section>

            <section class="mt-16 pt-12 border-t border-gray-200">
                <h2 class="text-fluid-h2 font-bold text-gray-800 mb-10 text-center">
                    おすすめ商品
                </h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    
                    <?php
                    // 関連商品を4つ取得 (表示はCSSグリッドで調整)
                    $related_ids = wc_get_related_products( $product->get_id(), 3 );

                    if ( $related_ids ) :
                        $args = array(
                            'post_type'      => 'product',
                            'post__in'       => $related_ids,
                            'posts_per_page' => 3,
                        );
                        $related_query = new WP_Query( $args );

                        while ( $related_query->have_posts() ) :
                            $related_query->the_post();
                            global $product; // グローバル変数を上書き
                            if ( ! is_a( $product, 'WC_Product' ) ) {
                                $product = wc_get_product( get_the_ID() );
                            }
                    ?>
                    
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden flex flex-col text-left">
                        <div class="relative">
                            <a href="<?php the_permalink(); ?>">
                                <?php if ( has_post_thumbnail() ) : ?>
                                    <img src="<?php the_post_thumbnail_url( 'medium_large' ); ?>" alt="<?php the_title_attribute(); ?>" class="w-full h-48 object-cover">
                                <?php else : ?>
                                    <img src="<?php echo wc_placeholder_img_src(); ?>" alt="No Image" class="w-full h-48 object-cover">
                                <?php endif; ?>
                            </a>
                            <a href="#" class="absolute bottom-3 left-3 flex items-center bg-white/90 backdrop-blur-sm rounded-full p-1 pr-3 shadow-md group transition-transform hover:scale-105">
                                <img src="https://placehold.co/40/71717a/ffffff?text=農" alt="生産者" class="h-6 w-6 rounded-full border border-gray-200">
                                <span class="text-gray-700 text-sm font-bold ml-2 group-hover:text-green-700">ベジファーム</span>
                            </a>
                        </div>
                        <div class="p-4 flex flex-col flex-grow">
                            <span class="text-xs text-gray-500 mb-1">注文から1-3日で発送</span>
                            <h3 class="text-fluid-h3 font-bold mb-2 text-gray-800 hover:text-green-700 transition-colors">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h3>
                            <div class="text-sm text-gray-600 mb-3 flex items-center">
                                長野県
                            </div>
                            <div class="mt-auto flex justify-end items-baseline">
                                <span class="text-2xl font-bold text-red-600"><?php echo $product->get_price(); ?></span>
                                <span class="text-sm text-gray-600 ml-1">円 (税込)</span>
                            </div>
                        </div>
                    </div>

                    <?php
                        endwhile;
                        wp_reset_postdata(); // クエリのリセット
                    endif;
                    ?>

                </div>
            </section>
            
            <?php
            endwhile; // ループ終了
            ?>

        </div>
    </main>

<?php
get_footer(); 
?>