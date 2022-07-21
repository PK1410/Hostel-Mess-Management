<?php
  session_start();
  require_once "config.php";
  
  if(isset($_SESSION['email']) && isset($_SESSION['password']) && isset ($_SESSION['myname']))
  {
    $stmt=$pdo->prepare("INSERT INTO users (`name`,email,`password`) VALUE (:n,:e,:p)");
    $stmt->execute(array( ':n'=>$_SESSION['myname'],
                          ':e'=>$_SESSION['email'],
                          ':p'=>$_SESSION['password'] ));
    unset($_SESSION['myname']);
    unset($_SESSION['password']);
    unset($_SESSION['email']);
    header("Location: login.php");
    return;
  }

  
?>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register Page</title>
    <link rel="stylesheet" href="CSS/register.css" />
    <link rel="stylesheet" href="CSS/flash.css" />
  </head>
  <body>
    <div class="container">
      <div class="flash"><p>
        <?php
          if(isset($_SESSION['error']))
          echo(htmlentities($_SESSION['error']));
          unset($_SESSION['error']);
        ?>
      </p></div>
      <h1>Book a room for yourself:-</h1>
      <form method="POST">
        <div class="box">
          NAME: <input type="text" name="myName" id="name" >
        </div>
        <div class="box">ADDRESS: <input type="text" name="address"></div>
        <div class="box">EMail: <input type="email" name="myEmail" ></div>
        <div class="box">
          PASSWORD: <input type="password" name="myPassword">
        </div>
        <div>
          GENDER: Male <input type="radio" name="myRadio" /> Female
          <input type="radio" name="myRadio" /> Other
          <input type="radio" name="myRadio" />
        </div>
          <input class="box btn-1" type="submit" name="submit" value="Submit now" >
        
          <input class="box btn-1" type="reset" value="RESET" >
        
      </form>
      
      <a class="btn" href="login.php" style="text-decoration:none">Sign In</a>
      <?php
        if(isset($_POST['submit']) && isset($_POST['myName']) && isset($_POST['address']) && isset($_POST['myEmail']) && isset($_POST['myPassword']) 
        && (!empty($_POST['myName'])) && (!empty($_POST['address'])) && (! empty($_POST['myEmail']))&&(! empty($_POST['myPassword'])))
        {
          $_SESSION['myname']=$_POST['myName'];
          $_SESSION['email']=$_POST['myEmail'];
          $_SESSION['password']=$_POST['myPassword'];
          header("Location: register.php");
          return;
        }
        if(isset($_POST['submit']) && ((empty($_POST['myName'])) || (empty($_POST['address'])) || ( empty($_POST['myEmail']))||( empty($_POST['myPassword']))))
        {
          $_SESSION['error']="All Fields are required";
          header("Location: register.php");
          return;
        }
        
      ?>
  
    </div>
  </body>
</html>
