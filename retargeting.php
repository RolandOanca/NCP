<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    
        include("config.php");
        
        // used by sales pixels
        $products_string = $product["retargeting"]["codename"];
        
        $page_title = $product_name. " - Limited Opportunity";
        $page_type="upsell";
        include($root_folder."/blocks/header.php");
        
    ?>
    <style>
    HR{
        border:solid 2px black;
        width:10%;
    }
    .step-card
    {
        border-radius:20px;
        border-right:7px solid #333277;
		
		border-top: 10px solid #333277;
		background:linear-gradient(0deg, rgb(255,255,255) 0%, rgb(206,235,237) 100%); 
    }
    
    .review
    {
        
    }
    
    .review .review-stars
    {
		height: 30px;
		position: relative;
		top: -50px;
		left: -10px;
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
    
    @media (min-width: 748px) {
        .money-back-card
        {
            background:url(./statics/img/money_back_background.png);
            background-size:100% 100%;
        }
    }
    </style>
</head>
<body>
	<?php /* ----------------- START OF PAGE ----------------- */ ?>
	
    
    <div class="container">
    	<div class="row mx-md-5 px-2">
    		<div class="col mx-md-5">
    			<h1 class="text-center bold accent-light">
    				LIMITED RISK-FREE OPPORTUNITY
    			</h1>
    			<h2 class="text-center bold">
					ARE YOU READY TO SHUT OFF THE RINGING, WHOOSHING AND BUZZING STARTING TODAY? <br>
					Buy 1 Bottle Of Neuro Calm Pro And Get One FREE! <br>
                    (HUGE <span class="accent-light"> $<?php echo $product["retargeting"]["save"]?> SAVINGS)</span>
                </h2>

				<div class="py-3"></div>

                <div class="col d-flex justify-content-center">
					<img class=" avatar" src="./statics/img/avatar.png">
				</div>

				<div class="py-3"></div>
			</div>
		</div>

		<div class="row mx-md-3">
			<div class="col">
				<p>
					Gerard Watson here, from Neuro Calm Protocol - <b>the #1 tinnitus remedy in America,</b> with an exclusive limited-offer for you:
                </p>
				
                <p class="py-4 bold">
					How Would You Like To Easily Fix The Faulty Brain Networks Causing Tinnitus In Just 30 Days Completely Risk Free?
                </p>
                <p>
					Here’s the deal:  <br>
                    I’ve made it my mission to help anyone who’s being tormented by those cringing noises. <br> 
					And because I believe in this powerful, clinically proven system so much…<br>
                    After seeing the amazing results of more than 64.000 people before you...
                </p>
    		</div>
    	</div>
    </div>

	<div class="py-4"></div>

    <div class="container" style="border-radius:30px; background: linear-gradient(0deg, rgba(255,254,255,0) 0%, rgb(206,235,237) 100%)">
    	<div class="row mx-md-5 px-2">
			<div class="col">
			<div class="py-4"></div>
				<h1 class="text-center py-4 bold">
					If you buy 1 one bottle of Neuro Calm Pro today
					I’m willing to give you another one 
					COMPLETELY FREE!
                </h1>
				<div class="py-4"></div>
                <div class="row">
					<div class="col" >
                        <img src="<?php echo $product["retargeting"]["image"]?>" class="d-block mx-auto img-fluid" width="700" alt="">
        			</div>
				</div>
				<p class="py-4"></p>
				<a href="<?php echo $retargeting_link; ?>" class="my-3 mx-auto d-block py-3 buy_link"><img src="<?php echo $base_url;?>/statics/img/buy-now.png" class="img-fluid d-block mx-auto" style="width:500px"></a>
				<hr>
				<div class="py-4"></div>
				<div class="row">
					<div class="col">
					</div>
					<div class="col-auto" style="border-radius:30px; background: linear-gradient(0deg, rgb(206,235,237)  0%, rgba(255,254,255,0) 100%)">
    					<div class="align-self-center px-3 px-md-5" >
            				<div class="row flex-nowrap py-1">
            					<div class="col-1">
            						<img src="../statics/img/check-ts.png" style="width:40px">
            					</div>
            					<div class="col-10 col-md-auto">
            						<p>
										Fix the faulty brain networks that are causing tinnitus
									</p>
            					</div>
            				</div>
            				<div class="row flex-nowrap py-1">
            					<div class="col-1">
            						<img src="../statics/img/check-ts.png" style="width:40px">
            					</div>
            					<div class="col-10 col-md-auto d-inline-block my-auto">
            						<p>
										Forget about the headaches, dizziness or anxiety
									</p>
            					</div>
            				</div>
            				<div class="row flex-nowrap py-1">
            					<div class="col-1">
            						<img src="../statics/img/check-ts.png" style="width:40px">
            					</div>
            					<div class="col-10 col-md-auto">
            						<p>
										Sleep better at night, getting the rest you so much deserve
									</p>
            					</div>
            				</div>
            				<div class="row flex-nowrap py-1">
            					<div class="col-1">
            						<img src="../statics/img/check-ts.png" style="width:40px">
            					</div>
            					<div class="col-10 col-md-auto">
            						<p>
										Concentrate better on your work
									</p>
            					</div>
            				</div>
							<div class="row flex-nowrap py-1">
            					<div class="col-1">
            						<img src="../statics/img/check-ts.png" style="width:40px">
            					</div>
            					<div class="col-10 col-md-auto">
            						<p>
										Enjoy your favorite songs or movies once again
									</p>
            					</div>
            				</div>	<div class="row flex-nowrap py-1">
            					<div class="col-1">
            						<img src="../statics/img/check-ts.png" style="width:40px">
            					</div>
            					<div class="col-10 col-md-auto">
            						<p>
										Never worry about tinnitus ever coming back
									</p>
            					</div>
            				</div>	<div class="row flex-nowrap py-1">
            					<div class="col-1">
            						<img src="../statics/img/check-ts.png" style="width:40px">
            					</div>
            					<div class="col-10 col-md-auto">
            						<p>
										Enjoy a quiet and peaceful life, being able to finally hear <br> your own thoughts again
									</p>
            					</div>
            				</div>
        				</div>
        				<p class="py-3"></p>
					</div>
					<div class="col">
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="py-4"></div>
	<div class="container">
    	<div class="row mx-md-5 px-2">
			<div class="col">
				<p class="py-3"></p>
				<h1 class="bold text-center">
					Is it truly possible for me to shut off <br> the ringing, whooshing and buzzing?
    			</h1>
				<div class="py-3"></div>
			</div>
		</div>
	</div>
	
	<div class="container">
    	<div class="row mx-md-4 px-2">
			<div class="col">
				<div class="row">
					<div class="col">
						<p>
							<b>Short answer: YES!</b> <br>
							Let me explain:
						</p>
						<p>
							The Neuro Calm Protocol is a revolutionary 2 step program to terminate tinnitus once and for all:
						</p>
						<p>
							First, the sound therapy techniques inside this program will “unplug” your brain from its internal loud speakers just by LISTENING... simply and with no effort on your part.
						</p>
						<p>
							Secondly, the Neuro Calm Pro supplement, which is absolutely crucial to repair your brain networks damaged by tinnitus and calm down your nervous system.  
						</p>

						<p>
							<b>This method is really inexpensive, has no side-effects and works incredibly well!</b>
						</p>

						<div class="py-4"></div>

        				<h1 class="text-center py-3 bold accent-light">Here’s how Neuro Calm Pro works:</h1>

						<div class="py-4"></div>

						<p>
							Scientists discovered that tinnitus goes way beyond than just the annoying, non-stop ear-ringing. In fact, tinnitus is just a signal of brain networks getting destroyed. 
							Unfortunately, memory loss, dementia and so many other memory disorders start with the failure of brain networks. 
							To put it simply: Your brain is a ticking time-bomb and tinnitus is the emergency alert.
							Now, combined with the sound therapy sessions, the supplement works in the following way:

						</p>

						<div class="py-4"></div>
				
        				<div class="py-2 px-4 step-card">
							<div class="py-4"></div>
        					<h2>
								<b>STEP 1 -</b> Your hearing begins to clear as the brain networks are getting repaired and the nervous system calmed down.
							</h2>
							<div class="py-4"></div>
							<p>
								The “buzzing” brain networks are quickly fixed and the intensity of tinnitus sounds being to lower in the first few days.
							</p>
        				</div>
        				<p class="py-2"></p>
        				<div class="py-2 px-4 step-card">
							<div class="py-4"></div>
        					<h2>
								<b>STEP 2 -</b> You regain your quiet mind while your brain networks are strengthening and becoming indestructible.
							</h2>
							<div class="py-4"></div>
							<p>
								Tinnitus is attacked out by the incredibly strong brain connections.
							</p>
        				</div>
        				<p class="py-2"></p>
        				<div class="py-2 px-4 step-card">
							<div class="py-4"></div>
        					<h2>
								<b>STEP 3 - </b> You feel your memory stronger than ever while your damaged brain cells are quickly being repaired.
							</h2>
							<div class="py-4"></div>
							<p>
								Wiping out years of brain deterioration resulted from the “broken” networks.
							</p>
        				</div>
        				<p class="py-2"></p>
						<div class="py-2 px-4 step-card">
							<div class="py-4"></div>
        					<h2>
								<b>STEP 4 - </b> You feel your brain supercharged while cell regenerations begins.
							</h2>
							<div class="py-4"></div>
							<p>
								The “tinnitus” brain that made you a vegetable is now being rejuvenated: you think faster, better, clearer. It’s like your brain is on steroids.
							</p>
        				</div>
        				<p class="py-2"></p>
						<div class="py-2 px-4 step-card">
							<div class="py-4"></div>
        					<h2>
								<b>STEP 5 - </b> Not worrying anymore about tinnitus and brain disorders because your brain is being trained for a perfect health.
							</h2>
							<div class="py-4"></div>
							<p>
								Your brain is being cleaned of toxins and plaque, your neural connections are multiplying, while a shield against tinnitus and memory loss is being created.
							</p>
							<div class="py-4"></div>
        				</div>
        			</div>
        		</div>	
    		</div>
		</div>
	</div>
	<div class="container">
    	<div class="row mx-md-5 px-2">
			<div class="col">
				<div class="row mx-md-5 px-2">
					<div class="col">
				
						<p class="py-2"></p>
						<h2 class="text-center py-4">
							<b>
								Neuro Calm Pro was designed with ONE PRIMARY PURPOSE: 
								TO HELP YOU HIT THE MUTE BUTTON ON THE EAR RINGING! 
							</b>
						</h2>
                        <p class="py-2"></p>
                        <p class="text-center">
                        	Go ahead and click the "Buy Button" button below...<br>
                            <b>GET YOUR FREE BOTTLE</b><br>
                            And secure the long-term benefits of Neuro Calm Pro now!
                        </p>
						<hr>
                        <p class="py-1">
                        <a href="<?php echo $retargeting_link; ?>" class="my-3 mx-auto d-block py-3 buy_link"><img src="<?php echo $base_url;?>/statics/img/buy-now.png" class="img-fluid d-block mx-auto" style="width:500px"></a>
                        <p class="py-1">
					</div>
        		</div>	
    		</div>
		</div>
	</div>

	<div class="py-4"></div>
	
	<div class="container review" style="border-radius:30px; background: linear-gradient(0deg, rgba(255,254,255,0) 0%, rgb(206,235,237) 100%)">
    	<div class="row mx-md-5 px-2">
			<div class="col mx-md-5">
				<div class="py-4"></div>
				<p class="bold mx-md-5 py-3 text-center">You have absolutely no risk here whatsoever... the program has worked for more than 64,000 people just like you... and you too could enjoy a peaceful life starting today:
				</p>
			</div>
		</div>
		<div class="py-4"></div>
		<div class="row">
			<div class="col-12 col-md-4">
    			<div class="container position-relative">
					<div class="row ">
						<div class="col">
    					</div>
						<div class="col d-flex py-3">
							<img class="align-self-center review-stars" src="./statics/img/review_stars.png">
						</div>
						<div class="col">
    					</div>
					</div>
					<div class="row review-comment">
						<div class="col">
    						<img src="./statics/img/comment1.png" class="position-absolute review-avatar">
							<div class="py-4"></div>
        					<p class="text-center pt-3" >
        						<b>Mary F, 52 - Tennessee</b>
        					</p>
    						<p class="text-center py-2" style="font-size:20px;">
    							<i>
									“I never thought I would get to see the day when my ringing stops! But I did! After just a few weeks, I can think, I can sleep, I can relax. I feel like a human being again.”
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
							<img class="align-self-center review-stars" src="./statics/img/review_stars.png">
						</div>
						<div class="col">
    					</div>
					</div>
					<div class="row review-comment">
						<div class="col">
    						<img src="./statics/img/comment2.png" class="position-absolute review-avatar">
							<div class="py-4"></div>
        					<p class="text-center pt-3" >
        						<b>Daniel H, 49 - Georgia</b>
        					</p>
    						
    						<p class="text-center py-2" style="font-size:20px;">
    							<i>
									“My right ear was driving me insane. But now I am spending long hours in the forest, listening to the birds. My family thinks I’ve gone insane, but little do they know what I’ve been through. To think I could have never discovered this solution…sends shivers down my spine!”
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
							<img class="align-self-center review-stars" src="./statics/img/review_stars.png">
						</div>
						<div class="col">
    					</div>
					</div>
					<div class="row review-comment">
						<div class="col">
    						<img src="./statics/img/comment3.png" class="position-absolute review-avatar">
							<div class="py-4"></div>

        					<p class="text-center pt-3">
        						<b>Bob M, 63 - Florida</b><br>
        					</p>
    					
    						<p class="text-center py-2" style="font-size:20px;">
    							<i>
									“I couldn’t sleep more than 4 hours a night. The clicking would always keep me awake. After just one week of Neuro Calm Pro, I was finally able to sleep for 8 hours. It was a huge victory for me.”
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
	<div class="py-4"></div>
	<div class="py-md-4"></div>

	<div class="container">
    	<div class="row mx-md-5 px-2">
    		<div class="col mx-md-5">
				<p>
					All you have to do in order to achieve the same  life-changing results is to start using it as soon as possible.
				</p>
				<p>
					The solution is much simpler than you’d think.
				</p>
    			<h1 class="text-center py-4 bold">
        			HURRY! LIMITED SUPPLY OFFER!<br>
    				ORDER YOURS RIGHT NOW!
				</h1>
				<hr>
				<a href="<?php echo $retargeting_link; ?>" class="my-3 mx-auto d-block py-3 buy_link"><img src="<?php echo $base_url;?>/statics/img/buy-now.png" class="img-fluid d-block mx-auto" style="width:500px"></a>
			</div>
		</div>
	</div>

	<div class="container" style="border-radius:30px; background: linear-gradient(0deg, rgba(255,254,255,0) 0%, rgb(206,235,237)  100%)">
    	<div class="row mx-md-5">
			<div class="col">
				<p class="py-4"></p>
				<h2 class="text-center py-3">
					<b>
						WHY ARE WE DOING THIS?
					</b>
				</h2>
				<div class="py-4"></div>
				<p>
					We’ve received such great feedback from clients using Neuro Calm Pro... <br>
					How they have experienced complete silence… all their worries and anxieties are gone… How they have saved thousands in useless hearing aids or medicine…  
				</p>

				<p>
					Now you too can take it to the next level and get an additional bottle of Neuro Clam Pro <b>COMPLETELY FREE!</b>
				</p>
    		</div>
		</div>
		<div class="py-4"></div>
		<div class="row" style="border-radius:30px; background:url(./statics/img/money-back-bg.png) no-repeat; background-size:100% 100%;">
    		<div class="col-md col-lg-auto d-block d-md-none text-center">
    			<img class="d-inline-block" src="./statics/img/money_back_bdage.png" style="width:300px">
    		</div>
    		<div class="col-md mx-md-5">
				<div class="py-4"></div>
				<h1>
					<b>As always, you are protected by our industry-leading 100% Money Back Guarantee. </b>
				</h1>
				<div class="py-4"></div>
				<p>
					That means you have 60 days to try Neuro Calm Pro and experience the amazing difference for yourself completely risk free.
				</p>
                <p class="py-md-4"></p>
    		</div>
    		<div class="col-md col-lg-auto d-none d-md-flex">
    			<img class="justify-content-center align-self-center " src="./statics/img/60daysbadge.png" style="width:300px">
    		</div>
    	</div>
	</div>
	<div class="container" style="border-radius:30px; background: linear-gradient(0deg, rgb(206,235,237)  0%, rgba(255,254,255,0)  100%)">
		<div class="row mx-md-5">
			<div class="col">
				<div class="py-4"></div>
				<p>
					Try Neuro Clam Pro for yourself, <b>completely risk free.</b>
				</p>
				<p>
					You'll soon be able to enjoy a quiet and peaceful life once again. <br>
					Just imagine…<br>
					Stopping the cringing noises in your ears… <br>
					Clearing the brain fog… <br>
					Escaping other brain diseases such as dementia or total memory loss… <br>
					Enjoying your favorite music and movies once again… <br>
					Never worrying about your tinnitus ever coming back… 
				</p>
				<div class="py-4"></div>
			</div>
		</div>
	</div>
    <div class="py-4"></div>
    <div class="container">
    	<div class="row mx-md-5">
			<div class="col mx-md-5">
				<div class="py-4"></div>
				<img src="<?php echo $product["retargeting"]["image"]?>" class="d-block mx-auto img-fluid" width="700" alt="">			
				<h2 class="text-center py-3">
					<b>Click on  the "Buy Button " right now & Claim Your FREE bottle today!</b>
				</h2>
				<hr>
				<a href="https://www.buygoods.com/secure/?sessid2=sessid2021110220139804&amp;account_id=6787&amp;screen=checkout_one&amp;product_codename=66&amp;redirect=aHR0cDovL2xvY2FsaG9zdDo4ODg4L3Vwc2VsbC1hMS5waHA=&amp;ax_item=66&amp;" class="my-3 mx-auto d-block py-3 buy_link __web-inspector-hide-shortcut__"><img src="http://localhost:8888/statics/img/buy-now.png" class="img-fluid d-block mx-auto" style="width:500px"></a>
			</div>
		</div>
    </div>
	<div class="py-4"></div>
	<div class="py-md-4"></div>

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