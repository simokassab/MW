<?php 
include_once 'includes/header.php';
include_once 'includes/nav.php';
include 'app/getnews.php';


$news = getNews();
?>

<div class="container-fluid newsslider">
    <div class="row h-75">
        <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
            <div class="typed">
            
               NEWS
            </div>
            <br>
            <div class="subtitle">
            Be the first one to read our company announcements and press releases.
                <br>
            </div>
            
        </div>
    </div>
</div>

<!-- Slider Carousel -->
<div class="container-fluid  news_section">
      
  <div class="row mx-auto my-auto">
    <div  class="w-100 findus_div">
      <div class="section-space-padding"></div>
      <div class="row">
      <?php 
          foreach ($news as $n){
            $date = strtotime($n['date']);
            $newformat = date('M d Y',$date);
           
            echo '<div class=" col-lg-6 col-md-6 col-xs-12 news_row ">
                    <div class="containerr">
                      <img class="img-fluid news_img" src="./CMS/public/news/'.$n['image'].'" >
                      <div class="top-left"> '.$newformat.'</div>
                    </div>
                    <p class="news_title">
                    '.$n['title'].'
                    </p>
                    <p class="news_subtitle">
                    '.implode(' ', array_slice(explode(' ', $n['subtitle']), 0, 22)).'...
                    </p>
                    <a href="./new.php?id='.$n['id'].'" class="news_readmore">read more <i class="fas fa-arrow-right"></i></a>
                </div>';


          }
        ?>
      </div>
    </div>
  </div>
  
</div>

<div class="section-space-padding"></div>

<?php include 'includes/footer.php'; ?>