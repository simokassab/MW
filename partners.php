<?php
include_once 'includes/header.php';
include_once 'includes/nav.php';
include 'app/getpartners.php';
include 'app/getoperators.php';

$partners = getPartners();
$operators = getOperators();
?>
 <style>
   td{


}
    td.container > div {
    width: 100%;
    height: 100%;
    overflow:hidden;
    }
    td.container {
        height: 20px;
        text-align:center; 
        vertical-align: middle;
        margin: auto;
        padding: auto;
    }
  </style>
<div  data-aos="slide-up">
  <div class="clients d-flex justify-content-center">
    <fieldset >
      <div class="switch-toggle switch-candy">
        <input id="week" class="switchh" name="view" type="radio" checked>
        <label for="week" onclick="">PARTNERS</label>
        <input id="day" class="switchh" name="view" type="radio">
        <label for="day" onclick="">OPERATORS</label>
        <a></a>
      </div>
    </fieldset>
  </div>


  <div class="operators-table " >
  
    <div class="wrapper table par-table" width="100%" cellpadding="0" cellspacing="5" >
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
  </div>
  <div class="operators-table " >
  
  <div class="wrapper table op-table" width="100%" cellpadding="0" cellspacing="5" >
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
</div>
</div>
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
<?php include 'includes/footer.php'; ?>

