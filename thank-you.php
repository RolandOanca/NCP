<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
        include("config.php");
        $page_title = $product_name. " - Video Presentation";
        $page_type="ty";
        include($root_folder."/blocks/header.php");
    ?>
</head>
<body>
	<?php /* ----------------- START OF PAGE ----------------- */ ?>
	<div class="container py-5">
        <div class="row">
            <div class="col-12">
                <h1><b>Thank You For Purchasing <span class="color-green"><?php echo $product_name; ?></span></b></h1>
                <div class="white-div">
                    <p>This is your personal Member Area. Please read it carefully.</p>
                    <p>We are here anytime you need us! No matter what questions or problems you may have, don't hesitate to <a class="color-yellow" href="<?php echo $base_url;?>/help/contact-us.php">write us by clicking here</a>. We will send you a fully detailed reply as soon as possible.</p>
                </div>
            </div>
        </div>
    </div>

    <hr>

    <div class="container py-5">
        <div class="row">
            <div class="col-12 py-5">
                <h1>Get Details About Your Order Here!</h1>
            </div>
            <div class="col-12 col-md-6  d-flex justify-content-center">
            <div class="py-3"></div>
            	<img class="img-fluid" src="statics/img/ncp-hero.png" style="max-height:450px;">
            </div>
            <div class="col-12 col-md-6">
             
                <p>All orders Monday - Friday are shipped within 1-2 business days.</p>
                <p>Weekend orders are shipped first thing on Monday.</p>
                <p>FREE Standard Shipping In United States: (3 to 7 business days)</p>
                <p>International Shipping: (10-15 business days)</p>
                <p>In no more than 60 hours, you will receive an email with your <b>shipping tracking ID</b> and a personalized link that allows you to check your shipment anytime you like.</p>
    		</div>
    	</div>
    </div>

    <div class="container">
    <div class="row">
        <div class="col-12">
            <h2 class="text-center py-3"><b>Welcome to the Neuro Calm Sound Therapy Program!</b></h2>
            <div class="py-3"></div>
            <p>The sound therapy techniques inside this program will “unplug” your brain from its internal loud speakers just by LISTENING... simply and with no effort on your part!</p>
            <p>The techniques inside this program are represented in a simple and easy format for anyone who might want to use them.<br>Here’s how it works:</p>
            <h3 class="py-3"><b>Start with the Neuro Calm Protocol - by accessing it here</b></h3>
            <a href="/audioplayer.php" class="btn custom-btn-a btn-lg my-3 mx-auto d-block py-3 px-md-5 " style="background:#ceebed;"><h3 class="mb-1"><b>Audio Player</b></h3></a>
            <div class="py-3"></div>
            <p>You’ll fill out an initial evaluation questionnaire for tinnitus to gauge severity for an individual recommendation on which sound recordings work best.</p>
            <p>Also - In the 30-Day kick-start program, you’ll receive the  “listening session” charts and times, including weekly report forms for tracking your progress.</p>
            <h3 class="py-3"><b>At your convenience, after consulting the Neuro Calm Protocol,  start the sound therapy sessions.</b></h3>
            <p>These audio sessions have been especially selected based on what part of the brain they work on, with technical breakdowns for how the sounds have been altered or enhanced for maximum potency.</p>
            <p>Uou can select and listen each individual audio session on-line, by using your personal audioplayer, which you can find here:</p>
            <div class="py-3"></div>
            <a href="/audioplayer.php" class="btn custom-btn-a btn-lg my-3 mx-auto d-block py-3 px-md-5 " style="background:#ceebed;"><h3 class="mb-1"><b>Audio Player</b></h3></a>
           
           
            <div class="py-3"></div>
        </div>
    </div>
</div>
    
    <div class="container pb-5">
        <div class="row">
            <div class="col-12">
                <div class="d-flex flex-column flex-md-row justify-content-around">
                    <a class="text-center color-yellow py-3" href="./help/shipping.php"><?php echo $product_name; ?> Shipping Policy</a>
                    <a class="text-center color-yellow py-3" href="./help/refunds.php"><?php echo $product_name; ?> Return Policy</a>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container py-3">
        <div class="row">
            <div class="col-12">
                <div class="py-5 mt-3 card px-3 px-md-5 mx-md-5 mx-3">
                    <p><b>About Your Privacy:</b></p>
                    <p>We guarantee your privacy. Your bank statement will only show a charge from <?php echo $payment_gateway;?>. The name of the product you have purchased will not be listed on your bank statement. If you bought more products, you will have find "<?php echo $payment_gateway;?>" several times, according to the number of purchased items, on the bank statement, and the amount spent for each.</p>
                    <p><b>Your 60 Day Satisfaction Guarantee:</b></p>
                    <p>Remember that you are protected by a 60 Day Money Back-No Question Asked 100% Guarantee. This means that if, for any reason, you are not happy with your purchase, you can ask us for a refund any time during the next 60 days following your purchase. We are happy, when our customers are happy. If our program doesn't suit you, let us know!</p>
                    <p><b>How To Return The Product:</b></p>
                    <p><b>Refund procedure</b>: If you want to ask for a refund, you only have to follow a few simple steps. Please read the entire procedure, before asking for the refund.</p>
                  
                    <p>Step 1: The simplest thing ever - Go <a class="color-yellow" href="./help/refunds.php">HERE</a> and follow the on-screen instructions to request a refund. (<b>Note</b>: If you want to get a refund for multiple items, please repeat the procedure for each one)</p>
                    <p>Step 2: We will return your money in the shortest time possible and send you a refund confirmation email. In a few days, your money will be back on your bank account.</p>
        
                </div>
            </div>
        </div>
    </div>
    
    <div class="py-5"></div>
    <div class="py-5"></div>
    <div class="py-5"></div>
    
	<?php /* ----------------- END OF PAGE ----------------- */ ?>
    
	<footer>
    	<?php 
    	include($root_folder."/blocks/footer.php");
    	?>
    </footer>
    <?php include($root_folder."/pixels/tracking_body_pixels.php")?>
</body>
</html>