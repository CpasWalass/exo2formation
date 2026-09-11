<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tandoori Pizza London - Order.uk</title>
  <link rel="stylesheet" href="{{ asset('css/base.css') }}">
  <link rel="stylesheet" href="{{ asset('css/resto.css') }}">
  <link rel="stylesheet" href="{{ asset('css/checkout.css') }}">
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
    <!-- Couverture -->
    <img src="assets/img/checkout/img_00.png" alt="Tandoori Pizza London" class="resto-cover">

    <!-- En-tête restaurant -->
    <div class="resto-head">
      <div>
        <h1>Tandoori Pizza London</h1>
        <p class="tag">Desi Flavours with a blend of Italian aesthetics!</p>
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
    <p style="margin:-8px 0 18px;color:var(--orange);font-weight:700">Order from Tandoori Pizza London &middot; Sort by <u>Pricing</u></p>

    <div class="menu-layout menu-3">
      <!-- Navigation menu (gauche) -->
      <nav class="menu-nav">
        <a href="#" class="active">Menu</a>
        <a href="#">Pizzas</a>
        <a href="#">Garlic Bread</a>
        <a href="#">Calzone</a>
        <a href="#">Kebabs</a>
        <a href="#">Salads</a>
        <a href="#">Cold drinks</a>
        <a href="#">Happy Meal</a>
        <a href="#">Desserts</a>
        <a href="#">Hot drinks</a>
        <a href="#">Sauces</a>
        <a href="#">Orbit <span class="off">-20%</span></a>
      </nav>

      <!-- Contenu -->
      <div>
        <div class="offer-banner">
          <b>Special Offer</b>
          <span class="tag-off">First Order Discount -20%</span>
        </div>

        <div class="menu-group">
          <h2>Pizzas</h2>

          <div class="menu-item oi-item">
            <h4>Farm House Xtreme Pizza</h4>
            <p class="desc">1 McChicken, 1 Big Mac, 1 Royal Cheeseburger, 3 medium sized French Fries, 3 cold drinks.</p>
            <div class="stars">&#9733;&#9733;&#9733;&#9733;&#9733; <span>4.5</span></div>
            <div class="sizes">
              <span class="chip">Small &middot; GBP 21.90</span>
              <span class="chip">Medium &middot; GBP 25.90</span>
              <span class="chip active">Large &middot; GBP 27.90</span>
              <span class="chip">XL Large with Sauces &middot; GBP 32.90</span>
            </div>
            <div class="oi-foot">
              <div class="price">GBP 27.90</div>
              <button class="add-btn">Add</button>
            </div>
          </div>

          <div class="menu-item oi-item">
            <h4>Deluxe Pizza</h4>
            <p class="desc">1 McChicken, 1 Big Mac, 1 Royal Cheeseburger, 3 medium sized French Fries, 3 cold drinks.</p>
            <div class="stars">&#9733;&#9733;&#9733;&#9733;&#9733; <span>4.2</span></div>
            <div class="sizes">
              <span class="chip">Small &middot; GBP 21.90</span>
              <span class="chip">Medium &middot; GBP 25.90</span>
              <span class="chip active">Large &middot; GBP 27.90</span>
              <span class="chip">XL Large with Sauces &middot; GBP 32.90</span>
            </div>
            <div class="oi-foot">
              <div class="price">GBP 27.90</div>
              <button class="add-btn">Add</button>
            </div>
          </div>

          <div class="menu-item oi-item">
            <h4>Tandoori Pizza</h4>
            <p class="desc">1 McChicken, 1 Big Mac, 1 Royal Cheeseburger, 3 medium sized French Fries, 3 cold drinks.</p>
            <div class="stars">&#9733;&#9733;&#9733;&#9733;&#9733; <span>4.6</span></div>
            <div class="sizes">
              <span class="chip">Small &middot; GBP 21.90</span>
              <span class="chip">Medium &middot; GBP 25.90</span>
              <span class="chip active">Large &middot; GBP 27.90</span>
              <span class="chip">XL Large with Sauces &middot; GBP 32.90</span>
            </div>
            <div class="oi-foot">
              <div class="price">GBP 27.90</div>
              <button class="add-btn">Add</button>
            </div>
          </div>

          <div class="menu-item oi-item">
            <h4>Farm House Xtreme Pizza</h4>
            <p class="desc">1 McChicken, 1 Big Mac, 1 Royal Cheeseburger, 3 medium sized French Fries, 3 cold drinks.</p>
            <div class="stars">&#9733;&#9733;&#9733;&#9733;&#9733; <span>4.4</span></div>
            <div class="sizes">
              <span class="chip">Small &middot; GBP 21.90</span>
              <span class="chip">Medium &middot; GBP 25.90</span>
              <span class="chip active">Large &middot; GBP 27.90</span>
              <span class="chip">XL Large with Sauces &middot; GBP 32.90</span>
            </div>
            <div class="oi-foot">
              <div class="price">GBP 27.90</div>
              <button class="add-btn">Add</button>
            </div>
          </div>
        </div>
      </div>

      <!-- Basket -->
      <aside class="basket">
        <h3>My Basket</h3>
        <div class="basket-item">
          <img src="assets/img/checkout/img_19.png" alt="12&quot; Vegitarian Pizza">
          <div class="nm">12&quot; Vegitarian Pizza<small>No Mushrooms + green peppers</small></div>
          <span class="pr">GBP 27.90</span>
        </div>
        <div class="basket-item">
          <img src="assets/img/checkout/img_20.png" alt="17&quot; Tandoori Pizza">
          <div class="nm">17&quot; Tandoori Pizza<small>No Mushrooms + green peppers</small></div>
          <span class="pr">GBP 17.90</span>
        </div>
        <div class="basket-item">
          <img src="assets/img/checkout/img_22.png" alt="Coke">
          <div class="nm">Coke Coca Cola</div>
          <span class="pr">GBP 4.90</span>
        </div>
        <div class="basket-item">
          <img src="assets/img/checkout/img_26.png" alt="12&quot; Vegitarian Pizza">
          <div class="nm">12&quot; Vegitarian Pizza<small>No Mushrooms + green peppers</small></div>
          <span class="pr">GBP 27.90</span>
        </div>
        <div class="basket-lines">
          <div class="row"><span>Sub Total:</span><span>GBP 127.90</span></div>
          <div class="row"><span>Discounts:</span><span style="color:var(--green)">-3.00</span></div>
          <div class="row"><span>Delivery Fee:</span><span>2.50</span></div>
          <div class="row total"><span>Total to pay</span><span>GBP 127.90</span></div>
        </div>
        <div class="coupon">&#127873; Choose your free item..</div>
        <div class="coupon">&#128221; Apply Coupon Code here</div>
        <div class="delivery-toggle">
          <div class="opt active"><b>Delivery</b>Starts at 17:50</div>
          <div class="opt"><b>Collection</b>Starts at 16:50</div>
        </div>
        <a href="{{ route('cart') }}" class="btn">Checkout!</a>
      </aside>
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
            <tr><td>Website</td><td>http://tandooripizza.uk/</td></tr>
          </table>
        </div>
      </div>
    </div>
  </section>

  <!-- Avis clients -->
  <section>
    <div class="container">
      <div class="section-head">
        <h2>Customer Reviews <span style="color:var(--orange)">3.4</span></h2>
        <a href="#">1,360 reviews</a>
      </div>
      <div class="review">
        <div class="who"><span class="avatar">S</span><div><b>st Glx</b><small>South London &middot; 24th September, 2023</small></div></div>
        <p>The positive aspect was undoubtedly the efficiency of the service. The queue moved quickly, the staff was friendly, and the food was up to the usual McDonalds standard - hot and satisfying.</p>
      </div>
      <div class="review">
        <div class="who"><span class="avatar">D</span><div><b>David M.</b><small>Charing Cross &middot; 24th September, 2023</small></div></div>
        <p>Authentic tandoori flavour on a proper wood fired base. The Farm House Xtreme Pizza is a must try. Delivery was quick and hot.</p>
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
