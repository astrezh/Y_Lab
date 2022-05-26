<?php
 
    $name= mysql_escape_string($_POST['firstname']);
    $lastname= mysql_escape_string($_POST['lastname']);
 
    $strSQL = "INSERT INTO person_main(name, lastname) values ('$name','$lastname') ";
  
    mysql_query($strSQL) or die (mysql_error());

    mysql_close();
    ?>
