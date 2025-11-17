<?php
/**
 * Template Name: ご注文内容の確認
 *
 * This is the template that displays the "Checkout Confirmation" page.
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

            <div class="w-full max-w-3xl mx-auto mb-10">
                <ol class="flex items-center w-full text-sm font-medium text-center text-gray-500">
                    <li class="flex md:w-full items-center text-green-700 sm:after:content-[''] after:w-full after:h-1 after:border-b after:border-green-700 after:border-1 after:hidden sm:after:inline-block after:mx-6 xl:after:mx-10">
                        <span class="flex items-center after:content-['/'] sm:after:hidden after:mx-2 after:text-gray-300">
                            <svg class="w-4 h-4 sm:w-5 sm:h-5 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                            カート
                        </span>
                    </li>
                    <li class="flex md:w-full items-center text-green-700 sm:after:content-[''] after:w-full after:h-1 after:border-b after:border-green-700 after:border-1 after:hidden sm:after:inline-block after:mx-6 xl:after:mx-10">
                        <span class="flex items-center after:content-['/'] sm:after:hidden after:mx-2 after:text-gray-300">
                            <svg class="w-4 h-4 sm:w-5 sm:h-5 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                            情報入力
                        </span>
                    </li>
                    <li class="flex items-center text-green-700 font-bold">
                        <span class="mr-2">3</span>
                        確認・完了
                    </li>
                </ol>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                
                <div class="lg:col-span-2 bg-white rounded-lg shadow-lg p-6 sm:p-8">
                    
                    <p class="text-lg text-gray-700 mb-6">
                        ご注文内容に間違いがないかご確認ください。
                    </p>

                    <section class="border-b pb-6 mb-6">
                        <div class="flex justify-between items-center mb-4">
                            <h2 class="text-2xl font-bold text-gray-800">
                                ご連絡先
                            </h2>
                            <a href="<?php echo esc_url( home_url( '/checkout' ) ); ?>" class="text-sm text-green-700 hover:text-green-900 font-bold">修正する</a>
                        </div>
                        <p class="text-gray-700">user@example.com</p>
                    </section>

                    <section class="border-b pb-6 mb-6">
                        <div class="flex justify-between items-center mb-4">
                            <h2 class="text-2xl font-bold text-gray-800">
                                配送先住所
                            </h2>
                            <a href="<?php echo esc_url( home_url( '/checkout' ) ); ?>" class="text-sm text-green-700 hover:text-green-900 font-bold">修正する</a>
                        </div>
                        <div class="text-gray-700 leading-relaxed">
                            <p>山田 太郎 様</p>
                            <p>〒861-4115</p>
                            <p>熊本県熊本市南区刈草3丁目10-15</p>
                            <p>〇〇マンション 101号室</p>
                            <p>090-1234-5678</p>
                        </div>
                    </section>

                    <section>
                        <div class="flex justify-between items-center mb-4">
                            <h2 class="text-2xl font-bold text-gray-800">
                                お支払い方法
                            </h2>
                            <a href="<?php echo esc_url( home_url( '/checkout' ) ); ?>" class="text-sm text-green-700 hover:text-green-900 font-bold">修正する</a>
                        </div>
                        <div class="text-gray-700">
                            <p class="text-lg font-bold">クレジットカード</p>
                            <p>カード番号: **** **** **** 1234</p>
                            <p>有効期限: 12/28</p>
                        </div>
                    </section>
                </div>

                <div class="lg:col-span-1 h-fit">
                    <div class="bg-white rounded-lg shadow-lg p-6 sticky top-24">
                        <h2 class="text-2xl font-bold text-gray-800 mb-6">
                            ご注文概要
                        </h2>
                        
                        <div class="space-y-4 border-b pb-4 mb-4">
                            <div class="flex items-center space-x-3">
                                <img src="https://placehold.co/80x80/f87171/ffffff?text=トマト" alt="トマト" class="w-16 h-16 rounded-lg object-cover border">
                                <div>
                                    <p class="font-bold text-gray-800">朝採れ完熟トマト 800g</p>
                                    <p class="text-sm text-gray-600">数量: 1</p>
                                </div>
                                <p class="ml-auto font-bold text-gray-800">800円</p>
                            </div>
                            <div class="flex items-center space-x-3">
                                <img src="https://placehold.co/80x80/34d399/ffffff?text=きゅうり" alt="きゅうり" class="w-16 h-16 rounded-lg object-cover border">
                                <div>
                                    <p class="font-bold text-gray-800">高原きゅうり 1kg</p>
                                    <p class="text-sm text-gray-600">数量: 2</p>
                                </div>
                                <p class="ml-auto font-bold text-gray-800">1,200円</p>
                            </div>
                        </div>

                        <div class="space-y-4">
                            <div class="flex justify-between text-lg">
                                <span class="text-gray-600">商品合計</span>
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
                        
                        <a href="<?php echo esc_url( home_url( '/checkout-complete' ) ); ?>" class="mt-8 w-full inline-flex justify-center items-center px-8 py-4 bg-red-600 text-white text-lg font-bold rounded-lg shadow hover:bg-red-700 transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                            </svg>
                            ご注文を確定する
                        </a>

                        <div class="mt-4 text-center">
                            <a href="<?php echo esc_url( home_url( '/checkout' ) ); ?>" class="text-sm text-gray-600 hover:text-green-700">
                                &larr; 入力内容を修正する
                            </a>
                        </div>
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