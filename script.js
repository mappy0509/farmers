// DOMが完全に読み込まれてからスクリプトを実行
document.addEventListener('DOMContentLoaded', () => {
    
    // モバイルメニューのトグル機能
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');

    // ボタンとメニュー要素が存在するか確認
    if (mobileMenuButton && mobileMenu) {
        mobileMenuButton.addEventListener('click', () => {
            // 'hidden' クラスの有無を切り替える
            mobileMenu.classList.toggle('hidden');
        });
    }

    // --- ここから将来的な機能追加 ---

    // 商品詳細ページ (single-product.php) の画像ギャラリー機能
    // 
    // 1. すべてのサムネイルボタンを取得
    // const thumbnailButtons = document.querySelectorAll('.grid.grid-cols-4.gap-2 button');
    // 2. メイン画像要素を取得
    // const mainImage = document.getElementById('main-product-image');
    // 
    // if (thumbnailButtons.length > 0 && mainImage) {
    //     thumbnailButtons.forEach(button => {
    //         button.addEventListener('click', () => {
    //             // 1. メイン画像のsrcを、クリックされたボタンの子imgのsrcに変更
    //             const newImageSrc = button.querySelector('img').src
    //                 .replace('150x150', '600x600'); // (※ダミー画像のURLハック。本番では不要)
    //             mainImage.src = newImageSrc;
    // 
    //             // 2. すべてのボタンからボーダーを削除
    //             thumbnailButtons.forEach(btn => btn.classList.remove('border-green-700'));
    //             thumbnailButtons.forEach(btn => btn.classList.add('border-transparent'));
    // 
    //             // 3. クリックされたボタンにボーダーを追加
    //             button.classList.add('border-green-700');
    //             button.classList.remove('border-transparent');
    //         });
    //     });
    // }

    // カートページ (page-cart.php) の数量変更や削除機能
    // 決済システムのロジックと連携させる必要があります。

});