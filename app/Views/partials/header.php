<?php
$currentPath = trim(uri_string(), '/');
$navItems = [
    ['label' => 'Home', 'path' => '', 'href' => site_url('/')],
    ['label' => 'Shop', 'path' => 'shop', 'href' => site_url('shop')],
    ['label' => 'About', 'path' => 'about', 'href' => site_url('about')],
    ['label' => 'Customers', 'path' => 'customers', 'href' => site_url('customers')],
    ['label' => 'Team', 'path' => 'users', 'href' => site_url('users')],
];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#f5f2ea">
    <title><?= esc($title) ?> · Rally Supply</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Mono:wght@400;500&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/css/store.css') ?>">
</head>
<body>
<div class="topline"><span>Built around good games</span><span>PLAY MORE. FIND YOUR EDGE. <b>✳</b></span></div>

<header class="site-header">
    <?= view('partials/brand') ?>
    <nav class="main-nav" aria-label="Main navigation">
        <?php foreach ($navItems as $item): ?>
            <a
                href="<?= esc($item['href']) ?>"
                class="<?= $currentPath === $item['path'] ? 'is-active' : '' ?>"
                <?= $currentPath === $item['path'] ? 'aria-current="page"' : '' ?>
            >
                <?= esc($item['label']) ?>
            </a>
        <?php endforeach ?>
    </nav>
    <a class="header-cta" href="<?= site_url('shop') ?>">Shop the collection <span>↗</span></a>
</header>

<main>
