<?php
require_once('conexion.php');

class CatBD
{
    function consultaDB($id){
        $conn = new conexion();
        $link=mysqli_connect($conn->get_dbhost(),$conn->get_dbuser(),$conn->get_dbpass(),$conn->get_dbname()) or die('No pudo conectarse : ' .mysqli_error());
        $sql="SELECT * FROM catBalance WHERE id=$id";
        $result = mysqli_query($link,"SET NAMES 'utf8'");
        $result = mysqli_query($link, $sql) or die (mysqli_error($link));
		mysqli_close($link);
        return $result;
    }
}


?>