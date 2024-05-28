<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/homepage_style.css">
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- icons -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <!-- swiper -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/> -->

    <title>UnramGrad Career Guide</title>
  </head>
  <body>
    <!-- navbar -->
    <nav class="navbar">
      <a class="navbar-logo" href="#">UnramGrad Career Guide</a>
      <div class="navbar-menu">
        <a href="#jobs">Jobs</a>
        <a href="#companies">Companies</a>
        <a href="#blog">Blogs</a>
        <a href="#" class="signin" onclick="window.location.href='signin.php'">Sign In</a>
      </div>
      <div class="menu-toggle">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
      </div>
    </nav>
    <!-- header -->
    <header>
      <img class="bg-image" src="images/background.jpg">
      <h1 class="header-title">
        Discover the best career opportunities <br />
        <span> or find talented employees </span> <br />
        for your company
      </h1>
    </header>

    <!-- search -->
    <div class="search-wrapper">
      <div class="search-box">
        <div class="search-card">
          <input
            class="search-input"
            type="text"
            placeholder="Job Title, Keyword, Company"
          />
          <button class="search-button">Search</button>
        </div>
      </div>
    </div>

    <!-- filter box -->
    <div class="filter-box">
      <div class="filter-dropdwon">
        <select class="filter-select" id="job-level" name="job-level">
          <option>Job Level</option>
          <option>Entry</option>
          <option>Mid-Senior</option>
          <option>Director</option>
        </select>
        <select class="filter-select" id="job-function" name="job-function"">
          <option>Job Function</option>
          <option>IT</option>
          <option>Management</option>
          <option>Education</option>
        </select>
        <select class="filter-select" id="employment" name="employment">
          <option>Employment Type</option>
          <option>Internship</option>
          <option>Part Time</option>
          <option>Full Time</option>
        </select>
        <select class="filter-select" id="location">
          <option>Location</option>
          <option>Remote</option>
          <option>Indonesia</option>
        </select>
        <select class="filter-select" id="education">
          <option>Education</option>
          <option>Bachelor's degree</option>
          <option>Master's degree</option>
        </select>
      </div>
      <div class="filter-chosen">
        <div class="chosen-card">
          Remote <i class="fas fa-times-circle"></i>
        </div>
        <div class="chosen-card">
          Full Time <i class="fas fa-times-circle"></i>
        </div>
        <div class="chosen-card">
          Financial Tech <i class="fas fa-times-circle"></i>
        </div>
        <div class="chosen-card">
          Entry Level <i class="fas fa-times-circle"></i>
        </div>
      </div>
    </div>

    <!-- job listing -->
    <section class="job-list" id="jobs">
      <div class="job-card">
        <div class="job-name">
          <img class="job-profile" src="images/bri logo.jpeg">
          <div class="job-detail">
            <h4>BRI</h4>
            <h3>UI/UX Designer</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
          </div>
        </div>
        <div class="job-label">
          <a class="label-a" href="#">HTML</a>
          <a class="label-b" href="#">CSS</a>
          <a class="label-c" href="#">Javascript</a>
        </div>
        <div class="job-posted">
          Posted 2 mins ago
        </div>
      </div>

      <div class="job-card">
        <div class="job-name">
          <img class="job-profile" src="images/amazon.jpeg">
          <div class="job-detail">
            <h4>Amazon</h4>
            <h3>Business Development</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
          </div>
        </div>
        <div class="job-label">
          <a class="label-a" href="#">HTML</a>
          <a class="label-b" href="#">CSS</a>
          <a class="label-c" href="#">Javascript</a>
        </div>
        <div class="job-posted">
          Posted 2 mins ago
        </div>
      </div>

      <div class="job-card">
        <div class="job-name">
          <img class="job-profile" src="images/marriott.jpeg">
          <div class="job-detail">
            <h4>Marriott</h4>
            <h3>Digital Marketing</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
          </div>
        </div>
        <div class="job-label">
          <a class="label-a" href="#">HTML</a>
          <a class="label-b" href="#">CSS</a>
          <a class="label-c" href="#">Javascript</a>
        </div>
        <div class="job-posted">
          Posted 2 mins ago
        </div>
      </div>

      <div class="job-card">
        <div class="job-name">
          <img class="job-profile" src="images/neuron.jpeg">
          <div class="job-detail">
            <h4>Neurone</h4>
            <h3>Networking Engineer</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
          </div>
        </div>
        <div class="job-label">
          <a class="label-a" href="#">HTML</a>
          <a class="label-b" href="#">CSS</a>
          <a class="label-c" href="#">Javascript</a>
        </div>
        <div class="job-posted">
          Posted an hour ago
        </div>
      </div>

      <div class="job-card">
        <div class="job-name">
          <img class="job-profile" src="images/hyundai logo.jpeg">
          <div class="job-detail">
            <h4>Hyundai</h4>
            <h3>Mechanical Engineer</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
          </div>
        </div>
        <div class="job-label">
          <a class="label-a" href="#">HTML</a>
          <a class="label-b" href="#">CSS</a>
          <a class="label-c" href="#">Javascript</a>
        </div>
        <div class="job-posted">
          Posted an hour ago
        </div>
      </div>

      <button class="job-more">More List</button>
    </section>

    <section class="join">
      <div class="join-detail">
        <h1 class="section-title">LET'S START YOUR NEW JOB WITH US</h1>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quaerat officia natus assumenda beatae.</p>
      </div>
      <button class="join-button">Register Now</button>
    </section>\

    <!-- featured company -->
    <section class="featured" id="companies">
      <h1 class="section-title">Featured Companies</h1>
      <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deserunt, inventore.</p>
      <div class="featured-wrapper">
        <div class="featured-card">
          <img class="featured-image" src="images/bri logo.jpeg">
          <p>BRI</p>
          <button class="featured-button">View 2 jobs</button>
        </div>
        <div class="featured-card">
          <img class="featured-image" src="images/amazon.jpeg">
          <p>Amazon</p>
          <button class="featured-button">View 2 jobs</button>
        </div>
        <div class="featured-card">
          <img class="featured-image" src="images/marriott.jpeg"">
          <p>Marriott</p>
          <button class="featured-button">View 1 jobs</button>
        </div>
        <div class="featured-card">
          <img class="featured-image" src="images/neuron.jpeg"">
          <p>Neurone</p>
          <button class="featured-button">View 2 jobs</button>
        </div>
        <div class="featured-card">
          <img class="featured-image" src="images/hyundai logo.jpeg"">
          <p>Hyundai</p>
          <button class="featured-button">View 3 jobs</button>
        </div>
        <div class="featured-card">
          <img class="featured-image" src="images/abnr law logo.jpeg"">
          <p>ABNR</p>
          <button class="featured-button">View 4 jobs</button>
        </div>
        <div class="featured-card">
          <img class="featured-image" src="images/technip.jpeg"">
          <p>Technip</p>
          <button class="featured-button">View 1 jobs</button>
        </div>
        <div class="featured-card">
          <img class="featured-image" src="images/rekind.jpeg"">
          <p>Rekind</p>
          <button class="featured-button">View 4 jobs</button>
        </div>
        <div class="featured-card">
          <img class="featured-image" src="images/APPLE.jpeg"">
          <p>Apple</p>
          <button class="featured-button">View 3 jobs</button>
        </div>
      </div>
    </section>

    <!-- testimoni -->
    <!--  
    <section class="testimoni" id="testimoni">
      <h1 class="section-title">Testimonial</h1>
      <p>Let's see what our clients say about us</p>
    </section> -->

    <!-- blog -->
    <section class="blog" id="blog">
      <h1 class="section-title">Career Advices</h1>
      <p>Learn more career tips from company's recruiter</p>
      <div class="blog-wrapper">
        <div class="blog-card">
          <img class="blog-image" src="images/blog-1.jpg">
          <div class="blog-detail">
            <span>11 Apr 2024</span>
            <h4>How to enjoy your work</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
            <hr class="divider">
            <a href="#" class="blog-more">Read more</a>
          </div>
        </div>
        <div class="blog-card">
          <img class="blog-image" src="images/blog-2.jpg">
          <div class="blog-detail">
            <span>24 Apr 2024</span>
            <h4>10 Tips for technical interview</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
            <hr class="divider">
            <a href="#" class="blog-more">Read more</a>
          </div>
        </div>
        <div class="blog-card">
          <img class="blog-image" src="images/blog-3.jpg">
          <div class="blog-detail">
            <span>11 May 2024</span>
            <h4>Managing Time Effectively</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
            <hr class="divider">
            <a href="#" class="blog-more">Read more</a>
          </div>
        </div>
      </div>
    </section>

    <!-- footer -->
    <footer>
      <div class="footer-wrapper">
        <h3>UnramGrad Career Guide</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus nesciunt illo consectetur accusamus officia.</p>
        <div class="social-media">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
          <a href="#"><i class="fab fa-youtube"></i></a>
        </div>
      </div>
      <div class="footer-wrapper">
        <h4>Explore</h4>
        <a href="#">Top Companies</a>
        <a href="#">Terms of Services</a>
        <a href="#">Careers</a>
      </div>
      <div class="footer-wrapper">
        <h4>About</h4>
        <a href="#">FAQ</a>
        <a href="#">Get Inspired</a>
        <a href="#">Blog</a>
      </div>
      <div class="footer-wrapper">
        <h4>Support</h4>
        <a href="#">Customer Service</a>
        <a href="#">Trust & Safety</a>
        <a href="#">Partnership</a>
      </div>
      <div class="footer-wrapper">
        <h4>Community</h4>
        <a href="#">Community</a>
        <a href="#">Invite a Friend</a>
        <a href="#">Event</a>
      </div>
    </footer>
  </body>
</html>
