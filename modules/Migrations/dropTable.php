<?php
require "../autoload.php";

$mg = new Connection;
$stmt = Connection::$PDO->query('SHOW TABLES');
$stmt->execute();


?>
<link rel="stylesheet" href="../../node_modules/bootstrap/dist/css/bootstrap.min.css">
<script src="../../node_modules/jquery/dist/jquery.min.js"></script>
<link rel="stylesheet" href="./style.css">
<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <table class="table table-bordered">
                <thead class="bg bg-primary">
                    <tr>
                        <th>#</th>
                        <th>TableName</th>
                        <th>#</th>
                    </tr>
                </thead>
                <tbody>
                    <form action="./services/dropTableService.php" method="post">
                    <?php
                        foreach ($stmt as $key => $value):
                    ?>
                    <tr>
                        <th><?php echo $key+1; ?></th>
                        <th><?php echo $value['Tables_in_db_localhost'];?></th>
                        <input type="hidden" value="<?php echo $value['Tables_in_db_localhost'];?>" name="tbname">
                        <th><button type="submit" id="droptable"  class="btn btn-danger">ลบตาราง</button></th>
                    </tr>
                    <?php
                        endforeach;
                    ?>
                    </form>
                </tbody>
            </table>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>
<script>
    // $('#droptable').click(function(e){
    //     e.preventDefault();
    //     $.ajax({
    //     url:'./services/dropTableService.php',
    //     type: 'post',
    //     data:{
    //         status: 'drop',
    //         tbname: $('#tbname').val()
    //     },success:(data)=>{
    //         console.log(data);
    //     }
    // })
    // })
</script>
