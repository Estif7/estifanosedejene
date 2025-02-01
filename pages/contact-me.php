<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CONTACT ME</title>

  <!--
    - favicon
  -->
  <!-- <link rel="shortcut icon" href="./assets/images/logo.ico" type="image/x-icon"> -->

  <!--
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/contact-style.css">

  <!--
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
</head>

<body>

  <!--
    - #MAIN
  -->

  <main>

    <!--
      - #SIDEBAR
    -->

    <aside class="sidebar" data-sidebar>

      <div class="sidebar-info">

        <figure class="avatar-box">
          <img src="./assets/images/profile.png" alt="ESTIFANOSE DEJENE" width="80">
        </figure>

        <div class="info-content">
          <h1 class="name" title="ESTIFANOSE DEJENE">Estifanose Dejene</h1>

          <p class="title">Freelancer</p>
        </div>

        <button class="info_more-btn" data-sidebar-btn>
          <span>Show Contacts</span>

          <ion-icon name="chevron-down"></ion-icon>
        </button>

      </div>

      <div class="sidebar-info_more">

        <div class="separator"></div>

        <ul class="contacts-list">

          <li class="contact-item">

            <div class="icon-box">
              <ion-icon name="mail-outline"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title">Email</p>

              <a href="mailto:estifanosedejene7@gmail.com" class="contact-link">estifanosedejene7@gmail.com</a>
            </div>

          </li>

          <li class="contact-item">

            <div class="icon-box">
              <ion-icon name="phone-portrait-outline"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title">Phone</p>

              <a href="tel:+251947129747" class="contact-link">(+251) 947-129-747</a>
            </div>

          </li>

          <li class="contact-item">

            <div class="icon-box">
              <ion-icon name="calendar-outline"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title">Birthday</p>

              <time datetime="2001-03-20">March 20, 2001</time>
            </div>

          </li>

          <li class="contact-item">

            <div class="icon-box">
              <ion-icon name="Language"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title">Language</p>

              <a class="contact-link">English - B2</a>
              <a class="contact-link">Amharic - Native</a>
            </div>

          </li>

          <li class="contact-item">

            <div class="icon-box">
              <ion-icon name="location-outline"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title">Address</p>

              <address>Addis Ababa, Ethiopia.</address>
            </div>

          </li>

        </ul>

        <div class="separator"></div>

        <ul class="social-list">

          <li class="social-item">
            <a href="#" class="social-link">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>

          <li class="social-item">
            <a href="#" class="social-link" aria-label="Telegram">
              <ion-icon name="paper-plane-outline"></ion-icon>
            </a>
          </li>

          <li class="social-item">
            <a href="#" class="social-link">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>

        </ul>

      </div>

    </aside>





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
          
          <a href="../pages/portfolio.php">
            <button class="navbar-link" data-nav-link>PORTFOLIO</button>
          </a>
          
          <a href="../pages/about-me.php">
            <button class="navbar-link" data-nav-link>ABOUT</button>
          </a>

          <li class="navbar-item">
            <button class="navbar-link  active" data-nav-link>CONTACT</button>
          </li>

        </ul>

      </nav>

      <!--
        - #ABOUT
      -->

      <article class="about  active" data-page="about">

        <header>
          <h2 class="h2 article-title">Contact Me</h2>
        </header>
            <div class="contact-section">
              <!-- <div class="info-container">
                  <div class="photo-icon">
                      <img src="./images/male-operator.png" alt="Photo" />
                  </div>
                  <p class="description">I would love to hear from you! If you have any comment, feedback, request please fill out this form. I'll get back to you asap.</p>
              </div> -->
              <div class="contact-form">
                <form id="contactForm" method="post" autocomplete="off">
                  <div id="name-div" class="input-container">
                    <label for="name-input">Name</label>
                    <input id="name-input" type="text" name="name" class="input" required>
                  </div>
                  <div id="email-div" class="input-container">
                    <label for="email-input">Email</label>
                    <input id="email-input" type="email" name="email" class="input" required>
                  </div>
                  <div id="phone-div" class="input-container">
                    <label for="phone-input">Phone</label>
                    <input id="phone-input" type="tel" name="phone" class="input">
                  </div>
                  <div id="text-div" class="input-container">
                    <label for="text-input">Message</label>
                    <textarea id="text-input" name="message" class="input" required></textarea>
                  </div>
                  <button id="submit-btn" class="submit-btn" type="submit" class="btn">Send</button>
                  <div id="success-message" style="display:none" class="success-message">Message sent successfully!</div>
                  <div id="error-message" style="display:none" class="error-message">Failed to send message. Please try again.</div>

                </form>
              </div>
              
              <script>
                document.getElementById("contactForm").addEventListener("submit", async function (e) {
                e.preventDefault(); // Prevent default form submission

                const name = document.getElementById("name-input").value.trim();
                const email = document.getElementById("email-input").value.trim();
                const phone = document.getElementById("phone-input").value.trim();
                const message = document.getElementById("text-input").value.trim();
                const successMessage = document.getElementById("success-message");
                const errorMessage = document.getElementById("error-message");

                // Validate fields
                if (!name || !email || !message) {
                    errorMessage.textContent = "Please fill out all required fields.";
                    errorMessage.style.display = "block";
                    successMessage.style.display = "none";
                    return;
                }

                // Submit the form via AJAX
                const formData = new FormData();
                formData.append("name", name);
                formData.append("email", email);
                formData.append("phone", phone);
                formData.append("message", message);

                try {
                    const response = await fetch("controller/send.php", {
                        method: "POST",
                        body: formData,
                    });

                    const result = await response.text();
                    if (response.ok && result.includes("success")) {
                        successMessage.style.display = "block";
                        errorMessage.style.display = "none";
                        document.getElementById("contactForm").reset(); // Reset the form

                        // Hide success message after 5 seconds
                        setTimeout(() => {
                            successMessage.style.display = "none";
                        }, 5000);
                    } else {
                        errorMessage.textContent = result || "Failed to send message.";
                        errorMessage.style.display = "block";
                        successMessage.style.display = "none";

                        // Hide error message after 5 seconds
                        setTimeout(() => {
                            errorMessage.style.display = "none";
                        }, 5000);
                    }
                } catch (error) {
                    console.error("Error:", error);
                    errorMessage.textContent = "Failed to send message. Please try again.";
                    errorMessage.style.display = "block";
                    successMessage.style.display = "none";

                    // Hide error message after 5 seconds
                    setTimeout(() => {
                        errorMessage.style.display = "none";
                    }, 5000);
                }
            });

              </script>

        </section>

      </article>

      </article>

    </div>

  </main>

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