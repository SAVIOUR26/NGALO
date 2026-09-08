<?php if (!defined('SITE_NAME')) { require_once __DIR__ . '/config.php'; require_once __DIR__ . '/icons.php'; } ?>
<footer class="site-footer">
    <div class="container footer-grid">
        <div class="footer-col footer-brand">
            <a href="/" class="brand">
                <img src="/assets/img/logo.jpg" alt="<?php echo SITE_NAME; ?> logo" class="brand-logo">
                <span class="brand-text">
                    <span class="brand-name">Ngalo</span>
                    <span class="brand-sub">Mobile Cycling Services</span>
                </span>
            </a>
            <p><?php echo SITE_DESCRIPTION; ?></p>
            <div class="footer-social">
                <a href="<?php echo SOCIAL_FACEBOOK; ?>" aria-label="Facebook" target="_blank" rel="noopener"><?php echo icon('facebook'); ?></a>
                <a href="<?php echo SOCIAL_INSTAGRAM; ?>" aria-label="Instagram" target="_blank" rel="noopener"><?php echo icon('instagram'); ?></a>
                <a href="<?php echo SOCIAL_TWITTER; ?>" aria-label="X (Twitter)" target="_blank" rel="noopener"><?php echo icon('twitter'); ?></a>
                <a href="<?php echo SOCIAL_TIKTOK; ?>" aria-label="TikTok" target="_blank" rel="noopener"><?php echo icon('tiktok'); ?></a>
                <a href="https://wa.me/<?php echo CONTACT_WHATSAPP; ?>" aria-label="WhatsApp" target="_blank" rel="noopener"><?php echo icon('whatsapp'); ?></a>
            </div>
        </div>

        <div class="footer-col">
            <h4>Quick Links</h4>
            <ul class="footer-links">
                <li><a href="/">Home</a></li>
                <li><a href="/#about">About Us</a></li>
                <li><a href="/#services">Services</a></li>
                <li><a href="/packages">Packages</a></li>
                <li><a href="/gallery">Gallery</a></li>
                <li><a href="/blog">Blog</a></li>
                <li><a href="/events">Events</a></li>
                <li><a href="/#contact">Contact</a></li>
            </ul>
        </div>

        <div class="footer-col">
            <h4>Our Services</h4>
            <ul class="footer-links">
                <?php foreach ($GLOBALS['services'] as $s): ?>
                <li><a href="/#services"><?php echo htmlspecialchars($s['title']); ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>

        <div class="footer-col">
            <h4>Get In Touch</h4>
            <ul class="footer-contact">
                <li><?php echo icon('pin'); ?><span><?php echo CONTACT_ADDRESS; ?></span></li>
                <li><?php echo icon('phone'); ?><span><a href="tel:<?php echo str_replace(' ', '', CONTACT_PHONE_1); ?>"><?php echo CONTACT_PHONE_1; ?></a><br><a href="tel:<?php echo str_replace(' ', '', CONTACT_PHONE_2); ?>"><?php echo CONTACT_PHONE_2; ?></a></span></li>
                <li><?php echo icon('mail'); ?><span><a href="mailto:<?php echo CONTACT_EMAIL; ?>"><?php echo CONTACT_EMAIL; ?></a></span></li>
                <li><?php echo icon('clock'); ?><span>Mon – Sat: 8:00 AM – 6:00 PM</span></li>
            </ul>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container footer-bottom-inner">
            <p>&copy; <?php echo date('Y'); ?> <?php echo SITE_NAME; ?>. All rights reserved.</p>
            <p class="footer-tagline">"<?php echo SITE_TAGLINE; ?>"</p>
        </div>
    </div>
</footer>

<?php require_once __DIR__ . '/whatsapp-button.php'; ?>

<button id="back-to-top" aria-label="Back to top">
    <?php echo icon('chevron', 'icon'); ?>
</button>

<script src="/assets/js/main.js"></script>
</body>
</html>
