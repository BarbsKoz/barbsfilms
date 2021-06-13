<?php
    include 'backend/db.php';
    if(isset($_GET['id'])){
        $id_code = $_GET['id'];
        $sql_delete = "delete from movies where id= $id_code";
        $sql_query = mysqli_query($con, $sql_delete);
        if($sql_query){
            echo "<script>alert('The movie was deleted succesful')</script>";
            //echo "<script>prompt('Password:')</script>";
            echo "<script>window.location.replace('index.php')</script>";
        }else{
            echo "<script>alert('The movie wasn't deleted')</script>";
            echo "<script>window.location.replace('index.php')</script>";
        }
    }
?>