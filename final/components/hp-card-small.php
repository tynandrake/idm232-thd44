<?php
$row = mysqli_fetch_assoc($db_results);
for ($x = 0; $x <= 0; $x++) { ?>
    <div class="hover-style">
        <a href="../users/recipe-detail.php?id=<?php echo $row['id']; ?>">
            <div class="recipe-card-small" id="side-image1" style='background: url("<?php echo $row['recipeImage']; ?>"); background-size: cover; list-style-type: none; ")'></div>
        </a>
        <a href="../users/recipe-detail.php?id=<?php echo $row['id']; ?>">
            <p class="roboto-title"><?php echo $row['recipeTitle']; ?></p>
        </a>
    </div>
<?php
}
?>