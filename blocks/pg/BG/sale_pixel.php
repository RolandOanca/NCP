<script type="text/javascript">
   var mysrc = "https://tracking.buygoods.com/track/?a=<?php echo $vendor; ?>&firstcookie=0&referrer="+encodeURIComponent(document.referrer)+"&product=<?php echo $products_string;?>&sessid2="+ReadCookie('sessid2');

   var newScript = document.createElement('script');
   newScript.type = 'text/javascript';
   newScript.async = true;
   newScript.src = mysrc;
   var s = document.getElementsByTagName('script')[0];
   s.parentNode.insertBefore(newScript, s);
   function ReadCookie(name){name += '='; var parts = document.cookie.split(/;\s*/);for (var i = 0; i < parts.length; i++) {var part = parts[i]; if (part.indexOf(name) == 0) return part.substring(name.length)} return '';}
</script>