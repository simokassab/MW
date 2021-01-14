<?php 
include_once 'includes/header.php';
include_once 'includes/nav.php';

?>

<div class="container-fluid careersslider">
    <div class="row h-75">
        <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
            <div class="typed">
            
               CAREERS
            </div>
            <br>
            <div class="subtitle">
              Media world  is always looking for highly qualified, motivated people to join the family
              <br>
            </div>
            
        </div>
    </div>
</div>

<!-- Slider Carousel -->
<div class="careers_section">
  <?php 
    if(isset($_GET['m'])){
      echo "<span style='color:green'>Your Message has been sent</span>";
    }
  ?>
    <p class="careers_title" id="careers_title">
      contact details
    </p>
    <p class="careers_subtitle">
    Indicates required fields
    </p>
    <div class="section-space-padding"></div>

    <div >
      <form class="form" action="./app/sendcareers.php" method="post" enctype="multipart/form-data">
        <div class="row">
          <div class=" col-lg-6 col-md-6 col-xs-12">
            <div class="row">
              <div class=" col-lg-12 col-md-12 col-xs-12">
                <div class="form-group">
                  <label for="name">name</label>
                  <input type="text" class="form-control" id="name" name="name" required>
                </div>
              </div>
              <div class=" col-lg-12 col-md-12 col-xs-12">
                <div class="form-group">
                  <label for="email">email address</label>
                  <input type="email" name="email" class="form-control" id="email" required >
                </div>
              </div>
              <div class=" col-lg-12 col-md-12 col-xs-12">
                <div class="form-group">
                <label for="filee">upload your cv</label>
                  <div class="">
                    <input type="file" name="cv" class="input-file" accept=".pdf,.doc,.docx" required>
                    <div class="input-group mb-3">
                    
                      <input type="text" class="form-control filee" required    name="filee"  >
                      <div class="input-group-append">
                        <button class="btn upload-field" type="button" id="button-addon2">UPLOAD</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class=" col-lg-6 col-md-6 col-xs-12 ">
            <div class="form-group message">
              <label for="message">Why you would like to join us*</label>
              <textarea class="form-control textarea mb-3"  
              name="message"  id="message" cols="10" rows="15"  ></textarea>
              <button type="submit" name="submit"  class="float-right submit_career">SUBMIT</button>
            </div>
          </div>
        </div>

      </form>
    </div>
</div>
<div class="section-space-padding1"></div>


<?php include 'includes/footer.php'; ?>