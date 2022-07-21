<?php
 session_start();
 require_once "config.php";
 if(isset($_SESSION['email'])&&isset($_SESSION['password']))
 {
  $stmt=$pdo->prepare("SELECT `name` from users where email=:e and `password`=:p");
  $stmt->execute(array( ':e'=>$_SESSION['email'],
                        ':p'=>$_SESSION['password']));
  $row=$stmt->fetch(PDO::FETCH_ASSOC);
  if($row==true)
  {
    $_SESSION['name']=$row['name'];
    unset($_SESSION['email']);
    unset($_SESSION['password']);
    header("Location: main.php");
  }
  else if($row==false)
  {$_SESSION['error']="Wrong email or password.";
    unset($_SESSION['email']);
    unset($_SESSION['password']);
  header("Location: login.php");}
  return;
 }
?>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Page</title>
    <link rel="stylesheet" href="CSS/index.css" />
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
      <h1>Login to College Hostel Mess Site</h1>
      <form method="POST">
      <div class="box">
        <input
          type="email"
          name="email"
          id="email"
          placeholder="Enter Your  Email"
        >
      </div>
      <div class="box">
        <input
          type="password"
          name="password"
          id="password"
          placeholder="Enter Your  Password"
        >
      </div>
      <input class ="btn" type="submit" name='login' value='Login In'>

      <a class="btn" href="register.php" style="text-decoration:none">Register</a>
      </form>
      <?php
      if(isset($_POST['email']) && isset($_POST['password']))
      {
        if(empty($_POST['password']||empty($_POST['email'])))
        {
          $_SESSION['error']="Email and password are required";
          header("Location: login.php");
          return;
        }
        if((!empty($_POST['email'])) && (!empty($_POST['password'])))
        {$_SESSION['email']=$_POST['email'];
        $_SESSION['password']=$_POST['password'];
        header("Location: login.php");
        return;}
      }

      ?>
    </div>
  </body>
</html>
