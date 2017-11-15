<?php
require "../config/database.php";
class Post
{
  private $linker;
  private $title;
  private $post;
  private $image_name;

  function __construct($title, $post, $image_name){

    //Valores a añadir a la base de datos.
    $this->title = $title;
    $this->post  = $post;
    $this->image_name = $image_name;

    $this->linker = new mysqli(host, user, pass, data);
  }

  public function make(){
    $sql = "INSERT INTO post(title, post, img_name, img_path, c_date, pid)
    VALUES('$this->title', '$this->post')";
  }
}
?>
