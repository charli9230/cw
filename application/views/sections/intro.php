<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


<div id="scroll-button-intro" class="scroll-button-intro">
    <h1>COTWAY</h1>
    <a href="#about"><span></span><span></span><span></span>Scroll</a>
</div>





<script>
    $(function() {
        $('a[href*=#]').on('click', function(e) {
            e.preventDefault();
            $('html, body').animate({ scrollTop: $($(this).attr('href')).offset().top}, 500, 'linear');
        });
    });
</script>

