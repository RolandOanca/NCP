<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
        include("config.php");
        
        // used by sales pixels
        $products_string = "1,2,3";
        
        $page_title = $product_name. " - Text Presentation";
        $page_type="sale";
        include($root_folder."/blocks/header.php");
        
    ?>
    <style>
    /* only page speciffic css here */
    HR{
        border:solid 2px black;
        width:20%;
    }
    @media (min-width: 748px) {
        .money-back-card
        {
            background:url(./statics/img/money_back_background.png);
            background-size:100% 100%;
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
    	<div class="row mx-md-4">
			<div class="col">
				<p class="py-md-2"></p>
				<h1 class="text-center py-3"><b class="bold">One Revolutionary Way To Support <br> Your Hearing Health!</b></h1>
			</div>
		</div>
	</div>

	<div class="container" style=" border-radius:30px; background:#ceebed;">
    	<div class="row mx-md-5">
			<div class="col">
				<div class="py-4"></div>
				<div class="d-md-flex d-none">
					<img class="avatar d-inline-flex" src="<?= $avatar;?>">
					
					<h3 class="align-self-center">
						<b>
							Hi, <br>
							My name is Gerard Watson.
						</b>
					</h3>
				</div>

				<div class="d-block d-md-none">
					<img class="avatar d-block mx-auto" src="<?= $avatar;?>">
					
					<h3 class="text-center">
						<b>
							Hi, <br>
							My name is Gerard Watson.
						</b>
					</h3>
				</div>


				<div class="py-3"></div>
				<p>
					And I’ve been a long time researcher passionate to help people all over the world live better and spread awareness on how anyone can help support their healthy hearing.
				</p>
				<p>
					You see, according to the World Health Organisation 50% of hearing loss and impairment is avoidable with early detection, prevention and management.
				</p>
				<div class="py-4"></div>
			</div>
		</div>
	</div>

	<div class="py-4"></div>

	<div class="container">
		<div class="row">
			<div class="col-12">
				<h1 class="text-center py-3 d-none d-md-block">
					<b>
						My Life-time Vision Is That Of A World Where <br > Everybody Can Easily Support The Natural Health Of Their Hearing With ZERO COMPROMISES!
					</b>
				</h1>
				<h2 class="text-center py-3 d-block d-md-none">
					<b>
						My Life-time Vision Is That Of A World Where <br > Everybody Can Easily Support The Natural Health Of Their Hearing With ZERO COMPROMISES!
					</b>
				</h2>
				<div class="py-4"></div>
				<p>
					That’s why I’ve spent most of my research activity trying and testing various ways that could really make a positive impact on people’s lives.
				</p>
				<p class="mb-0">
					Now, after many trials, I’m prouds to say that I’ve perfect a simple, yet powerful formula, consisting of rare plants and herbs…
				</p>
				<p>
					Such as <b>Yam, Dong Quai, Black Cohosh Oat Grass, Pacific Kelp</b> and <b>Blessed Thistle…</b> <br>
					That combined with a special set of sound therapy techniques… <br>
					Could effectively help anyone support their healthy hearing.
				</p>
				<div class="py-4"></div>
				<div class="py-md-4"></div>
				<h2 class="text-center py-3">
					<b>We called it “Neuro Calm Protocol”</b>
				</h2>
				<p class="text-center">
					The only hearing health protocol in the world which combines the healing powers of the plants with the science of sound soothing therapies!
				</p>
			</div>
		</div>
	</div>

	<div class="py-4"></div>
	<div class="py-4"></div>
	<div class="py-md-4"></div>
	<div class="py-md-4"></div>
	<div class="py-md-4"></div>


    <div class="container" style=" border-radius:30px; background:linear-gradient(0deg, rgb(255,255,255) 0%, rgb(206,235,237) 100%); border-top: 20px solid #333277">
    	<div class="row mx-md-5">
			<div class="col">
				<div class="col-12 d-flex justify-content-center py-5">
					<img class="img-fluid mx-auto d-block d-md-none main-product" style="width:60%!important;" src="./statics/img/ncp-hero.png">
                	<img class="img-fluid mx-auto position-absolute d-none d-md-block" src="./statics/img/ncp-hero.png" style="max-width:500px;max-height:630px;transform: translateY(-37%);">
                </div>
			</div>
		</div>

		<div class="py-md-4"></div>
		<div class="py-md-4"></div>
		<div class="py-md-4"></div>
		<div class="py-md-4"></div>
		<div class="py-md-4"></div>
		<div class="py-md-4"></div>
		<div class="py-md-4"></div>
		<div class="py-md-4"></div>
	
		<div class="row mx-md-4">
			<div class="col">
				<div class="mx-md-5">
					<div class="d-md-flex d-none">
						<img src="./statics/img/check-ts.png" class="img-fluid mr-3" alt="">
						<h2 class="align-self-center">
							Anyone can safely use it immediately
						</h2>
					</div>
					<div class="d-md-none d-block">
						<img src="./statics/img/check-ts.png" class="img-fluid d-block mx-auto" alt="">
						<h2 class="text-center">
							Anyone can safely use it immediately
						</h2>
					</div>
					<div class="py-3"></div>
					<div class="d-md-flex d-none">
						<img src="./statics/img/check-ts.png" class="img-fluid mr-3" alt="">
						<h2 class="align-self-center">
							No need for any costly doctor appointments or expensive surgeries
						</h2>
					</div>
					<div class="d-md-none d-block">
						<img src="./statics/img/check-ts.png" class="img-fluid d-block mx-auto" alt="">
						<h2 class="text-center">
							No need for any costly doctor appointments or expensive surgeries
						</h2>
					</div>
					<div class="py-3"></div>
					<div class="d-md-flex d-none">
						<img src="./statics/img/check-ts.png" class="img-fluid mr-3"  alt="">
						<h2 class="align-self-center">
							Meets the highest standards and uses the latest hearing scientific advancements
						</h2>
					</div>
				</div>
				<div class="d-md-none d-block">
						<img src="./statics/img/check-ts.png" class="img-fluid d-block mx-auto" alt="">
						<h2 class="text-center">
							Meets the highest standards and uses the latest hearing scientific advancements
						</h2>
				</div>
				<div class="py-4"></div>

				<h1 class="text-center pt-3">
					<b>And you can get access to everything <br> in the next 90 seconds!</b>
				</h1>

				<h1 class="text-center accent-light">
					<b>For only $69</b>
				</h1>

				<div class="py-4"></div>

				<p>
					<b>But you know what?</b>
				</p>
				<p>
					I'm going to make the deal even sweeter. <br>
					I want to get this program out to as many people as possible… <br>
					So I’m not bothering with profits.
				</p>

				<div class="py-3"></div>

				<p>
					That’s why I've set up a discounted package system of <b>6 bottles of Neuro Calm Pro and the sound therapy protocol for you…</b> <br>
					For only $49 dollars per bottle, for a total of $294 which is being offered ONLY for as long as supplies last.
				</p>

				<div class="py-3"></div>

				<p>
					<b>You also get free shipping on us! </b> <br>
					But because this unique protocol works best only together with Neuro Calm Pro… <br>
					Once we run out of bottles, the "BUY NOW" buttons will not be active anymore until we make another batch again (which takes around 2-3 months at least).
				</p>

				<div class="py-4"></div>

				<h3 class="text-center accent-light d-block d-lg-none">
					<b>SO HURRY UP and CLICK THE 6-BOTTLE PACKAGE (or any other package that you want) TO SECURE YOUR ORDER!</b>
				</h3>
				<h1 class="text-center accent-light d-none d-lg-block">
					<b>SO HURRY UP and CLICK THE 6-BOTTLE PACKAGE (or any other package that you want) TO SECURE YOUR ORDER!</b>
				</h1>
				<p class="py-4"></p>
				<?php include("blocks/pricebox.php")?>
			</div>
		</div>
	</div>

	<div class="py-4"></div>
			
    <div class="container">
    	<div class="row mx-md-4">
			<div class="col">
				<p>
					Consider this the smallest, but most powerful hearing health investment that you have ever made for yourself!
                </p>

    			<h1 class="text-center bold py-4">
					You may be saying, “OK, this sounds amazing and I'm interested! <br>
					How do I get started?”
    			</h1>
     			
				<p>
					Choose the best package for you, and you'll end up on our secure checkout page. <br> 
					Enter your payment details, place the order... <br>
					And in a couple of short days from this moment, you'll get Neuro Calm Pro delivered to your home! <br>
					Also, you'll gain <b>immediate access</b> to the entire <b>Neuro Calm Sound Therapy Protocol</b>, the 30-Day Kick-start program, the “listening session” charts and the sound therapy sessions - which can be accessed right away from your computer, iPad or smartphone. <br>
					You can print, download and listen to anything you want, whenever you like.
				</p>

				<div class="py-4"></div>

				<h3 class="text-center accent-light py-4 d-block d-lg-none">
					<b>BUT CLICK NOW, IT’S THE ONLY WAY SECURE YOUR PACKAGE WHILE SUPPLIES LAST!</b>
				</h3>
				<h1 class="text-center accent-light py-4 d-none d-lg-block">
					<b>BUT CLICK NOW, IT’S THE ONLY WAY SECURE YOUR PACKAGE WHILE SUPPLIES LAST!</b>
				</h1>
				<p class="py-4"></p>
				<?php include("blocks/pricebox.php")?>
   			</div>
		</div>
    </div>

	<div class="py-4"></div>
    
    <div class="container d-none d-lg-block" style="border-radius:30px; background:url(./statics/img/money-back-bg.png) no-repeat; background-size:100% 100%;">
    	<div class="row mx-md-4">
			<div class="col-12 col-md-8">
				<p class="py-4"></p>
    			<h2 class="py-4" style="font-size:38px;">
					<b>You have 60-day <br> Money-Back Guarantee!</b>
        		</h2>
				<p>
					You have absolutely nothing to risk because you are also covered by our <b>60 Days "100% Healthy Or Money Back" Guarantee.</b> You have <b>2 whole months</b> to see if this is the right choice for you or not.
				</p>
				<div class="py-4"></div>

    		</div>
			<div class="col-12 col-md-4">
				<div class="py-4"></div>
				<div class="py-2"></div>

				<img src="./statics/img/60daysbadge.png" class="d-block mx-auto img-fluid" alt="">
			</div>
		</div>
    </div>
    
	<div class="container d-block d-lg-none" style="border-radius:30px; background-color:#CEEBED">
    	<div class="row mx-md-4">
			<div class="col-12 col-md-8">
				<p class="py-4"></p>
    			<h2 class="py-4" style="font-size:38px;">
					<b>You have 60-day <br> Money-Back Guarantee!</b>
        		</h2>
				<p>
					You have absolutely nothing to risk because you are also covered by our <b>60 Days "100% Healthy Or Money Back" Guarantee.</b> You have <b>2 whole months</b> to see if this is the right choice for you or not.
				</p>

    		</div>
			<div class="col-12 col-md-4">
				<div class="py-2"></div>

				<img src="./statics/img/60daysbadge.png" class="d-block mx-auto img-fluid" alt="">
				<div class="py-2"></div>
			</div>
		</div>
    </div>

	<div class="py-4"></div>
	<div class="py-md-4"></div>

	<div class="container" style=" border-radius:30px; background:#ceebed;">
		<div class="row mx-md-5">
			<div class="col">
    			<h1 class="text-center bold py-4">
					Just a safe and secure one-time simple payment.
    			</h1>
     			
     			<div class="row py-3">
    				<div class="col-md text-center px-md-5">
    					<h1 class=" bold py-4">
     						<span class="accent-light">NO</span> Subscription!
     					</h1>
    				</div>
    				<div class="col-md text-center px-md-5">
    					<h1 class=" bold  py-4">
     						<span class="accent-light">NO</span> Hidden Fees!
     					</h1>
    				</div>
    			</div>
   			</div>
		</div>
	</div>
	<div class="container" style=" border-radius:30px; background:linear-gradient(0deg, rgb(206,235,237) 0%, rgb(255,255,255) 100%); ">
		<div class="row mx-md-4">
			<div class="col">
				<div class="py-4"></div>
				<p>
					Make your choice by clicking below, enter your payment details on our secure order form, and place the order now. We will ship your bottles directly to your home.
				</p>

				<h2 class=" bold py-4">
					Remember! For each order of 3 and 6 bottles you will have a big discount, and every order comes with free shipping, no matter where you live.
    			</h2>
				<div class="py-4"></div>

				<h1 class="py-4 text-center accent-light">
					<b>I can’t wait to hear your success story <br> after trying the Neuro Calm Protocol!</b>
				</h1>

				<div class="py-4"></div>
				<div class="py-md-5"></div>
				<div class="py-md-5"></div>
				<div class="py-md-5"></div>
				<div class="py-md-5"></div>
			</div>
		</div>
	</div>
	
	<div class="container position-relative d-block d-lg-none" >
    	<div class="container" >
    		<div class="row">
    			<div class="col">
    				<p class="py-4"></p>
    				<?php include("blocks/pricebox.php")?>
    				<p class="py-3"></p>
    				<p style="font-size:24px;">
    					*For international shipping (outside of the United States), shipping fees will apply. Read more <a href="/help/shipping.php"><b>here.</b></a>
    				</p>
    				<br><br>
    			</div>
    		</div>
    	</div>
	</div>
	
	<div class="container position-relative d-none d-lg-block" style="height:750px;">
    	<div class="container position-absolute" style="top:-400px; heigth:400px;">
    		<div class="row">
    			<div class="col">
    				<p class="py-4" id="start-now"></p>
    				<?php include("blocks/pricebox.php")?>
    				<p class="py-3"></p>
    				<p style="font-size:24px;">
    					*For international shipping (outside of the United States), shipping fees will apply. Read more <a href="./help/shipping.php"><b>here.</b></a>
    				</p>
    				<br><br>
    			</div>
    		</div>
    	</div>
	</div>
    <?php /* ----------------- END OF PAGE ----------------- */ ?>
    
    <?php
        include($root_folder."/pixels/sale_pixels.php")
    ?>

    <footer>
    	<?php 
    	   include($root_folder."/blocks/footer.php");
    	?>
    </footer>
    <?php include($root_folder."/pixels/tracking_body_pixels.php")?>
</body>
</html>