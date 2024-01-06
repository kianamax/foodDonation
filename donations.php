<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <title>Responsive Product Card</title>
</head>
<style type="text/css">
  body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
  background-color: #f4f4f4;
}

.product-cards-container {
  display: flex;
  justify-content: space-around;
  flex-wrap: wrap;
  max-width: 1200px;
  margin: 0 auto;
}

.product-card {
  flex: 0 0 calc(33.333% - 20px); /* Adjust the percentage as needed */
  margin: 10px;
  background-color: #fff;
  border-radius: 8px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  overflow: hidden;
  text-align: center;
  transition: transform 0.3s ease-in-out;
}

.product-card:hover {
  transform: scale(1.05);
}

.product-card img {
  width: 100%;
  height: auto;
  border-bottom: 1px solid #ddd;
}

.product-card h3 {
  margin: 15px 0;
  font-size: 1.5em;
  color: #333;
}

.product-card p.price {
  color: #e44d26;
  font-size: 1.2em;
  margin: 10px 0;
}

.donate-btn {
  position: fixed;
  top: 10px;
  left: 10px;
  background-color: #30fe6c;
  color: #222;
  padding: 10px 20px;
  border: none;
  border-radius: 20px;
  font-size: 1.2em;
  cursor: pointer;
}

.donate-btn:hover {
  background-color: #2ecc71;
}

.product-card button.btn {
  background-color: #e44d26;
  color: #fff;
  border: none;
  padding: 10px 20px;
  cursor: pointer;
  font-size: 1em;
}

/* Quick View Popup */
.quick-view-popup {
  display: none;
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.5);
  justify-content: center;
  align-items: center;
}

.popup-content {
  background-color: #fff;
  padding: 20px;
  border-radius: 8px;
  text-align: center;
  position: relative;
}

.close-btn {
  position: absolute;
  top: 10px;
  right: 10px;
  font-size: 1.5em;
  cursor: pointer;
  color: #333;
}

.quick-view-popup img {
  width: 100%;
  height: auto;
  margin-bottom: 15px;
}

</style>

<body>
  <button class="donate-btn">Donate</button>
  <div class="product-cards-container">
    
    <div class="product-card">
      <img src="product1.jpg" alt="Product 1">
      <h3>Product 1</h3>
      <p class="price">$19.99</p>
      <button class="btn" onclick="openQuickView()">Quick View</button>
    </div>
    <div class="product-card">
      <img src="product1.jpg" alt="Product 1">
      <h3>Product 1</h3>
      <p class="price">$19.99</p>
      <button class="btn" onclick="openQuickView()">Quick View</button>
    </div>
    <div class="product-card">
      <img src="product1.jpg" alt="Product 1">
      <h3>Product 1</h3>
      <p class="price">$19.99</p>
      <button class="btn" onclick="openQuickView()">Quick View</button>
    </div>
    <div class="product-card">
      <img src="product1.jpg" alt="Product 1">
      <h3>Product 1</h3>
      <p class="price">$19.99</p>
      <button class="btn" onclick="openQuickView()">Quick View</button>
    </div>
    <div class="product-card">
      <img src="product1.jpg" alt="Product 1">
      <h3>Product 1</h3>
      <p class="price">$19.99</p>
      <button class="btn" onclick="openQuickView()">Quick View</button>
    </div>
    <div class="product-card">
      <img src="product1.jpg" alt="Product 1">
      <h3>Product 1</h3>
      <p class="price">$19.99</p>
      <button class="btn" onclick="openQuickView()">Quick View</button>
    </div>
    <div class="product-card">
      <img src="product1.jpg" alt="Product 1">
      <h3>Product 1</h3>
      <p class="price">$19.99</p>
      <button class="btn" onclick="openQuickView()">Quick View</button>
    </div>
    <div class="product-card">
      <img src="product1.jpg" alt="Product 1">
      <h3>Product 1</h3>
      <p class="price">$19.99</p>
      <button class="btn" onclick="openQuickView()">Quick View</button>
    </div>
    <div class="product-card">
      <img src="product1.jpg" alt="Product 1">
      <h3>Product 1</h3>
      <p class="price">$19.99</p>
      <button class="btn" onclick="openQuickView()">Quick View</button>
    </div>

    <!-- Repeat this block for each product (up to 20) -->

  <!-- Quick View Popup -->
  <div class="quick-view-popup" id="quickViewPopup">
    <div class="popup-content">
      <span class="close-btn" onclick="closeQuickView()">×</span>
      <img src="product1.jpg" alt="Product 1">
      <h2>Product 1</h2>
      <p class="price">$19.99</p>
      <p>Description: Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      <button class="btn">Add to Cart</button>
    </div>
  </div>
  </div>

  <script src="scripts.js">
    function openQuickView() {
  document.getElementById('quickViewPopup').style.display = 'flex';
}

function closeQuickView() {
  document.getElementById('quickViewPopup').style.display = 'none';
}

  </script>
</body>
</html>
