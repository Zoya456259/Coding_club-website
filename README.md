# Codinasion — Coding Club Website

Codinasion is a website I built for a coding club, made up of a home page, program page, events page, about page, and a contact form — all connected to a MySQL database so the club can actually collect signups and messages instead of just showing static info.

# About the Project

This started as a way to give a coding club an actual online presence — somewhere people could read about what the club does, check out upcoming events, sign up as a member, register for events, and get in touch. It's a mostly front-end site with PHP handling the backend side of things: form submissions, storing data, and a few simple admin pages so the data can actually be managed instead of just sitting in the database.

# Features

- Home page with an intro to the club
- Program page explaining what the club offers
- Events page listing upcoming/past events, with a registration form
- About page with a membership signup form (includes resume upload)
- Contact page with a validated form that saves messages to the database
- Admin pages to view, edit, and delete members, registrations, and contact messages
- Responsive navbar with a mobile toggle menu (Bootstrap)
- FAQ section that expands/collapses
- Testimonial slider
- Live form validation with error messages as you type

# Built With

- HTML/CSS for structure and styling (`css/style.css`)
- JavaScript, jQuery, and jQuery UI for interactivity, validation, the accordion, and the slider
- PHP for backend logic and talking to the database
- MySQL for storing members, registrations, and contact messages
- Bootstrap 5 for layout and the responsive nav
- Font Awesome for icons
- Slick.js/Swiper for the carousels

# Project Structure

project/
├── index.php               # Home page
├── program.php              # Program page
├── events.php                # Events page + registration form
├── about.php                  # About page + membership signup form
├── contact.php                 # Contact page
├── conn.php                     # DB connection
├── membership_db.php            # Handles membership submissions
├── registration_db.php          # Handles event registration submissions
├── contact_db.php               # Handles contact submissions
├── listMembers.php              # Admin: view members
├── editMember.php               # Admin: edit a member
├── deleteMember.php             # Admin: delete a member
├── listRegistration.php         # Admin: view registrations
├── editRegistration.php         # Admin: edit a registration
├── deleteRegistration.php       # Admin: delete a registration
├── listContact.php              # Admin: view contact messages
├── deleteContact.php            # Admin: delete a message
├── project.sql                  # DB export — import this to set up tables
├── css/
│   └── style.css
├── javascript/
│   ├── javascript.js            # Custom JS (accordion, slider, validation)
│   └── jquery.js
├── jquery-ui-1.14.1.custom/
└── images/
```

#How It's Wired Together
All the public pages share the same header and footer so the layout stays consistent across the site. On the About page, the membership form collects a name, email, year/program, skills, and a resume, and `membership_db.php` takes that data and saves it to the `members` table (the resume itself goes into an `uploads/` folder). The Events page works the same way for event registrations, saving into the `event_registration` table through `registration_db.php`. The Contact form is validated on the client side with jQuery, then handled by `contact_db.php`, which stores everything in the `contact` table. `conn.php` is what actually opens the connection to the `project` database using `mysqli_connect()`. From there, the admin pages just pull from those same tables so submissions can be reviewed, edited, or removed.

# Running It Locally
This isn't a static site, so it needs PHP and MySQL running, not just a browser:

1. Install XAMPP or WAMP
2. Drop the project folder into `htdocs` (XAMPP) or `www` (WAMP)
3. Start Apache and MySQL from the control panel
4. Open phpMyAdmin at `localhost/phpmyadmin` and create a database called `project`
5. Import `project.sql` into it (Import tab → select the file → Go) — this creates the `members`, `event_registration`, and `contact` tables
6. Double check `conn.php` matches your local DB credentials
7. Visit `http://localhost/your-folder-name/index.php`

# A Note on GitHub Pages
Since this relies on PHP and MySQL, it won't run on GitHub Pages — that only serves static files, so it would just show the raw PHP code instead of running it. To actually see the forms working, it needs to be run locally as above, or hosted somewhere that supports PHP.

# Author
Zoya Ali
