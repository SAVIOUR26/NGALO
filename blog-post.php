<?php
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/icons.php';

$slug = $_GET['slug'] ?? '';
$post = null;
foreach ($GLOBALS['blog_posts'] as $p) {
    if ($p['slug'] === $slug) { $post = $p; break; }
}

if (!$post) {
    header('HTTP/1.1 404 Not Found');
    $page_title = 'Post Not Found | ' . SITE_NAME;
    require_once __DIR__ . '/includes/header.php';
    echo '<section class="section"><div class="container" style="text-align:center;padding:4rem 0;">';
    echo '<h1>Post Not Found</h1><p>Sorry, we couldn\'t find that article.</p>';
    echo '<a class="btn btn-primary" href="/blog">Back to Blog</a></div></section>';
    require_once __DIR__ . '/includes/footer.php';
    exit;
}

$page_title = $post['title'] . ' | ' . SITE_NAME . ' Blog';
$meta_description = $post['excerpt'];

require_once __DIR__ . '/includes/header.php';

$others = array_filter($GLOBALS['blog_posts'], fn($p) => $p['slug'] !== $slug);
$others = array_slice($others, 0, 2);
?>

<section class="page-hero">
    <div class="page-hero-media"><img src="<?php echo $post['image']; ?>" alt="<?php echo htmlspecialchars($post['title']); ?>"></div>
    <div class="container page-hero-content reveal">
        <p class="eyebrow"><a href="/blog" class="crumb-link">Blog</a> / Article</p>
        <h1><?php echo htmlspecialchars($post['title']); ?></h1>
        <p class="post-meta-line"><?php echo icon('calendar'); ?><?php echo date('F j, Y', strtotime($post['date'])); ?> &nbsp;&middot;&nbsp; By <?php echo htmlspecialchars($post['author']); ?></p>
    </div>
</section>

<section class="section">
    <div class="container post-single-grid">
        <article class="post-single reveal">
            <?php echo $post['body']; ?>

            <div class="post-share">
                <span>Enjoyed this? Talk to us:</span>
                <a href="https://wa.me/<?php echo CONTACT_WHATSAPP; ?>" class="btn btn-primary btn-sm" target="_blank" rel="noopener"><?php echo icon('whatsapp'); ?> WhatsApp Us</a>
            </div>
        </article>

        <aside class="post-sidebar reveal">
            <div class="sidebar-card">
                <h4>Need a service?</h4>
                <p>Book a workshop or at-home repair, or ask us about bike sales, rentals and tours.</p>
                <a href="/#contact" class="btn btn-outline btn-block">Contact Us</a>
            </div>
            <div class="sidebar-card">
                <h4>More Reading</h4>
                <ul class="sidebar-list">
                    <?php foreach ($others as $o): ?>
                    <li>
                        <a href="/blog/<?php echo urlencode($o['slug']); ?>">
                            <img src="<?php echo $o['image']; ?>" alt="">
                            <span><?php echo htmlspecialchars($o['title']); ?></span>
                        </a>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </aside>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
