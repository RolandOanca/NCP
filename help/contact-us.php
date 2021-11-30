<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include("../config.php");
        $page_title = "Contact US -".$product_name;
        include($root_folder."/blocks/header.php");
    ?>

 <style>

	p {
    	font-size: 0.95rem;
	}

    </style>
    
</head>

<body>

	<?php /* ----------------- START OF PAGE ----------------- */ ?>

	<div class="help-wrapper">
		<section class="heading-holder">
			<div class="container">
				<div class="row">
					<div class="col-12 py-5">
						<h1 class="text-center"><b>Contact</b></h1>
					</div>
				</div>
			</div>
		</section>

		<section>
			<div class="container">
				<div class="container">
					<div class="row">
						<div class="col-12 py-5">
							<h3><a href="<?php echo $order_support_link?>" target="_blank">For Order Support, please contact <?php echo $payment_gateway; ?> HERE.</a></h3>
							<div class="py-5"></div>
							<h3 class="text-dark">For product support contact the vendor using the contact form below.</h3>
							<div class="py-5"></div>
							<?php include($root_folder."/blocks/freshdesk_support_form.php")?>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>

	<?php /* ----------------- END OF PAGE ----------------- */ ?>
	
	<footer>
    	<?php 
    	include($root_folder."/blocks/footer.php");
    	?>
    </footer>
    <?php include($root_folder."/pixels/tracking_body_pixels.php")?>
</body>
</html>