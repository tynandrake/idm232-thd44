<?php
$page_title = 'Delete User';
$body_class = 'add-recipe';
include_once $_SERVER['DOCUMENT_ROOT'] . '/global/header.php';


if(isset($_GET['id'])){
    $recipe_id = $_GET['id'];
    $sql = mysqli_query($con, "DELETE FROM recipe WHERE id=$recipe_id") or die($sql->error());
}

?>