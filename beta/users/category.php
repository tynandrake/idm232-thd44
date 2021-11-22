<?php
$page_title = 'Category';

include_once '../global/adminHeader.php'; ?>

<html>

<head>
    <link rel="stylesheet" href="../master.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Elsie:wght@900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
</head>

<body>
    <div class="hp-content" id="category-content">
        <div>
            <div>
                <h1 class="large-title elsie" id="category-title">CATEGORIES</h1>
            </div>
            <div class="filter-btn">
                <div>
                    <h4 class="roboto filter-btn-text">FILTER</h4>
                    <img src="../images/arrow-1.svg" alt="image of arrow">
                </div>
            </div>
        </div>
        <div class="category-grid">
            <div class="grid-item"></div>
            <div class="grid-item"></div>
            <div class="grid-item"></div>
            <div class="grid-item"></div>
            <div class="grid-item"></div>
            <div class="grid-item"></div>
            <div class="grid-item"></div>
            <div class="grid-item"></div>
            <div class="grid-item"></div>
        </div>
    </div>

</body>

</html>