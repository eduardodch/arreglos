<html>
<head>
    <meta charset="utf-8">
    <title>Arreglos asociativos</title>
</head>
<body>
    <h3>Registro de empleados mediante arreglos asociativos</h3>
    <h4>Datos del empleado</h4>
       

       <form method="post" action="ejecutar.php" enctype="multipart/form-data">
        
       <table> 
        <tr>
            <td class=dato>nombre</td>
            <td><input name= "nombre"></td>
        </tr>
        <tr>
            <td class=dato>apellido</td>
            <td><input name="apellido"></td>
        </tr>
        <tr>
            <td class=dato>cedula</td>
            <td><input name="cedula"></td>
        </tr>
        <tr>
            <td class=dato>sueldo</td>
            <td><input name="sueldo"></td>
        </tr>
        <tr>
            <td class=dato>departamento</td>
            <td><input name="departamento"></td>
        </tr>
        <tr>
            <td class=dato>lugar de trabajo</td>
            <td><input name="lugar"></td>
        </tr>
        </table>
        <table>
            <tr>
                <td><input type="submit" name="btn" value="guardar"></td>
            </tr>
        </table>
    </form>
    
    <?php 
    if (isset($_POST['btn'])&& $_POST['btn'] == 'guardar'){
        
      
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $cedula = $_POST ['cedula'];
        $sueldo = $_POST ['sueldo'];
        $departamento = $_POST ['departamento'];
        $lugar = $_POST ['lugar'];
       
       echo "Los datos del empleado son:";
      
        $empleado = array( nombre=> $nombre, apellido=> $apellido, cedula=> $cedula, sueldo=> $sueldo, departamento=> $departamento, lugar=> $lugar); 
            foreach($empleado as $persona => $datos ){
                echo "Su ".$persona." es: ".$datos;
                echo "<br/>";
            }  
    }
?>
</body>
</html>