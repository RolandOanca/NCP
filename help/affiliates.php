<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include("../config.php");
        $page_title = $product_name."Affiliates";
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

	<div class="wrapper-background">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="py-4"></div>
					<h1 class="text-center"><b>New Winner In The Poop Niche: Affiliates Are Doing 5-6 Figures A Day With This</b></h1>
				</div>
				<div class="col-12 col-lg-6">	
					<ul class="list-check">
						<div class="py-5"></div>
						<li>$3+ average EPCs</li>
						<li>Converts very well across email, FB, Native and Google</li>
						<li>VSL written by a copywriter who did 9 figures in the industry, guaranteed to convert</li>
						<li>Multiple intros available</li>
						<li>Bump available to volume and proven affiliates</li>
						<div class="py-5"></div>
					</ul>
				</div>
				<div class="col-12 col-lg-6">
					<img src="../statics/img/main-product-img.png" class="img-fluid d-block mx-auto" alt="">
					<div class="py-4"></div>
				</div>
			</div>
		</div>
	</div>
	

	<div class="py-4"></div>

	<div class="container">
		<div class="row">
			<div class="col-12">
				<h2 class="accent-color"><b>About <?php echo $product_name; ?></b></h2>
				<p class="pt-4">Our formula restores the gut lining and grows the bacteria that you really need for proper digestion. We give our customers the probiotics strains that they actually need, and the prebiotics to feed and empower them.</p>
				<p class="pt-2"><b>The result</b><br>Perfect digestion, smooth poop that is easily and completely eliminated on a daily basis.</p>
			</div>
		</div>
	</div>
	<div class="py-4"></div>

	<div class="container">
		<div class="row">
			<div class="col-12">
				<h2 class="accent-color"><b>Audiences That Do Well</b></h2>
				<p class="pt-4">This offer works on a broad audience, ages 35+.<br>This includes people interested in:</p>	
				<ul class="list-check-2">
					<li>Alternative health</li>
					<li>Weight loss</li>					
					<li>Digestion and gut health</li>
					<li>Dieting</li>
				</ul>
			</div>
		</div>
	</div>

	<div class="py-4"></div>

	<div class="container">
		<div class="row">
			<div class="col-12">
				<h2 class="accent-color"><b>Payouts And Earnings</b></h2>
				<p class="pt-4">Affiliates are making around $3 EPC on average. And if you have volume, you can get a bump in commissions.</p>
				<p class="pt-2">We also have several different intros available, so lets get them tested out on your traffic source and see what works best.</p>	
			</div>
		</div>
	</div>

	<div class="py-4"></div>

	<div class="container">
		<div class="row">
			<div class="col-12">
				<h2 class="accent-color"><b>Traffic Restrictions</b></h2>
				
				<p class="pt-4"><b>NOTICE: All Affiliate advertising must NOT include content that is deceptive, misleading, untruthful, unsubstantiated, or otherwise fails to comply with applicable federal and state consumer protection laws, regulations, and guidelines.</b></p>

				<ol>
					<li>Affiliates are NOT permitted to use ANY <?php echo $product_name; ?> before and after photos or user testimonials in their promotions.</li>
					<li>Affiliates may also not run ads on Google Adwords (or any Google property) by bidding on "<?php echo $product_name; ?>" based keywords, use the term "<?php echo $product_name; ?>" 
					in any pay per click ads (NO BRAND BIDDING!), use any terminology in ads or landing pages that are similar to "scam" or "fraud", or create customer incentives for purchasing <?php echo $product_name; ?> (through cash rebates or 3rd party bonus offers - NO BONUSING!).</li>
					<li>Affiliates are forbidden from creating webpages, social media pages or accounts that falsely represent themselves as the creators or owners of the <?php echo $product_name; ?> product and must make it clear that the page is a REVIEW page and you're being compensated for the review.</li>
					<li>Affiliates are not allowed to publish or distribute Press Releases <?php echo $product_name; ?> in any way, shape, or form on any press release platform, website, in printed media, or on any other press release service.</li>
					<li>You are not allowed to promote <?php echo $product_name; ?> on retail sites, auction sites, or app stores such as Amazon, eBay, Google Store, iTunes, or any other site that falls into these categories, in any way, shape, or form (this includes products created by you or by us). As well, selling products branded with the <?php echo $product_name; ?> brand on Craigslist, Kijiji, or any other classified ad network is forbidden.</li>
					<li>Affiliates may not bypass <?php echo $product_name; ?> pages to generate orders. In other words, no direct linking to cart or order forms from any ads or landing pages. The customer must see our offer as presented by us prior to landing on the cart.</li>
				</ol>
				<div class="py-3"></div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<p class="pt-3 text-center"><b class="yell">*** Any affiliate caught breaking any of these terms will be banned immediately without hesitation, and will not be eligible for reinstatement. ***</b></p>	
		</div>
	</div>

	<div class="py-4"></div>

	<div class="container">
		<div class="row">
			<div class="col-12">
				<h2 class="accent-color"><b>How To Apply</b></h2>

				<p class="pt-4">Contact our super star affiliate management team by writing an email to <?php echo $affiliates_email; ?> to get your hoplinks, affiliate resources and promotional guidelines.</p>

				<a class="btn btn-primary btn-lg" href="mailto:<?php echo $affiliates_email; ?>">Contact Us >></a>
				
				<div class="py-3"></div>
			</div>
		</div>
	</div>

	
	<div class="py-4"></div>
	
	<?php /* ----------------- END OF PAGE ----------------- */ ?>
	
	<footer>
    	<?php 
    	include($root_folder."/blocks/footer.php");
    	?>
    </footer>
    <?php include($root_folder."/pixels/tracking_body_pixels.php")?>
</body>
</html>