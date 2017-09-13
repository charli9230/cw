<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


<!-- Full Page Image Background Carousel Header -->
<header id="myCarousel" class="carousel slide header">
    <div id="carousel-heading" class="overlay text-vertical-center">
        <h1>COTWAY</h1>
        <!-- <h3>your home, my home, our home.</h3>-->
        <br>
        <a href="#about" class="btn btn-dark btn-lg">Find Out More</a>
    </div>

    <section id="section07" class="demo">
        <h1>Scroll Down</h1>
        <a href="#about"><span></span><span></span><span></span>Scroll</a>
    </section>



    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for Slides -->
    <div class="carousel-inner">
        <div class="item active">
            <!-- Set the first background image using inline CSS below. -->
            <div class="fill" style="background-image:url(<?php echo base_url();?>assets/img/bg1.jpg);"></div>
            <div class="carousel-caption">
                <h2>COTWAY BUILDING</h2>
            </div>
        </div>
        <div class="item">
            <!-- Set the second background image using inline CSS below. -->
            <div class="fill" style="background-image:url(<?php echo base_url();?>assets/img/bg2.jpg);"></div>
            <div class="carousel-caption">
                <h2>COTWAY SEAVIEW</h2>
            </div>
        </div>

    </div>

    </a>

</header>

<script>
    $(function() {
        $('a[href*=#]').on('click', function(e) {
            e.preventDefault();
            $('html, body').animate({ scrollTop: $($(this).attr('href')).offset().top}, 500, 'linear');
        });
    });
</script>

