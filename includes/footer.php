<nav class="navbar navbar-expand-lg bottom" >
    <div class=" navbar-collapse " id="navbarText">
        <ul class="navbar-nav navbar-nav-foot  nav-fill w-75">
            <li class="nav-item ">
                <a class="nav-link  footlink" href="./about-us.php">WHO WE ARE</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link footlink" href="" > projects</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link footlink" href="./news.php">news</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link footlink" href="./partners.php" > partners & operators</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link footlink" href="./contact-us.php">contact us</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link footlink" href="./careers.php" > careers</a>
            </li>
        </ul>
    </div>
    </nav>

</body>

<script src="js/owl.carousel.min.js"></script>
<script src="https://unpkg.com/aos@2.3.0/dist/aos.js"></script>
<script>
    $(document).ready(function(){
        $("#sliderrr").owlCarousel({
            navigation : false, // Show next and prev buttons
            loop:true, 
            slideSpeed : 15000,
            paginationSpeed : 4100,
            autoHeight:true,
            dots: false,
            nav: false, 
            autoplay:true,
            autoplayTimeout:4000,
            items : 1, 
            itemsDesktop : false,
            itemsDesktopSmall : false,
            itemsTablet: false,
            itemsMobile : false
        });
        if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
            $("#products").owlCarousel({
            loop:true,   
            dots: true,
            dotsEach: true,
            // autoplay:true,
            autoplayTimeout:4000, 
            responsive:{
                0:{
                items: 1,
                stagePadding: 0,
                margin: 30,
                },
                767:{
                items: 3,
                stagePadding: 25,
                },
                1000:{
                items: 3,
                }
            }
            });
        }
        else {
            $("#products").owlCarousel({
            nav: true,
            loop:true,   
            dots: true,
            dotsEach: true,
            navText : ['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>'],
            autoplay:true,
            autoplayTimeout:4000, 
            responsive:{
                0:{
                items: 1,
                stagePadding: 0,
                margin: 30,
                },
                767:{
                items: 3,
                stagePadding: 25,
                },
                1000:{
                items: 3,
                }
            }
            });
        }
         
    });
   $(window).on('load', function() {
        AOS.init();
    });
    window.addEventListener('load', AOS.refresh)
</script>
</html>