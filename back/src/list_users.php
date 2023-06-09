<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Usuarios</title>
</head>
<body>
    <table border="1" align="center">
        <tr><td colspan="7" align="center">List All Users</td></tr>
        <tr>
            <th>First name</th>
            <th>Last name</th>
            <th>Id</th>
            <th>Address</th>
            <th>Cellphone</th>
            <th>Email</th>
            <th>Action</th>
        <tr>
        <?php
            include("../config/connectionDB.php");
            $sql="SELECT * FROM users";
            $result=$conn->query($sql);
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    echo
                    "<tr>
                        <td>".$row['first_name']."</td>
                        <td>".$row['last_name']."</td>
                        <td>".$row['number_id']."</td>
                        <td>".$row['address']."</td>
                        <td>".$row['celphone']."</td>
                        <td>".$row['email']."</td>
                        <td>
                            <a href='http://127.0.0.1/pets_m/back/src/delete.php?userId=".$row['id']."'><img src='../../front/icono/delet.jpeg' width='40'></a>&nbsp
                            <a href='http://127.0.0.1/pets_m/back/src/edit_user.php ?userId=".$row['id']."'><img src='../../front/icono/update.jpeg' width='40'></a>
                        </td>
                    <tr>";
                }
            }else{
                echo"No data found";
            }
        ?>

    </table>    


</body>
</html>
