<?php
/**
 * The template for displaying single products
 * (Assuming a custom post type 'product')
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
                        <?php if ( has_post_thumbnail() ) : ?>
                            <img id="main-product-image" src="<?php the_post_thumbnail_url( 'full' ); ?>" alt="<?php the_title_attribute(); ?>" class="w-full h-auto object-cover">
                        <?php else : ?>
                             <img id="main-product-image" src="https://placehold.co/600x600/f87171/ffffff?text=<?php the_title(); ?>" alt="<?php the_title_attribute(); ?>" class="w-full h-auto object-cover">
                        <?php endif; ?>
                    </div>
                    <div class="grid grid-cols-4 gap-2">
                        <button class="border-2 border-green-700 rounded overflow-hidden">
                            <img src="https://placehold.co/150x150/f87171/ffffff?text=トマト1" alt="サムネイル1" class="w-full h-auto object-cover">
                        </button>
                        <button class="border-2 border-transparent rounded overflow-hidden hover:border-green-700">
                            <img src="https://placehold.co/150x150/ef4444/ffffff?text=トマト2(畑)" alt="サムネイル2" class="w-full h-auto object-cover">
                        </button>
                        <button class="border-2 border-transparent rounded overflow-hidden hover:border-green-700">
                            <img src="https://placehold.co/150x150/dc2626/ffffff?text=トマト3(断面)" alt="サムネイル3" class="w-full h-auto object-cover">
                        </button>
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
                    
                    <p class="text-gray-600 text-lg mb-4">
                        太陽の光をたっぷり浴びた、甘みと酸味のバランスが絶妙な完熟トマトです。
                    </p>

                    <div class="mb-5">
                        <span class="text-4xl font-bold text-red-600">800</span>
                        <span class="text-lg text-gray-700 ml-1">円 (税込)</span>
                    </div>

                    <div class="flex items-center mb-6">
                        <label for="quantity" class="text-gray-700 font-bold mr-3">数量:</label>
                        <select id="quantity" name="quantity" class="border border-gray-300 rounded-lg p-2 text-base text-gray-700 focus:outline-none focus:ring-2 focus:ring-green-500">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>

                    <div class="flex flex-col sm:flex-row gap-3">
                        <a href="<?php echo esc_url( home_url( '/cart' ) ); ?>" class="flex-1 inline-flex justify-center items-center px-8 py-4 bg-yellow-500 text-gray-800 text-lg font-bold rounded-lg shadow hover:bg-yellow-600 transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                            カートに入れる
                        </a>
                        <button class="px-4 py-4 bg-gray-100 text-gray-600 rounded-lg shadow hover:bg-gray-200 hover:text-red-500 transition-colors" aria-label="お気に入りに追加">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 016.364 0L12 7.636l1.318-1.318a4.5 4.5 0 016.364 6.364L12 20.364l-7.682-7.682a4.5 4.5 0 010-6.364z" />
                            </svg>
                        </button>
                    </div>
                    <div class="mt-8 pt-6 border-t border-gray-200 text-sm text-gray-600 space-y-2">
                        <p><span class="font-bold text-gray-800 w-24 inline-block">発送目安:</span> 注文から1-7日で発送</p>
                        <p><span class="font-bold text-gray-800 w-24 inline-block">産地:</span> 長野県 飯田市</p>
                        <p><span class="font-bold text-gray-800 w-24 inline-block">内容量:</span> 800g (約6〜10個)</p>
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
                    
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden flex flex-col text-left">
                        <div class="relative">
                            <img src="https://placehold.co/400x300/34d399/ffffff?text=高原きゅうり" alt="商品画像" class="w-full h-48 object-cover">
                            <a href="#" class="absolute bottom-3 left-3 flex items-center bg-white/90 backdrop-blur-sm rounded-full p-1 pr-3 shadow-md group transition-transform hover:scale-105">
                                <img src="https://placehold.co/40/71717a/ffffff?text=農" alt="生産者" class="h-6 w-6 rounded-full border border-gray-200">
                                <span class="text-gray-700 text-sm font-bold ml-2 group-hover:text-green-700">ベジファーム</span>
                            </a>
                        </div>
                        <div class="p-4 flex flex-col flex-grow">
                            <span class="text-xs text-gray-500 mb-1">注文から1-3日で発送</span>
                            <h3 class="text-fluid-h3 font-bold mb-2 text-gray-800 hover:text-green-700 transition-colors">
                                <a href="#">みずみずし高原きゅうり 1kg</a>
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
                            <img src="https://placehold.co/400x300/fca5a5/ffffff?text=りんご" alt="商品画像" class="w-full h-48 object-cover">
                            <a href="#" class="absolute bottom-3 left-3 flex items-center bg-white/90 backdrop-blur-sm rounded-full p-1 pr-3 shadow-md group transition-transform hover:scale-105">
                                <img src="https://placehold.co/40/71717a/ffffff?text=農" alt="生産者" class="h-6 w-6 rounded-full border border-gray-200">
                                <span class="text-gray-700 text-sm font-bold ml-2 group-hover:text-green-700">〇〇農園</span>
                            </a>
                        </div>
                        <div class="p-4 flex flex-col flex-grow">
                            <span class="text-xs text-gray-500 mb-1">注文から3-5日で発送</span>
                            <h3 class="text-fluid-h3 font-bold mb-2 text-gray-800 hover:text-green-700 transition-colors">
                                <a href="#">蜜入りサンふじりんご 2kg</a>
                            </h3>
                            <div class="text-sm text-gray-600 mb-3 flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.828 0l-4.242-4.243a8 8 0 1111.314 0z" /><path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
                                長野県 飯田市
                            </div>
                            <div class="mt-auto flex justify-end items-baseline">
                                <span class="text-2xl font-bold text-red-600">2,500</span>
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
                        </div>
                        <div class="p-4 flex flex-col flex-grow">
                            <span class="text-xs text-gray-500 mb-1">【予約】12月発送開始</span>
                            <h3 class="text-fluid-h3 font-bold mb-2 text-gray-800 hover:text-green-700 transition-colors">
                                <a href="#">甘い！採れたてトウモロコシ 5本</a>
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
            </section>
            
            <?php
            endwhile; // ループ終了
            ?>

        </div>
    </main>

<?php
get_footer(); 
?>