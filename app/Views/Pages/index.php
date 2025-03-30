<?php
$pageDescription = "TailCI - A powerful, open-source web framework that combines CodeIgniter 4 with Tailwind CSS for lightning-fast, modern web development with an intuitive developer experience.";
$this->extend('Layouts/default'); ?>

<?php $this->section('head'); ?>
<meta name="description" content="<?= $pageDescription ?>">
<meta property="og:description" content="<?= $pageDescription ?>">
<meta property="og:image" content="<?= base_url('assets/img/tailci-social-card.png') ?>">
<meta name="twitter:description" content="<?= $pageDescription ?>">
<meta name="twitter:image" content="<?= base_url('assets/img/tailci-social-card.png') ?>">
<meta name="keywords" content="TailCI, CodeIgniter, Tailwind CSS, Web Development, PHP Framework, Open Source">
<?php $this->endSection(); ?>

<?php $this->section('content'); ?>
<section id="hero"
    class="relative min-h-screen pt-22 md:pt-52 overflow-hidden bg-gradient-to-br from-neutral-50 via-orange-50 to-neutral-100 dark:from-neutral-900 dark:via-orange-950 dark:to-neutral-800">
    <div class="absolute inset-0 overflow-hidden opacity-20 dark:opacity-10 pointer-events-none">
        <div class="absolute -right-5 -top-5 w-72 h-72 bg-orange-700 rounded-full filter blur-3xl">
        </div>
        <div class="absolute -left-20 top-40 w-80 h-80 bg-yellow-900 rounded-full filter blur-3xl">
        </div>
        <div class="absolute right-20 bottom-10 w-60 h-60 bg-red-900 rounded-full filter blur-3xl">
        </div>
    </div>

    <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="max-w-4xl mx-auto text-center">
            <a href="https://github.com/cojocaru-david/tailCi" target="_blank" role="link"
                aria-label="TailCI Repository"
                class="inline-flex items-center justify-center px-4 py-2 rounded-full bg-orange-100 dark:bg-orange-900/40 text-orange-600 dark:text-orange-500 mb-6 text-sm font-medium">
                <span>Version <?= $version ?></span>
                <span class="ml-2 bg-orange-200 dark:bg-orange-800 px-2 py-0.5 rounded-full text-xs">NEW</span>
                <i class="fa fa-arrow-right ml-2"></i>
            </a>

            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-neutral-800 dark:text-neutral-100 mb-6">
                Modern Web Development with <span class="text-orange-600 underline relative">
                    TailCI
                </span>
            </h1>

            <p class="text-lg md:text-xl text-neutral-600 dark:text-neutral-300 mb-8">
                A lightning-fast, modern web framework that seamlessly integrates CodeIgniter's robust backend with
                Tailwind CSS's utility-first approach.
            </p>

            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="https://github.com/cojocaru-david/tailCi/tree/master?tab=readme-ov-file#installation"
                    target="_blank" role="link" aria-label="TailCI Repository"
                    class="inline-flex items-center justify-center px-6 py-3 border border-transparent text-base font-medium rounded-lg text-white bg-orange-600 hover:bg-orange-600 transition duration-200 shadow-lg hover:shadow-xl">
                    Get Started
                    <i class="fa fa-arrow-right ml-2"></i>
                </a>
                <a href="#" target="_blank" role="link" aria-label="TailCI Repository"
                    class="inline-flex items-center justify-center px-6 py-3 border border-neutral-300 dark:border-neutral-700 text-base font-medium rounded-lg text-neutral-700 dark:text-neutral-300 bg-white dark:bg-neutral-800 hover:bg-neutral-50 dark:hover:bg-neutral-700 transition duration-200 shadow-lg hover:shadow-xl">
                    Documentation
                    <i class="fa fa-book-open ml-2"></i>
                </a>
            </div>


            <div
                class="mt-12 bg-neutral-800 dark:bg-neutral-900 rounded-lg shadow-xl p-6 text-left max-w-3xl mx-auto overflow-hidden">
                <div class="flex items-center mb-4">
                    <div class="flex space-x-2">
                        <div class="w-3 h-3 rounded-full bg-red-500"></div>
                        <div class="w-3 h-3 rounded-full bg-yellow-500"></div>
                        <div class="w-3 h-3 rounded-full bg-green-500"></div>
                    </div>
                    <div class="ml-4 text-neutral-400 text-sm">Home.php</div>
                </div>

                <pre class="text-sm md:text-base overflow-x-auto font-mono"><code class="language-php text-neutral-200"><span class="text-blue-400">&lt;?php</span>
<span class="text-purple-400">namespace</span> <span class="text-green-400">App\Controllers</span>;

<span class="text-purple-400">class</span> <span class="text-yellow-400">Home</span> <span class="text-purple-400">extends</span> <span class="text-yellow-400">BaseController</span>
{
    <span class="text-purple-400">public function</span> <span class="text-yellow-400">index</span>()<span class="text-white">:</span> <span class="text-purple-500">string</span>
    {
        <span class="text-purple-400">return</span> <span class="text-yellow-400">view</span>(<span class="text-green-400">'Pages/index'</span><span class="text-white">,</span> <span class="text-yellow-500">[</span>
            <span class="text-green-400">'title'</span> => <span class="text-green-400">'Home'</span>
        <span class="text-yellow-500">]</span>);
    }
}
</code></pre>
            </div>
        </div>
    </div>

    <div class="absolute bottom-0 left-0 right-0 overflow-hidden">
        <svg class="w-full h-auto" viewBox="0 0 1440 74" fill="none" xmlns="http://www.w3.org/2000/svg"
            preserveAspectRatio="none">
            <path d="M1440 51.4091H1090.08C833.336 51.4091 580.229 7.95455 360.769 7.95455H0V74H1440V51.4091Z"
                class="fill-white dark:fill-neutral-800"></path>
        </svg>
    </div>
</section>

<section class="py-16 bg-white dark:bg-neutral-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl font-bold text-neutral-800 dark:text-neutral-100">Core Features</h2>
            <p class="mt-4 text-xl text-neutral-600 dark:text-neutral-400">Everything you need to build
                modern web applications</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

            <div
                class="group bg-white dark:bg-neutral-800 rounded-xl shadow-md hover:shadow-xl transition duration-300 p-6 border border-neutral-200 dark:border-neutral-700 relative overflow-hidden">
                <div
                    class="absolute inset-0 bg-gradient-to-br from-orange-600/5 to-orange-600/0 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                </div>
                <div
                    class="w-12 h-12 flex items-center justify-center rounded-full bg-orange-100 dark:bg-orange-900/30 text-orange-600 mb-6 relative">
                    <i class="fa fa-bolt"></i>
                </div>
                <h3 class="text-xl font-semibold text-neutral-800 dark:text-neutral-100 mb-3">Lightning Fast
                </h3>
                <p class="text-neutral-600 dark:text-neutral-400 mb-4">Built on CodeIgniter's lightweight
                    framework for optimal performance and speed.</p>
                <ul class="text-sm text-neutral-600 dark:text-neutral-400 space-y-2">
                    <li class="flex items-center">
                        <i class="fa fa-check text-green-500 mr-2"></i>

                        Minimized build sizes
                    </li>
                    <li class="flex items-center">
                        <i class="fa fa-check text-green-500 mr-2"></i>

                        Smart caching mechanisms
                    </li>
                    <li class="flex items-center">
                        <i class="fa fa-check text-green-500 mr-2"></i>

                        Efficient resource loading
                    </li>
                </ul>
            </div>


            <div
                class="group bg-white dark:bg-neutral-800 rounded-xl shadow-md hover:shadow-xl transition duration-300 p-6 border border-neutral-200 dark:border-neutral-700 relative overflow-hidden">
                <div
                    class="absolute inset-0 bg-gradient-to-br from-orange-600/5 to-orange-600/0 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                </div>
                <div
                    class="w-12 h-12 flex items-center justify-center rounded-full bg-orange-100 dark:bg-orange-900/30 text-orange-600 mb-6">
                    <i class="fa fa-mobile "></i>

                </div>
                <h3 class="text-xl font-semibold text-neutral-800 dark:text-neutral-100 mb-3">Modern Design
                </h3>
                <p class="text-neutral-600 dark:text-neutral-400 mb-4">Styled with Tailwind CSS v4 for a clean,
                    responsive, and customizable interface.</p>
                <ul class="text-sm text-neutral-600 dark:text-neutral-400 space-y-2">
                    <li class="flex items-center">
                        <i class="fa fa-check text-green-500 mr-2"></i>

                        Dark mode support
                    </li>
                    <li class="flex items-center">
                        <i class="fa fa-check text-green-500 mr-2"></i>

                        Accessibility-focused components
                    </li>
                    <li class="flex items-center">
                        <i class="fa fa-check text-green-500 mr-2"></i>

                        Responsive across all devices
                    </li>
                </ul>
            </div>


            <div
                class="group bg-white dark:bg-neutral-800 rounded-xl shadow-md hover:shadow-xl transition duration-300 p-6 border border-neutral-200 dark:border-neutral-700 relative overflow-hidden">
                <div
                    class="absolute inset-0 bg-gradient-to-br from-orange-600/5 to-orange-600/0 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                </div>
                <div
                    class="w-12 h-12 flex items-center justify-center rounded-full bg-orange-100 dark:bg-orange-900/30 text-orange-600 mb-6">
                    <i class="fa fa-code"></i>

                </div>
                <h3 class="text-xl font-semibold text-neutral-800 dark:text-neutral-100 mb-3">Developer
                    Friendly</h3>
                <p class="text-neutral-600 dark:text-neutral-400 mb-4">Intuitive architecture and well-documented
                    codebase for rapid development.</p>
                <ul class="text-sm text-neutral-600 dark:text-neutral-400 space-y-2">
                    <li class="flex items-center">
                        <i class="fa fa-check text-green-500 mr-2"></i>

                        Hot module replacement
                    </li>
                    <li class="flex items-center">
                        <i class="fa fa-check text-green-500 mr-2"></i>

                        Easy-to-follow conventions
                    </li>
                    <li class="flex items-center">
                        <i class="fa fa-check text-green-500 mr-2"></i>

                        Comprehensive documentation
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="py-16 bg-neutral-50 dark:bg-neutral-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl font-bold text-neutral-800 dark:text-neutral-100">How It Works</h2>
            <p class="mt-4 text-xl text-neutral-600 dark:text-neutral-400">A seamless development workflow from setup to
                deployment</p>
        </div>

        <div class="relative">
            <div
                class="absolute left-1/2 top-0 bottom-0 w-1 bg-orange-600/30 dark:bg-orange-600/10 -translate-x-1/2 hidden md:block max-h-[85%]">
            </div>

            <div class="space-y-16">

                <div class="relative">
                    <div class="flex flex-col md:flex-row items-center">
                        <div class="md:w-1/2 mb-6 md:mb-0 md:pr-12 text-center md:text-right">
                            <span
                                class="inline-block text-xs font-semibold text-orange-600 dark:text-orange-500 tracking-wider uppercase mb-1">Step
                                One</span>
                            <h3 class="text-2xl font-semibold text-neutral-800 dark:text-neutral-100 mb-3">Quick
                                Installation</h3>
                            <p class="text-neutral-600 dark:text-neutral-400">Clone the repository and install
                                dependencies with just a few commands. Our streamlined setup gets you up and running in
                                minutes.</p>
                        </div>

                        <div
                            class="absolute left-1/2 top-0 -translate-x-1/2 w-12 h-12 rounded-full bg-orange-600 text-white flex items-center justify-center font-bold z-10 shadow-lg hidden md:flex">
                            1</div>

                        <div class="md:w-1/2 md:pl-12">
                            <div
                                class="bg-white dark:bg-neutral-800 rounded-lg p-5 shadow-md border border-neutral-100 dark:border-neutral-700 transform transition-transform hover:scale-105">
                                <div class="flex items-center mb-3">
                                    <div class="flex space-x-1.5">
                                        <div class="w-3 h-3 rounded-full bg-red-500"></div>
                                        <div class="w-3 h-3 rounded-full bg-yellow-500"></div>
                                        <div class="w-3 h-3 rounded-full bg-green-500"></div>
                                    </div>
                                    <div class="ml-2 text-xs text-neutral-500 dark:text-neutral-400">Terminal</div>
                                </div>
                                <pre class="text-sm overflow-x-auto p-2 bg-neutral-50 dark:bg-neutral-900 rounded"><code class="language-bash text-neutral-700 dark:text-neutral-300">git clone https://github.com/cojocaru-david/tailCi.git
cd tailCi
composer install
npm install
npm run build</code></pre>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="relative">
                    <div class="flex flex-col md:flex-row items-center">
                        <div class="w-full md:w-1/2 mb-6 md:mb-0 md:pl-12 md:order-2 text-center md:text-left">
                            <span
                                class="inline-block text-xs font-semibold text-orange-600 dark:text-orange-500 tracking-wider uppercase mb-1">Step
                                Two</span>
                            <h3 class="text-2xl font-semibold text-neutral-800 dark:text-neutral-100 mb-3">Configure
                                Your App</h3>
                            <p class="text-neutral-600 dark:text-neutral-400">Set up your environment and database
                                connections with ease. Our intuitive configuration system makes setup a breeze for
                                developers of all experience levels.</p>
                        </div>

                        <div
                            class="absolute left-1/2 top-0 -translate-x-1/2 w-12 h-12 rounded-full bg-orange-600 text-white flex items-center justify-center font-bold z-10 shadow-lg hidden md:flex">
                            2</div>

                        <div class="w-full md:w-1/2 md:pr-12 md:order-1">
                            <div
                                class="bg-white dark:bg-neutral-800 rounded-lg p-5 shadow-md border border-neutral-100 dark:border-neutral-700 transform transition-transform hover:scale-105">
                                <div class="flex items-center mb-3">
                                    <div class="flex space-x-1.5">
                                        <div class="w-3 h-3 rounded-full bg-red-500"></div>
                                        <div class="w-3 h-3 rounded-full bg-yellow-500"></div>
                                        <div class="w-3 h-3 rounded-full bg-green-500"></div>
                                    </div>
                                    <div class="ml-2 text-xs text-neutral-500 dark:text-neutral-400">Terminal</div>
                                </div>
                                <pre class="text-sm overflow-x-auto p-2 bg-neutral-50 dark:bg-neutral-900 rounded"><code class="language-bash text-neutral-700 dark:text-neutral-300">cp .env.example .env
# Edit your database configuration
php spark migrate
php spark db:seed
php spark serve</code></pre>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="relative">
                    <div class="flex flex-col md:flex-row items-center">
                        <div class="w-full md:w-1/2 mb-6 md:mb-0 md:pr-12 text-center md:text-right">
                            <span
                                class="inline-block text-xs font-semibold text-orange-600 dark:text-orange-500 tracking-wider uppercase mb-1">Step
                                Three</span>
                            <h3 class="text-2xl font-semibold text-neutral-800 dark:text-neutral-100 mb-3">Start
                                Building</h3>
                            <p class="text-neutral-600 dark:text-neutral-400">Create beautiful views with Tailwind CSS
                                and powerful controllers with CodeIgniter. Our integrated approach combines the best of
                                both frameworks for rapid development.</p>
                        </div>

                        <div
                            class="absolute left-1/2 top-0 -translate-x-1/2 w-12 h-12 rounded-full bg-orange-600 text-white flex items-center justify-center font-bold z-10 shadow-lg hidden md:flex">
                            3</div>

                        <div class="w-full md:w-1/2 md:pl-12">
                            <div
                                class="bg-white dark:bg-neutral-800 rounded-lg p-5 shadow-md border border-neutral-100 dark:border-neutral-700 transform transition-transform hover:scale-105">
                                <div class="flex flex-col space-y-4">
                                    <div>
                                        <div class="flex items-center mb-2">
                                            <div class="flex space-x-1.5">
                                                <div class="w-3 h-3 rounded-full bg-red-500"></div>
                                                <div class="w-3 h-3 rounded-full bg-yellow-500"></div>
                                                <div class="w-3 h-3 rounded-full bg-green-500"></div>
                                            </div>
                                            <div class="ml-2 text-xs text-neutral-500 dark:text-neutral-400">
                                                app/Controllers/Home.php</div>
                                        </div>
                                        <pre
                                            class="text-sm overflow-x-auto p-2 bg-neutral-50 dark:bg-neutral-900 rounded"><code class="language-php text-neutral-700 dark:text-neutral-300">public function about() {
    $data = [
        'title' => 'About Us',
        'team' => $this->teamModel->findAll()
    ];
    return view('pages/about', $data);
}</code></pre>
                                    </div>
                                    <div>
                                        <div class="flex items-center mb-2">
                                            <div class="flex space-x-1.5">
                                                <div class="w-3 h-3 rounded-full bg-red-500"></div>
                                                <div class="w-3 h-3 rounded-full bg-yellow-500"></div>
                                                <div class="w-3 h-3 rounded-full bg-green-500"></div>
                                            </div>
                                            <div class="ml-2 text-xs text-neutral-500 dark:text-neutral-400">
                                                app/Views/pages/about.php</div>
                                        </div>
                                        <pre
                                            class="text-sm overflow-x-auto p-2 bg-neutral-50 dark:bg-neutral-900 rounded"><code class="language-html text-neutral-700 dark:text-neutral-300">&lt;div class="container mx-auto py-8"&gt;
    &lt;h1 class="text-3xl font-bold mb-6"&gt;<?= $title ?>&lt;/h1&gt;
    &lt;div class="grid grid-cols-1 md:grid-cols-3 gap-6"&gt;
        &lt;?php foreach($team as $member): ?&gt;
            &lt;div class="bg-white p-4 rounded-lg shadow"&gt;
                &lt;h3 class="text-xl font-semibold"&gt;
                    &lt;?= $member['name'] ?&gt;
                &lt;/h3&gt;
            &lt;/div&gt;
        &lt;?php endforeach; ?&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="relative">
                    <div class="flex flex-col md:flex-row items-center">
                        <div class="w-full md:w-1/2 md:pr-12">
                            <div
                                class="bg-white dark:bg-neutral-800 rounded-lg p-5 shadow-md border border-neutral-100 dark:border-neutral-700 transform transition-transform hover:scale-105">
                                <div class="flex flex-col space-y-4">
                                    <div class="flex items-start">
                                        <i class="fas fa-folder-plus text-blue-500 text-2xl mt-1"></i>
                                        <div class="ml-3">
                                            <h4 class="font-medium text-neutral-800 dark:text-neutral-200">Comprehensive
                                                Documentation</h4>
                                            <p class="text-sm text-neutral-600 dark:text-neutral-400">Access extensive
                                                documentation covering everything from basic setup to advanced
                                                customization.</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <i class="fas fa-check text-green-500 text-2xl mt-1"></i>
                                        <div class="ml-3">
                                            <h4 class="font-medium text-neutral-800 dark:text-neutral-200">Regular
                                                Updates</h4>
                                            <p class="text-sm text-neutral-600 dark:text-neutral-400">Stay current with
                                                security patches and new features through our regular update cycle.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="w-full md:w-1/2 mb-6 md:mb-0 md:pl-12 text-center md:text-left">
                            <span
                                class="inline-block text-xs font-semibold text-orange-600 dark:text-orange-500 tracking-wider uppercase mb-1">Step
                                Five</span>
                            <h3 class="text-2xl font-semibold text-neutral-800 dark:text-neutral-100 mb-3">Maintain &
                                Scale</h3>
                            <p class="text-neutral-600 dark:text-neutral-400">Easily maintain and scale your application
                                with our comprehensive documentation and Regular updates
                                ensure security and performance.</p>
                        </div>

                        <div
                            class="absolute left-1/2 top-0 -translate-x-1/2 w-12 h-12 rounded-full bg-orange-600 text-white flex items-center justify-center font-bold z-10 shadow-lg hidden md:flex">
                            5</div>
                    </div>
                </div>
            </div>


            <div class="mt-20 text-center">
                <h3 class="text-2xl font-bold text-neutral-800 dark:text-neutral-100 mb-4">Ready to Get Started?</h3>
                <p class="text-neutral-600 dark:text-neutral-400 max-w-2xl mx-auto mb-6">Take part in building modern
                    web applications with TailCI's powerful integration of Tailwind CSS and CodeIgniter.</p>
                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    <a href="https://github.com/cojocaru-david/tailCi" target="_blank" role="link"
                        aria-label="TailCI Repository"
                        class="inline-flex items-center justify-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-orange-600 hover:bg-orange-700 transition-colors">
                        <i class="fas fa-download mr-2 text-white"></i>
                        Download Starter Kit
                    </a>
                    <a href="https://github.com/cojocaru-david/tailCi/tree/master?tab=readme-ov-file#installation"
                        target="_blank" role="link" aria-label="TailCI Repository"
                        class="inline-flex items-center justify-center px-6 py-3 border border-neutral-300 dark:border-neutral-700 text-base font-medium rounded-md text-neutral-700 dark:text-neutral-300 bg-white dark:bg-neutral-800 hover:bg-neutral-50 dark:hover:bg-neutral-700 transition-colors">
                        <i class="fas fa-book-open mr-2 text-neutral-700 dark:text-neutral-300"></i>
                        Read Documentation
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $this->endSection(); ?>