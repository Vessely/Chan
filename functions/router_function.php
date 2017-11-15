<?php


function url(){
  return $_SERVER['REQUEST_URI'];
}
function web($url){
  $url = explode("/", $url);
  return $url[1];
}
function data($url){
  $url = explode("/", $url);
  return $url[2];
}

function file_include($data){
  switch ($data) {
    case '':
      return "inicio";
      break;
    case 'g':
      return "general";
      break;

    case 'ayuda':
      return "ayuda";
      break;

    default:
      return "404";
      break;
  }
}

?>
