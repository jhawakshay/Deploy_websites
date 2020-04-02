<?php include("../../path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/topics.php"); 
?>

<!DOCTYPE html>
<html>
  <head>
    <title> Admin - Manage Topics</title>
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
                    <h2 class="page-title"> Manage Topics</h2>

                    <table>
                      <thead>
                        <th>SN</th>
                        <th>Name</th>
                        <th colspan="2">Action</th>
                      </thead>
                      <tbody>
                           
                           <?php foreach ($topics as $key => $topic): ?>
                             <tr>
                                 <td><?php echo $key + 1; ?></td>
                                 <td><?php echo $topic['name']; ?></td>
                                 <td><a href="edit.php?id=<?php echo $topic['id']; ?>" class="edit">edit</a></td>
                                 <td><a href="index.php?del_id=<?php echo $topic['id']; ?>" class="delete">delete</a></td>
                             </tr>
                           <?php endforeach; ?>
                      </tbody>
                    </table>
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