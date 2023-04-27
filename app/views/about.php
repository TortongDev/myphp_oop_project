<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <style>
        .wrapper-about {
            margin-block: 20px;
        }
    </style>
    <title>About</title>
</head>
<body>
    <?php require_once "../../app/controllers/templateControllers.php"; ?>
    <?php 
        $loadpage = new templateControllers("header");
        $loadpage->loadPage(); 
    ?>
    <div class="wrapper-about container">
        <div class="title-about">
            <h3 class="text-primary">About : เกี่ยวกับพวกเรา</h3>
        </div>
    </div>
</body>
</html>