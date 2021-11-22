<?php

include_once '../includes/database.php';
include_once '../includes/helper.php';

// Form has been submitted
if (isset($_POST['submit'])) {

    //  Parse Data
    $title = mysqli_real_escape_string($con, $_POST['recipeTitle']);
    $recipeDetails = mysqli_real_escape_string($con, $_POST['recipeDetails']);
    $recipeIngredients = mysqli_real_escape_string($con, $_POST['recipeIngredients']);
    $recipeInstructions = mysqli_real_escape_string($con, $_POST['recipeInstructions']);
    $recipeNutrition = mysqli_real_escape_string($con, $_POST['recipeNutrition']);
    $imageBase64 = ($_POST['imageBase64']);


    // Build Query
    $sql = "INSERT INTO `recipe`(`recipeTitle`, `recipeDetails`, `recipeIngredients`, `recipeInstructions`, `recipeNutrition`, `recipeImage`) 
    VALUES ('$title','$recipeDetails','$recipeIngredients','$recipeInstructions','$recipeNutrition', '$imageBase64');";

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