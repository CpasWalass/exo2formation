<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>McDonald's East London - Order.uk</title>
  <link rel="stylesheet" href="{{ asset('css/base.css') }}">
  <link rel="stylesheet" href="{{ asset('css/resto.css') }}">
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
        <a href="{{ route('restaurants') }}" class="active">Restaurants</a>
        <a href="{{ route('deals') }}">Special Offers</a>
        <a href="{{ route('track') }}">Track Order</a>
        <a href="#" class="login">Login/Signup</a>
      </div>
      <button class="hamburger" aria-label="Menu">&#9776;</button>
    </div>
  </nav>

  <div class="container">
    <!-- Couverture -->
    <img src="assets/img/resto/img_00.png" alt="McDonald's East London" class="resto-cover">

    <!-- En-tÃªte restaurant -->
    <div class="resto-head">
      <div>
        <h1>McDonald's East London</h1>
        <p class="tag">"I'm lovin' it!" &middot; Burgers &amp; Fast food</p>
        <div class="resto-meta">
          <span>&#128205; <b>Minimum Order:</b> 12 GBP</span>
          <span>&#128339; <b>Open until 3:00 AM</b></span>
          <span>&#128663; <b>Delivery in 20-25 Minutes</b></span>
        </div>
      </div>
      <div class="rating-pill">
        <div class="score">3.4</div>
        <small>1,360 reviews</small>
      </div>
    </div>

    <input type="text" class="search-menu" placeholder="Q  Search from menu...">

    <!-- Catégories -->
    <div class="chips">
      <span class="chip active">Offers</span>
      <span class="chip">Burgers</span>
      <span class="chip">Fries</span>
      <span class="chip">Snacks</span>
      <span class="chip">Salads</span>
      <span class="chip">Cold drinks</span>
      <span class="chip">Happy Meal</span>
      <span class="chip">Desserts</span>
      <span class="chip">Hot drinks</span>
      <span class="chip">Sauces</span>
      <span class="chip">Orbit <b style="color:var(--orange)">-20%</b></span>
    </div>

    <div class="offer-banner">
      <b>All Offers from McDonald's East London</b>
      <span class="tag-off">First Order Discount -20%</span>
    </div>

    <!-- Offres -->
    <div class="grid-3">
      <a href="{{ route('deals') }}" class="deal-card">
        <img src="assets/img/resto/img_38.png" alt="First Order Discount">
        <div class="shade"></div>
        <span class="badge"><span>-20%</span> Restaurants</span>
        <div class="info">
          <small>McDonald's East London</small>
          <h3>First Order <span>Discount</span></h3>
        </div>
      </a>
      <a href="{{ route('deals') }}" class="deal-card">
        <img src="assets/img/resto/img_39.png" alt="Vegan Discount">
        <div class="shade"></div>
        <span class="badge"><span>-20%</span> Restaurants</span>
        <div class="info">
          <small>McDonald's East London</small>
          <h3>Vegan <span>Discount</span></h3>
        </div>
      </a>
      <a href="{{ route('deals') }}" class="deal-card">
        <img src="assets/img/resto/img_40.png" alt="Free ice Cream Offer">
        <div class="shade"></div>
        <span class="badge"><span>-100%</span> Restaurants</span>
        <div class="info">
          <small>McDonald's East London</small>
          <h3>Free ice <span>Cream Offer</span></h3>
        </div>
      </a>
    </div>

    <!-- Burgers -->
    <div class="menu-group">
      <h2>Burgers</h2>
      <div class="menu-grid">
        <div class="menu-item">
          <img src="assets/img/resto/img_19.png" alt="Royal Cheese Burger with extra Fries">
          <div>
            <h4>Royal Cheese Burger with extra Fries</h4>
            <p class="desc">1 McChicken™, 1 Big Mac™, 1 Royal Cheeseburger, 3 medium</p>
            <div class="price">GBP 23.10</div>
          </div>
          <button class="add-btn">Add</button>
        </div>
        <div class="menu-item">
          <img src="assets/img/resto/img_22.png" alt="The classics for 3">
          <div>
            <h4>The classics for 3</h4>
            <p class="desc">1 McChicken™, 1 Big Mac™, 1 Royal Cheeseburger, 3 medium sized French Fries, 3 cold drinks</p>
            <div class="price">GBP 23.10</div>
          </div>
          <button class="add-btn">Add</button>
        </div>
        <div class="menu-item">
          <img src="assets/img/resto/img_24.png" alt="The classics for 3">
          <div>
            <h4>The classics for 3</h4>
            <p class="desc">1 McChicken™, 1 Big Mac™, 1 Royal Cheeseburger, 3 medium sized French Fries, 3 cold drinks</p>
            <div class="price">GBP 23.10</div>
          </div>
          <button class="add-btn">Add</button>
        </div>
        <div class="menu-item">
          <img src="assets/img/resto/img_21.png" alt="The classics for 3">
          <div>
            <h4>The classics for 3</h4>
            <p class="desc">1 McChicken™, 1 Big Mac™, 1 Royal Cheeseburger, 3 medium sized French Fries, 3 cold drinks</p>
            <div class="price">GBP 23.10</div>
          </div>
          <button class="add-btn">Add</button>
        </div>
        <div class="menu-item">
          <img src="assets/img/resto/img_23.png" alt="The classics for 3">
          <div>
            <h4>The classics for 3</h4>
            <p class="desc">1 McChicken™, 1 Big Mac™, 1 Royal Cheeseburger, 3 medium sized French Fries, 3 cold drinks</p>
            <div class="price">GBP 23.10</div>
          </div>
          <button class="add-btn">Add</button>
        </div>
        <div class="menu-item">
          <img src="assets/img/resto/img_25.png" alt="The classics for 3">
          <div>
            <h4>The classics for 3</h4>
            <p class="desc">1 McChicken™, 1 Big Mac™, 1 Royal Cheeseburger, 3 medium sized French Fries, 3 cold drinks</p>
            <div class="price">GBP 23.10</div>
          </div>
          <button class="add-btn">Add</button>
        </div>
      </div>
    </div>

    <!-- Fries -->
    <div class="menu-group">
      <h2>Fries</h2>
      <div class="menu-grid">
        <div class="menu-item">
          <img src="assets/img/resto/img_26.png" alt="Royal Cheese Burger with extra Fries">
          <div>
            <h4>Royal Cheese Burger with extra Fries</h4>
            <p class="desc">1 McChicken™, 1 Big Mac™, 1 Royal Cheeseburger, 3 medium</p>
            <div class="price">GBP 23.10</div>
          </div>
          <button class="add-btn">Add</button>
        </div>
        <div class="menu-item">
          <img src="assets/img/resto/img_28.png" alt="The classics for 3">
          <div>
            <h4>The classics for 3</h4>
            <p class="desc">1 McChicken™, 1 Big Mac™, 1 Royal Cheeseburger, 3 medium sized French Fries, 3 cold drinks</p>
            <div class="price">GBP 23.10</div>
          </div>
          <button class="add-btn">Add</button>
        </div>
        <div class="menu-item">
          <img src="assets/img/resto/img_30.png" alt="The classics for 3">
          <div>
            <h4>The classics for 3</h4>
            <p class="desc">1 McChicken™, 1 Big Mac™, 1 Royal Cheeseburger, 3 medium sized French Fries, 3 cold drinks</p>
            <div class="price">GBP 23.10</div>
          </div>
          <button class="add-btn">Add</button>
        </div>
        <div class="menu-item">
          <img src="assets/img/resto/img_27.png" alt="The classics for 3">
          <div>
            <h4>The classics for 3</h4>
            <p class="desc">1 McChicken™, 1 Big Mac™, 1 Royal Cheeseburger, 3 medium sized French Fries, 3 cold drinks</p>
            <div class="price">GBP 23.10</div>
          </div>
          <button class="add-btn">Add</button>
        </div>
        <div class="menu-item">
          <img src="assets/img/resto/img_29.png" alt="The classics for 3">
          <div>
            <h4>The classics for 3</h4>
            <p class="desc">1 McChicken™, 1 Big Mac™, 1 Royal Cheeseburger, 3 medium sized French Fries, 3 cold drinks</p>
            <div class="price">GBP 23.10</div>
          </div>
          <button class="add-btn">Add</button>
        </div>
        <div class="menu-item">
          <img src="assets/img/resto/img_31.png" alt="The classics for 3">
          <div>
            <h4>The classics for 3</h4>
            <p class="desc">1 McChicken™, 1 Big Mac™, 1 Royal Cheeseburger, 3 medium sized French Fries, 3 cold drinks</p>
            <div class="price">GBP 23.10</div>
          </div>
          <button class="add-btn">Add</button>
        </div>
      </div>
    </div>

    <!-- Cold Drinks -->
    <div class="menu-group">
      <h2>Cold Drinks</h2>
      <div class="menu-grid">
        <div class="menu-item">
          <img src="assets/img/resto/img_32.png" alt="Royal Cheese Burger with extra Fries">
          <div>
            <h4>Royal Cheese Burger with extra Fries</h4>
            <p class="desc">1 McChicken™, 1 Big Mac™, 1 Royal Cheeseburger, 3 medium</p>
            <div class="price">GBP 23.10</div>
          </div>
          <button class="add-btn">Add</button>
        </div>
        <div class="menu-item">
          <img src="assets/img/resto/img_34.png" alt="The classics for 3">
          <div>
            <h4>The classics for 3</h4>
            <p class="desc">1 McChicken™, 1 Big Mac™, 1 Royal Cheeseburger, 3 medium sized French Fries, 3 cold drinks</p>
            <div class="price">GBP 23.10</div>
          </div>
          <button class="add-btn">Add</button>
        </div>
        <div class="menu-item">
          <img src="assets/img/resto/img_36.png" alt="The classics for 3">
          <div>
            <h4>The classics for 3</h4>
            <p class="desc">1 McChicken™, 1 Big Mac™, 1 Royal Cheeseburger, 3 medium sized French Fries, 3 cold drinks</p>
            <div class="price">GBP 23.10</div>
          </div>
          <button class="add-btn">Add</button>
        </div>
        <div class="menu-item">
          <img src="assets/img/resto/img_33.png" alt="The classics for 3">
          <div>
            <h4>The classics for 3</h4>
            <p class="desc">1 McChicken™, 1 Big Mac™, 1 Royal Cheeseburger, 3 medium sized French Fries, 3 cold drinks</p>
            <div class="price">GBP 23.10</div>
          </div>
          <button class="add-btn">Add</button>
        </div>
        <div class="menu-item">
          <img src="assets/img/resto/img_35.png" alt="The classics for 3">
          <div>
            <h4>The classics for 3</h4>
            <p class="desc">1 McChicken™, 1 Big Mac™, 1 Royal Cheeseburger, 3 medium sized French Fries, 3 cold drinks</p>
            <div class="price">GBP 23.10</div>
          </div>
          <button class="add-btn">Add</button>
        </div>
        <div class="menu-item">
          <img src="assets/img/resto/img_37.png" alt="The classics for 3">
          <div>
            <h4>The classics for 3</h4>
            <p class="desc">1 McChicken™, 1 Big Mac™, 1 Royal Cheeseburger, 3 medium sized French Fries, 3 cold drinks</p>
            <div class="price">GBP 23.10</div>
          </div>
          <button class="add-btn">Add</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Infos livraison -->
  <section>
    <div class="container">
      <div class="grid-2" style="align-items:start">
        <div class="info-block">
          <h3>Delivery information</h3>
          <table>
            <tr><td>Monday</td><td>12:00 AM - 3:00 AM, 8:00 AM - 3:00 AM</td></tr>
            <tr><td>Tuesday</td><td>8:00 AM - 3:00 AM</td></tr>
            <tr><td>Wednesday</td><td>8:00 AM - 3:00 AM</td></tr>
            <tr><td>Thursday</td><td>8:00 AM - 3:00 AM</td></tr>
            <tr><td>Friday</td><td>8:00 AM - 3:00 AM</td></tr>
            <tr><td>Saturday</td><td>8:00 AM - 3:00 AM</td></tr>
            <tr><td>Sunday</td><td>8:00 AM - 12:00 AM</td></tr>
          </table>
          <p style="margin-top:10px;font-size:14px;color:#555"><b>Estimated time until delivery:</b> 20 min</p>
        </div>
        <div class="info-block">
          <h3>Contact information</h3>
          <p style="font-size:14px;color:#555;margin-bottom:12px">If you have allergies or other dietary restrictions, please contact the restaurant. The restaurant will provide food-specific information upon request.</p>
          <table>
            <tr><td>Phone number</td><td>+934443-43</td></tr>
            <tr><td>Website</td><td>http://mcdonalds.uk/</td></tr>
          </table>
        </div>
      </div>
    </div>
  </section>

  <!-- Restaurants similaires -->
  <section>
    <div class="container">
      <div class="section-head">
        <h2>Similar Restaurants</h2>
        <a href="{{ route('restaurants') }}">View All &rarr;</a>
      </div>
      <div class="grid-6">
        <a href="{{ route('restaurants') }}" class="resto-card">
          <img src="assets/img/home/img_16.png" alt="McDonald's London">
          <h3>McDonald's London</h3>
        </a>
        <a href="{{ route('restaurants') }}" class="resto-card">
          <img src="assets/img/home/img_17.png" alt="Papa Johns">
          <h3>Papa Johns</h3>
        </a>
        <a href="{{ route('restaurants') }}" class="resto-card">
          <img src="assets/img/home/img_18.png" alt="KFC West London">
          <h3>KFC West London</h3>
        </a>
        <a href="{{ route('restaurants') }}" class="resto-card">
          <img src="assets/img/home/img_19.png" alt="Texas Chicken">
          <h3>Texas Chicken</h3>
        </a>
        <a href="{{ route('restaurants') }}" class="resto-card">
          <img src="assets/img/home/img_20.png" alt="Burger King">
          <h3>Burger King</h3>
        </a>
        <a href="{{ route('restaurants') }}" class="resto-card">
          <img src="assets/img/home/img_21.png" alt="Shaurma 1">
          <h3>Shaurma 1</h3>
        </a>
      </div>
    </div>
  </section>

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
