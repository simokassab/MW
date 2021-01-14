<?php 
include_once 'includes/header.php';
include_once 'includes/nav.php';
include 'app/getnew.php';

if(isset($_GET['id'])){
  $new = getNewById($_GET['id']);
}
// $new = 
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
        <div class="col col-lg-12 col-md-12 col-xs-12">
        <a onclick="history.back();" href="#" class="news_readmore" ><i class="fas fa-arrow-left" ></i> &nbsp;back </a><br>
          <?php 
            foreach ($new as $n){
              echo '<img class="img-fluid news_img" src="./CMS/public/news/'.$n['image'].'"  style="padding-top: 5% !important; padding-bottom: 3% !important;"/>
              <p class="news_title">
              '.$n['title'].'
  
              </p>
              <p class="news_subtitle">
              '.$n['subtitle'].'<br>
   
              </p>';
            }
          ?>
           
        </div>
      </div>
      <div class="section-space-padding"></div>
      <!-- <div class="row">
      <div class="col col-lg-6 col-md-12 col-xs-12">
          <p class="findus_title">Jordan office</p>
          <p class="findus_subtitle">Amman, Souifiya, Zahran Street, Jawharat Al Souifiya Bldg, 4th floor, Jordan</p>
          <div class="row">
            <div class="col col-lg-1 col-xs-6 col-md-2">
              <img src="./img/rbt.png" class="img-fluid" style="float: left; width: 70%;" />
            </div>
            <div class="col col-lg-11 col-xs-6 col-md-10">
              <p class="findus_phone" style="float: left; margin-left: -5%" >+962 6 5868361 </p>
            </div>
          </div>
        </div>
        <div class="col col-lg-6 col-md-12 col-xs-12">
          <p class="findus_title">Dubai Office</p>
          <p class="findus_subtitle">GV6, DIFC, FIRST FLOOR </p>
          <div class="row">
            <div class="col col-lg-1 col-xs-6 col-md-2">
              <img src="./img/rbt.png" class="img-fluid" style="float: left; width: 70%;" />
            </div>
            <div class="col col-lg-11 col-xs-6 col-md-10">
              <p class="findus_phone" style="float: left; margin-left: -5%" >+971-54-439-8554 </p>
            </div>
          </div>
        </div>
      </div> -->
    </div>
  </div>
  
</div>
<div class="section-space-padding"></div><br><br>
<div class="section-space-padding"></div>


<?php include 'includes/footer.php'; ?>