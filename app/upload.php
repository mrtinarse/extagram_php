<?php
error_log("HEYY YOT");

if (!empty($_POST["post"])) {

    error_log("HEYY YOT 2222222");

    $photoid;
    if(!empty($_FILES['photo']['name'])){
        $photoid = uniqid();
        move_uploaded_file($_FILES['photo']['tmp_name'], 'images/' . $photoid);
    }
    $db = new mysqli("database", "extagram_admin", "pass123", "extagram_db");
    $stmt = $db->prepare("INSERT INTO posts VALUES(?,?)");
    $stmt->bind_param("ss", $_POST["post"], $photoid);
    $stmt->execute();
    $stmt->close();
}

header("location: /");
?>
