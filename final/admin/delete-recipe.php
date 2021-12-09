<?php
$page_title = 'Delete User';
$body_class = 'add-recipe';
include_once '../global/adminHeader.php';


if(isset($_GET['id'])){
    $recipe_id = $_GET['id'];
    $sql = mysqli_query($con, "DELETE FROM recipe WHERE id=$recipe_id") or die($sql->error());

    // Execute Query
    $db_results = mysqli_query($con, $sql);
    if ($db_results) {
        // Success
        redirectTo('all-recipes.php');
    } else {
        // Error
        redirectTo('all-recipes.php?error=' . mysqli_error($con));
    }
}

?>