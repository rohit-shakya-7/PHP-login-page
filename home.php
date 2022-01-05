<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
  <?php 
  session_start();
  if(!(isset($_SESSION['loggedin']) && $_SESSION['loggedin'])) {
    $_SESSION['alert'] = "Please login to access this page.";
    header('location:loginForm.php');
    die();
  }
  $user = $_SESSION['current_user'];
  echo $user->name;

  ?>

  <a href="logout.php">Logout</a>

</body>
</html>