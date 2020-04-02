<?php include("../../path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/topics.php");
 ?>

<!DOCTYPE html>
<html>

  <head>
    <title> Admin - Edit Topics</title>
        <link rel="stylesheet" type="text/css" href="../../assets/css/style.css">
<!---------- admin style ------------>
        <link rel="stylesheet" type="text/css" href="../../assets/css/admin.css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Candal&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lora&display=swap" rel="stylesheet">

  </head>


<body>
    <header>
      <a class="logo" href="<?php echo BASE_URL . '/index.php'; ?>">
      <h1 class="logo-text"> Data Science at Core</h1>
        </a>
    </header>

    <!---- Page Wrapper ----->
            <div class="admin-wrapper">

              <?php include(ROOT_PATH . "/app/includes/adminSidebar.php"); ?>

        <!------ Admin Content ----->
                <div class="admin-content">
                  <div class="button-group">
                    <a href="create.php" class="btn btn-big"> Add Topic</a>
                    <a href="index.php" class="btn btn-big"> Manage Topics</a>
                </div>
                   
                  <div class="content">
                    <h2 class="page-title"> Edit Topic</h2>
                     <?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?>
                      
                      <form action="edit.php" method="post">
                        <input type="hidden" name="id" value = "<?php echo $id; ?>">
                        <div>
                          <label>Name</label>
                          <input type="text" name="name" value = "<?php echo $name; ?>"  class="text-input">
                        </div>

                        <div>
                          <label>Description</label>
                          <textarea name="description" id="body"><?php echo $description; ?> </textarea>>
                        </div>

                        <div> 
                          <button type="submit" name = "update-topic" class="btn btn-big"> Update Topic</button>
                        </div>
                        
                      </form>

                  </div>

                </div>
        <!------// Admin Content ----->
            </div>
    <!---- //Page Wrapper ------>
   

    <!-----//Footer------------>
    <!---- JQuery ----->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    
    <!----- CKEditor --------->
    <script src="https://cdn.ckeditor.com/ckeditor5/15.0.0/classic/ckeditor.js"></script>
    <!----- Font Awesome Java script file ----->
    <script src="https://kit.fontawesome.com/e0321439b8.js" crossorigin="anonymous"></script>

    <!---- Custom Script ----->
    <script src="../../assets/js/scripts.js"></script>

</body>
</html>