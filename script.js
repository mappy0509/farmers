// DOMが完全に読み込まれてからスクリプトを実行
document.addEventListener('DOMContentLoaded', () => {
    
    // --- モバイルメニューのトグル機能 ---
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');

    // ボタンとメニュー要素が存在するか確認
    if (mobileMenuButton && mobileMenu) {
        mobileMenuButton.addEventListener('click', () => {
            // 'hidden' クラスの有無を切り替える
            mobileMenu.classList.toggle('hidden');
        });
    }

    // --- 商品詳細ページ (single-product.php) の画像ギャラリー機能 ---
    
    // 1. メイン画像要素を取得
    const mainImage = document.getElementById('main-product-image');
    
    // 2. すべてのサムネイルボタンを取得 (single-product.phpで生成した構造に基づく)
    const thumbnailButtons = document.querySelectorAll('.grid.grid-cols-4.gap-2 button');

    if (mainImage && thumbnailButtons.length > 0) {
        thumbnailButtons.forEach(button => {
            button.addEventListener('click', () => {
                // a. クリックされたボタンから大きい画像のURLを取得 (data-full-src属性)
                //    もしdata属性がない場合(1枚目など)は、直下のimgのsrcを使用するなどのフォールバックも考慮
                let newImageSrc = button.getAttribute('data-full-src');
                
                if (!newImageSrc) {
                    const img = button.querySelector('img');
                    if (img) {
                        newImageSrc = img.src;
                    }
                }

                // b. メイン画像のsrcを更新
                if (newImageSrc) {
                    mainImage.src = newImageSrc;
                }

                // c. すべてのボタンからアクティブスタイル（緑の枠線）を削除
                thumbnailButtons.forEach(btn => {
                    btn.classList.remove('border-green-700');
                    btn.classList.add('border-transparent');
                });

                // d. クリックされたボタンにアクティブスタイルを追加
                button.classList.remove('border-transparent');
                button.classList.add('border-green-700');
            });
        });
    }

});