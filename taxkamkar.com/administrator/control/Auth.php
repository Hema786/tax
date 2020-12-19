<?php
require "DBController.php";
class Auth {
    function getMemberByEmail($email) {
        $db_handle = new DBController();
        $query = "Select * from users where email = ? and role != 4 and role !=5";
        $result = $db_handle->runQuery($query, 's', array($email));
        return $result;
    }
    
    function getMemberByID($id) {
        $db_handle = new DBController();
        $query = "Select * from users where id = ?";
        $result = $db_handle->runQuery($query, 'i', array($id));
        return $result;
    }
    
	function getTokenByEmail($email,$expired) {
	    $db_handle = new DBController();
	    $query = "Select * from tbl_token_auth where email = ? and is_expired = ?";
	    $result = $db_handle->runQuery($query, 'si', array($email, $expired));
	    return $result;
    }
    
    function markAsExpired($tokenId) {
        $db_handle = new DBController();
        $query = "UPDATE tbl_token_auth SET is_expired = ? WHERE id = ?";
        $expired = 1;
        $result = $db_handle->update($query, 'ii', array($expired, $tokenId));
        return $result;
    }
    
    function insertToken($email, $random_password_hash, $random_selector_hash, $expiry_date) {
        $db_handle = new DBController();
        $query = "INSERT INTO tbl_token_auth (email, password_hash, selector_hash, expiry_date) values (?, ?, ?,?)";
        $result = $db_handle->insert($query, 'ssss', array($email, $random_password_hash, $random_selector_hash, $expiry_date));
        return $result;
    }
    
    function update($query) {
        mysqli_query($this->conn,$query);
    }
}
?>