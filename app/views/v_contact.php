<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/css/header.css">
    <link rel="stylesheet" href="../../public/css/style.css">
    <link rel="stylesheet" href="../../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <script src="../../node_modules/jquery/dist/jquery.min.js"></script>
    <title>About</title>
</head>
<body>
    
    <?php 
        $loadpage = new templateControllers("header");
        $loadpage->loadPage(); 
    ?>
    <div class="wrapper">
        <div class="title">
            <h3 class="text-primary">Contact : ติดต่อ / สอบถาม</h3>
           
        </div>
    </div>
    
</body>
<script>
        console.log(1);
        $.ajax({
        url: "<?php echo $loadpage->getAjaxLink("insertUsers"); ?>",
        type:'POST',
        data:{},
        success:(data)=>{
            console.log(data);
        }
    })


</script>
</html>