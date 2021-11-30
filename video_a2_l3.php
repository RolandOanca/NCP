<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
        include("config.php");
        $page_title = $product_name. " - Video Presentation";
        $page_type="sale";

        $video_config = [
            "host"=>"stream_container",
            "autoplay" => true,
            "playback_rate"=>1.1,
            "timers"=>[
                "1"=>[["checkcookie"=>["cookie"=>"return_visit","show"=>"#btn-cta"]]],
                "2047"=>[["show"=>"#btn-cta"]]
            ],
            "caption"=>"./statics/captions/video1.vtt",
        ];
        $video_setup = "NCP/lead3_a2";

        setcookie("vtid","a2l4");

        include("blocks/header.php");
        ?>
</head>
<body class="video">
    <?php /* ----------------- START OF PAGE ----------------- */ ?>
    
    <div class="atf_wrapper">
        <div class="py-4"></div>
        <?php include($root_folder."/blocks/headline.php")?>
        <div class="py-4"></div>
        <?php include($root_folder."/blocks/videobox.php");?>
    </div>
    
    <div class="py-lg-5 py-3 py-md-5"></div>
    <div class="py-0 py-lg-3 py-md-3"></div>
    <div class="main-cta" id="<?php echo $cta_id;?>">
        <?php include($root_folder."/blocks/pricebox.php")?>
    </div>
    
    <div class="py-5"></div>
    <div class="py-5"></div>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <a class="text-center go-text" href="<?php echo $tsl_link; ?>">Prefer To Read? Get the full story here</a>
            </div>
        </div>
    </div>
    <div class="py-5"></div>
    <div class="py-5"></div>
    <?php /* ----------------- END OF PAGE ----------------- */ ?>
    
    <?php
        include($root_folder."/pixels/sale_pixels.php");
        // include($root_folder."/blocks/popup.php");
    ?>

    <?php include($root_folder."/pixels/lander_pixels.php")?>
    <footer>
        <?php 
           include($root_folder."/blocks/footer.php");
        ?>
    </footer>
    <?php include($root_folder."/pixels/tracking_body_pixels.php")?>
</body>
</html>