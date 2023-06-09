<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<?php
		include ("common/links.php");
		?>
		<!-- Bootstrap CSS -->
		<title>Anil Sahasrabudhe | Contact</title>
	</head>
	<body>
			<?php
		include ("common/header.php");
		?>
		<section id="sub-header">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="sub-header-caption">
							<h1>CONTACT US</h1>
							<p>
								<a href="#/">Home</a> - Contact Us
							</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="sec-content">
			<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="well well-sm">
                <form>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter name" required="required" />
                        </div>
                        <div class="form-group">
                            <label for="email">
                                Email Address</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                <input type="email" class="form-control" id="email" placeholder="Enter email" required="required" /></div>
                        </div>
                        <div class="form-group">
                            <label for="subject">
                                Subject</label>
                            <select id="subject" name="subject" class="form-control" required="required">
                                <option value="na" selected="">Choose One:</option>
                                <option value="service">General Customer Service</option>
                                <option value="suggestions">Suggestions</option>
                                <option value="product">Product Support</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Message</label>
                            <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                                placeholder="Message"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary pull-right" id="btnContactUs">
                            Send Message</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
        <div class="col-md-4">
            <form>
            <legend><span class="glyphicon glyphicon-globe"></span>Contact us</legend>
            <address>
                'I', Samarth Nagar, Shriram Chowk, (behind the Hotel Sagar), Pipeline Road, Ahmednagar Maharashtra
                <abbr title="Phone">
                    P:</abbr>
										9881500942 <br>
                (0241) 2424-167
            </address>
            <address>
                <strong>Dr Anil Sahasrabuddhe</strong><br>
                <a href="mailto:#">usahasrabuddhe@gmail.com</a>
            </address>
            </form>
        </div>
    </div>
</div>
		</section>
		<?php
		include("common/footer.php");
		 ?>
