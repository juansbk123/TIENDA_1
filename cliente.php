<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>TIENDA_ESIS</title>
</head>
<body>
	

<?php 
include("con_mysql.php");
 ?>


<form action="index.php" method="post" >

        <label><h2 align="center">DATOS DEL CLIENTE</h2></label> <br>
        <LABEL>ID_CLIENTE:</LABEL align="center"><input  type ="text" name="id_cli"  placeholder="escriba el id_cli"> 
         <LABEL>NOMBRE:</LABE align="center"> <input  type ="text" name="nom_cli"  placeholder="escriba su nombre">
         <LABEL>PUNT:</LABEL align="center"> <input  type ="text" name="punt_cli"  placeholder="escriba el puntaje">
          
          
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



			echo "ultimo dato ingresado: ";
 			var_dump($nom);//mostrar lo que se est ENVIADO
 			print("\n");
            var_export($punt);
            var_dump($id_cli);
  }
   ?>


<h1 align="center">LISTADO DE CLIENTES</h1>
    <table width="70%" border="1px" align="center">

    <tr align="center">
        <td>id_cliente</td>
        <td>Nom_cliente</td>
        <td>Puntos</td>
       
    </tr>
    <?php 
    $mostrar="SELECT * FROM  cliente";
    $ejecutar_1=mysqli_query($con,$mostrar);
        while($mostrar=mysqli_fetch_array($ejecutar_1)){
        ?>
            <tr>
                <td><?php echo $mostrar["id_cli"]?></td>
                <td><?php echo $mostrar["nombre"]?></td>
                <td><?php echo $mostrar["puntos"]?></td>
               
            </tr>
            <?php   
        }

     ?>
    </table>



</body>
</html>

  