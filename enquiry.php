
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Venture a Travel Category Bootstrap Responsive Website Template | Contact :: W3layouts</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Venture Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"
	/>
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //Meta tag Keywords -->

	<!-- Custom-Files -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link rel="stylesheet" href="css/fontawesome-all.css">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //Custom-Files -->
	<!-- Web-Fonts -->
	<link href="//fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
	<!-- //Web-Fonts -->

</head>

<body data-spy="scroll" data-target=".fixed-top">
	<!-- header -->
	<?php include 'header.php';?>
	<!-- //header -->
<!-- banner -->
	<div class="banner-agile-1">
		
	</div>
	<!-- //banner -->
	<!-- contact -->
	<section class="contact-innpage py-5">
		<div class="container py-md-4 mt-md-3">
				<div class="wthree_head_section">
				<h2 class="w3l_header">Enquire <span>Here</span></h2>
			</div>
            <?php
            if(isset($_POST['submit'])){
                $name=$_POST['Name'];
                $email=$_POST['Email'];
                $phone=$_POST['Telephone'];
                $message=$_POST['Message'];
                $to='developers@krispindia.in';
                $subject = $_POST['Subject'];
                $Header = "MIME-Version: 1.0" . "\r\n";
                $Header .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                $Header .= "From: $email"; // This is the email address the generated message will be from. We recommend using something                 like noreply@yourdomain.com.
                $Header .= "Reply-To: $email";
                $email_body = "<html>
    <body style='background-color: #eee; padding: 20px;'>
  
        <div style='background-color:#fff;border-radius: 25px;'>
              <div style='background-color: #fff;'>
       <img src='images/logo.png' id='logo' style='padding: 1%'/>
       <p style=' text-align: center;background-color: #ff0000; color: white;padding: 0.7%;font-size: 20px;font-weight: bold;'>Enquiry Details</p>
       
</div>
             <div>
                 <p style='padding: 4% 4% 0% 4%;'>Hello ,</p>
                      <p style='padding: 4% 4% 0% 4%;'>Name : $name</p>
                      <p style='padding: 4% 4% 0% 4%;'>Email : $email</p>
                      <p style='padding: 4% 4% 0% 4%;'>Mobile : $phone</p>
                      <p style='padding: 4% 4% 0% 4%;'>Message : $message</p>
  <div style='background-color: #000; padding:10px;margin-top: 50px'>
                 
        <p style='text-align:center;font-weight:bold;color:white'> All Rights Reserved | Design by <a href='https://krispindia.in/' target='_blank'>Krisp Hospitality PVT</a></p>
            </div>
            
       </body>
       </html>";
                echo $email_body;

                $mail = mail($to, $subject, $email_body, $Header);
                echo '<div id="deletesuccess"><div class="alert alert-success" role="alert" style="text-align:center">Thank You.We will contact you shortly.</div></div>';

            }


            ?>
			<form action="#" method="post">
			<div class="row mail_grid_w3l mt-md-5 pt-4">
				
					<div class="col-md-6 contact_left_grid">
						<div class="contact-fields-w3ls">
							<input type="text" name="Name" placeholder="Name" required="">
						</div>
						<div class="contact-fields-w3ls">
							<input type="email" name="Email" placeholder="Email" required="">
						</div>
						<div class="contact-fields-w3ls">
							<input type="text" name="Telephone" placeholder="Telephone" required="">
						</div>
						<div class="contact-fields-w3ls">
							<input type="text" name="Subject" placeholder="Subject" required="">
						</div>
					</div>
					<div class="col-md-6 contact_left_grid rgt_gd">
						<div class="contact-fields-w3ls">
							<textarea name="Message" placeholder="Message..." required=""></textarea>
						</div>
						<input type="submit" value="Submit" name="submit">
					</div>
				
			</div>
			</form>
		</div>
	</section>
	<!-- //contact -->
	<section class="map-section">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387193.30591910525!2d-74.25986432970718!3d40.697149422113014!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sin!4v1521710297542"></iframe>
	</section>


<!--footer-->
	<footer>
		<div class="container py-md-4 mt-md-3">
			<div class="row footer-top-w3layouts-agile py-5">
				<div class="col-lg-3 col-md-6 col-sm-6 footer-grid">
					<div class="footer-title">
						<h3>About Us</h3>
					</div>
					<div class="footer-text">
						<p>Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. lacinia eget consectetur sed, convallis at tellus..</p>

					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 footer-grid">
					<div class="footer-title">
						<h3>Contact Us</h3>
					</div>
					<div class="contact-info">
					<h4>Location :</h4>
					<p>0926k 4th block building, king Avenue, New York City.</p>
					<div class="phone">
						<h4>Phone :</h4>
						<p>Phone : +121 098 8907 9987</p>
						<p>Email : <a href="mailto:info@example.com">info@example.com</a></p>
					</div>
				</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 footer-grid">
					<div class="footer-title">
						<h3>Recent Posts</h3>
					</div>
					<div class="footer-list">
						<div class="flickr-grid">
							<a href="#" data-toggle="modal" data-target="#myModal">
								<img src="images/g1.jpg" class="img-fluid" alt=" ">
							</a>
						</div>
						<div class="flickr-grid">
							<a href="#" data-toggle="modal" data-target="#myModal">
								<img src="images/g2.jpg" class="img-fluid" alt=" ">
							</a>
						</div>
						<div class="flickr-grid">
							<a href="#" data-toggle="modal" data-target="#myModal">
								<img src="images/g3.jpg" class="img-fluid" alt=" ">
							</a>
						</div>
						<div class="flickr-grid">
							<a href="#" data-toggle="modal" data-target="#myModal">
								<img src="images/g4.jpg" class="img-fluid" alt=" ">
							</a>
						</div>
						<div class="flickr-grid">
							<a href="#" data-toggle="modal" data-target="#myModal">
								<img src="images/g5.jpg" class="img-fluid" alt=" ">
							</a>
						</div>
						<div class="flickr-grid">
							<a href="#" data-toggle="modal" data-target="#myModal">
								<img src="images/g6.jpg" class="img-fluid" alt=" ">
							</a>
						</div>
						<div class="flickr-grid">
							<a href="#" data-toggle="modal" data-target="#myModal">
								<img src="images/g7.jpg" class="img-fluid" alt=" ">
							</a>
						</div>
						<div class="flickr-grid">
							<a href="#" data-toggle="modal" data-target="#myModal">
								<img src="images/g9.jpg" class="img-fluid" alt=" ">
							</a>
						</div>
						<div class="flickr-grid">
							<a href="#" data-toggle="modal" data-target="#myModal">
								<img src="images/g8.jpg" class="img-fluid" alt=" ">
							</a>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 footer-grid">
					<div class="footer-title">
						<h3>Subscribe</h3>
					</div>
					<p>Vivamus magna justo, lacinia eget consectetur sed.</p>
					<form action="#" method="post" class="newsletter">
						<input class="email" type="email" placeholder="Your email..." required="">
						<button class="btn1">
							<i class="far fa-envelope"></i>
						</button>
					</form>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</footer>
	<!---->
	<div class="copyright py-3">
		<div class="container">
			<div class="copyrighttop">
				<ul>
					<li>
						<h4>Follow us on:</h4>
					</li>
					<li>
						<a class="facebook" href="#">
							<i class="fab fa-facebook-f"></i>
						</a>
					</li>
					<li>
						<a class="facebook" href="#">
							<i class="fab fa-twitter"></i>
						</a>
					</li>
					<li>
						<a class="facebook" href="#">
							<i class="fab fa-google-plus-g"></i>
						</a>
					</li>
					<li>
						<a class="facebook" href="#">
							<i class="fab fa-pinterest-p"></i>
						</a>
					</li>
				</ul>
			</div>
			<div class="copyrightbottom">
				<p>© 2018 Venture. All Rights Reserved | Design by
					<a href="http://w3layouts.com/">W3layouts</a>
				</p>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
<!-- //footer -->
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Venture</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		 <div class="agileits-w3layouts-info">
			<img src="images/g6.jpg" class="img-fluid" alt="" />
			<p>Duis venenatis, turpis eu bibendum porttitor, sapien quam ultricies tellus, ac rhoncus risus odio eget nunc. Pellentesque ac fermentum diam. Integer eu facilisis nunc, a iaculis felis. Pellentesque pellentesque tempor enim, in dapibus turpis porttitor quis. </p>
		</div>
	</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- //Modal -->
	<!-- Js files -->
	<!-- JavaScript -->
	<script src="js/jquery-2.2.3.min.js"></script>
	<!-- Default-JavaScript-File -->
	<!-- Necessary-JavaScript-File-For-Bootstrap -->
	<!-- smooth scrolling -->
	<script src="js/SmoothScroll.min.js"></script>
	<!-- //smooth scrolling -->
	<!-- start-smoth-scrolling -->
	<script src="js/move-top.js"></script>
	<script src="js/easing.js"></script>
	<script>
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- start-smoth-scrolling -->

	<!-- smooth scrolling-bottom-to-top -->
	<script>
		$(document).ready(function () {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
			$().UItoTop({
				easingType: 'easeOutQuart'
			});
		});
	</script>
	<!-- //smooth scrolling-bottom-to-top -->
	<!-- //Js files -->
<script src="js/bootstrap.js"></script>
</body>
</html>