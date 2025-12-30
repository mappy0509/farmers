<?php
/**
 * Template Name: ご注文完了
 *
 * This is the template that displays the "Checkout Complete" page.
 *
 * @package Farmers
 * @since 1.0.0
 */

get_header(); 
?>

    <main class="py-16 bg-white">
        <div class="container mx-auto px-4">

            <?php
            // ループ開始
            while ( have_posts() ) :
                the_post();
            ?>
            
            <div class="max-w-2xl mx-auto text-center bg-white p-8 sm:p-12 rounded-lg shadow-lg">
                
                <div class="w-20 h-20 bg-green-700 rounded-full p-4 flex items-center justify-center mx-auto mb-6">
                    <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                </div>

                <h1 class="text-fluid-h2 font-bold text-gray-800 mb-4">
                    ご注文ありがとうございました！
                </h1>
                <p class="text-lg text-gray-700 leading-relaxed mb-6">
                    ご注文が正常に完了しました。
                    <br>
                    ご注文内容の詳細は、ご登録いただいたメールアドレス
                    <br>
                    <span class="font-bold text-gray-900">user@example.com</span>
                    <br>
                    宛にお送りしましたので、ご確認ください。
                </p>
                <div class="bg-gray-50 rounded-lg p-4 mb-8">
                    <p class="text-gray-800 font-bold text-lg">ご注文番号: <span class="text-red-600">SFT-20251115-001</span></p>
                </div>

                <div class="bg-green-50 border-2 border-green-600 rounded-lg p-6 mb-8">
                    <h2 class="text-2xl font-bold text-green-800 mb-4">
                        お得な情報をLINEでGET！
                    </h2>
                    <p class="text-gray-700 mb-6">
                        LINE友達限定のクーポンや、新商品の先行販売情報をお届けします。
                        <br>
                        この機会にぜひご登録ください！
                    </p>
                    <!-- LINEリンク修正 -->
                    <a href="https://lin.ee/Ws6fScK" class="line-green text-white text-xl font-bold px-8 py-4 rounded-lg shadow-lg hover:shadow-xl transition-all inline-flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 mr-3" fill="currentColor" viewBox="0 0 24 24"><path d="M21.5,4.9C21.1,4 20.1,3.4 19,3.4H5.1c-1.1,0-2.1,0.6-2.5,1.5c-0.3,1.1-0.1,2.2,0.6,3.1l1,1.3c0,0,0,0,0,0 c0.1,0.1,0.1,0.2,0.1,0.3c0,0.1,0,0.2-0.1,0.3c0,0,0,0,0,0l-1,1.3c-0.7,0.9-0.9,2-0.6,3.1C2.9,16,3.9,16.6,5.1,16.6h13.8 c1.1,0,2.1,0.6,2.5,1.5c0.3-1.1,0.1-2.2-0.6-3.1l-1-1.3c0,0,0,0,0,0c-0.1-0.1-0.1-0.2-0.1-0.3c0-0.1,0-0.2,0.1-0.3c0,0,0,0,0,0 l1-1.3C21.6,7.1,21.8,6,21.5,4.9z M9.3,13.3H7.7V9.7h1.6V13.3z M12.5,13.3h-1.6V9.7h1.6V13.3z M15.7,13.3h-1.6V9.7h1.6V13.3z"/></svg>
                        LINE友達に追加する
                    </a>
                </div>

                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="inline-block px-8 py-3 bg-yellow-500 text-gray-800 font-bold rounded-lg shadow hover:bg-yellow-600 transition-colors">
                    トップページへ戻る
                </a>

            </div>

            <?php
            endwhile; // ループ終了
            ?>

        </div>
    </main>

<?php
get_footer(); 
?>