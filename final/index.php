<?php
$page_title = 'Home';

include_once 'global/header.php';

$sql = 'SELECT id, recipeTitle, recipeImage ';
$sql .= 'FROM recipe LIMIT 20 ';
$db_results = mysqli_query($con, $sql);

?>


<html>

<body>
    <?php

    if ($db_results && $db_results->num_rows > 0) {
        include 'components/hp-hero.php';
    } else {
        echo '<p>There are currently no users in the database</p>';
    }
    ?>
    <div id="featuredRecipesHP" class="hp-content col-3">
        <h3 class="roboto">FEATURED RECIPE</h3>
        <div class="col-1-2">
            <?php

            if ($db_results && $db_results->num_rows > 0) {
                include 'components/hp-card-large.php';
            } else {
                echo '<p>There are currently no users in the database</p>';
            }
            ?>
        </div>
        <div class="col-1-4">
            <?php

            if ($db_results && $db_results->num_rows > 0) {
                include 'components/hp-card-small.php';
            } else {
                echo '<p>There are currently no users in the database</p>';
            }
            ?>
            <?php

            if ($db_results && $db_results->num_rows > 0) {
                include 'components/hp-card-small.php';
            } else {
                echo '<p>There are currently no users in the database</p>';
            }
            ?>
            <?php

            if ($db_results && $db_results->num_rows > 0) {
                include 'components/hp-card-small.php';
            } else {
                echo '<p>There are currently no users in the database</p>';
            }
            ?>
        </div>
        <div class="col-1-4">
            <?php

            if ($db_results && $db_results->num_rows > 0) {
                include 'components/hp-card-small.php';
            } else {
                echo '<p>There are currently no users in the database</p>';
            }
            ?>
            <?php

            if ($db_results && $db_results->num_rows > 0) {
                include 'components/hp-card-small.php';
            } else {
                echo '<p>There are currently no users in the database</p>';
            }
            ?>
            <?php

            if ($db_results && $db_results->num_rows > 0) {
                include 'components/hp-card-small.php';
            } else {
                echo '<p>There are currently no users in the database</p>';
            }
            ?>
        </div>

    </div>
    <div id="hp-banner">
        <a href="../users/category.php">
            <h1 class="large-title elsie">CATEGORIES</h1>
        </a>
    </div>
    <div class="recipe-card-grid">
        <?php
        if ($db_results && $db_results->num_rows > 0) {
            include 'components/hp-card-square.php';
        } else {
            echo '<p>There are currently no users in the database</p>';
        }
        ?>
        <?php
        if ($db_results && $db_results->num_rows > 0) {
            include 'components/hp-card-square.php';
        } else {
            echo '<p>There are currently no users in the database</p>';
        }
        ?>
        <?php
        if ($db_results && $db_results->num_rows > 0) {
            include 'components/hp-card-square.php';
        } else {
            echo '<p>There are currently no users in the database</p>';
        }
        ?>
        <?php
        if ($db_results && $db_results->num_rows > 0) {
            include 'components/hp-card-square.php';
        } else {
            echo '<p>There are currently no users in the database</p>';
        }
        ?>
        <?php
        if ($db_results && $db_results->num_rows > 0) {
            include 'components/hp-card-square.php';
        } else {
            echo '<p>There are currently no users in the database</p>';
        }
        ?>
        <?php
        if ($db_results && $db_results->num_rows > 0) {
            include 'components/hp-card-square.php';
        } else {
            echo '<p>There are currently no users in the database</p>';
        }
        ?>
        <?php
        if ($db_results && $db_results->num_rows > 0) {
            include 'components/hp-card-square.php';
        } else {
            echo '<p>There are currently no users in the database</p>';
        }
        ?>
        <?php
        if ($db_results && $db_results->num_rows > 0) {
            include 'components/hp-card-square.php';
        } else {
            echo '<p>There are currently no users in the database</p>';
        }
        ?>
        <?php
        if ($db_results && $db_results->num_rows > 0) {
            include 'components/hp-card-square.php';
        } else {
            echo '<p>There are currently no users in the database</p>';
        }
        ?>
        <?php
        if ($db_results && $db_results->num_rows > 0) {
            include 'components/hp-card-square.php';
        } else {
            echo '<p>There are currently no users in the database</p>';
        }
        ?>
        <?php
        if ($db_results && $db_results->num_rows > 0) {
            include 'components/hp-card-square.php';
        } else {
            echo '<p>There are currently no users in the database</p>';
        }
        ?>
        <?php
        if ($db_results && $db_results->num_rows > 0) {
            include 'components/hp-card-square.php';
        } else {
            echo '<p>There are currently no users in the database</p>';
        }
        ?>

    </div>

</body>

</html>