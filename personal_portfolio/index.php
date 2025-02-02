<?php
include 'db.php';
$submitted = false;
$errorMessage = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Prepare the SQL statement
    $stmt = $conn->prepare("INSERT INTO `contact form` (`Name`, `Email`, `Subject`, `Message`, `Created_at`) VALUES (?, ?, ?, ?, current_timestamp())");
    
    // Bind parameters to the prepared statement
    $stmt->bind_param("ssss", $name, $email, $subject, $message);  // "ssss" means four string parameters

    // Execute the statement
    if($stmt->execute()){
        $submitted = true;
    } else {
        $submitted = false;
        $errorMessage = $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
    mysqli_close($conn);
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Amreen Kaur</title>
    <link rel="icon" href="images/letter-a.png" type="image/png">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/unicons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <!-- MAIN STYLE -->
    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body>
    <!-- Spinner-->
  <div id="loading">
  <div class="spinner"></div>
  </div>
  
    <!-- MENU -->
    <nav class="navbar navbar-expand-sm navbar-light">
        <div class="container">
            <a class="navbar-brand" href="index.html"><i class='uil uil-user'></i>AMREEN KAUR</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a href="#about" class="nav-link"><span data-hover="About">About</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="#project" class="nav-link"><span data-hover="Projects">Projects</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="#resume" class="nav-link"><span data-hover="Resume">Resume</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="#skills" class="nav-link"><span data-hover="Skills">Skills</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="#testimonials" class="nav-link"><span data-hover="Testimonial">Testimonials</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="#contact" class="nav-link"><span data-hover="Contact">Contact</span></a>
                    </li>
                </ul>

                <ul class="navbar-nav ml-lg-auto">
                    <div class="ml-lg-4">
                      <div class="color-mode d-lg-flex justify-content-center align-items-center">
                        <i class="color-mode-icon"></i>
                        Color Mode
                      </div>
                    </div>
                </ul>
            </div>
        </div>
    </nav>
    <?php if ($submitted === true): ?>
    <div class="alert">
        <span class="alert-message">Your form has been submitted successfully!</span>
        <button class="alert-close-btn" onclick="dismissAlert()">×</button>
    </div>

<?php elseif ($submitted === false && !empty($errorMessage)): ?>
    <div class="alert alert-danger">
        <span class="alert-message">Something went wrong! Error: <?php echo $errorMessage; ?></span>
        <button class="alert-close-btn" onclick="dismissAlert()">×</button>
    </div>
<?php endif; ?>


    <!-- ABOUT -->
    <section class="about full-screen d-lg-flex justify-content-center align-items-center" id="about">
        <div class="container">
            <div class="row">
                
                <div class="col-lg-7 col-md-12 col-12 d-flex align-items-center">
                    <div class="about-text">
                        <small class="small-text">A Glimpse into  <span class="mobile-block">My World of Development!</span></small>
                        <h1 id="rank" class="animated animated-text">
                            <span class="mr-2">Hey, I'm</span>
                                <div class="animated-info">
                                    <span class="animated-item">Amreen Kaur</span>
                                    <span class="animated-item">Software Developer</span>
                                    <span class="animated-item">Website Developer</span>
                                </div>
                        </h1>

                        <p>Passionate Computing Science student skilled in web development, problem-solving, and creating impactful digital solutions, with a focus on innovation and continuous learning.</p>
                        
                        <div class="custom-btn-group mt-4">
                          <a href="amreen_kaur_resume.pdf" download="Amreen_Kaur_Resume.pdf" class="btn mr-lg-2 custom-btn" onclick="downloadAndOpen(); return false;"><i class='uil uil-file-alt'></i> Download Resume</a>
                          <a href="#contact" class="btn custom-btn custom-btn-bg custom-btn-link">Get a free quote</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5 col-md-12 col-12">
                    <div class="about-image svg">
                        <img src="images/undraw/engineer.svg" class="img-fluid" alt="svg image">
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- PROJECTS -->
    <section class="project py-5" id="project">
    <div class="container">
        <div class="row">
            <div class="col-lg-11 text-center mx-auto col-12">
                <div class="col-lg-8 mx-auto">
                    <h2>Projects I've Brought to Life</h2>
                </div>

                <!-- Owl Carousel for Projects -->
                <div class="owl-carousel owl-theme">
                    <!-- Project 1: Travel Slider Website -->
                    <div class="item">
                        <div class="project-info">
                            <img src="images/project/project-image01.png" class="img-fluid" alt="Travel Slider Website">
                            <div class="project-details">
                                <h4>Travel Slider Website</h4>
                                <p>A visually appealing travel website with a dynamic image slider showcasing travel destinations.</p>
                                <p><strong>Technologies:</strong> HTML, CSS, JavaScript</p>
                            </div>
                        </div>
                    </div>

                    <!-- Project 2: Code Connect Forum -->
                    <div class="item">
                        <div class="project-info">
                            <img src="images/project/project-image02.png" class="img-fluid" alt="Code Connect Forum">
                            <div class="project-details">
                                <h4>CodeConnect Forum</h4>
                                <p>A forum website for developers to share knowledge, ask questions, and collaborate on coding topics.</p>
                                <p><strong>Technologies:</strong> PHP, Bootstrap, MySQL</p>
                            </div>
                        </div>
                    </div>

                    <!-- Project 3: ChatGPT Clone -->
                    <div class="item">
                        <div class="project-info">
                            <img src="images/project/project-image03.png" class="img-fluid" alt="ChatGPT Clone">
                            <div class="project-details">
                                <h4>ChatGPT Clone</h4>
                                <p>A clone of ChatGPT that uses an API to fetch and provide answers to user queries in real-time.</p>
                                <p><strong>Technologies:</strong> HTML, CSS, JavaScript, API Integration</p>
                            </div>
                        </div>
                    </div>

                    <!-- Project 4: Gloingw Beauty E-Commerce -->
                    <div class="item">
                        <div class="project-info">
                            <img src="images/project/project-image04.png" class="img-fluid" alt="Glow Beauty E-Commerce">
                            <div class="project-details">
                                <h4>Glowing Beauty E-Commerce</h4>
                                <p>A front-end e-commerce website for beauty products with a glowing and modern design.</p>
                                <p><strong>Technologies:</strong> HTML, CSS, JavaScript</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

 
    <!-- FEATURES -->
    <section class="resume py-5 d-lg-flex justify-content-center align-items-center" id="resume">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-12">
                  <h2 class="mb-4">Experiences</h2>

                    <div class="timeline">
                        <div class="timeline-wrapper">
                             <div class="timeline-yr">
                                  <span>2025</span>
                             </div>
                             <div class="timeline-info">
                                  <h3><span>Web Development Intern</span><small>Unified Mentor</small></h3>
                                  <p>At Unified Mentor, I developed web projects, focusing on responsive design, functionality, and delivering seamless user experiences while enhancing my development skills.</p>
                             </div>
                        </div>

                        <div class="timeline-wrapper">
                            <div class="timeline-yr">
                                <span>2024</span>
                            </div>
                            <div class="timeline-info">
                                <h3><span>Freelance Web Developer</span></h3>
                                <p>Designed and developed a personal portfolio website to showcase skills and projects.</p>
                            </div>
                        </div>

                        <div class="timeline-wrapper">
                            <div class="timeline-yr">
                                <span>2024</span>
                            </div>
                            <div class="timeline-info">
                                <h3><span>Coding Enthusiast</h3>
                                <p>Solved 50+ LeetCode problems, focusing on algorithms and data structures, and applied solutions to real-world challenges.</p>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-lg-6 col-12">
                  <h2 class="mb-4 mobile-mt-2">Educations</h2>

                    <div class="timeline">
                        <div class="timeline-wrapper">
                             <div class="timeline-yr">
                                  <span>2023-27</span>
                             </div>
                             <div class="timeline-info">
                                  <h3><span>Bachelor of Computing Science</span><small>Thompson Rivers University</small></h3>
                                  <p>Currently pursuing a Bachelor's degree in Computing Science, gaining expertise in programming, software development, data structures, algorithms, and mobile app development.</p>
                             </div>
                        </div>

                        <div class="timeline-wrapper">
                            <div class="timeline-yr">
                                <span>2021-23</span>
                            </div>
                            <div class="timeline-info">
                                <h3><span>High School</span><small>St. Xaviers School, Bathinda</small></h3>
                                <p>Completed high school with a focus on non-medical studies (Physics, Chemistry, Mathematics), achieving an overall score of 96%.</p>
                            </div>
                        </div>
                    
                    </div>
                </div>
                
            </div>
        </div>
    </section>

    <!-- SKILLS -->
  
    <section class="skills py-5" id="skills">
      <div class="container">
          <div class="row">
              <div class="col-lg-12 text-center">
                  <h2 class="mb-4">My Technical Skills</h2>
                  <p class="mb-5">A showcase of the tools, technologies, and programming languages I excel in.</p>
              </div>
          </div>
          <div class="skills-grid">
              <div class="skill-item">
                  <img src="images/icons/html.png" alt="HTML5" class="skill-icon">
                  <h5>HTML5</h5>
                  <div class="progress">
                      <div class="progress-bar" style="width: 90%;">90%</div>
                  </div>
              </div>
              <div class="skill-item">
                  <img src="images/icons/css.png" alt="CSS3" class="skill-icon">
                  <h5>CSS3</h5>
                  <div class="progress">
                      <div class="progress-bar" style="width: 85%;">85%</div>
                  </div>
              </div>
              <div class="skill-item">
                  <img src="images/icons/js.png" alt="JavaScript" class="skill-icon">
                  <h5>JavaScript</h5>
                  <div class="progress">
                      <div class="progress-bar" style="width: 80%;">80%</div>
                  </div>
              </div>
              <div class="skill-item">
                  <img src="images/icons/php.png" alt="PHP" class="skill-icon">
                  <h5>PHP</h5>
                  <div class="progress">
                      <div class="progress-bar" style="width: 75%;">90%</div>
                  </div>
              </div>
              <div class="skill-item">
                  <img src="images/icons/mysql-database.png" alt="MySQL" class="skill-icon">
                  <h5>MySQL</h5>
                  <div class="progress">
                      <div class="progress-bar" style="width: 70%;">70%</div>
                  </div>
              </div>
              <div class="skill-item">
                  <img src="images/icons/python.png" alt="Python" class="skill-icon">
                  <h5>Python</h5>
                  <div class="progress">
                      <div class="progress-bar" style="width: 80%;">95%</div>
                  </div>
              </div>
              <div class="skill-item">
                  <img src="images/icons/java.png" alt="Java" class="skill-icon">
                  <h5>Java</h5>
                  <div class="progress">
                      <div class="progress-bar" style="width: 65%;">90%</div>
                  </div>
              </div>
              <div class="skill-item">
                  <img src="images/icons/android.png" alt="Android" class="skill-icon">
                  <h5>Android</h5>
                  <div class="progress">
                      <div class="progress-bar" style="width: 70%;">70%</div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  
 <!-- Testimonials Section -->
<section class="testimonials py-5" id="testimonials">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="mb-4">What People Say</h2>
        <p id="top" class="mb-5">Here are some kind words from people I've worked with.</p>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-8 mx-auto">
        <!-- Testimonials Carousel -->
        <div class="owl-carousel owl-theme">
          <!-- Testimonial Item 1 -->
          <div class="testimonial-item">
            <img src="images/people/person1.jpg" alt="John Doe" class="testimonial-img">
            <div class="testimonial-content">
              <i class="uil uil-quote-left quote-icon"></i>
              <p>"Amreen is an exceptional developer! She delivered high-quality work on time and was a pleasure to work with."</p>
              <h4>- John Doe</h4>
              <small>CEO, Company XYZ</small>
            </div>
          </div>
          <!-- Testimonial Item 2 -->
          <div class="testimonial-item">
            <img src="images/people/person2.jpg" alt="Jane Smith" class="testimonial-img">
            <div class="testimonial-content">
              <i class="uil uil-quote-left quote-icon"></i>
              <p>"Her attention to detail and problem-solving skills are unmatched. Highly recommend her for any project!"</p>
              <h4>- Jane Smith</h4>
              <small>Manager, ABC Corp</small>
            </div>
          </div>
          <!-- Testimonial Item 3 -->
          <div class="testimonial-item">
            <img src="images/people/person3.jpg" alt="Michael Brown" class="testimonial-img">
            <div class="testimonial-content">
              <i class="uil uil-quote-left quote-icon"></i>
              <p>"Amreen's work exceeded our expectations. She is a true professional and a great team player."</p>
              <h4>- Michael Brown</h4>
              <small>Founder, Startup Inc</small>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
    <!-- CONTACT -->
    <section class="contact py-5" id="contact">
      <div class="container">
        <div class="row">
          
          <div class="col-lg-5 mr-lg-5 col-12">
            <div class="google-map w-100">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d110335.61285951377!2d74.87628407947895!3d30.208892742947903!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39173297173abbcd%3A0xa00033c0a58a5ac8!2sBathinda%2C%20Punjab!5e0!3m2!1sen!2sin!4v1736084007294!5m2!1sen!2sin" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>

            <div class="contact-info d-flex justify-content-between align-items-center py-4 px-lg-5">
                <div class="contact-info-item">
                  <h3 class="mb-3 text-white">Say hello</h3>
                  <p class="footer-text mb-0">+91 7814607408</p>
                  <p><a href="mailto:amreenkaur005@gmail.com">amreenkaur005@gmail.com</a></p>
                </div>

                <ul class="social-links">
    <li>
        <a href="https://www.linkedin.com/in/amreen-kaur00/" class="social-icon" data-toggle="tooltip" data-placement="left" title="LinkedIn" target="_blank">
            <i class="fab fa-linkedin"></i> <!-- LinkedIn icon -->
        </a>
    </li>
    <li>
        <a href="https://github.com/Amreen-kaur1" class="social-icon" data-toggle="tooltip" data-placement="left" title="GitHub" target="_blank">
            <i class="fab fa-github"></i> <!-- GitHub icon -->
        </a>
    </li>
    <li>
        <a href="https://www.instagram.com/amreenn.__/" class="social-icon" data-toggle="tooltip" data-placement="left" title="Instagram" target="_blank">
            <i class="fab fa-instagram"></i> <!-- Instagram icon -->
        </a>
    </li>
</ul>
            </div>
          </div>

          <div class="col-lg-6 col-12">
            <div class="contact-form">
              <h2 class="mb-4">Have a project in mind? Let's collaborate!</h2>

              <form action="index.php" method="post" onsubmit="return validateForm()">
                <div class="row">
                  <div class="col-lg-6 col-12">
                    <input type="text" class="form-control" name="name" placeholder="Your Name" id="name">
                  </div>

                  <div class="col-lg-6 col-12">
                    <input type="email" class="form-control" name="email" placeholder="Email" id="email">
                  </div>

                  <div class="col-12">
                    <input type="text" class="form-control" name="subject" placeholder="Subject" id="subject">
                  </div>

                  <div class="col-12">
                    <textarea name="message" rows="6" class="form-control" id="message" placeholder="Message"></textarea>
                  </div>

                  <div class="ml-lg-auto col-lg-5 col-12">
                    <input type="submit" class="form-control submit-btn" value="Send Button">
                  </div>
                </div>
              </form>
            </div>
          </div>

        </div>
      </div>
    </section>

  
<!-- FOOTER -->
<footer class="footer">
    <div class="container">
        <div class="footer-content">
            <!-- Social Media Links -->
            <ul class="social-links">
                <li><a href="https://www.linkedin.com/in/amreen-kaur00/" class="social-icon" data-toggle="tooltip" data-placement="top" title="LinkedIn"><i class="fab fa-linkedin"></i></a></li>
                <li><a href="https://github.com/Amreen-kaur1" class="social-icon" data-toggle="tooltip" data-placement="top" title="GitHub"><i class="fab fa-github"></i></a></li>
                <li><a href="https://www.instagram.com/amreenn.__/" class="social-icon" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                <li><a href="mailto:amreenkaur005@gmail.com" class="social-icon" data-toggle="tooltip" data-placement="top" title="Email"><i class="fas fa-envelope"></i></a></li>
            </ul>

            <!-- Copyright Text -->
            <p class="copyright-text">
                &copy; 2025 Amreen Kaur. All rights reserved.<br>
                Designed with <i class="uil uil-heart"></i> by <a href="#" class="designer-link">Amreen</a>
            </p>
        </div>

        <!-- Back to Top Button -->
        <a href="#about" class="back-to-top">
            <i class="uil uil-arrow-up"></i>
        </a>
    </div>
</footer>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/Headroom.js"></script>
    <script src="js/jQuery.headroom.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/custom.js"></script>

  </body>
</html>