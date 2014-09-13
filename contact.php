<?php

if(isset($_Post['submit'])){
    $recipient="pedrocasalribeiro@hotmail.com";
    $sender=$_POST["name"];
    $senderEmail=$_POST["email"];
    $message=$_POST["message"];

    $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";

    $thankYou = mail($recipient, $message, $mailBody, "From: $sender <$senderEmail>");

    if( $thankYou == true )  
   {
      echo "Message sent successfully...";
   }
   else
   {
      echo "Message could not be sent...";
   }
}
?>

<?php print_r($_POST); ?> 

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Pedro Ribeiro.ME</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- FontAwesome icons-->

    <link rel="stylesheet" href="fonts/awesome/css/font-awesome.min.css">

    <!-- Custom styles for this page -->
    <link href="css/cover.css" rel="stylesheet">
    <link href="css/carousel.css" rel="stylesheet">
    <link href="css/default.css" rel="stylesheet" type="text/css" />
    <link href="css/custom.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="site-wrapper">
      <div class="site-wrapper-inner">
        <div class="cover-container">
          <div class="masthead clearfix">
            <div class="inner">
              <h3 class="masthead-brand">Pedro C. Ribeiro</h3>
              <ul class="nav masthead-nav">
                <li><a href="index.html">Home</a></li>
                <li><a href="portfolio.html">Portfolio</a></li>
                <li><a href="resume.html">Resume</a></li>
                <li><a href="contact.html">Contact</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <div class="ctitle">
        <h1>Get in Touch!
              <span>Take the first step towards a productive future.</span>
          </h1>
          <hr>
      </div>

      <div class="others">
        <div class="vCard">
          <p class="adr">
            <span>Rua Padre Antonio Vieira</span>
            <span>Lote 99 3º ESQ</span>
            <span>2870-009 Montijo</span>
            <span>PORTUGAL</span>
          </p>
          
          <dl class="contact-details">
            <div>
              <dt><abbr class="Telephone">T</abbr></dt>
              <dd>+351 91 89 94 301</dd>
            </div>
            <div>
              <dt><abbr class="Telephone">T</abbr></dt>
              <dd>+351 21 00 00 000</dd>
            </div>
            <div>
              <dt><abbr class="E-mail">E</abbr></dt>
              <dd><a href="mailTo:pedrocasalribeiro@hotmail.com">PedroCasalRibeiro@hotmail.com</a></dd>
            </div>
          </dl>
        </div>
      </div>

      <div class="form">
      <form action="contact.php" method="post" class="dark-matter">
          <label>
              <span>Your Name :</span>
              <input id="name" type="text" name="name" placeholder="Your name" />
          </label>
          
          <label>
              <span>Your Email :</span>
              <input id="email" type="email" name="email" placeholder="Your email address" />
          </label>
          
          <label>
              <span>Message :</span>
              <textarea id="message" name="message" placeholder="Your message to me"></textarea>
          </label> 
           <label>
              <span>Subject :</span><select name="selection">
              <option value="General Question">General Question</option>
              <option value="Website Design">Website Design</option>
              <option value="Translation Services">Translation Services</option>
              <option value="Business Development">Business Development</option>
              <option value="Customer Service">Customer Service</option>
              </select>
          </label>
          <label id="label">
              <span>&nbsp;</span> 
              <input type="submit" class="button" name="submit" value="Send" /> 
          </label>    
      </form>
      </div>

    </div>


    <div class="footer">
      <div class="container">
        <ul class="nav masthead-nav">
          <li>
            <a href="https://www.facebook.com/pedrocasalribeiro" target="_blank">
              <span class="fa-stack fa-lg">
                <i class="fa fa-square-o fa-stack-2x"></i>
                <i class="fa fa-facebook fa-stack-1x"></i>
              </span>
            </a>
          </li>
          <li>
            <a href="https://twitter.com/p3drocr" target="_blank">
              <span class="fa-stack fa-lg">
                <i class="fa fa-square-o fa-stack-2x"></i>
                <i class="fa fa-twitter fa-stack-1x"></i>
              </span>
            </a>
          </li>
          <li>
            <a href="https://www.linkedin.com/pub/pedro-casal-ribeiro/58/905/823" target="_blank">
              <span class="fa-stack fa-lg">
                <i class="fa fa-square-o fa-stack-2x"></i>
                <i class="fa fa-linkedin fa-stack-1x"></i>
              </span>
            </a>
        </ul>
      </div>
    </div>


    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>
    <script src="js/jquery.js" type="text/javascript"></script>
    <script src="js/raphael.js" type="text/javascript"></script>
    <script src="js/init.js" type="text/javascript"></script>
    <script src="js/custom.js"></script>
  </body>
</html>
