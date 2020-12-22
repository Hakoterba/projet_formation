<?php
    include('header.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body id="body_index">

<!--<h1>adfatim</h1>
    <p>forensium forensium splendore</p> -->

    <div id="carousel" class="carousel slide" data-ride="carousel" data-interval="3000">
        <ol class="carousel-indicators">
            <li data-target="#carousel" data-slide-to="0" class="active"></li>
            <li data-target="#carousel" data-slide-to="1"></li>
            <li data-target="#carousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="asset/images/hades.jpg" class="d-block">
            </div>
            <div class="carousel-item">
                <img src="asset/images/will_hunting.jpg" class="d-block">
            </div>
            <div class="carousel-item">
                <img src="asset/images/demon_slayer.jpg" class="d-block">
            </div>
        </div>

    <a href="#carousel" class="carousel-control-prev" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a href="#carousel" class="carousel-control-next" role="button" data-slide="prev">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    </div> 

</body>
</html>