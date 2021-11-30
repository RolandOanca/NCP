<?php 
//////////////////////////////
// PREP WORK - do not mofify!
$query_string = $_SERVER['QUERY_STRING'];
// Website domain name 
$domain =  (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://".$_SERVER["HTTP_HOST"];

//////////////////////////////
// CHANGE AL OF THESE!

    //Start Testimonial dates
   
    $date1 = (new DateTime())->modify("first monday of last month")->format("F d, Y");
    $date2 = (new DateTime())->modify("third friday of last month")->format("F d, Y");
    $date3 = date("F d, Y",strtotime("last Monday"));

    //End Testimonial dates

    // Offer id
    $offer = "NCP";
    // payment gateway
    $vendor_type = "CB";
    // Product name
    $product_name = "Neuro Calm Pro";
    // If needed - on live domains this should not be the case - just use domain as base_url
    // $base_url = $domain.($_SERVER["HTTP_HOST"]=="localhost"?("/".$offer."_".$vendor_type):"");
    $base_url = $domain.($_SERVER["HTTP_HOST"]=="localhost"?("/".$offer."_CB"):"");
    // Customer support settings
    // host of the emails and clickbank upsell domain - never use as front domain!
    $backend_domain = "neurocalmpro-product.com";
    
    $support_email = "contact@".$backend_domain; //email address
    $affiliates_email = "affiliates@".$backend_domain;
    
    
    $vendor_setup = [
        "CB"=>[
            "vendor"=>"neurocalm",
            "products"=>[
                "1"=>[
                    "skin" => "35193",
                    "fid" => "49620"
                ],
                "2"=>[
                    "skin" => "35194",
                    "fid" => "49621"
                ],
                "3"=>[
                    "skin" => "35195",
                    "fid" => "49622"
                ],
                "66"=>[
                    "skin" => "35196",
                    "fid" => "49623"
                ]
            ]
        ],
        "BG"=>["vendor"=>"6316"],
        "DS"=>[
            "vendor"=>"Mycosyn",
            "ty_px"=>"https://www.digistore24.com/trusted-badge/8269/7tz5FqGvkglnOOt/thankyoupage",
            "sale_px"=>"https://www.digistore24.com/trusted-badge/8268/6WDtRK5CVUFNXrx/salespage",
            "products"=>[
                "1"=>"",
                "2"=>"",
                "3"=>"",
                "11"=>"",
                "12"=>"",
                "13"=>"",
                "21"=>"",
                "22"=>"",
                "23"=>""
            ]
        ],
    ];
    // payment gateway vendor ids
    $vendor = $vendor_setup[$vendor_type]["vendor"];
    
    //freshdesk product id
    $freshdesk_id = "13000001673";

    // make sure to have GA4 UA and Optimizer tags set up and added to the tag manager
    $google_tag_manager = "GTM-TDWJ6ZL";
    
    // VIDEO SETUP
    $video_setup = "NCP/lead1_a1"; // config should contain all videos on all possible video delivery systems
    $cta_id = "btn-cta";
    $cta_time = "3045";
    $playback_rate = 1.1;

// CHANGE ALL ABOVE
//////////////////////////////

     $avatar = $base_url."/statics/img/avatar_a2.png";
    
    if(isset($_GET["vtid"]))
    {
        setcookie("vtid",$_GET["vtid"]);
    }
    
    $vtid = isset($_GET["vtid"])?$_GET["vtid"]:(isset($_COOKIE["vtid"])?$_COOKIE["vtid"]:null);
    
    if(!is_null($vtid))
    {
        if($vtid == "a1l4")
        {
            $avatar = $base_url."/statics/img/avatar.png";
        } else if($vtid == "a2l4")
        {
            $avatar = $base_url."/statics/img/avatar_a2.png";
        }
    }

include("constants.php");