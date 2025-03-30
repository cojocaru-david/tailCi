<footer class="bg-white dark:bg-neutral-800 border-t border-neutral-200 dark:border-neutral-700 md:rounded-t-[5rem]">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <div class="col-span-1 md:col-span-2">
                <div class="flex items-center mb-6">
                    <span class="text-orange-600 dark:text-orange-600 text-2xl font-bold tracking-tight">TailCI</span>
                </div>
                <p class="text-neutral-600 dark:text-neutral-400 mb-4">
                    A open-source, lightweight, fast, and modern web application built with CodeIgniter and styled
                    with Tailwind
                    CSS. It combines the simplicity of CodeIgniter's PHP framework with the utility-first power of
                    Tailwind CSS for rapid development and clean design.
                </p>
                <div class="flex space-x-4">
                    <a href="https://github.com/cojocaru-david/tailCi" target="_blank" role="link"
                        aria-label="TailCI Repository"
                        class="text-neutral-500 hover:text-orange-600 transition duration-200">
                        <i class="fab fa-github text-xl"></i>
                    </a>
                </div>
            </div>

            <div>
                <h3 class="text-neutral-800 dark:text-neutral-100 font-semibold mb-4">Resources</h3>
                <ul class="space-y-2">
                    <li><a href="#" target="_blank" role="link" aria-label="TailCI Documentation"
                            class="text-neutral-600 dark:text-neutral-400 hover:text-orange-600 dark:hover:text-orange-600 transition duration-200">Documentation</a>
                    </li>
                    <li><a href="#" target="_blank" role="link" aria-label="TailCI Tutorials"
                            class="text-neutral-600 dark:text-neutral-400 hover:text-orange-600 dark:hover:text-orange-600 transition duration-200">Tutorials</a>
                    </li>
                    <li><a href="#" target="_blank" role="link" aria-label="TailCI Blog"
                            class="text-neutral-600 dark:text-neutral-400 hover:text-orange-600 dark:hover:text-orange-600 transition duration-200">Blog</a>
                    </li>
                    <li><a href="#" target="_blank" role="link" aria-label="TailCI FAQs"
                            class="text-neutral-600 dark:text-neutral-400 hover:text-orange-600 dark:hover:text-orange-600 transition duration-200">FAQs</a>
                    </li>
                </ul>
            </div>

            <div>
                <h3 class="text-neutral-800 dark:text-neutral-100 font-semibold mb-4">Company</h3>
                <ul class="space-y-2">
                    <li><a href="#" target="_blank" role="link" aria-label="TailCI About"
                            class="text-neutral-600 dark:text-neutral-400 hover:text-orange-600 dark:hover:text-orange-600 transition duration-200">About</a>
                    </li>
                    <li><a href="#" target="_blank" role="link" aria-label="TailCI Careers"
                            class="text-neutral-600 dark:text-neutral-400 hover:text-orange-600 dark:hover:text-orange-600 transition duration-200">Careers</a>
                    </li>
                    <li><a href="#" target="_blank" role="link" aria-label="TailCI Contact"
                            class="text-neutral-600 dark:text-neutral-400 hover:text-orange-600 dark:hover:text-orange-600 transition duration-200">Contact</a>
                    </li>
                    <li><a href="#" target="_blank" role="link" aria-label="TailCI Privacy"
                            class="text-neutral-600 dark:text-neutral-400 hover:text-orange-600 dark:hover:text-orange-600 transition duration-200">Privacy
                            Policy</a></li>
                </ul>
            </div>
        </div>

        <div class="mt-12 pt-8 border-t border-neutral-200 dark:border-neutral-700">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="environment text-sm text-neutral-500 dark:text-neutral-400">
                    <p>Page rendered in {elapsed_time} seconds using {memory_usage} MB of memory.</p>
                    <p>Environment: <span
                            class="px-2 py-1 rounded bg-neutral-100 dark:bg-neutral-700 font-mono"><?= ENVIRONMENT ?></span>
                    <p>Version: <span
                            class="px-2 py-1 rounded bg-neutral-100 dark:bg-neutral-700 font-mono"><?= $version ?></span>
                    </p>
                </div>
                <div class="copyrights text-sm text-neutral-500 dark:text-neutral-400 md:text-right">
                    <p>&copy; <?= date('Y') ?> CodeIgniter Foundation. All rights reserved.</p>
                    <p>&copy; <?= date('Y') ?> <span
                            class="text-orange-600 hover:underline hover:text-orange-600 hover:cursor-pointer transition duration-300">TailCI</span>
                        made
                        by <a href="https://github.com/cojocaru-david"
                            class="text-blue-600 underline hover:underline hover:text-blue-700 hover:cursor-pointer transition duration-300">
                            Cojocaru David
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>