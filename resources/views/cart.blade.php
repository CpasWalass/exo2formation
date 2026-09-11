<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Basket - Order.uk</title>
  <link rel="stylesheet" href="{{ asset('css/base.css') }}">
  <link rel="stylesheet" href="{{ asset('css/cart.css') }}">
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
        <a href="{{ route('track') }}">Track Order</a>
        <a href="#" class="login">Login/Signup</a>
      </div>
      <button class="hamburger" aria-label="Menu">&#9776;</button>
    </div>
  </nav>

  <div class="container">
    <p style="color:var(--orange);font-weight:700;margin:24px 0 0">Open until 3:00 AM</p>
    <h1 class="page-title">My Basket</h1>

    <div class="checkout-grid">
      <!-- Articles -->
      <div>
        <div class="cart-row">
          <img src="assets/img/cart/img_13.png" alt="12&quot; Vegitarian Pizza">
          <div class="nm">12&quot; Vegitarian Pizza
            <small>No Mushrooms + green peppers</small>
          </div>
          <div class="qty">- 1 +</div>
          <span class="pr">GBP 27.90</span>
        </div>
        <div class="cart-row">
          <img src="assets/img/cart/img_04.png" alt="17&quot; Tandoori Pizza">
          <div class="nm">17&quot; Tandoori Pizza
            <small>No Mushrooms + green peppers</small>
          </div>
          <div class="qty">- 1 +</div>
          <span class="pr">GBP 17.90</span>
        </div>
        <div class="cart-row">
          <img src="assets/img/cart/img_06.png" alt="Coke">
          <div class="nm">Coke Coca Cola
          </div>
          <div class="qty">- 1 +</div>
          <span class="pr">GBP 4.90</span>
        </div>
        <div class="cart-row">
          <img src="assets/img/cart/img_05.png" alt="12&quot; Vegitarian Pizza">
          <div class="nm">12&quot; Vegitarian Pizza
            <small>No Mushrooms + green peppers</small>
          </div>
          <div class="qty">- 1 +</div>
          <span class="pr">GBP 27.90</span>
        </div>

        <div class="warning">
          <span>&#9888;&#65039;</span>
          <span>Minimum delivery is <b>GBP 20</b>. You must spend <b>GBP 10</b> more for the checkout!</span>
        </div>
      </div>

      <!-- Totaux -->
      <aside class="totals">
        <h3 style="color:var(--navy);margin-bottom:10px">Order Summary</h3>
        <div class="row"><span>Sub Total:</span><span>GBP 127.90</span></div>
        <div class="row"><span>Discounts:</span><span style="color:var(--green)">-3.00</span></div>
        <div class="row"><span>Delivery Fee:</span><span>2.50</span></div>
        <div class="row total"><span>Total to pay</span><span>GBP 127.90</span></div>

        <div class="coupon">&#127873; Choose your free item..</div>
        <div class="coupon">&#128221; Apply Coupon Code here</div>

        <div class="delivery-toggle">
          <div class="opt active"><b>Delivery</b>Starts at 17:50</div>
          <div class="opt"><b>Collection</b>Starts at 16:50</div>
        </div>
        <a href="{{ route('track') }}" class="btn" style="display:block;text-align:center">Checkout!</a>
        <p style="font-size:12px;color:#888;text-align:center;margin-top:10px">Delivery &amp; Tax will be calculated in the next step</p>
      </aside>
    </div>
  </div>

  <!-- Barre panier mobile -->
  <div class="mobile-basket-bar">
    <span class="tt">Total to pay<b>GBP 127.90</b></span>
    <a href="{{ route('track') }}" class="btn">Checkout!</a>
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
