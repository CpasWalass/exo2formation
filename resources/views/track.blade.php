<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Enter Post Code - Order.uk</title>
  <link rel="stylesheet" href="{{ asset('css/base.css') }}">
  <link rel="stylesheet" href="{{ asset('css/track.css') }}">
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
        <span class="location">&#128205; <span><b>London</b> &middot; Regent Street, 44, A4201</span> <a href="#">Change Location</a></span>
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
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('restaurants') }}">Restaurants</a>
        <a href="{{ route('deals') }}">Special Offers</a>
        <a href="{{ route('track') }}" class="active">Track Order</a>
        <a href="#" class="login">Login/Signup</a>
      </div>
      <button class="hamburger" aria-label="Menu">&#9776;</button>
    </div>
  </nav>

  <div class="container">
    <h1 class="page-title">Track Order</h1>

    <!-- Étape 1 : saisie du code postal -->
    <div class="center-card">
      <div class="pc-icon">&#128205;</div>
      <h1>Please Enter Your<br>Post Code</h1>
      <p>To start placing delivery order, please enter your full postcode here</p>
      <form action="#step-error">
        <input type="text" placeholder="eg. AA1 1BB" aria-label="Post code">
        <br><br>
        <button type="submit" class="btn" style="width:100%">Find</button>
      </form>
      <span class="or">or</span>
      <a href="{{ route('restaurants') }}" class="link">I want to come and collect</a>
    </div>

    <!-- Étape 2 : erreur (postcode non desservi) -->
    <div class="center-card" id="step-error">
      <div class="pc-icon" style="background:#c0392b">&#9888;&#65039;</div>
      <h1>Please Enter Your<br>Post Code</h1>
      <div class="error-box">&#9888;&#65039; Sorry, we don't do delivery to your area.</div>
      <p>To start placing delivery order, please enter your full postcode here</p>
      <input type="text" value="EN4 9QF" readonly aria-label="Post code">
      <br><br>
      <a href="#step-success" class="btn" style="width:100%;text-align:center;display:block">Find</a>
      <span class="or">or</span>
      <a href="{{ route('restaurants') }}" class="link">I want to come and collect</a>
    </div>

    <!-- Étape 3 : succès -->
    <div class="center-card" id="step-success">
      <div class="pc-icon" style="background:var(--green)">&#9989;</div>
      <h1>You're All Set!</h1>
      <p>Post Code Submitted &middot; We deliver to your area.</p>
      <div class="success-box">We deliver to your area. Enter your delivery address to continue.</div>
      <input type="text" value="EN4 92F" readonly aria-label="Post code">
      <br><br>
      <a href="#step-order" class="btn" style="width:100%;text-align:center;display:block">Change &amp; Continue</a>
      <span class="or">or</span>
      <a href="{{ route('restaurants') }}" class="link">I want to come and collect</a>
    </div>

    <!-- Étape 4 : confirmation -->
    <div class="center-card" id="step-order">
      <div class="pc-icon">&#128722;</div>
      <h1>Order Now</h1>
      <p>Minimum Delivery is <b>GBP 10</b>. Your current basket total is <b>GBP 127.90</b>.</p>
      <a href="{{ route('checkout') }}" class="btn" style="width:100%;text-align:center;display:block;margin-bottom:10px">Deliver my order</a>
      <a href="{{ route('checkout') }}" class="btn navy" style="width:100%;text-align:center;display:block;margin-bottom:10px">I will come &amp; Collect</a>
      <span class="or">or</span>
      <a href="{{ route('home') }}" class="link">Cancel &amp; Go back</a>
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
