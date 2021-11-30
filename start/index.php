<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
    
        include("../config.php");
        $page_title = $product_name;
        $page_type="sale";
        include($root_folder."/blocks/header.php");
        
    ?>
</head>
<body>
	<?php /* ----------------- START OF PAGE ----------------- */ ?>
    <p class="py-4"></p>
    <?php include($root_folder."/blocks/pricebox.php")?>
    <p class="py-4"></p>
    <?php /* ----------------- END OF PAGE ----------------- */ ?>
    
    <?php
        $products_string = "1,2,3";
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