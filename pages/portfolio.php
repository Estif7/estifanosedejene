<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PORTFOLIO</title>

  <!--
    - favicon
  -->
  <!-- <link rel="shortcut icon" href="./assets/images/logo.ico" type="image/x-icon"> -->

  <!--
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/port-style.css">

  <!--
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>

  <!--
    - #MAIN
  -->

  <main>

    <!--
      - #main-content
    -->

    <div class="main-content">

      <!--
        - #NAVBAR
      -->

      <nav class="navbar">

        <ul class="navbar-list">

          <a href="../index.php">
            <button class="navbar-link">HOME</button>
          </a>        

          <li class="navbar-item">
            <button class="navbar-link active" data-nav-link>PORTFOLIO</button>
          </li>
          
          <a href="../pages/about-me.php">
            <button class="navbar-link" data-nav-link>ABOUT</button>
          </a>

          <a href="../pages/contact-me.php">
            <button class="navbar-link">CONTACT</button>
          </a>
        </ul>

      </nav>





      <!--
        - #ABOUT
      -->

      <article class="about  active" data-page="about">
        <section class="about-text">
      
      <!--
        - #PORTFOLIO
      -->

        <header>
          <h2 class="h2 article-title">Portfolio</h2>
        </header>

        <section class="projects">

          <ul class="filter-list">

            <!-- <li class="filter-item">
              <button class="active" data-filter-btn>All</button>
            </li>

            <li class="filter-item">
              <button data-filter-btn>Web design</button>
            </li>

            <li class="filter-item">
              <button data-filter-btn>Applications</button>
            </li>

            <li class="filter-item">
              <button data-filter-btn>Web development</button>
            </li>

          </ul> 

          <div class="filter-select-box">

            <button class="filter-select" data-select>

              <div class="select-value" data-selecct-value>Select category</div>

              <div class="select-icon">
                <ion-icon name="chevron-down"></ion-icon>
              </div>

            </button>

            <ul class="select-list">

              <li class="select-item">
                <button data-select-item>All</button>
              </li>

              <li class="select-item">
                <button data-select-item>Web design</button>
              </li>

              <li class="select-item">
                <button data-select-item>Applications</button>
              </li>

              <li class="select-item">
                <button data-select-item>Web development</button>
              </li>

            </ul>

          </div> -->

        <div class="card-container">
          <div class="card">
            <!--  card 1 -->
            <div class="small-images-container">
              <button class="nav-button left">‹</button>
              <div class="small-images-scroll">
                <div class="small-images">
                  <div class="small-image">
                    <img src="./portfolio-images/Maico-Furniture/Mock 1 (Gold) STACKED.jpg" alt="Small Image 1">
                    <span class="hover-text">Click to Enlarge</span>
                  </div>
                  <div class="small-image">
                    <img src="./portfolio-images/Maico-Furniture/Mock 2 (ORANGE) STACKED.jpg" alt="Small Image 2">
                    <span class="hover-text">Click to Enlarge</span>
                  </div>
                  <div class="small-image">
                    <img src="./portfolio-images/Maico-Furniture/Mock 3 (GREY).jpg" alt="Small Image 3">
                    <span class="hover-text">Click to Enlarge</span>
                  </div>
                  <div class="small-image">
                    <img src="./portfolio-images/Maico-Furniture/Banner (80cm x 4m).jpg" alt="Small Image 1">
                    <span class="hover-text">Click to Enlarge</span>
                  </div>
                  <div class="small-image">
                    <img src="./portfolio-images/Maico-Furniture/Banner_Mockup 1.jpg" alt="Small Image 2">
                    <span class="hover-text">Click to Enlarge</span>
                  </div>
                  <div class="small-image">
                    <img src="./portfolio-images/Maico-Furniture/Banner_Mockup 2.jpg" alt="Small Image 3">
                    <span class="hover-text">Click to Enlarge</span>
                  </div>
                </div>
              </div>
              <button class="nav-button right">›</button>
            </div>

            <!-- Main Image Container -->
            <div class="main-image-container">
              <img src="./portfolio-images/Maico-Furniture/LOGO.jpg" alt="Main Image" class="main-image">
              <div class="overlay">
                <span class="fas fa-eye"></span>
              </div>
            </div>

            <!-- Title and Description -->
            <h2 class="title">Maico Furniture & Interior</h2>
            <p class="description">I designed a unique logo, business cards, a billboard, and a striking banner for this company based on their brand identity and marketing goals.</p>
          </div>

          <div class="card">
          <!--  card 2 -->
            <div class="small-images-container">
              <button class="nav-button left">‹</button>
              <div class="small-images-scroll">
                <div class="small-images">
                  <div class="small-image">
                    <img src="./portfolio-images/Rex-Photography/REX - Logo 2-01.jpg" alt="Small Image 1">
                    <span class="hover-text">Click to Enlarge</span>
                  </div>
                  <div class="small-image">
                    <img src="./portfolio-images/Rex-Photography/REX - Logo 3-01.jpg" alt="Small Image 2">
                    <span class="hover-text">Click to Enlarge</span>
                  </div>
                  <div class="small-image">
                    <img src="./portfolio-images/Rex-Photography/REX - Logo-01.jpg" alt="Small Image 3">
                    <span class="hover-text">Click to Enlarge</span>
                  </div>
                </div>
              </div>
              <button class="nav-button right">›</button>
            </div>

            <!-- Main Image Container -->
            <div class="main-image-container">
              <img src="./portfolio-images/Rex-Photography/REX - Business Card-01.jpg" alt="Main Image" class="main-image">
              <div class="overlay">
                <span class="fas fa-eye"></span>
              </div>
            </div>

            <!-- Title and Description -->
            <h2 class="title">Rex Photo Studio</h2>
            <p class="description">I designed a simple Logo and Business Card for this company based on their request for simplicity and neatness.</p>
          </div>
          

          <div class="card">
            <!-- Card 3 -->
            <div class="small-images-container">
              <button class="nav-button left">‹</button>
              <div class="small-images-scroll">
                <div class="small-images">
                  <div class="small-image">
                    <img src="./portfolio-images/Designer-Fekadu/Mockup 2 Design 1.jpg" alt="Small Image 1">
                    <span class="hover-text">Click to Enlarge</span>
                  </div>
                  <div class="small-image">
                    <img src="./portfolio-images/Designer-Fekadu/Business Card - Mockup 2.jpg" alt="Small Image 2">
                    <span class="hover-text">Click to Enlarge</span>
                  </div>
                  <div class="small-image">
                    <img src="./portfolio-images/Designer-Fekadu/Mockup 3 Design 1.jpg" alt="Small Image 3">
                    <span class="hover-text">Click to Enlarge</span>
                  </div>
                  <div class="small-image">
                    <img src="./portfolio-images/Designer-Fekadu/Mockup 1 Design 1.jpg" alt="Small Image 1">
                    <span class="hover-text">Click to Enlarge</span>
                  </div>
                  <div class="small-image">
                    <img src="./portfolio-images/Designer-Fekadu/Mockup 2 Design 2.jpg" alt="Small Image 2">
                    <span class="hover-text">Click to Enlarge</span>
                  </div>
                </div>
              </div>
              <button class="nav-button right">›</button>
            </div>

            <!-- Main Image Container -->
            <div class="main-image-container">
              <img src="./portfolio-images/Designer-Fekadu/Business Card - Mockup 1.jpg" alt="Main Image" class="main-image">
              <div class="overlay">
                <span class="fas fa-eye"></span>
              </div>
            </div>

            <!-- Title and Description -->
            <h2 class="title">Designer Fekadu</h2>
            <p class="description">I designed a sublime Logo and Business Card for this client utilizing a traditional Ethiopian clothing aesthetic as per my client's inquiry.</p>
          </div>


          <div class="card">
            <!-- Card 4 -->
            <div class="small-images-container">
              <button class="nav-button left">‹</button>
              <div class="small-images-scroll">
                <div class="small-images">
                  <div class="small-image">
                    <img src="./portfolio-images/Yaya-Spareparts/Yaya Banner - MOCKUP.jpg" alt="Small Image 1">
                    <span class="hover-text">Click to Enlarge</span>
                  </div>
                  <div class="small-image">
                    <img src="./portfolio-images/Yaya-Spareparts/Free Creative Business Card Mockup.jpg" alt="Small Image 2">
                    <span class="hover-text">Click to Enlarge</span>
                  </div>
                  <div class="small-image">
                    <img src="./portfolio-images/Yaya-Spareparts/Yaya Banner - MOCKUP.jpg" alt="Small Image 3">
                    <span class="hover-text">Click to Enlarge</span>
                  </div>
                </div>
              </div>
              <button class="nav-button right">›</button>
            </div>

            <!-- Main Image Container -->
            <div class="main-image-container">
              <img src="./portfolio-images/Yaya-Spareparts/Free Creative Business Card Mockup.jpg" alt="Main Image" class="main-image">
              <div class="overlay">
                <span class="fas fa-eye"></span>
              </div>
            </div>

            <!-- Title and Description -->
            <h2 class="title">Yaya Spareparts</h2>
            <p class="description">I designed a minimalistic Billboard, and a Business Card for this auto shop.</p>
          </div>

          <div class="card">
            <!-- Card 5 -->
            <div class="small-images-container">
              <button class="nav-button left">‹</button>
              <div class="small-images-scroll">
                <div class="small-images">
                  <div class="small-image">
                    <img src="./portfolio-images/Mark-Design/Mark Design - Logo on Bag Mockup.jpg" alt="Small Image 1">
                    <span class="hover-text">Click to Enlarge</span>
                  </div>
                  <div class="small-image">
                    <img src="./portfolio-images/Mark-Design/Mark Design - Business Card Mockup 2.jpg" alt="Small Image 2">
                    <span class="hover-text">Click to Enlarge</span>
                  </div>
                  <div class="small-image">
                    <img src="./portfolio-images/Mark-Design/Mark Design - Logo Mockup.jpg" alt="Small Image 3">
                    <span class="hover-text">Click to Enlarge</span>
                  </div>
                </div>
              </div>
              <button class="nav-button right">›</button>
            </div>

            <!-- Main Image Container -->
            <div class="main-image-container">
              <img src="./portfolio-images/Mark-Design/Mark Design - Business Card Mockup 1.jpg" alt="Main Image" class="main-image">
              <div class="overlay">
                <span class="fas fa-eye"></span>
              </div>
            </div>

            <!-- Title and Description -->
            <h2 class="title">Markos Design<</h2>
            <p class="description">I designed an elegant logo and business card for this client, featuring a traditional Ethiopian clothing theme.</p>
          </div>

          <!-- modal -->
          <div class="modal">
            <span class="close">&times;</span>
            <div class="modal-content">
              <div class="magnifier-lens"></div>
            </div>
          </div>
        </div>
        
        </section>

      </article>

      <footer class="footer">
        <div class="footer-content">
            <div class="social-icons">
                <a href="#" class="social-link" aria-label="Facebook">
                    <ion-icon name="logo-facebook"></ion-icon>
                </a>
                <a href="#" class="social-link" aria-label="Telegram">
                    <ion-icon name="paper-plane-outline"></ion-icon>
                </a>
                <a href="#" class="social-link" aria-label="Instagram">
                    <ion-icon name="logo-instagram"></ion-icon>
                </a>
            </div>
            <a href="../pages/contact-me/admin/index.php" class="admin-login">Admin Login</a>
        </div>
    
        <hr class="thin-line">
    
        <p class="footer-text">©2024 Estif Creation. All Rights Reserved.</p>
    </footer>
    
    

    </div>

  </main>

  <!--
    - custom js link
  -->

  <script src="./assets/js/script.js"></script>

  <!--
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>