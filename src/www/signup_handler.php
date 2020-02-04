<?php
  
require_once "Dao.php";
session_start();

$dao = new Dao();

$password = $_POST['password'];
$regExp = preg_match('@[0-9]@', $password);
$errors = array();

        if(isset($_POST["username"])  && $_POST["username"] != ""){
                $username = $_POST['username'];
		$username_exists = $dao->checkUsername($username);
		
		if($username_exists){
               		$_SESSION["usernameExists"] = "Username Already Taken";
			$errors["exists"] = "Error Duplicate";
        	}

                $_SESSION["placehold_username"] = $username;
                unset($_SESSION['emptyUsername']);
        }
        else {
                unset($_SESSION['username']);
                $_SESSION["emptyUsername"] = "Must Enter a Username";
		$errors["errorUsername"] = "Error Username";
        }
        if(isset($_POST["password"])  && $_POST["password"] != ""){
                $_SESSION["placehold_password"] = $password;
                unset($_SESSION['emptyPassword']);
        }
        else{
                unset($_SESSION['password']);
                $_SESSION["emptyPassword"] = "Must Enter a Password";
		$errors["errorPassword"] = "Error Pass";
        }
	if(isset($_POST["confirmPassword"])  && $_POST["confirmPassword"] != ""){
		$confirmPassword = $_POST["confirmPassword"];

		if($password != $confirmPassword){
                	$_SESSION['dontMatch'] = " Passwords Don't Match";
                	$errors["matchError"] = "Error DPass";
        	}

                $_SESSION["placehold_confirmPassword"] = $confirmPassword;
                unset($_SESSION['cPassword']);
        }
        else{
                unset($_SESSION['confirmPassword']);
                $_SESSION["cPassword"] = "Must Confirm a Password";
		$errors["confirmError"] = "Error c Pass";
        }

	if(!$regExp && !isset($_SESSION["emptyPassword"])){
                $_SESSION["errorPassword"] = " Password Must Contain a Number";
		$errors["expError"] = "Error";
        }
	
	if(count($errors) == 0){
                $digist = password_hash($password,PASSWORD_DEFAULT);
                echo $digist;
		$dao->createUser($username, $digist);
		$_SESSION["valid_user"] = $username;
		header('Location:signIn.php');
	} else {
		header('Location:signup.php');
	}
