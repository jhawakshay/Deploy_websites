<?php include("path.php"); ?>

<?php include(ROOT_PATH . "/app/controllers/topics.php"); 


$posts = array();
$postsTitle = "Recent Posts";

if(isset($_GET['t_id'])){
  $posts = getPostsByTopicId($_GET['t_id']);
  $postsTitle = "You searched for posts under '" .  $_GET['name'] . "'";

}  else if (isset($_POST['search-term'])){
  $postsTitle = "You searched for '" .  $_POST['search-term'] . "'";
  $posts = searchPosts($_POST['search-term']);
} else {
  $posts = selectAll('posts', ['published' =>1]);
}

?>

<!DOCTYPE html>
<html>
<head>
<title> Data Science at Core</title>
<link rel="stylesheet" type="text/css" href="assets/css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Candal&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lora&display=swap" rel="stylesheet">

<title>Blog</title>
</head>
<body>

<!--------   header part ------->
<?php include(ROOT_PATH . "/app/includes/header.php"); ?>

    <!---- Page Wrapper ----->
    <div class="page-wrapper">
    <!-----Slider ------->
    <div class="post-slider">
    <h1 class="slider-title">Trending Posts</h1>
    <i class="fas fa-chevron-circle-right next"></i>
            <i class="fas fa-chevron-circle-left prev"></i>

    <div class="post-wrapper">
      <?php foreach ($posts as $post): ?>
                <div class="post">
                   <img src="<?php echo BASE_URL . "/assets/images/" . $post['image']; ?>" alt="", class="slider-image">
                   <div class="post-info">
                     <h4><a href="single.php?id=<?php echo $post['id']; ?>"><?php echo $post['title']; ?></a></h4>
                     <i class="far fa-calendar"> &ensp; <?php echo date('F j, Y', strtotime($post['created_at'])); ?> </i>                  
                   </div>
                </div>
      <?php endforeach; ?>
     </div>
  </div>
    <!---- //Post Slider ----->

    <!---- Content ------>
    <div class="content clearfix">
   
    <!---- Main Content ------>
    <div class="main-content">
    <h1 class="recent-post-title"><?php echo $postsTitle ?></h1>

    <?php foreach ($posts as $post): ?>
      <div class="post clearfix">
        <img src="<?php echo BASE_URL . "/assets/images/" . $post['image']; ?>" alt="", class="post-image">
        <div class="post-preview">
              <h3><a href="single.php?id=<?php echo $post['id']; ?>"><?php echo $post['title']; ?></a></h3>
              <i class="far fa-calendar">&ensp; <?php echo date('F j, Y', strtotime($post['created_at'])); ?></i>
              <p class="preview-text">
                  <?php echo html_entity_decode(substr($post['body'],0, 150) . '...'); ?>
              </p>
              <a href="single.php?id=<?php echo $post['id']; ?>"  class="btn read-more">Read More</a>
        </div>    
      </div>
    <?php endforeach; ?>
    
   
 </div>
        <!---- // Main Content ------>

    <div class="sidebar">
           
             <div class="section search">
              <h2 class="section-title">Meet your Curosity</h2>
               <form action="index.php" method="post">
                <input type="text" name="search-term" class="text-input" placeholder="Search...">
               </form>
             </div>
          
             <div class="section topics">
          <h2 class="section-title">Topics</h2>
          <ul>
            <?php foreach ($topics as $key => $topic): ?>
              <li><a href="<?php echo BASE_URL . '/index.php?t_id=' . $topic['id'] . '&name=' . $topic['name'] ?>"> <?php echo $topic['name']; ?></a></li>
            <?php endforeach; ?>
          </ul>
       
        </div>
      </div>

    </div>

   </div>
    <!---- //Page Wrapper ------>
   <!-----Footer------------>

<?php include(ROOT_PATH . "/app/includes/footer.php"); ?>

    <!-----//Footer------------>
    <!---- JQuery ----->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!----- Slick ----->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    
    <!----- Font Awesome Java script file ----->
    <script src="https://kit.fontawesome.com/e0321439b8.js" crossorigin="anonymous"></script>

    <!---- Custom Script ----->
    <script src="assets/js/scripts.js"></script>

</body>
</html>