<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap    -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"> 

    <link rel="stylesheet" href="./css/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">


<link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">

<!-- Lightbox CDN -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />
    
     <title>Document</title>
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
          <a class="nav-link" href="./events.php">Events</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
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
        <section class="about_section">
            <div class="about_section_div">
                <h2>Mission and Vision</h2>
                <p>Inspire and give direction</p>
                <h3>Mission</h3>
                <p>To empower coders with knowledge and collaboration by providing hands-on learning, open-source experience, and a supportive community.</p>
                <h3>Vision</h3>
                <p>To be the leading student coding community in the region,  producing skilled developers, contributors to open source, and confident problem solvers.</p>
            </div>
        </section>
             <!-- SECOND SECTION  -->
        <section class="leader_section">
                <h2>Our Leaders</h2>
                <p>Humanize the club with leadership</p>
                <div class="leader_section_div">
                    <div class="leader">
                        <img src="./images/Ahmed Ali.jpg" alt="Ahmed Ali">
                        <h2>Ahmed Ali</h2>
                        <p>President <br>Ahmed coordinates club events, partnerships, and leads strategy. Passionate about full-stack development and mentorship.</p>
                    </div>
                    <div class="leader">
                        <img src="./images/Zoya Khan.jpg" alt="Zoya Khan">
                        <h2>Zoya Khan</h2>
                        <p>Vice President <br>Zoya manages workshops and the student project showcase. Background in web technologies and UI/UX.</p>
                    </div>
                    <div class="leader">
                        <img src="./images/Dr. Noor.jpg" alt="Dr. Noor">
                        <h2>Dr. Noor</h2>
                        <p>Faculty Advisor <br>Dr. Noor provides academic guidance and helps connect the club to departmental resources.</p>
                    </div>
            </div>
        </section>
           <!-- THIRD SECTION  -->
        <section class="activities_section">
            <h2>Club Activities</h2>
            <div class="activities_section_div">
            <div class="activities">
                <h3>Weekly Workshops</h3>
                <p>Hands-on sessions covering languages and frameworks like Python, JavaScript, React, and more.</p>
            </div>
              <div class="activities">
                <h3>Problem-Solving Sessions</h3>
                <p>Peer-led algorithm practice and interview preparation to build competitive programming skills.</p>
            </div>
              <div class="activities">
                <h3>Coding Marathons & Hackathons</h3>
                <p>24-48 hour events where teams build projects, learn, and compete for prizes and recognition.</p>
            </div>
              <div class="activities">
                <h3>Mentorship Program</h3>
                <p>One-on-one mentorship pairing experienced students with newcomers for guided learning.</p>    
        </div>
        </div>
        </section>
                 <!-- FOURTH SECTION  -->
        <section class="membership_section">
            <h2>Membership Info</h2>
            <div class="membership_section_div">
            <h3>Benefits</h3>
            <ul>
                <li>Hands-on learning and project collaboration</li>
                <li>Networking with peers and faculty</li>
                <li>Opportunities to compete and present projects</li>
                <li>Access to club resources and mentorship</li>
            </ul>
            <h3>How to Join</h3>
            <ol>
                <li>Fill out the membership form below.</li>
                <li>Attend the orientation session (you will receive an email).</li>
                <li>Follow club code of conduct and participate in activities.</li>
            </ol>
            </div>
            </section>
                     <!-- FIFTH SECTION  -->
        <section class="membership_form_section">
  <h2>Membership Form</h2>
  <div class="membership_form_section_div">
      <form id="membershipForm" action="membershipdb.php" method="POST" enctype="multipart/form-data">
      <label for="member-name">Full Name:</label><br>
      <input type="text" id="member-name" name="member_name" required> <br><br>

      <label for="email">Email:</label><br>
      <input type="email" id="email" name="email" required> <br><br>

      <label for="year">Year / Program:</label><br>
      <input type="text" id="year" name="year_program" placeholder="e.g., 2nd Year, BCS"> <br><br>

      <label for="skills">Skills / Interests:</label><br>
      <textarea id="skills" rows="4" cols="40" name="skills" placeholder="Python, Web Dev, AI, etc."></textarea><br><br>

      <label for="resume">Upload CV/Portfolio (optional):</label><br><br>
      <input type="file" id="resume" name="resume" accept=".pdf,.doc,.docx"><br><br>

      <label for="agree">
        <input type="checkbox" id="agree" name="agree" required>
        I agree to follow the club's code of conduct.
      </label><br><br>

      <input type="submit" value="Join Codinasion">
    </form>
  </div>
</section>
                 <!-- SIXTH SECTION  -->
         <section class="gallery_section">
            <h2>Gallery / Memories</h2>
  <div class="gallery_section_div">

     <a href="./images/competition8.jpg" class="gallery" data-gallery="gallery1">
      <img src="./images/competition8.jpg" alt="Competition Pic 2">
    </a>

    <a href="./images/competition9.webp" class="gallery" data-gallery="gallery1">
      <img src="./images/competition9.webp" alt="Competition Pic 2">
    </a>

    <a href="./images/competition10.jpg" class="gallery" data-gallery="gallery1">
      <img src="./images/competition10.jpg" alt="Competition Pic 2">
    </a>

    <a href="./images/session3.jpg" class="gallery" data-gallery="gallery1">
      <img src="./images/session3.jpg" alt="Competition Pic 4">
    </a>

     <a href="./images/workshop9.jpg" class="gallery" data-gallery="gallery1">
      <img src="./images/workshop9.jpg" alt="Competition Pic 2">
    </a>

    <a href="./images/workshop5.jpg" class="gallery" data-gallery="gallery1">
      <img src="./images/workshop5.jpg" alt="Competition Pic 2">
    </a>

     <a href="./images/workshop14.jpg" class="gallery" data-gallery="gallery1">
      <img src="./images/workshop14.jpg" alt="Competition Pic 2">
    </a>

    <a href="./images/workshop10.jpg" class="gallery" data-gallery="gallery1">
      <img src="./images/workshop10.jpg" alt="Competition Pic 4">
    </a>

     <a href="./images/meeting.jpeg" class="gallery" data-gallery="gallery1">
      <img src="./images/meeting.jpeg" alt="Competition Pic 2">
    </a>

    <a href="./images/meeting1.jpg" class="gallery" data-gallery="gallery1">
      <img src="./images/meeting1.jpg" alt="Competition Pic 2">
    </a>

     <a href="./images/meeting2.jpg" class="gallery" data-gallery="gallery1">
      <img src="./images/meeting2.jpg" alt="Competition Pic 2">
    </a>

    <a href="./images/session1.jpg" class="gallery" data-gallery="gallery1">
      <img src="./images/session1.jpg" alt="Competition Pic 4">
    </a>
            </div>
        </section>
        <!-- SEVENTH SECTION  -->
        <section class="faq_section">
             <h2>Frequently Asked Question</h2>
    <div class="accordian">
        <div class="question">
            <h4>What activities does the club organize?</h4>
            <i class=" icon fa-solid fa-caret-down"></i>
        </div>
        <div class="answer">
            <p>We host weekly workshops, hackathons, problem-solving sessions, and mentorship programs. Members also
                collaborate on open-source projects.</p>
        </div>
    </div>
    <div class="accordian">
        <div class="question">
            <h4> How can I become a member?</h4>
            <i class=" icon fa-solid fa-caret-down"></i>
        </div>
        <div class="answer ">
            <p>Simply fill out the membership form on our website, attend the orientation session, and you'll officially
                be part of the Codinasion community.</p>
        </div>
    </div>
    <div class="accordian">
        <div class="question">
            <h4>Is there any membership fee?</h4>
            <i class=" icon  fa-solid fa-caret-down"></i>
        </div>
        <div class="answer ">
            <p> No, joining Codinasion is completely free! Our goal is to make coding education accessible to everyone.
            </p>
        </div>
    </div>
    <div class="accordian">
        <div class="question">
            <h4> What benefits do members get?</h4>
            <i class=" icon fa-solid fa-caret-down"></i>
        </div>
        <div class="answer ">
            <p>Members gain hands-on experience, mentorship from peers, networking opportunities, and chances to
                showcase their projects in competitions and events.</p>
        </div>
    </div>
    <div class="accordian">
        <div class="question">
            <h4> Can I contribute to Codinasion projects?</h4>
            <i class=" icon fa-solid fa-caret-down"></i>
        </div>
        <div class="answer ">
            <p>Absolutely! Members are encouraged to contribute to our open-source repositories and take part in collaborative coding challenges.</p>
        </div>
    </div>
    <div class="accordian">
        <div class="question">
            <h4> Does Codinasion help with internships or job preparation?</h4>
            <i class=" icon fa-solid fa-caret-down"></i>
        </div>
        <div class="answer ">
            <p>Yes! We regularly organize resume-building sessions, mock interviews, and coding challenges to help
                members prepare for real-world opportunities.</p>
        </div>
    </div>
    <div class="accordian">
        <div class="question">
            <h4> Are there any leadership opportunities in the club?</h4>
            <i class=" icon fa-solid fa-caret-down"></i>
        </div>
        <div class="answer ">
            <p>Definitely! Active members can apply for roles like Team Lead, Event Coordinator, or Project Mentor to develop leadership and teamwork skills.</p>
        </div>
    </div>
    <div class="accordian">
        <div class="question">
            <h4> How often are workshops and events held?</h4>
            <i class=" icon fa-solid fa-caret-down"></i>
        </div>
        <div class="answer ">
            <p>Workshops are usually conducted weekly or biweekly, while larger events such as hackathons or coding marathons happen once or twice per semester.</p>
        </div>
    </div>
    </div>
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
      
       <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
<!-- Lightbox JS -->
<script src="https://cdn.jsdelivr.net/npm/glightbox/dist/js/glightbox.min.js"></script>
<!-- JavaScript file  -->
  <script src="./javascript/javascript.js"></script>
<script>

      // lightbox
  const lightbox = GLightbox({
    selector: '.gallery',
    touchNavigation: true,
    loop: true,
    zoomable: true,
    openEffect: 'zoom',
    closeEffect: 'fade',
    slideEffect: 'slide',
  });
</script>

</body>
</html>