<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title . ' - TailCI' ?? 'TailCI') ?></title>
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="<?= site_url(uri_string()); ?>">
    <meta property="og:url" content="<?= site_url(uri_string()); ?>">
    <meta property="og:title" content="<?= esc($title . ' - TailCI' ?? 'TailCI') ?>">
    <meta name="twitter:title" content="<?= esc($title . ' - TailCI' ?? 'TailCI') ?>">
    <meta name="twitter:card" content="summary_large_image">
    <?= $this->renderSection('head') ?>
    <link rel="icon" type="image/png" href="/favicons/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="/favicons/favicon.svg" />
    <link rel="shortcut icon" href="/favicons/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="/favicons/apple-touch-icon.png" />
    <meta name="apple-mobile-web-app-title" content="TailCI" />
    <link rel="manifest" href="/favicons/site.webmanifest" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/output.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body
    class="min-h-screen bg-neutral-50 dark:bg-neutral-900 selection:text-white selection:bg-orange-500 font-sans flex flex-col">
    <?= $this->include('Utils/navbar') ?>

    <main class="flex-grow w-full mx-auto">
        <?= $this->renderSection('content') ?>
    </main>

    <?= $this->include('Utils/footer') ?>

    <?php if (ENVIRONMENT == 'development'): ?>
        <script>
            (function () {
                const ws = new WebSocket("ws://localhost:35729");

                ws.onopen = () => console.log("LiveReload connected.");
                ws.onerror = (error) => console.error("LiveReload error:", error);
                ws.onclose = () => location.reload();
                ws.onmessage = () => location.reload();
            })();
        </script>
    <?php endif; ?>

    <script src="/assets/js/output.js"></script>
    <?= $this->renderSection('footer') ?>
</body>

</html>