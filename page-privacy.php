<?php
/**
 * Template Name: プライバシーポリシー
 *
 * This is the template that displays the "Privacy Policy" page.
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
                <div class="prose lg:prose-lg max-w-none text-gray-700">
                    <p class="lead">
                        食卓Farm（以下、「当店」といいます。）は、本ウェブサイト上で提供するサービス（以下、「本サービス」といいます。）における、ユーザーの個人情報の取扱いについて、以下のとおりプライバシーポリシー（以下、「本ポリシー」といいます。）を定めます。
                    </p>

                    <h3>第1条（個人情報）</h3>
                    <p>「個人情報」とは、個人情報保護法にいう「個人情報」を指すものとし、生存する個人に関する情報であって、当該情報に含まれる氏名、生年月日、住所、電話番号、連絡先その他の記述等により特定の個人を識別できる情報及び容貌、指紋、声紋にかかるデータ、及び健康保険証の保険者番号などの当該情報単体から特定の個人を識別できる情報（個人識別情報）を指します。</p>

                    <h3>第2条（個人情報の収集方法）</h3>
                    <p>当店は、ユーザーが利用登録をする際に氏名、生年月日、住所、電話番号、メールアドレス、銀行口座番号、クレジットカード番号などの個人情報をお尋ねすることがあります。また、ユーザーと提携先などとの間でなされたユーザーの個人情報を含む取引記録や決済に関する情報を、当店の提携先（情報提供元、広告主、広告配信先などを含みます。以下、「提携先」といいます。）などから収集することがあります。</p>

                    <h3>第3条（個人情報を収集・利用する目的）</h3>
                    <p>当店が個人情報を収集・利用する目的は、以下のとおりです。</p>
                    <ol>
                        <li>当店サービスの提供・運営のため</li>
                        <li>ユーザーからのお問い合わせに回答するため（本人確認を行うことを含む）</li>
                        <li>ユーザーが利用中のサービスの新機能、更新情報、キャンペーン等及び当店が提供する他のサービスの案内のメールを送付するため</li>
                        <li>メンテナンス、重要なお知らせなど必要に応じたご連絡のため</li>
                        <li>利用規約に違反したユーザーや、不正・不当な目的でサービスを利用しようとするユーザーの特定をし、ご利用をお断りするため</li>
                        <li>上記の利用目的に付随する目的</li>
                    </ol>

                    <h3>第4条（利用目的の変更）</h3>
                    <p>（ダミーテキスト）当店は、利用目的が変更前と関連性を有すると合理的に認められる場合に限り、個人情報の利用目的を変更するものとします。</p>

                    <h3>第5条（個人情報の第三者提供）</h3>
                    <p>（ダミーテキスト）当店は、次に掲げる場合を除いて、あらかじめユーザーの同意を得ることなく、第三者に個人情報を提供することはありません。ただし、個人情報保護法その他の法令で認められる場合を除きます。</p>

                    <h3>第6条（個人情報の開示）</h3>
                    <p>（ダミーテキスト）当店は、本人から個人情報の開示を求められたときは、本人に対し、遅滞なくこれを開示します。ただし、開示することにより次のいずれかに該当する場合は、その全部または一部を開示しないこともあり、開示しない決定をした場合には、その旨を遅滞なく通知します。</p>

                    <h3>第7条（プライバシーポリシーの変更）</h3>
                    <p>本ポリシーの内容は、法令その他本ポリシーに別段の定めのある事項を除いて、ユーザーに通知することなく、変更することができるものとします。</p>
                    <p>当店が別途定める場合を除いて、変更後のプライバシーポリシーは、本ウェブサイトに掲載したときから効力を生じるものとします。</p>

                    <hr>
                    <p class="text-right">
                        2025年11月15日 制定
                    </p>
                </div>
            </div>

            <?php
            endwhile; // ループ終了
            ?>

        </div>
    </main>

<?php
get_footer(); 
?>