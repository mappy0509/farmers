<?php
/**
 * The template for displaying the front page (home page).
 *
 * @package Farmers
 * @since 1.0.0
 */

get_header(); 
?>

    <main>
        <section class="relative h-[60vh] bg-cover bg-center" style="background-image: url('https://placehold.co/1600x900/a3e635/f0fdf4?text=新鮮な野菜のイメージ');">
            </section>

        <section id="products" class="py-16 bg-white">
            <div class="container mx-auto px-4 text-center">
                <h2 class="text-fluid-h2 font-bold text-gray-800 mb-4">
                    今が旬の商品
                </h2>
                <p class="text-gray-600 mb-10">
                    バイヤーこだわりのセレクト野菜をご紹介します。
                </p>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden flex flex-col text-left">
                        <div class="relative">
                            <img src="https://placehold.co/400x300/f87171/ffffff?text=朝採れトマト" alt="商品画像" class="w-full h-48 object-cover">
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
                                <a href="<?php echo esc_url( home_url( '/products/asa-dore-tomato' ) ); // 仮のスラッグ ?>">朝採れ完熟トマト 800g</a>
                            </h3>
                            <div class="text-sm text-gray-600 mb-3 flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                  <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.828 0l-4.242-4.243a8 8 0 1111.314 0z" />
                                  <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                長野県 飯田市
                            </div>
                            <div class="mt-auto flex justify-end items-baseline">
                                <span class="text-2xl font-bold text-red-600">800</span>
                                <span class="text-sm text-gray-600 ml-1">円 (税込)</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden flex flex-col text-left">
                        <div class="relative">
                            <img src="https://placehold.co/400x300/34d399/ffffff?text=高原きゅうり" alt="商品画像" class="w-full h-48 object-cover">
                            <a href="#" class="absolute bottom-3 left-3 flex items-center bg-white/90 backdrop-blur-sm rounded-full p-1 pr-3 shadow-md group transition-transform hover:scale-105">
                                <img src="https://placehold.co/40/71717a/ffffff?text=農" alt="生産者" class="h-6 w-6 rounded-full border border-gray-200">
                                <span class="text-gray-700 text-sm font-bold ml-2 group-hover:text-green-700">ベジファーム</span>
                            </a>
                            <button class="absolute top-3 right-3 bg-white/80 p-2 rounded-full shadow hover:bg-white text-gray-600 hover:text-red-500 transition-colors" aria-label="お気に入りに追加">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 016.364 0L12 7.636l1.318-1.318a4.5 4.5 0 016.364 6.364L12 20.364l-7.682-7.682a4.5 4.5 0 010-6.364z" /></svg>
                            </button>
                        </div>
                        <div class="p-4 flex flex-col flex-grow">
                            <span class="text-xs text-gray-500 mb-1">注文から1-3日で発送</span>
                            <h3 class="text-fluid-h3 font-bold mb-2 text-gray-800 hover:text-green-700 transition-colors">
                                <a href="<?php echo esc_url( home_url( '/products/kougen-kyuri' ) ); // 仮のスラッグ ?>">みずみずし高原きゅうり 1kg</a>
                            </h3>
                            <div class="text-sm text-gray-600 mb-3 flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.828 0l-4.242-4.243a8 8 0 1111.314 0z" /><path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
                                群馬県 嬬恋村
                            </div>
                            <div class="mt-auto flex justify-end items-baseline">
                                <span class="text-2xl font-bold text-red-600">600</span>
                                <span class="text-sm text-gray-600 ml-1">円 (税込)</span>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow-lg overflow-hidden flex flex-col text-left">
                        <div class="relative">
                            <img src="https://placehold.co/400x300/fbbf24/ffffff?text=採れたてトウモロコシ" alt="商品画像" class="w-full h-48 object-cover">
                            <a href="#" class="absolute bottom-3 left-3 flex items-center bg-white/90 backdrop-blur-sm rounded-full p-1 pr-3 shadow-md group transition-transform hover:scale-105">
                                <img src="https://placehold.co/40/71717a/ffffff?text=農" alt="生産者" class="h-6 w-6 rounded-full border border-gray-200">
                                <span class="text-gray-700 text-sm font-bold ml-2 group-hover:text-green-700">コーン農家</span>
                            </a>
                            <button class="absolute top-3 right-3 bg-white/80 p-2 rounded-full shadow hover:bg-white text-gray-600 hover:text-red-500 transition-colors" aria-label="お気に入りに追加">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 016.364 0L12 7.636l1.318-1.318a4.5 4.5 0 016.364 6.364L12 20.364l-7.682-7.682a4.5 4.5 0 010-6.364z" /></svg>
                            </button>
                        </div>
                        <div class="p-4 flex flex-col flex-grow">
                            <span class="text-xs text-gray-500 mb-1">【予約】12月発送開始</span>
                            <h3 class="text-fluid-h3 font-bold mb-2 text-gray-800 hover:text-green-700 transition-colors">
                                <a href="<?php echo esc_url( home_url( '/products/tomorokoshi' ) ); // 仮のスラッグ ?>">甘い！採れたてトウモロコシ 5本</a>
                            </h3>
                            <div class="text-sm text-gray-600 mb-3 flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.828 0l-4.242-4.243a8 8 0 1111.314 0z" /><path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
                                千葉県 柏市
                            </div>
                            <div class="mt-auto flex justify-end items-baseline">
                                <span class="text-2xl font-bold text-red-600">1,200</span>
                                <span class="text-sm text-gray-600 ml-1">円 (税込)</span>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="<?php echo esc_url( home_url( '/products' ) ); ?>" class="mt-10 inline-block px-8 py-3 bg-yellow-500 text-gray-800 font-bold rounded-lg shadow hover:bg-yellow-600 transition-colors">
                    ECショップで商品をもっと見る
                </a>
            </div>
        </section>

        <section id="blog" class="py-16 bg-gray-50">
            <div class="container mx-auto px-4 text-center">
                <h2 class="text-fluid-h2 font-bold text-gray-800 mb-10">
                    ブログ・お知らせ
                </h2>

                <div class="max-w-2xl mx-auto text-left space-y-4">
                    <a href="<?php echo esc_url( home_url( '/blog/fuyuyasai-set' ) ); // 仮のスラッグ ?>" class="block p-4 bg-white border rounded-lg shadow hover:shadow-md transition-shadow">
                        <span class="text-sm text-gray-500">2025.11.15</span>
                        <h3 class="text-lg font-bold text-gray-800">
                            冬野菜の詰め合わせセット販売開始しました！
                        </h3>
                    </a>
                    <a href="<?php echo esc_url( home_url( '/blog/interview-01' ) ); // 仮のスラッグ ?>" class="block p-4 bg-white border rounded-lg shadow hover:shadow-md transition-shadow">
                        <span class="text-sm text-gray-500">2025.11.10</span>
                        <h3 class="text-lg font-bold text-gray-800">
                            〇〇農家さんのインタビュー記事を掲載しました
                        </h3>
                    </a>
                    <a href="<?php echo esc_url( home_url( '/blog/site-open' ) ); // 仮のスラッグ ?>" class="block p-4 bg-white border rounded-lg shadow hover:shadow-md transition-shadow">
                        <span class="text-sm text-gray-500">2025.11.01</span>
                        <h3 class="text-lg font-bold text-gray-800">
                            ECサイトオープン記念キャンペーンのお知らせ
                        </h3>
                    </a>
                </div>
                <a href="<?php echo esc_url( home_url( '/blog' ) ); ?>" class="mt-10 inline-block px-8 py-3 bg-green-700 text-white font-bold rounded-lg shadow hover:bg-green-800 transition-colors">
                    ブログ一覧を見る
                </a>
            </div>
        </section>

        <section id="furusato" class="py-16 bg-green-800 text-white">
            <div class="container mx-auto px-4 text-center">
                <h2 class="text-fluid-h2 font-bold mb-4">
                    ふるさと納税（ふるさとチョイス）
                </h2>
                <p class="text-lg mb-8">
                    当店の野菜は、ふるさと納税の返礼品としてもお選びいただけます。
                </p>
                <a href="<?php echo esc_url( home_url( '/furusato' ) ); ?>" class="inline-block px-8 py-3 bg-white text-green-800 font-bold rounded-lg shadow-lg hover:bg-gray-100 transition-colors">
                    詳細を見る
                </a>
            </div>
        </section>

        </main>

<?php
get_footer(); 
?>