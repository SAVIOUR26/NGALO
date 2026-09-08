<?php
if (!defined('SITE_NAME')) {
    require_once __DIR__ . '/config.php';
}
require_once __DIR__ . '/icons.php';
$page_title = $page_title ?? SITE_NAME . ' | ' . SITE_TAGLINE;
$meta_description = $meta_description ?? SITE_DESCRIPTION;

// Slug of the PHP script actually running, regardless of the pretty URL
// (e.g. /blog or /blog/some-post) that mod_rewrite mapped to it.
$script_slug = preg_replace('/\.php$/', '', basename($_SERVER['PHP_SELF']));
if ($script_slug === 'index') { $script_slug = ''; }
if ($script_slug === 'blog-post') { $script_slug = 'blog'; }
?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo htmlspecialchars($page_title); ?></title>
<meta name="description" content="<?php echo htmlspecialchars($meta_description); ?>">
<meta name="theme-color" content="#0f2a4a">

<meta property="og:title" content="<?php echo htmlspecialchars($page_title); ?>">
<meta property="og:description" content="<?php echo htmlspecialchars($meta_description); ?>">
<meta property="og:type" content="website">
<meta property="og:image" content="<?php echo SITE_URL; ?>/assets/img/hero.jpg">

<link rel="icon" type="image/jpeg" href="/assets/img/logo.jpg">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600;700;800&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>

<div class="topbar">
    <div class="container topbar-inner">
        <div class="topbar-contact">
            <a href="tel:<?php echo str_replace(' ', '', CONTACT_PHONE_1); ?>"><?php echo icon('phone'); ?><?php echo CONTACT_PHONE_1; ?></a>
            <a href="mailto:<?php echo CONTACT_EMAIL; ?>" class="topbar-email"><?php echo icon('mail'); ?><?php echo CONTACT_EMAIL; ?></a>
        </div>
        <div class="topbar-social">
            <a href="<?php echo SOCIAL_FACEBOOK; ?>" aria-label="Facebook" target="_blank" rel="noopener"><?php echo icon('facebook'); ?></a>
            <a href="<?php echo SOCIAL_INSTAGRAM; ?>" aria-label="Instagram" target="_blank" rel="noopener"><?php echo icon('instagram'); ?></a>
            <a href="<?php echo SOCIAL_TWITTER; ?>" aria-label="X (Twitter)" target="_blank" rel="noopener"><?php echo icon('twitter'); ?></a>
            <a href="<?php echo SOCIAL_TIKTOK; ?>" aria-label="TikTok" target="_blank" rel="noopener"><?php echo icon('tiktok'); ?></a>
        </div>
    </div>
</div>

<header class="site-header" id="site-header">
    <div class="container header-inner">
        <a href="/" class="brand">
            <img src="/assets/img/logo.jpg" alt="<?php echo SITE_NAME; ?> logo" class="brand-logo">
            <span class="brand-text">
                <span class="brand-name">Ngalo</span>
                <span class="brand-sub">Mobile Cycling Services</span>
            </span>
        </a>

        <nav class="main-nav" id="main-nav" aria-label="Primary">
            <div class="main-nav-head">
                <span class="main-nav-title">Menu</span>
                <button class="nav-close" id="nav-close" aria-label="Close menu">
                    <?php echo icon('close'); ?>
                </button>
            </div>
            <ul>
                <?php foreach ($GLOBALS['nav_links'] as $href => $label):
                    // Same-page anchors (e.g. /#services) never get the "current
                    // page" highlight — only a real page href (/, /blog, /events) can.
                    $has_anchor = (strpos($href, '#') !== false);
                    $href_slug = trim(explode('#', $href)[0], '/');
                    $is_current = (!$has_anchor && $href_slug === $script_slug);
                ?>
                <li><a href="<?php echo $href; ?>" class="<?php echo $is_current ? 'active' : ''; ?>"><?php echo $label; ?></a></li>
                <?php endforeach; ?>
            </ul>
            <div class="nav-drawer-cta">
                <a href="https://wa.me/<?php echo CONTACT_WHATSAPP; ?>?text=Hi%20Ngalo%2C%20I%27d%20like%20to%20ask%20about..." class="btn btn-whatsapp btn-block" target="_blank" rel="noopener">
                    <?php echo icon('whatsapp'); ?> Chat on WhatsApp
                </a>
                <a href="tel:<?php echo str_replace(' ', '', CONTACT_PHONE_1); ?>" class="nav-drawer-phone">
                    <?php echo icon('phone'); ?> <?php echo CONTACT_PHONE_1; ?>
                </a>
            </div>
        </nav>

        <a href="https://wa.me/<?php echo CONTACT_WHATSAPP; ?>?text=Hi%20Ngalo%2C%20I%27d%20like%20to%20ask%20about..." class="btn btn-whatsapp header-cta" target="_blank" rel="noopener">
            <?php echo icon('whatsapp'); ?> Chat on WhatsApp
        </a>

        <button class="nav-toggle" id="nav-toggle" aria-label="Open menu" aria-expanded="false" aria-controls="main-nav">
            <span></span><span></span><span></span>
        </button>
    </div>
</header>

<div class="nav-backdrop" id="nav-backdrop"></div>
