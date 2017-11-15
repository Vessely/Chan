<?php
function upload($file){
  $tmp   = $file['tmp_name'];
  $digits = 3;
  $random = rand(pow(10, $digits-1), pow(10, $digits)-1);
  $final = "../images/".$random."_".$file['name'];

  if(move_uploaded_file($tmp, $final)){
    return 0;
  }else{
    return 1;
  }

}
?>
