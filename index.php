<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Febiola Lengkong -  Portofolio</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
      <h1><a href="#about"><img src="assets/FEBBY.png" alt="Febby"></a></h1>
        <nav>
          <ul>
            <li><a href="#about">About Me</a></li>
            <li><a href="#gallery">Gallery</a></li>
            <li><a href="#blog">Blog</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </nav>
      </header>
      <main>

        <!-- SECTION ABOUT -->
        <section id="about">
          <div class="about-content" style="display: flex; align-items: center;">
            <div style="flex: 1;">
              <p class="about-text">Febiola Lengkong</p>
              <p class="about-text">I'm Febiola Lengkong, a 4th-semester student in Informatics Engineering at Sam Ratulangi University. Although my studies focus on the technical side, I also love design. I love bringing creativity to the world of coding through UI/UX design. Check out my portfolio to see how I blend the best of both worlds and let's create something amazing together!</p>
            </div>
            <div style="flex-shrink: 1; margin-left: 20px;">
              <img src="assets/About me.png" alt="About me Image" style="max-width: 100%; height: auto;">
            </div>            
          </div>
        </section>
        
        <!-- SECTION GALLERY -->
        <section id="gallery">
          <h2>Gallery</h2>
          <div class="gallery-container">
            <div class="gallery-item">
              <img src="assets/flower.jpg" alt="Flower Image">
            </div>
            <div class="gallery-item">
              <img src="assets/febby.jpg" alt = "My Photo">
            </div>
            <div class="gallery-item">
              <img src="assets/water.jpg" alt="Water Image">
            </div>
          </div>
          </section>

          <!-- SECTION BLOG -->
        <section id="blog">
            <h2>Blog</h2>
            <?php include 'blog.php'; ?>
        </section>

        
          <!-- SECTION CONTACT ME -->
          <section id="contact">
            <h2>Contact me</h2>
            <p>Hubungi saya melalui :</p>
            <div class="social-icons">
              <div class="social-item">
                <a href="https://wa.me/081335492303" target="_blank" rel="noopener noreferrer">
                  <img src="assets/whatsapp.png" alt="WhatsApp">
                </a>
                <a href="https://wa.me/081335492303" target="_blank" rel="noopener noreferrer">
                  <p>WhatsApp</p>
                </a>
              </div>
              <div class="social-item">
                <a href="https://www.instagram.com/febihelenaaa?igsh=MTQ2OWppbTBtYTg2dA==" target="_blank" rel="noopener noreferrer">
                  <img src="assets/ig.png" alt="Instagram">
                </a>
                <a href="https://www.instagram.com/febihelenaaa?igsh=MTQ2OWppbTBtYTg2dA==" target="_blank" rel="noopener noreferrer">
                  <p>Instagram</p>
                </a>
              </div>
              <div class="social-item">
                <a href="https://www.linkedin.com/in/febiola-lengkong" target="_blank" rel="noopener noreferrer">
                  <img src="assets/linkedin.png" alt="LinkedIn">
                </a>
                <a href="https://www.linkedin.com/in/febiola-lengkong" target="_blank" rel="noopener noreferrer">
                  <p>LinkedIn</p>
                </a>
              </div>
            </div>
          </section>
      </main>
      <script src="script.js"></script>
</body>
</html>