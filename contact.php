<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
  <meta name="keywords" content="entrepreneur, business, businessman, boss, self-employed, freelancer, freelance">
  <meta name="description" content="EDNOVIS will help you achieve your goals and become a better entrepreneur">
  <title>EDNOVIS</title>
  <!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css"> -->
  <!-- <link rel="stylesheet" href="css/bootstrap-theme.css"> -->
  <link rel="stylesheet" type="text/css" href="css/normalize.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/device_styles.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <!-- <script src="js/bootstrap.js"></script> -->
</head>

<body>
    <header id="header-container">
      <div id="left-div-header">
        <h1>EDNOVIS</h1>
      </div>
      <div id="middle-div-header">
        <div id="nav-dropdown" class="dropdown">
          <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Menu
            <span class="caret"></span></button>
            <ul class="dropdown-menu">
              <li class="nav-li"><h3><a href="index.html" class="active">Home</a></h3></li>
              <li class="nav-li"><h3><a href="wwo.html">Offer</a></h3></li>
              <li class="nav-li"><h3><a href="approach.html">Approach</a></h3></li>
              <li class="nav-li"><h3><a href="contact.php" class="nav-contact">Contact</a></h3></li>
            </ul>
        </div>
        <nav class="navbar-menu">
          <h3><a href="index.html"><i class="fa fa-home"></i>&nbsp; Home</a></h3>
          <h3><a href="wwo.html"><i class="fa fa-key"></i>&nbsp; Offer</a></h3>
          <h3><a href="approach.html"><i class="fa fa-lightbulb-o"></i>&nbsp; Approach</a></h3>
          <h3><a href="contact.php" class="active nav-contact"><i class="fa fa-envelope"></i>&nbsp; Contact</a></h3>
        </nav>
      </div>
      <div id="right-div-header">
        <div id="social-media">
          <a href="#"><i class="fa fa-facebook-square fa-2x fb"></i></a>
          <a href="#"><i class="fa fa-google-plus-square fa-2x gplus"></i></a>
          <a href="#"><i class="fa fa-twitter-square fa-2x twit"></i></a>
        </div>
      </div>
    </header>

    <article id="article-container" class="article-contact">
      <div class="article-icons">
        <div><a href="index.html"><i class="fa fa-home fa-lg"></i></a></div>
        <div><a href="wwo.html"><i class="fa fa-lightbulb-o fa-lg"></i></a></div>
        <div><a href="approach.html"><i class="fa fa-key fa-lg"></i></a></div>
        <div><a href="contact.php"><i class="fa fa-envelope fa-lg"></i></a></div>
      </div>
      <audio src="audio/Bonecrack_02.mp3"></audio>
      <audio src="audio/enter_key_press.mp3"></audio>
      <div id="btn-div">
        <div class="click-btn message"><h1>Message</h1></div>
        <div class="click-btn location"><h1>Location</h1></div>
      </div>
      <div id="textarea-div">
        <section class="textarea-section">
          <form method="post" action="mailer.php">
            <input type='text' name='name' placeholder='Your Name *' required>
            <input type='email' name='email' placeholder='Your Email *' required>
            <input type='tel' name='phone' placeholder='Your Phone'>
            <textarea rows='6' name='message'></textarea>
            <input type="text" name="verify" class="verif_box" placeholder="Enter code" required>
            <img class="verif_img" src="verificationimage.php?<?php echo rand(0,9999);?>" alt="verification image">
            <input type='submit' value='send'>
          </form>
        </section>
        <iframe class="iframe-div" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9709.940234196243!2d-79.38965145708777!3d43.65269327098152!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89d4cb90d7c63ba5%3A0x323555502ab4c477!2sToronto%2C+ON%2C+Canada!5e0!3m2!1sfr!2sfr!4v1460225032881"
        width="500" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
      <div class="container-fluid">
        <div class="row">
          <div class="col-xs-10 col-xs-offset-1 col-md-6 col-md-offset-3">
            <section class="textarea-section-container">
              <form  method='post' action='#'>
                <input type='text' name='name' placeholder='Your Name *' required>
                <input type='email' name='email' placeholder='Your Email *' required>
                <input type='tel' name='phone' placeholder='Your Phone'>
                <textarea rows='6' name='message'></textarea>
                <input type="text" name="verify" class="verif_box" placeholder="Enter code" required>
                <img class="verif_img" src="verificationimage.php?<?php echo rand(0,9999);?>" alt="verification image">
                <input type='submit' value='send'>
              </form>
            </section>
          </div>
          <div class="col-xs-10 col-xs-offset-1 col-md-6 col-md-offset-3">
            <iframe class="iframe-container" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9709.940234196243!2d-79.38965145708777!3d43.65269327098152!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89d4cb90d7c63ba5%3A0x323555502ab4c477!2sToronto%2C+ON%2C+Canada!5e0!3m2!1sfr!2sfr!4v1460225032881"
             width="100%" height="340" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </article>

    <footer id="footer-container">
      <div class="contact-footer">
        <h3 class="footer-h3">Contact</h3>
        <ul class="list-unstyled">
          <li class="contact-li-laptop">Email: <a href="#">ednovis@gmail.com</a></li>
          <li class="contact-li-laptop">Telephone: +13366598745</li>
          <li class="contact-li-mobile"><a href="#">ednovis@gmail.com</a></li>
          <li class="contact-li-mobile">+13366598745</li>
        </ul>
      </div>
      <div class="social-footer">
        <h3 class="footer-h3">Follow us on</h3>
        <ul class="list-unstyled">
          <li class="fb-footer"><a href="#">Facebook</a></li>
          <li class="twit-footer"><a href="#">Twitter</a></li>
        </ul>
      </div>
      <div class="links-footer">
        <h3 class="footer-h3">Links</h3>
        <ul class="list-unstyled">
          <li><a href="#">Entrepreneur Vakia</a></li>
          <li class="buster-footer"><a href="#">GhostBuster</a></li>
        </ul>
      </div>
    </footer>

<script type="text/javascript" src="js/contact.js"></script>
</body>
</html>
