<?php
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/icons.php';

$page_title = 'Blog | ' . SITE_NAME;
$meta_description = 'Cycling tips, maintenance advice and stories from Ngalo Mobile Cycling Services in Kampala, Uganda.';

require_once __DIR__ . '/includes/header.php';

$posts = $GLOBALS['blog_posts'];
usort($posts, fn($a, $b) => strtotime($b['date']) <=> strtotime($a['date']));
?>

<section class="page-hero">
    <div class="page-hero-media"><img src="assets/img/service-workshop-repair.jpg" alt="Ngalo workshop"></div>
    <div class="container page-hero-content reveal">
        <p class="eyebrow">The Ngalo Blog</p>
        <h1>Tips, Stories &amp; Rides</h1>
        <p>Maintenance advice, service updates and stories from the road.</p>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="card-grid">
            <?php foreach ($posts as $i => $post): ?>
            <article class="post-card reveal" style="transition-delay:<?php echo ($i % 3) * 90; ?>ms">
                <a href="blog-post.php?slug=<?php echo urlencode($post['slug']); ?>" class="post-card-img">
                    <img src="<?php echo $post['image']; ?>" alt="<?php echo htmlspecialchars($post['title']); ?>" loading="lazy">
                </a>
                <div class="post-card-body">
                    <span class="post-date"><?php echo icon('calendar'); ?><?php echo date('F j, Y', strtotime($post['date'])); ?></span>
                    <h3><a href="blog-post.php?slug=<?php echo urlencode($post['slug']); ?>"><?php echo htmlspecialchars($post['title']); ?></a></h3>
                    <p><?php echo htmlspecialchars($post['excerpt']); ?></p>
                    <a href="blog-post.php?slug=<?php echo urlencode($post['slug']); ?>" class="service-link">Read More <?php echo icon('arrow-right'); ?></a>
                </div>
            </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
