<?php
$page_title = 'All-Recipes';

include_once '../global/adminHeader.php';


$sql = 'SELECT id, recipeTitle ';
$sql .= 'FROM recipe';
$db_results = mysqli_query($con, $sql);


?>

<html>

<body>
    <div class="hp-content hp-content-secondary" id="category-content">
        <div>
            <h2 class="secondary-title roboto">All Recipes</h2>
        </div>
        <div class="search-bar" id="search-bar-large">
            <form action="/">
                <input type="text" placeholder="Search" name="search">
                <button type="submit"><img src="../images/search.svg" alt="search icon"></button>
            </form>
        </div>
        <div>
            <?php

            if ($db_results && $db_results->num_rows > 0) {
                include '../components/card.php';
            } else {
                echo '<p>There are currently no users in the database</p>';
            }
            ?>
            
        </div>
    </div>
</body>

</html>