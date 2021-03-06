
<!-- Includo il database -->
<?php
    include __DIR__ .'/partials/template/database.php';
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

<body class="darkblue">
    <div class="wrapper">
        <!-- Includo l'header -->
        <?php
                include __DIR__ .'/partials/template/header.php';
            ?>

            <!-- Includo il main -->
            <?php
                include __DIR__ .'/partials/template/main.php';
            ?>

            <!-- Includo il footer -->
            <?php
                include __DIR__ .'/partials/template/footer.php';
            ?>
    </div>
       

</body>

</html>