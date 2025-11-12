<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon"  href="dimi.png">
  <title>The House of Dimsum</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <style>
  body {
    padding-top: 100px;
  }
  .timer {
    background-color: #343a40;
    color: #fff;
    text-align: center;
    padding: 10px 0;
    font-size: 1.2rem;
    position: fixed;
    top: 0;
    width: 100%;
    z-index: 1000;
  }
  .section {
    padding: 60px 0;
  }
  .section-title {
    font-size: 2rem;
    margin-bottom: 20px;
  }
  /* Center all paragraph text */
  p {
    text-align: center;
  }
</style>
</head>
<body>

  <!-- Timer at the top -->
  <div class="timer" id="timer">
    Countdown: <span id="countdown">00:00:00</span>
  </div>

  <!-- Navigation -->
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" style="top:40px;">
  <div class="container">
    <a class="navbar-brand" href="#">The House of Dimsum</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
         <li class="nav-item">
          <a class="nav-link" href="https://x.com/i/communities/1987856733205897607" target="_blank">
            <i >Community</i>
          </a>
        </li>
        <!-- Telegram -->
        <li class="nav-item">
          <a class="nav-link" href="https://t.me/YourTelegramHandle" target="_blank">
            <i class="fab fa-telegram fa-lg"></i>
          </a>
        </li>
        <!-- Threads -->
        <li class="nav-item">
          <a class="nav-link" href="https://www.threads.net/YourThreadsProfile" target="_blank">
            <i class="fab fa-instagram fa-lg"></i> <!-- Threads uses Instagram icon fallback -->
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>
  <section id="featured-image" class="section text-center py-5">
  <div class="container">
    <img src="dim5.jpg" id="featured-img" class="img-fluid rounded" alt="Featured Image" style="max-width:400px;">
  </div>
</section>
<section id="gallery" class="section bg-light">
  <div class="container">
    <h2 class="section-title text-center mb-4">Gallery</h2>
    <div class="row">
      <!-- Main Random Image -->
      <div class="col-md-6 text-center mb-4 mb-md-0">
        <img src="" id="gallery-main-img" class="img-fluid rounded" alt="Gallery Image">
      </div>

      <!-- Tiles / Thumbnails (2 rows × 3 columns) -->
      <div class="col-md-6">
        <div class="row" id="gallery-tiles">
          <!-- JS will insert tiles here -->
        </div>
      </div>
    </div>
  </div>
</section>
  <section id="vision" class="section bg-light">
    <div class="container">
      <h2 class="section-title"><center>🥟 VISION</h2>
      <p>To make $DIM the universal currency of joy and community — where every dim sum shared connects hearts, cultures, and fortunes across the world. 🌏✨</p>
    </div>
  </section>

  <!-- Mission Section -->
  <section id="mission" class="section">
    <div class="container">
      <h2 class="section-title"><center>🍵 MISSION</h2>
      <p>Our mission is to bridge tradition and technology by turning $DIM into the official payment of dim sum houses worldwide.<br/>
We aim to:<br/>
🥢 Empower local restaurants with fast, borderless crypto payments<br/>
🥢 Celebrate Asian culture and community through every bite<br/>
🥢 Reward food lovers, creators, and merchants with $DIM — the golden dumpling of fortune
</p>
    </div>
  </section>

  <!-- About Section -->
  <section id="about" class="section bg-light">
    <div class="container">
      <h2 class="section-title"><center>About Us</h2>
      <p>🥢 $DIM — where ancient flavors meet modern fortunes</p>
    </div>
  </section>

  <!-- Contact Section -->
 

  <!-- Footer -->
  <footer class="bg-dark text-white text-center p-4">
    <p>&copy; <script>document.write(new Date().getFullYear());</script> Dimsum.</p>
  </footer>

  <!-- Scripts -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/color-thief/2.3.2/color-thief.umd.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    const countdownElement = document.getElementById('countdown');
    // Set target date: Nov 12, 2025, 8:00 PM
    const targetDate = new Date('2025-11-13T10:00:00');

    function updateCountdown() {
      const now = new Date();
      const distance = targetDate - now;

      if (distance <= 0) {
        countdownElement.textContent = "OFFICIAL LAUNCH DATE OF THE HOUSE OF DIMSUM  ON NOVEMBER 13, 2025  10:00 AM (PHILIPPINE TIME)";
        clearInterval(timerInterval);
        return;
      }

      const days = Math.floor(distance / (1000 * 60 * 60 * 24));
      const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000*60*60));
      const minutes = Math.floor((distance % (1000*60*60)) / (1000*60));
      const seconds = Math.floor((distance % (1000*60)) / 1000);

      countdownElement.textContent = 
        (days > 0 ? days + "d " : "") +
        String(hours).padStart(2, '0') + ":" +
        String(minutes).padStart(2, '0') + ":" +
        String(seconds).padStart(2, '0');
    }

    const timerInterval = setInterval(updateCountdown, 1000);
    updateCountdown();
  const galleryImages = [
  'dim1.jpg',
  'dim2.jpg',
  'dim3.jpg',
  'dim4.jpg',
  'dim5.jpg',
  'dim6.jpg',
  'dim2.jpg',
  'dim1.jpg',
  'dim7.jpg'
];

// Display one random main image
function displayRandomGalleryImage() {
  const randomIndex = Math.floor(Math.random() * galleryImages.length);
  const mainImg = document.getElementById('gallery-main-img');
  mainImg.src = galleryImages[randomIndex];
}

// Display tiles for all images
function displayGalleryTiles() {
  const tilesContainer = document.getElementById('gallery-tiles');
  galleryImages.forEach((imgSrc) => {
    const col = document.createElement('div');
    col.className = 'col-4';
    const img = document.createElement('img');
    img.src = imgSrc;
    img.className = 'img-fluid rounded';
    col.appendChild(img);
    tilesContainer.appendChild(col);
  });
}

// Initialize gallery
window.addEventListener('DOMContentLoaded', () => {
  displayRandomGalleryImage();
  displayGalleryTiles();
});
  </script>

</body>
</html>
