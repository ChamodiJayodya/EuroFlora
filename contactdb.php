<?php
    require 'db.php';

    $file = $_FILES['file1'];
    $fileName = $_FILES['file1']['name']; // file name ex: apple.png
    $fileTempName = $_FILES['file1']['tmp_name'];//location
    $fileType = $_FILES['file1']['type'];
    $fileError = $_FILES['file1']['error'];
    $fileSize = $_FILES['file1']['size'];

    $allowed = array("jpg", "png", "jpeg");
    $fileActualExt = strtolower(end(explode(".", $fileName)));//extension
    $attachment = uniqid('', true).".".$fileActualExt;//new unique name

    $name = trim($_REQUEST['name']);
    $email = trim($_REQUEST['email']);
    $code = trim($_REQUEST['code']);
    $tele = trim($_REQUEST['phone']);
    $message = trim($_REQUEST['message']);

    try {
        $sql = "INSERT INTO contact_info (Name, Email,  Telephone, Order_code, Message, Attachment)
        VALUES (:name, :email, :code, :tele, :message, :attachment)";
        $stm = $conn->prepare($sql);
    
        $stm->bindParam(':name', $name);
        $stm->bindParam(':email', $email);
        $stm->bindParam(':code', $code);
        $stm->bindParam(':tele', $tele);
        $stm->bindParam(':message', $message);
        $stm->bindParam(':attachment', $attachment);
        $stm->execute();

        if($stm->rowCount() == 1){

            $fileDirection = "upload/".$attachment;
            move_uploaded_file($fileTempName, $fileDirection);
            // header("Location:./contact.php?er=1"); 
        }

    } catch (Exception $e){

        echo $e->getMessage();
    }
?>