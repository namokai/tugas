<?php
/**
 * using mysqli_connect for database connection
 */

 $databaseHost = 'localhost';
 $databaseName = 'crud_db';
 $databaseUsername = 'root';
 $databasePassword = 'm4ul034p41';

 $mysqli = mysqli_connect($databaseHost, $databaseUsername , $databasePassword , $databaseName);
?>