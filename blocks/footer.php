
<div class="footer-wrapper position-relative overflow-hidden">
	<hr class="d-block position-relative" style="border: 2px solid #333277; bottom: -100px; width:100%;"/>
	<div class="container">

		<div class="row">
			<div class="col-12">
				<div class="footer-menu">
					<ul class="pt-2">
						<li class="footer-menu-links"><a href="<?php echo $base_url;?>/index.php" target="_blank">Home</a></li>
						<li class="footer-menu-links"><a href="<?php echo $start_link; ?>">Get Started</a></li>
						<li class="footer-menu-links"><a href="<?php echo $base_url;?>/help/contact-us.php" target="_blank">Contact</a></li>
						<li class="footer-menu-links"><a href="<?php echo $base_url;?>/help/references.php" target="_blank">References</a></li>
						<li class="footer-menu-links"><a href="<?php echo $base_url;?>/help/terms.php" target="_blank">Terms Of Use</a></li>
						<li class="footer-menu-links"><a href="<?php echo $base_url;?>/help/disclaimer.php" target="_blank">Disclaimer</a></li>
						<li class="footer-menu-links"><a href="<?php echo $base_url;?>/help/privacy.php" target="_blank">Privacy Policy</a></li>
						<li class="footer-menu-links"><a href="<?php echo $base_url;?>/help/shipping.php" target="_blank">Shipping Policy</a></li>
						<li class="footer-menu-links"><a href="<?php echo $base_url;?>/help/refunds.php" target="_blank">Refund Policy</a></li>
					</ul>
				</div>
				<p class=" py-2"></p>
				
			</div>
		</div>
		<div class="row">
			<div class="col-md-2 col-12">
				<H1 class="text-center" style="color:#333277;"><B>NEURO <br>CALM <br> PRO</B></H1>
			</div>
			<div class="col-md-10 col-12">
				<div class="disclaimer">
					<?php include($root_folder."/blocks/pg/".$vendor_type."/footer_disclaimer.php")?>
					<p><span id="disclaimer"></span></p>

				</div>
			</div>
		</div>
	</div>
	<div class="copyright mt-5 py-2" style="background:#333277;">
		<div class="text-center text-light py-3">Copyright &copy; <?php echo date("Y"); ?> <b><a  href="<?php echo $domain; ?>"><?php echo $product_name; ?></a></b> | All Rights Reserved</div>
	</div>
</div>
<?php include($root_folder."/blocks/pg/".$vendor_type."/footer.php")?>
