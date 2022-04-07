<?php
require_once('./forms.php');

$usuarios = getUsuarios($conn, 10);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table border="1" style="width: 100%">
        <thead>
            <th>ID</th>
            <th>Usuário</th>
            <th>Senha</th>
            <th>Ações</th>
        </thead>
        <tbody>
        <?php
            if($usuarios->num_rows > 0){
                while ($usuario = $usuarios->fetch_object()) {
                    echo "<tr>";
                    echo "<td>" . $usuario->id . "</td>";
                    echo "<td>" . $usuario->user . "</td>";
                    echo "<td>" . $usuario->pass . "</td>";
                    echo "<td> 
                            <a href='forms.php?id=$usuario->id'>Editar</a>
                            <a href='forms.php?operation=deleteUser&id=$usuario->id'>Deletar</a>
                    </td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='4'>Nenhum usuário encontrado!<td></tr>";
            }
           
        ?>
        </tbody>
    </table>

    
</body>

</html>