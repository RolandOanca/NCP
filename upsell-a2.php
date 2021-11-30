<!DOCTYPE html>
<html lang="en">
<head>
	<?php
	
	include("config.php");
	
        // used by sales pixels
	$products_string = $product["down"]["codename"];
	
	$page_title = $product_name. " - Order Upgrade";
	$page_type="upsell";
	$yes_link = $downsell1_yes;
	$no_link = $downsell1_no;
	include($root_folder."/blocks/header.php");
	
	?>
</head>
<body>
	<?php /* ----------------- START OF PAGE ----------------- */ ?>
	
	<div class="container">
		<div class="row mx-md-5 px-2">
			<div class="col">
				<div class="py-4"></div>
				<h1 class="py-4 text-center bold accent-light">
					FINAL CHANCE
				</h1>
				<div class="py-2"></div>
				<h1 class="py-1 text-center bold">
					To Add MORE To Your Order! <br class="d-none d-md-inline-block">
					Maybe <?php echo $product["up"]["pack"]?> Bottles Was <span>A Little Too Much</span>?
				</h1>
				<p class="text-center">
					No Sweat - Take Advantage And Pick Up Just <?php echo $product["down"]["pack"]?> Additional Bottles <br />
					At The Same Outrageous Price of <span class="accent-light">$<?php echo $product["down"]["per_bottle"]?>/bottle</span>
				</p>
				<p class="py-3"></p>

				<!-- <p class="text-center py-5">
					<img class="d-none d-md-inline-block" src="<?php echo $product["down"]["image"]?>" style="max-width:50%">
					<img class="d-inline-block d-md-none" src="<?php echo $product["down"]["image"]?>" style="max-width:100%;">
				</p> -->


				<p>
					Look I can understand that upgrading to <?php echo $product["up"]["pack"]?> additional bottles may be a little much for some folks...<br>
					Yet I'd still like to give you the opportunity to secure  <?php echo $product["down"]["pack"]?>  additional bottles at our all-time lowest price ever of just <span class="bold">$<?php echo $product["down"]["per_bottle"]?> per bottle.</span><br>
					That still amounts to the same unbelievable savings of $70 per bottle. <br>
					Unfortunately, within just days of running out of Neuro Calm Pro, ALL of the amazing results you experience with this breakthrough product begin to decline.

				</p>
	
				<p class="bold py-4">
					And I do not want to see that happen to you!
				</p>
			</div>
		</div>
	</div>
	<div class="container" style="border-radius:30px; background: linear-gradient(0deg, rgba(255,254,255,0) 0%, rgb(206,235,237) 100%)">
		<div class="row mx-md-5 px-2">
			<div class="col">
				<p class="text-center py-5">
					<img class="d-none d-md-inline-block" src="<?php echo $product["down"]["image"]?>" style="max-width:30%">
					<img class="d-inline-block d-md-none" src="<?php echo $product["down"]["image"]?>" style="max-width:50%;">
				</p>
				<p class="text-center py-4 bold">
					Add <?php echo $product["down"]["pack"]?> MORE BOTTLES (<?php echo $product["down"]["days"]?> DAY SUPPLY) For Just $<?php echo $product["down"]["price"]?>
				</p>
				
				<div>
					<div class="py-3"></div>
					<!-- <p class="accent-light text-center"><b>Add now to your current order for $<?php echo $product["down"]["price"]?></b></p> -->
					<?php include("blocks/upsell_action.php")?>
				</div>
			</div>
		</div>
	</div>
	
	<div class="container">
		<div class="row mx-md-5 px-2">
			<div class="col">
			
				<p class="py-3"></p>
				<p>
					The fact is if you want to continue experiencing all of the <b>wonderful benefits</b> this <b>health-transforming solution</b> provides you, you must continue taking it each and every day.
					And that’s exactly why I’m offering you this final opportunity to stock up at
					our <b>lowest price ever</b> right now…
				</p>
				<h2 class="bold accent-light">
					And I will also be providing you with 100% FREE SHIPPING!
				</h2>
				<p>
					I want to eliminate your risk of coming back to reorder later when we’re out of stock, and I want you to avoid the disappointment of having to pay much higher prices (plus shipping fees) later.
				</p>
				<h1 class="text-center py-4 bold">
					<span class="accent-light">BE AWARE:</span><br>
					This is your final opportunity to upgrade your order.
				</h1>
				<p>
					Click the <b>"Yes! Add An Additional <?php echo $product["down"]["pack"]?> Bottles Of <span class="text-uppercase">Neuro Calm Pro To My Order!</b> link below to secure our all-time lowest price ever and receive <b>100% FREE SHIPPING!</b>
				</p>
			</div>
		</div>
	</div>
	<div class="container" style="border-radius:30px; background: linear-gradient(0deg, rgba(255,254,255,0) 0%, rgb(206,235,237) 100%)">
		<div class="row mx-md-5 px-2">
			<div class="col">
				
				<div class="row">
					<div class="col">
					<div class="py-4"></div>
						<h1 class="text-center bold py-4 accent-light">
							YES!<br>
							I WANT TO ADD MORE<br> 
							TO MY ORDER!
						</h1>
						<p class="py-5 text-center bold">
							Add <?php echo $product["down"]["pack"]?> MORE Bottles Of <?php echo $product_name;?> To My Order For<br>
							Just $<?php echo $product["down"]["price"]?> ($<?php echo $product["down"]["per_bottle"]?>/Bottle) And Save Me $<?php echo $product["down"]["save"]?>!!
						</p>
					</div>
				</div>
				<div class="row">
					<div class="col" style="background:url(./statics/img/discount_per_bottle.png) no-repeat, url(<?php echo $product["down"]["image"]?>) no-repeat; background-size: 200px auto,contain;background-position: 60% 30%,50% 50%;">
						
						<p class="py-5 d-none d-md-block"></p>
						<p class="py-5 "></p>
						<p class="py-5 "></p>
						<p class="py-2"></p>
					</div>
				</div>
				
				<div class="row">
					<div class="col">
						<div>
							<div class="py-3"></div>
							<h3 class="text-center ">Add now to your current order for <b class="accent-light">$<?php echo $product["down"]["price"]?></b></h3>
							<div class="py-4"></div>
							<!-- <p class="accent-light text-center"><b>Add now to your current order for $<?php echo $product["down"]["price"]?></b></p> -->
							<?php include("blocks/upsell_action.php")?>
							<img src="./statics/img/cards.png" class="img-fluid d-block mx-auto" alt="">

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<p class="py-4"></p>
	<?php /* ----------------- END OF PAGE ----------------- */ ?>
	
	<?php
	include("pixels/sale_pixels.php")
	?>
	
	<footer>
		<?php 
		include($root_folder."/blocks/footer.php");
		?>
	</footer>
	<?php include($root_folder."/pixels/tracking_body_pixels.php")?>
</body>
</html>