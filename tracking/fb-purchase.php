<?php
$aff_id = $_GET ['cbaffi'];

//For each affiliate we need to input the affiliate ID in UPPERCASE and the facebook pixel ID

switch ($aff_id) {
    case NEWTON80:
    $pixel_id = 435818490709003;
    break;

    case AGWCOM:
    $pixel_id = 3314944625215879;
    $pixel_id2 = 342354667141615;
    break;

    case GETNOW123:
    $pixel_id = 3314944625215879;
    $pixel_id2 = 342354667141615;
    break;

    case ABRON27:
    $pixel_id = 677105536479719;
    break;

    case AC1DBR:
    $pixel_id = 323237198713414;
    break;

    case KEVINCON:
    $pixel_id = 723954875140382;
    break;

    case MENTORPAN:
    $pixel_id = 918344605311652;
    break;
}
?>

<!-- Affiliates Facebook Pixel Codes -->

<!-- Facebook Pixel Code -->
<script>
 !function(f,b,e,v,n,t,s)
 {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
   n.callMethod.apply(n,arguments):n.queue.push(arguments)};
   if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
   n.queue=[];t=b.createElement(e);t.async=!0;
   t.src=v;s=b.getElementsByTagName(e)[0];
   s.parentNode.insertBefore(t,s)}(window, document,'script',
     'https://connect.facebook.net/en_US/fbevents.js');
   fbq('init', '<?php echo $internalPixel; ?>');

   fbq('init', '<?php echo $pixel_id; ?>');
   fbq('init', '<?php echo $pixel_id2; ?>');
   // fbq('init', '<?php echo $pixel_id3; ?>');
   // fbq('init', '<?php echo $pixel_id4; ?>');
   // fbq('init', '<?php echo $pixel_id5; ?>');
   // fbq('init', '<?php echo $pixel_id6; ?>');
   // fbq('init', '<?php echo $pixel_id7; ?>');
   // fbq('init', '<?php echo $pixel_id8; ?>');
   // fbq('init', '<?php echo $pixel_id9; ?>');
   // fbq('init', '<?php echo $pixel_id10; ?>');

   fbq('track', 'PageView');

   fbq('track', 'Purchase', {
      value: 0.00,
      currency: 'USD'
  });

</script>
<!-- End Facebook Pixel Code -->