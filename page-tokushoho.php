<?php
/**
 * Template Name: 特商法に基づく表記
 *
 * This is the template that displays the "Legal" page.
 *
 * @package Farmers
 * @since 1.0.0
 */

get_header(); 
?>

    <main class="py-16 bg-white">
        <div class="container mx-auto px-4">

            <?php
            // Start the WordPress Loop
            while ( have_posts() ) :
                the_post();
            ?>
            
            <h1 class="text-fluid-h2 font-bold text-gray-800 text-center mb-6">
                <?php the_title(); ?>
            </h1>

            <nav class="text-sm text-gray-600 mb-10 flex justify-center" aria-label="Breadcrumb">
                <ol class="list-none p-0 inline-flex space-x-2">
                    <li class="flex items-center">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="hover:text-green-700">ホーム</a>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 mx-2 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" /></svg>
                    </li>
                    <li class="flex items-center text-gray-800 font-bold" aria-current="page">
                        <?php the_title(); ?>
                    </li>
                </ol>
            </nav>

            <div class="max-w-3xl mx-auto bg-white p-6 sm:p-10 rounded-lg shadow-lg">
                <div class="overflow-x-auto">
                    <dl class="divide-y divide-gray-200">
                        <div class="py-4 sm:grid sm:grid-cols-3 sm:gap-4">
                            <dt class="text-base font-bold text-gray-800">販売事業者名</dt>
                            <dd class="mt-1 text-base text-gray-700 sm:mt-0 sm:col-span-2">
                                食卓Farm（運営会社：栄興商事流通センター）
                            </dd>
                        </div>
                        <div class="py-4 sm:grid sm:grid-cols-3 sm:gap-4">
                            <dt class="text-base font-bold text-gray-800">運営統括責任者</dt>
                            <dd class="mt-1 text-base text-gray-700 sm:mt-0 sm:col-span-2">
                                山田 太郎
                            </dd>
                        </div>
                        
                        <div class="py-4 sm:grid sm:grid-cols-3 sm:gap-4">
                            <dt class="text-base font-bold text-gray-800">電話番号</dt>
                            <dd class="mt-1 text-base text-gray-700 sm:mt-0 sm:col-span-2">
                                090-1234-5678
                            </dd>
                        </div>
                        <div class="py-4 sm:grid sm:grid-cols-3 sm:gap-4">
                            <dt class="text-base font-bold text-gray-800">メールアドレス</dt>
                            <dd class="mt-1 text-base text-gray-700 sm:mt-0 sm:col-span-2">
                                info@example-farm.com
                            </dd>
                        </div>
                        <div class="py-4 sm:grid sm:grid-cols-3 sm:gap-4">
                            <dt class="text-base font-bold text-gray-800">販売URL</dt>
                            <dd class="mt-1 text-base text-gray-700 sm:mt-0 sm:col-span-2">
                                (このサイトのURLが入ります)
                            </dd>
                        </div>
                        <div class="py-4 sm:grid sm:grid-cols-3 sm:gap-4">
                            <dt class="text-base font-bold text-gray-800">商品代金以外の必要料金</dt>
                            <dd class="mt-1 text-base text-gray-700 sm:mt-0 sm:col-span-2">
                                ・送料（地域により異なります。ご注文概要ページでご確認ください）<br>
                                ・銀行振込手数料（銀行振込の場合）
                            </dd>
                        </div>
                        <div class="py-4 sm:grid sm:grid-cols-3 sm:gap-4">
                            <dt class="text-base font-bold text-gray-800">販売価格</dt>
                            <dd class="mt-1 text-base text-gray-700 sm:mt-0 sm:col-span-2">
                                各商品ページに記載の金額（税込）
                            </dd>
                        </div>
                        <div class="py-4 sm:grid sm:grid-cols-3 sm:gap-4">
                            <dt class="text-base font-bold text-gray-800">お支払い方法</dt>
                            <dd class="mt-1 text-base text-gray-700 sm:mt-0 sm:col-span-2">
                                ・クレジットカード<br>
                                ・銀行振込
                            </dd>
                        </div>
                        <div class="py-4 sm:grid sm:grid-cols-3 sm:gap-4">
                            <dt class="text-base font-bold text-gray-800">商品の引渡し時期</dt>
                            <dd class="mt-1 text-base text-gray-700 sm:mt-0 sm:col-span-2">
                                ご注文（銀行振込の場合はご入金確認後）から通常1〜7営業日以内に発送いたします。
                                発送時期が異なる商品（予約商品など）については、各商品ページに記載します。
                            </dd>
                        </div>
                        <div class="py-4 sm:grid sm:grid-cols-3 sm:gap-4">
                            <dt class="text-base font-bold text-gray-800">返品・交換について</dt>
                            <dd class="mt-1 text-base text-gray-700 sm:mt-0 sm:col-span-2">
                                商品の特性上（生鮮食品のため）、お客様都合による返品・交換は原則としてお受けできません。
                                <br><br>
                                商品の品質管理には万全を期しておりますが、万が一、お届けした商品に破損や腐敗、商品の間違いがあった場合は、商品到着後2日以内にメールまたはお電話にてご連絡ください。
                                状況を確認の上、速やかに代替品の手配または返金にて対応させていただきます。
                            </dd>
                        </div>
                    </dl>
                </div>
            </div>
            
            <?php
            endwhile; // End of the loop.
            ?>

        </div>
    </main>

<?php
get_footer(); 
?>