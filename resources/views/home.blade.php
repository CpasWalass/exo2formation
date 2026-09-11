<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Order.uk - Order Restaurant food, takeaway and groceries</title>
  <link rel="stylesheet" href="{{ asset('css/base.css') }}">
  <link rel="stylesheet" href="{{ asset('css/home.css') }}">
</head>
<body>

  <!-- En-tête mobile -->
  <div class="mob-header">
    <span class="mob-loc">&#9776; <span>Aycan</span> <span class="caret">&#9662;</span></span>
    <a href="{{ route('cart') }}" class="mob-basket"><img src="{{ asset('assets/img/home/img_34.png') }}" alt=""><b>GBP 79.89</b></a>
  </div>

  <!-- Bandeau promo -->
  <div class="promo">
    <div class="container">
      <div class="promo-left">
        <span>Get 5% Off your first order, <strong>Promo.</strong></span>
        <span class="code-chip">ORDER5</span>
      </div>
      <div class="promo-right">
        <span class="location">&#128205; <b>Regent Street, 44, A4201, London</b> <a href="#">Change Location</a></span>
        <span class="mini-basket"><img src="assets/img/home/img_34.png" alt=""><span>23 Items</span> <b>GBP 79.89</b> <img src="assets/img/home/img_35.png" alt=""></span>
      </div>
    </div>
  </div>

  <!-- Navigation -->
  <nav>
    <div class="container">
      <a href="{{ route('home') }}" class="logo">Order<span class="dot">.</span><span>uk</span></a>
      <span class="nav-search">&#128269; Browse Menu</span>
      <div class="nav-links">
        <a href="{{ route('home') }}" class="active">Home</a>
        <a href="{{ route('restaurants') }}">Restaurants</a>
        <a href="{{ route('deals') }}">Special Offers</a>
        <a href="{{ route('track') }}">Track Order</a>
        <a href="#" class="login">Login/Signup</a>
      </div>
      <button class="hamburger" aria-label="Menu">&#9776;</button>
    </div>
  </nav>

  <!-- Hero -->
  <header class="hero">
    <div class="hero-orange"></div>
    <img src="assets/img/home/img_03.png" alt="Burger" class="hero-photo">
    <div class="hero-content">
      <h1>Feast Your Senses, Fast and Fresh</h1>
      <p>Enter a postcode to see what we deliver</p>
      <form class="hero-search" action="{{ route('restaurants') }}">
        <input type="text" placeholder="e.g. EC4R 3TE" aria-label="Postcode">
        <button type="submit">Search</button>
      </form>
    </div>
    <div class="hero-notifs">
      <div class="notif-card">
        <span class="tag">Orders</span>
        <b>We've Received your order!</b>
        <small>Awaiting Restaurant acceptance</small>
      </div>
      <div class="notif-card">
        <span class="tag">Orders</span>
        <b>Order Accepted!</b>
        <small>Your order will be delivered shortly</small>
      </div>
      <div class="notif-card">
        <span class="tag">Orders</span>
        <b>Your rider's nearby</b>
        <small>They're almost there - get ready!</small>
      </div>
    </div>
  </header>

  <!-- Offres -->
  <section>
    <div class="container">
      <div class="section-head">
        <h2>Up to <span style="color:var(--orange)">-40%</span> Order.uk exclusive deals</h2>
        <a href="{{ route('deals') }}">View All Offers &rarr;</a>
      </div>
      <div class="grid-3">
        <a href="{{ route('deals') }}" class="deal-card">
          <img src="assets/img/home/img_08.png" alt="Chef Burgers' London">
          <div class="shade"></div>
          <span class="badge"><span>-40%</span> Restaurants</span>
          <div class="info">
            <small>pizza &amp; Fast food</small>
            <h3>Chef Burgers' <span>London</span></h3>
          </div>
        </a>
        <a href="{{ route('deals') }}" class="deal-card">
          <img src="assets/img/home/img_09.png" alt="Grand AI Cafe">
          <div class="shade"></div>
          <span class="badge"><span>-20%</span> Restaurants</span>
          <div class="info">
            <small>Vegan &amp; others</small>
            <h3>Grand AI <span>Cafe</span></h3>
          </div>
        </a>
        <a href="{{ route('deals') }}" class="deal-card">
          <img src="assets/img/home/img_08.png" alt="Butterbrot Cafe London">
          <div class="shade"></div>
          <span class="badge"><span>-17%</span> Restaurants</span>
          <div class="info">
            <small>Fresh bakery</small>
            <h3>Butterbrot <span>Cafe London</span></h3>
          </div>
        </a>
      </div>
    </div>
  </section>

  <!-- Catégories -->
  <section>
    <div class="container">
      <div class="section-head">
        <h2>Order.uk Popular Categories</h2>
        <a href="{{ route('restaurants') }}">View All &rarr;</a>
      </div>
      <div class="grid-6">
        <a href="{{ route('restaurants') }}" class="cat-card">
          <img src="assets/img/home/img_10.png" alt="Burgers">
          <h3>Burgers &amp; Fast food</h3>
          <p>21 Restaurants</p>
        </a>
        <a href="{{ route('restaurants') }}" class="cat-card">
          <img src="assets/img/home/img_11.png" alt="Salads">
          <h3>Salads</h3>
          <p>32 Restaurants</p>
        </a>
        <a href="{{ route('restaurants') }}" class="cat-card">
          <img src="assets/img/home/img_12.png" alt="Pasta">
          <h3>Pasta &amp; Casuals</h3>
          <p>4 Restaurants</p>
        </a>
        <a href="{{ route('restaurants') }}" class="cat-card">
          <img src="assets/img/home/img_13.png" alt="Pizza">
          <h3>Pizza</h3>
          <p>32 Restaurants</p>
        </a>
        <a href="{{ route('restaurants') }}" class="cat-card">
          <img src="assets/img/home/img_14.png" alt="Breakfast">
          <h3>Breakfast</h3>
          <p>4 Restaurants</p>
        </a>
        <a href="{{ route('restaurants') }}" class="cat-card">
          <img src="assets/img/home/img_15.png" alt="Soups">
          <h3>Soups</h3>
          <p>32 Restaurants</p>
        </a>
      </div>
    </div>
  </section>

  <!-- Restaurants populaires -->
  <section>
    <div class="container">
      <div class="section-head">
        <h2>Popular Restaurants</h2>
        <a href="{{ route('restaurants') }}">View All &rarr;</a>
      </div>
      <div class="grid-3">
        <a href="{{ route('restaurants') }}" class="resto-card">
          <img src="assets/img/home/img_16.png" alt="McDonald's London">
          <h3>McDonald's London</h3>
          <div class="stars">&#9733;&#9733;&#9733;&#9733;&#9734; <span>4.2 (1,360 reviews)</span></div>
        </a>
        <a href="{{ route('restaurants') }}" class="resto-card">
          <img src="assets/img/home/img_17.png" alt="Papa Johns">
          <h3>Papa Johns</h3>
          <div class="stars">&#9733;&#9733;&#9733;&#9733;&#9733; <span>4.5 (980 reviews)</span></div>
        </a>
        <a href="{{ route('restaurants') }}" class="resto-card">
          <img src="assets/img/home/img_18.png" alt="KFC West London">
          <h3>KFC West London</h3>
          <div class="stars">&#9733;&#9733;&#9733;&#9733;&#9734; <span>4.0 (2,310 reviews)</span></div>
        </a>
        <a href="{{ route('restaurants') }}" class="resto-card">
          <img src="assets/img/home/img_19.png" alt="Texas Chicken">
          <h3>Texas Chicken</h3>
          <div class="stars">&#9733;&#9733;&#9733;&#9733;&#9734; <span>4.1 (1,120 reviews)</span></div>
        </a>
        <a href="{{ route('restaurants') }}" class="resto-card">
          <img src="assets/img/home/img_20.png" alt="Burger King">
          <h3>Burger King</h3>
          <div class="stars">&#9733;&#9733;&#9733;&#9733;&#9733; <span>4.3 (3,005 reviews)</span></div>
        </a>
        <a href="{{ route('restaurants') }}" class="resto-card">
          <img src="assets/img/home/img_21.png" alt="Shaurma 1">
          <h3>Shaurma 1</h3>
          <div class="stars">&#9733;&#9733;&#9733;&#9734;&#9734; <span>3.8 (640 reviews)</span></div>
        </a>
      </div>
    </div>
  </section>

  <!-- Section app -->
  <section>
    <div class="container">
      <div class="app-section">
        <div class="app-text">
          <h2>Ordersing is more<br><span>Personalised &amp; Instant</span></h2>
          <p>Download the Order.uk app for faster ordering, exclusive perks and live order tracking.</p>
          <div class="store-btns">
            <a href="#" class="store-btn">
              <img src="assets/img/home/img_16.png" alt="" style="width:22px">
              <span>Download on the<br><b>App Store</b></span>
            </a>
            <a href="#" class="store-btn">
              <img src="assets/img/home/img_17.png" alt="" style="width:22px">
              <span>Get it on<br><b>Google Play</b></span>
            </a>
          </div>
        </div>
        <div class="app-mock">
          <div class="app-screen">
            <span class="screen-logo">Order.uk</span>
            <img src="assets/img/mobile-home/img_14.png" alt="Order.uk app">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Partenaires -->
  <section>
    <div class="container">
      <div class="section-head">
        <h2>Know more about us!</h2>
        <a href="#">Help &amp; Support</a>
      </div>
      <div class="grid-2">
        <a href="#" class="partner-card">
          <img src="assets/img/home/img_22.png" alt="Partner with us">
          <div class="shade"></div>
          <div class="info">
            <h3>Partner with us</h3>
            <p>Earn more with lower fees. Signup as a business.</p>
            <span class="btn">Get Started</span>
          </div>
        </a>
        <a href="#" class="partner-card">
          <img src="assets/img/home/img_03.png" alt="Who we are">
          <div class="shade"></div>
          <div class="info">
            <h3>Who we are?</h3>
            <p>Ride with us. Signup as rider &amp; avail exclusive perks.</p>
            <span class="btn">Get Started</span>
          </div>
        </a>
      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section>
    <div class="container">
      <div class="faq">
        <h2>Frequent Questions</h2>
        <details open>
          <summary>How does Order.UK work?</summary>
          <p>Browse through our diverse menu, select your favourite dishes from local restaurants, place the order and our rider delivers it hot to your doorstep.</p>
        </details>
        <details>
          <summary>What payment methods are accepted?</summary>
          <p>We accept all major credit and debit cards, PayPal, Apple Pay, Google Pay and cash on delivery where available.</p>
        </details>
        <details>
          <summary>Can I track my order in real-time?</summary>
          <p>Yes. Once your order is accepted, you can follow every step from the kitchen to your door with live delivery tracking.</p>
        </details>
        <details>
          <summary>Are there any special discounts or promotions available?</summary>
          <p>Absolutely. Check the Special Offers page for exclusive deals, and use your first order promo code ORDER5 to get 5% off.</p>
        </details>
        <details>
          <summary>Is Order.UK available in my area?</summary>
          <p>Enter your postcode on the home page to see which restaurants deliver to you. We currently serve across the whole of London.</p>
        </details>
      </div>
    </div>
  </section>

  <!-- How it works -->
  <div class="how">
    <div class="container">
      <h2>Place an Order!</h2>
      <p class="sub">Order.UK simplifies the food ordering process. Browse through our diverse menu, select your favorite dishes, and proceed to checkout. Your delicious meal will be on its way to your doorstep in no time!</p>
      <div class="grid-3">
        <div class="step">
          <span class="num">01</span>
          <h3>Place an Order!</h3>
          <p>Place order through our website or Mobile app.</p>
        </div>
        <div class="step">
          <span class="num">02</span>
          <h3>Track Progress</h3>
          <p>You can track your order status with delivery time.</p>
        </div>
        <div class="step">
          <span class="num">03</span>
          <h3>Get your Order!</h3>
          <p>Receive your order at a lighting fast speed!</p>
        </div>
      </div>
      <div class="stats" style="margin-top:30px">
        <div>
          <div class="big">789,900+</div>
          <p>Orders Delivered</p>
        </div>
        <div>
          <div class="big">690+</div>
          <p>Restaurants Partnered</p>
        </div>
        <div>
          <div class="big">17+</div>
          <p>Food items</p>
        </div>
        <div>
          <div class="big">1,700+</div>
          <p>Registered Riders</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Newsletter -->
  <section>
    <div class="container">
      <div class="newsletter">
        <h2>Get Exclusive Deals in your Inbox</h2>
        <p>we won't spam, read Our <a href="#" style="color:var(--orange)">Privacy Policy</a></p>
        <form class="nl-form">
          <input type="email" placeholder="youremail@gmail.com" aria-label="Email">
          <button type="submit">Subscribe</button>
        </form>
      </div>
    </div>
  </section>

  <!-- Pied de page -->
  <footer>
    <div class="container">
      <div class="footer-top">
        <div>
          <div class="footer-logo">Order<span>.</span><span>uk</span></div>
          <p class="footer-company">Order Restaurant food, takeaway and groceries.<br>Regent Street, 44, A4201, London.</p>
          <p class="footer-company" style="margin-top:8px">Company # 490039-445, Registered with House of companies.</p>
          <div class="store-btns" style="margin-top:14px">
            <a href="#" class="store-btn">
              <span>Download on the<br><b>App Store</b></span>
            </a>
            <a href="#" class="store-btn">
              <span>Get it on<br><b>Google Play</b></span>
            </a>
          </div>
          <div class="socials">
            <a href="#" aria-label="Facebook">f</a>
            <a href="#" aria-label="Instagram">&#128247;</a>
            <a href="#" aria-label="X">X</a>
            <a href="#" aria-label="LinkedIn">in</a>
          </div>
        </div>
        <div>
          <h4>Legal Pages</h4>
          <ul>
            <li><a href="#">Terms and conditions</a></li>
            <li><a href="#">Privacy</a></li>
            <li><a href="#">Cookies</a></li>
            <li><a href="#">Modern Slavery Statement</a></li>
          </ul>
        </div>
        <div>
          <h4>Important Links</h4>
          <ul>
            <li><a href="#">Get help</a></li>
            <li><a href="#">Add Our restaurant</a></li>
            <li><a href="#">Sign up to deliver</a></li>
            <li><a href="#">Create a business account</a></li>
          </ul>
        </div>
        <div>
          <h4>Company</h4>
          <ul>
            <li><a href="{{ route('track') }}">Track Order</a></li>
            <li><a href="{{ route('deals') }}">Special Offers</a></li>
            <li><a href="{{ route('restaurants') }}">Restaurants</a></li>
          </ul>
        </div>
      </div>
      <div class="footer-bottom">
        <span>Order.uk Copyright 2024, All Rights Reserved.</span>
        <span><a href="#">Terms</a> &middot; <a href="#">Pricing</a> &middot; Do not sell or share my personal information</span>
      </div>
    </div>
  </footer>

</body>
</html>
