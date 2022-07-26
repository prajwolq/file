<?php
  session_start();
  require_once ('component.php');
    // require_once ('db/connect.php');

    $label = '';
    if (isset($_GET['label'])) {
        $label = $_GET['label'];
    }
    $sucess = '';
    if (isset($_GET['sucess'])) {
        $sucess = $_GET['sucess'];
    }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Contact -Your Books </title>
    <link rel="stylesheet" href="../css/contact.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="navbar">
      <nav>
        <a href="#"><img src="../images/logo.png" class="logo"></a>
          <div class="content1">
          <ul>
              <li><a href="../index.php">Home</a></li>
              <li><a href="#">Contact</a></li>
              <li><a href="aboutus.php">About Us</a></li>
          </ul>
          </div>
          <div>
              <?php
                if (!isset($_SESSION['user'])){
                    notset();
                }
              ?>       
              <?php
              if (isset($_SESSION['user'])){
                  echo 'Welcome, ' . $_SESSION['user'];
              }
              ?>
            </div>
      </nav>
    </div>  
  <div class="container">
    <div class="content">
      <div class="left-side">
        <div class="address details">
          <i class="fas fa-map-marker-alt"></i>
          <div class="topic">Address</div>
          <div class="text-one">Lalitpur</div>
          <div class="text-two">Nepal College Of Information Technlogy</div>
        </div>
        <div class="phone details">
          <i class="fas fa-phone-alt"></i>
          <div class="topic">Phone</div>
          <div class="text-one">+123456</div>
          <div class="text-two">+789012</div>
        </div>
        <div class="email details">
          <i class="fas fa-envelope"></i>
          <div class="topic">Email</div>
          <div class="text-one">ncit.edu.np</div>
          <div class="text-two">ncit.edu.np</div>
        </div>
      </div>
      <div class="right-side">
      <span class="sucess_submit"><?php echo $sucess ?></span>
      <span class="failed_submit"><?php echo $label ?></span>
        <div class="topic-text">Send us a message</div>
        <p>You can ask here any question or give feedback ↓ </p>
      <form action="process-contact.php" method="POST">
        <div class="input-box">
          <input type="text" name="name_box" placeholder="Enter your full name">
        </div>
        <div class="input-box">
          <input type="text" name="email_box" placeholder="Enter your email">
        </div>
        <div class="input-box message-box">
          <textarea name="message_box"placeholder="Enter your message.."></textarea>
        </div>
        <!-- <div class="button">
          <input type="submit" value="Send" >
        </div> -->
        <div class="button">
          <button class="button" type="submit" value="Send" >submit</button>
        </div>
      </form>
    </div>
    </div>
  </div>

</body>
</html>
