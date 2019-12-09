<?php
    include 'Database/includes/autoloader.php';
    require "header.php"
?>
  <head>
      <title>Lao Pins | Store</title>
      <meta name="description" content="Lao Pin Store Frontpage Demo">
      <script src="store.js"></script>
  </head>
    
    <?php
        if (isset($_SESSION['id'])) {
            echo '<p class="signup-success login-status">You are logged in!</p>';
        } else {
            echo '<p class="signup-error login-status">You are logged out!</p>';
        }
    ?>
    <section class="container content-section">
      <h2 class="section-header">Store</h2>
      <div class="shop-items">
          <div class="shop-item">
            <span class="shop-item-title">Country of Laos</span>
              <img class="shop-item-image" src="./Images/LaoCountry.jpg">
                <div class="shop-item-details">
                  <span class="shop-item-price">$1.99</span>
                  <button class="btn btn-primary btn-add-item" role="button">ADD TO CART</button>
              </div>
          </div>
          <div class="shop-item">
            <span class="shop-item-title">Three-Headed Elephant</span>
              <img class="shop-item-image" src="./Images/LaoElephant.jpg">
                <div class="shop-item-details">
                  <span class="shop-item-price">$1.99</span>
                  <button class="btn btn-primary btn-add-item" role="button">ADD TO CART</button>
              </div>
          </div>
          <div class="shop-item">
              <span class="shop-item-title">Lao Pestle & Mortar</span>
                <img class="shop-item-image" src="./Images/LaoPestleMortar.jpg">
                  <div class="shop-item-details">
                      <span class="shop-item-price">$1.99</span>
                      <button class="btn btn-primary btn-add-item" role="button">ADD TO CART</button>
                  </div>
          </div>
          <div class="shop-item">
              <span class="shop-item-title">Laotian Woman</span>
                <img class="shop-item-image" src="./Images/LaoWoman.jpg">
                  <div class="shop-item-details">
                      <span class="shop-item-price">$1.99</span>
                      <button class="btn btn-primary btn-add-item" role="button">ADD TO CART</button>
                  </div>
          </div>
        </div>
      </div>
    </section>

    <section class="container content-section">
      <h2 class="section-header">CART</h2>

          <div class="cart-row">
              <span class="cart-item cart-header cart-column">ITEM</span>
              <span class="cart-price cart-header cart-column">PRICE</span>
              <span class="cart-quantity cart-header cart-column">QUANTITY</span>
          </div>

        <div class="cart-items">
        </div>

          <div class="cart-total"> 
              <strong class="cart-total-title">Total</strong>
              <span class="cart-total-price">$0</span>
          </div>
              <button class="btn btn-primary btn-purchase" role="button">PURCHASE</button>
    </section>

<?php
require "footer.php"
?>


</html>