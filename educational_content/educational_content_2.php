<?php
    include "../database.php";
    include "../header_footer/header.html";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Educational Content</title>
    <link rel="stylesheet" href="../CSS/educational_content.css">
    <link rel="stylesheet" href="../CSS/header_footer.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
</head>
<body>
    <div style="height: 7.5em;"></div>
    <div id="container1">
        <h1 class="head-title">Conserve Energy</h1>
        <p class="content">Understand how our actions impact the environment</p>
        <a href="Educational_Content.php"><button>Back</button></a>
    </div>
    <div id="container2">
        <h2 class="content-title">Educational Videos</h2>
        <div class="content-container">
            <iframe src="<?php echo $url_12; ?>" frameborder="0" allowfullscreen></iframe>
            <iframe src="<?php echo $url_13; ?>" frameborder="0" allowfullscreen></iframe>
        </div>
    </div>
    <div id="container3">
        <h2 class="content-title">Educational Articles</h2>
        <div class="content-container">
            <object type="text/html" data="<?php echo $url_14; ?>" class="articles"></object>
            <object type="text/html" data="<?php echo $url_15; ?>" class="articles"></object>
        </div>
    </div>
    <div id="container4">
        <h2 class="content-title">Educational Infographics</h2>
        <div class="content-container">
            <object data="<?php echo $url_16; ?>" type="image/png" class="infographics"></object>
            <object data="<?php echo $url_17; ?>" type="image/png" class="infographics"></object>
        </div>
    </div>
</body>
<script src="../JS/educational_content.js"></script>
</html>

<?php
    include "../header_footer/footer.html";
?>