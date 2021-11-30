<?php include '../config_old.php'; ?>

<?php 

if (isset($_GET['hop']) && (($_GET['hop'] != 0) || ($_GET['hop'] != '0'))) {
	include 'video.php'; 
}
else {
	include 'text.php';
}
?>