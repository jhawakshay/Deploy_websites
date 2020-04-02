<?php include("path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/posts.php"); 
?>

<!DOCTYPE html>
<html>
<head>
        <title> Data Science at Core</title>
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Candal&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lora&display=swap" rel="stylesheet">

        <title><?php echo $post['title']; ?> |  Data Science at Core</title>
</head>
<body>

<?php include(ROOT_PATH. "/app/includes/header.php"); ?>
        
     <!---- Main Content ------>
    <div class="main-content">
  
    		
    		<p> <img src="<?php echo BASE_URL . "/assets/images/Passport_size.jpg"; ?>" align = "left" alt="" class="about-me"> My Data Science Journey has been a roller coaster ride and still is not a smooth one. Fresh out of college, I was working for an Analytics firm with almost zero knowledge about Data Science & Analytics but if I have to look back I am fortunate enough to be in this profession. It taught me the most important lesson of life is to always be on your toes and keep learning. I am a curious person and like to learn each day.
    			
   
   </div>




    <!-----//Footer------------>
    <!---- JQuery ----->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!----- Slick ----->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js">
    </script>
    
    <!----- Font Awesome Java script file ----->
    <script src="https://kit.fontawesome.com/e0321439b8.js" crossorigin="anonymous"></script>

    <!---- Custom Script ----->
    <script src="assets/js/scripts.js"></script>

 </body>
</html>