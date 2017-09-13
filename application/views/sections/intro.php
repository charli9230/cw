<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

  <!-- Navigation -->
    <nav class="navbar navbar-default  navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#top">Home</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#about">About</a>
                    </li>
                    <li>
                        <a href="#portfolio">Ministries</a>
                    </li>
                    <li>
                        <a href="#leaders">Leaders</a>
                    </li>
                     <li>
                        <a href="#events">Events</a>
                    </li>
                     <li>
                        <a href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

<!-- Full Page Image Background Carousel Header -->
    <header id="myCarousel" class="carousel slide header">
    	<div id="carousel-heading" class="overlay text-vertical-center">
	    	<h1>COTWAY</h1>
	        <!-- <h3>your home, my home, our home.</h3>-->
	        <br>
	        <a href="#about" class="btn btn-dark btn-lg">Find Out More</a>
    	</div>

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


    </div>
    <!-- /.container -->






 <!-- Services -->
    <!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->
    <section id="about" class="services bg-primary">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-10 col-lg-offset-1">
                    <h2>About</h2>
                    <hr class="small">
                    <p>COTWAY (Church On The Way) is a student and family-friendly church, situated in walking distance from NMMU North and South campus, on Admiralty Way. Otherwise known as “the big white Church” in Summerstrand. COTWAY is a “home away from home” for many students; we meet every Sunday at COTWAY to worship God and hear his Word. As some of us are far away from home, We view Our leaders, Rev Pastor Vic and Lathicia Klackers, as our spiritual parents; offering guidance and assistance in times of need. COTWAY’s vision is to impact the lives of others with the love of Jesus Christ. We are a friendly, safe community and we’d love to see you at 9am on Sunday!</p>
                </div>
                <!-- /.col-lg-10 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
 <!-- Portfolio -->

    <section id="portfolio" class="portfolio">
        <div class="container-fluid">
         <div class="row text-center">
                <div class="col-lg-10 col-lg-offset-1">
                    <h2>Ministries</h2>
                    <hr class="small">
                </div>
        </div>
            <!-- /.row -->
            <figure class="snip1585 ">
			  <img src="<?php echo base_url();?>assets/img/w.jpg" alt="sample70" />
			  <figcaption>
			    <h3>Worship <span>Ministry</span></h3>
			  </figcaption>
			  <a href="<?php echo base_url('home/worship');?>"></a>
			</figure>

			<figure class="snip1585"><img src="<?php echo base_url();?>assets/img/p.jpg" alt="sample106" />
			  <figcaption>
			    <h3>Prayer <span>Ministry</span></h3>
			  </figcaption>
			  <a href="<?php echo base_url('home/prayer');?>"></a>
			</figure>

			<figure class="snip1585"><img src="<?php echo base_url();?>assets/img/m.jpg" alt="sample109" />
			  <figcaption>
			    <h3>Multimedia <span>Ministry</span></h3>
			  </figcaption>
			  <a href="<?php echo base_url('home/multimedia');?>"></a>
			</figure>

			 <figure class="snip1585">
			  <img src="<?php echo base_url();?>assets/img/y.jpg" alt="sample70" />
			  <figcaption>
			    <h3>Youth<span>Ministry</span></h3>
			  </figcaption>
			  <a href="<?php echo base_url('home/youth');?>"></a>
			</figure>

			<figure class="snip1585 "><img src="<?php echo base_url();?>assets/img/d.jpg" alt="sample106" />
			  <figcaption>
			    <h3>Dance <span>Ministry</span></h3>
			  </figcaption>
			  <a href="<?php echo base_url('home/dance');?>"></a>
			</figure>

			<figure class="snip1585"><img src="<?php echo base_url();?>assets/img/h.jpg" alt="sample109" />
			  <figcaption>
			    <h3>Hospitality <span>Ministry</span></h3>
			  </figcaption>
			  <a href="<?php echo base_url('home/hospitality');?>"></a>
			</figure>

			<figure class="snip1585">
			  <img src="<?php echo base_url();?>assets/img/s.jpg" alt="sample70" />
			  <figcaption>
			    <h3>Sharing Abondant<br> Life Together <span>Ministry</span></h3>
			  </figcaption>
			  <a href="<?php echo base_url('home/salt');?>"></a>
			</figure>

			<figure class="snip1585 "><img src="<?php echo base_url();?>assets/img/mm.jpg" alt="sample106" />
			  <figcaption>
			    <h3>Men's <span>Ministry</span></h3>
			  </figcaption>
			  <a href="<?php echo base_url('home/men');?>"></a>
			</figure>

			<figure class="snip1585"><img src="<?php echo base_url();?>assets/img/wm.jpg" alt="sample109" />
			  <figcaption>
			    <h3>Women's <span>Ministry</span></h3>
			  </figcaption>
			  <a href="<?php echo base_url('home/women');?>"></a>
			</figure>
    </section>

     <section id="leaders" class="portfolio">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-10 col-lg-offset-1">
                    <h2>Leaders</h2>
                    <hr class="small">
                </div>
            </div>
             <div id="leaderbox">
                <figure class="snip1515">
    			  <div class="profile-image"><img src="<?php echo base_url();?>assets/img/v.jpg" alt="sample47" /></div>
    			  <figcaption>
    			    <h3>Rev. Vic Klackers</h3>
    			    <h4>Seignor Pastor</h4>
    			  </figcaption>
    			</figure>
    			<figure class="snip1515">
    			  <div class="profile-image"><img src="<?php echo base_url();?>assets/img/l.jpg" alt="sample83" /></div>
    			  <figcaption>
    			    <h3>Lathicia Klackers</h3>
    			    <h4>Associate Pastor</h4>
    			  </figcaption>
    			</figure>
    		</div>
        </div>
        <!-- /.container -->
    </section>

     <section id="events" class="services">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-10 col-lg-offset-1">
                    <h2>Events</h2>
                    <hr class="small">
                </div>
            </div>
            <!-- /.row -->
            <figure class="snip1527">
			  <div class="image"><img src="<?php echo base_url();?>assets/img/men/menconf.jpeg" alt="Men's Conference" /></div>
			  <figcaption>
			    <div class="date"><span class="day">28</span><span class="month">July</span></div>
			    <h3>Men's Conference</h3>
                 <h3>" THE LEGACY "</h3>
			    <p> Fight for your legacy. Take your stand.<br>Friday July 28, 2017<br> @ 18:00 pm<br>Hosted by Church On The Way.<br>Guest Speaker <strong>Steve Buys</strong><br>A light supper and free transport provided.<br>Contact number:<span>0720568872</span><br>FREE ENTRANCE!!</p>
			  </figcaption>
			  <a href="<?php echo base_url('home/men');?>"></a>
			</figure>
			<figure class="snip1527">
			  <div class="image"><img src="<?php echo base_url();?>assets/img/women/womenconf2.jpg" alt="Ladies’ Conference" /></div>
			  <figcaption>
			    <div class="date"><span class="day">5</span><span class="month">Aug</span></div>
			    <h3>Ladies’ Conference</h3>
                <h3>" You are a Masterpiece "</h3>
			    <p>
			      Saturday 5 August 2017<br>9 a.m. till 3 p.m. (includes refreshment)<br>Church on the Way, Summerstrand<br>R100 per person/ R50 per student<br>Speaker: Dr Pinky Ngcakani-Ncula<br>Contact number: Shirley:<span>0878810107</span>

			    </p>
			  </figcaption>
			  <a href="<?php echo base_url('home/women');?>"></a>
			</figure>
			<figure class="snip1527">
			  <div class="image"><img src="<?php echo base_url();?>assets/img/xa/camp.jpg" alt="Chi Alpha CAMP" /></div>
			  <figcaption>
			    <div class="date"><span class="day">25</span><span class="month">Sep</span></div>
			    <h3>CHI ALPHA CAMP!!!!!!!!!        </h3>
			    <p>Chi Alpha CAMP<br>Monday 25, September 2017<br>Cost: R250.00<br>Location: Landela Christian CAMP<br>Contact number: 0833652094 / 0765061429 </p>
			  </figcaption>
			  <a href="<?php echo base_url('home/youth');?>"></a>
			</figure>
    
        </div>
        <!-- /.container -->
    </section>
  <!-- Map -->
    <section id="contact" class="map">
        <iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1653.9535517891286!2d25.67055778361651!3d-33.99491979757763!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1e6532c9b6a73e11%3A0xd88077200c19f10b!2sChurch+on+the+Way!5e0!3m2!1sen!2sza!4v1498540893337" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
        <br />
        <small>
            <a href="https://www.google.co.za/maps/place/Church+on+the+Way/@-33.9949198,25.6705578,18z/data=!3m1!4b1!4m5!3m4!1s0x1e6532c9b6a73e11:0xd88077200c19f10b!8m2!3d-33.9949198!4d25.6713316"></a>
        </small>
    </section>


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