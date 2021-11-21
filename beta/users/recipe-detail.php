<?php
$page_title = 'Detail';

include_once $_SERVER['DOCUMENT_ROOT'] . '/global/header.php';

$sql = 'SELECT * FROM recipe';
$db_results = mysqli_query($con, $sql);

?>
<html>
    <?php
        if ($db_results && $db_results->num_rows > 0) {
            include $_SERVER['DOCUMENT_ROOT'] . '/components/detail-content.php';
        } else {
            echo '<p>There are currently no users in the database</p>';
        }
    ?>

</body>

</html>