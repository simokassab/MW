<?php
include_once 'includes/header.php';
include_once 'includes/nav.php';
?>

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
  <div class="container-fluid">
    <div class="row" style="border: 1px solid black; border-radius: 10px;">
        <div class="col-xs-12 col-md-3 col-lg-3" style="border-right: 1px solid black;">
            1 of 5
        </div>
        <div class="col-xs-12 col-md-3 col-lg-3" style="border-right: 1px solid black;">
            2 of 5
        </div>
        <div class="col-xs-12 col-md-3 col-lg-3" style="border-right: 1px solid black;">
            3 of 5
        </div>
        <div class="col-xs-12 col-md-3 col-lg-3" style="border-right: 1px solid black;">
            4 of 5
        </div>
        <div class="col-xs-12 col-md-3 col-lg-3" style="border-right: 1px solid black;">
            5 of 5
        </div>
        
    </div>
  </div>
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

   
<?php include 'includes/footer.php'; ?>