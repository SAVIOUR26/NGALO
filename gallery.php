<?php
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/icons.php';

$page_title = 'Gallery | ' . SITE_NAME;
$meta_description = 'Photos from Ngalo Mobile Cycling Services — our workshop, our bikes, our team, and the riders and tours we get to be part of in Kampala.';

require_once __DIR__ . '/includes/header.php';
?>

<section class="page-hero">
    <div class="page-hero-media"><img src="/assets/img/gallery/photo-24.jpg" alt="Group of riders outside the Ngalo shopfront"></div>
    <div class="container page-hero-content reveal">
        <p class="eyebrow">In The Field</p>
        <h1>Gallery</h1>
        <p>Our workshop, our bikes, and the riders we get to share the road with.</p>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="full-gallery-grid">
            <?php foreach ($GLOBALS['gallery_photos'] as $i => $g): ?>
            <button type="button" class="gallery-item reveal" data-full="<?php echo $g['src']; ?>" data-caption="<?php echo htmlspecialchars($g['alt']); ?>" style="transition-delay:<?php echo ($i % 8) * 50; ?>ms">
                <img src="<?php echo $g['src']; ?>" alt="<?php echo htmlspecialchars($g['alt']); ?>" loading="lazy">
                <span class="gallery-zoom"><?php echo icon('map'); ?></span>
            </button>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
