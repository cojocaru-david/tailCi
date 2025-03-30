<?php
$menuItems = [
    '/' => [
        'title' => 'Home',
        'icon' => 'fa fa-home'
    ],
    '#features' => [
        'title' => 'Features',
        'icon' => 'fas fa-cogs'
    ],
    '#how-it-work' => [
        'title' => 'About',
        'icon' => 'fas fa-question-circle'
    ]
];
?>


<header id="navbar"
    class="fixed w-full z-50 transition-all duration-300 ease-in-out bg-white/20 dark:bg-neutral-900/20">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 backdrop-blur-sm">
        <div class="flex justify-between items-center h-16">

            <div class="flex items-center">
                <a href="#" class="flex items-center space-x-2">
                    <span class="text-orange-500 dark:text-orange-400 text-3xl font-extrabold tracking-tighter">
                        Tail<span class="relative text-neutral-900 dark:text-neutral-100">CI<span
                                class="absolute -top-1 -right-2 h-2 w-2 bg-orange-500 dark:bg-orange-400 rounded-full"></span></span>
                    </span>
                </a>
            </div>


            <nav class="hidden md:flex items-center space-x-1">
                <?php foreach ($menuItems as $link => $item): ?>
                    <a href="<?= $link ?>"
                        class="group relative px-4 py-2 text-sm font-medium text-neutral-700 dark:text-neutral-300 hover:text-orange-500 dark:hover:text-orange-400 transition-colors duration-200">
                        <span><?= $item['title'] ?></span>
                        <span
                            class="absolute bottom-0 left-0 w-0 h-0.5 bg-orange-500 dark:bg-orange-400 transition-all duration-200 group-hover:w-full"></span>
                    </a>
                <?php endforeach; ?>

                <div class="ml-6 flex items-center">
                    <button id="theme-toggle"
                        class="relative overflow-hidden w-12 h-6 rounded-full bg-neutral-200/70 dark:bg-neutral-800/70 backdrop-blur-sm transition duration-300 focus:outline-none focus:ring-2 focus:ring-orange-500/50 dark:focus:ring-orange-400/50">
                        <div class="absolute inset-0 flex items-center justify-between px-1">
                            <i class="fas fa-sun text-orange-500 text-xs"></i>
                            <i class="fas fa-moon text-neutral-500 dark:text-neutral-400 text-xs"></i>
                        </div>
                        <div id="theme-toggle-circle"
                            class="absolute left-0.5 top-0.5 w-5 h-5 rounded-full bg-white dark:bg-neutral-700 transform transition-transform duration-300 ease-in-out dark:translate-x-6">
                        </div>
                    </button>
                </div>
            </nav>


            <div class="md:hidden flex items-center">
                <button id="mobile-menu-button"
                    class="p-2 rounded-full bg-neutral-200/70 dark:bg-neutral-800/70 text-neutral-600 dark:text-neutral-400 hover:bg-neutral-300/80 dark:hover:bg-neutral-700/80 transition duration-200 backdrop-blur-sm focus:outline-none focus:ring-2 focus:ring-orange-500/50 dark:focus:ring-orange-400/50">
                    <svg xmlns="http://www.w3.org/2000/svg" class="menu-icon h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" class="close-icon h-5 w-5 hidden" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>


    <div id="mobile-menu" class="hidden md:hidden fixed inset-0 z-40">

        <div class="fixed inset-0 bg-black/30 dark:bg-black/60 backdrop-blur-md" id="mobile-menu-backdrop"></div>


        <div class="relative h-full w-3/4 max-w-xs bg-white/70 dark:bg-neutral-900/70 backdrop-blur-md shadow-2xl transform transition-transform duration-300 ease-out -translate-x-full"
            id="mobile-menu-content">
            <div class="flex flex-col h-full">

                <div class="p-6 border-b border-neutral-200 dark:border-neutral-800">
                    <div class="flex items-center justify-between">
                        <span
                            class="text-orange-500 dark:text-orange-400 text-2xl font-extrabold tracking-tighter">Tail<span
                                class="relative text-neutral-900 dark:text-neutral-100">CI<span
                                    class="absolute -top-1 -right-2 h-1.5 w-1.5 bg-orange-500 dark:bg-orange-400 rounded-full"></span></span></span>
                        <button id="mobile-close-button"
                            class="p-2 -mr-2 rounded-full text-neutral-500 hover:text-neutral-700 dark:text-neutral-400 dark:hover:text-neutral-200 focus:outline-none focus:ring-2 focus:ring-orange-500/50 dark:focus:ring-orange-400/50 transition duration-200">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>


                <div class="flex-1 overflow-y-auto py-6">
                    <nav class="flex flex-col space-y-2 px-6">
                        <?php foreach ($menuItems as $link => $item): ?>
                            <a href="<?= $link ?>"
                                class="group flex items-center px-4 py-3 rounded-xl text-neutral-700 dark:text-neutral-300 hover:bg-orange-50 dark:hover:bg-orange-900/20 hover:text-orange-600 dark:hover:text-orange-400 transition-all duration-200">
                                <i
                                    class="<?= $item['icon'] ?> text-lg mr-4 text-neutral-500 dark:text-neutral-400 group-hover:text-orange-500 dark:group-hover:text-orange-400 transition-colors duration-200"></i>
                                <span class="font-medium"><?= $item['title'] ?></span>
                            </a>
                        <?php endforeach ?>
                    </nav>
                </div>


                <div class="p-6 border-t border-neutral-200 dark:border-neutral-800">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <span class="dark:hidden text-sm font-medium text-neutral-600">Dark mode</span>
                            <span class="hidden dark:inline text-sm font-medium text-neutral-400">Light mode</span>
                        </div>
                        <button id="mobile-theme-toggle"
                            class="relative overflow-hidden w-12 h-6 rounded-full bg-neutral-200/70 dark:bg-neutral-800/70 transition duration-300 focus:outline-none focus:ring-2 focus:ring-orange-500/50 dark:focus:ring-orange-400/50">
                            <div class="absolute inset-0 flex items-center justify-between px-1">
                                <i class="fas fa-sun text-orange-500 text-xs"></i>
                                <i class="fas fa-moon text-neutral-500 dark:text-neutral-400 text-xs"></i>
                            </div>
                            <div id="mobile-theme-toggle-circle"
                                class="absolute left-0.5 top-0.5 w-5 h-5 rounded-full bg-white dark:bg-neutral-700 transform transition-transform duration-300 ease-in-out dark:translate-x-6">
                            </div>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>