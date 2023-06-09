<?php
include(".../config/connectionDB.php");
$id=$_GET['userId'];
$sql="DELETE FROM users WHERE id='$id'";
if($conn-> query($sql)===TRUE){
    if($conn->affected_rows > 0){
    echo "<script>alert('User has been delete')</script>";
    header('refresh:0;url=https://127.0.0.1/pets_m/back/src/delete_user.php');

}else{
    echo "<script>alert('User has not been found')</script>";
    header('refresh:0;url=https://127.0.0.1/pets_m/back/src/listUsers.php');
}
} else{
    echo"Error".$conn->error;
}
?>
