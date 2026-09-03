<?php
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/icons.php';

$page_title = SITE_NAME . ' | Bike Repairs, Sales, Rentals & Cycling Tours in Kampala';
$meta_description = SITE_DESCRIPTION;

$contact_status = $_GET['contact'] ?? '';

require_once __DIR__ . '/includes/header.php';
?>

<!-- ============ HERO ============ -->
<section class="hero" id="home">
    <div class="hero-media">
        <img src="/assets/img/hero.jpg" alt="Ngalo cycling group riding a forest trail" loading="eager">
        <div class="hero-overlay"></div>
    </div>
    <div class="container hero-content">
        <p class="eyebrow reveal">Bicycle Repairs &middot; Sales &middot; Rentals &middot; Tours</p>
        <h1 class="reveal">Cycling services that come <span>with convenience</span></h1>
        <p class="hero-lead reveal">From workshop repairs to doorstep house calls, bike sales to guided trail adventures — Ngalo Mobile Cycling Services keeps Kampala riding, wherever you are.</p>
        <div class="hero-actions reveal">
            <a href="https://wa.me/<?php echo CONTACT_WHATSAPP; ?>?text=Hi%20Ngalo%2C%20I%27d%20like%20to%20book%20a%20service." class="btn btn-primary" target="_blank" rel="noopener"><?php echo icon('whatsapp'); ?> Book on WhatsApp</a>
            <a href="#services" class="btn btn-ghost">Explore Services <?php echo icon('arrow-right'); ?></a>
        </div>
        <div class="hero-stats reveal">
            <div><strong>7+</strong><span>Services Offered</span></div>
            <div><strong>500+</strong><span>Bikes Serviced</span></div>
            <div><strong>100%</strong><span>Mobile &amp; Workshop</span></div>
        </div>
    </div>
    <a href="#about" class="scroll-cue" aria-label="Scroll down"><?php echo icon('chevron'); ?></a>
</section>

<!-- ============ ABOUT ============ -->
<section class="section about" id="about">
    <div class="container about-grid">
        <div class="about-media reveal">
            <img src="/assets/img/about.jpg" alt="Ngalo mechanic servicing a bicycle wheel" loading="lazy">
            <div class="about-media-badge">
                <?php echo icon('wrench'); ?>
                <div><strong>Trained</strong><span>Mechanics</span></div>
            </div>
        </div>
        <div class="about-copy reveal">
            <p class="eyebrow">About Ngalo</p>
            <h2>Kampala's mobile bicycle workshop, on your schedule</h2>
            <p>Ngalo Mobile Cycling Services was built around one idea: cycling support shouldn't be a hassle. Whether your bike needs a quick fix, you're shopping for a new ride, or you want to explore Kampala on two wheels, our team meets you where you are — at our Kulambiro workshop or right at your doorstep.</p>
            <ul class="about-features">
                <li><?php echo icon('check'); ?> Certified, experienced bicycle mechanics</li>
                <li><?php echo icon('check'); ?> At-home &amp; on-site repair visits</li>
                <li><?php echo icon('check'); ?> Genuine spares and accessories</li>
                <li><?php echo icon('check'); ?> Guided tours and corporate rides</li>
            </ul>
            <div class="about-actions">
                <a href="#services" class="btn btn-primary">Our Services</a>
                <a href="/#contact" class="btn btn-outline">Visit Our Workshop</a>
            </div>
        </div>
    </div>
</section>

<!-- ============ SERVICES ============ -->
<section class="section services alt-bg" id="services">
    <div class="container">
        <div class="section-head reveal">
            <p class="eyebrow">What We Do</p>
            <h2>Everything your bicycle needs, in one place</h2>
            <p class="section-lead">From routine maintenance to full-blown adventure, our services are designed around riders of every kind.</p>
        </div>
        <div class="services-grid">
            <?php foreach ($GLOBALS['services'] as $i => $s): ?>
            <article class="service-card reveal" style="transition-delay:<?php echo ($i % 3) * 80; ?>ms">
                <div class="service-card-img">
                    <img src="<?php echo $s['img']; ?>" alt="<?php echo htmlspecialchars($s['title']); ?>" loading="lazy">
                </div>
                <div class="service-card-body">
                    <span class="service-icon"><?php echo icon($s['icon']); ?></span>
                    <h3><?php echo htmlspecialchars($s['title']); ?></h3>
                    <p><?php echo htmlspecialchars($s['desc']); ?></p>
                    <a href="https://wa.me/<?php echo CONTACT_WHATSAPP; ?>?text=Hi%20Ngalo%2C%20I%27d%20like%20to%20ask%20about%20<?php echo urlencode($s['title']); ?>." class="service-link" target="_blank" rel="noopener">Enquire <?php echo icon('arrow-right'); ?></a>
                </div>
            </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ============ GALLERY ============ -->
<section class="section gallery" id="gallery">
    <div class="container">
        <div class="section-head reveal">
            <p class="eyebrow">In The Field</p>
            <h2>Life at Ngalo Mobile Cycling Services</h2>
            <p class="section-lead">A look at our workshop, our team and the rides we love.</p>
        </div>
        <div class="gallery-grid">
            <?php
            $gallery_images = [
                ['src' => '/assets/img/gallery-1.jpg', 'alt' => 'Mechanic fitting a wheel for a customer'],
                ['src' => '/assets/img/service-tours.jpg', 'alt' => 'Group cycling tour on a dirt road'],
                ['src' => '/assets/img/gallery-3.jpg', 'alt' => 'Mechanic servicing a bike on a repair stand'],
                ['src' => '/assets/img/gallery-4.jpg', 'alt' => 'Workshop bicycle wheel service'],
                ['src' => '/assets/img/service-bike-sales.jpg', 'alt' => 'Wall of bicycles ready for sale'],
                ['src' => '/assets/img/gallery-6.jpg', 'alt' => 'At-home bicycle repair'],
                ['src' => '/assets/img/gallery-7.jpg', 'alt' => 'Bikes loaded for a cycling tour'],
                ['src' => '/assets/img/service-corporate.jpg', 'alt' => 'Group ride through a forest trail'],
            ];
            foreach ($gallery_images as $i => $g): ?>
            <button type="button" class="gallery-item reveal" data-full="<?php echo $g['src']; ?>" data-caption="<?php echo htmlspecialchars($g['alt']); ?>" style="transition-delay:<?php echo ($i % 4) * 70; ?>ms">
                <img src="<?php echo $g['src']; ?>" alt="<?php echo htmlspecialchars($g['alt']); ?>" loading="lazy">
                <span class="gallery-zoom"><?php echo icon('map'); ?></span>
            </button>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ============ BLOG PREVIEW ============ -->
<section class="section blog-preview alt-bg" id="blog">
    <div class="container">
        <div class="section-head split reveal">
            <div>
                <p class="eyebrow">From The Blog</p>
                <h2>Tips, stories &amp; rides worth reading</h2>
            </div>
            <a href="/blog" class="btn btn-outline">View All Posts <?php echo icon('arrow-right'); ?></a>
        </div>
        <div class="card-grid">
            <?php foreach (array_slice($GLOBALS['blog_posts'], 0, 3) as $i => $post): ?>
            <article class="post-card reveal" style="transition-delay:<?php echo $i * 90; ?>ms">
                <a href="/blog/<?php echo urlencode($post['slug']); ?>" class="post-card-img">
                    <img src="<?php echo $post['image']; ?>" alt="<?php echo htmlspecialchars($post['title']); ?>" loading="lazy">
                </a>
                <div class="post-card-body">
                    <span class="post-date"><?php echo icon('calendar'); ?><?php echo date('F j, Y', strtotime($post['date'])); ?></span>
                    <h3><a href="/blog/<?php echo urlencode($post['slug']); ?>"><?php echo htmlspecialchars($post['title']); ?></a></h3>
                    <p><?php echo htmlspecialchars($post['excerpt']); ?></p>
                    <a href="/blog/<?php echo urlencode($post['slug']); ?>" class="service-link">Read More <?php echo icon('arrow-right'); ?></a>
                </div>
            </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ============ EVENTS PREVIEW ============ -->
<section class="section events-preview" id="events">
    <div class="container">
        <div class="section-head split reveal">
            <div>
                <p class="eyebrow">What's On</p>
                <h2>Upcoming rides &amp; events</h2>
            </div>
            <a href="/events" class="btn btn-outline">View All Events <?php echo icon('arrow-right'); ?></a>
        </div>
        <div class="card-grid">
            <?php
            $upcoming = array_filter($GLOBALS['events'], fn($e) => $e['status'] === 'upcoming');
            foreach (array_slice($upcoming, 0, 3) as $i => $ev):
                $d = date_create($ev['date']);
            ?>
            <article class="event-card reveal" style="transition-delay:<?php echo $i * 90; ?>ms">
                <div class="event-date">
                    <span class="event-day"><?php echo date_format($d, 'd'); ?></span>
                    <span class="event-month"><?php echo date_format($d, 'M'); ?></span>
                </div>
                <div class="event-card-body">
                    <h3><?php echo htmlspecialchars($ev['title']); ?></h3>
                    <p class="event-meta"><?php echo icon('clock'); ?><?php echo htmlspecialchars($ev['time']); ?></p>
                    <p class="event-meta"><?php echo icon('pin'); ?><?php echo htmlspecialchars($ev['location']); ?></p>
                    <p><?php echo htmlspecialchars($ev['desc']); ?></p>
                </div>
            </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ============ CTA BANNER ============ -->
<section class="cta-banner">
    <div class="container cta-banner-inner reveal">
        <div>
            <h2>Ready to get rolling?</h2>
            <p>Message us on WhatsApp or call us directly — we'll sort out the rest.</p>
        </div>
        <div class="cta-actions">
            <a href="https://wa.me/<?php echo CONTACT_WHATSAPP; ?>" class="btn btn-primary" target="_blank" rel="noopener"><?php echo icon('whatsapp'); ?> WhatsApp Us</a>
            <a href="tel:<?php echo str_replace(' ', '', CONTACT_PHONE_1); ?>" class="btn btn-ghost-light"><?php echo icon('phone'); ?> Call Now</a>
        </div>
    </div>
</section>

<!-- ============ CONTACT ============ -->
<section class="section contact alt-bg" id="contact">
    <div class="container">
        <div class="section-head reveal">
            <p class="eyebrow">Get In Touch</p>
            <h2>Visit us, call us, or send a message</h2>
            <p class="section-lead">We're based on Kulambiro Ring Road and happy to help with anything cycling-related.</p>
        </div>

        <div class="contact-grid">
            <div class="contact-info reveal">
                <div class="contact-info-card">
                    <span><?php echo icon('pin'); ?></span>
                    <div><h4>Our Workshop</h4><p><?php echo CONTACT_ADDRESS; ?></p></div>
                </div>
                <div class="contact-info-card">
                    <span><?php echo icon('phone'); ?></span>
                    <div><h4>Call / WhatsApp</h4><p><a href="tel:<?php echo str_replace(' ', '', CONTACT_PHONE_1); ?>"><?php echo CONTACT_PHONE_1; ?></a><br><a href="tel:<?php echo str_replace(' ', '', CONTACT_PHONE_2); ?>"><?php echo CONTACT_PHONE_2; ?></a></p></div>
                </div>
                <div class="contact-info-card">
                    <span><?php echo icon('mail'); ?></span>
                    <div><h4>Email</h4><p><a href="mailto:<?php echo CONTACT_EMAIL; ?>"><?php echo CONTACT_EMAIL; ?></a></p></div>
                </div>
                <div class="contact-info-card">
                    <span><?php echo icon('clock'); ?></span>
                    <div><h4>Working Hours</h4><p>Mon &ndash; Sat: 8:00 AM &ndash; 6:00 PM<br>Sunday: By appointment</p></div>
                </div>
                <div class="contact-map">
                    <iframe
                        src="https://www.google.com/maps?q=<?php echo urlencode(CONTACT_ADDRESS); ?>&output=embed"
                        loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Ngalo Mobile Cycling Services location"></iframe>
                </div>
            </div>

            <form class="contact-form reveal" action="/contact-handler.php" method="POST" id="contact-form">
                <?php if ($contact_status === 'success'): ?>
                    <div class="form-alert form-alert-success"><?php echo icon('check'); ?> Thanks! Your message has been sent — we'll get back to you shortly.</div>
                <?php elseif ($contact_status === 'error'): ?>
                    <div class="form-alert form-alert-error">Something went wrong sending your message. Please try WhatsApp instead, or try again.</div>
                <?php endif; ?>
                <div class="form-row">
                    <div class="form-group">
                        <label for="name">Full Name</label>
                        <input type="text" id="name" name="name" required placeholder="Your name">
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="tel" id="phone" name="phone" placeholder="e.g. 0784 917 811">
                    </div>
                </div>
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" required placeholder="you@example.com">
                </div>
                <div class="form-group">
                    <label for="subject">Subject</label>
                    <select id="subject" name="subject">
                        <option>Bicycle Repairs at Workshop</option>
                        <option>At-Home Bicycle Repairs</option>
                        <option>Bike Sales</option>
                        <option>Bike Rental / Hire</option>
                        <option>Cycling Accessories &amp; Spares</option>
                        <option>Corporate Team Building</option>
                        <option>Cycling Tours &amp; Adventure</option>
                        <option>General Enquiry</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" rows="5" required placeholder="Tell us what you need..."></textarea>
                </div>
                <input type="text" name="company" class="hp-field" tabindex="-1" autocomplete="off" aria-hidden="true">
                <button type="submit" class="btn btn-primary btn-block"><?php echo icon('send'); ?> Send Message</button>
            </form>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
