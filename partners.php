<?php
include_once 'includes/header.php';
include_once 'includes/nav.php';
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
    <div class="container-fluid pro_section ">
        <div class="row pro-jumbo">
            <div class="col col-lg-1 col-md-1 col-xs-3" >
                <img src="img/vas.png"  class="img_part"  >
            </div>
            <div class="col col-lg-11 col-md-11 col-xs-9">
                <p class="cart-head">VAS</p>
                <a class="float-right arrow"  id="1" >
                    <img class="ims" src="img/arrow-down.png">
                </a>
            </div>
            <div class="bodyy">
            <p class="cart-body cart-body-mobile"  id="mobile_1"  >
                We are experts in the VAS industry and we proudly provide comprehensive management and present multiple KPIs to enhance and maintain the VAS Sector;
                taking into 
                <span class="moretext" id="moretext_1">
                consideration Subscribers’ satisfaction and loyalty as well as Operators’ objectives and income.
                    We do manage services through several models, mainly through our own platform – tailored for each operator’s 
                    needs and requirements, taking into consideration their rules, procedures and policies.
                    With a dedicated and passionate team of account managers, business developers, research and development, 
                    software engineers, mobile app developers, and digital marketers,
                    Media World was able to stand out.
                </span>
            </p>
            </div>
        </div>
    </div>

    <div class="container-fluid pro_section ">
        <div class="row pro-jumbo">
            <div class="col col-lg-1 col-md-1 col-xs-3" >
                <img src="img/dcb.png"  class="img_part"  >
            </div>
            <div class="col col-lg-11 col-md-11 col-xs-9">
                <p class="cart-head">DCB</p>
                <a class="float-right arrow"  id="2" >
                    <img class="ims" src="img/arrow-down.png">
                </a>
            </div>
            <div class="bodyy">
            <p class="cart-body cart-body-mobile" id="mobile_2"  >
                We are experts in the VAS industry and we proudly provide comprehensive management and present multiple KPIs to enhance and maintain the VAS Sector;
                taking into 
                <span class="moretext" id="moretext_2">
                consideration Subscribers’ satisfaction and loyalty as well as Operators’ objectives and income.
                    We do manage services through several models, mainly through our own platform – tailored for each operator’s 
                    needs and requirements, taking into consideration their rules, procedures and policies.
                    With a dedicated and passionate team of account managers, business developers, research and development, 
                    software engineers, mobile app developers, and digital marketers,
                    Media World was able to stand out.
                </span>
            </p>
            </div>
        </div>
    </div>

</div>

    <script>
       
    $('.arrow').click(function() {
        if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
            var id = $(this).attr("id");
            var mobile = $("")
            $('#mobile_'+id).slideToggle();
            $('#moretext_'+id).slideToggle();
            var src = $('.arrow').html();

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
            var src = $('.arrow').html();
            if (src.indexOf("arrow-down") >= 0){
                $('#'+id).html(' <img class="ims" src="img/arrow-up.png">');
            }
            else {
                $('#'+id).html(' <img class="ims" src="img/arrow-down.png">');
            }
        }
       
    });
    </script>
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