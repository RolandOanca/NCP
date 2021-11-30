<?php

// STANDARD VIDEO SETUP - do not modify!
$video_config = [
    "host"=>"stream_container",
    "autoplay" => true,
    "playback_rate"=>$playback_rate,
    "timers"=>[
        "1"=>[["checkcookie"=>["cookie"=>"return_visit","show"=>"#".$cta_id]]],
        $cta_time=>[["show"=>"#".$cta_id]]
    ],
    "caption"=>"./statics/captions/captions.vtt",
];


// DYNA UPSELL FUNNEL - do not modify unless special cases needed!
$product_config = [
    "CB"=>[
        "setup" =>[
            "payment_gateway"=>"ClickBank",
            "order_support_link"=>"https://www.clkbank.com/#!/",
        ],
        "products"=>[
            "1"=>[
                "price"=>"69",
                "initial_price" => "99",
                "pack" => "1",
                "image" => "statics/img/prod_1_bottle.png"
            ],
            "2"=>[
                "price"=>"177",
                "initial_price" => "297",
                "pack" => "3",
                "image" => "statics/img/prod_3_bottle.png"
            ],
            
            "3"=>[
                "price"=>"294",
                "initial_price" => "594",
                "pack" => "6",
                "image" => "statics/img/prod_6_bottle.png"
            ],
            
            // UPSELLS
            "11"=>[
                "price"=>"87",
                "initial_price" => "297",
                "pack" => "3",
                "image" => "statics/img/up_3_bottle.png"
            ],
            
            "12"=>[
                "price"=>"174",
                "initial_price" => "594",
                "pack" => "6",
                "image" => "statics/img/up_6_bottle.png"
            ],
            
            "13"=>[
                "price"=>"348",
                "initial_price" => "1188",
                "pack" => "12",
                "image" => "statics/img/up_12_bottle.png"
            ],
            
            // DOWNSELLS
            "21"=>[
                "price"=>"58",
                "initial_price" => "198",
                "pack" => "2",
                "image" => "statics/img/down_2_bottle.png"
            ],
            
            "22"=>[
                "price"=>"116",
                "initial_price" => "396",
                "pack" => "4",
                "image" => "statics/img/down_4_bottle.png"
            ],
            
            "23"=>[
                "price"=>"174",
                "initial_price" => "594",
                "pack" => "6",
                "image" => "statics/img/down_6_bottle.png"
            ],
            
            // RETARGETING
            "66"=>[
                "price"=>"69",
                "initial_price" => "198",
                "pack" => "2",
                "image" => "statics/img/retargeting_2_bottle.png"
            ]
        ],
        "flows"=>[
            "1"=>[
                "setup"=>[
                    "skin" => $vendor_setup["CB"]["products"]["1"]["skin"],
                    "fid" => $vendor_setup["CB"]["products"]["1"]["fid"]
                ],
                "flow"=>[
                    "up"=>"11",
                    "down"=>"21"
                ]
            ],
            "2"=>[
                "setup"=>[
                    "skin" => $vendor_setup["CB"]["products"]["2"]["skin"],
                    "fid" => $vendor_setup["CB"]["products"]["2"]["fid"]
                ],
                "flow"=>[
                    "up"=>"12",
                    "down"=>"22"
                ]
            ],
            "3"=>[
                "setup"=>[
                    "skin" => $vendor_setup["CB"]["products"]["3"]["skin"],
                    "fid" => $vendor_setup["CB"]["products"]["3"]["fid"]
                ],
                "flow"=>[
                    "up"=>"13",
                    "down"=>"23"
                ]
            ],
            "66"=>[
                "setup"=>[
                    "skin" => $vendor_setup["CB"]["products"]["66"]["skin"],
                    "fid" => $vendor_setup["CB"]["products"]["66"]["fid"]
                ],
                "flow"=>[
                    "up"=>"",
                    "down"=>""
                ]
            ]
        ]
    ],
    "BG"=>[
        "setup" => [
            "payment_gateway"=>"BuyGoods",
            "order_support_link"=>"https://www.buygoods.com/orderlookup",
        ],
        "products"=>[
            "1"=>[
                "price"=>"69",
                "initial_price" => "99",
                "pack" => "1",
                "image" => "statics/img/prod_1_bottle.png"
            ],
            "2"=>[
                "price"=>"177",
                "initial_price" => "297",
                "pack" => "3",
                "image" => "statics/img/prod_3_bottle.png"
            ],
            
            "3"=>[
                "price"=>"294",
                "initial_price" => "594",
                "pack" => "6",
                "image" => "statics/img/prod_6_bottle.png"
            ],
            
            // UPSELLS
            "11"=>[
                "price"=>"87",
                "initial_price" => "297",
                "pack" => "3",
                "image" => "statics/img/up_3_bottle.png"
            ],
            
            "12"=>[
                "price"=>"174",
                "initial_price" => "594",
                "pack" => "6",
                "image" => "statics/img/up_6_bottle.png"
            ],
            
            "13"=>[
                "price"=>"348",
                "initial_price" => "1188",
                "pack" => "12",
                "image" => "statics/img/up_12_bottle.png"
            ],
            
            // DOWNSELLS
            "21"=>[
                "price"=>"58",
                "initial_price" => "198",
                "pack" => "2",
                "image" => "statics/img/down_2_bottle.png"
            ],
            
            "22"=>[
                "price"=>"116",
                "initial_price" => "396",
                "pack" => "4",
                "image" => "statics/img/down_4_bottle.png"
            ],
            
            "23"=>[
                "price"=>"174",
                "initial_price" => "594",
                "pack" => "6",
                "image" => "statics/img/down_6_bottle.png"
            ],
            
            // RETARGETING
            "66"=>[
                "price"=>"69",
                "initial_price" => "198",
                "pack" => "2",
                "image" => "statics/img/retargeting_2_bottle.png"
            ]
        ],
        "flows"=>[
            "1"=>[
                "setup"=>[],
                "flow"=>[
                    "up"=>"11",
                    "down"=>"21"
                ]
            ],
            "2"=>[
                "setup"=>[],
                "flow"=>[
                    "up"=>"12",
                    "down"=>"22"
                ]
            ],
            "3"=>[
                "setup"=>[],
                "flow"=>[
                    "up"=>"13",
                    "down"=>"23"
                ]
            ],
            "66"=>[
                "setup"=>[],
                "flow"=>[
                    "up"=>"",
                    "down"=>""
                ]
            ]
        ]
    ],
    "DS"=>[
        "setup" => [
            "payment_gateway"=>"DigiStore24",
            "order_support_link"=>"https://www.digistore24.com/info/contact/2?lang=en",
            "sales_page_pixel"=>"",
            "thank_you_pixel"=>""
        ],
        
        "products"=>[
        ],
        
        "flows" =>[
            
        ]
    ]
];

// access in sites via this variable:
$product = $product_config[$vendor_type]["products"];

foreach($product AS $k=>$v)
{
    $product[$k]["initial_per_bottle"] = $v["initial_price"]/$v["pack"];
    $product[$k]["per_bottle"] = $v["price"]/$v["pack"];
    $product[$k]["save"] = $v["initial_price"] - $v["price"];
    $product[$k]["bottles"] = $v["pack"]." bottle".($v["pack"]>1?"s":"");
    $product[$k]["codename"] = isset($v["codename"])?$v["codename"]:$k;
    $product[$k]["days"] = $v["pack"]*30;
}

////////////////////////
// start links
$tsl_link = $base_url."/text.php?$query_string";
$start_link = $base_url."/text.php?$query_string#start-now";

/*
 * Generate any buy link here!
 * */
function getLink($item_id, $yes=false)
{
    global $vendor, $product_config, $vendor_type,$query_string,$base_url;
    
    if($vendor_type=="CB")
    {
        if(isset($product_config[$vendor_type]["flows"][$item_id]["setup"]))
        {
            // frontend buy link
            $cfg = $product_config[$vendor_type]["flows"][$item_id]["setup"];
            $skin = $cfg["skin"];
            $fid = $cfg["fid"];
            
            return "https://" . $vendor . ".pay.clickbank.net/?cbitems=".$item_id."&cbskin=".$skin."&cbfid=".$fid. "&" . $query_string;
        }
        else if(isset($_GET["item"]))
        {
            $fe_item = $_GET["item"];
            $item_id = $product_config[$vendor_type]["flows"][$fe_item]["flow"][$item_id];
            // upsell link
            return "https://" . $vendor . ".pay.clickbank.net/?cbitems=$item_id&cbur=".($yes?"a":"d")."&item=".$fe_item;
        }
    }
    else if($vendor_type=="BG")
    {
        // cleanup the parameters for BG cart
        $fwd = $_GET;
        unset($fwd["aff_id"],$fwd["subid"],$fwd["subid2"]);
        $params = http_build_query($fwd);
        
        if(isset($product_config[$vendor_type]["flows"][$item_id]["setup"]))
        {
            // frontend buy link
            
            // assess the codename if needed
            $codename = $item_id;
            if(isset($product_config[$vendor_type]["products"][$item_id]["codename"]))
            {
                $codename = $product_config[$vendor_type]["products"][$item_id]["codename"];
            }
            
            return "https://www.buygoods.com/secure/?account_id=".$vendor."&screen=checkout_one&product_codename=".$codename."&redirect=". base64_encode($base_url."/upsell-a1.php"). "&ax_item=".$item_id."&" . $params;
        }
        else if(isset($_GET["ax_item"]))
        {
            // upsell link
            
            // assess the codename if needed
            $fe_item = $_GET["ax_item"];
            $initial_item_id = $item_id;
            $item_id = $product_config[$vendor_type]["flows"][$fe_item]["flow"][$item_id];
            
            // assess the codename if needed
            $codename = $item_id;
            if(isset($product_config[$vendor_type]["products"][$item_id]["codename"]))
            {
                $codename = $product_config[$vendor_type]["products"][$item_id]["codename"];
            }
            
            
            if($yes)
            {
                return "https://www.buygoods.com/secure/upsell?account_id=" . $vendor . "&product_codename=" . $codename . "&redirect=".base64_encode("https://www.buygoods.com/thankyou?account_id=".$vendor);
            }
            else
            {
                if($initial_item_id=="up")
                {
                    return $base_url."/upsell-a2.php?ax_item=" . $fe_item;
                }
                else
                {
                    return "https://www.buygoods.com/thankyou?account_id=" . $vendor;
                }
            }
        }
    }
    else if($vendor_type=="DS")
    {
        // STUB!!
        if(isset($product_config[$vendor_type]["flows"][$item_id]["setup"]))
        {
            // frontend buy link
        }
        else
        {
            // upsell link
        }
        /*
         $buy1_link = "https://www.digistore24.com/product/351566";
         $buy3_link = "https://www.digistore24.com/product/351569";
         $buy6_link = "https://www.digistore24.com/product/351570";
         
         $upsell1_yes_link = 'https://www.digistore24.com/answer/351572';
         $upsell1_no_link = 'https://glucoflow24.com/upgrade-a2.php?digistore_upsell_session_id=';
         
         $upsell2_yes_link = 'https://www.digistore24.com/answer/351571';
         $upsell2_no_link = 'https://www.digistore24.com/answer/stop';
         */
    }
}

// process the current upsell / downsell product!
function getFrontEndProductId()
{
    global $vendor_type;
    if($vendor_type=="CB" && isset($_GET["item"]))
    {
        return  $_GET["item"];
    }
    else if($vendor_type=="BG" && isset($_GET["ax_item"]))
    {
        return $_GET["ax_item"];
    }
}

function getCurrentProductId($type)
{
    global $vendor_type,$product_config;
    
    $fe_item = getFrontEndProductId();
    if($vendor_type=="CB" && $fe_item)
    {
        return $product_config[$vendor_type]["flows"][$fe_item]["flow"][$type];
    }
    else if($vendor_type=="BG" && $fe_item)
    {
        return $product_config[$vendor_type]["flows"][$fe_item]["flow"][$type];
    }
}

// default retargeting product is 66
$product["retargeting"] = $product["66"];

$current_id = getFrontEndProductId();
if($current_id)
    $product["fe"] = $product[$current_id];
    
$up = getCurrentProductId("up");
if($up)
    $product["up"] = $product[getCurrentProductId("up")];
    
$down = getCurrentProductId("down");
if($down)
    $product["down"] = $product[getCurrentProductId("down")];

// Main Product Buy Links - do not change variable names!
$buy1_link = getLink(1);
$buy3_link = getLink(2);
$buy6_link = getLink(3);

$retargeting_link = getLink(66);

// dynamic upsells
// Upsell 1 Buy Links
$upsell1_yes = getLink("up", true);
$upsell1_no = getLink("up", false);

// Downsell 1 Buy Links
$downsell1_yes = getLink("down", true);
$downsell1_no = getLink("down", false);

// DO NOT EDIT PAST THIS LINE! //

// NO REALLY! STOP! //

// STOP!! //

// OK... WHATEVER... YOUR FUNERAL! //

/////////////////////////////////////////
// PIXEL MANAGEMENT
$offer_id = $offer."_".$vendor_type;
$conversion_value = "1";
$evrtrack_px_url = "";

// BuyGoods
if(isset($_GET["aff_id"]))
{
    $affid = $_GET["aff_id"];
    setcookie("aff",$_GET["aff_id"]);
    
} elseif(isset($_COOKIE["aff"]) && isset($_GET["ax_item"])) {
    
    $affid = $_COOKIE["aff"];
    if(isset($_GET["ax_item"]) && isset($product_config[$vendor_type]["products"][$_GET["ax_item"]]))
        $conversion_value = $product_config[$vendor_type]["products"][$_GET["ax_item"]];
}


// Digistore
if(isset($_GET["aff"]))
{
    $affid = $_GET["aff"];
    setcookie("aff",$_GET["aff"]);
    
} elseif(isset($_COOKIE["aff"]) && isset($_GET['digistore_initial_product_id'])) {
    
    $affid = $_COOKIE["aff"];
    if(isset($_GET['digistore_initial_product_id']) && isset($product_config[$vendor_type]["products"][$_GET['digistore_initial_product_id']]))
        $conversion_value = $product_config[$vendor_type]["products"][$_GET['digistore_initial_product_id']];
}

// Clickbank
if(isset($_GET['cbaffi']) && isset($_GET["item"]))
{
    if(isset($_GET["item"]) && isset($product_config[$vendor_type]["products"][$_GET["item"]]))
        $conversion_value = $product_config[$vendor_type]["products"][$_GET["item"]];
        
        if(isset($_GET['cbaffi']))
            $affid = $_GET['cbaffi'];
}

if(isset($affid))
{
    $evrtrack_px_url = "https://evrtrack.com/basepixel.php?p=".$offer_id."&affid=".$affid."&value=".$conversion_value;
}

// END PIXEL MANAGEMENT
/////////////////////////////////////////

// MISC SETTINGS
$order_support_link = $product_config[$vendor_type]["setup"]["order_support_link"];
$payment_gateway = $product_config[$vendor_type]["setup"]["payment_gateway"];
$root_folder = __DIR__;

$page_title = $product_name;
$page_type = "help";// sale / upsell / ty