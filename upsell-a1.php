<!DOCTYPE html>
<html lang="en">
<head>
	<?php
	include("config.php");
	
        // used by sales pixels
	$products_string = $product["up"]["codename"];
	
	$page_title = $product_name. " - Order Upgrade";
	$page_type="upsell";
	$yes_link = $upsell1_yes;
	$no_link = $upsell1_no;
	include($root_folder."/blocks/header.php");
	?>
	<style>
	HR{
		border:solid 2px black;
		width:10%;
	}
	
    .review .review-stars
    {
		height: 30px;
		position: relative;
		top: -50px;
		left: -20px;
    }
	.review .review-avatar
    {
        left: 50%;
   		transform: translate(-50%, -50%);
        width:100px;
    }
	.review .review-comment
	{
		background-color:#FFFFFF;
		filter: drop-shadow(0 0 2rem rgb(0,0,0,0.2));
	}
	.danger {
		left: 50%;
		top: 5%;
		transform: translate(-50%, -100%);
	}
	@media (min-width: 748px) {
		.danger {
			left: 50%;
			top: 10%;
			transform: translate(-50%, -100%);
		}
    }

    @media screen 
  	and (min-device-width: 1200px) 
  	and (-webkit-min-device-pixel-ratio: 1) {
  		.main-product{
    		width: 100%!important;
    	} 
	}

	/* ----------- Retina Screens ----------- */
	@media screen 
	  and (min-device-width: 1200px) 
	  and (-webkit-min-device-pixel-ratio: 2)
	  and (min-resolution: 192dpi) { 
	  	.main-product{
    		width: 100%!important;
    	} 
	}

   
</style>
</head>
<body>
	<?php /* ----------------- START OF PAGE ----------------- */ ?>
	
	<div class="container">
		<div class="row d-none d-md-flex py-3">
			<div class="col">
				<img src="./statics/img/upsell_header.png" style="width:100%;">
			</div>
		</div>
		<div class="row d-none d-md-flex mx-md-5">
			<div class="col text-center py-3">
				Order Approved & Ready to Ship
			</div>
			<div class="col text-center text-uppercase py-3">
				<b class="accent-light">Exclusive VIP Offer</b>
			</div>
			<div class="col text-center text-uppercase py-3">
				Final Order Confirmation
			</div>
		</div>
		<div class="row mx-md-5">
			<div class="col">
				<h1 class="py-md-3 text-center bold accent-light"><b>Wait!</b></h1>
				
				<h1 class="py-md-3 text-center bold d-none d-md-block">
					A Special Deal for New Clients ONLY!<br class="d-none d-md-inline-block">
					<span class="accent-light">Save $<?php echo $product["up"]["save"]?></span> By Adding <?php echo $product["up"]["pack"]?> MORE Neuro Calm Pro To Your Order
				</h1>
				
				<h1 class="py-md-3 text-center bold d-none d-md-block">
					For Just <s class="accent-hard">$<?php echo $product["fe"]["per_bottle"]?></s> <span class="accent-light">$<?php echo $product["up"]["per_bottle"]?> Per Bottle!</span>
				</h1>

				<h2 class="py-md-3 text-center bold d-block d-md-none">
					A Special Deal for New Clients ONLY!<br class="d-none d-md-inline-block">
					<span class="accent-light">Save $<?php echo $product["up"]["save"]?></span> By Adding <?php echo $product["up"]["pack"]?> MORE Neuro Calm Pro<br>To Your Order
				</h2>
				
				<h2 class="py-md-3 text-center bold d-block d-md-none">
					For Just <s class="accent-hard">$<?php echo $product["fe"]["per_bottle"]?></s> <span class="accent-light">$<?php echo $product["up"]["per_bottle"]?> Per Bottle!</span>
				</h2>
				
				<hr class="d-block mx-auto">
				
				<p class="py-md-3 text-center">
					<span class="accent-light">PLUS:</span> <b>Claim Your Exclusive FREE VIP BONUS UPGRADE<br></b>
					(<s class="accent-hard">$199/hour</s> <b>YOURS FREE</b>)
				</p>
			</div>
		</div>
	</div>

	<div class="container" style="border-radius:30px; background: linear-gradient(0deg, rgba(255,254,255,0)  0%, rgb(206,235,237) 100%)">
		<div class="py-4"></div>
			<div class="row mx-md-4 px-2">
				<div class="col">
					<div class="row d-none d-md-block">
						<div>
							<img class="avatar img-fluid" src="<?= $avatar;?>">
						</div>
						<div class="align-self-center">
							<p><b>Hey, Gerard Watson here...</b></p>
						</div>
					</div>   	
					<div class="row d-md-none d-block">
						<div>
							<img class="avatar img-fluid mx-auto d-block" src="<?= $avatar;?>">
						</div>
						<div class="text-center">
							<p><b>Hey, Gerard Watson here...</b></p>
						</div>
					</div>				  
					<p class="py-3">
						And now that you've invested in your health with the revolutionary Neuro Calm Protocol…
						The changes you will experience will be nothing short of miraculous:
						The scientifically designed sound therapy sessions together with the Neuro Calm Pro supplement will help you truly relax, while offering a much-needed nerve-soothing sensation…
						You can finally take a deep breath and enjoy the moments of perfect silence you longed for…
						And even sleep like a baby throughout the night, without any fear in the world...
						From this day on - you can finally  begin to live life like you truly deserve it:
						Happy, calm and relaxed…
						Even in the noisiest of environments! 
					</p>	
					<p>
						<b>So you didn't just buy a product, you’ve just changed your life. And I mean it.</b>
					</p>
				</div>
			</div>
		</div>
	</div>

	<p class="py-3"></p>
	<div class="container review">
		<div class="py-4"></div>
			<div class="row">
				<div class="col-12 col-md-4">
					<div class="container position-relative">
						<div class="row ">
							<div class="col"></div>
								<div class="col d-flex py-3">
									<img class="align-self-center review-stars d-md-block d-none" src="./statics/img/review_stars.png">
								</div>
								<div class="col">
								</div>
							</div>
							<div class="row review-comment">
								<div class="col">
									<img src="./statics/img/comment1.png" class="position-absolute review-avatar">
									<div class="py-4"></div>
									<p class="text-center pt-3" >
										<b>Sarah Meyer, 58</b> <br>
										Kentucky
									</p>
									<img class="align-self-center d-md-none d-block mx-auto" src="./statics/img/review_stars.png" width="100">


									<p class="text-center py-2" style="font-size:20px;">
										<i>
											It was my daughter who insisted I give this a try and we argued a lot.
											Well, I guess it’s true what they say…children are smarter than their parents. Now, It’s like a curse has been lifted - my hearing is perfect, I am more relaxed and feel excellent. I am truly blessed! Thank you for changing my life.
										</i>
										<div class="py-4"></div>
										<div class="py-md-4"></div>
									</p>
								</div>
							</div>
						</div>
    				</div>

					<div class="col-12 col-md-4">
						<div class="container position-relative">
							<div class="row ">
								<div class="col">
								</div>
								<div class="col d-flex py-3">
									<img class="align-self-center review-stars d-md-block d-none" src="./statics/img/review_stars.png">
								</div>
								<div class="col">
								</div>
							</div>
							<div class="row review-comment">
								<div class="col">
									<img src="./statics/img/comment5.png" class="position-absolute review-avatar">
									<div class="py-4"></div>
									<p class="text-center pt-3" >
										<b>Jeremy Seaton, 45</b> <br> Pennsylvania
									</p>
									<img class="align-self-center d-md-none d-block mx-auto" src="./statics/img/review_stars.png" width="100">

									
									<p class="text-center py-2" style="font-size:20px;">
										<i>
											Seeing this sound therapy and pill exist, it feels like a miracle… I felt miserable, but now I feel truly happy. Life is amazing now, and so is your magical product! Thank you!
										</i>
									</p>
								</div>
							</div>
						</div>
					</div>

					<div class="col-12 col-md-4">
						<div class="container position-relative">
							<div class="row ">
								<div class="col">
								</div>
								<div class="col d-flex py-3">
									<img class="align-self-center review-stars d-md-block d-none" src="./statics/img/review_stars.png">
								</div>
								<div class="col">
								</div>
							</div>
							<div class="row review-comment">
								<div class="col">
									<img src="./statics/img/comment6.png" class="position-absolute review-avatar">
									<div class="py-4"></div>

									<p class="text-center pt-3">
										<b>Valerie Turner, 60</b><br>Detroit
									</p>
									<img class="align-self-center d-md-none d-block mx-auto" src="./statics/img/review_stars.png" width="100">
								
									<p class="text-center py-2" style="font-size:20px;">
										<i>
											I was stuck with hearing aids to stifle the sounds. Now, my husband can't believe I understand everything he says and can even answer questions from another room. This is like nothing else I’ve tried before. I have nothing to complain about and will highly recommend this to anyone out there!
										</i>
										<div class="py-4"></div>
										<div class="py-md-3"></div>
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row px-2">
					<div class="col">
						<div class="py-4"></div>
						<p class="py-3">
							There isn't a single aspect of your life that won't get better: 
							The effects of the sound therapy sessions and the <b>natural</b> and <b>powerful ingredients</b> of Neuro Calm Pro will truly begin to restore your confidence and independence.
						</p>
						<div class="py-4"></div>
						<div class="py-4"></div>
					</div>
				</div>
			</div>
			
			
			<div class="container position-relative" style="border-radius:30px; background: linear-gradient(0deg, rgba(255,254,255,0) 0%, rgba(216,46,61,1) 100%); border-top:solid 10px #B74040">
				<img src="./statics/img/danger.png" class="img-fluid position-absolute danger" width="200" >
				<div class="row px-2">
					<div class="col">
						<div class="py-4"></div>
						<div class="py-4"></div>

						<h2 class="bold text-center accent-hard-contrast py-4">
							But, There Is Something Very Dangerous And Very Tragic That Could Prevent You From See Any Success With This Program:
						</h2>
					</div>
				</div>
				<div class="row mx-md-5 px-2">
					<div class="col">
						<p>
							No matter how good and effective Neuro Calm Pro is… <br>
							If you stop halfway through and interrupt your body from getting all the necessary nerve and hearing supporting ingredients…
							You could sabotage EVERYTHING you’ve worked for…
						</p>
						<p>
							Yes, <?php echo $product["up"]["pack"]?> bottles of Neuro Calm Pro will begin to help and actually make a difference that you will feel… <br>
							There’s no doubt about that!
						</p>
						<p class="py-3">
							<b>But, there’s a huge problem that could stop all your gains:</b>
						</p>
						<p>
							After running dozens of tests and consulting from top international ear and hearing experts… <br>
							We’ve discovered that in 87% of the cases… <br>
							The body needs MORE TIME to take full advantage of all the plant extracts needed to maintain a healthy, lasting hearing.
						</p>
					</div>
				</div>
			</div>
			<div class="py-4"></div>
			<div class="container">
				<div class="row px-2">
					<div class="col ">
						<p class="text-center">
							Imagine this:
						</p>
						<h1 class="text-center bold">
							What Could Happen To Your Ears and Brain<br>
							<span class="accent-hard">If You’re Out Of Neuro Calm Pro</span><br>
							In The Middle Of The Treatment?
						</h1>
						<div class="py-4"></div>
						<!--p style="display:none">
							Imagine finally enjoying your moments of silence… <br>
							And then, all of a sudden… THE HISSING, THE RINGING… THE SWOOSHING, THE PAIN AND THE SUFFERING COME BACK WITH A VENGEANCE! <br>
							The protection is gone and a doctor’s appointment will be practically inevitable, costing $700…$900...or even $4000… Not to mention the pain….
						</p-->
						<div class="py-4"></div>
						<p>
							<b>How would you feel then? </b><br>
							So why risk everything and stop in the middle magic when you don’t have to?
						</p>

						<p>
							That is why, I want to give you this <b>one-time opportunity to add <?php echo $product["up"]["pack"]?> more bottles of Neuro Calm Pro</b> to your order…
						</p>
					</div>
				</div>
			</div>
			<div class="py-4"></div>

			<div class="container" style=" border-radius:30px; background:rgb(206,235,237) ;">
				<div class="row mx-md-5 px-2">
					<div class="col">
						<div class="py-4"></div>
						<h1 class="text-center bold py-4">
							ADD <?php echo $product["up"]["pack"]?> More Bottles<br>
							For Just <s class="accent-hard">$<?php echo $product["fe"]["per_bottle"]?></s> <span class="accent-light">$<?php echo $product["up"]["per_bottle"]?> Per Bottle</span>
						</h1>
						<div class="py-4"></div>		
						<img class="d-none d-md-block img-fluid mx-auto" style="width:60%!important;" src="<?php echo $product["up"]["image"]?>" >
						<img class="d-block d-md-none img-fluid mx-auto main-product" style="width:60%!important;" src="<?php echo $product["up"]["image"]?>" >
						<div class="py-4"></div>
					</div>
				</div>
				<div class="row">
					<div class="col"></div>
					<div class="col-auto" >
    					<div class="align-self-center px-3 px-md-5">
            				<div class="row flex-nowrap py-1">
            					<div class="col-1 mr-3">
            						<img src="./statics/img/check-ts.png"  style="width:40px">
            					</div>
            					<div class="col-10 col-md-auto">
            						<p>
										Support your hearing health
									</p>
            					</div>
            				</div>

							<div class="row flex-nowrap py-1">
            					<div class="col-1 mr-3">
            						<img src="./statics/img/check-ts.png" style="width:40px">
            					</div>
            					<div class="col-10 col-md-auto">
            						<p>
										Maintain optimal nerve function
									</p>
            					</div>
            				</div>

							<div class="row flex-nowrap py-1">
            					<div class="col-1 mr-3">
            						<img src="./statics/img/check-ts.png" style="width:40px">
            					</div>
            					<div class="col-10 col-md-auto">
            						<p>
										Achieve piece of mind
									</p>
            					</div>
            				</div>
            				
        				</div>
        				<p class="py-3"></p>
					</div>
					<div class="col"></div>
				</div>
			</div>

			<div class="container position-relative" >
				<img src="./statics/img/free-shipping.png" class="img-fluid position-absolute d-none d-md-block mx-auto" width="300" style="bottom: -24%; left: 15%;" alt="">
				<img src="./statics/img/60daysbadge.png" class="img-fluid position-absolute d-none d-none d-md-block mx-auto" width="280" style="bottom: -24%; right: 15%;" alt="">

				<div class="row mx-md-5 px-2" style="border-radius:30px; background:url(./statics/img/up-bg.png) no-repeat; background-size: 100% 100%;">
					<div class="col mx-md-3">
						<div class="py-4"></div>
						<p class="text-center">
							There you have it: <br>
							Some of the reasons why on this page only, and today only, I’m offering you the absolute very <b>BEST DEAL</b> you’ll ever see to stock up on <b>Neuro Calm Pro.</b>
						</p>

						<p class="text-center">
							This ultimate order upgrade is the one and only way to secure yourself the largest savings possible along with the tremendous convenience and security that comes with picking up your ample supply of Neuro Calm Pro. Oh, and I can’t forget to mention something very important- <b>Your Shipping is 100% FREE anywhere in the US!</b> And of course, you are always protected by our <b>60 DAY Iron-Clad 100% Money Back Guarantee</b>, so you have nothing to lose and just a whole lot of savings to enjoy today!
						</p>
						<div class="py-4"></div>
						<div class="py-md-4"></div>
						<img src="./statics/img/free-shipping.png" class="img-fluid d-block d-md-none mx-auto" width="300" alt="">
						<img src="./statics/img/60daysbadge.png" class="img-fluid d-block d-md-none mx-auto" width="280"  alt="">
						<div class="py-4"></div>

					</div>
				</div>
				<div class="row">
					<div class="col">
						
					</div>
				</div>
			</div>

			<div class="py-4"></div>
			<div class="py-md-4"></div>
			<div class="py-md-4"></div>
			<div class="py-md-5"></div>


			<div class="container" style="border-radius:30px; background: linear-gradient(0deg, rgba(255,254,255,0)  0%, rgb(206,235,237) 100%)">
				<div class="row mx-md-4">
					<div class="col">
						<div class="py-4"></div>
						<h2 class="text-center py-4">
							And since you've already invested in Neuro Calm Pro...
						</h2>

						<h2 class="text-center py-4">
							<b>
								We're able to offer you an exclusive VIP BONUS upgrade. <br> Free of charge. <br>
								<span class="accent-light">Your Bonus Upgrade: VIP "Bedside" Customer Service Status</span> <br>
								(<s>$199/hour</s> YOURS FREE)
							</b>
						</h2>
						<div class="py-4"></div>
						<p>
							As you've seen, Neuro Calm Pro is free of any risk. <br>
							But you know that sometimes you have good days... and sometimes bad days.... <br>
							Call this a "just in case" insurance for any problem that may arise:
						</p>
						<p>
							<b>You'll be upgraded to my VIP "bedside" customer service status, so you can get ALL your questions answered by my own team of experts...</b>
						</p>
						<p>
							VIP concierge customer service means that my expert medical team will answer any questions IMMEDIATELY... <br>
							And to ensure you're 100% satisfied, if there is any question my team can't handle… <br>
							I will PERSONALLY respond to you with an answer.
						</p>
						<p>
							Take advantage of this unprecedented opportunity to upgrade your Neuro Calm Pro order below!
						</p>
						<div class="py-4"></div>
						<p class="text-center">
							And as mentioned,
						</p>
					</div>
				</div>
				<div class="row mx-md-4">
					<div class="col-12 col-md-4">
						<div class="py-4"></div>
						<img src="./statics/img/truck.png" class="img-fluid d-block mx-auto" alt="">
						<div class="py-4"></div>

						<h2 class="text-center">
							<b>Your Shipping <br> is 100% FREE</b>
						</h2>
					</div>
					<div class="col-12 col-md-4">
						<div class="py-4"></div>
						<img src="./statics/img/satifaction-guarant.png" class="img-fluid d-block mx-auto" style="height:70px;" alt="">
						<div class="py-3"></div>

						<h2 class="text-center">
							<b>Your Satisfaction is <br> 100% GUARANTEED</b>
						</h2>
					</div>
					<div class="col-12 col-md-4">
						<div class="py-4"></div>
						<img src="./statics/img/truck.png" class="img-fluid d-block mx-auto" alt="">
						<div class="py-4"></div>

						<h2 class="text-center">
							<b>Your order is <br> 100% SECURE</b>
						</h2>
					</div>
				</div>
			</div>
			<div class="py-4"></div>
			<div class="py-md-4"></div>

			<div class="container">
				<div class="row px-2">
					<div class="col">
						<h1 class="text-center accent-light bold headline py-4">YES! </h1>
						<h1 class="text-center bold">
							<span class="accent-light">I WANT TO UPGRADE MY ORDER!</span><br>
							Add <?php echo $product["up"]["pack"]?> MORE Bottles Of <?php echo $product_name;?> To My Order For<br>
							Just $<?php echo $product["up"]["price"]?> ($<?php echo $product["up"]["per_bottle"]?>/Bottle) And Save Me $<?php echo $product["up"]["save"]?>!!
						</h1>

						<p class="text-center">
							<img class="img-fluid mx-auto d-block py-3" src="<?php echo $product["up"]["image"]?>" style="width: 50%";>				
						</p>
						<div>
							<div class="py-4"></div>

							<h3 class="text-center accent-light">Add now to your current order for<b> $<?php echo $product["up"]["price"]?></b></h3>
							<div class="py-4"></div>
							<!-- <p class="accent-light text-center"><b>Add now to your current order for $<?php echo $product["up"]["price"]?></b></p> -->
							<?php include("blocks/upsell_action.php")?>
							<img src="./statics/img/cards.png" class="img-fluid d-block mx-auto" alt="">

						</div>
						
						<div class="py-4"></div>
						<h1 class="text-center bold py-4">
							Just remember, this is a one-time-only offer and will no longer be available once you leave this page.
						</h1>
						<p>
							This is only for those who understand the value of dramatically accelerating their results NOT FOR JUST ONE MONTH, BUT FOR MANY YEARS TO COME.
						</p>
					</div>
				</div>
			</div>
			<div class="py-4"></div>

			<div class="container py-4">
				<div class="row mx-md-5 px-2">
					<div class="col  mx-md-5">
						<div class="row py" style="border-radius:30px;background-color:#E2E2E2;">
							<div class="col px-md-4">
								<p class="py-4">
									<img src="./statics/img/comment7.png" class="d-none d-md-inline-block" style="width:100px;vertical-align:middle">
									<img src="./statics/img/comment7.png" class="d-inline-block d-md-none" style="width:50px;vertical-align:middle">
									<b class="px-2">
										Jenna T.
									</b>
								</p>
								<p>
									<img src="./statics/img/review_stars_light.png"></br>

									<small class="text-muted">
									Reviewed in the United States on <?= $date3; ?>
									</small>
							</p>
							<p class="py-2 bold" style="color:#f5793d">
								Verified Purchase
							</p>
							<p class="py-2">
								<i>"I just ordered 6 more bottles of Neuro Calm Pro. I save a lot and I do not want to run out of this great stuff."</i>
							</p>
						</div>
					</div>
					<p class="py-2"></p>
					<div class="row py" style="border-radius:30px;background-color:#E2E2E2;">
							<div class="col px-md-4">
								<p class="py-4">
									<img src="./statics/img/comment8.png" class="d-none d-md-inline-block" style="width:100px;vertical-align:middle">
									<img src="./statics/img/comment8.png" class="d-inline-block d-md-none" style="width:50px;vertical-align:middle">
									<b class="px-2">
										James O.
									</b>
								</p>
								<p>
									<img src="./statics/img/review_stars_light.png"></br>

									<small class="text-muted">
										Reviewed in the United States on <?= $date2; ?>
									</small>
							</p>
							<p class="py-2 bold" style="color:#f5793d">
								Verified Purchase
							</p>
							<p class="py-2">
								<i>“I really love this product. It exceeded my expectations and then some!”</i>
							</p>
						</div>
				</div>
				<p class="py-2"></p>
				<div class="row py" style="border-radius:30px;background-color:#E2E2E2;">
					<div class="col px-md-4">
						<p class="py-4">
							<img src="./statics/img/comment9.png" class="d-none d-md-inline-block" style="width:100px;vertical-align:middle">
							<img src="./statics/img/comment9.png" class="d-inline-block d-md-none" style="width:50px;vertical-align:middle">
							<b class="px-2">
								Marcy W.
							</b>
						</p>
						<p>
							<img src="./statics/img/review_stars_light.png"></br>

							<small class="text-muted">
								Reviewed in the United States on <?= $date1; ?>
							</small>
						</p>
						<p class="py-2 bold" style="color:#f5793d">
							Verified Purchase
						</p>
						<p class="py-2">
							<i>“A game-changer, indeed! This saved me from a very expensive hearing operation!”</i>
						</p>
					</div>
				</div>
			</div>
		</div>
			</div>
			</div>

	<div class="container">
		<div class="row px-2">
			<div class="col">
				<h1 class="py-4 text-center bold accent-light">	
					BUT YOU NEED TO ACT NOW! <br>
					IT’S THE ONLY WAY SECURE YOUR PACKAGE  <br> WHILE SUPPLIES LAST! 
				</h1>
			</div>
		</div>
	</div>

	<div class="container" style=" border-radius:30px; background: linear-gradient(0deg, rgba(255,254,255,0)  0%, rgb(206,235,237) 100%);">
		<div class="row mx-md-5 px-2">
			<div class="col">
				<div class="py-4"></div>
					<h1 class="text-center bold py-4 d-none d-md-block">
						EVEN MORE ADVANTAGES OF SECURING NOW YOUR <?php echo $product["up"]["pack"]?> EXTRA BOTTLES OF Neuro Calm Pro!
					</h1>
					<h2 class="text-center bold py-4 d-block d-md-none">
						EVEN MORE ADVANTAGES OF SECURING NOW YOUR <?php echo $product["up"]["pack"]?> EXTRA BOTTLES OF Neuro Calm Pro!
					</h2>
					<div class="py-4"></div>							
				</div>
			</div>
			<div class="row">
				<div class="col"></div>
				<div class="col-auto" >
    				<div class="align-self-center px-3 px-md-5">
            			<div class="row flex-nowrap py-1">
            				<div class="col-1 mr-3">
            					<img src="./statics/img/check-ts.png"  style="width:40px">
            				</div>
            				<div class="col-10 col-md-auto">
            					<p>
									Enjoy added protection against dangerous memory disorders
								</p>
            				</div>
            			</div>

						<div class="row flex-nowrap py-1">
            				<div class="col-1 mr-3">
            					<img src="./statics/img/check-ts.png" style="width:40px">
            				</div>
            				<div class="col-10 col-md-auto">
            					<p>
									Support the wellbeing of your brain
								</p>
            				</div>
            			</div>

						<div class="row flex-nowrap py-1">
            				<div class="col-1 mr-3">
            					<img src="./statics/img/check-ts.png" style="width:40px">
            				</div>
            				<div class="col-10 col-md-auto">
            					<p>
									Never worry about spending money on hearing aids
								</p>
            				</div>
            			</div>

						<div class="row flex-nowrap py-1">
            				<div class="col-1 mr-3">
            					<img src="./statics/img/check-ts.png" style="width:40px">
            				</div>
            				<div class="col-10 col-md-auto">
            					<p>
									Naturally support the normal functioning of your hearing for years to come
								</p>
            				</div>
            			</div>
            				
        			</div>
        			<p class="py-4"></p>
				</div>
				<div class="col"></div>
			</div>
		</div>
	</div>
	<div class="py-4"></div>
	<div class="container">
		<div class="row px-2">
			<div class="col">
				<h1 class="py-4 text-center bold">
					So go ahead and click the Add to Order button <br> right now for instant access.
				</h1>
				<p class="py-4">
					This health investment will pay for itself a hundred times over when used properly.<br class="d-none d-md-inline-block">
					And that's probably an understatement.<br class="d-none d-md-inline-block">
					It's literally that powerful! <br class="d-none d-md-inline-block">
					This decision about whether to get more of the amazing Neuro Calm Pro, could make or break your success with the entire program.
				</p>
			</div>
		</div>
	</div>
	<div class="container" style="border-radius:30px; background: linear-gradient(0deg, rgba(255,254,255,0)  0%, rgb(206,235,237) 100%);">
		<div class="row mx-md-5 px-2">
			<div class="col">
				<h1 class="text-center accent-light bold pt-5">
					<span class="headline">YES!</span><br>
					I WANT TO UPGRADE MY ORDER!
				</h1>
				<h1 class="text-center bold py-4">
					Add <?php echo $product["up"]["pack"]?> MORE Bottles Of <?php echo $product_name;?> To My Order For<br>
					Just $<?php echo $product["up"]["price"]?> ($<?php echo $product["up"]["per_bottle"]?>/Bottle) And Save Me $<?php echo $product["up"]["save"]?>!!
				</h1>
				<div class="text-center">
					<img class="img-fluid mx-auto d-block main-product" style="width:60%!important" src="<?php echo $product["up"]["image"]?>">
					<div>
						<!-- <p class="accent-light text-center"><b>Add now to your current order for $<?php echo $product["up"]["price"]?></b></p> -->
						<div class="py-4"></div>
						<?php include("blocks/upsell_action.php")?>
						<img src="./statics/img/cards.png" class="img-fluid d-block mx-auto" alt="">

					</div>
					
					
				</div>
			</div>
		</div>
	</div>

	<p class="py-4"></p>

<?php /* ----------------- END OF PAGE ----------------- */ ?>

<?php 
include($root_folder."/pixels/conversion_pixels.php");
include($root_folder."/pixels/sale_pixels.php")
?>
<footer>
	<?php include($root_folder."/blocks/footer.php");?>
</footer>
<?php include($root_folder."/pixels/tracking_body_pixels.php")?>
</body>
</html>