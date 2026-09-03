<?php
/**
 * Ngalo Mobile Cycling Services — site configuration
 * Central place for brand details, contact info and content used across pages.
 */

define('SITE_NAME', 'Ngalo Mobile Cycling Services');
define('SITE_SHORT_NAME', 'Ngalo Cycling');
define('SITE_TAGLINE', 'With Convenience');
define('SITE_URL', 'https://ngalogroup.com');
define('SITE_DESCRIPTION', 'Ngalo Mobile Cycling Services offers bicycle repairs, sales, rentals, spares, corporate team building and guided cycling tours in Kampala, Uganda — at our workshop or at your doorstep.');

define('CONTACT_EMAIL', 'ngalomobilecyclingservices@gmail.com');
define('CONTACT_PHONE_1', '+256 784 917 811');
define('CONTACT_PHONE_2', '+256 706 917 819');
define('CONTACT_WHATSAPP', '256784917811'); // digits only, international format, no leading +
define('CONTACT_ADDRESS', 'Kulambiro Ring Road, Kampala, Uganda');

define('SOCIAL_FACEBOOK', 'https://facebook.com/ngalomobilecyclingservice');
define('SOCIAL_INSTAGRAM', 'https://instagram.com/ngalo_mobile_cycling_services');
define('SOCIAL_TWITTER', 'https://twitter.com/ngalocyclingug');

define('BASE_PATH', '');

/** Primary navigation. Anchors point at sections on the home page. */
$GLOBALS['nav_links'] = [
    'index.php'              => 'Home',
    'index.php#about'        => 'About',
    'index.php#services'     => 'Services',
    'index.php#gallery'      => 'Gallery',
    'blog.php'                => 'Blog',
    'events.php'               => 'Events',
    'index.php#contact'      => 'Contact',
];

/** Services offered, sourced from the workshop's own service board. */
$GLOBALS['services'] = [
    [
        'title' => 'Bicycle Repairs at Workshop',
        'desc'  => 'Full diagnostic and repair service at our Kulambiro workshop — gears, brakes, wheels, drivetrains and more, handled by trained mechanics.',
        'img'   => 'assets/img/service-workshop-repair.jpg',
        'icon'  => 'wrench',
    ],
    [
        'title' => 'At-Home Bicycle Repairs',
        'desc'  => "Can't make it to us? We come to you. Book a mobile mechanic and get your bike fixed right at your home or office.",
        'img'   => 'assets/img/service-home-repair.jpg',
        'icon'  => 'home',
    ],
    [
        'title' => 'Bike Sales',
        'desc'  => 'A wide range of new and quality-checked bicycles for every rider — from first-timers to serious mountain bikers.',
        'img'   => 'assets/img/service-bike-sales.jpg',
        'icon'  => 'tag',
    ],
    [
        'title' => 'Bike Rental / Hire',
        'desc'  => 'Well-maintained bikes for hire by the hour, day or week — perfect for visitors, events and casual weekend rides.',
        'img'   => 'assets/img/service-bike-hire.jpg',
        'icon'  => 'clock',
    ],
    [
        'title' => 'Cycling Accessories & Spares',
        'desc'  => 'Helmets, lights, tubes, tyres, locks and genuine spare parts — everything you need to keep riding safely.',
        'img'   => 'assets/img/service-accessories.jpg',
        'icon'  => 'bag',
    ],
    [
        'title' => 'Corporate Team Building',
        'desc'  => 'Fun, active team-building rides tailored for companies and organisations, fully organised from start to finish.',
        'img'   => 'assets/img/service-corporate.jpg',
        'icon'  => 'users',
    ],
    [
        'title' => 'Cycling Tours & Adventure',
        'desc'  => 'Guided cycling tours through Kampala and beyond — scenic trails, great company and unforgettable adventure.',
        'img'   => 'assets/img/service-tours.jpg',
        'icon'  => 'map',
    ],
];

/** Sample blog posts. Replace/extend as real posts are written. */
$GLOBALS['blog_posts'] = [
    [
        'slug'    => 'five-signs-your-bike-needs-a-service',
        'title'   => '5 Signs Your Bike Needs a Service',
        'excerpt' => "Squeaky brakes, a slipping chain, a wobbly wheel — small warning signs save you big repair bills later. Here's what to watch for.",
        'image'   => 'assets/img/service-workshop-repair.jpg',
        'date'    => '2026-08-12',
        'author'  => 'Ngalo Cycling Team',
        'body'    => "<p>Your bicycle talks to you long before it breaks down — you just have to listen. Here are five signs it's time to book a service with us.</p>
<h3>1. Squeaky or grinding brakes</h3>
<p>Noise from your brake pads usually means wear, or dirt built up on the rim. Left unchecked, it becomes a safety issue.</p>
<h3>2. A chain that skips or slips</h3>
<p>A worn or stretched chain can jump between gears unexpectedly. It's a quick, affordable fix if caught early.</p>
<h3>3. Wobbly wheels</h3>
<p>A wheel that isn't spinning true puts uneven stress on your spokes and tyres. A simple truing session at our workshop sorts this out.</p>
<h3>4. Stiff or sluggish gear shifts</h3>
<p>Dirty or dry cables make shifting harder than it should be. Regular servicing keeps your drivetrain smooth.</p>
<h3>5. It's just been a while</h3>
<p>If you can't remember your last service, it's probably overdue. We recommend a full check-up every few months for regular riders.</p>
<p>Book a workshop or at-home repair with Ngalo Mobile Cycling Services and ride with confidence.</p>",
    ],
    [
        'slug'    => 'why-mobile-bike-repair-makes-sense',
        'title'   => 'Why Mobile Bike Repair Makes Sense in Kampala',
        'excerpt' => 'Traffic, distance, a flat tyre right before you need to leave — our at-home repair service was built for exactly these moments.',
        'image'   => 'assets/img/service-home-repair.jpg',
        'date'    => '2026-07-02',
        'author'  => 'Ngalo Cycling Team',
        'body'    => "<p>Not everyone has the time to carry a bicycle across town for a repair. That's the whole idea behind our mobile service — the workshop comes to you.</p>
<p>Our mechanics arrive with the tools and spares needed to handle most repairs on the spot: punctures, brake and gear adjustments, chain replacement and general tune-ups, all done in your compound or office parking lot.</p>
<p>It's convenient, it's fast, and it means less downtime for you and your bike. Message us on WhatsApp to book a slot that works for you.</p>",
    ],
    [
        'slug'    => 'gearing-up-for-your-first-cycling-tour',
        'title'   => 'Gearing Up for Your First Cycling Tour',
        'excerpt' => "Thinking of joining one of our guided rides? Here's what to bring, what to expect, and how to prepare for the trail.",
        'image'   => 'assets/img/service-tours.jpg',
        'date'    => '2026-05-20',
        'author'  => 'Ngalo Cycling Team',
        'body'    => "<p>Our cycling tours take riders of all levels through some of the most scenic trails around Kampala. If it's your first time joining us, here's how to prepare.</p>
<h3>What to bring</h3>
<p>A helmet (or hire one from us), water, sunscreen, and comfortable clothing you don't mind getting a little dusty.</p>
<h3>What to expect</h3>
<p>A guided pace suited to the group, regular stops, and a support vehicle for longer routes. No experience necessary — just a sense of adventure.</p>
<h3>Book your spot</h3>
<p>Group sizes are limited to keep every tour enjoyable. Reach out to us to check upcoming dates and reserve your place.</p>",
    ],
];

/** Sample events. Replace/extend with real dates as they're scheduled. */
$GLOBALS['events'] = [
    [
        'title'   => 'Kampala Weekend Trail Ride',
        'date'    => '2026-09-20',
        'time'    => '7:00 AM',
        'location'=> 'Meet at Ngalo Workshop, Kulambiro Ring Road',
        'image'   => 'assets/img/service-tours.jpg',
        'desc'    => 'A relaxed group ride through scenic outskirts trails, suitable for intermediate riders. Water and a support vehicle provided.',
        'status'  => 'upcoming',
    ],
    [
        'title'   => 'Corporate Team Building Ride — Open Booking',
        'date'    => '2026-10-04',
        'time'    => 'By arrangement',
        'location'=> 'Location arranged with your company',
        'image'   => 'assets/img/service-corporate.jpg',
        'desc'    => 'Book a fully organised team-building cycling day for your company — bikes, guides and route planning included.',
        'status'  => 'upcoming',
    ],
    [
        'title'   => 'Free Bike Safety Check Day',
        'date'    => '2026-08-02',
        'time'    => '9:00 AM – 4:00 PM',
        'location'=> 'Ngalo Workshop, Kulambiro Ring Road',
        'image'   => 'assets/img/service-workshop-repair.jpg',
        'desc'    => 'Our mechanics offered free brake, tyre and gear checks to the community. Thank you to everyone who came through!',
        'status'  => 'past',
    ],
];
