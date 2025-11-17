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

    // 他のJavaScript機能も将来的にここに追加できます。

});