<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
</head>
<body>
    <table border="1" align="center">
        <tr><td colspan="7" align="center">Lista de todos los Usuarios</td></tr>
        <tr>
            <th>First name</th>
            <th>Last name</th>
            <th>Id</th>
            <th>Email</th>
            <th>Contraseña</th>
            <th>Tipo id</th>
            <th>Cellphone</th>
            
            <th>...</th>
        </tr>

        <?php
            include("con_db.php");
           $sql="SELECT * FROM usuario";

           $result=$conex->query($sql);

           if($result->num_rows>0){
                while($row=$result->fetch_assoc()){
                    echo"<tr>
                            <td>".$row['nombre']."</td>
                            <td>".$row['apellido']."</td>
                            <td>".$row['num_ID']."</td>
                            
                            <td>".$row['email']."</td>
                            <td>".$row['password']."</td>
                            
                            <td>".$row['tipo_id']."</td>
                            <td>".$row['teléfono']."</td>
                            <td>
                                <a href='http://127.0.0.1/pets_m/back/delete_user.php?userID=".$row['id']."'>
                                    <img src='../front/icons/eliminar.png' width='30'></a> &nbsp;&nbsp;
                                <a href='http://127.0.0.1/pets_m/back/edit_user.php?userID=".$row['id']."'>
                                    <img src='../front/icons/editar.png' width='30'></a>;
                            </td>
                        </tr>";
                            
                }
           }else{
            echo "no data found";
           }
        ?>
    </table>
</body>
</html>