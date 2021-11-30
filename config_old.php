<?php
// DO NOT REMOVE THESE
$query_string = $_SERVER['QUERY_STRING'];

// Product name
$product_name = "Neuro Calm Pro";

// Website domain name
$domain = "https://neurocalmpro.com";

// Customer support settings
$support = "contact@neurocalmpro.com"; //email address
$freshdesk_id = "13000001673"; //freshdesk product id

// ClickBank Vendor account
$cb_vendor = "neurocalm";

// Main Products Settings

//*** ClickBank Checkout Page Skin ID ***
$buy1_skin = "33045";
$buy3_skin = "33046";
$buy6_skin = "33047";

//*** ClickBank Upsell Flow ID ***
$buy1_flow = "47853";
$buy3_flow = "47853";
$buy6_flow = "47853";

//*** Main Products Buy Links ***
$buy1_link = "https://" . $cb_vendor . ".pay.clickbank.net/?cbitems=1&cbskin=" . $buy1_skin . "&cbfid=" . $buy1_flow . "&" . $query_string; 
$buy3_link = "https://" . $cb_vendor . ".pay.clickbank.net/?cbitems=2&cbskin=" . $buy3_skin . "&cbfid=" . $buy3_flow . "&" . $query_string;
$buy6_link = "https://" . $cb_vendor . ".pay.clickbank.net/?cbitems=3&cbskin=" . $buy6_skin . "&cbfid=" . $buy6_flow . "&" . $query_string;

$tsl_link = "/text.php?$query_string";
$start_link = "/text.php?$query_string#start-now";

//***Upsells product ids ***
$up1_item = "4";
$d1_item = "5";
$up2_item1 = "31";
$up2_item2 = "32";
$up2_item3 = "33";

// Upsell 1 Buy Links
$upsell_yes = "https://" . $cb_vendor . ".pay.clickbank.net/?cbitems=" . $up1_item . "&cbur=a&item=" . $fe_item;
$upsell_no = "https://" . $cb_vendor . ".pay.clickbank.net/?cbitems=" . $up1_item . "&cbur=d&item=" . $fe_item;

// Downsell 1 Buy Links
$downsell_yes = "https://" . $cb_vendor . ".pay.clickbank.net/?cbitems=" . $d1_item . "&cbur=a";
$downsell_no = "https://" . $cb_vendor . ".pay.clickbank.net/?cbitems=" . $d1_item . "&cbur=d";

// Upsell 2 Buy Links
$upsell2_yes1 = "https://" . $cb_vendor . ".pay.clickbank.net/?cbitems=" . $up2_item1 . "&cbur=a";
$upsell2_yes3 = "https://" . $cb_vendor . ".pay.clickbank.net/?cbitems=" . $up2_item2 . "&cbur=a";
$upsell2_yes6 = "https://" . $cb_vendor . ".pay.clickbank.net/?cbitems=" . $up2_item3 . "&cbur=a";

$upsell2_no = "https://" . $cb_vendor . ".pay.clickbank.net/?cbitems=" . $up2_item1 . "&cbur=d";

/////////////////////////////////////////
// PIXEL MANAGEMENT
$offer_id = "NCP_CB";
$prices = [
    "1"=>"69",
    "2"=>"177",
    "3"=>"294"
];

$conversion_value = "1";
if(isset($_GET['item']) && isset($prices[$_GET['item']]))
    $conversion_value = $prices[$_GET['item']];
    
$evrtrack_px_url = "";
if(isset($_GET['cbaffi']))
    $evrtrack_px_url = "https://evrtrack.com/basepixel.php?p=".$offer_id."&affid=".$_GET['cbaffi']."&value=".$conversion_value;
    
// END PIXEL MANAGEMENT
/////////////////////////////////////////