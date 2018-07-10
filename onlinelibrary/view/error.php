<?php


   header("Content-Type:image/png");
  
   $image = imagecreate(70,70);
   imagecolorallocate($image,217,83,79);
   $elipse_color = imagecolorallocate($image,0,0,0);
   $elipse_color1 = imagecolorallocate($image,217,83,79);
   
   
   imageellipse($image,35,35,60,60,$elipse_color);
   imageellipse($image,25,25,15,15,$elipse_color);
   imageellipse($image,45,25,15,15,$elipse_color);
  // imageellipse($image,35,50,30,10,$elipse_color);
   imageline($image,20,50,50,50,$elipse_color);
   imagepng($image);
  


?>