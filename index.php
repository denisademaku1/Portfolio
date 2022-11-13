<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
    <head>

        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-169801365-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-169801365-1');
        </script>
        <!--META-->
        <meta charset="utf-8">
        <meta name="author" content="Denisë Demaku"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Denisë Demaku, Junior Full Stack Web Developer who uses a create approach to building modern, clean, functional mobile first responsive websites using HTML, CSS and JavaScript"/>
        <!--FONTS-->
        <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Montserrat:wght@100;200;300;400;600&display=swap" rel="stylesheet"/>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300&display=swap" rel="stylesheet"/>
        <!--STYLES-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="icon" type="image/png" href="images/favicon.png"/>
        <link rel="stylesheet" type="text/css" href="css/styles.css"/>
        <!--SCRIPTS-->
        <script
            src="https://code.jquery.com/jquery-3.5.0.js"
            integrity="sha256-r/AaFHrszJtwpe+tHyNi/XCfMxYpbsRg2Uqn0x3s2zc="
            crossorigin="anonymous"></script>
        <script src="scripts/scripts.js"></script>
        <!--TITLE-->
        <title>Denisë Demaku | Junior Full Stack Developer </title>
    </head>
    <body>
        <!--Header start-->
        <header id="header">
  
            <h1 id="top"><a href="index.php#home">Denisë <span>Demaku</span></a></h1>

            <!--Mobile menu Start-->
            <div id="mobile-menu">
                <div id="bar1"></div>
				<div id="bar2"></div>
				<div id="bar3"></div>
            </div>

        </header>
        <!--Nav start-->
        <div id="navbar">

            <!--NAV start-->
            <nav>
                <ul>
                    <li><a href="#home-sec">Home</a></li>
                    <li><a href="#portfolio-sec">Portfolio</a></li>
                    <li><a href="#about-sec">About</a></li>
                    <li><a href="#contact-sec">Contact</a></li>
                </ul>
            </nav>

            <!--icons wrapper start-->
            <div class="icons-wrapper">
                <a href="https://github.com/DenisaDemaku"><img class="icon" width="20" src="images/icons/github.svg" alt="Github"/></a>
                <a href="https://www.linkedin.com/in/denis%C3%AB-demaku-660168178"><img class="icon" width="20" src="images/icons/linkedin.svg" alt="Linkedin"/></a>
                <a href="mailto:denisademaku1@gmail.com"><img class="icon" width="20" src="images/icons/email.svg" alt="email"/></a>
            </div>
            
        </div>

        <!-- Back to top link start-->
        <a id="backToTop" href="#top">
            <img src="images/icons/arrow.svg" alt="back to top"/>
        </a>


        <!--Main Content start-->
        <main>
            
            <!--Home start-->
            <div id="home-sec">
                <p class="intro-greeting">Hi, I’m <a href="#about-sec">Denisë</a>,<br/>full-stack web developer</p>
                <p class="location"><img class="icon" width="20" src="images/icons/globe.svg" alt=""/>Kosovo</p>

                <a class="button" href="#portfolio-sec">Portfolio</a>
                <a class="scroll-arrow" href="#portfolio-sec"><img class="icon" src="images/icons/arrow-down.svg" alt="portfolio section"/></a>

            </div>
            
            <!--Portfolo Section Start-->
            <section id="portfolio-sec">

                <h2>Portfolio</h2>
                <p>Recent Projects I have worked on.</p>
                
                <!--Medical Clinic start-->
                <section class="project-container">
                    <a href="medicalclinic.html">
                        <div class="overlay">
                            <img src="images/portfolio/logo2.png" alt="">
                            <h3>Medical clinic website</h3>
                            <p>Case Study<p>
                        </div>
                    </a>
                </section>
                <!--end-->

                <section class="project-container">
                    <a href="medicalsupplies.html">
                        <div class="overlay">
                        <img src="images/portfolio/logopr2.png" alt="">
                            <h3>Medical Supplies website</h3>
                            <p>Case Study<p>
                        </div>
                    </a>
                </section>

                <!--Link to git hub start-->
                <a class="button" href="https://github.com/DenisaDemaku"><img class="icon" width="20" src="images/icons/github.svg" alt="">github for more</a>

            </section>

            <!--About section start-->
            <section id="about-sec">

                <h2>About Me</h2>

                <!--Img wrapper start-->
                <div class="about-image-wrapper">
                    <img src="images/denise.png" alt="Denisë Demaku, Front-End Web Developer"/>
                </div>

                <!--Background start-->
                <section class="background-wrapper">
                    <h3>My Background</h3>
                    <p>Hi, I’m <span>Denisë</span>, a budding front end web developer, concentrating on developing <span>mobile-first</span>, <span>fully responsive interfaces</span>.</p>
                    <p>I enjoy the full process of planning, designing and developing websites from start to finish while always keeping the end user in mind.</p>
                    <!--Download my cv-->
                    <a class="button" href="denisedemaku.pdf" download><img class="icon" width="20" src="images/icons/pdf.svg" alt="">Download CV</a>
                </section>
                <!--Background end-->

                <!--Skills start-->
                <section class="skills">

                    <h3>Skills</h3>
                    <p>I can take designs and mock-ups, and create modern, clean, mobile first responsive, functional interfaces using <span>HTML, CSS</span> and <span>JavaScript.</span></p>
                    <p>I have experience in <span>jQuery</span>, <span>Laravel</span>, <span>React.</span></p>

                    <!--Language icons wrapper start start-->
                    <div class="icons-wrapper">
                        <img class="icon" width="20" src="images/icons/html5.svg" alt=""/>
                        <img class="icon" width="20" src="images/icons/css3.svg" alt=""/>
                        <img class="icon" width="20" src="images/icons/javascript.svg" alt=""/>
                    </div>
                   

                    <p>I have an understanding of <span>wireframes</span>, sitemaps and overall <span>project planning</span>. I've also gained experience in <span>time management</span> skills and the ability to <span>communicate within a team</span> while effectively <span>meeting deadlines.</span></p>

                </section>

                <!--Education & interests-->
                <div>

                    <!--Edukaction start-->
                    <section class="educa">
                        <h3>Education</h3>
                        <p>Currently, I am a student at UBT(University of Business and Technology).</p>
                        <p>If you want to find out more <a href="denisedemaku.pdf" target="_blank" title="">take a look at my CV</a></p>

                    </section>
            
                    <!--Interests start-->
                    <section>
                        <h3>Interests</h3>
                        <p>When I’m away from the computer I’m happiest when <span>drinking coffee</span>, <span>sketching </span> and <span>travelling</span></p>
                    </section>

                </div>

            </section>

            <!--Contact sectionstart-->
            <section id="contact-sec">

                <h2>Contact</h2>
                <p>Have a question? Get in touch!</p>

                
                <!--Form start-->
                <div id="form">
                
                	<?php
    				//init variables
    				$cf = array();  //cf=contact form
    				$sr = false;  	//sr=server response
    				if(isset($_SESSION['cf_returndata'])) {
    					$cf = $_SESSION['cf_returndata'];  //set cf to equal session to save typing $_SESSION… every time we want to access this data
    					$sr = true;  //will be checking sr to see if form has been posted
    				}
    			?>
			
                <!--Form start-->
                <form id="contactform" method="post" action="send_email.php">
                    <label for="name">Name *</label>
                    <input type="text" id="name" name="name" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['name'] : '' ?>" required="" />
                    <label for="email" >Email *</label>
                    <input type="email" id="email" name="email" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['email'] : '' ?>" required="required" pattern="^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$" required />
                    <label for="message" >Message *</label>
                    <textarea name="message" id="message" cols="30" rows="10"  required=""><?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['message'] : '' ?></textarea>
                    <input class="button" value="submit" type="submit" />
                </form>
                <!--Form end-->

        		<ul id="errors" class="error <?php echo ($sr && !$cf['form_ok']) ? 'visible' : ''; ?>">
        				<li><strong>There were some problems with your form submission:</strong></li>
        				<?php
        					if(isset($cf['errors']) && count($cf['errors']) > 0) :
        					foreach($cf['errors'] as $error) :
        				?>
        				<li><?php echo $error ?></li>
        				<?php
        					endforeach;
        					endif;
        				?>
        		</ul>


                <p id="success" class="success <?php echo ($sr && $cf['form_ok']) ? 'visible' : ''; ?>">Your message has been sent!</p>
                
                <?php unset($_SESSION['cf_returndata']); ?>
                
                </div>


                <!--Social Links start-->
                <ul>
                    <li><a href="https://github.com/DenisaDemaku"><img class="icon"  src="images/icons/github.svg" alt="github"/>Github</a></li>
                    <li><a href="https://www.linkedin.com/in/denis%C3%AB-demaku-660168178/"><img class="icon"  src="images/icons/linkedin.svg" alt="linkedin"/>LinkedIn</a></li>
                    <li><a href="mailto:denisademaku1@gmail.com"><img class="icon"  src="images/icons/email.svg" alt="email"/>denisademaku1@gmail.com</a></li>
                </ul>
        </main>

    <!--footer start-->
    <footer>
        <small>&copy; Denisë Demaku 2022</small>
    </footer>
    <!--footer end-->
    </body>

</html>