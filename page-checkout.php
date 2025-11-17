<?php
/**
 * Template Name: ご注文手続き
 *
 * This is the template that displays the "Checkout" page.
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
                    <li class="flex md:w-full items-center text-green-700 font-bold sm:after:content-[''] after:w-full after:h-1 after:border-b after:border-gray-300 after:border-1 after:hidden sm:after:inline-block after:mx-6 xl:after:mx-10">
                        <span class="flex items-center after:content-['/'] sm:after:hidden after:mx-2 after:text-gray-300">
                            <span class="mr-2">2</span>
                            情報入力
                        </span>
                    </li>
                    <li class="flex items-center">
                        <span class="mr-2">3</span>
                        確認・完了
                    </li>
                </ol>
            </div>

            <form action="<?php echo esc_url( home_url( '/checkout-confirm' ) ); ?>" method="POST">
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                    
                    <div class="lg:col-span-2 bg-white rounded-lg shadow-lg p-6 sm:p-8">
                        
                        <section>
                            <h2 class="text-2xl font-bold text-gray-800 mb-4">
                                1. ご連絡先
                            </h2>
                            <div class="space-y-4">
                                <div>
                                    <label for="email" class="block text-sm font-bold text-gray-700 mb-1">メールアドレス</label>
                                    <input type="email" id="email" name="email" required
                                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500"
                                        placeholder="user@example.com">
                                </div>
                            </div>
                        </section>

                        <section class="mt-8">
                            <h2 class="text-2xl font-bold text-gray-800 mb-4">
                                2. 配送先住所
                            </h2>
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div>
                                    <label for="last_name" class="block text-sm font-bold text-gray-700 mb-1">姓</label>
                                    <input type="text" id="last_name" name="last_name" required
                                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500"
                                        placeholder="山田">
                                </div>
                                <div>
                                    <label for="first_name" class="block text-sm font-bold text-gray-700 mb-1">名</label>
                                    <input type="text" id="first_name" name="first_name" required
                                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500"
                                        placeholder="太郎">
                                </div>
                                <div class="sm:col-span-2">
                                    <label for="zipcode" class="block text-sm font-bold text-gray-700 mb-1">郵便番号</label>
                                    <input type="text" id="zipcode" name="zipcode" required
                                        class="w-full sm:w-1/2 px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500"
                                        placeholder="861-4115">
                                </div>
                                <div>
                                    <label for="prefecture" class="block text-sm font-bold text-gray-700 mb-1">都道府県</label>
                                    <select id="prefecture" name="prefecture" required
                                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 bg-white">
                                        <option value="">選択してください</option>
                                        <option value="熊本県">熊本県</option>
                                        </select>
                                </div>
                                <div>
                                    <label for="city" class="block text-sm font-bold text-gray-700 mb-1">市区町村</label>
                                    <input type="text" id="city" name="city" required
                                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500"
                                        placeholder="熊本市南区">
                                </div>
                                <div class="sm:col-span-2">
                                    <label for="address1" class="block text-sm font-bold text-gray-700 mb-1">町名・番地</label>
                                    <input type="text" id="address1" name="address1" required
                                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500"
                                        placeholder="刈草3丁目10-15">
                                </div>
                                <div class="sm:col-span-2">
                                    <label for="address2" class="block text-sm font-bold text-gray-700 mb-1">建物名・部屋番号 (任意)</label>
                                    <input type="text" id="address2" name="address2"
                                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500"
                                        placeholder="〇〇マンション 101号室">
                                </div>
                                <div class="sm:col-span-2">
                                    <label for="phone" class="block text-sm font-bold text-gray-700 mb-1">電話番号</label>
                                    <input type="tel" id="phone" name="phone" required
                                        class="w-full sm:w-1/2 px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500"
                                        placeholder="090-1234-5678">
                                </div>
                            </div>
                        </section>

                        <section class="mt-8">
                            <h2 class="text-2xl font-bold text-gray-800 mb-4">
                                3. お支払い方法
                            </h2>
                            <div class="space-y-4">
                                <div class="border rounded-lg p-4 has-[:checked]:bg-green-50 has-[:checked]:border-green-500">
                                    <input type="radio" id="payment-card" name="payment_method" value="card" class="mr-2" checked>
                                    <label for="payment-card" class="text-lg font-bold text-gray-800">クレジットカード</label>
                                    <div class="mt-4 pl-6 space-y-3">
                                        <input type="text" placeholder="カード番号" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
                                        <div class="flex gap-3">
                                            <input type="text" placeholder="有効期限 (MM/YY)" class="w-1/2 px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
                                            <input type="text" placeholder="CVC" class="w-1/2 px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
                                        </div>
                                    </div>
                                </div>
                                <div class="border rounded-lg p-4 has-[:checked]:bg-green-50 has-[:checked]:border-green-500">
                                    <input type="radio" id="payment-bank" name="payment_method" value="bank" class="mr-2">
                                    <label for="payment-bank" class="text-lg font-bold text-gray-800">銀行振込</label>
                                    <p class="mt-2 pl-6 text-sm text-gray-600">
                                        ご注文完了後、振込先口座情報をメールでお送りします。ご入金確認後の発送となります。
                                    </p>
                                </div>
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
                            
                            <button type="submit" class="mt-8 w-full inline-flex justify-center items-center px-8 py-4 bg-green-700 text-white text-lg font-bold rounded-lg shadow hover:bg-green-800 transition-colors">
                                ご注文内容の確認へ
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                  <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                </svg>
                            </button>

                            <div class="mt-4 text-center">
                                <a href="<?php echo esc_url( home_url( '/cart' ) ); ?>" class="text-sm text-gray-600 hover:text-green-700">
                                    &larr; カートに戻る
                                </a>
                            </div>
                        </div>
                    </div>
                </div> </form>

            <?php
            endwhile; // ループ終了
            ?>

        </div>
    </main>

<?php
get_footer(); 
?>