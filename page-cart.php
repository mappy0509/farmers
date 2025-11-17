<?php
/**
 * Template Name: ショッピングカート
 *
 * This is the template that displays the "Cart" page.
 *
 * @package Farmers
 * @since 1.0.0
 */

get_header(); 
?>

    <main class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">

            <?php
            // ループ開始
            while ( have_posts() ) :
                the_post();
            ?>
            
            <h1 class="text-fluid-h2 font-bold text-gray-800 text-center mb-10">
                <?php the_title(); ?>
            </h1>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                
                <div class="lg:col-span-2 bg-white rounded-lg shadow-lg p-6">
                    <h2 class="text-2xl font-bold text-gray-800 mb-6">
                        ご注文内容
                    </h2>

                    <div class="hidden sm:grid grid-cols-6 gap-4 border-b pb-4 mb-4 text-sm font-bold text-gray-600">
                        <div class="col-span-3">商品</div>
                        <div class="text-right">価格</div>
                        <div class="text-center">数量</div>
                        <div class="text-right">小計</div>
                    </div>

                    <div class="grid grid-cols-6 gap-4 items-center border-b py-4">
                        <div class="col-span-6 sm:col-span-3 flex items-center space-x-4">
                            <img src="https://placehold.co/100x100/f87171/ffffff?text=トマト" alt="朝採れ完熟トマト" class="w-20 h-20 rounded-lg object-cover">
                            <div>
                                <h3 class="text-base font-bold text-gray-800">
                                    <a href="<?php echo esc_url( home_url( '/products/product-slug' ) ); // 仮 ?>" class="hover:text-green-700">朝採れ完熟トマト 800g</a>
                                </h3>
                                <button class="text-xs text-red-600 hover:text-red-800">削除</button>
                            </div>
                        </div>
                        <div class="col-span-2 sm:col-span-1 text-right">
                            <span class="sm:hidden text-xs text-gray-500">価格: </span>
                            <span class="font-bold text-gray-800">800円</span>
                        </div>
                        <div class="col-span-2 sm:col-span-1 text-center">
                            <label for="qty-1" class="sm:hidden text-xs text-gray-500">数量: </label>
                            <select id="qty-1" class="border border-gray-300 rounded-lg p-2 text-sm text-gray-700 focus:outline-none focus:ring-2 focus:ring-green-500">
                                <option value="1" selected>1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>
                        <div class="col-span-2 sm:col-span-1 text-right">
                            <span class="sm:hidden text-xs text-gray-500">小計: </span>
                            <span class="font-bold text-xl text-red-600">800円</span>
                        </div>
                    </div>

                    <div class="grid grid-cols-6 gap-4 items-center border-b py-4">
                        <div class="col-span-6 sm:col-span-3 flex items-center space-x-4">
                            <img src="https://placehold.co/100x100/34d399/ffffff?text=きゅうり" alt="高原きゅうり" class="w-20 h-20 rounded-lg object-cover">
                            <div>
                                <h3 class="text-base font-bold text-gray-800">
                                    <a href="<?php echo esc_url( home_url( '/products/product-slug-2' ) ); // 仮 ?>" class="hover:text-green-700">みずみずし高原きゅうり 1kg</a>
                                </h3>
                                <button class="text-xs text-red-600 hover:text-red-800">削除</button>
                            </div>
                        </div>
                        <div class="col-span-2 sm:col-span-1 text-right">
                            <span class="sm:hidden text-xs text-gray-500">価格: </span>
                            <span class="font-bold text-gray-800">600円</span>
                        </div>
                        <div class="col-span-2 sm:col-span-1 text-center">
                            <label for="qty-2" class="sm:hidden text-xs text-gray-500">数量: </label>
                            <select id="qty-2" class="border border-gray-300 rounded-lg p-2 text-sm text-gray-700 focus:outline-none focus:ring-2 focus:ring-green-500">
                                <option value="1">1</option>
                                <option value="2" selected>2</option>
                                <option value="3">3</option>
                            </select>
                        </div>
                        <div class="col-span-2 sm:col-span-1 text-right">
                            <span class="sm:hidden text-xs text-gray-500">小計: </span>
                            <span class="font-bold text-xl text-red-600">1,200円</span>
                        </div>
                    </div>
                    
                    <div class="mt-6">
                        <a href="<?php echo esc_url( home_url( '/products' ) ); ?>" class="text-green-700 hover:text-green-900 font-bold">
                            &larr; 買い物を続ける
                        </a>
                    </div>

                </div>

                <div class="lg:col-span-1 h-fit">
                    <div class="bg-white rounded-lg shadow-lg p-6">
                        <h2 class="text-2xl font-bold text-gray-800 mb-6">
                            ご注文概要
                        </h2>
                        <div class="space-y-4">
                            <div class="flex justify-between text-lg">
                                <span class="text-gray-600">商品合計 (2点)</span>
                                <span class="font-bold text-gray-800">2,000円</span>
                            </div>
                            <div class="flex justify-between text-lg">
                                <span class="text-gray-600">送料</span>
                                <span class="font-bold text-gray-800">500円</span>
                            </div>
                            <div class="flex justify-between text-2xl font-bold text-gray-800 border-t pt-4 mt-4">
                                <span>合計金額</span>
                                <span class="text-red-600">2,500円</span>
                            </div>
                            <span class="text-sm text-gray-500 block text-right">(税込)</span>
                        </div>
                        
                        <a href="<?php echo esc_url( home_url( '/checkout' ) ); ?>" class="mt-8 w-full inline-flex justify-center items-center px-8 py-4 bg-green-700 text-white text-lg font-bold rounded-lg shadow hover:bg-green-800 transition-colors">
                            レジに進む
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                            </svg>
                        </a>
                    </div>
                </div>

            </div> <?php
            endwhile; // ループ終了
            ?>

        </div>
    </main>

<?php
get_footer(); 
?>