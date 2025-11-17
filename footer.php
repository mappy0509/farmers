<footer class="bg-gray-800 text-gray-300 py-10">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-between items-center mb-8">
                <div class="text-xl font-bold text-white mb-4 md:mb-0">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">食卓Farm</a>
                </div>
            </div>
            <div class="border-t border-gray-700 pt-8 text-center text-sm">
                <div class="space-x-4 mb-4">
                    <a href="<?php echo esc_url( home_url( '/privacy' ) ); ?>" class="hover:text-white">プライバシーポリシー</a>
                    <a href="<?php echo esc_url( home_url( '/tokushoho' ) ); ?>" class="hover:text-white">特定商取引法に基づく表記</a>
                </div>
                <p>&copy; 2025 食卓Farm. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <?php wp_footer(); ?>

</body>
</html>