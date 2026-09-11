<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Special Offers - Meal Deal - Order.uk</title>
  <link rel="stylesheet" href="{{ asset('css/base.css') }}">
  <link rel="stylesheet" href="{{ asset('css/deals.css') }}">
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
        <a href="{{ route('deals') }}" class="active">Special Offers</a>
        <a href="{{ route('track') }}">Track Order</a>
        <a href="#" class="login">Login/Signup</a>
      </div>
      <button class="hamburger" aria-label="Menu">&#9776;</button>
    </div>
  </nav>

  <div class="container">

    <!-- Étape 1 : sélection de la pizza -->
    <div class="deal-flow" id="step1">
      <div class="crumbs">Special Offers <span>&gt;</span> Meal Deal 1</div>
      <h1>Please select your first Pizza</h1>

      <div class="pizza-grid">
        <div class="pizza-card selected">
          <img src="assets/img/deals/img_01.png" alt="Margherita">
          <h4>Margherita</h4>
          <span class="pick-num">1</span>
        </div>
        <div class="pizza-card selected">
          <img src="assets/img/deals/img_05.png" alt="Polo">
          <h4>Polo</h4>
          <span class="pick-num">1</span>
        </div>
        <div class="pizza-card">
          <img src="assets/img/deals/img_08.png" alt="Meat Fiesta">
          <h4>Meat Fiesta</h4>
          <span class="pick-num">2</span>
        </div>
        <div class="pizza-card">
          <img src="assets/img/deals/img_09.png" alt="Hawaiian">
          <h4>Hawaiian</h4>
          <span class="pick-num">2</span>
        </div>
        <div class="pizza-card">
          <img src="assets/img/deals/img_10.png" alt="Toscana">
          <h4>Toscana</h4>
          <span class="pick-num">2</span>
        </div>
      </div>

      <div class="flow-footer">
        <div class="total">Total to pay <span>GBP 127.90</span>
          <small>Delivery &amp; Tax will be calculated in the next step</small>
        </div>
        <div>
          <a href="{{ route('home') }}" class="btn outline" style="margin-right:10px">Take me back</a>
          <a href="#step2" class="btn">Next Step &rarr;</a>
        </div>
      </div>
    </div>

    <!-- Étape 2 : customisation -->
    <div class="deal-flow" id="step2">
      <div class="crumbs">Special Offers <span>&gt;</span> Meal Deal 1 <span>&gt;</span> Customise Pizza 1</div>
      <h1>Customise your chicken Pizza</h1>

      <img src="assets/img/customize/img_00.png" alt="Chicken Pizza" class="deal-hero-img">

      <div class="offer-banner" style="background:#0d1430">
        <b>&#10003; 4/4 Selected &middot; Please select up to 4 options free!</b>
        <span class="tag-off" style="background:var(--green)">you can still select 1 more item free</span>
      </div>

      <div class="toppings">
        <h3>Vegitable Toppings</h3>
        <div class="topping-grid">
          <label class="topping"><input type="checkbox" checked>Cheese</label>
          <label class="topping"><input type="checkbox" checked>Mushrooms</label>
          <label class="topping"><input type="checkbox" checked>Olives</label>
          <label class="topping"><input type="checkbox">Green peppers</label>
          <label class="topping"><input type="checkbox">Sweetcorn</label>
          <label class="topping"><input type="checkbox">Pineapples</label>
        </div>
      </div>

      <div class="toppings">
        <h3>Meat Toppings</h3>
        <div class="topping-grid">
          <label class="topping"><input type="checkbox">Chicken</label>
          <label class="topping"><input type="checkbox">Pepperoni</label>
          <label class="topping"><input type="checkbox">Beef</label>
          <label class="topping"><input type="checkbox">Chicken Tikka</label>
        </div>
      </div>

      <div class="toppings">
        <h3>Seafood Toppings</h3>
        <div class="topping-grid">
          <label class="topping"><input type="checkbox">Tomato</label>
          <label class="topping"><input type="checkbox">Jalape&ntilde;os</label>
          <label class="topping"><input type="checkbox">Onions</label>
          <label class="topping"><input type="checkbox">Salami</label>
          <label class="topping"><input type="checkbox">Fish</label>
          <label class="topping"><input type="checkbox">Prawns</label>
          <label class="topping"><input type="checkbox">Tuna</label>
          <label class="topping"><input type="checkbox">Anchovies</label>
        </div>
      </div>

      <div class="flow-footer">
        <div class="total">Total to pay <span>GBP 127.90</span>
          <small>Delivery &amp; Tax will be calculated in the next step</small>
        </div>
        <div>
          <a href="#step1" class="btn outline" style="margin-right:10px">Take me back</a>
          <a href="#step3" class="btn">Next Step &rarr;</a>
        </div>
      </div>
    </div>

    <!-- Étape 3 : instructions -->
    <div class="deal-flow" id="step3">
      <div class="crumbs">Special Offers <span>&gt;</span> Meal Deal 1 <span>&gt;</span> Customise Pizza 1 <span>&gt;</span> Instructions</div>
      <h1>Add your special request</h1>

      <img src="assets/img/request/img_00.png" alt="Chicken Pizza" class="deal-hero-img">

      <textarea class="req-box" placeholder="Write your special instructions here.."></textarea>

      <div class="flow-footer">
        <div class="total">Total to pay <span>GBP 127.90</span>
          <small>Delivery &amp; Tax will be calculated in the next step</small>
        </div>
        <div>
          <a href="#step2" class="btn outline" style="margin-right:10px">Take me back</a>
          <a href="{{ route('checkout') }}" class="btn">Add</a>
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
