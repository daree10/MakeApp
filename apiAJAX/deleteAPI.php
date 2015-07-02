<?php
/*
 * 
 * checks if user id and user type is set
 * authentification
 * generic deleteAPI: arguments are row id and table name
 * 
 */
if (isset($_POST["session_id"]) && isset($_POST["session_tip"])) {
    if ($_POST["session_id"] == 4 && $_POST["session_tip"] == 3) {
        require_once '../class/baza.class.php';

        $baza = new Baza();
        if (isset($_POST["userIDDELETE"]) && isset($_POST["tableName"])) {
            $userIDDEL = $_POST["userIDDELETE"];
            $tableName = $_POST["tableName"];
            $sql = "DELETE FROM $tableName WHERE id = $userIDDEL;";
            $baza->updateDB($sql);
            echo json_encode(array("status" => "ok"));
        }
    }
}?>

