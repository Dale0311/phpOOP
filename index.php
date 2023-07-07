<?php
    interface LoginInterface{
        function login();
    }
    interface loginGmailInterface{
        function isLoggedInGmail();
    }

    class loginManual implements LoginInterface{
        public $username;
        public $password;
        function __construct($username, $password){
            $this->username = $username;            
            $this->password = $password;            
        }
        function login(){
            $con = mysqli_connect("localhost", "root", "", "users");
            $strSql = "SELECT * FROM users WHERE username='$this->username' && password='$this->password'";
            mysqli_query($con, $strSql);
        }
        function loginProcess(){
            $this->login();
        }
    }
    class loginWithGmail implements LoginInterface, loginGmailInterface{
        public $gmail;
        function isLoggedInGmail(){
            // logic here
        }
        function login(){
            $con = mysqli_connect("localhost", "root", "", "users");
            $strSql = "SELECT * FROM users WHERE gmail='$this->gmail;'";
            mysqli_query($con, $strSql);
        }

        function loginProcess(){
            $this->isLoggedInGmail();
            $this->login();
        }
    }
    
    $user1 = new loginManual("dale", "123pass");
    $user1->loginProcess();

    $user2 = new loginWithGmail();
    $user2->loginProcess();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $animal1 = new Dog();
        Feed::feedAnimal($animal1);
    ?>
</body>
</html>