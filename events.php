<?php
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/icons.php';

$page_title = 'Events | ' . SITE_NAME;
$meta_description = 'Upcoming cycling tours, corporate rides and workshop events from Ngalo Mobile Cycling Services in Kampala.';

require_once __DIR__ . '/includes/header.php';

$events = $GLOBALS['events'];
usort($events, fn($a, $b) => strtotime($a['date']) <=> strtotime($b['date']));
$upcoming = array_filter($events, fn($e) => $e['status'] === 'upcoming');
$past     = array_filter($events, fn($e) => $e['status'] === 'past');
?>

<section class="page-hero">
    <div class="page-hero-media"><img src="/assets/img/service-tours.jpg" alt="Ngalo cycling tour group"></div>
    <div class="container page-hero-content reveal">
        <p class="eyebrow">What's On</p>
        <h1>Rides &amp; Events</h1>
        <p>Join a guided tour, a team-building ride, or a workshop event.</p>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="section-head reveal">
            <p class="eyebrow">Coming Up</p>
            <h2>Upcoming Events</h2>
        </div>
        <div class="card-grid">
            <?php foreach ($upcoming as $i => $ev): $d = date_create($ev['date']); ?>
            <article class="event-card-full reveal" style="transition-delay:<?php echo ($i % 3) * 90; ?>ms">
                <div class="event-card-full-img">
                    <img src="<?php echo $ev['image']; ?>" alt="<?php echo htmlspecialchars($ev['title']); ?>" loading="lazy">
                    <div class="event-date">
                        <span class="event-day"><?php echo date_format($d, 'd'); ?></span>
                        <span class="event-month"><?php echo date_format($d, 'M'); ?></span>
                    </div>
                </div>
                <div class="event-card-body">
                    <h3><?php echo htmlspecialchars($ev['title']); ?></h3>
                    <p class="event-meta"><?php echo icon('clock'); ?><?php echo htmlspecialchars($ev['time']); ?></p>
                    <p class="event-meta"><?php echo icon('pin'); ?><?php echo htmlspecialchars($ev['location']); ?></p>
                    <p><?php echo htmlspecialchars($ev['desc']); ?></p>
                    <a href="https://wa.me/<?php echo CONTACT_WHATSAPP; ?>?text=Hi%20Ngalo%2C%20I%27d%20like%20to%20join%20%22<?php echo urlencode($ev['title']); ?>%22." class="btn btn-primary btn-sm" target="_blank" rel="noopener"><?php echo icon('whatsapp'); ?> Reserve a Spot</a>
                </div>
            </article>
            <?php endforeach; ?>
            <?php if (empty($upcoming)): ?>
                <p>No upcoming events right now — check back soon or follow us on social media for announcements.</p>
            <?php endif; ?>
        </div>
    </div>
</section>

<?php if (!empty($past)): ?>
<section class="section alt-bg">
    <div class="container">
        <div class="section-head reveal">
            <p class="eyebrow">Look Back</p>
            <h2>Past Events</h2>
        </div>
        <div class="card-grid">
            <?php foreach ($past as $i => $ev): $d = date_create($ev['date']); ?>
            <article class="event-card-full is-past reveal" style="transition-delay:<?php echo ($i % 3) * 90; ?>ms">
                <div class="event-card-full-img">
                    <img src="<?php echo $ev['image']; ?>" alt="<?php echo htmlspecialchars($ev['title']); ?>" loading="lazy">
                    <div class="event-date">
                        <span class="event-day"><?php echo date_format($d, 'd'); ?></span>
                        <span class="event-month"><?php echo date_format($d, 'M'); ?></span>
                    </div>
                    <span class="event-badge">Past</span>
                </div>
                <div class="event-card-body">
                    <h3><?php echo htmlspecialchars($ev['title']); ?></h3>
                    <p><?php echo htmlspecialchars($ev['desc']); ?></p>
                </div>
            </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
