<?php
include_once 'includes/header.php';
include_once 'includes/nav.php';
include 'app/getproducts.php';
$products = getProducts();
?>

<div class="container-fluid pro-slider">
    <div class="row h-75">
        <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6 my-auto">
            <div class="pro_title">
                PRODUCTS
            </div>
            <br>
            <div class="pro_subtitle">
                With all the information available to users nowadays, it is important to create attractive, branded, and up-to-date content.
                Media World, runs its own content production department,
                creating new services and portals while tailoring everything in order to fill all market needs and fulfilling user interests
            </div>
        </div>
    </div>
</div>

<div  style="background-color: white;">
    <?php 
        foreach($products as $p){
            echo '<div class="container-fluid pro_section ">
            <div class="row pro-jumbo">
                <div class="col col-lg-1 col-md-1 col-xs-3" >
                    <img src="./CMS/public/products/'.$p['image'].'"  class="img_part"  >
                </div>
                <div class="col col-lg-11 col-md-11 col-xs-9">
                    <p class="cart-head"> '.$p['title'].'</p>
                    <a class="float-right arrow arr_'.$p['id'].'"  id="'.$p['id'].'" >
                        <img class="ims" src="img/arrow-down.png">
                    </a>
                    
                    <div class="cart-body cart-body-mobile"  id="mobile_'.$p['id'].'"  >
                        '.implode(' ', array_slice(explode(' ', $p['subtitle']), 0, 26)).'
                        <span class="moretext" id="moretext_'.$p['id'].'">
                        '.implode(' ', array_slice(explode(' ', $p['subtitle']), 26, strlen($p['subtitle']))).'
                        </span>
                    </div>
                </div>
                
            </div>
        </div>
        <script>
       
       $(".arr_'.$p['id'].'").click(function() {
           if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
               var id = '.$p['id'].';
               $("#mobile_"+id).slideToggle();
               $("#moretext_"+id).slideToggle();
               var src = $(".arr_"+id).html();
   
               if (src.indexOf("arrow-down") >= 0){
                   $("#"+id).html(\' <img class="ims" src="img/arrow-up.png">\');
               }
               else {
                   $("#"+id).html(\' <img class="ims" src="img/arrow-down.png">\');
               }
   
           }
           else {
               var id = '.$p['id'].';
               $("#moretext_"+id).slideToggle();
               var src = $("#"+id).html();
               if (src.indexOf("arrow-down") >= 0){
                   $("#"+id).html(\' <img class="ims" src="img/arrow-up.png">\');
               }
               else {
                   $("#"+id).html(\' <img class="ims" src="img/arrow-down.png">\');
               }
           }
         
          
       });
       </script>
        ';
        }
    ?>


</div>


    <!-- <script>
        $('.arrow').click(function() {
            var id = $(this).attr("id");
            var src = $('.arrow').html();
        //  alert(src);
            $('#moretext_'+id).animate({height: "400px"});
            // $('#moretext_'+id).attr('class', 'cart-body_');
     
            if (src.indexOf("arrow-down") >= 0){
                $('#'+id).html(' <img class="ims" src="img/arrow-up.png">');
                $('#moretext_'+id).animate({height: "100px"});
            }
            else {
                $('#'+id).html(' <img class="ims" src="img/arrow-down.png">');
            }
        });

        $(function() {
        var top=0;
            $("button:first").on("click", function() {
            top=top+50;
                $("#target").css("height", "+=50px");
            $("p").css("margin-top", top);
            });

            $("button:last").on("click", function() {
            top=top-50;
                $("#target").css("height", "-=50px");
            $("p").css("margin-top", top);
            });
        });
    </script> -->
<?php include 'includes/footer.php'; ?>
<!-- <script>
       
       $('.arrow').click(function() {
           if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
               var id = $(this).attr("id");
            //    var mobile = $("")
               $('#mobile_'+id).slideToggle();
               $('#moretext_'+id).slideToggle();
               var src = $('.arr_'+id).html();
   
               if (src.indexOf("arrow-down") >= 0){
                   $('#'+id).html(' <img class="ims" src="img/arrow-up.png">');
               }
               else {
                   $('#'+id).html(' <img class="ims" src="img/arrow-down.png">');
               }
   
           }
           else {
               var id = $(this).attr("id");
               $('#moretext_'+id).slideToggle();
               var src = $('#'+id).html();
               if (src.indexOf("arrow-down") >= 0){
                   $('#'+id).html(' <img class="ims" src="img/arrow-up.png">');
               }
               else {
                   alert("dd")
                   $('#'+id).html(' <img class="ims" src="img/arrow-down.png">');
               }
           }
           id="";
          
       });
       </script> -->