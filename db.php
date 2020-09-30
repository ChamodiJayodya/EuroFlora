<?php
    try {
        $conn = new PDO("mysql:host=localhost;dbname=euroflora", "root", "");
    
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          }
      catch(PDOException $err) {
        echo "ERROR: Unable to connect: " . $err->getMessage();
      }

      
?>