
<!-- Includo il database -->
<?php
    include __DIR__ .'/partials/template/database.php';
    var_dump($database)
?>


<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <title>Vue Dischi</title>
</head>

<body>
    <div id="app">
        <header class="lightblue">
            <div class="logo">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/19/Spotify_logo_without_text.svg/1024px-Spotify_logo_without_text.svg.png" alt="Spotify Logo" srcset="">
            </div>
        </header>

    <!-- Includo il main -->
    <?php
        include __DIR__ .'/partials/template/main.php';
    ?>

    <script src="main.js"></script>
</body>

</html>