<?php 
include_once 'includes/header.php';
include_once 'includes/nav.php';
include 'app/getsliders.php';
include 'app/getproducts.php';

$sliders = getSliders();
$products = getProducts();

$partners = get5Partners();
$operators = get5Operators();

?>

<style>
  
</style>

<div class="container-fluid homeslider"   >
  <div id='sliderrr' class="owl-carousel owl-theme">
    <?php 
      foreach ($sliders as $s){
        echo '<div class="row h-75" style="padding-bottom: 10%;">
        <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
            <div class="typed">
              '.$s['title'].'
            </div>
            <br>
            <div class="subtitle"  >
            '.$s['subtitle'].'
                <br>
                <br>
                <a class="learnmore">
                    LEARN MORE
                </a>
            </div>
            
        </div>
    </div>';
      }
    ?>
  </div> 
  
    <div class="row" >
        <div class="col col-lg-12 col-md-12 col-xs-12 col-sm-6 text-center subimage" >
          WE HOLD OURSELVES RESPONSIBLE FOR THE SATISFACTION OF OUR <br>
          CUSTOMERS AND PARTNERS, BY HONORING OUR COMMITMENTS, <Br> PROVIDING 
          RESULTS, AND STRIVING FOR THE HIGHEST QUALITY. 
        </div>
    </div>
</div>
<div class="container-fluid  slid_section"  style="background-color:transparent; !important">
    <div class="carousel slide w-100 carous_div"  >
        <span class="section_title">
            PRODUCTS
        </span>
      <div class="section-space-padding"></div>
      <div class="owl-carousel owl-theme" id="products">
        <!--  -->
        <?php 
          foreach ($products as $p){
            echo '<div>
                      <img src="./CMS/public/products/'.$p['image'].'"  class="img-fluid img_prod" style="padding-bottom: 5%;" />
                      <div class="car_title">
                        '.$p['title'].'
                      </div>
                      <div class="car_body">
                      '.implode(' ', array_slice(explode(' ', $p['subtitle']), 0, 18)).'...
                      </div>
                </div>';
          }
        ?>

        <!--  -->
      </div>
      <!-- <a class=' learnmore learn_products' >
            LEARN MORE
        </a> -->
    </div>
    
  
</div>
<div  data-aos="slide-up">
<div class="clients d-flex justify-content-center">
  <fieldset >
    <div class="switch-toggle switch-candy">
      <input id="week" class="switchh"  name="view" type="radio" checked>
      <label for="week" onclick="">PARTNERS</label>
      <input id="day" class="switchh"  name="view" type="radio">
      <label for="day" onclick="">OPERATORS</label>
      <a></a>
    </div>
  </fieldset>
</div>


<div class="operators-table par-table" >
  
    <div class="wrapper table " width="100%" cellpadding="0" cellspacing="5" >
      <table >
        <!-- <tr style="height: 120px;"> -->
      <?php 
        function isMobile() {
          return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
        }
        $count=0;
        $divider=0;
        if(isMobile()){
          $divider =2;
        }
        else {
          $divider =5;
        }
        foreach($partners as $p) {
          if (fmod($count, $divider)==0){
            echo "</tr><tr >";
          }
          echo ' <td class="container" style=" width:20%; ">
                
                  <img src="./CMS/public/partners/'.$p['image'].'"  class="img-fluid" title="'.$p['name'].'" />
                  
                </td>';
        $count++;

        }
      ?>
      </tr>
      </table>
      
    </div>
    <div style="margin-top: 0%; text-align:center;" > 
        <a class="viewall" href="partners.php">
          VIEW ALL
        </a>
    </div>
  </div>
  <div class="operators-table op-table" >
    <div class="wrapper table " width="100%" cellpadding="0" cellspacing="5" >
      <table >
        <!-- <tr style="height: 120px;"> -->
      <?php 

        $count=0;
        $divider=0;
        if(isMobile()){
          $divider =2;
        }
        else {
          $divider =5;
        }
        foreach($operators as $o) {
          if (fmod($count, $divider)==0){
            echo "</tr><tr >";
          }
          echo ' <td class="container" style=" width:20%; ">
                
                  <img src="./CMS/public/operators/'.$o['image'].'"  class="img-fluid" title="'.$o['name'].'" />
                  
                </td>';
        $count++;

        }
      ?>
      </tr>
      </table>
      
    </div>
    <div style="margin-top: 0%; text-align:center;" > 
        <a class="viewall" href="partners.php">
          VIEW ALL
        </a>
    </div>
  </div>
  
</div>


</body>
<script>
    $(document).ready(function() {
      $('.switchh').click(function() {
        // alert("d")
        $('.op-table, .par-table').toggle( "fast", function() {
    // Animation complete.
  });
      });
    });
  </script>
<script src="https://unpkg.com/aos@2.3.0/dist/aos.js"></script>
<script>
  
   $(window).on('load', function() {
        AOS.init();
    });
    window.addEventListener('load', AOS.refresh)
</script>



<?php  include 'includes/footer.php'; ?>