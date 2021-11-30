<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noimageindex, nofollow, nosnippet">
    <meta name="description" content="<?php echo $product_name; ?> Presentation">
    <title><?php echo $product_name; ?></title>

    <link rel="stylesheet" type="text/css" href="../statics/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../statics/css/style.css">
    <link rel="stylesheet" type="text/css" href="../statics/css/raleway.css">

    <link rel="preconnect" href="https://www.google-analytics.com">

    <?php include '../tracking/gtm-head.php'; ?>
</head>
<body>
    <?php include '../tracking/gtm-body.php'; ?>

    <div class="container">
        <div class="row">
            <div class="col-12 py-2">
                <div class="py-3"></div>
                <h2 class="text-center d-none d-md-block"><b>Tinnitus: When The Ringing Won’t Stop, <br>Do This For Quick Relief...</b></h2>
                <h4 class="text-center text-secondary"><b>(Make sure your sound is on...)</b></h4>
                <img src="../statics/img/Volume-Icon.png" class="d-block mx-auto" alt="">
                <div class="py-3"></div>
            </div>
        </div>
    </div>
    <div class="container"> 
        <div class="video-holder row" style="position: relative;">
            <div class="col embed-responsive embed-responsive-16by9" id="player-wrapper">
                <div id="glass"></div>
                <div id="player"></div>
                <div id="playpause"><img class="img-fluid mx-auto d-block" src="../statics/img/continue.svg"></div>
                <a class="soundButton" id="unmute" onclick="toggleMute()"><img class="img-fluid mx-auto d-block" src="../statics/img/sound.svg"></a>
            </div>
        </div>
    </div>

    <div class="main-cta my-5 py-4" id="btn-cta">
        <div class="container my-md-5 my-3">
            <div class="row">
                <div class="col-lg-4 col-12 mb-3 order-3 order-lg-0 price-box">
                    <div class="card">      
                        <h5 class="text-center py-4 mb-0"><b>BASIC</b></h5>
                        <div class="card-product">
                            <div class="py-4"></div>
                            <img src="../statics/img/neuro1.png" class="d-block mx-auto product-img img-fluid" alt="">
                            <h1 class="text-center pt-3  price"><b>$69/</b> <br><small><b>bottle</b></small></h1>
                            <p class="text-center color-grey"><b>1 Bottle</b></p>
                            <h3 class="text-center"><b>Total : $69</b></h3>
                            <a href="<?php echo $buy1_link; ?>" class="btn custom-btn-b btn-lg my-3 mx-auto d-block text-light"><h3 class="mb-1"><b>Add To Cart</b></h3></a>
                            <p class="text-center py-3"><span><img src="../statics/img/truck.png" class=" img-fluid py-3" width="30" alt=""></span> <b>*Free Shipping</b></p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-12 mb-3 col-lg-4 order-lg-2 price-box">
                    <div class="card">
                        <div class="bg-blue">
                            <h5 class="text-center py-4 mb-0"><b>BEST VALUE</b></h5>
                        </div>
                        <div class="card-product">
                            <div class="py-4"></div>
                            <div class="mx-3"><img src="../statics/img/neuro6.png" class="d-block mx-auto product-img img-fluid" alt=""></div>      
                            <h1 class="text-center pt-3  price"><b>$49/</b> <br><small><b>bottle</b></small></h1>
                            <p class="text-center color-grey"><b>6 Bottle</b></p>
                            <h3 class="text-center"><b>Total : <s class="color-grey">$414</s> <span class="color-green">$294</span> </b></h3>
                            <a href="<?php echo $buy6_link; ?>" class="btn custom-btn-b btn-lg my-3 mx-auto d-block text-light"><h3 class="mb-1"><b>Add To Cart</b></h3></a>
                            <p class="text-center py-3"><span><img src="../statics/img/truck.png" class=" img-fluid py-3" width="30" alt=""></span> <b>*Free Shipping</b></p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-12 mb-3 order-2 order-lg-3 price-box">
                    <div class="card">
                        <h5 class="text-center py-4 mb-0"><b>MOST POPULAR</b></h5>
                        <div class="card-product">
                            <div class="py-4"></div>
                            <div class="mx-3"><img src="../statics/img/neuro3.png" class="d-block mx-auto product-img img-fluid" alt=""></div>      
                            <h1 class="text-center pt-3  price"><b>$59/</b> <br><small><b>bottle</b></small></h1>
                            <p class="text-center color-grey"><b>3 Bottle</b></p>
                            <h3 class="text-center"><b>Total : <s class="color-grey">$207</s> <span class="color-green">$177</span> </b></h3>
                            <a href="<?php echo $buy6_link; ?>" class="btn custom-btn-b btn-lg my-3 mx-auto d-block text-light"><h3 class="mb-1"><b>Add To Cart</b></h3></a>
                            <p class="text-center py-3"><span><img src="../statics/img/truck.png" class=" img-fluid py-3" width="30" alt=""></span> <b>*Free Shipping</b></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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

    <script type="text/javascript" src="../statics/js/youtube.js"></script>

    <footer>
        <?php include '../incl/footer.php'; ?>
    </footer>
</body>
</html>