<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;500;600;700;800&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" type="text/css" href="publics/css/style.css" />
    <link rel="icon" type="text/icon" href="/publics/img/code image.jpg" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Danny Quan</title>
  </head>
  <body>
    <div class="preloader">
      <div></div>
    </div>
    <div class="content">
      <nav class="row">
        <div class="nav-nav">
          <div class="brand_name"><h2>Danny Quan</h2></div>
          <ul class="list-item">
            <li><a href="index.html">Home</a></li>
            <li><a href="#section-about">About</a></li>
            <li><a href="#service-section">Service</a></li>
            <li><a href="#contact-section">Contact Me</a></li>
          </ul>
          <div class="hamburger">
            <div></div>
            <div></div>
            <div></div>
          </div>
        </div>
      </nav>

      <section class="section-1">
        <header>
          <div class="row">
            <div class="header-content" data-aos="fade-up" data-aos-delay="200">
              <h1>
                Hy! I Am <br />
                <span class="name">Sah Kwadwo Daniel.</span>
                <div>I'm a <span class="typed"></span></div>
              </h1>
              <p>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                Officia corrupti, veritatis ex nemo aspernatur natus! Similique
                mollitia non natus eos.
              </p>
              <div class="button">
                <a href="#contact-section" class="btn-full">Hire Me &rarr;</a>
              </div>
            </div>
            <div class="header-image" data-aos="zoom-in" data-aos-delay="200">
              <img src="/publics/img/header.svg" alt="" />
              <!-- <div class="image">
                <img
                  src="publics/img/[removal.ai]_tmp-60890add676e3.png"
                  alt="header image"
                />
              </div>
              <img
                src="publics/img/blob (4).svg"
                class="svg-1"
                alt="background image1"
              />
              <img
                src="publics/img/blob (3).svg"
                class="svg-2"
                alt="background image2"
              /> -->
            </div>
          </div>
          <div class="backdrop-obj"></div>
        </header>
      </section>
      <!-- section 2 here -->
      <section id="service-section" class="section-2">
        <div class="row">
          <div class="section-2-content">
            <div class="services" data-aos="fade-right" data-aos-delay="200">
              <h2>My awesome services</h2>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Maiores, blanditiis.
              </p>
              <div class="button">
                <a
                  href="/publics/doc/dany quan.pdf"
                  target="_blank"
                  class="btn-full"
                  >Download cv</a
                >
              </div>
            </div>
            <div class="card-1" data-aos="fade-left">
              <div class="icon"></div>
              <!-- <h1>&#128526;</h1> -->
              <img src="/publics/img/undraw_web_development_0l6v.svg" alt="" />
              <h3>Frontend Development</h3>
              <p>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                Consequatur itaque
              </p>
              <div class="button">
                <a href="#" class="btn-ghost">Learn More</a>
              </div>
            </div>
            <div class="card-card-1">
              <div class="card-2" data-aos="fade-up">
                <div class="icon"></div>
                <!-- <h1>&#128525;</h1> -->
                <img
                  src="/publics/img/undraw_web_developer_re_h7ie.svg"
                  alt=""
                />
                <h3>Backend Development</h3>
                <p>
                  Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                  Consequatur itaque
                </p>
                <div class="button">
                  <a href="#" class="btn-ghost">Learn More</a>
                </div>
              </div>
            </div>
            <div class="card-card-2">
              <div class="card-3" data-aos="fade-up">
                <div class="icon"></div>
                <!-- <h1>&#128514;</h1> -->
                <img src="/publics/img/undraw_mobile_web_-2-g8b.svg" alt="" />
                <h3>Mobile App Dev</h3>
                <p>
                  Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                  Consequatur itaque
                </p>
                <div class="button">
                  <a href="#" class="btn-ghost">Learn More</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- section 3 here -->
      <section class="section-3" id="section-about">
        <div class="row">
          <div class="about-sec">
            <h2>About Me</h2>
            <div class="about-grid">
              <div class="avatar" data-aos="fade-right"></div>
              <div class="toolkit" data-aos="fade-left">
                <div class="toolkit-left">
                  <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Nihil quod non tenetur iure nulla necessitatibus eos
                    corporis, consequatur veniam nisi. iure nulla
                  </p>
                  <div class="button">
                    <a
                      href="/publics/doc/dany quan.pdf"
                      target="_blank"
                      class="btn-full"
                      >Download cv</a
                    >
                  </div>
                </div>
                <div class="toolkit-right">
                  <div class="progress-1">
                    <p>Frontend Development</p>
                    <progress value="95" max="100">95%</progress>
                  </div>
                  <div class="progress-2">
                    <p>Backend Development</p>
                    <progress value="90" max="100">90%</progress>
                  </div>
                  <div class="progress-3">
                    <p>Mobile App Development</p>
                    <progress value="70" max="100">70%</progress>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section-4">
        <div class="row stacks">
          <div class="text-area" data-aos="fade-down">
            <h2>
              Work with all these<br /><span class="header--span"
                >Languages & Libraries</span
              >
            </h2>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta
              ipsum alias voluptatum assumenda quos ab excepturi corporis
              numquam labore laboriosam!
            </p>
            <div class="button">
              <a href="#contact-section" class="btn-full">Hire Me</a>
            </div>
          </div>
          <div class="stacks_area" data-aos="zoom-out">
            <img src="/publics/img/html5-icon-13.jpg" alt="" />
            <img src="/publics/img/pug-js.png" alt="" />
            <img src="/publics/img/js.png" alt="" />
            <img src="/publics/img/MongoDB_Logo.svg.png" alt="" />
            <img src="/publics/img/React-icon.svg.png" alt="" />
            <img src="/publics/img/1200px-Node.js_logo.svg.png" alt="" />
            <img src="/publics/img/5968242.png" alt="" />
            <img src="/publics/img/2560px-JQuery-Logo.svg.png" alt="" />
            <img src="/publics/img/javascript-icon-png-23.jpg" alt="" />
            <img src="/publics/img/Bootstrap_logo.svg.png" alt="" />
            <img
              src="/publics/img/Does-SEO-Really-Help-Your-Website-To-Rank-Higher-On-Google.jpg"
              alt=""
            />
            <img
              src="/publics/img/1024px-MySQL.ff87215b43fd7292af172e2a5d9b844217262571.png"
              alt=""
            />
          </div>
          <div class="language_icons"></div>
        </div>
      </section>
      <!-- section 5 here -->
      <section class="section-5">
        <div class="row">
          <div class="head-content">
            <h2>Recent Projects</h2>
            <p>
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Optio
              odio corrupti mollitia esse suscipit
            </p>
          </div>
          <div class="project--cards" data-aos="zoom-out">
            <div class="project-card-1">
              <a href="#"
                ><img
                  src="publics/img/cnet-apple-iphone-event-2020-promo-landscape.jpg"
                  alt=""
              /></a>
            </div>
            <div class="project-card-1">
              <a href="#"
                ><img
                  src="publics/img/cnet-apple-iphone-event-2020-promo-landscape.jpg"
                  alt=""
              /></a>
            </div>
            <div class="project-card-1">
              <a href="#"
                ><img
                  src="publics/img/cnet-apple-iphone-event-2020-promo-landscape.jpg"
                  alt=""
              /></a>
            </div>
            <div class="project-card-1">
              <a href="#"
                ><img
                  src="publics/img/cnet-apple-iphone-event-2020-promo-landscape.jpg"
                  alt=""
              /></a>
            </div>
          </div>
        </div>
      </section>
      <!-- section 6 here -->
      <section class="section-6" id="contact-section">
        <div class="row">
          <h2>Get In Touch</h2>
          <div class="column-area">
            <div class="content" data-aos="fade-right">
              <h4>Let's talk about everything!</h4>
            </div>
            <form action="" data-aos="fade-left">
              <input type="text" placeholder="Your name" required />
              <input
                type="email"
                placeholder="Email address"
                name=""
                id=""
                required
              />
              <input type="text" placeholder="subject" required />
              <textarea
                name=""
                id=""
                cols="30"
                rows="10"
                placeholder="message"
                required
              ></textarea>
              <button type="submit" id="">Send Message</button>
            </form>
          </div>
        </div>
      </section>
      <section></section>
      <footer>
        <div class="row">
          <div class="footer-content">
            <h2 data-aos="zoom-out">Danny Quan</h2>
            <div class="footer-content" data-aos="fade-right">
              <ul class="contact-info">
                <li>Address: Techiman/ Bono East</li>
                <li>
                  Email:
                  <a href="mailto:danielsah118@gmail.com"
                    >danielsah118@gmail.com</a
                  >
                </li>
                <li>Phone: +233 54 514 3000 / +233 50 683 1839</li>
              </ul>
            </div>
            <div class="social-links" data-aos="fade-left">
              <h4>Get in touch</h4>
              <ul class="link-items">
                <li>
                  <a href="#"><ion-icon name="logo-instagram"></ion-icon></a>
                </li>
                <li>
                  <a href="#"><ion-icon name="logo-facebook"></ion-icon></a>
                </li>
                <li>
                  <a href="#"><ion-icon name="logo-twitter"></ion-icon></a>
                </li>
                <li>
                  <a href="#"><ion-icon name="logo-github"></ion-icon></a>
                </li>
                <li>
                  <a href="#"><ion-icon name="logo-linkedin"></ion-icon></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
    </div>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init({
        offset: 100,
        duration: 1000,
        once: true,
      });
    </script>
    <script>
      $(window).on("load", function () {
        $(".preloader").fadeOut(1000);
        $(".content").fadeIn(1000);
      });
    </script>
    <!-- javascript here -->
    <script type="text/javascript" src="publics/js/index.js"></script>
    <script
      type="module"
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
    ></script>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script>
      var typed = new Typed(".typed", {
        strings: [
          "Frontend Developer",
          "Backend Developer",
          "Mobile App Dev",
          "Freelancer",
        ],
        typeSpeed: 60,
        backSpeed: 60,
        loop: true,
      });
    </script>
  </body>
</html>
