<?php include("path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/posts.php"); 

if(isset($_GET['id'])) {
  $post = selectOne('posts', ['id' => $_GET['id']]);
}

$topics = selectAll('topics');
$posts = selectAll('posts', ['published' =>1]);
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

    <!---- Page Wrapper ----->
    <div class="page-wrapper">

    <!---- Content ------>
    <div class="content clearfix">
   
    <!---- Main Content Wrapper------>
    <div class="main-content-wrapper">
    <div class="main-content single">
       <h1 class="post-title"> <?php echo $post['title']; ?></h1>

       <div class="post-content">
          <?php echo html_entity_decode($post['body']); ?>
       </div>
    
    </div>
  </div>
        <!---- // Main Content ------>
    
    <!-----Sidebar ------>
    <div class="sidebar single">
           
           <div class="section popular">
             <h2 class="section-title">Popular</h2>

                <?php foreach ($posts as $p): ?>
                  <div class="post clearfix">
                      <img src="<?php echo BASE_URL . '/assets/images/' . $p['image']; ?>" alt="">
                        <a href="" class="title">
                          <h4> <?php echo $p['title'] ?></h4>
                        </a>
                  </div>
                <?php endforeach; ?> 
          </div>

 
      <div class="section topics">
          <h2 class="section-title">Topics</h2>
          <ul>
            <?php foreach ($topics as $topic): ?>
              <li><a href="<?php echo BASE_URL . '/index.php?t_id=' . $topic['id'] . '&name=' . $topic['name'] ?>"> <?php echo $topic['name']; ?></a></li>
            <?php endforeach; ?>

          </ul>
       
      </div>
    </div>
    </div>
  </div>

    <!---- //Page Wrapper ------>
   <!-----Footer------------>
<?php include(ROOT_PATH. "/app/includes/footer.php"); ?>

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