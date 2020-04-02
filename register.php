<?php include("path.php") ?>
<?php include(ROOT_PATH . "/app/controllers/users.php"); 
guestsOnly();
?>

<!DOCTYPE html>
<html>
<head>
<title> Data Science at Core</title>
<link rel="stylesheet" type="text/css" href="assets/css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Candal&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lora&display=swap" rel="stylesheet">

<title>Register</title>
</head>
<body>

<?php include(ROOT_PATH. "/app/includes/header.php"); ?>

<!------------ Author Content --------------->
<div class="auth-content">
  
  <form action="register.php " method="post">
    <h2 class="form-title"> Register</h2>

<?php include(ROOT_PATH. "/app/helpers/formErrors.php"); ?> 

    <div>
      <label>Username</label>
      <input type="text" name="username" value ="<?php echo $username; ?>" class="text-input">
    </div>

    <div>
      <label>Email</label>
      <input type="email" name="email" value ="<?php echo $email; ?>" class="text-input">
    </div>

    <div>
      <label>Password</label>
      <input type="pasword" name="password" value ="<?php echo $password; ?>" class="text-input">
    </div>

    <div>
      <label>Password Confirmation</label>
      <input type="password" name="passwordConf" value ="<?php echo $passwordConf; ?>" class="text-input">
    </div>

    <div>
      <button type="submit" name="register-btn" class="btn btn-big">Register</button>
    </div>
    <p> Or <a href="<?php echo BASE_URL, '/login.php' ?>">Sign In</a></p>
  </form>
</div>



    <!-----//Footer------------>
    <!---- JQuery ----->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    
    <!----- Font Awesome Java script file ----->
    <script src="https://kit.fontawesome.com/e0321439b8.js" crossorigin="anonymous"></script>

    <!---- Custom Script ----->
    <script src="assets/js/scripts.js"></script>

</body>
</html>