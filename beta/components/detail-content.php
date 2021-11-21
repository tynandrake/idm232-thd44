<?php

$recipe_id = $_GET['id'];

$sql = mysqli_query($con, "SELECT * FROM recipe WHERE id='$recipe_id'");

while ($row = mysqli_fetch_assoc($sql)) { ?>
    <div class="detail-top">
        <div id="text-side">
            <h2 class="elsie"><?php echo $row['recipeTitle']; ?></h2>
            <h3 class="roboto">~25 MINS</h3>
        </div>
        <div id="image-side">
            <li style='background: url("<?php echo $row['recipeImage'];?>"); background-size: cover; ")'></li>
        </div>
    </div>
    <div class="detail-content">
        <div class="detail-element">
            <h4 class="detail-subtitle roboto">INGREDIENTS</h4>
            <ul class="detail-list roboto">
                <li><?php echo $row['recipeIngredients']; ?></li>
            </ul>
        </div>
        <div class="detail-element">
            <h4 class="detail-subtitle roboto">INSTRUCTIONS</h4>
            <ol class="detail-list roboto">
                <li><?php echo $row['recipeInstructions']; ?></li>
            </ol>
        </div>
        <div class="detail-element">
            <h4 class="detail-subtitle roboto">NUTRITION</h4>
            <p class="roboto"><?php echo $row['recipeNutrition']; ?> </p>
        </div>
    </div>
<?php
}
?>