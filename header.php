<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class( 'bg-gray-50' ); ?>>
<?php wp_body_open(); ?>

    <header class="relative z-50">
        
        <div class="bg-green-800 text-white">
            <div class="container mx-auto px-4 py-2 flex justify-between items-center">
                <div class="hidden lg:flex space-x-3 items-center">
                    <a href="#" class="text-gray-300 hover:text-white" title="アメブロ">
                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zM11 11H9v2h2v-2zm4 0h-2v2h2v-2zm-8-4h6v2H7v-2z"/></svg>
                    </a>
                    <a href="#" class="text-gray-300 hover:text-white" title="Instagram">
                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 1.272.058 2.163.345 2.963.636.799.29 1.445.717 2.126 1.398.68.68 1.108 1.327 1.398 2.126.29.799.578 1.69.636 2.963.058 1.266.07 1.646.07 4.85s-.012 3.584-.07 4.85c-.058 1.272-.345 2.163-.636 2.963-.29.799-.717 1.445-1.398 2.126-.68.68-1.327 1.108-2.126 1.398-.799.29-1.69.578-2.963.636-1.266.058-1.646.07-4.85.07s-3.584-.012-4.85-.07c-1.272-.058-2.163-.345-2.963-.636-.799-.29-1.445-.717-2.126-1.398-.68-.68-1.108 1.327-1.398 2.126-.29-.799-.578 1.69-.636 2.963-.058 1.266-.07-1.646-.07-4.85s.012-3.584.07 4.85c.058-1.272.345 2.163.636 2.963.29-.799.717 1.445 1.398-2.126.68-.68 1.327 1.108 2.126 1.398.799-.29 1.69-.578 2.963.636 1.266.058 1.646.07 4.85.07M12 0C8.74 0 8.333.014 7.053.072 5.775.132 4.905.333 4.14.63c-.784.297-1.45.717-2.126 1.394C1.333 2.7.913 3.366.617 4.14.318 4.905.118 5.775.06 7.053.014 8.333 0 8.74 0 12s.014 3.667.06 4.947c.058 1.277.25 2.148.557 2.913.297.784.717 1.45 1.394 2.126.677.677 1.343 1.097 2.126 1.394.765.297 1.636.499 2.913.557C8.333 23.986 8.74 24 12 24s3.667-.014 4.947-.06c1.277-.058 2.148-.25 2.913-.557.784-.297 1.45-.717 2.126-1.394.677-.677 1.097-1.343 1.394-2.126.297-.765.499-1.636.557-2.913C23.986 15.667 24 15.26 24 12s-.014-3.667-.06-4.947c-.058-1.277-.25-2.148-.557-2.913-.297-.784-.717 1.45-1.394-2.126C21.313 1.333 20.647.913 19.87.617c-.765-.297-1.636-.499-2.913-.557C15.667.014 15.26 0 12 0zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.162 6.162 6.162 6.162-2.759 6.162-6.162S15.403 5.838 12 5.838zm0 10.328c-2.3 0-4.166-1.866-4.166-4.166S9.7 7.834 12 7.834s4.166 1.866 4.166 4.166-1.866 4.166-4.166 4.166zm4.877-7.927c-.604 0-1.094.49-1.094 1.094s.49 1.094 1.094 1.094 1.094-.49 1.094-1.094-.49-1.094-1.094-1.094z"/></svg>
                    </a>
                    <a href="#" class="text-gray-300 hover:text-white" title="X (Twitter)">
                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                    </a>
                </div>

                <div class="flex items-center space-x-2 sm:space-x-4">
                    <form role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>" class="hidden md:flex items-center relative">
                        <label for="top-search" class="sr-only">商品を検索</label>
                        <input id="top-search" name="s" type="text" placeholder="商品名・生産者名で検索" class="bg-white text-gray-800 text-sm rounded-lg py-2 px-3 focus:outline-none focus:ring-2 focus:ring-yellow-500" style="width: 200px;" value="<?php echo get_search_query(); ?>">
                        <button type="submit" aria-label="検索実行" class="absolute right-0 top-0 mt-2 mr-2 text-gray-600 hover:text-gray-900">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </button>
                    </form>
                    
                    <div class="flex items-center space-x-2 sm:space-x-3">
                        <a href="<?php echo esc_url( home_url( '/products' ) ); ?>" class="bg-yellow-500 hover:bg-yellow-600 text-gray-800 text-xs sm:text-sm font-bold px-2 sm:px-4 py-2 rounded-lg shadow hover:shadow-md transition-all inline-flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1 sm:mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                            <span class="hidden sm:inline">オンライン</span>ショップ
                        </a>
                        <!-- LINEリンク修正 -->
                        <a href="https://lin.ee/Ws6fScK" class="line-green text-white text-xs sm:text-sm font-bold px-2 sm:px-4 py-2 rounded-lg shadow hover:shadow-md transition-all inline-flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1 sm:mr-2" fill="currentColor" viewBox="0 0 24 24"><path d="M21.5,4.9C21.1,4 20.1,3.4 19,3.4H5.1c-1.1,0-2.1,0.6-2.5,1.5c-0.3,1.1-0.1,2.2,0.6,3.1l1,1.3c0,0,0,0,0,0 c0.1,0.1,0.1,0.2,0.1,0.3c0,0.1,0,0.2-0.1,0.3c0,0,0,0,0,0l-1,1.3c-0.7,0.9-0.9,2-0.6,3.1C2.9,16,3.9,16.6,5.1,16.6h13.8 c1.1,0,2.1,0.6,2.5,1.5c0.3-1.1,0.1-2.2-0.6-3.1l-1-1.3c0,0,0,0,0,0c-0.1-0.1-0.1-0.2-0.1-0.3c0-0.1,0-0.2,0.1-0.3c0,0,0,0,0,0 l1-1.3C21.6,7.1,21.8,6,21.5,4.9z M9.3,13.3H7.7V9.7h1.6V13.3z M12.5,13.3h-1.6V9.7h1.6V13.3z M15.7,13.3h-1.6V9.7h1.6V13.3z"/></svg>
                            <span class="hidden sm:inline">LINEで</span>お得情報GET
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-white shadow-sm sticky top-0">
            <div class="container mx-auto px-4 py-4 flex justify-between items-center">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="text-2xl font-bold text-green-800">
                    食卓Farm
                </a>
                
                <nav class="hidden md:flex items-center space-x-6">
                    <a href="<?php echo esc_url( home_url( '/about' ) ); ?>" class="text-gray-600 hover:text-green-700">こだわり</a>
                    <a href="<?php echo esc_url( home_url( '/products' ) ); ?>" class="text-gray-600 hover:text-green-700">商品一覧</a>
                    <a href="<?php echo esc_url( home_url( '/blog' ) ); ?>" class="text-gray-600 hover:text-green-700">ブログ</a>
                    <a href="<?php echo esc_url( home_url( '/furusato' ) ); ?>" class="text-gray-600 hover:text-green-700">ふるさと納税</a>
                </nav>

                <button id="mobile-menu-button" class="md:hidden text-gray-700">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                    </svg>
                </button>
            </div>
            
            <div id="mobile-menu" class="hidden md:hidden bg-white px-4 pt-2 pb-4 space-y-2">
                <a href="<?php echo esc_url( home_url( '/about' ) ); ?>" class="block text-gray-600 hover:text-green-700">こだわり</a>
                <a href="<?php echo esc_url( home_url( '/products' ) ); ?>" class="block text-gray-600 hover:text-green-700">商品一覧</a>
                <a href="<?php echo esc_url( home_url( '/blog' ) ); ?>" class="block text-gray-600 hover:text-green-700">ブログ</a>
                <a href="<?php echo esc_url( home_url( '/furusato' ) ); ?>" class="block text-gray-600 hover:text-green-700">ふるさと納税</a>
            </div>
        </div>
    </header>