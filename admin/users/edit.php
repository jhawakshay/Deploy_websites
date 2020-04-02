<?php include("../../path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/users.php"); 
?>

<!DOCTYPE html>
<html>

  <head>
    <title> Admin - Edit User</title>
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
                    <a href="create.php" class="btn btn-big"> Add User</a>
                    <a href="index.php" class="btn btn-big"> Manage User</a>
                  </div>
                   
                  <div class="content">
                    <h2 class="page-title"> Edit  User</h2>
                      
                      <form action="create.html" method="post">

                        <div>
                           <label>Username</label>
                            <input type="text" name="username" class="text-input">
                        </div>

                         <div>
                           <label>Email</label>
                            <input type="email" name="email" class="text-input">
                          </div>

                            <div>
                              <label>Password</label>
                              <input type="pasword" name="password" class="text-input">
                            </div>

                               <div>
                                <label>Password Confirmation</label>
                                <input type="password" name="passwordConf" class="text-input">
                               </div>

                               <div> 
                          <label>Role</label>
                          <select name="topic" class="text-input">
                            <option value="Author"> Author</option>
                            <option value="Admin"> Admin</option>
                          </select>
                        </div>

                        <div> 
                          <button type="submit" class="btn btn-big"> Update User</button>
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