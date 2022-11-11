<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!--meta-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Denisë Demaku"/>
    <meta name="description" content="Denisë Demaku, Junior Front end Web Developer "/>
    <!--styles-->
    <link rel="stylesheet" type="text/css" href="css/styles.css"/>
    <!--title-->
    <title>Denisë Demaku | Junior Front End Web developer </title>
    </head>
    <body>
    <!--header-->
        <header id="header">
            <h1 id="top"><a href="index.php#home">Denisë <span>Demaku</span></a></h1>
            <div id="mobile-menu">
                <div id="bar1"></div>
				<div id="bar2"></div>
				<div id="bar3"></div>
            </div>
        </header>
     <!--navbar-->
     <nav>
        <ul>
            <li><a href="#home-sec">Home</a></li>
            <li><a href="#portfolio-sec">Portfolio</a></li>
            <li><a href="#about-sec">About</a></li>
            <li><a href="#contact-sec">Contact</a></li>
        </ul>
    </nav>
  <!--Home-->
    <div id="home-sec">
        <p class="intro-greeting">Hi, I’m <a href="#about-sec">Denisë</a>,<br/>front-end web developer</p>
        <p class="location"><img class="icon" width="20" src="images/icons/globe.svg" alt=""/>Kosovo</p>

        <a class="button" href="#portfolio-sec">Portfolio</a>
        <a class="scroll-arrow" href="#portfolio-sec"><img class="icon" src="images/icons/arrow-down.svg" alt="portfolio section"/></a>

    </div>
        <!--footer -->
        <footer>
            <small>&copy; Denisë Demaku 2022</small>
        </footer>
        <!---->


          <!--Contact section-->
          <section id="contact-sec">

            <h2>Contact</h2>
            <p>Have a question? Get in touch!</p>

            
            <!--form start-->
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
        
            <!--form start-->
            <form id="contactform" method="post" action="send_email.php">
                <label for="name">Name *</label>
                <input type="text" id="name" name="name" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['name'] : '' ?>" required="" />
                <label for="email" >Email *</label>
                <input type="email" id="email" name="email" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['email'] : '' ?>" required="required" pattern="^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$" required />
                <label for="message" >Message *</label>
                <textarea name="message" id="message" cols="30" rows="10"  required=""><?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['message'] : '' ?></textarea>
                <input class="button" value="submit" type="submit" />
            </form>
            <!--form end-->

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
            <!--form end-->

            <!--Social links start-->
            <ul>
                <li><a href="https://github.com/DenisaDemaku"><img class="icon"  src="images/icons/github.svg" alt="github"/>Github</a></li>
                <li><a href="https://www.linkedin.com/in/denis%C3%AB-demaku-660168178/"><img class="icon"  src="images/icons/linkedin.svg" alt="linkedin"/>LinkedIn</a></li>
                <li><a href="mailto:denisademaku1@gmail.com"><img class="icon"  src="images/icons/email.svg" alt="email"/>denisademaku1@gmail.com</a></li>
            </ul>
          
</body>
</html>