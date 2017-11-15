<?php
include "functions/router_function.php";

$url = url();
$web = web($url);
$data = data($url);
$file = file_include($data);


?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?= ucfirst($file)?></title>
    <link rel="shortcut icon" href="resources/favicon.ico" type="image/x-icon"/>
    <link rel="stylesheet" href="css/master.css">
    <script src="js/jquery.js" charset="utf-8"></script>
    <script src="js/main.js" charset="utf-8"></script>
  </head>
  <body>
    <?php
    include "views/".$file.".php";
    ?>
  </body>
</html>
