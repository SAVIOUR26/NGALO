<?php
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/icons.php';

$page_title = 'Packages & Booking | ' . SITE_NAME;
$meta_description = 'Book at-home bike service, cycling lessons or a guided cycling experience with Ngalo Mobile Cycling Services in Kampala — packages, pricing and what\'s included.';

require_once __DIR__ . '/includes/header.php';

$lesson = $GLOBALS['lesson_package'];
$tours  = $GLOBALS['tour_packages'];
?>

<section class="page-hero">
    <div class="page-hero-media"><img src="/assets/img/service-tours.jpg" alt="Ngalo guided cycling tour on a dirt trail"></div>
    <div class="container page-hero-content reveal">
        <p class="eyebrow">Book With Us</p>
        <h1>Packages &amp; Appointments</h1>
        <p>At-home bike service, structured cycling lessons, and guided cycling experiences around Kampala — pick what you need and book on WhatsApp.</p>
    </div>
</section>

<!-- ============ QUICK PICK ============ -->
<section class="section">
    <div class="container">
        <div class="appt-grid">
            <?php foreach ($GLOBALS['appointments'] as $i => $a): ?>
            <article class="appt-card reveal" style="transition-delay:<?php echo $i * 90; ?>ms">
                <span class="appt-icon"><?php echo icon($a['icon']); ?></span>
                <h3><?php echo htmlspecialchars($a['title']); ?></h3>
                <p><?php echo htmlspecialchars($a['desc']); ?></p>
                <a href="#<?php echo $a['slug']; ?>" class="btn btn-outline btn-block">See Details</a>
            </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ============ AT-HOME BIKE SERVICE ============ -->
<section class="section alt-bg" id="at-home-service">
    <div class="container">
        <div class="about-grid">
            <div class="about-media reveal">
                <img src="/assets/img/service-home-repair.jpg" alt="Mechanic carrying out an at-home bicycle repair" loading="lazy">
                <div class="about-media-badge">
                    <?php echo icon('home'); ?>
                    <div><strong>We Come</strong><span>To You</span></div>
                </div>
            </div>
            <div class="about-copy reveal">
                <p class="eyebrow">Appointment</p>
                <h2>At-Home Bike Service</h2>
                <p>Skip the trip to the workshop. Book a visit and one of our mechanics comes to your home or office with the tools and spares needed to handle most repairs and tune-ups on the spot.</p>
                <p>There's no fixed package here — every bike and every job is different, so we quote you once we know what it needs. Tell us the issue on WhatsApp and we'll confirm a time and a price before we come.</p>
                <div class="about-actions">
                    <a href="https://wa.me/<?php echo CONTACT_WHATSAPP; ?>?text=Hi%20Ngalo%2C%20I%27d%20like%20to%20book%20an%20at-home%20bike%20service%20visit." class="btn btn-primary" target="_blank" rel="noopener"><?php echo icon('whatsapp'); ?> Book a Visit</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============ CYCLING LESSONS ============ -->
<section class="section" id="lessons">
    <div class="container">
        <div class="section-head reveal">
            <p class="eyebrow">Package</p>
            <h2>Cycling Lessons</h2>
            <p class="section-lead"><?php echo htmlspecialchars($lesson['tagline']); ?></p>
        </div>
        <div class="lesson-package reveal">
            <div class="lesson-media">
                <img src="<?php echo $lesson['image']; ?>" alt="Cycling lesson in progress" loading="lazy">
            </div>
            <div class="lesson-details">
                <div class="lesson-price-row">
                    <div class="lesson-price"><?php echo htmlspecialchars($lesson['price']); ?></div>
                    <div class="lesson-duration"><?php echo icon('calendar'); ?> <?php echo htmlspecialchars($lesson['duration']); ?></div>
                </div>
                <div class="lesson-cols">
                    <div>
                        <h4>Includes</h4>
                        <ul class="check-list">
                            <?php foreach ($lesson['includes'] as $item): ?>
                            <li><?php echo icon('check'); ?> <?php echo htmlspecialchars($item); ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <div>
                        <h4>Benefits</h4>
                        <ul class="check-list">
                            <?php foreach ($lesson['benefits'] as $item): ?>
                            <li><?php echo icon('star'); ?> <?php echo htmlspecialchars($item); ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
                <a href="https://wa.me/<?php echo CONTACT_WHATSAPP; ?>?text=Hi%20Ngalo%2C%20I%27d%20like%20to%20book%20the%20Cycling%20Lessons%20package." class="btn btn-primary btn-block" target="_blank" rel="noopener"><?php echo icon('whatsapp'); ?> Book This Package</a>
            </div>
        </div>
    </div>
</section>

<!-- ============ GUIDED CYCLING EXPERIENCES ============ -->
<section class="section alt-bg" id="experiences">
    <div class="container">
        <div class="section-head reveal">
            <p class="eyebrow">Guided Tours</p>
            <h2>Cycling Experiences</h2>
            <p class="section-lead">Guided rides around Kampala and beyond, each with an English-speaking guide, technical support and full safety gear.</p>
        </div>
        <div class="card-grid">
            <?php foreach ($tours as $i => $t): ?>
            <article class="tour-card reveal" style="transition-delay:<?php echo ($i % 3) * 90; ?>ms">
                <div class="tour-card-img">
                    <img src="<?php echo $t['image']; ?>" alt="<?php echo htmlspecialchars($t['title']); ?>" loading="lazy">
                    <span class="tour-fee"><?php echo htmlspecialchars($t['fee']); ?></span>
                </div>
                <div class="tour-card-body">
                    <h3><?php echo htmlspecialchars($t['title']); ?></h3>
                    <p class="event-meta"><?php echo icon('clock'); ?><?php echo htmlspecialchars($t['duration']); ?></p>
                    <p class="event-meta"><?php echo icon('pin'); ?><?php echo htmlspecialchars($t['meet']); ?></p>
                    <p><?php echo htmlspecialchars($t['desc']); ?></p>
                    <ul class="tour-includes">
                        <?php foreach ($t['includes'] as $item): ?>
                        <li><?php echo icon('check'); ?> <?php echo htmlspecialchars($item); ?></li>
                        <?php endforeach; ?>
                    </ul>
                    <a href="https://wa.me/<?php echo CONTACT_WHATSAPP; ?>?text=Hi%20Ngalo%2C%20I%27d%20like%20to%20book%20the%20%22<?php echo urlencode($t['title']); ?>%22%20tour." class="btn btn-primary btn-block" target="_blank" rel="noopener"><?php echo icon('whatsapp'); ?> Book This Tour</a>
                </div>
            </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
