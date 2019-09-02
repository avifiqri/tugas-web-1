<?php include_once "header.php" ?>

   	<div class="banner-area banner-bg-1">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="banner">
						<h2>Our Product</h2>
						<ul class="page-title-link">
							<li><a href="home.php">Home</a></li>
							<li><a href="#">Our Product</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="services" class="parallax section lb">
        <div class="container">
            <div class="section-title text-center">
                <h3>Our Product</h3>
                <p class="lead">Our Service unlimited solutions to all your business needs. in the installation package we prepare search engine optimization, social media support, we provide corporate identity and graphic design services.</p>
            </div><!-- end title -->
  

            <div class="owl-services owl-carousel owl-theme">
            <?php 
                $urut = 0;
            $produk_show = mysqli_query($koneksidb, "SELECT * FROM produck");
            while($hs_show = mysqli_fetch_array($produk_show)) {
                $urut ++;
                $vgambar_product = "$hs_show[gambar_product]";

                $vkode = "$hs_show[kode]";
                $vname = "$hs_show[name_product]";
                $vprice = "$hs_show[price]";
                    $vprice = number_format($vprice, 0, ",", ".");
                $vquantity = "$hs_show[quantity]";
                    $vquantity = number_format($vquantity, 0, ",", ".");
                $vdeskripsi = "$hs_show[deskripsi]";
        ?>
                <div class="service-widget">
                    <div class="post-media wow fadeIn">
                        <a href='img/<?php echo "$vgambar_product"; ?>'  data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                        <img src='img/<?php echo "$vgambar_product"; ?>'  alt="" class="img-responsive img-rounded">
                    </div>
					<div class="service-dit">
						<h3> <?php echo "$vname" ?> </h3>
						<p>RP. <?php echo "$vprice" ?>,-</p> 
                        <p><?php echo "$vquantity" ?></p> 
                        <p><?php echo "$vdeskripsi" ?> </p>
					</div>
                </div>
                <!-- end service -->
                <?php } ?>


            </div><!-- end row -->

            <hr class="hr1">

            <div class="text-center">
                <a data-scroll href="#portfolio" class="btn btn-light btn-radius btn-brd">View Our Portfolio</a>
            </div>
        </div><!-- end container -->
    </div><!-- end section -->

    <div id="testimonials" class="parallax section db parallax-off" style="background-image:url('./goodweb/uploads/parallax_03.jpg');">
        <div class="container">
            <div class="section-title text-center">
                <h3>Testimonials</h3>
                <p class="lead">We thanks for all our awesome testimonials! There are hundreds of our happy customers! <br>Let's see what others say about GoodWEB Solutions website template!</p>
            </div><!-- end title -->

          

            <hr class="hr1">

            <div class="row logos">
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="./goodweb/uploads/logo_01.png" alt="" class="img-repsonsive"></a>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="./goodweb/uploads/logo_02.png" alt="" class="img-repsonsive"></a>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="./goodweb/uploads/logo_03.png" alt="" class="img-repsonsive"></a>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="./goodweb/uploads/logo_04.png" alt="" class="img-repsonsive"></a>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="./goodweb/uploads/logo_05.png" alt="" class="img-repsonsive"></a>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="./goodweb/uploads/logo_06.png" alt="" class="img-repsonsive"></a>
                </div>
            </div><!-- end row -->

        </div><!-- end container -->
    </div><!-- end section -->

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <img src="./goodweb/images/logos/logo-2.png" alt="" />
                        </div>
                        <p> Integer rutrum ligula eu dignissim laoreet. Pellentesque venenatis nibh sed tellus faucibus bibendum. Sed fermentum est vitae rhoncus molestie. Cum sociis natoque penatibus et magnis dis montes.</p>
                        <p>Sed fermentum est vitae rhoncus molestie. Cum sociis natoque penatibus et magnis dis montes.</p>
                    </div><!-- end clearfix -->
                </div><!-- end col -->

				<div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>Pages</h3>
                        </div>

                        <ul class="footer-links hov">
                            <li><a href="#">Home <span class="icon icon-arrow-right2"></span></a></li>
							<li><a href="#">Blog <span class="icon icon-arrow-right2"></span></a></li>
							<li><a href="#">Pricing <span class="icon icon-arrow-right2"></span></a></li>
							<li><a href="#">About <span class="icon icon-arrow-right2"></span></a></li>
							<li><a href="#">Faq <span class="icon icon-arrow-right2"></span></a></li>
							<li><a href="#">Contact <span class="icon icon-arrow-right2"></span></a></li>
                        </ul><!-- end links -->
                    </div><!-- end clearfix -->
                </div><!-- end col -->
				
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="footer-distributed widget clearfix">
                        <div class="widget-title">
                            <h3>Subscribe</h3>
							<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which one know this tricks.</p>
                        </div>
						
						<div class="footer-right">
							<form method="get" action="#">
								<input placeholder="Subscribe our newsletter.." name="search">
								<i class="fa fa-envelope-o"></i>
							</form>
						</div>                        
                    </div><!-- end clearfix -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </footer><!-- end footer -->

    <div class="copyrights">
        <div class="container">
            <div class="footer-distributed">
                <div class="footer-left">                   
                    <p class="footer-company-name">All Rights Reserved. &copy; 2018 <a href="#">GoodWEB</a> Design By : 
					<a href="https://html.design/">html design</a></p>
                </div>

                
            </div>
        </div><!-- end container -->
    </div><!-- end copyrights -->

    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="./goodweb/js/all.js"></script>
    <!-- ALL PLUGINS -->
    <script src="./goodweb/js/custom.js"></script>
    <script src="./goodweb/js/portfolio.js"></script>
    <script src="./goodweb/js/hoverdir.js"></script>    
    <script>
    function imgError(image){
        image.onerorr="";
        image.src="../img/ganteng.jpg";
        return true;
    }
</script>
</body>
</html>