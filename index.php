<!DOCTYPE php>
<php lang="en" dir="ltr">

<head>
  <title>DILIAY HAIRSTYLES BUCURESTI</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/style.css">
  <!-- The rel attribute specifies the relationship between the current document and the linked document. -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

  <header>
    <div class="container">
      <!-- Gruparea mai multor elemente de tipuri diferite in clase -->
      <div class="navbar">
        <div class="logo">
          <a href="index.php">
            <img src="image/logo.png" alt="Acasa" style="width:100px;height:100px;">
          </a>
        </div>

        <nav>
          <ul id="menuitem">
            <!-- Permite atribuirea unui identificator unic pt element -->
            <li class="active"><a href="index.php">Acasa</a></li>
            <li><a href="artisti.php">Echipa</a></li>
            <li><a href="ingrijire.php">Ingrijire</a></li>
            <li><a href="rezervari.php">Programari</a></li>
          </ul>
        </nav>
        <span class="fa fa-bars" onclick="menutoggle()"></span>
      </div>

      <div class="home flex">
        <div class="left">
          <h2>Bine ai venit!</h2>
          <p>
            La salonul nostru de coafură, frumusețea se întâlnește cu profesionalismul, iar fiecare vizită devine o
            experiență de răsfăț și transformare. Oferim servicii de coafură, vopsit, styling și îngrijire adaptate
            nevoilor fiecărui client, într-un spațiu elegant și relaxant. Echipa noastră este mereu la curent cu cele
            mai noi tendințe și tehnici, astfel încât tu să te simți mereu încrezătoare și plină de farmec. Fie că vrei
            un look îndrăzneț sau o schimbare subtilă, suntem aici să te ajutăm să-ți pui în valoare stilul unic și
            personalitatea.


</body>
<div class="dots flex">
</div>
</div>
<div class="right">
  <div class="img">
    <img src="image/h.png" alt="">
  </div>
</div>
</div>
</div>
</header>





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


<section class="about">
  <div class="container">
    <h2>Dorești o coafura?</h2>
    <div class="grid">
      <div class="item">
        <h2>Programează-te</h2>
        <p> Programează-te acum și bucură-te de o experiență personalizată, într-un ambient plin de rafinament și
          atenție la detalii. Indiferent dacă îți dorești o schimbare de look sau doar un moment de răsfăț.
        </p>
      </div>
      <div class="item">
        <h2>Stabilim detaliile</h2>
        <p> Stabilim împreună fiecare detaliu, de la tipul de serviciu dorit până la stilul final, astfel încât
          rezultatul să fie exact așa cum ți-l imaginezi sau chiar mai bun. Îți oferim consultanță personalizată.
        </p>
      </div>
      <div class="item">
        <h2>Vii la salon</h2>
        <p>Vii la salon și intri într-un spațiu unde fiecare detaliu e gândit pentru confortul și starea ta de bine. Te
          întâmpinăm cu zâmbet, atmosferă relaxantă și o echipă gata să-ți ofere o experiență plăcută.
        </p>
      </div>
    </div>

    <div class="content flex">
      <div class="left">
        <div class="img">
          <img src="image/a.png" alt="">
        </div>
      </div>
      <div class="right">
        <h2>Despre noi</h2>
        <p>
          Suntem un salon dedicat frumuseții autentice, unde fiecare client devine parte dintr-o experiență unică,
          creată cu grijă, pasiune și atenție la detalii. Ne bazăm pe profesionalism, produse de calitate și o abordare
          personalizată, pentru ca fiecare vizită să se transforme într-un moment special. Credem că stilul tău vorbește
          despre tine, iar misiunea noastră este să-l punem în valoare prin servicii moderne, adaptate nevoilor tale și
          un ambient care inspiră relaxare și încredere.

      </div>
    </div>
  </div>
</section>


<section class="gallery">
  <!--Grupeaza continut pe o tema comuna-->
  <h2>Puțin din munca noastră </h2>
  <div class="image">
    <div class="img img_item1">
      <img src="image/I1.png">
    </div>
    <div class="img img_item2">
      <img src="image/l2.png">
    </div>
    <div class="img img_item3">
      <img src="image/I3.jpg">
    </div>
    <div class="img img_item4">
      <img src="image/I4.jpg">
    </div>
    <div class="img img_item5">
      <img src="image/I5.jpg">
    </div>
    <div class="img img_item6">
      <img src="image/I6.png">
    </div>
  </div>
</section>


<section class="customer">
  <div class="container">
    <h2>Ce mai aștepți?</h2>
    <!-- <div class="items grid">
      <div class="box">
        <div class="para">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="image flex ">
          <div class="img">
            <img src="image/c1.jpg">
          </div>
          <div class="text">
            <h3>Ionel Xulescu</h3>
            <p>Client</p>
          </div>
        </div>
      </div>
      <div class="box">
        <div class="para">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="image flex ">
          <div class="img">
            <img src="image/c2.jpg">
          </div>
          <div class="text">
            <h3>Marcel Pixulescu</h3>
            <p>Client</p>
          </div> -->
  </div>
  </div>
  </div>
  </div>
</section>

<footer>
  <div class="container">
    <div class="left">
      <div class="top flex">
      </div>
    </div>
  </div>
  <div class="right">
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
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2732.800176166614!2d26.097337015784094!3d44.42683507913802!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40b1f5d8c9c5e3b1%3A0x2c9f9b2c9b2c9b2c9!2sBassam%20Concept%20Salon!5e0!3m2!1sro!2sro!4v1650971633951!5m2!1sro!2sro"
        width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </div>
  </div>
</footer>
<p class="legal">Copyright (c) 2025 DIALIAY</p>
</body>

</php>