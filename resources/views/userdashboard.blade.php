<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="assets/css/user.css">

    @vite('resources/css/app.css')
</head>
<body>
<div class="navbar">
    <a href="#default" class="logo">Fashion</a>
    <div class="narright">
        <a class="hom" href="#home">Home</a>
        <a  href="#about">About</a>
        <a  href="#service">Service</a>
        <a  href="#contact">Contact</a>
    </div>
</div>
<div class="mini">
    <h3>Call TO ORDER:07069388056</h3>
</div>
<main class="container">

    <!-- Left Column / Headphones Image -->
    <div class="left-column">
      <img data-image="black" src="/assets/img/black.png" alt="">
      <img data-image="blue" src="/assets/img/\blue.png" alt="">
      <img data-image="red" class="active" src="/assets/img/red.png" alt="">
    </div>


    <!-- Right Column -->
    <div class="right-column">

      <!-- Product Description -->
      <div class="product-description">
        <span>Headphones</span>
        <h1>Beats EP</h1>
        <p>The preferred choice of a vast range of acclaimed DJs. Punchy, bass-focused sound and high isolation. Sturdy headband and on-ear cushions suitable for live performance</p>
      </div>

      <!-- Product Configuration -->
      <div class="product-configuration">

        <!-- Product Color -->
        <div class="product-color">
          <span>Color</span>

          <div class="color-choose">
            <div>
              <input data-image="red" type="radio" id="red" name="color" value="red" checked>
              <label for="red"><span></span></label>
            </div>
            <div>
              <input data-image="blue" type="radio" id="blue" name="color" value="blue">
              <label for="blue"><span></span></label>
            </div>
            <div>
              <input data-image="black" type="radio" id="black" name="color" value="black">
              <label for="black"><span></span></label>
            </div>
          </div>

        </div>

        <!-- Cable Configuration -->
        <div class="cable-config">
          <span>Cable configuration</span>

          <div class="cable-choose">
            <button>Straight</button>
            <button>Coiled</button>
            <button>Long-coiled</button>
          </div>

          <a href="#">How to configurate your headphones</a>
        </div>
      </div>

      <!-- Product Pricing -->
      <div class="product-price">
        <span>148$</span>
        <a href="#" class="cart-btn">Add to cart</a>
      </div>
    </div>
  </main>

  <!-- Scripts -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js" charset="utf-8"></script>
  <script src="{{asset('assets/js/ja.js')}}" charset="utf-8"></script>
</body>
</html>
