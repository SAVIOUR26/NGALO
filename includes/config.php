<?php
/**
 * Ngalo Mobile Cycling Services — site configuration
 * Central place for brand details, contact info and content used across pages.
 */

define('SITE_NAME', 'Ngalo Mobile Cycling Services');
define('SITE_SHORT_NAME', 'Ngalo Cycling');
define('SITE_TAGLINE', 'With Convenience');
define('SITE_URL', 'https://ngalogroup.com');
define('SITE_DESCRIPTION', "Ngalo Mobile Cycling Services is Kampala's one-stop shop for bicycle repairs, sales, rentals, spares, cycling lessons, corporate team building and guided cycling tours — at our workshop, at your doorstep, or out on the trail.");

define('CONTACT_EMAIL', 'ngalomobilecyclingservices@gmail.com');
define('CONTACT_PHONE_1', '+256 706 917 819');
define('CONTACT_PHONE_2', '+256 784 917 811');
define('CONTACT_WHATSAPP', '256706917819'); // digits only, international format, no leading +
define('CONTACT_ADDRESS', 'Kulambiro Ring Road, Kampala, Uganda');

define('SOCIAL_FACEBOOK', 'https://facebook.com/ngalomobilecyclingservice');
define('SOCIAL_INSTAGRAM', 'https://www.instagram.com/ngalo.cycling_123');
define('SOCIAL_TWITTER', 'https://x.com/NgaloCyclingUg');
define('SOCIAL_TIKTOK', 'https://www.tiktok.com/@ngalo.cycling.ug');

define('BASE_PATH', '');

/** Primary navigation. Anchors point at sections on the home page. */
$GLOBALS['nav_links'] = [
    '/'           => 'Home',
    '/#about'     => 'About',
    '/#services'  => 'Services',
    '/packages'   => 'Packages',
    '/gallery'    => 'Gallery',
    '/blog'       => 'Blog',
    '/events'     => 'Events',
    '/#contact'   => 'Contact',
];

/** Services offered, sourced from the workshop's own service board. */
$GLOBALS['services'] = [
    [
        'title' => 'Bicycle Repairs at Workshop',
        'desc'  => 'Full diagnostic and repair service at our Kulambiro workshop — gears, brakes, wheels, drivetrains and more, handled by trained mechanics.',
        'img'   => '/assets/img/service-workshop-repair.jpg',
        'icon'  => 'wrench',
    ],
    [
        'title' => 'At-Home Bicycle Repairs',
        'desc'  => "Can't make it to us? We come to you. Book a mobile mechanic and get your bike fixed right at your home or office.",
        'img'   => '/assets/img/service-home-repair.jpg',
        'icon'  => 'home',
    ],
    [
        'title' => 'Bike Sales',
        'desc'  => 'A wide range of new and quality-checked bicycles for every rider — from first-timers to serious mountain bikers.',
        'img'   => '/assets/img/service-bike-sales.jpg',
        'icon'  => 'tag',
    ],
    [
        'title' => 'Bike Rental / Hire',
        'desc'  => 'Well-maintained bikes for hire by the hour, day or week — perfect for visitors, events and casual weekend rides.',
        'img'   => '/assets/img/service-bike-hire.jpg',
        'icon'  => 'clock',
    ],
    [
        'title' => 'Cycling Accessories & Spares',
        'desc'  => 'Helmets, lights, tubes, tyres, locks and genuine spare parts — everything you need to keep riding safely.',
        'img'   => '/assets/img/service-accessories.jpg',
        'icon'  => 'bag',
    ],
    [
        'title' => 'Corporate Team Building',
        'desc'  => 'Fun, active team-building rides tailored for companies and organisations, fully organised from start to finish.',
        'img'   => '/assets/img/service-corporate.jpg',
        'icon'  => 'users',
    ],
    [
        'title' => 'Cycling Tours & Adventure',
        'desc'  => 'Guided cycling tours through Kampala and beyond — scenic trails, great company and unforgettable adventure.',
        'img'   => '/assets/img/service-tours.jpg',
        'icon'  => 'map',
    ],
];

/** The team. */
$GLOBALS['team'] = [
    ['name' => 'Hamzah Juma Mayanja', 'role' => 'Co-Founder', 'img' => '/assets/img/team-hamzah.jpg'],
    ['name' => 'Hilda Ayugi', 'role' => 'Co-Founder', 'img' => '/assets/img/team-hilda.jpg'],
    ['name' => 'Amumpire Brian', 'role' => 'Technician', 'img' => '/assets/img/team-brian.jpg'],
    ['name' => 'Nambajjo Molly', 'role' => 'Technician', 'img' => '/assets/img/team-molly.jpg'],
    ['name' => 'Nansubuga Maria', 'role' => 'Technician', 'img' => '/assets/img/team-maria.jpg'],
];

/** Full photo gallery. Featured on the home page (curated slice) and the dedicated /gallery page (all of them). */
$GLOBALS['gallery_photos'] = [
    ['src' => '/assets/img/gallery/photo-01.jpg', 'alt' => 'Rider in a teal helmet posing with her mountain bike against a stone wall', 'featured' => true],
    ['src' => '/assets/img/gallery/photo-02.jpg', 'alt' => 'Rider in a pink top and striped leggings pausing on her mountain bike'],
    ['src' => '/assets/img/gallery/photo-03.jpg', 'alt' => 'Cyclist wearing a hydration vest pausing along a red dirt trail'],
    ['src' => '/assets/img/gallery/photo-04.jpg', 'alt' => 'Two riders pausing together under a covered porch'],
    ['src' => '/assets/img/gallery/photo-05.jpg', 'alt' => 'Group of five cyclists posing with their bikes outside an office building', 'featured' => true],
    ['src' => '/assets/img/gallery/photo-06.jpg', 'alt' => 'Group of six riders resting under trees along a park path', 'featured' => true],
    ['src' => '/assets/img/gallery/photo-07.jpg', 'alt' => 'Rider arriving at a schoolyard checkpoint with fellow cyclists behind him'],
    ['src' => '/assets/img/gallery/photo-08.jpg', 'alt' => 'Group of five riders lined up along a tree-lined road'],
    ['src' => '/assets/img/gallery/photo-09.jpg', 'alt' => 'A father and son duo with race bib 358 at a community cycling event', 'featured' => true],
    ['src' => '/assets/img/gallery/photo-10.jpg', 'alt' => 'Rider showing off a teal mountain bike inside a garage'],
    ['src' => '/assets/img/gallery/photo-11.jpg', 'alt' => 'Group of six cyclists lined up on a road beside a paint company signboard'],
    ['src' => '/assets/img/gallery/photo-12.jpg', 'alt' => 'New mountain bikes lined up for sale against the workshop wall'],
    ['src' => '/assets/img/gallery/photo-13.jpg', 'alt' => 'Solo rider smiling on a sunlit red dirt road'],
    ['src' => '/assets/img/gallery/photo-14.jpg', 'alt' => 'Group of eight cyclists gathered together on a paved courtyard', 'featured' => true],
    ['src' => '/assets/img/gallery/photo-15.jpg', 'alt' => 'Solo rider posing with his bike beside an Endiro Coffee signboard'],
    ['src' => '/assets/img/gallery/photo-16.jpg', 'alt' => 'Group of five riders pausing together beside a busy road'],
    ['src' => '/assets/img/gallery/photo-17.jpg', 'alt' => 'Bikes for sale racked up inside the workshop showroom', 'featured' => true],
    ['src' => '/assets/img/gallery/photo-18.jpg', 'alt' => 'Bikes parked in a row inside a covered walkway'],
    ['src' => '/assets/img/gallery/photo-19.jpg', 'alt' => 'New mountain bikes lined up outside the Ngalo shopfront', 'featured' => true],
    ['src' => '/assets/img/gallery/photo-20.jpg', 'alt' => 'Rider giving a peace sign in front of a gated compound'],
    ['src' => '/assets/img/gallery/photo-21.jpg', 'alt' => 'Group of cyclists gathered outside the Ngalo storefront'],
    ['src' => '/assets/img/gallery/photo-22.jpg', 'alt' => 'Rider smiling on a quiet countryside road'],
    ['src' => '/assets/img/gallery/photo-23.jpg', 'alt' => 'Cyclist posing with his bike near St. Ochi Motel signage'],
    ['src' => '/assets/img/gallery/photo-24.jpg', 'alt' => 'Group of riders outside the Ngalo shopfront beside the "Our Services" signboard', 'featured' => true],
    ['src' => '/assets/img/gallery/photo-25.jpg', 'alt' => 'Bikes for sale lined up under a covered walkway'],
    ['src' => '/assets/img/gallery/photo-26.jpg', 'alt' => 'Rider posing with her bike beside a teammate under a stairwell'],
    ['src' => '/assets/img/gallery/photo-27.jpg', 'alt' => 'New mountain bikes on display at the workshop entrance'],
    ['src' => '/assets/img/gallery/photo-28.jpg', 'alt' => 'Cyclist smiling in a yellow jacket on a dirt road'],
    ['src' => '/assets/img/gallery/photo-29.jpg', 'alt' => 'Group of five riders resting under trees on a forest path'],
    ['src' => '/assets/img/gallery/photo-30.jpg', 'alt' => 'Group of cyclists gathered outside the Ngalo storefront'],
    ['src' => '/assets/img/gallery/photo-31.jpg', 'alt' => 'Group of eight cyclists outside the Ngalo shopfront and services board'],
    ['src' => '/assets/img/gallery/photo-32.jpg', 'alt' => 'Mountain bikes on display at the workshop entrance'],
];

/** "Book an Appointment" categories, featured on the home page and linking into the Packages page. */
$GLOBALS['appointments'] = [
    [
        'slug'  => 'at-home-service',
        'title' => 'At-Home Bike Service',
        'desc'  => 'A mechanic comes to your home or office for repairs and tune-ups. No fixed package — book a visit and we quote you on the spot.',
        'icon'  => 'home',
        'cta'   => 'Book a Visit',
    ],
    [
        'slug'  => 'lessons',
        'title' => 'Cycling Lessons',
        'desc'  => 'A structured 14-day course with your own coach, bike and helmet — from first pedal to confident rider.',
        'icon'  => 'star',
        'cta'   => 'Book This Package',
    ],
    [
        'slug'  => 'experiences',
        'title' => 'Guided Cycling Experience',
        'desc'  => 'Guided rides across Kampala and beyond, with an English-speaking guide, technical support and all safety gear included.',
        'icon'  => 'map',
        'cta'   => 'Book a Tour',
    ],
];

/** Cycling Lessons package. */
$GLOBALS['lesson_package'] = [
    'title'    => 'Cycling Lessons',
    'tagline'  => 'Learn to ride with confidence',
    'price'    => 'UGX 280,000',
    'duration' => '14 days · 1 hour a day',
    'image'    => '/assets/img/gallery-2.jpg',
    'includes' => ['Bike', 'Helmet', 'Coach'],
    'benefits' => ['Learn how to ride', 'Endurance building', 'Technical skills'],
];

/** Guided cycling experience / tour packages. */
$GLOBALS['tour_packages'] = [
    [
        'slug'     => 'kampala-cycling-experience',
        'title'    => 'Kampala Cycling Experience',
        'meet'     => 'Meeting point confirmed when you book',
        'duration' => '2–3 hours',
        'fee'      => 'UGX 111,000',
        'image'    => '/assets/img/service-tours.jpg',
        'desc'     => "A guided ride through Kampala's streets and scenic viewpoints — a great introduction to cycling the city.",
        'includes' => ['English-speaking guide', 'Technical support', 'Bike', 'Helmet', 'Resting points'],
    ],
    [
        'slug'     => 'mabamba-swamp-cycling-tour',
        'title'    => 'Mabamba Swamp Cycling Tour',
        'meet'     => 'Meeting point confirmed when you book',
        'duration' => '2–3 hours',
        'fee'      => 'UGX 222,000',
        'image'    => '/assets/img/gallery-7.jpg',
        'desc'     => "Ride out toward the Mabamba wetland, one of the region's best-known birding spots on the shores of Lake Victoria.",
        'includes' => ['English-speaking guide', 'Technical support', 'Bike', 'Helmet', 'Resting points'],
    ],
    [
        'slug'     => 'lakeside-mukono-ride-and-tour',
        'title'    => 'Lakeside Mukono Ride and Tour',
        'meet'     => 'Meet at Gaba Beach House',
        'duration' => '2–3 hours',
        'fee'      => 'UGX 111,000',
        'image'    => '/assets/img/hero.jpg',
        'desc'     => 'A scenic lakeside ride from Gaba out toward Mukono, with rest stops along the way.',
        'includes' => ['English-speaking guide', 'Technical support', 'Bike', 'Helmet', 'Resting points'],
    ],
    [
        'slug'     => 'ride-to-sezzibwa-falls',
        'title'    => 'Ride to Sezzibwa Falls',
        'meet'     => 'Meeting point confirmed when you book',
        'duration' => '2–4 hours',
        'fee'      => 'UGX 111,000',
        'image'    => '/assets/img/service-corporate.jpg',
        'desc'     => 'A longer countryside ride out to Sezzibwa Falls, a well-known natural and cultural site near Mukono.',
        'includes' => ['English-speaking guide', 'Technical support', 'Bike', 'Helmet', 'Resting points'],
    ],
];

/** Sample blog posts. Replace/extend as real posts are written. */
$GLOBALS['blog_posts'] = [
    [
        'slug'    => 'five-signs-your-bike-needs-a-service',
        'title'   => '5 Signs Your Bike Needs a Service',
        'excerpt' => "Squeaky brakes, a slipping chain, a wobbly wheel — small warning signs save you big repair bills later. Here's what to watch for.",
        'image'   => '/assets/img/service-workshop-repair.jpg',
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
        'image'   => '/assets/img/service-home-repair.jpg',
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
        'image'   => '/assets/img/service-tours.jpg',
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
        'image'   => '/assets/img/service-tours.jpg',
        'desc'    => 'A relaxed group ride through scenic outskirts trails, suitable for intermediate riders. Water and a support vehicle provided.',
        'status'  => 'upcoming',
    ],
    [
        'title'   => 'Corporate Team Building Ride — Open Booking',
        'date'    => '2026-10-04',
        'time'    => 'By arrangement',
        'location'=> 'Location arranged with your company',
        'image'   => '/assets/img/service-corporate.jpg',
        'desc'    => 'Book a fully organised team-building cycling day for your company — bikes, guides and route planning included.',
        'status'  => 'upcoming',
    ],
    [
        'title'   => 'Free Bike Safety Check Day',
        'date'    => '2026-08-02',
        'time'    => '9:00 AM – 4:00 PM',
        'location'=> 'Ngalo Workshop, Kulambiro Ring Road',
        'image'   => '/assets/img/service-workshop-repair.jpg',
        'desc'    => 'Our mechanics offered free brake, tyre and gear checks to the community. Thank you to everyone who came through!',
        'status'  => 'past',
    ],
];
