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
    
    <?php require_once "../../app/controllers/templateControllers.php"; ?>
    <?php 
        $loadpage = new templateControllers("header");
        $loadpage->loadPage(); 
    ?>
    
    <div class="wrapper">
        <div class="title">
            <h3 class="text-primary">Register : สมัครสมาชิก</h3>
            <form action="">
                <div class="grid-input-3">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="USERNAME" id="username" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="text" name="USERNAME" id="password" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <input type="text" name="STATUS" id="status" class="form-control">
                    </div>
                </div>
                <div class="wrapper-btn">
                    <button class="btn btn-primary" type="submit" id="saveProcess">บันทึกข้อมูล</button>
                    <button class="btn btn-warning" type="reset"  id="reset">บันทึกข้อมูล</button>
                </div>
                
            </form>
        </div>
    </div>
    
</body>
<script>
    $.ajax({
        url:'../../app/views/service/getUsers.php',
        type:'get',
        data:{},
        success:(data)=>{
            console.log(data);
        }
    })
</script>
</html>