<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="./css/SA.CSS" />
</head>

<body>
  <div class="container">
    <nav>
      <img src="./img/unity.png" alt="">
      <div class="navigation">
        <ul>
          <i id="menu-close" class="fas fa-times"></i>
          <li><a class="active" href="home.html">Home</a></li>
          <li><a href="about.html">About</a></li>
          <li><a href="announcement.html">Announcement</a></li>
          <li><a href="#">Register</a></li>
          <li><a href="#">Login</a></li>
        </ul>
        <i id="menu-btn" class="fas fa-bars"></i>
      </div>
    </nav>
    <div class="content">
      <h3>APPLY TO THE UNVIVERSITY OF UNITY</h3>
    </div>
    <section aria-label="Newest Photos">
      <div class="carousel" data-carousel>
        <button class="carousel-button prev" data-carousel-button="prev">
          &#8656;
        </button>
        <button class="carousel-button next" data-carousel-button="next">
          &#8658;
        </button>
        <ul data-slides>
          <li class="slide" data-active>
            <img src="./img/49f4f4fe699b741899c1c26b5c85daf43a282acf.jpg" alt="Nature Image #1" />
          </li>
          <li class="slide">
            <img src="./img/school.jpg" alt="Nature Image #2" />
          </li>
          <li class="slide">
            <img src="./img/adf.jpg" alt="Nature Image #3" />
          </li>
        </ul>
      </div>
    </section>
    <section>
      <div class="info-need">
        <h3>READY TO BE UNITY STUDENT?HERE ARE REQUIRMENT TO APPLY NOW</h3>
        <h4>For Degree and Masters Degree </h4>
      </div>
      <div class="requirment">
        <div class="req">
          <h4>1. For Preparatory education</h4>
          <ul>
            <li>scored more than 350</li>
            <li>WHO FINISHED GRADE 12</li>
          </ul>
        </div>
        <div class="req">
          <h4>2. For TTP</h4>
          <ul>
            <li>Two years of work experience</li>
            <li>WHO have taken COC exam and lvl 4</li>
            <li>Who passed Briding test</li>
          </ul>
        </div>
        <div class="req">
          <h4>3. Who have a diploma degree on previous policies </h4>
        </div>
        <div class="req">
          <h4>4. Information need To Apply </h4>
          <ul>
            <li>Real educational Status information and Soft Copy</li>
            <li>Photos small size less than 500kb</li>
            <li>Educational indormation from grade 9-12 Transcript</li>

          </ul>
        </div>
      </div>
      <!-- application form need -->
      <div class="info-sec">
        <div class="info">
          <h3><span>UNDERGRADUATE</span></h3>
          <div class="cont">
            <pre>
                  <span>
First-time students coming directly
from high school, transfer students
looking to complete their degree, and
adult learners pursuing further
education. High school students may
also apply using the Common App. 
                  </span>
              </pre>
          </div>

          <a href="./reg_page.php"><button>Applay NOW</button></a>
        </div>
        <div class="info">
          <h3><span>GRADUATE</span></h3>
          <div class="cont">
            <pre>
The College of Graduate Studies
supports students applying to our
170+ graduate and graduate 
certificate programs.            
              </pre>
          </div>
          <a href="./reg_page.php"><button>Applay NOW</button></a>
        </div>
        <div class="info">
          <h3><span>100% ONLINE</span></h3>
          <div class="cont">
            <pre>
Design an online program to match 
your goals.Transfer college
credits easily.Turn work and life experience
into college credit.            
              </pre>
          </div>
          <a href="./reg_page.php"><button>Applay NOW</button></a>
        </div>
      </div>

    </section>
    <footer>
      <div class="footer-col">
        <h3>Others</h3>
        <li>Research</li>
        <li>Vacancy</li>
        <li>Terms of Service</li>
        <li>Privacy Policy</li>
      </div>

      <div class="footer-col">
        <h3>Programs</h3>
        <li>All Programs</li>
        <li>Undergraduate Programs</li>
        <li>Postgraduate</li>
      </div>

      <div class="footer-col">
        <h3>Important Links</h3>
        <li>Home</li>
        <li>About</li>
        <li>Announcement</li>
        <li>Login</li>
      </div>

      <div class="footer-col">
        <h3>Contact us</h3>
        <li>Email: info@uu.edu.et</li>
        <li>Phone: +251901010101</li>
        <li>Website: uu.edu.et</li>
      </div>


      <div class="footer-col">
        <h3>Newsletter</h3>
        <p>You can trust us.</p>
        <div class="subscribe">
          <input type="text" placeholder="Your Email Address">
          <a href="#" class="yellow">SUBSCRIBE</a>
        </div>
      </div>

      <div class="copyright">
        <p>&copy; 2023 | Unity University All Rights Reserved</p>
        <div class="pro-links">
          <i class="fab fa-facebook-f"></i>
          <i class="fab fa-instagram"></i>
          <i class="fab fa-linkedin-in"></i>
        </div>
      </div>
    </footer>
</body>
</div>
<script src="./slide.js"></script>

</html>