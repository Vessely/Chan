<?php
function clean($argument){
  $argument = htmlentities($argument);

  return $argument;
}
?>
