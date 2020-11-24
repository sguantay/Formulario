<?php
include_once "registro.php";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title> Formulario de Registro</title>
</head>
<body>
    <form action="#" method="POST">
     <table>
        <tr>
            <td>NOMBRE/S:</td>
            <td> <input type="text" id="nombres" name="nombres" required> </td>
        </tr>
        <tr>
            <td>APELLIDO/S:</td>
            <td> <input type="text" id="apellidos" name="apellidos" required> </td>
        </tr>
        <tr>
            <td>SEXO:</td>
            <td>
                <input type="radio" id="male" name="sexo" value="Masculino"  required>Masculino
                <input type="radio" id="femenino" name="sexo" value="Femenino" required>Femenino
                <input type="radio" id="otro" name="sexo" value="Otro" required>Otro
            </td>
        </tr>
        <tr>
            <td>NIVEL DE EDUCACIÓN ALCANZADO:</td>
            <td>
                <select name="nivelEducacion"  required>
                    <option value="Primario">Primario</option>
                    <option value="Secundario">Secundario</option>
                    <option value="Terciario/Universitario">Terciario/Universitario</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit" value="FINALIZAR" name="registro">
            </td>
        </tr>

    </table>
    </form>

</body>
</html>
