<?php
    class conexion
    {
        var $DB_USER='admin';
        var $DB_PASS="Empanada123";
        var $DB_HOST='dbpractice.cnqilokvmuzu.us-east-1.rds.amazonaws.com';
        var $DB_NAME='catBalance';

        function get_dbuser()
        {
            return $this->DB_USER;
        }
        function get_dbpass()
        {
            return $this->DB_PASS;
        }
        function get_dbhost()
        {
            return $this->DB_HOST;
        }
        function get_dbname()
        {
	        return $this->DB_NAME;
	    }
    }

?>