<?php
$page_title = 'Update Recipe';
$body_class = 'add-recipe';

include_once $_SERVER['DOCUMENT_ROOT'] . '/global/header.php';


if (isset($_POST['update'])) {
    $recipe_id = $_POST['recipe_id'];
    // Make sure GET ID == post ID
    if ($_GET['id'] != $recipe_id) {
        redirectTo('/admin/update-recipe.php?id=' . $_GET['id'] . '&error=User ID does not match current user.');
    }
    //  Parse Data
    $title = mysqli_real_escape_string($con, $_POST['recipeTitle']);
    $recipeDetails = mysqli_real_escape_string($con, $_POST['recipeDetails']);
    $recipeIngredients = mysqli_real_escape_string($con, $_POST['recipeIngredients']);
    $recipeInstructions = mysqli_real_escape_string($con, $_POST['recipeInstructions']);
    $recipeNutrition = mysqli_real_escape_string($con, $_POST['recipeNutrition']);
    $imageBase64 = $_POST['imageBase64'];

    // Build Query
    // $sql = mysqli_query($con, "UPDATE recipe SET recipeTitle='$title', recipeDetails='$recipeDetails', recipeIngredients='$recipeIngredients', recipeInstructions='$recipeInstructions', recipeNutrition='$recipeNutrition' WHERE id='$recipe_id'") or die($sql->error());
    $sql = 'UPDATE recipe SET ';
    $sql .= "recipeTitle = '{$title}', ";
    $sql .= "recipeDetails = '{$recipeDetails}', ";
    $sql .= "recipeIngredients = '{$recipeIngredients}', ";
    $sql .= "recipeInstructions = '{$recipeInstructions}', ";
    $sql .= "recipeNutrition = '{$recipeNutrition}', ";
    $sql .= "recipeImage = '{$imageBase64}' ";
    $sql .= "WHERE id = {$recipe_id}";

    // Execute Query
    $db_results = mysqli_query($con, $sql);

    if ($db_results && $db_results->num_rows > 0) {
        // Success
        redirectTo('/admin/all-recipes.php?success=');
    } else {
        // Error
        redirectTo('/admin/all-recipes.php?id=' . $recipe_id . '&error=' . mysqli_error($con));
    }
} elseif (isset($_GET['id'])) {
    $recipe_id = $_GET['id'];
    // Build Query
    $sql = 'SELECT * ';
    $sql .= 'FROM recipe ';
    $sql .= 'WHERE id=' . $recipe_id;

    $db_results = mysqli_query($con, $sql);
    if ($db_results) {
        $user = $row = mysqli_fetch_assoc($db_results);
    } else {
        // Redirect user if ID does not have a match in the DB
        redirectTo('/admin/all-recipes.php?error=' . mysqli_error($con));
    }
} else {
    // Redirect user if no ID is passed in URL
    redirectTo('/admin/all-recipes.php');
}

?>
<Script>
    function updateBase64() {
        var file = document.querySelector('input[type=file]')['files'][0];
        var reader = new FileReader();
        var baseString;
        reader.onloadend = function() {
            baseString = reader.result;
            document.getElementById("imageBase64").value = baseString;
            console.log(baseString);
        };
        reader.readAsDataURL(file);
    }
</script>
<div class="hp-content hp-content-secondary" id="category-content">
    <div>
        <h2 class="secondary-title roboto">Edit Recipe</h2>
        <form method="POST" id="addRecipe" action="" enctype="multipart/form-data">

            <label for="title">Title:</label>
            <input type="text" id="title" name="recipeTitle" value="<?php echo $user['recipeTitle']; ?>">

            <label for="imageFile">Add File</label>
            <input type="file" id="imageFile" name="recipeImage" placeholder="Insert Image:" onchange="updateBase64()">

            <div class="field_wrapper wrapper-style">
                <label for="ingredients">Ingredients:</label>
                <div>
                    <input type="text" id="ingredientList" name="recipeIngredients" placeholder="Ingredient 1" value="<?php echo $user['recipeIngredients']; ?>">
                </div>
            </div>

            <div class="field_wrapper2 wrapper-style">
                <label for="instructions">Instructions:</label>
                <div>
                    <input type="text" id="instructionList" name="recipeInstructions" placeholder="Step 1" value="<?php echo $user['recipeInstructions']; ?>">
                </div>
            </div>

            <div class="field_wrapper3 wrapper-style">
                <label for="nutrition">Nutrition:</label>
                <div>
                    <input type="text" id="nutritionList" name="recipeNutrition" value="<?php echo $user['recipeNutrition']; ?>">
                </div>
            </div>
            <label for="details">Additional Details:</label>
            <textarea id="recipeDetails" name="recipeDetails" value="<?php echo $user['recipeDetails']; ?>">
            </textarea>
            <input type="hidden" value="<?php echo $user['id']; ?>" name="recipe_id">
            <input type="hidden" name="imageBase64" id="imageBase64" value="<?php echo $user['recipeImage']; ?>"/>
            <button type="submit" value="Submit" name="update">Update Recipe</button>
        </form>
    </div>

</div>