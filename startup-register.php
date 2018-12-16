
<!-- get_header('Page Name','Title')-->
<!doctype html>
<html class="no-js" lang="zxx">
	

<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>Startup Register - KIIT E-Cell</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700%7CRoboto:400,500,700,900%7CPlayfair+Display:400,700,700i,900,900i%7CWork+Sans:400,500,600,700" rel="stylesheet">

		<!-- signatra-font -->
		<link rel="stylesheet" href="assets/css/signatra-font.css">

		<link rel="icon" type="image/png" href="assets/images/favicon.ico">
		<!-- Place favicon.ico in the root directory -->
		<link rel="apple-touch-icon" href="apple-touch-icon.html">
		<link rel="stylesheet" href="assets/css/font-awesome.min.css">

		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/css/animate.css">
		<link rel="stylesheet" href="assets/css/iconfont.css">
		<link rel="stylesheet" href="assets/css/magnific-popup.css">
		<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
		<link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
		<link rel="stylesheet" href="assets/css/swiper.min.css">
		<link rel="stylesheet" href="assets/css/rev-settings.css">

		<!--For Plugins external css-->
		<link rel="stylesheet" href="assets/css/plugins.css" />

		<!--Theme custom css -->
		<link rel="stylesheet" href="assets/css/style.css">

		<!--Theme Responsive css-->
		<link rel="stylesheet" href="assets/css/responsive.css" />
<style type="text/css">
            
            .nav-menu li.active>a {
                color: #1B4F72!important;
                }
				.loader {
    border: 16px solid #f3f3f3; /* Light grey */
    border-top: 16px solid #3498db; /* Blue */
    border-radius: 50%;
    width: 30px;
    height: 30px;
    animation: spin 2s linear infinite;
}

@keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}
        </style>
        
	</head>
	<body>
	
	<!--[if lt IE 10]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->

	<!-- prelaoder -->
	<!-- <div id="preloader">
    <div class="preloader-wrapper">
        <div class="spinner"></div>
    </div>
    <div class="preloader-cancel-btn">
        <a href="#" class="btn btn-secondary prelaoder-btn">Cancel Preloader</a>
    </div>
</div> -->
	<!-- END prelaoder -->
<!-- header section -->

<?php  include "includes/header.php" ?>


<!-- welcome section -->
<!--breadcumb start here-->
<div class="xs-inner-banner inner-banner2" style="background-image:url('assets/images/banner/bg-banner-11.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-md-7 mx-auto">
                <div class="inner-banner">
                    <h2 class="inner-banner-title">Register Your Startup here</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!--breadcumb end here-->
<div class="container" style="margin-top: 10%;">
	<div class="alert-box"></div>
				<form id="register_startup" class="form-horizontal form-bordered" action="javascript:" onsubmit="fromSubmit()" method="POST">
					<h2> Basic Details </h2>
										<div class="form-group">
											<label class="col-md-3 control-label" for="StartupName">Startup Name*</label>
											<div class="col-md-12">
												<input type="text" class="form-control" id="StartupName" name="startupName" required="" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABHklEQVQ4EaVTO26DQBD1ohQWaS2lg9JybZ+AK7hNwx2oIoVf4UPQ0Lj1FdKktevIpel8AKNUkDcWMxpgSaIEaTVv3sx7uztiTdu2s/98DywOw3Dued4Who/M2aIx5lZV1aEsy0+qiwHELyi+Ytl0PQ69SxAxkWIA4RMRTdNsKE59juMcuZd6xIAFeZ6fGCdJ8kY4y7KAuTRNGd7jyEBXsdOPE3a0QGPsniOnnYMO67LgSQN9T41F2QGrQRRFCwyzoIF2qyBuKKbcOgPXdVeY9rMWgNsjf9ccYesJhk3f5dYT1HX9gR0LLQR30TnjkUEcx2uIuS4RnI+aj6sJR0AM8AaumPaM/rRehyWhXqbFAA9kh3/8/NvHxAYGAsZ/il8IalkCLBfNVAAAAABJRU5ErkJggg==&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%;">
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-3 control-label" for="Industry">Startup Sector*</label>
											<div class="col-md-12">
												<select class="form-control mb-md" id="Industry" name="industry" required="">
													<option>Information Technology</option>
													<option>E-Commerce</option>
													<option>Enterprises</option>
													<option>Media</option>
													<option>Food</option>
													<option>Finance</option>
													<option>Health Care</option>
													<option>Education</option>
													<option>Health and Wellness</option>
													<option>Platforms</option>
													<option>Retail</option>
													<option>Life Sciences</option>
													<option>Fashion</option>
													<option>Design</option>
													<option>Realk Estate</option>
													<option>Ideation</option>
													<option>Travel &amp; Tourism</option>
													<option>Logistics</option>

												</select>												
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-3 control-label" for="Website">Website*</label>
											<div class="col-md-12">
												<input type="text" class="form-control" id="Website" name="website" required="">
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-3 control-label" for="CurrentStatus">Current Status*</label>
											<div class="col-md-12">
												<select class="form-control mb-md" id="CurrentStatus" name="currentStatus" required="">
													<option>Ideation</option>
													<option>Intial Prototype</option>
													<option>Registered Startup</option>
												</select>											
											</div>
										</div>
										<h2> Contact Details </h2>
										<div class="form-group">
											<label class="col-md-3 control-label" for="Address">Address*</label>
											<div class="col-md-12">
												<input type="text" class="form-control" id="Address" name="address" required="">
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-3 control-label" for="Email">Email*</label>
											<div class="col-md-12">												
												<input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." class="form-control" name="email" id="Email" required="">
											</div>
										</div>
										
										<div class="form-group">
											<label class="col-md-3 control-label" for="MobileNo">Mobile No*</label>
											<div class="col-md-12">
												<input type="text" class="form-control" id="MobileNo" name="mobileNo" required="">
											</div>
										</div>
										<h2> Social Links </h2>
										<div class="form-group">
											<label class="col-md-3 control-label" for="Facebook">Facebook</label>
											<div class="col-md-12">
												<input type="text" class="form-control" id="Facebook" name="facebook">
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-3 control-label" for="Twitter">Twitter</label>
											<div class="col-md-12">
												<input type="text" class="form-control" id="Twitter" name="twitter">
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-3 control-label" for="Instagram">Instagram</label>
											<div class="col-md-12">
												<input type="text" class="form-control" id="Instagram" name="instagram">
											</div>
										</div>
										<h2>Founder's Info</h2>
										<div class="form-group">
											<label class="col-md-3 control-label" for="FoundersName">Founder's Name*</label>
											<div class="col-md-12">
												<input type="text" class="form-control" id="FoundersName" name="foundersName" required="">
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-3 control-label" for="College">College*</label>
											<div class="col-md-12">
												<input type="text" class="form-control" id="College" name="college" required="">
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-3 control-label" for="Branch">Branch*</label>
											<div class="col-md-12">
												<input type="text" class="form-control" id="Branch" name="branch" required="">
											</div>
										</div>

										<div class="row">
									<div class="col-md-12">
										<button type="submit" name="submit" id="submit" class="btn btn-primary btn-lg mb-xlg" data-loading-text="Loading...">Submit</button>
									<img id="loading" style="display:none;" src="/KIITEcell/assets//images/loading.gif">
								</div>
									
								</div>

						<div class="row">
							<hr class="tall">
						</div>
</form>




	</div>



<?php  include "includes/footer.php" ?>


<!-- js file start -->
<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/plugins.js"></script>
<script src="assets/js/Popper.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/scrollax.js"></script>
<script src="assets/js/jquery.ajaxchimp.min.js"></script>
<script src="assets/js/jquery.waypoints.min.js"></script>
<script src="assets/js/isotope.pkgd.min.js"></script>
<script src="assets/js/swiper.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3&amp;key=AIzaSyDeZubzJTQgtjreqsdaGMGXxaxP-pv6pSk"></script>
<script src="assets/js/jquery.easypiechart.min.js"></script>
<script src="assets/js/delighters.js"></script>
<script src="assets/js/typed.js"></script>
<script src="assets/js/jquery.parallax.js"></script>
<script src="assets/js/jquery.themepunch.tools.min.js"></script>
<script src="assets/js/jquery.themepunch.revolution.min.js"></script>
<script src="assets/js/extensions/revolution.extension.actions.min.js"></script>
<script src="assets/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="assets/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="assets/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="assets/js/extensions/revolution.extension.migration.min.js"></script>
<script src="assets/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="assets/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="assets/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="assets/js/extensions/revolution.extension.video.min.js"></script>
<script src="assets/js/skrollr.min.js"></script>
<script src="assets/js/shuffle-letters.js"></script>
<script src="assets/js/main.js"></script>		<!-- End js file -->
<script>
            
            var fromSubmit = ()=>{
                document.querySelector('.alert-box').innerHTML = `
                    <div class="alert alert-warning">
                            <strong>Please Wait! </strong> Your message is being sent.
                        </div>
                    `
					document.getElementById("submit").innerHTML = '<div class="loader"></div>'
					


                var startupName = document.getElementById('StartupName').value;
                var industry = document.getElementById('Industry').value;
                var website = document.getElementById('Website').value;
				var currentStatus = document.getElementById('CurrentStatus').value;
				var address = document.getElementById('Address').value;
				var email = document.getElementById('Email').value;
				var mobileNo = document.getElementById('MobileNo').value;
				var facebook = document.getElementById('Facebook').value;
				var twitter = document.getElementById('Twitter').value;
				var instagram = document.getElementById('Instagram').value;
				var foundersName = document.getElementById('FoundersName').value;
				var college = document.getElementById('College').value;
				var branch = document.getElementById('Branch').value;

                fetch('https://ecell-contact-form.herokuapp.com/statup-register',{
                method: 'POST',
                headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json',
                'x-auth-token': 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJuYW1lIjoiZm9ybS1kYXRhIiwic2VjcmV0Ijoic2t2am5zamt2YmRza2p2YmRza2p2YmprZHNidmtzYnZqa2RzdnNkY3NkY2pqIn0.VJUV65J3gj3mrwhFdIgKM9cnqTkSJpO436hjrb1vHQU'
                },
               
                body: JSON.stringify({startupName,industry,website,currentStatus,address,email,mobileNo,facebook,twitter,instagram,foundersName,college,branch})
                }).then((m)=>{
                   if(m.status == 200){
				document.getElementById('StartupName').value = "";
                document.getElementById('Industry').value= "";
                document.getElementById('Website').value= "";
				document.getElementById('CurrentStatus').value= "";
				document.getElementById('Address').value= "";
				document.getElementById('Email').value= "";
				document.getElementById('MobileNo').value= "";
				document.getElementById('Facebook').value= "";
				document.getElementById('Twitter').value= "";
				document.getElementById('Instagram').value= "";
				document.getElementById('FoundersName').value= "";
				document.getElementById('College').value= "";
				document.getElementById('Branch').value= "";
                    
                    
                    return;
                    }
                    else{
                        throw new Error();
                    }
                    
                }).then(()=>{
                    document.querySelector('.alert-box').innerHTML = `
                    <div class="alert alert-success">
                            <strong>Success! </strong> Thank you for registering with us!
                        </div>
                    `
                    document.getElementById("submit").innerHTML = 'submit'
                })
                .catch((e)=>{
                    console.log(e);
                    document.querySelector('.alert-box').innerHTML = `
                    <div class="alert alert-danger">
                            <strong>Error! </strong> Opps! Something went wrong. Please try again later or send us an email on <strong>pcr@ecell.org.in</strong>
                        </div>
                    `
                    document.getElementById("submit").innerHTML = 'submit'
                })
            }
            
        </script>

</body>


</html>
