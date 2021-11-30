<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include("../config.php");
        $page_title = "Shipping Policy - ".$product_name;
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
						<h1 class="text-center"><b><?php echo $product_name; ?><br><small>Shipping Policy</small></b></h1>
					</div>
				</div>
			</div>
		</section>

		<section>
			<div class="container">
				<div class="row">
					<div class="col-12 py-5">
						<div class="px-md-5 px-md-5 mx-sm-2 px-3 py-3 py-md-5 mt-md-4">
							<p>When you decide to purchase <?php echo $product_name; ?> or related products, your order will be automatically shipped after you've filled in the order form and your payment is confirmed.</p>
							<p>In no more than 60 hours, you will receive an email with your shipping tracking ID and a personalized link that allows you to check your shipment anytime you like.</p>
							<p>After receiving this email, you can rest assured, as your order is on its way to you and will be delivered to the address you have provided us as soon as possible, as our trusted shipping partner guarantees.</p>
							<p>We'll make sure that you only receive premium quality products, as your health and satisfaction with our supplements is our goal and business identity. If, at any time, you have any questions, simply let us know by writing us an email to this address <b class="color-yellow"><?php echo $support_email; ?>.</b></p>

						</div>
					</div>
				</div>
			</div>
		</section>
		                                                                            
		<section>
			<div class="container">
				<div class="row">
					<div class="col-12">
						<table class="px-md-5 mx-md-5 py-3 py-md-3 table">
							<tr >
								<th scope="col"><b>Delivery Address</b></th>
								<th scope="col"><b>Shipping Fee </b></th> 
								<th scope="col"><b>Shipping Time</b></th>
							</tr>
							<tr>                                                                          
								<td>United States</td>
								<td>FREE </td>
								<td>5-7 working days</td>
							</tr>                                                                                         
							<tr>                                                                                
								<td>Canada </td>
								<td>$15.95</td>
								<td>10-15 working days</td>
							</tr>
							<tr>                                                                                
								<td>UK and Ireland</td>
								<td>$15.95</td>
								<td>10-15 working days</td>
							</tr>
							<tr>                                                                                
								<td>Australia and New Zealand</td>
								<td>$15.95</td>
								<td>10-15 working days</td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</section>

		<section>
			<div class="container">
				<div class="row">
					<div class="col-12 py-5">
						<div class="px-md-5 px-md-5 mx-sm-2 px-3 mb-3 mb-md-5 pb-md-5">
							<p class="py-3 py-md-5">Here is the list of the most frequently asked questions regarding the shipping policy and the order status. Please go through them, as they should help you find the answer to your inquiries in no time.</p>
							
							<p class="color-gray"><b>Where can I receive my order?</b></p>
							<p class="pb-3 pb-md-5">We will deliver your ordered products wherever you want. You can ask for them at home or at work, anywhere you have a physical address.</p>

							<p class="color-gray"><b>Can the billing address be different than the shipping address?</b></p>
							<p class="pb-3 pb-md-5">We will deliver your ordered products wherever you want. You can ask for them at home or at work, anywhere you have a physical address.</p>

							<p class="color-gray"><b>How long will my order take to arrive?</b></p>
							<p class="pb-3 pb-md-5">According to most of our customers, domestic packages arrive within 5-7 working days after being ordered.</p>

							<p class="color-gray"><b>How much do I pay for the delivery service?</b></p>
							<p class="pb-3 pb-md-5">Nothing at all! The delivery service is on our side, as a sign of appreciation and trust you will be happy with your order.</p>

							<p class="color-gray"><b>Can I track my order / check the status of my order?</b></p>
							<p class="pb-3 pb-md-5">Yes, you can. In maximum 60 hours after you order, all working days of the week, you will receive an email with your shipping tracking ID and a link. Click on that link to check on the status of your order anytime you want.</p>

							<p class="color-gray"><b>I accidentally placed my order with an incorrect shipping address. What should I do?</b></p>
							<p class="pb-3 pb-md-5">First of all, you shouldn't worry. If you realize you have accidently ordered to an incorrect shipping address, write us an email as soon as possible, in order for us to make the proper changes, so that you can receive and enjoy the ordered products. You can find us any day of the week online, at <b class="color-yellow"><?php echo $support_email; ?>.</b> </p>

							<p class="color-gray"><b>I need more information about the product or the shipping process. Whom should I contact?</b></p>
							<p class="pb-3 pb-md-5">We stand right by our customers every step of the way. So, if you have questions regarding the product, the order or the shipping process, we're here to help. Just write us an email, any day for the week at <b class="color-yellow"><?php echo $support_email; ?>.</b> </p>

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