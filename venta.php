<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	




<?php 
include("con_mysql.php");


 ?>


<form action="index.php" method="post" >

        <label>DATOS CLIENTE</label> <br>
        <LABEL>ID_CLIENTE:</LABEL><input type ="text" name="id_cli"  placeholder="escriba el id_cli">> <br>
         <div><LABEL>NOMBRE:</LABEL> <input type ="text" name="nom_cli"  placeholder="escriba su nombre">></div>
         <div> <LABEL>PUNT:</LABEL> <input type ="text" name="punt_cli"  placeholder="escriba el puntaje">></div>
          
          
          <br>
          <br>

          <select name="opciones"> 
      <option value = "0">crear</option> 
      <option value = "1">eliminar</option> 
      <option value = "2">Edita</option> 
      <option value = "3">dividir</option>  
          </select> 
          <br>
          <br>

      <input type ="submit" name="aplicar" value="aplicar">  
    </from>

 </body>
   </html>

   <?php
        if(isset($_POST['aplicar']))
        {
        	   $id_cli= $_POST['id_cli'];
               $nom= $_POST['nom_cli'];
           	   $punt= $_POST['punt_cli']; 
         

            	$insertar="INSERT INTO cliente(id_cli,nombre,puntos) VALUES('$id_cli','$nom','$punt')";
		$ejecutar=mysqli_query($con,$insertar);

		//si sucede ejecitar entoces y si no.
		if($ejecutar)
		{

			echo "<h3>Insertado correctamente</h3>";
			
		}
		else echo "<h2> !ha ocurrido un problema al momento de insertar. posiblemente no ha llenado los campos.</h2>";
 			var_dump($nom);//mostrar lo que se est ENVIADO
            var_export($punt);
            var_dump($id_cli);

/*

            var_dump($nom);//mostrar lo que se est ENVIADO
            var_export($punt);
            var_dump($id_cli);


            $juan=conexion::conectar()->prepare("insert into cliente(id_cli,nombre,puntos) value($id_cli,$nom,$punt)");
            $juan->execute();

*/
        }
   ?>
        

<?php 







