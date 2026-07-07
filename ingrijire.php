<!DOCTYPE html>
<html lang="en" dir="ltr">
<title>Ingrijire</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<head>
  <header>
    <div class="container">
      <div class="navbar">
        <div class="logo">
          <a href="index.php">
            <img src="image/logo.png" alt="Acasa" style="width:100px;height:100px;">
          </a>
        </div>

        <nav>
          <ul id="menuitem">
            <li><a href="index.php">Acasa</a></li>
            <li><a href="artisti.php">Echipa</a></li>
            <li class="active"><a href="ingrijire.php">Ingrijire</a></li>
            <li><a href="rezervari.php">Programari</a></li>
          </ul>
        </nav>
        <span class="fa fa-bars" onclick="menutoggle()"></span>
      </div>
      <div class="artists">
        <div class="left2">
        </div>
      </div>

</head>
<script>
  var menuitem = document.getElementById("menuitem");
  menuitem.style.maxHeight = "0px";

  function menutoggle() {
    if (menuitem.style.maxHeight == '0px') {
      menuitem.style.maxHeight = "500px"
    } else {
      menuitem.style.maxHeight = "0px"
    }
  }

  window.addEventListener("scroll", function () {
    var header = document.querySelector("header");
    header.classList.toggle("sticky", window.scrollY > 0);
  })
</script>

<body>

  </div>
  <div class="home flex">
    <div class="content flex">
      <div class="leftme">
        <div class="imgme">
          <img src="image/balm.jpg" alt="">
        </div>
      </div>

      <div class="rightme">
        <br>
        <h2>Product</h2>
        <p>
          Produsele Wella sunt sinonime cu excelența în îngrijirea și colorarea părului, fiind preferate de hairstyliști
          profesioniști din întreaga lume. Formulate cu tehnologii avansate și ingrediente de înaltă calitate, acestea
          oferă rezultate remarcabile – de la culori vibrante și durabile, până la hidratare profundă și protecție
          termică. Fie că vorbim despre vopsea, tratamente sau produse de styling, Wella îmbină inovația cu grija pentru
          sănătatea părului, lăsându-l strălucitor, puternic și ușor de coafat. Alegerea perfectă pentru un look
          profesional, sănătos și personalizat.
        </p>
        </br>
      </div>
    </div>
  </div>
  </section>


</body>

</header>

<footer>
  <div class="container">
    <div class="left">
      <div class="top flex">
      </div>
    </div>
  </div>
  <div class="right2">
  </div>

  <div class="grid">
    <div class="item">
      <h2>About</h2>
      <p> We create beauty with care, passion, and a touch of style.
      </p>
    </div>
    <div class="item">
      <h2>Instagram</h2>
      <div class="insta">
        <a href="https://www.instagram.com/bassamconceptsalon/">
          <img src="image/insta.png" alt="Instagram" style="width:30px;height:30px;">
          <label>DIALIAY HAIRSTYLES</label>
        </a>
      </div>
    </div>
    <div class="item">
      <h2>Contacteaza-ne</h2>
      <i class="fa fa-map"></i>
      <label>Bulevardul Libertății 22, București 050707</label><br><br>
      <i class="fa fa-phone"></i>
      <label>Tel: 0748 473 714</label><br><br>
    </div>
    <div class="item">
      <iframe <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2732.800176166614!2d26.097337015784094!3d44.42683507913802!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40b1f5d8c9c5e3b1%3A0x2c9f9b2c9b2c9b2c9!2sBassam%20Concept%20Salon!5e0!3m2!1sro!2sro!4v1650971633951!5m2!1sro!2sro"
        width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </div>
  </div>
</footer>
<p class="legal">Copyright (c) 2025 DIALIAY</p>

</html>