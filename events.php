<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
   <!-- Slick CSS -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"/>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"/>
  <!-- Swiper CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
  <!-- Bootstrap    -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"> 
    
  <!-- CUSTOMIZE CSS  -->
   <link rel="stylesheet" href="./css/style.css">
     
    <title>Final Project</title>
</head>
<body>
     <header>
  <nav class="navbar navbar-expand-lg navbar-dark custom-navbar sticky-top">
  <div class="container">

    <!-- BRAND -->
    <a class="navbar-brand" href="#">Codinasion</a>

    <!-- TOGGLER -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- MENU -->
    <div class="collapse navbar-collapse" id="navbarNav">

      <ul class="navbar-nav ms-auto gap-3">

        <li class="nav-item">
          <a class="nav-link" href="./index.php">Home</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="./program.php">Program</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">Events</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="./about.php">About</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="./contact.php">Contact</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">Sign in</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="https://github.com/" target="_blank">Github</a>
        </li>

      </ul>

    </div>
  </div>
</nav>
</header>

    <main>
        <!-- FIRST SECTION  -->
   <section class="events_section">
    <div class="events_swiper">
      <div class="swiper">
        <div class="swiper-wrapper">
          <!-- Slide 1 -->
          <div class="swiper-slide">
            <img class="slide-image" src="./images/AI2.jpg" alt="AI & Automation Bootcamp">
            <div class="slide-content">
              <h2>Upcoming Events</h2>
              <h3>AI & Automation Bootcamp</h3>
              <p>June 5-10, 2026</p>
              <p>A one-week intensive bootcamp covering Python automation, data analysis, and machine learning.</p>
              <a class="btn" href="#">Join</a>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="swiper-slide">
            <img class="slide-image" src="./images/compettition5.jpg" alt="Hackathon 2025">
            <div class="slide-content">
              <h2>Upcoming Events</h2>
              <h3>Hackathon 2026</h3>
              <p>November 2, 2026</p>
              <p>24-hour coding competition for problem solvers and innovators.</p>
              <a class="btn" href="#">Participate</a>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="swiper-slide">
            <img class="slide-image" src="./images/coding3.jpg" alt="Beginner Coding Competition">
            <div class="slide-content">
              <h2>Upcoming Events</h2>
              <h3>Beginner Coding Competition</h3>
              <p>December 5–7, 2026</p>
              <p>A friendly multi-day competition for new coders.</p>
              <a class="btn" href="#">Participate</a>
            </div>
          </div>

          <!-- Slide 4 -->
          <div class="swiper-slide">
            <img class="slide-image" src="./images/session4.jpg" alt="Mentorship Session">
            <div class="slide-content">
              <h2>Upcoming Events</h2>
              <h3>Mentorship Session</h3>
              <p>October 15, 2026</p>
              <p>One-on-one guidance and career planning for students.</p>
              <a class="btn" href="#">Join</a>
            </div>
          </div>

          <!-- Slide 5 -->
          <div class="swiper-slide">
            <img class="slide-image" src="./images/workshop3.jpg" alt="Codinasion Community Conference">
            <div class="slide-content">
              <h2>Upcoming Events</h2>
              <h3>Codinasion Community Conference</h3>
              <p>October 25–27, 2026</p>
              <p>An in-person & virtual hybrid event featuring keynote speakers, live demos, and coding challenges.</p>
              <a class="btn" href="#">Join</a>
            </div>
          </div>
        </div>

        <!-- pagination dots -->
        <div class="swiper-pagination"></div>
        <!-- navigation arrows -->
        <div class="swiper-button-prev" aria-label="Previous slide"></div>
        <div class="swiper-button-next" aria-label="Next slide"></div>
      </div>
    </div>
  </section>

             <!-- SECOND SECTION  -->
         <section class="past_events_section">
    <h2>Past Events Archive</h2>
    <div class="past_events_section_div">
      <div class="past_events">
       <p> <strong>Web Dev Bootcamp</strong> <br> 1st July 2026  <br> Highlights:  50+ participants, built portfolio websites.</p>
      </div>
      <div class="past_events">
         <p>  <strong>Data Science Workshop</strong> <br> 4th May 2025  <br> Highlights: Hands-on ML model building.</p>
      </div>
      <div class="past_events">
         <p>  <strong>Hackathon 2024</strong> <br>20th Dec 2024 <br> Highlights: Winning team built an AI-powered chatbot.</p>
      </div>
      <div class="past_events">
       <p> <strong>Codinasion CodeSprint</strong><br>10th November 2024 <br> Highlights: 36-hour coding challenge </p>
      </div>
      <div class="past_events">
         <p>  <strong>Mentorship Connect 2024</strong><br> 25th September 2024 <br> Highlights: Launch of Codinasion Mentorship Program </p>
      </div>
      <div class="past_events">
         <p>  <strong>Frontend Fundamentals</strong><br>12th August 2025 <br>  Highlights: Beginners learned Frontend design</p>
      </div>
      <div class="past_events">
       <p> <strong>Python Automation </strong><br>2nd June 2024 <br>  Highlights: Participants automated daily tasks with Python scripts.</p>
      </div>
      <div class="past_events">
         <p>  <strong>AI for Beginners Workshop</strong> 14th April 2024 <br> Highlights: Introduced participants to AI concepts </p>
      </div>
      <div class="past_events">
         <p>  <strong>Open Source Week</strong><br> 10th February 2025 <br> Highlights: Developers contributed to Codinasion Tools repository on GitHub</p>
      </div>
    </div>
  </section>

                   <!-- THIRD SECTION  -->
  <section class="workshop_section">
    <h2>Workshops</h2>
    <p>We offer hands-on learning sessions covering programming languages, frameworks, and tools.</p>
    <div class="workshop_section_div">
      <div>
        <img src="./images/workshop1.jpg" alt="Python Programming">
      </div>
       <div>
        <img src="./images/workshop2.jpg" alt="Java Development">
      </div>
       <div>
        <img src="./images/workshop3.jpg" alt="Web Development">
      </div>
       <div>
        <img src="./images/workshop4.jpg" alt="React.js Framework">
      </div>
       <div>
        <img src="./images/workshop5.jpg" alt="Flask Framework">
      </div>
      <div>
        <img src="./images/workshop6.jpg" alt="AI & Machine Learning Bootcamp">
      </div>
      <div>
        <img src="./images/workshop7.jpg" alt="Git & GitHub for Developers">
      </div>
      <div>
        <img src="./images/workshop8.webp" alt="UI/UX Design Fundamentals">
      </div>
      <div>
        <img src="./images/workshop9.jpg" alt="Cybersecurity Awareness">
      </div>
      <div>
        <img src="./images/workshop10.jpg" alt="Cloud Computing with AWS">
      </div>
      <div>
        <img src="./images/workshop11.jpg" alt="Database Design & SQL">
      </div>
      <div>
        <img src="./images/workshop12.jpg" alt="Mobile App Development">
      </div>
      <div>
        <img src="./images/workshop13.webp" alt="Data Science with Python">
      </div>
  </div>
  </section>
                         <!-- FOURTH SECTION  -->
  <section class="competition_section">
     <h2>Competitions</h2>
  <div class="competition_section_div">
    <p class="lead">Engage in coding contests and challenge your problem-solving skills.</p>

    <ul class="competition_list">
      <li class="competition_item">
        <span class="icon"><i class="fa-solid fa-trophy"></i></span>
        Competitive Programming Contest : Monthly
        <a href="#"><i class="fa-solid fa-arrow-right arrow1" style="color: #1185ac;"></i></a>
      </li>
      <li class="competition_item">
        <span class="icon"><i class="fa-solid fa-ranking-star"></i></span>
        Leaderboard System : Track your ranking
        <a href="#"><i class="fa-solid fa-arrow-right arrow2" style="color: #1185ac;"></i></a>
      </li>
      <li class="competition_item">
        <span class="icon"><i class="fa-solid fa-code"></i></span>
        Coding Battles : 1v1 coding challenges
        <a href="#"><i class="fa-solid fa-arrow-right arrow3" style="color: #1185ac;"></i></a>
      </li>
    </ul>
  </div>
</section>
                            <!-- FIFTH SECTION  -->
   <section class="registration_section">
  <h2>Register for Coding Competition</h2>
<div class="registration_sectiond_div">
<form method="POST" action="registration_db.php" class="registration_form" id="registrationForm">
    <label for="fullname">Full Name:</label>
    <input type="text" id="fullname" name="fullname" required>

    <label for="email">Email Address:</label>
    <input type="email" id="email" name="email" required>

    <label for="phone">Phone Number:</label>
    <input type="tel" id="phone" name="phone">

    <label for="university">University / College:</label>
    <input type="text" id="university" name="university" required>

    <label for="year">Year of Study:</label>
    <select id="year" name="year">
      <option value="none"></option>
      <option value="1st">1st Year</option>
      <option value="2nd">2nd Year</option>
      <option value="3rd">3rd Year</option>
      <option value="4th">4th Year</option>
      <option value="graduate">Graduate</option>
    </select>

    <label for="language">Preferred Programming Language:</label>
    <select id="language" name="language">
      <option value="none"></option>
      <option value="python">Python</option>
      <option value="java">Java</option>
      <option value="cpp">C++</option>
      <option value="javascript">JavaScript</option>
      <option value="other">Other</option>
    </select>

    <label>Competition Type:</label>
    <div class="radio_group">
      <input type="radio" id="solo" name="competition_type" value="solo" required>
      <label for="solo">Solo</label>
      <input type="radio" id="team" name="competition_type" value="team">
      <label for="team">Team</label>
    </div>

    <label for="message">Why do you want to join?</label>
    <textarea id="message" name="message" rows="4"></textarea>

     </label><br><br>

      <input type="submit" value="Register">
 
  </form>
  </div>
</section>

                            <!-- SIXTH SECTION  -->
      <section class="team_section">
                <h2>Meet Our Team</h2>
                <div class="team_section_div">
                <!-- ONE TEAM CARD  -->
                <div class="team_card">
                    <img src="./images/Ahsan Raza.jpg" alt="Ahsan Raza">
                    <h3>Ahsan Raza</h3>
                    <p>Developer</p>
                </div>
                 <!-- TWO TEAM CARD  -->
                <div class="team_card">
                    <img src="./images/Sarah Khan.jpg" alt="Sarah Khan.">
                    <h3>Sarah Khan</h3>
                    <p>UI/UX Designer & Creative Coder</p>
                </div>
                 <!-- THREE TEAM CARD  -->
                <div class="team_card">
                    <img src="./images/Ali Ahmed.jpg" alt="Ali Ahmed">
                    <h3>Ali Ahmed</h3>
                    <p>Backend Engineer & Open-Source Enthusiast</p>
                </div>
                 <!-- FOUR TEAM CARD  -->
                <div class="team_card">
                    <img src="./images/Hira Fatima.jpg" alt=" Hira Fatima">
                    <h3>Hira Fatima</h3>
                    <p>Community & Events Manager</p>
                </div>
                 <!-- FIVE TEAM CARD  -->
                <div class="team_card">
                    <img src="./images/Bilal Raza.jpg" alt="Bilal Raza">
                    <h3>Bilal Raza</h3>
                    <p>Frontend Developer</p>
                </div>
                 <!-- SIX TEAM CARD  -->
                <div class="team_card">
                    <img src="./images/Ayesha Khan.jpg" alt="Ayesha Khan">
                    <h3>Ayesha Khan</h3>
                    <p>Content & Media Lead</p>
                </div>
                 <!-- SEVEN TEAM CARD  -->
                <div class="team_card">
                    <img src="./images/Zain Malik.jpg" alt="Zain Malik">
                    <h3>Zain Malik</h3>
                    <p>Hackathon Coordinator</p>
                </div>
                 <!-- EIGHT TEAM CARD  -->
                <div class="team_card">
                    <img src="./images/Mehwish Rehman.jpg" alt="Mehwish Rehman">
                    <h3>Mehwish Rehman</h3>
                    <p>Technical Trainer & Session Host</p>
                </div>
                 <!-- NINE TEAM CARD  -->
                <div class="team_card">
                    <img src="./images/Hassan Tariq.jpg" alt="Hassan Tariq">
                    <h3>Hassan Tariq</h3>
                    <p>Backend Developer</p>
                </div>
                </div>
                <a href="#" class="team_btn button">See more</a>
             </section>
    </main>
    <footer class="footer">
            <div class="footer_div">
            <div class="footer_heading">
                <h3 id="footer_codi">Codinasion</h3>
                <p>Empowering the next generation of developers through <br>
                    collaboration,community, and code. Let's innovate together.</p>
                <a href="#" class="footer_btn">Join Codinasion</a>
            </div>
            <div class="footer_heading">
                <h3>Site map</h3>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Reposasotry</a></li>
                    <li><a href="#">Contribute</a></li>
                    <li><a href="#">Developer</a></li>
                </ul>
            </div>

              <div class="footer_heading">
                <h3>Top repos</h3>
                <ul>
                    <li><a href="#">Program</a></li>
                    <li><a href="#">Good first issue</a></li>
                    <li><a href="#">Codinasion tools</a></li>
                    <li><a href="#">LinkFree-OG</a></li>
                    <li><a href="#">Docs & Guides</a></li>
                </ul>
            </div>
            <div class="footer_heading">
                <h3>Social Media</h3>
               <i class="fa-brands fa-github fa-2xl" style="color: #f5f5f5;"></i>
               <i class="fa-brands fa-square-twitter fa-2xl" style="color:  #f5f5f5;"></i>
               <i class="fa-brands fa-square-facebook fa-2xl" style="color:  #f5f5f5;"></i>
               <i class="fa-brands fa-square-instagram fa-2xl" style="color:  #f5f5f5;"></i>
            </div>
            </div>
             <div class="copyright">
            <p>Copyright &copy; 2025.  All rights reserved.</p>
         </div>
        </footer>
               <!-- jQuery -->
 <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>

  <!-- Slick JS -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
   <!-- Swiper JS -->
 <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <!-- JavaScript file  -->
 <script src="./javascript/javascript.js"></script>
  <script>
     //  Sweipper slider
    const swiper = new Swiper(".swiper", {
    loop: true,
    autoplay: {
      delay: 4000,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    effect: "fade",
    fadeEffect: {
      crossFade: true,
    },
  });

    $(document).ready(function() {
      $(".registration_form").validate({
        rules: {
          fullname: { required: true, minlength: 3 },
          email: { required: true, email: true },
          phone: { required: true, digits: true, minlength: 10, maxlength: 15 },
          university: { required: true, minlength: 3 },
          year: { required: true },
          language: { required: true },
          competition_type: { required: true },
          message: { minlength: 10 }
        },
        messages: {
          fullname: "Please enter your full name (at least 3 characters)",
          email: "Enter a valid email address",
          phone: {
            required: "Please enter your phone number",
            digits: "Please enter only numbers",
            minlength: "Phone number must be at least 10 digits",
            maxlength: "Phone number must not exceed 15 digits"
          },
          university: "Please enter your university or college name",
          year: "Please select your year of study",
          language: "Please select a preferred programming language",
          competition_type: "Please choose competition type",
          message: "Please write at least 10 characters about why you want to join"
        },
        errorPlacement: function(error, element) {
          if (element.attr("name") === "competition_type") {
            error.insertAfter(".radio_group");
          } else {
            error.insertAfter(element);
          }
        },
        highlight: function(element) {
          $(element).addClass("ui-state-error");
        },
        unhighlight: function(element) {
          $(element).removeClass("ui-state-error");
        },
      });
    });

     // Initialize Slick 
    $(document).ready(function(){
    $('.workshop_section_div').slick({
      slidesToShow: 4,          
      slidesToScroll: 1,       
      autoplay: true,           
      autoplaySpeed: 2000,      
      infinite: true,          
      arrows: true,            
      dots: true,              
      responsive: [
        {
          breakpoint: 1024,
          settings: { slidesToShow: 3 }
        },
        {
          breakpoint: 768,
          settings: { slidesToShow: 2 }
        },
        {
          breakpoint: 480,
          settings: { slidesToShow: 1 }
        }
      ]
    });
  });
  </script>
</body>
</html>