<?php
include "../functions/validate_function.php";
include "../functions/upload_function.php";
include "../class/new_class.php";

$title = $_POST['title'];
$post  = $_POST['post'];

if(empty($_FILES['image'])){
    $image = "undefined";
    echo $title . "  " . $post .  "  " . $image;
}else{
    $image = $_FILES['image'];
    $title = clean($title);
    $post  = clean($post);

    echo $upload = upload($image);


}

$post = new Post($title, $post, $image);
echo $post->test();
?>
