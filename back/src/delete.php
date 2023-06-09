<?php
    include("../config/connectionDB.php");
    $id=$_GET['userId'];
    $sql="DELETE FROM users WHERE id='$id'";
    if($conn->query($sql)===TRUE){
        if($conn->affected_rows>0){
            echo"<script>alert('user has been delet')</script>";
            header('refresh:0; url=http://127.0.0.1/pets_m/back/src/list_users.php');
        }else{
            echo"<script>alert('user has not been')</script>";
            header('refresh:0; url=http://127.0.0.1/pets_m/back/src/list_users.php');
        }
    }else{
        echo"ERROR: ".$conn->error;
    }
?>