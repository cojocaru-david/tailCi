<?php $this->extend('Layouts/default'); ?>

<?php $this->section('head'); ?>
<meta name="description"
    content="A open-source, lightweight, fast, and modern web application built with CodeIgniter and styled with Tailwind CSS. It combines the simplicity of CodeIgniter's PHP framework with the utility-first power of Tailwind CSS for rapid development and clean design.">
<meta property="og:description"
    content="A open-source, lightweight, fast, and modern web application built with CodeIgniter and styled with Tailwind CSS. It combines the simplicity of CodeIgniter's PHP framework with the utility-first power of Tailwind CSS for rapid development and clean design.">
<meta property="og:image" content="https://www.example.com/image.jpg">
<meta name="twitter:description"
    content="A open-source, lightweight, fast, and modern web application built with CodeIgniter and styled with Tailwind CSS. It combines the simplicity of CodeIgniter's PHP framework with the utility-first power of Tailwind CSS for rapid development and clean design.">
<meta name="twitter:image" content="https://www.example.com/image.jpg">
<?php $this->endSection(); ?>

<?php $this->section('content'); ?>
<section class="pt-32 pb-20 bg-gradient-to-br from-neutral-50 to-neutral-100 dark:from-neutral-900 dark:to-neutral-800">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto text-center">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-neutral-800 dark:text-neutral-100 mb-6">
                Modern Web Development with <span class="text-orange-500">TailCI</span></h1>
            <p class="text-lg md:text-xl text-neutral-600 dark:text-neutral-300 mb-8">A lightweight, fast, and
                modern web application built with CodeIgniter and styled with Tailwind CSS.</p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="#"
                    class="inline-flex items-center justify-center px-6 py-3 border border-transparent text-base font-medium rounded-lg text-white bg-orange-500 hover:bg-orange-600 transition duration-200 shadow-lg hover:shadow-xl">
                    Get Started
                    <i class="fas fa-arrow-right ml-2"></i>
                </a>
                <a href="#"
                    class="inline-flex items-center justify-center px-6 py-3 border border-neutral-300 dark:border-neutral-700 text-base font-medium rounded-lg text-neutral-700 dark:text-neutral-300 bg-white dark:bg-neutral-800 hover:bg-neutral-50 dark:hover:bg-neutral-700 transition duration-200 shadow-lg hover:shadow-xl">
                    Documentation
                    <i class="fas fa-book ml-2"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="py-12">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-16">
            <h2 class="text-3xl font-bold text-neutral-800 dark:text-neutral-100">Core Features</h2>
            <p class="mt-4 text-xl text-neutral-600 dark:text-neutral-400">Everything you need to build
                modern web applications</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Feature 1 -->
            <div
                class="bg-white dark:bg-neutral-800 rounded-xl shadow-md hover:shadow-xl transition duration-300 p-6 border border-neutral-200 dark:border-neutral-700">
                <div
                    class="w-12 h-12 flex items-center justify-center rounded-full bg-orange-100 dark:bg-orange-900/30 text-orange-500 mb-6">
                    <i class="fas fa-bolt text-lg"></i>
                </div>
                <h3 class="text-xl font-semibold text-neutral-800 dark:text-neutral-100 mb-3">Lightning Fast
                </h3>
                <p class="text-neutral-600 dark:text-neutral-400">Built on CodeIgniter's lightweight
                    framework for optimal performance and speed.</p>
            </div>
            <!-- Feature 2 -->
            <div
                class="bg-white dark:bg-neutral-800 rounded-xl shadow-md hover:shadow-xl transition duration-300 p-6 border border-neutral-200 dark:border-neutral-700">
                <div
                    class="w-12 h-12 flex items-center justify-center rounded-full bg-orange-100 dark:bg-orange-900/30 text-orange-500 mb-6">
                    <i class="fas fa-palette text-lg"></i>
                </div>
                <h3 class="text-xl font-semibold text-neutral-800 dark:text-neutral-100 mb-3">Modern Design
                </h3>
                <p class="text-neutral-600 dark:text-neutral-400">Styled with Tailwind CSS v4 for a clean,
                    responsive, and customizable interface.</p>
            </div>
            <!-- Feature 3 -->
            <div
                class="bg-white dark:bg-neutral-800 rounded-xl shadow-md hover:shadow-xl transition duration-300 p-6 border border-neutral-200 dark:border-neutral-700">
                <div
                    class="w-12 h-12 flex items-center justify-center rounded-full bg-orange-100 dark:bg-orange-900/30 text-orange-500 mb-6">
                    <i class="fas fa-code text-lg"></i>
                </div>
                <h3 class="text-xl font-semibold text-neutral-800 dark:text-neutral-100 mb-3">Developer
                    Friendly</h3>
                <p class="text-neutral-600 dark:text-neutral-400">Intuitive architecture and well-documented
                    codebase for rapid development.</p>
            </div>
        </div>
    </div>
</section>
<?php $this->endSection(); ?>