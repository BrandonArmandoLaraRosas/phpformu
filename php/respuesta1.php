<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registro</title>
    <link rel="stylesheet" href="./css/hh.css">
    <script src="./js/formu.js"></script>
</head>
<body>
<?php
       
        $fus=$_POST['nombre'];
        $fuus=$_POST['user'];
        $fps=$_POST['pass'];
        $fpcs=$_POST['pass2'];
        $fccs=$_POST['email'];
        $fts=$_POST['tel'];
        $fgs=$_POST['sex'];
        $fns=$_POST['fchnac'];
        
    ?>
    <div>
        <fieldset>
        <div class="header">
        <h1>Registro de Usuario</h1>
    </fieldset>
    </div>
    <h2>New user</h2>
    <form action="pagina2.html" method="get" name="frmlogin" autocomplete="off">
    <fieldset>
        <legend>New user...</legend>
        <table>
            <tr>
                <td><p>nombre:<?php echo($fus)?></p></td>
            </tr>
            <tr>
                <td><p>Usuario:<?php echo($fuus)?></p></td>
               
            </tr>
            <tr>
                <td><p>Password:<?php echo($fps)?></p>
                

            </tr>
            <tr>
                <td><p>Confirmar Password:<?php echo($fpcs)?></p>
                
            </tr>
            <p>

                
            </p>
            <tr>
                <td>correo:<?php echo($fccs)?></td>
                <td></td>
            </tr>
            <tr>
                <td>telefono:<?php echo($fts)?></td>
                <td></td>

            </tr>
            <tr>
                <td>Genero:<?php echo($fgs)?></td>
                <td>
                    
                </select>
                </td>
            </tr>
            <tr>
                <td>Fecha de Nacimiento:<?php echo($fns)?></td>
                <td></td>

            </tr>
        </table>
        </table>
        <td></td>
    </fieldset>
</form>
</body>
</html>