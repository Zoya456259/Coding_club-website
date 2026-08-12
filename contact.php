<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
        <!-- Bootstrap    -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"> 

    <link rel="stylesheet" href="./css/style.css">
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
          <a class="nav-link" href="./about.php">About</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
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
     <section class="contact_hero_section">
     
        <h1>Contact Codinasion</h1>
        <p>We'd love to hear from you! Reach out with your questions, ideas, or collaborations.</p>
    </section>

    <!-- SECOND SECTION -->
     
    <section class="contact_section">
      <div class="contact_section_div">
        <!-- FORM -->
        <div class="contact_form">
          <h2>Send us a Message</h2>
  <form method="POST" action="contact_db.php" id="contactForm">
      <label for="member-name">Full Name:</label>
      <input type="text" id="member-name" name="member_name" required> 

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required> 

      <label for="subject">Subject</label>
      <input type="text" id="subject" name="subject" required />
             
      <label for="message">Your Message</label>
      <textarea id="message" name="message" rows="5" required></textarea>
              
      </label>

       <button type="submit" class="contact_btn">Send Message</button>
    </form>
        </div>
    </div>
</section>
        <!-- THIRD SECTION -->
         <section class="contact_info_section">
        <div class="contact_info">
            
          <h2>Get in Touch</h2>
          <p>Have any questions or suggestions? Our team is here to help and collaborate with you!</p>
          <ul>
            <li><i class="fa-solid fa-envelope" style="color: #ffffff;"></i> codinasion.club@gmail.com</li>
            <li><i class="fa-solid fa-phone" style="color: #ffffff;"></i> +92 42 7628738</li>
            <li><i class="fa-solid fa-location-dot" style="color: #ffffff;"></i> Codinasion Coding Club, Skardu(Baltistan), Pakistan</li>
          </ul>
          <div class="social_icons">
            <i class="fa-brands fa-github" style="color: #ffffff;"></i>
            <i class="fa-brands fa-twitter" style="color: #ffffff;"></i>
            <i class="fa-brands fa-linkedin" style="color: #ffffff;"></i>
            <i class="fa-brands fa-instagram" style="color: #ffffff;"></i>
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
        <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
 <!-- JavaScript file  -->
  <script src="./javascript/javascript.js"></script>
 <script>
   $(document).ready(function() {

    $("#contactForm").validate({

        rules:{
            member_name:{
                required:true,
                minlength:3
            },
            email:{
                required:true,
                email:true
            },
            subject:{
                required:true,
                minlength:3
            },
            message:{
                required:true,
                minlength:10
            }
        },

        submitHandler:function(form){
            form.submit();
        }

    });

});
  </script>
</body>
</html>