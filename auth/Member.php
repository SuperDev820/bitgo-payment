<?php
namespace Phppot;

use \Phppot\DataSource;

class Member
{

    private $dbConn;

    private $ds;

    function __construct()
    {
        require_once "DataSource.php";
        $this->ds = new DataSource();
    }

    function getMemberById($memberId)
    {
        $query = "select * FROM registered_users WHERE id = ?";
        $paramType = "i";
        $paramArray = array($memberId);
        $memberResult = $this->ds->select($query, $paramType, $paramArray);
        
        return $memberResult;
    }

    public function getMemberByEmail($email)
    {
        $query = "select * FROM registered_users WHERE email = ?";
        $paramType = "s";
        $paramArray = array($email);
        $memberResult = $this->ds->select($query, $paramType, $paramArray);
        
        if(!empty($memberResult)) {
            return true;
        }
    }
    
    public function processLogin($email, $password) {
        $passwordHash = md5($password);
        $query = "select * FROM registered_users WHERE email = ? AND password = ?";
        $paramType = "ss";
        $paramArray = array($email, $passwordHash);
        $memberResult = $this->ds->select($query, $paramType, $paramArray);
        if(!empty($memberResult)) {
            $_SESSION["userId"] = $memberResult[0]["id"];
            return true;
        }
    }

    public function processSignup($username, $email, $password) {
        $passwordHash = md5($password);
        $query = "insert INTO registered_users (user_name, email, password) VALUES (?, ?, ?)";
        $paramType = "sss";
        $paramArray = array($username, $email, $passwordHash);
        $memberResult = $this->ds->insert($query, $paramType, $paramArray);
        // echo $memberResult;
        if(!empty($memberResult)) {
            $_SESSION["userId"] = $memberResult;
            return true;
        }
    }
}