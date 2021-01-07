<?php 
include_once 'includes/header.php';
include_once 'includes/nav.php';

?>

<style>
  
</style>

<div class="container-fluid homeslider"   >
  <div id='sliderrr' class="owl-carousel owl-theme">
  <div class="row h-75" style="padding-bottom: 10%;">
        <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
            <div class="typed">
            
                WE ARE <br>
                THE MASTER <br>
                AGGREGATOR 
            </div>
            <br>
            <div class="subtitle"  >
                for Zain Iraq and Jawwal Palestine with connections with other mobile carriers in the MENA region.
                <br>
                <br>
                <a class='learnmore'>
                    LEARN MORE
                </a>
            </div>
            
        </div>
    </div>
    <div class="row h-75" style="padding-bottom: 10%;">
        <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
            <div class="typed">
            
                WE ARE <br>
                THE MASTER <br>
                AGGREGATOR 
            </div>
            <br>
            <div class="subtitle"  >
                for Zain Iraq and Jawwal Palestine with connections with other mobile carriers in the MENA region.
                <br>
                <br>
                <a class='learnmore'>
                    LEARN MORE
                </a>
            </div>
            
        </div>
    </div>

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
        <div>
              <img src="./img/vas.png"  class="img-fluid img_prod" style="padding-bottom: 5%;" />
              <div class="car_title">
                vas 
              </div>
              <div class="car_body">
              We are experts in the VAS industry 
              and we proudly provide comprehensive....
              </div>
        </div>
        <div >
              <img src="./img/dcb.png" class="img-fluid img_prod" style="padding-bottom: 5%;" />
              <div class="car_title">
                dcb 
              </div>
              <div class="car_body">
              Direct carrier billing (“DCB”) is an online payment method. It allows users to make purchases.....
              </div>
        </div>
        <div >
              <img src="./img/megapromo.png"class="img-fluid img_prod" style="padding-bottom: 5%;" />
              <div class="car_title">
                mega promo 
              </div>
              <div class="car_body">
              Mega Promo provides personalized and relevant rewards to Operators’ customers every....
              </div>
        </div>
        <div>
              <img src="./img/gamification.png" class="img-fluid img_prod" style="padding-bottom: 5%;" />
              <div class="car_title">
                gamification 
              </div>
              <div class="car_body">
                Direct carrier billing (“DCB”) is an online payment method. It allows users to make purchases.....
              </div>
        </div>
        <div>
              <img src="./img/misscall.png" class="img-fluid img_prod" style="padding-bottom: 5%;" />
              <div class="car_title">
              Missed-call Notification
              </div>
              <div class="car_body">
                Missed-call notification service offers the operator eligible prepaid subscribers the ability to…
              </div>
        </div>
        <div>
          <img src="./img/rbt.png" class="img-fluid img_prod" style="padding-bottom: 5%;" />
          <div class="car_title">
            digital rbt
          </div>
          <div class="car_body">
          Internet-age consumers expect… Modern app-based experiences…
          </div>
        </div>
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
      <input id="week" name="view" type="radio" checked>
      <label for="week" onclick="">PARTNERS</label>
      <input id="day" name="view" type="radio">
      <label for="day" onclick="">OPERATORS</label>
      <a></a>
    </div>
  </fieldset>
</div>


<div class="operators-table" >
  <!-- <div class="container-fluid">
      <div class="row" style="border: 1px solid black; border-radius: 10px !important;">
      <div class="col" style="margin-left:8%;">1</div>
        <div class="col"  style="margin-left:8%;">2</div>
        <div class="col"  style="margin-left:8%;">3</div>
        <div class="col"  style="margin-left:8%;">4</div>
        <div class="col"  style="margin-left:8%;">5</div>
      </div>
  </div> -->
  <div class="wrapper table" >
    <table >
      <tr>
        <td >
          <img src="./img/free fire.png"  class="img-fluid" />
        </td>
        <td> <img src="./img/free fire.png"  class="img-fluid"/>
      </td>
        <td> <img src="./img/free fire.png"   class="img-fluid"/>
      </td>
        <td> <img src="./img/free fire.png"  class="img-fluid"/>
      </td>
        <td> <img src="./img/free fire.png"   class="img-fluid"/>
      </td>
      </tr>
    </table>
    
  </div>
  <div style="margin-top: 5%; text-align:center;" > 
        <a class="viewall" href="partners.php">
          VIEW ALL
        </a>
    </div>
</div>
</div>


</body>
<script src="https://unpkg.com/aos@2.3.0/dist/aos.js"></script>
<script>
   $(window).on('load', function() {
        AOS.init();
    });
    window.addEventListener('load', AOS.refresh)
</script>



<?php  include 'includes/footer.php'; ?>