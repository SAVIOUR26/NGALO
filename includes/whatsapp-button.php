<?php if (!defined('SITE_NAME')) { require_once __DIR__ . '/config.php'; require_once __DIR__ . '/icons.php'; } ?>
<a href="https://wa.me/<?php echo CONTACT_WHATSAPP; ?>?text=Hi%20Ngalo%2C%20I%27d%20like%20to%20ask%20about..."
   class="whatsapp-float" target="_blank" rel="noopener" aria-label="Chat with us on WhatsApp">
    <?php echo icon('whatsapp', 'icon icon-lg'); ?>
    <span class="whatsapp-float-pulse"></span>
</a>
