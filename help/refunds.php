<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include("../config.php");
        $page_title = "Refund Policy - ".$product_name;
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
						<h1 class="text-center"><b><?php echo $product_name; ?><br><small>Refund Policy</small></b></h1>
					</div>
				</div>
			</div>
		</section>

		<section>
			<div class="container">
				<div class="row">
					<div class="col-12 py-5">
						<div class="px-md-5 px-md-5 mx-sm-2 px-3 py-3 py-md-5 mt-md-4">

							<p><b>We are happy only if you're happy.</b>  If you aren't 100% satisfied with your purchase, let us know. You have 60 days after we ship you your order to explore the benefits of the product and draw your own conclusions. Hopefully, you'll become one of the many customers who contact us to share the joy of their experience with us.</p>
							<p>Keep in mind that we are usually advising all our customers to take some time with the supplements in order for them to prove their effect over the organism, before reaching a conclusion.</p>
							<p>Yet, if you are not satisfied with your investment, you can easily ask for your money back! It's our duty to make sure you are contented with your decision and to stand by you any moment of our journey together, wherever it may lead.</p>
							
							<h3 class="text-center color-gray py-3 py-md-5"><b>So, if you decided that purchased product is not for you, here is what you have to know:</b></h3>

							<img class="img-fluid mx-auto d-block" width="200" src="../statics/img/calendar.png" alt="">

							<p class="py-3 py-md-5 text-center">All product bottles purchased online can be returned within 60 days after they have been shipped, meaning mailed to you. We'll make sure you'll know the date, as we'll send you an email to announce you the shipment, and you can also check it on the delivered package.</p>

							<img class="img-fluid mx-auto d-block" width="200" src="../statics/img/return-of-investment.png" alt="">

							<p class="py-3 py-md-5 text-center">To get a refund, you must send the supplement bottles back to us, to the following address: 19655 E 35th Dr #100, Aurora, CO 80011, USA.. Please keep in mind that we do not support the return shipping costs. It's ok if you sent them even on the 59th day of your 60-day money back guarantee period and we receive them several days later. You will still get a refund if you shipped in due time.</p>

							<img class="img-fluid mx-auto d-block" width="200" src="../statics/img/loading.png" alt="">

							<p class="py-3 py-md-5 text-center">As long as you sent back ALL the supplement bottles, you can rest assured the refund will be processed in only a few days after we receive your package.</p>

							<img class="img-fluid mx-auto d-block" width="200" src="../statics/img/book.png" alt="">

							<p class="py-3 py-md-5 text-center">If you have any questions or you need our help, we're right here, by your side. Contact us <br> via email at <b class="color-yellow"><?php echo $support_email; ?></b> .</p>

							<img class="img-fluid mx-auto d-block" width="200" src="../statics/img/email.png" alt="">

							<p class="py-3 py-md-5 text-center">If you have any questions or you need our help, we're right here, by your side. Contact us <br> via email at <b class="color-yellow"><?php echo $support_email; ?></b> .</p>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section>
			<div class="container my-3 my-md-5">
				<div class="row">
					<div class="col-12">
						<div class="card my-5">
							<h2 class="text-center py-5 mt-4 color-gray"><b>This is our short how-to-easily-refund list for the steps you must follow:</b></h2>

							<div class="px-md-5 px-md-5 mx-md-5 mx-sm-2 px-3">
								<p class="text-center"><b>1.</b> Make sure you are still in the 60-days period that follows the day the order has been shipped to you. You can find the date on the package or in your inbox.</p> 
								<p class="text-center"><b>2.</b> Send the supplement bottles back to us at: 19655 E 35th Dr #100, Aurora, CO 80011, USA.</p> 
								<p class="text-center pb-3"><b>3.</b> Be patient, we will process your refund in no time after we get your package... and, rest assured, we send you an email to let you know it has been done.</p> 

							</div>              
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