<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel and Tourism</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
  </head>
  <body>

    <header>
      <a href="#" class="brand">Travel & Tourism</a>
      <div class="menu-btn"></div>
      <div class="navigation">
        <div class="navigation-items">
          <a href="#">Home</a>
          <a href="#">About</a>
          <a href="#">Explore</a>
          <a href="#">Gallery</a>
          <a href="#">Contact</a>
        </div>
      </div>
    </header>

    <section class="home">
      <video class="video-slide active" src="1.mp4" autoplay muted loop></video>
      <video class="video-slide" src="2.mp4" autoplay muted loop></video>
      <video class="video-slide" src="3.mp4" autoplay muted loop></video>
      <video class="video-slide" src="4.mp4" autoplay muted loop></video>
      <video class="video-slide" src="5.mp4" autoplay muted loop></video>
      <div class="content active">
        <h1>Magic Around<br><span>Every Corner.</span></h1>
        <a href="#">Read More</a>
      </div>
      <div class="content">
        <h1>Experience<br><span>Asia</span></h1>
        <p>Asia offers very diverse travel options. There are ultra modern, largely democratic countries like Japan and the East Asian Tigers (regions and countries) of Singapore, Hoiens such as Nepal.</p>
        <a href="#">Read More</a>
      </div>
      <div class="content">
        <h1>Adventures<br><span>of Africa</span></h1>
        <p>Tourism is an important economic sector for many countries in Africa. There are many countries that benefit heavily from tourism like Uganda, Algeria, Egypt, South Africa, Kenya, Morocco, Tunisia, Ghana and Tanzania.</p>
        <a href="#">Read More</a>
      </div>
      <div class="content">
        <h1>Dreaming of<br><span>Australia</span></h1>
        <p>Tourism in Australia is an important part of the Australia economy, and consists of domestic and international components. In the financial year 2014/15, tourism represented 3.0% of Australia's GDP contributing A$47.5 billion to the national economy.</p>
        <a href="#">Read More</a>
      </div>
      <div class="content">
        <h1>Discover<br><span>Europe</span></h1>
        <p>Tourism in Europe is a thriving industry with nearly 500 million travelers visiting here every year. From bohemian Prague to playful Paris and from lively Lisbon to eternal Rome, Europe has some of the best travel destinations in the world.</p>
        <a href="#">Read More</a>
      </div>
      <div class="media-icons">
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
      </div>
      <div class="slider-navigation">
        <div class="nav-btn active"></div>
        <div class="nav-btn"></div>
        <div class="nav-btn"></div>
        <div class="nav-btn"></div>
        <div class="nav-btn"></div>
      </div>
    </section>

    <script type="text/javascript">
    //Javacript for responsive navigation menu
    const menuBtn = document.querySelector(".menu-btn");
    const navigation = document.querySelector(".navigation");

    menuBtn.addEventListener("click", () => {
      menuBtn.classList.toggle("active");
      navigation.classList.toggle("active");
    });

    //Javacript for video slider navigation
    const btns = document.querySelectorAll(".nav-btn");
    const slides = document.querySelectorAll(".video-slide");
    const contents = document.querySelectorAll(".content");

    var sliderNav = function(manual){
      btns.forEach((btn) => {
        btn.classList.remove("active");
      });

      slides.forEach((slide) => {
        slide.classList.remove("active");
      });

      contents.forEach((content) => {
        content.classList.remove("active");
      });

      btns[manual].classList.add("active");
      slides[manual].classList.add("active");
      contents[manual].classList.add("active");
    }

    btns.forEach((btn, i) => {
      btn.addEventListener("click", () => {
        sliderNav(i);
      });
    });
    </script>

  </body>
</html>