<?php include("../../path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/posts.php"); 
?> 
<!DOCTYPE html>
<html>

  <head>
    <title> Admin - Edit Post</title>
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
                    <a href="create.php" class="btn btn-big"> Add Posts</a>
                    <a href="index.php" class="btn btn-big"> Manage Posts</a>
                  </div>
                   
                  <div class="content">
                    <h2 class="page-title"> Edit Post</h2>
                      <?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?>
                      
                      <form action="edit.php" method="post" enctype="mutlipart/form-data">
                         <input type="hidden" name="id" value="<?php echo $id ?>" >
                        <div>
                          <label>Title</label>
                          <input type="text" name="title" value="<?php echo $title ?>" class="text-input">
                        </div>

                        <div>
                          <label>Body</label>
                          <textarea name="body" id="body"><?php echo $body ?></textarea>>
                        </div>
                        
                        <div>
                          <label>Image</label>
                          <input type="file" name="image" class="text-input">
                        </div>
                        
                        <div> 
                          <label>Topic</label>
                          <select name="topic_id" class="text-input">
                            <option value=""></option>

                            <?php foreach($topics as $key=> $topic): ?>
                                <?php if(!empty($topic_id) && $topic_id == $topic['id']): ?>
                                    <option selected value="<?php echo $topic['id'] ?>"><?php echo $topic['name'] ?></option>
                                <?php else:  ?>
                                    <option value="<?php echo $topic['id'] ?>"><?php echo $topic['name'] ?></option>
                                <?php endif; ?>                                 
                            <?php endforeach; ?>


                          </select>
                        </div>
                          <div>
                            <?php if (empty($published) && $published==0): ?>
                              <label>
                                <input type="checkbox" name="published">
                                Publish
                              </label>

                            <?php else: ?>
                              <label>
                                <input type="checkbox" name="published" checked>
                                Publish
                              </label>
                            <?php endif; ?>


                          </div>

                        <div> 
                          <button type="submit" name = "update-post" class="btn btn-big"> Update Post</button>
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
    <script src="http://cdn.ckeditor.com/4.6.2/standard-all/ckeditor.js"></script>
    <!----- Font Awesome Java script file ----->
    <script src="https://kit.fontawesome.com/e0321439b8.js" crossorigin="anonymous"></script>

    <!---- Custom Script ----->
    <script src="../../assets/js/scripts.js"></script>

</body>
</html>