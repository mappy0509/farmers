<?php
/**
 * Template Name: 私たちのこだわり
 *
 * This is the template that displays the "About" page.
 *
 * @package Farmers
 * @since 1.0.0
 */

get_header(); 
?>

    <main>

        <?php
        // Start the WordPress Loop
        while ( have_posts() ) :
            the_post();
        ?>

        <section class="relative h-[40vh] bg-cover bg-center" style="background-image: url('https://placehold.co/1600x800/22c55e/ffffff?text=こだわりイメージ');">
            <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center">
                <div class="text-center text-white p-4">
                    <h1 class="text-fluid-hero font-bold">
                        私たちのこだわり
                    </h1>
                </div>
            </div>
        </section>

        <section class="py-16 bg-white">
            <div class="container mx-auto px-4 max-w-3xl text-center">
                <h2 class="text-fluid-h2 font-bold text-gray-800 mb-6">
                    「本当に美味しい」を、
                    <br class="sm:hidden">
                    まっすぐ食卓へ
                </h2>
                <p class="text-lg text-gray-700 leading-relaxed">
                    食卓Farmは、ただ野菜を売る場所ではありません。
                    <br>
                    スーパーマーケットには並ばない、農家さんが丹精込めて育てた「本当に美味しい」野菜だけを厳選し、その価値と物語とともにお届けするセレクトショップです。
                    <br><br>
                    私たちが信じるのは、美味しい野菜が食卓を豊かにし、家族の笑顔を増やす力。
                    全国の素晴らしい生産者さんとお客様を繋ぐ架け橋となることが、私たちの使命です。
                </p>
            </div>
        </section>

        <section class="py-16 bg-gray-50">
            <div class="container mx-auto px-4">
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center mb-12">
                    <div class="rounded-lg shadow-lg overflow-hidden">
                        <img src="https://placehold.co/600x400/fbbf24/ffffff?text=バイヤーの目利き" alt="バイヤーの目利き" class="w-full h-auto object-cover">
                    </div>
                    <div>
                        <span class="text-green-700 font-bold">こだわり 01</span>
                        <h3 class="text-fluid-h3 font-bold text-gray-800 my-3">
                            プロによる「目利き」
                        </h3>
                        <p class="text-gray-700 leading-relaxed">
                            私たちのバイヤーは、元料理人や青果市場での経験が豊富なプロフェッショナルです。
                            味、香り、栽培方法、そして生産者さんの情熱。すべてを総合的に判断し、「これは」と思う逸品だけを仕入れています。
                        </p>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center mb-12">
                    <div class="md:order-2 rounded-lg shadow-lg overflow-hidden">
                        <img src="https://placehold.co/600x400/a5b4fc/ffffff?text=生産者との繋がり" alt="生産者との繋がり" class="w-full h-auto object-cover">
                    </div>
                    <div class="md:order-1">
                        <span class="text-green-700 font-bold">こだわり 02</span>
                        <h3 class="text-fluid-h3 font-bold text-gray-800 my-3">
                            顔の見える「生産者」
                        </h3>
                        <p class="text-gray-700 leading-relaxed">
                            私たちは、すべての契約農家さんを直接訪ね、畑を見て、お話を伺っています。
                            どのような想いで野菜を育てているのか。その背景にある物語を知ることで、私たちは自信を持ってお客様に商品をおすすめできます。
                        </p>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                    <div class="rounded-lg shadow-lg overflow-hidden">
                        <img src="https://placehold.co/600x400/f87171/ffffff?text=朝採れ・新鮮" alt="鮮度へのこだわり" class="w-full h-auto object-cover">
                    </div>
                    <div>
                        <span class="text-green-700 font-bold">こだわり 03</span>
                        <h3 class="text-fluid-h3 font-bold text-gray-800 my-3">
                            「鮮度」への徹底
                        </h3>
                        <p class="text-gray-700 leading-relaxed">
                            野菜の命は鮮度です。ご注文を受けてから収穫する「受注生産」を基本とし、最短ルートでお客様の元へお届けします。
                            朝採れのトマトが、翌日にはお客様の食卓に並ぶ。そんな体験を提供します。
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-16 bg-white">
            <div class="container mx-auto px-4 max-w-4xl">
                <h2 class="text-fluid-h2 font-bold text-gray-800 mb-10 text-center">
                    運営者情報
                </h2>
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <div class="bg-gray-50 p-6 sm:p-8 border-b border-gray-200">
                        <h3 class="text-fluid-h3 font-bold text-gray-800 mb-2">食卓Farm</h3>
                        <p class="text-gray-600">（運営会社：栄興商事流通センター）</p>
                    </div>
                    <div class="p-6 sm:p-8 text-gray-700 space-y-4">
                        <div class="flex flex-col sm:flex-row">
                            <dt class="sm:w-1/4 font-bold text-gray-800">代表</dt>
                            <dd class="sm:w-3/4">山田 太郎</dd>
                        </div>
                        
                        <div class="flex flex-col sm:flex-row">
                            <dt class="sm:w-1/4 font-bold text-gray-800">事業内容</dt>
                            <dd class="sm:w-3/4">青果物のセレクトショップECサイト運営、情報発信</dd>
                        </div>
                        <div class="flex flex-col sm:flex-row">
                            <dt class="sm:w-1/4 font-bold text-gray-800">メッセージ</dt>
                            <dd class="sm:w-3/4">
                                はじめまして。代表の山田です。<br>
                                私自身、料理人として様々な食材に触れる中で、日本にはまだ知られていない素晴らしい野菜を作る農家さんが大勢いることを知りました。
                                この感動を、どうすればもっと多くの人に伝えられるか。そう考えて始めたのが「食卓Farm」です。
                                皆様の「美味しい」の一言が、生産者さんの何よりの励みになります。
                            </dd>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php
        endwhile; // End of the loop.
        ?>

    </main>

<?php
get_footer(); 
?>