<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

    <!-- Footer -->
    <footer >
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <h4><strong>Church On The Way</strong>
                    </h4>
                    <p>6001, 7 Admiralty Way, 
                        <br>Summerstrand, Port Elizabeth, 6001</p>
                    <ul class="list-unstyled">
                        <li><i class="fa fa-phone fa-fw"></i> (27) 041 583 2385</li>
                        <li><i class="fa fa-envelope-o fa-fw"></i> <a href="mailto:klackers@telkomsa.net">klackers@telkomsa.net</a>
                        </li>
                    </ul>
                    <br>
                    <ul class="list-inline">
                        <li>
                            <a href="https://www.facebook.com/churchontheway.assemblyofgod/"><i class="fa fa-facebook fa-fw fa-3x"></i></a>
                        </li>
                        <li>
                            <a href="https://www.youtube.com/user/churchontheway1/videos?view_as=subscriber"><i class="fa fa-youtube fa-fw fa-3x"></i></a>
                        </li>
                    </ul>
                    <hr class="small">
                    <p class="text-muted">Copyright &copy; <strong>www.churchonthewaype.co.za</strong> <?php  echo date("Y");?></p>
                </div>
            </div>
        </div>
        <a id="to-top" href="#top" class="btn btn-dark btn-lg"><i class="fa fa-chevron-up fa-fw fa-1x"></i></a>
    </footer>






<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>


<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>







<script type="text/javascript">
var top1 = $('#about').offset().top;
var top2 = $('#portfolio').offset().top;
var top3 = $('#events').offset().top;

$(document).scroll(function() {
    var scrollPos = $(document).scrollTop();
    if (scrollPos >= top1 && scrollPos < top2) {
        $('#change').css('background-color', '#f00');
    } else if (scrollPos >= top2 && scrollPos < top3) {
        $('#change').css('background-color', '#0f0');
    } else if (scrollPos >= top3) {
        $('#change').css('background-color', '#00f');
    }
});
</script>



</body>