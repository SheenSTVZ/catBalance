<?php

require_once("./../config/catBD.php");

class CatBT
{
    function consulta($id){
		$Obj_cat=new CatBD();
		return $Obj_cat->consultaDB($id);
	}
}

?>