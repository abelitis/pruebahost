<?php
 $dbhost = 'localhost';
 $dbuser = 'root';
 $dbpass = '';
 $dbname = 'libros';
 $mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

// Check connection
if ($mysqli->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$varnom1 =$_POST['nombre'];
$varnom2 =$_POST['paginas'];
$varnom3 =$_POST['autor'];

$sql = "INSERT INTO lib ".
               "(nombre, paginas, autor) "."VALUES ".
               "('$varnom1','$varnom2','$varnom3')";
           
            if ($mysqli->query($sql)) {
               printf("Record inserted successfully.<br />");
            }
            if ($mysqli->errno) {
               printf("Could not insert record into table: %s<br />", $mysqli->error);
            }
        
    $mysqli->close();



?>